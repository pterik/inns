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

<script type="text/javascript" src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/library/slimbox/js/mootools.js"></script>
<script type="text/javascript" src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/library/slimbox/js/slimbox.js"></script>
<link rel="stylesheet" href="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/library/slimbox/css/slimbox.css" type="text/css" media="screen" />

<link rel="stylesheet" href="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/library/slideshow/css/image-slideshow.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/library/ez_css.css" type="text/css" />


<?php if ($er_usemap && mosGetParam($_REQUEST, 'option', '') == "com_ezrealty") { ?>

<?php if ( $er_mapsys == 1 ){ ?>

<script src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=<?php echo $er_mapapi;?>" type="text/javascript"></script>

<script type="text/javascript">

<!--

//<![CDATA[

// This Javascript is based on code provided by the
// Blackpool Community Church Javascript Team
// http://www.commchurch.freeserve.co.uk/   
// http://www.econym.demon.co.uk/googlemaps/

var map = null;
var geocoder = null;
var gmarkers = [];
var htmls = [];
var to_htmls = [];
var from_htmls = [];
var i = 0;
      var baseIcon = new GIcon();
          baseIcon.iconSize=new GSize(32,32);
          baseIcon.shadowSize=new GSize(56,32);
          baseIcon.iconAnchor=new GPoint(16,32);
          baseIcon.infoWindowAnchor=new GPoint(16,0);
          
      var forsale = new GIcon(baseIcon, "http://maps.google.com/mapfiles/kml/pal3/icon31.png", null, "http://maps.google.com/mapfiles/kml/pal3/icon31s.png");



// A function to create the marker and set up the event window

function createMarker(point, address, icon)
{
    var marker = new GMarker(point, icon);
    
    // The info window version with the "to here" form open

    to_htmls[i] = '<div style="font-family: Verdana, Arial, Helvetica, sans-serif; margin-bottom: 5px;">' +
        '<div style="margin-bottom: 8px;"><strong>Address:</strong><br />' + address + '</div>' +
        '<strong>Get Directions:</strong> To here - <a href="javascript:fromhere(' + i + ')">From here</a><br />' +
        '<span style="font-size: 10px; color: #999999;">Start Address:</span>' +
        '<form target="_blank" action="http://maps.google.com/maps" method="get">' +
        '<input type="text" name="saddr" id="saddr" value="" />' +
        '<input type="submit" value="Go" />' +
        '<input type="hidden" name="daddr" value="' + address + '" />' +
        '<input type="hidden" name="hl" value="en" /></form></div>';
        
    // The info window version with the "to here" form open 

from_htmls[i] = '<div style="font-family: Verdana, Arial, Helvetica, sans-serif; margin-bottom: 5px;">' +
        '<div style="margin-bottom: 8px;"><strong>Address:</strong><br />' + address + '</div>' +
        '<strong>Get Directions:</strong> <a href="javascript:tohere(' + i + ')">To here</a> - From here<br />' +
        '<span style="font-size: 10px; color: #999999;">End Address:</span>' +
        '<form target="_blank" action="http://maps.google.com/maps" method="get">' +
        '<input type="text" name="daddr" id="daddr" value="" />' +
        '<input type="submit" value="Go" />' +
        '<input type="hidden" name="saddr" value="' + address + '" />' +
        '<input type="hidden" name="hl" value="en" /></form></div>';
        
    // The inactive version of the direction info

    html = '<div style="font-family: Verdana, Arial, Helvetica, sans-serif; margin-bottom: 5px;">' +
        '<div style="margin-bottom: 8px;"><strong>Address:</strong><br />' + address + '</div>' +
        '<strong>Get Directions:</strong> <a href="javascript:tohere('+i+')">To here</a> - <a href="javascript:fromhere('+i+')">From here</a></div>';

    GEvent.addListener(marker, "click", function() {
      marker.openInfoWindowHtml(html);
    });
    
    gmarkers[i] = marker;
    htmls[i] = html;
    i++;
    return marker;
}

// functions that open the directions forms
function tohere(i)
{
    gmarkers[i].openInfoWindowHtml(to_htmls[i]);
}
function fromhere(i)
{
    gmarkers[i].openInfoWindowHtml(from_htmls[i]);
}
        
function showAddress(address)
{
    if (geocoder)
    {
        geocoder.getLatLng
        (
            address, function(point)
            {
                if (!point)
                {
                    alert(address + " not found");
                }
                else
                {
                    map.setCenter(point, 13);
                    var marker = new GMarker(point, forsale);
                    map.addOverlay(marker);
                    map.addOverlay(createMarker(point, address, forsale));
                }
            }
        );
    }
}

//]]!>

//-->

</script>

<?php } ?>

<?php if ( $er_mapsys == 2 ){ ?>

<script type="text/javascript" src="http://maps.yahooapis.com/v3.04/fl/javascript/apiloader.js?appid=<?php echo $er_mapapi;?>"></script>
<style type="text/css">
#mapContainer { 
  height: <?php echo $er_mapheight;?>px; 
  width: <?php echo $er_mapwidth;?>px; 
} 
</style> 

<?php } ?>

<?php if ( $er_mapsys == 3 ){ ?>

<script src="http://maps.google.com/maps?file=api&amp;v=2.x&amp;key=<?php echo $er_mapapi;?>" type="text/javascript"></script>

<?php } ?>

<?php } ?>

