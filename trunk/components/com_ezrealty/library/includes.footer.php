<?php

#############################################################################
#                                                                           #
#  EZ Realty 5.0.0 - A Mambo Real Estate component                          #
#  By: Kathy Strickland (aka PixelBunyiP)                                   #
#  Copyright (C) 2006 K.J. Strickland, Raptor Developments Pty Ltd          #
#  All rights reserved                                                      #
                                         #
#  Released as a commercial component!                                      #
#                                                                           #
#############################################################################

//Don't allow direct linking
  defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

?>

    <script type="text/javascript">
    //<![CDATA[

    if (GBrowserIsCompatible()) {
      // this variable will collect the html which will eventually be placed in the side_bar
      var side_bar_html = "";
    
      // arrays to hold copies of the markers and html used by the side_bar
      // because the function closure trick doesnt work there
      var gmarkers = [];
      var htmls = [];
      var i = 0;

      var icon = new GIcon();
      icon.image = "components/com_realtymap/images/red.png";
      icon.shadow = "components/com_realtymap/images/shadow.png";
      icon.iconSize = new GSize(12, 20);
      icon.shadowSize = new GSize(22, 20);
      icon.iconAnchor = new GPoint(6, 20);
      icon.infoWindowAnchor = new GPoint(5, 1);      

      // === Create an associative array of GIcons() ===
      var gicons = [];

      gicons["cat1"] = new GIcon(icon,"components/com_realtymap/images/red.png");
      gicons["cat2"] = new GIcon(icon,"components/com_realtymap/images/blue.png");
      gicons["cat3"] = new GIcon(icon,"components/com_realtymap/images/green.png");
      gicons["cat4"] = new GIcon(icon,"components/com_realtymap/images/yellow.png");
      gicons["cat5"] = new GIcon(icon,"components/com_realtymap/images/white.png");
      gicons["cat6"] = new GIcon(icon,"components/com_realtymap/images/orange.png");



      // arrays to hold variants of the info window html with get direction forms open
      var to_htmls = [];
      var from_htmls = [];

      // A function to create the marker and set up the event window
      function createMarker(point,name,html,icontype) {
        // === create a marker with the requested icon ===
        var marker = new GMarker(point, gicons[icontype]);
        GEvent.addListener(marker, "click", function() {
          marker.openInfoWindowHtml(html);
        });

        // The info window version with the "to here" form open
        to_htmls[i] = html + '<br><?php echo _EZ_MAP_DIRECTIONS;?>: <strong><?php echo _EZ_MAP_TOHERE;?></strong> - <a href="javascript:fromhere(' + i + ')"><?php echo _EZ_MAP_FROMHERE;?></a>' +
           '<br><?php echo _EZ_MAP_START;?>:<form action="http://maps.google.com/maps" method="get" target="_blank">' +
           '<input type="text" size=40 maxlength=40 name="saddr" id="saddr" value="" /><br>' +
           '<input value="Get Directions" type="submit">' +
           '<input type="hidden" name="daddr" value="' + point.lat() + ',' + point.lng() + 
                  // "(" + name + ")" + 
           '"/>';
        // The info window version with the "to here" form open
        from_htmls[i] = html + '<br><?php echo _EZ_MAP_DIRECTIONS;?>: <a href="javascript:tohere(' + i + ')"><?php echo _EZ_MAP_TOHERE;?></a> - <b><?php echo _EZ_MAP_FROMHERE;?></b>' +
           '<br><?php echo _EZ_MAP_END;?>:<form action="http://maps.google.com/maps" method="get"" target="_blank">' +
           '<input type="text" size=40 maxlength=40 name="daddr" id="daddr" value="" /><br>' +
           '<input value="Get Directions" type="submit">' +
           '<input type="hidden" name="saddr" value="' + point.lat() + ',' + point.lng() +
                  // "(" + name + ")" + 
           '"/>';
        // The inactive version of the direction info
        html = html + '<br><?php echo _EZ_MAP_DIRECTIONS;?>: <a href="javascript:tohere('+i+')"><?php echo _EZ_MAP_TOHERE;?></a> - <a href="javascript:fromhere('+i+')"><?php echo _EZ_MAP_FROMHERE;?></a>';

        GEvent.addListener(marker, "click", function() {
          marker.openInfoWindowHtml(html);
        });
        // save the info we need to use later for the side_bar
        gmarkers[i] = marker;
        htmls[i] = html;
        // add a line to the side_bar html
        side_bar_html += '<a href="javascript:myclick(' + i + ')">' + name + '</a><br>';
        i++;
        return marker;
      }


      // This function picks up the click and opens the corresponding info window
      function myclick(i) {
        gmarkers[i].openInfoWindowHtml(htmls[i]);
      }

      // functions that open the directions forms
      function tohere(i) {
        gmarkers[i].openInfoWindowHtml(to_htmls[i]);
      }
      function fromhere(i) {
        gmarkers[i].openInfoWindowHtml(from_htmls[i]);
      }


      // create the map
      var map = new GMap2(document.getElementById("realtymap"));
      map.addControl(new GLargeMapControl());
      map.addControl(new GMapTypeControl());
      map.setCenter(new GLatLng(<?php echo $ez_declat;?>, <?php echo $ez_declong;?>), <?php echo $ez_mapres;?>);


      // Read the data from the php file
      var request = GXmlHttp.create();

      $mapfile='components/com_realtymap/realtymap.listings.php';

      request.open("GET", $mapfile, true);

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          var xmlDoc = GXml.parse(request.responseText);

          // obtain the array of markers and loop through it
          var markers = xmlDoc.documentElement.getElementsByTagName("marker");
          
          for (var i = 0; i < markers.length; i++) {

            // obtain the attribues of each marker
            var lat = parseFloat(markers[i].getAttribute("lat"));
            var lng = parseFloat(markers[i].getAttribute("lng"));
            var point = new GLatLng(lat,lng);
            var html = markers[i].getAttribute("html");
            var label = markers[i].getAttribute("label");

            // === read the icontype attribute ===
            var icontype = markers[i].getAttribute("icontype");
            // === create the marker, passing the icontype string ===
            var marker = createMarker(point,label,html,icontype);
            map.addOverlay(marker);
          }


<?php if ($ez_usesidebar) { ?>

          // put the assembled side_bar_html contents if being used into the side_bar div
          document.getElementById("side_bar").innerHTML = side_bar_html;

<?php } ?>

        }
      }
      request.send(null);
    }

    else {
      alert("<?php echo _EZ_API_WARNING;?>");
    }

    // This Javascript is based on code provided by the
    // Blackpool Community Church Javascript Team
    // http://www.commchurch.freeserve.co.uk/   
    // http://www.econym.demon.co.uk/googlemaps/

    //]]>
    </script>
