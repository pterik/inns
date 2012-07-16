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


/** The EZ Realty Slideshow has been built based on slideshow code by Alf Magne Kalleland **/

/***********************************************************************************************
* Copyright (c) 2005 - Alf Magne Kalleland post@dhtmlgoodies.com
* UPDATE LOG:
* March, 10th, 2006 : Added support for a message while large image is loading
* Get this and other scripts at www.dhtmlgoodies.com
* You can use this script freely as long as this copyright message is kept intact.
***********************************************************************************************/ 


//Don't allow direct linking
  defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

?>

<script type="text/javascript" src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/library/slideshow/js/image-slideshow.js"></script>
<script type="text/javascript" src="includes/js/overlib_mini.js"></script>


<script type="text/javascript">

<!-- Begin bookmarking
function addBookmark(title,url) {
	if (window.sidebar) { 
		window.sidebar.addPanel(title, url,""); 
	} else if( document.all ) {
		window.external.AddFavorite( url, title);
	} else if( window.opera && window.print ) {
		return true;
	}
}
//  End -->


</script>

<?php

		$number = $row->price;

		if ($er_currencyformat==0) {
			$formatted_price = number_format($number);
		} else if ($er_currencyformat==1) {
			$formatted_price = number_format($number, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price = number_format($number, 0,",",".");
		}

		$number2 = $row->bond;

		if ($er_currencyformat==0) {
			$formatted_price2 = number_format($number2);
		} else if ($er_currencyformat==1) {
			$formatted_price2 = number_format($number2, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price2 = number_format($number2, 0,",",".");
		}

?> 

<?php

$status1 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=500,height=400,directories=no,location=no';
$status2 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=580,directories=no,location=no';

$link1 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=contactseller&amp;id='. $row->id .'&amp;Itemid='. $Itemid;
$link2 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=smsseller&amp;id='. $row->id .'&amp;Itemid='. $Itemid;
$link3 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=print&amp;id='. $row->id .'&amp;Itemid='. $Itemid;
$link4 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=contactbusiness&amp;id='. $row->id .'&amp;Itemid='. $Itemid;
$link5 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=smsbusiness&amp;id='. $row->id .'&amp;Itemid='. $Itemid;
$link6 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=recommend&amp;id='. $row->id .'&amp;Itemid='. $Itemid;
$link7 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=maillist&amp;id='. $row->id .'&amp;Itemid='. $Itemid;
$link8 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=lightbox&amp;id='. $row->id .'&amp;Itemid='. $Itemid;

$link9 = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=showprofile&amp;id='. $row->mid .'&amp;Itemid='. $Itemid );
$link10 = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=viewlightbox&amp;Itemid='. $Itemid );
$link11 = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=viewcategory&amp;id='. $row->cid .'&amp;Itemid='. $Itemid );

?>


<table border="0" width="100%">
	<tr>
		<td colspan="2">
			<table border="0" width="100%">
	<tr>
		<td valign="top" width="60%" class="h2"><?php if ( $row->unit_num ){ ?><?php echo $row->unit_num;?> <?php } ?><?php if ( $row->street_num ){ ?><?php echo $row->street_num;?> <?php } ?><?php if ( $row->address2 ){ ?><?php echo $row->address2;?>, <?php } ?><?php if ( $row->proploc ){ ?><?php echo $row->proploc;?> <?php } ?><?php if ( $er_usepc && $row->postcode ){ ?><?php echo $row->postcode;?><?php } ?></td>
		<td valign="top" width="40%"><div align="right">
<?php if ( $er_useprofile && $er_viewarrange && $er_profaccess <= $my->gid && $row->dealerpublished ) { ?>
<span><a class="readit" href="javascript:void(0)" onclick="window.open('<?php echo $link1; ?>','win2','<?php echo $status1; ?>');" title="<?php echo _EZREALTY_REQUESTMORE;?>"><?php echo _EZREALTY_REQUESTMORE;?></a></span>
<?php } ?>
<?php if ( $er_useprofile == 0 && $er_viewarrange ) { ?>
<span><a class="readit" href="javascript:void(0)" onclick="window.open('<?php echo $link4; ?>','win2','<?php echo $status1; ?>');" title="<?php echo _EZREALTY_REQUESTMORE;?>"><?php echo _EZREALTY_REQUESTMORE;?></a></span>
<?php } ?>
</div></td>
	</tr>
			</table>
</td>
	</tr>
	<tr>
		<td valign="top" width="50%">
		<table border="0" width="100%">
			<tr>
				<td>

<!--START IMAGE TABLE-->			

<div id="ez_slideshow">
	<div id="previewPane">
<?php if ($row->image1) { ?>
		<img src="components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image1;?>" width="<?php echo $er_imgwidth;?>" alt="" />
<?php } else { ?>
		<img src="components/com_ezrealty/<?php echo $er_imagedirectory;?>/nothumb.gif" width="<?php echo $er_imgwidth;?>" alt="" />
<?php } ?>
		<span id="waitMessage"><?php echo _EZREALTY_LOADING_IMAGE;?></span>	
		<div id="largeImageCaption"></div>
	</div>
<?php if ($row->image1) { ?>
	<div id="galleryContainer">
		<div id="arrow_left"><img src="components/com_ezrealty/library/slideshow/images/arrow_left.gif" alt="" /></div>
		<div id="arrow_right"><img src="components/com_ezrealty/library/slideshow/images/arrow_right.gif" alt="" /></div>
		<div id="theImages">
				<!-- Thumbnails -->
<?php if ($row->image1) { ?>
				<a href="#" onclick="showPreview('components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image1;?>','1');return false"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?>/th/<?php echo $row->image1;?>" alt="" /></a>
<?php } ?>
<?php if ($row->image2) { ?>
				<a href="#" onclick="showPreview('components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image2;?>','2');return false"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?>/th/<?php echo $row->image2;?>" alt="" /></a>
<?php } ?>
<?php if ($row->image3) { ?>
				<a href="#" onclick="showPreview('components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image3;?>','3');return false"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?>/th/<?php echo $row->image3;?>" alt="" /></a>
<?php } ?>
<?php if ($row->image4) { ?>
				<a href="#" onclick="showPreview('components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image4;?>','4');return false"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?>/th/<?php echo $row->image4;?>" alt="" /></a>
<?php } ?>
<?php if ($row->image5) { ?>
				<a href="#" onclick="showPreview('components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image5;?>','5');return false"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?>/th/<?php echo $row->image5;?>" alt="" /></a>
<?php } ?>
<?php if ($row->image6) { ?>
				<a href="#" onclick="showPreview('components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image6;?>','6');return false"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?>/th/<?php echo $row->image6;?>" alt="" /></a>
<?php } ?>
<?php if ($row->image7) { ?>
				<a href="#" onclick="showPreview('components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image7;?>','7');return false"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?>/th/<?php echo $row->image7;?>" alt="" /></a>
<?php } ?>
<?php if ($row->image8) { ?>
				<a href="#" onclick="showPreview('components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image8;?>','8');return false"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?>/th/<?php echo $row->image8;?>" alt="" /></a>
<?php } ?>
<?php if ($row->image9) { ?>
				<a href="#" onclick="showPreview('components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image9;?>','9');return false"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?>/th/<?php echo $row->image9;?>" alt="" /></a>
<?php } ?>
<?php if ($row->image10) { ?>
				<a href="#" onclick="showPreview('components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image10;?>','10');return false"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?>/th/<?php echo $row->image10;?>" alt="" /></a>
<?php } ?>
<?php if ($row->image11) { ?>
				<a href="#" onclick="showPreview('components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image11;?>','11');return false"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?>/th/<?php echo $row->image11;?>" alt="" /></a>
<?php } ?>
<?php if ($row->image12) { ?>
				<a href="#" onclick="showPreview('components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image12;?>','12');return false"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?>/th/<?php echo $row->image12;?>" alt="" /></a>
<?php } ?>
				<!-- End thumbnails -->


				<!-- Image captions -->	
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<div class="imageCaption"> </div>
				<!-- End image captions -->


				<div id="slideEnd"></div>
		</div>
	</div>
<?php } ?>
</div>


<!--END IMAGE TABLE-->			
<br />
</td>
			</tr>
			<tr>
				<td><span class="h3"><?php echo _EZREALTY_PROPERTY_TOOLS;?></span>

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="listtableborder">
	<tr>
		<td>

<table border="0" width="100%" class="listbkgr">
					<tr>
						<td width="50%" valign="top">
<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link3; ?>','win2','<?php echo $status2; ?>');" title="<?php echo _EZREALTY_VIEWDET_PRINT;?>"><?php echo _EZREALTY_VIEWDET_PRINT;?></a><br />
<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=results&amp;type=0&amp;cid=0&amp;locid=$row->locid&amp;stid=0&amp;cnid=0&amp;postcode=&amp;mls_id=&amp;sold=0&amp;maxprice=&amp;minprice=&amp;maxbed=&amp;minbed=&amp;featured=0&amp;direction=ASCPRICE&amp;limit=5&amp;limitstart=0");?>"><?php echo _EZREALTY_VIEW_NEARBY;?></a><br />
<?php if ( $er_useshortlist ){ ?>
<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link8; ?>','win2','<?php echo $status1; ?>');" title="<?php echo _EZREALTY_LISTINGS_ADDLIGHTBOX;?>"><?php echo _EZREALTY_LISTINGS_ADDLIGHTBOX;?></a><br />
<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="<?php echo $link10;?>"><?php echo _EZREALTY_VIEW_LIGHTBOX;?></a>
<?php } ?>
</td>


<td width="50%" valign="top">

<?php if ( $er_viewrecommend ){ ?>
<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link6; ?>','win2','<?php echo $status1; ?>');" title="<?php echo _EZREALTY_VIEWDET_SEND_FRIEND;?>"><?php echo _EZREALTY_VIEWDET_SEND_FRIEND;?></a><br />
<?php } ?>
<?php if ($row->ezdesc){?>
<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="#" onmouseover="return overlib('<?php echo $row->ezdesc;?>', CAPTION, '<?php echo $row->proploc; ?>');" onmouseout="return nd();"><?php echo _EZREALTY_LOCALITY_DEMOGRAPHICS;?></a><br />
<?php } ?>
<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="<?php echo $mosConfig_live_site. '/index.php?option=com_ezrealty&amp;task=detail&amp;id='. $id.'&amp;Itemid='.$Itemid;?>" onmousedown="addBookmark('<?php echo stripslashes( $er_bizname );?>','<?php echo $mosConfig_live_site. '/index.php?option=com_ezrealty&amp;task=detail&amp;id='. $id.'&amp;Itemid='.$Itemid;?>')" onmouseover="return overlib('<?php echo _EZREALTY_VIEWDET_FAVS;?>')" onmouseout="return nd();"><?php echo _EZREALTY_VIEWDET_FAVS;?></a><br />
<?php if ( $er_viewmailing ){ ?>
<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link7; ?>','win2','<?php echo $status1; ?>');" title="<?php echo _EZREALTY_VIEWDET_MAILING;?>"><?php echo _EZREALTY_VIEWDET_MAILING;?></a>
<?php } ?>

</td>


					</tr>
				</table>

</td>


					</tr>
				</table>

				</td>
			</tr>
			<tr>
				<td><br />

<?php if ( $er_usemap ){ ?>

<?php if ( $er_mapsys == 1 ){ ?>

<!--START GOOGLE MAPPING BOX STUFF-->			

<script type="text/javascript">
//<![CDATA[
function domap()
{
    if (GBrowserIsCompatible())
    {
        map = new GMap2(document.getElementById("map"));
        map.addControl(new GSmallMapControl());
        map.addControl(new GMapTypeControl());
        map.setCenter(new GLatLng(34.20725938207231, -77.947998046875), 15);
        map.setMapType(G_MAP_TYPE);
        geocoder = new GClientGeocoder();
        showAddress("<?php if ( $er_usemapstnum && $row->street_num ){ ?><?php echo $row->street_num;?> <?php } ?><?php if ( $er_usemapstreet && $row->address2 ){ ?><?php echo $row->address2;?> <?php } ?><?php if ( $er_usemaplocid && $row->proploc ){ ?><?php echo $row->proploc;?> <?php } ?><?php if ( $er_usemapstid && $row->statename ){ ?><?php echo $row->statename;?>, <?php } ?><?php if ( $row->countryname ){ ?><?php echo $row->countryname;?><?php } ?>") ;
    }
    else
    {
        alert("<?php echo _EZREALTY_MAPPING_INCOMPATIBLE;?>");
    }
}


//]]>
</script>

										<div align="center">
											<table border="0" align="center">
												<tr valign='top'><td valign='top' align="left">
    <form action="#" onsubmit="showAddress(this.address.value); return false">
      <div id="map" style="width: <?php echo $er_mapwidth;?>px; height: <?php echo $er_mapheight;?>px"></div>
    </form>
</td></tr>
											</table>
										</div>

<!--END GOOGLE MAPPING BOX-->			

<?php } ?>

<?php if ( $er_mapsys == 2 ){ ?>


<!--START YAHOO MAPPING BOX-->			

										<div align="center">
											<table border="0" align="center">
												<tr valign='top'><td valign='top' align="left">

<div align="center"><a href="http://maps.yahoo.com/dd?taddr=<?php echo $row->street_num;?> <?php echo $row->address2;?>&tcsz=<?php echo $row->proploc;?>,+<?php echo $row->statename;?>+<?php echo $row->postcode;?>&tcountry=<?php echo $row->countryname;?>" target="_blank"><strong><?php echo _EZREALTY_DRIVING_DIRECTIONS;?></strong></a></div>
<div id="mapContainer"></div>

<script type="text/javascript">
// Create and display Map object at the address and with zoom level 3.
//Include your application ID.
var map = new Map("mapContainer", "YahooDemo", 
  "<?php if ( $er_usemapstnum && $row->street_num ){ ?><?php echo $row->street_num;?> <?php } ?><?php if ( $er_usemapstreet && $row->address2 ){ ?><?php echo $row->address2;?>, <?php } ?><?php if ( $er_usemaplocid && $row->proploc ){ ?><?php echo $row->proploc;?> <?php } ?><?php if ( $er_usemapstid && $row->statename ){ ?><?php echo $row->statename;?> <?php } ?> <?php echo $row->countryname;?>", 3); 

map.addWidget(new SatelliteControlWidget());


// Make the map draggable 
map.addTool( new PanTool(), true );

// Create a POI marker object
marker1 = new CustomPOIMarker( '<?php if ( $er_usemapstnum && $row->street_num ){ ?><?php echo $row->street_num;?> <?php } ?><?php if ( $er_usemapstreet && $row->address2 ){ ?><?php echo $row->address2;?>, <?php } ?><?php if ( $er_usemaplocid && $row->proploc ){ ?><?php echo $row->proploc;?> <?php } ?><?php if ( $er_usemapstid && $row->statename ){ ?><?php echo $row->statename;?> <?php } ?>', '(<?php if ( $row->sold==1 ){ ?><?php echo _EZREALTY_DETAILS_MARKET1;?><?php } ?>
<?php if ( $row->sold==2 ){ ?><?php echo _EZREALTY_DETAILS_MARKET2;?><?php } ?>
<?php if ( $row->sold==3 ){ ?><?php echo _EZREALTY_DETAILS_MARKET3;?><?php } ?>
<?php if ( $row->sold==4 ){ ?><?php echo _EZREALTY_DETAILS_MARKET4;?><?php } ?>
<?php if ( $row->sold==5 ){ ?><?php echo _EZREALTY_DETAILS_MARKET5;?><?php } ?>
<?php if ( $row->sold==6 ){ ?><?php echo _EZREALTY_DETAILS_MARKET6;?><?php } ?>
)',
  '<?php echo $row->adline;?>', '0xFF0000', '0xFFFFFF'); 

// Add the POI marker to the map and display it 
map.addMarkerByAddress( marker1, "<?php if ( $er_usemapstnum && $row->street_num ){ ?><?php echo $row->street_num;?> <?php } ?><?php if ( $er_usemapstreet && $row->address2 ){ ?><?php echo $row->address2;?>, <?php } ?><?php if ( $er_usemaplocid && $row->proploc ){ ?><?php echo $row->proploc;?> <?php } ?><?php if ( $er_usemapstid && $row->statename ){ ?><?php echo $row->statename;?> <?php } ?> <?php echo $row->countryname;?>"); 

// Create a Navigator Widget object 
navWidget = new NavigatorWidget();  
// Add the Navigator Widget to the map and display it 
map.addWidget(navWidget); 

</script>

</td></tr>
											</table>
										</div>

<!--END YAHOO MAPPING BOX-->			

<?php } ?>



<?php if ( $er_mapsys == 3 && $row->declat && $row->declong ){ ?>

<!--START GOOGLE COORDINATES MAPPING BOX STUFF-->			


<div align="center">

    <script type="text/javascript">
    //<![CDATA[

function domap()
{

    // Check to see if this browser can run the Google API
    if (GBrowserIsCompatible()) {

      gmarkers = [];
      htmls = [];
      to_htmls = [];
      from_htmls = [];
      i=0;

      // Display the map, with some controls and set the initial location 
      var map = new GMap2(document.getElementById("map"));
      map.addControl(new GLargeMapControl());
      map.addControl(new GMapTypeControl());
      map.setCenter(new GLatLng( <?php echo $row->declat;?>,<?php echo $row->declong;?>), 15);
    
      // Set up three markers with info windows 
    
      var point = new GLatLng( <?php echo $row->declat;?>,<?php echo $row->declong;?>);
      var marker = createMarker(point,"<?php echo $row->adline;?>","<?php echo $row->adline;?>")
      map.addOverlay(marker);

    }
    
    // display a warning if the browser was not compatible
    else {
      alert("<?php echo _EZREALTY_MAPPING_INCOMPATIBLE;?>");
    }

}
    // This Javascript is based on code provided by the
    // Blackpool Community Church Javascript Team
    // http://www.commchurch.freeserve.co.uk/   
    // http://www.econym.demon.co.uk/googlemaps/

    //]]>

      // A function to create the marker and set up the event window
      function createMarker(point,name,html) {
        var marker = new GMarker(point);

        // The info window version with the "to here" form open
        to_htmls[i] = html + '<br /><?php echo _EZREALTY_MAP_DIRECTIONS;?>: <strong><?php echo _EZREALTY_MAP_TOHERE;?></strong> - <a href="javascript:fromhere(' + i + ')"><?php echo _EZREALTY_MAP_FROMHERE;?></a>' +
           '<br /><?php echo _EZREALTY_MAP_START;?>:<form action="http://maps.google.com/maps" method="get" target="_blank">' +
           '<input type="text" size="40" maxlength="40" name="saddr" id="saddr" value="" /><br />' +
           '<input value="<?php echo _EZREALTY_MAP_DIRECTIONS;?>" type="submit">' +
           '<input type="hidden" name="daddr" value="' + point.lat() + ',' + point.lng() + 
                  // "(" + name + ")" + 
           '"/>';
        // The info window version with the "to here" form open
        from_htmls[i] = html + '<br /><?php echo _EZREALTY_MAP_DIRECTIONS;?>: <a href="javascript:tohere(' + i + ')"><?php echo _EZREALTY_MAP_TOHERE;?></a> - <strong><?php echo _EZREALTY_MAP_FROMHERE;?></strong>' +
           '<br /><?php echo _EZREALTY_MAP_END;?>:<form action="http://maps.google.com/maps" method="get"" target="_blank">' +
           '<input type="text" size="40" maxlength="40" name="daddr" id="daddr" value="" /><br />' +
           '<input value="<?php echo _EZREALTY_MAP_DIRECTIONS;?>" type="submit">' +
           '<input type="hidden" name="saddr" value="' + point.lat() + ',' + point.lng() +
                  // "(" + name + ")" + 
           '"/>';
        // The inactive version of the direction info
        html = html + '<br /><?php echo _EZREALTY_MAP_DIRECTIONS;?>: <a href="javascript:tohere('+i+')"><?php echo _EZREALTY_MAP_TOHERE;?></a> - <a href="javascript:fromhere('+i+')"><?php echo _EZREALTY_MAP_FROMHERE;?></a>';

        GEvent.addListener(marker, "click", function() {
          marker.openInfoWindowHtml(html);
        });
        gmarkers[i] = marker;
        htmls[i] = html;
        i++;
        return marker;
      }

      // functions that open the directions forms
      function tohere(i) {
        gmarkers[i].openInfoWindowHtml(to_htmls[i]);
      }
      function fromhere(i) {
        gmarkers[i].openInfoWindowHtml(from_htmls[i]);
      }

    </script>

   <div id="map" style="width: <?php echo $er_mapwidth;?>px; height: <?php echo $er_mapheight;?>px"></div>

</div>

<!--END GOOGLE COORDINATES MAPPING BOX-->			

<?php } ?>

<?php } ?>


</td>
			</tr>












		</table>
		</td>
		<td valign="top" width="50%">
		<table border="0" width="100%">
			<tr>
				<td class="h3"><?php echo _EZREALTY_PROPERTY_INFO;?><br /><hr /></td>
			</tr>
			<tr>
				<td>
		<table border="0" width="100%">
			<tr>
				<td><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_VIEWDET_PRICE;?>:</strong>&nbsp;

<?php if ( $row->freq==0 ) { ?>
<?php if ( $row->showprice==0 ) { ?><?php echo $row->priceview;?>
<?php } else { ?>

		<?php if ( $er_currencypos==0 ) { ?>
		<?php echo $er_currencysign.''.$formatted_price;?>
		<?php } else { ?>
		<?php echo $formatted_price.' '.$er_currencysign;?>
		<?php } ?>

<?php } ?>
<?php } ?>

<?php if ( $row->freq>0 ) { ?>
<?php if ( $row->showprice==0 ) { ?><?php echo $row->priceview;?>
<?php } else { ?>

		<?php if ( $er_currencypos==0 ) { ?>
		<?php echo $er_currencysign.''.$formatted_price;?>
		<?php } else { ?>
		<?php echo $formatted_price.' '.$er_currencysign;?>
		<?php } ?>

<?php if ( $row->freq==1 ){ ?><?php echo _EZREALTY_RENTAL_NIGHTLY;?><?php } ?>
<?php if ( $row->freq==2 ){ ?><?php echo _EZREALTY_RENTAL_WEEKLY;?><?php } ?>
<?php if ( $row->freq==3 ){ ?><?php echo _EZREALTY_RENTAL_FNIGHT;?><?php } ?>
<?php if ( $row->freq==4 ){ ?><?php echo _EZREALTY_RENTAL_MONTH;?><?php } ?>
<?php if ( $row->freq==5 ){ ?><?php echo _EZREALTY_RENTAL_SQFT;?><?php } ?>
<?php if ( $row->freq==6 ){ ?><?php echo _EZREALTY_RENTAL_SQMTR;?><?php } ?>
<?php if ( $row->freq==7 ){ ?><?php echo _EZREALTY_RENTAL_SPARE;?><?php } ?>
<?php } ?>
<?php } ?>
<br />
<?php if ( $row->bond != 0.00 ){ ?>
<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_BOND;?>:</strong>&nbsp;
							<?php if ( $er_currencypos==0 ) { ?>
							<?php echo $er_currencysign.''.$formatted_price2;?>
							<?php } else { ?>
							<?php echo $formatted_price2.' '.$er_currencysign;?>
							<?php } ?>
<br />
<?php } ?>

<?php if ( $row->sold ) { ?>
<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_MARKET;?>:</strong>&nbsp;
<?php if ( $row->sold==1 ){ ?><?php echo _EZREALTY_DETAILS_MARKET1;?><?php } ?>
<?php if ( $row->sold==2 ){ ?><?php echo _EZREALTY_DETAILS_MARKET2;?><?php } ?>
<?php if ( $row->sold==3 ){ ?><?php echo _EZREALTY_DETAILS_MARKET3;?><?php } ?>
<?php if ( $row->sold==4 ){ ?><?php echo _EZREALTY_DETAILS_MARKET4;?><?php } ?>
<?php if ( $row->sold==5 ){ ?><?php echo _EZREALTY_DETAILS_MARKET5;?><?php } ?>
<?php if ( $row->sold==6 ){ ?><?php echo _EZREALTY_DETAILS_MARKET6;?><?php } ?>
<br />
<?php } ?>
<?php if ( $row->mls_id ) { ?>
<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DET_MLSID;?>:</strong>&nbsp;<?php echo $row->mls_id;?><br />
<?php } ?>
<?php if ( $row->agent_id ) { ?>
<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DET_AGID;?>:</strong>&nbsp;<?php echo $row->agent_id;?><br />
<?php } ?>

<?php if ( $er_usebookings && $row->viewbooking ){ ?>
<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_BOOKINGS; ?>:</strong>&nbsp;<?php echo parseThruBots($row->bookinglink); ?><br />
<?php } ?>
<?php if ( !$er_usemap && $row->mapref ){ ?>
<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_VIEWDET_LOCATION;?>:</strong>&nbsp;<a target="_blank" href="<?php echo $row->mapref;?>"><?php echo _EZREALTY_VIEWDET_MAP;?></a><br />
<?php } ?>

<?php if ( $er_useflv==0 && $row->vtour ){ ?>
<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_VIEWDET_TOUR;?>:</strong>&nbsp;<a target="_blank" href="<?php echo $row->vtour;?>"><?php echo _EZREALTY_VIEWDET_VTOUR;?></a><br />
<?php } ?>


</td>
			</tr>
		</table>
	</td>
		</tr>
<?php if ( $er_useprofile ) { ?>
		<tr>
			<td>
				<table width="100%" border="0" cellpadding="5">

			<tr>
				<td><strong><?php echo _EZREALTY_LISTED_BY;?>:</strong>&nbsp;
<?php if ( $er_profaccess <= $my->gid ) { ?>
<?php if ($row->dealerpublished) { ?><a href="<?php echo $link9;?>" title="<?php echo _EZREALTY_PROFILER_CBPROFILE;?>"><?php } ?><strong><?php echo $row->dealer_name;?>&nbsp;<?php if ($row->dealer_type == 1) { ?>(<?php echo _EZREALTY_LISTER_AGENT;?>)<?php } ?>
<?php if ($row->dealer_type == 2) { ?>(<?php echo _EZREALTY_LISTER_OWNER;?>)<?php } ?>
<?php if ($row->dealer_type == 3) { ?>(<?php echo _EZREALTY_LISTER_BROKER;?>)<?php } ?>
</strong><?php if ($row->dealerpublished) { ?></a><?php } ?><?php if ($row->dealerpublished == 0) { ?><br /><?php echo _EZREALTY_PNPFC;?><?php } ?>
<?php } else { ?><strong><?php echo _EZREALTY_PROFACCESS_DENIED;?></strong><?php } ?></td>
</td>
			</tr>
				</table>
			</td>
		</tr>
<?php } ?>


<tr>
<td>
<br />

<?php
$tabs->startPane("displayPane");
$tabs->startTab( _EZREALTY_TABS_SUMMARY,"summary-page");
?>

<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td valign="top" width="60%">
			<table border="0" width="100%" cellspacing="3" cellpadding="3">



			<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DET_ADDNUM;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->id;?></td></tr>

										    	<?php if ( $row->type ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTING_TYPE;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left">
<?php if ( $row->type==1 ){ ?><?php echo _EZREALTY_TYPE_SALE;?><?php } ?>
<?php if ( $row->type==2 ){ ?><?php echo _EZREALTY_TYPE_RENTAL;?><?php } ?>
<?php if ( $row->type==3 ){ ?><?php echo _EZREALTY_TYPE_LEASE;?><?php } ?>
<?php if ( $row->type==4 ){ ?><?php echo _EZREALTY_TYPE_AUCTION;?><?php } ?>
<?php if ( $row->type==5 ){ ?><?php echo _EZREALTY_TYPE_SWAP;?><?php } ?>
<?php if ( $row->type==6 ){ ?><?php echo _EZREALTY_TYPE_TENDER;?><?php } ?>
</td></tr>
												<?php } ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_CATEGORY_CATNAME;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=viewcategory&amp;id=$row->cid");?>"><?php echo $row->category;?></a></td></tr>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_VIEWDET_LOCALITY;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><a href="#" onmouseover="return overlib('<?php echo $row->ezdesc;?>', CAPTION, '<?php echo $row->proploc; ?>');" onmouseout="return nd();"><?php echo stripslashes($row->proploc); ?></a></td></tr>
												<?php if ( $row->county ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DET_COUNTY;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->county;?></td></tr>
												<?php } ?>
												<?php if ( !$er_usemap && $row->mapref ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_VIEWDET_LOCATION;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><a target="_blank" href="<?php echo $row->mapref;?>"><?php echo _EZREALTY_VIEWDET_MAP;?></a></td></tr>
												<?php } ?>
												<?php if ( $er_useflv==0 && $row->vtour ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_VIEWDET_TOUR;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><a target="_blank" href="<?php echo $row->vtour;?>"><?php echo _EZREALTY_VIEWDET_VTOUR;?></a></td></tr>
												<?php } ?>
												<?php if ( $er_usebookings && $row->viewbooking ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_BOOKINGS; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo parseThruBots($row->bookinglink); ?></td>
												<?php } ?>


			</table>
		</td>
	</tr>
</table>


<?php
$tabs->endTab();
$tabs->startTab(_EZREALTY_TABS_DETAILS,"details-page");
?>

<table border="0" width="100%" cellspacing="3" cellpadding="3">

										    	<?php if ( $row->age ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_VIEWDET_AGE;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->age;?></td></tr>
												<?php } ?>
										    	<?php if ( $row->landtype ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_VIEWDET_LAND;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->landtype;?></td></tr>
												<?php } ?>
										    	<?php if ( $row->frontage ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_FRONTAGE;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->frontage;?></td></tr>
												<?php } ?>
										    	<?php if ( $row->depth ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_DEPTH;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->depth;?></td></tr>
												<?php } ?>
												<?php if ( $row->bedrooms==0.5 ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_BEDROOMS;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_STUDIO;?></td></tr>
												<?php } ?>
												<?php if ( $row->bedrooms >= 1 ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_BEDROOMS;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->bedrooms;?></td></tr>
												<?php } ?>
												<?php if ( $row->totalrooms ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_TOTALROOMS;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->totalrooms;?></td></tr>
												<?php } ?>
												<?php if ( $row->livingarea ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_LIVINGAREA;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->livingarea;?></td></tr>
												<?php } ?>
												<?php if ( $row->bathrooms ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_BATHROOMS;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->bathrooms;?></td></tr>
												<?php } ?>
												<?php if ( $row->parking ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_PARKING;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->parking;?></td></tr>
												<?php }  ?>
												<?php if ( $row->ctown ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_VIEWDET_TOWN;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->ctown;?></td></tr>
												<?php } ?>
												<?php if ( $row->ctport ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_VIEWDET_TPORT;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->ctport;?></td></tr>
												<?php } ?>

												<?php if ( $row->schooldist ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTINGS_SCHOOLDIST;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->schooldist;?></td></tr>
												<?php } ?>
												<?php if ( $row->preschool ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTINGS_PRESCHOOL;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->preschool;?></td></tr>
												<?php } ?>
												<?php if ( $row->primaryschool ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTINGS_PRIMARYSCHOOL;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->primaryschool;?></td></tr>
												<?php } ?>
												<?php if ( $row->highschool ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTINGS_HIGHSCHOOL;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->highschool;?></td></tr>
												<?php } ?>
												<?php if ( $row->university ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTINGS_UNIVERSITY;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->university;?></td></tr>
												<?php } ?>
												<?php if ( $row->hofees ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTINGS_HOFEES;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->hofees;?></td></tr>
												<?php } ?>

												<?php if ( $row->custom1 ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_CONFIG_CPI1; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->custom1;?></td></tr>
												<?php } ?>
												<?php if ( $row->custom2 ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_CONFIG_CPI2; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->custom2;?></td></tr>
												<?php } ?>
												<?php if ( $row->custom3 ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_CONFIG_CPI3; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->custom3;?></td></tr>
												<?php } ?>
												<?php if ( $row->custom4 ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_CUSTOM4; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->custom4;?></td></tr>
												<?php } ?>
												<?php if ( $row->custom5 ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_CUSTOM5; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->custom5;?></td></tr>
												<?php } ?>

										    	<?php if ( $row->takings ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_TAKINGS;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->takings;?></td></tr>
												<?php } ?>
										    	<?php if ( $row->returns ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_RETURNS;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->returns;?></td></tr>
												<?php } ?>
												<?php if ( $row->netprofit ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_NETPROFIT;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->netprofit;?></td></tr>
												<?php } ?>
												<?php if ( $row->bustype ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_BUSTYPE;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->bustype;?></td></tr>
												<?php } ?>
												<?php if ( $row->bussubtype ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_BUSSUBTYPE;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->bussubtype;?></td></tr>
												<?php } ?>
												<?php if ( $row->stock ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_STOCK;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->stock;?></td></tr>
												<?php } ?>
												<?php if ( $row->fixtures ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_FIXTURES;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->fixtures;?></td></tr>
												<?php } ?>
												<?php if ( $row->fittings ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_FITTINGS;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->fittings;?></td></tr>
												<?php } ?>
												<?php if ( $row->squarefeet ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_SQUARES;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->squarefeet;?></td></tr>
												<?php } ?>
												<?php if ( $row->percentoffice ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_POFFICE;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->percentoffice;?></td></tr>
												<?php } ?>
												<?php if ( $row->percentwarehouse ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_PWAREHOUSE;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->percentwarehouse;?></td></tr>
												<?php } ?>
												<?php if ( $row->loadingfac ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_LOADING;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->loadingfac;?></td></tr>
												<?php } ?>

												<?php if ( $row->fencing ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_FENCING;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->fencing;?></td></tr>
												<?php }  ?>
												<?php if ( $row->rainfall ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_RAINFALL;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->rainfall;?></td></tr>
												<?php } ?>
												<?php if ( $row->soiltype ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_SOILTYPE;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->soiltype;?></td></tr>
												<?php } ?>
												<?php if ( $row->grazing ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_GRAZING; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->grazing;?></td></tr>
												<?php } ?>
												<?php if ( $row->cropping ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_CROPPING; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->cropping;?></td></tr>
												<?php } ?>
												<?php if ( $row->irrigation ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_IRRIGATION; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->irrigation;?></td></tr>
												<?php } ?>
												<?php if ( $row->waterresources ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_WATERRESOURCES;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->waterresources;?></td></tr>
												<?php }  ?>
												<?php if ( $row->carryingcap ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_CARRYINGCAP;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->carryingcap;?></td></tr>
												<?php } ?>
												<?php if ( $row->storage ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_STORAGE;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->storage;?></td></tr>
												<?php } ?>
												<?php if ( $row->services ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_SERVICES; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->services;?></td></tr>
												<?php } ?>

		</table>


<!--END SPECIFICATIONS TABLE-->			





<!--START ADDITIONAL PROPERTY FEATURES TABLE-->			


			<?php
		$tabs->endTab();
?>

<?php if ( !$row->pool && !$row->fplace && !$row->bbq && !$row->gazebo && !$row->lug 
&& !$row->bir && !$row->heating && !$row->airco && !$row->shops && !$row->schools ) { ?>


<?php } else { ?>

<?php

		$tabs->startTab(_EZREALTY_TABS_FEATURES,"features-page");
			?>


		<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr>
<td valign="top">



<table border="0" width="100%" cellspacing="3" cellpadding="3">

												<?php if ( $row->pool ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF1; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->fplace ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF2; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->bbq ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF3; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->gazebo ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF4; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->lug ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF5; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->bir ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF6; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->heating ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF7; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->airco ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF8; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->shops ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF9; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->schools ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF10; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->elevator ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF12; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->extra1 ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF13; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->extra2 ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF14; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->extra3 ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF15; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->extra4 ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF16; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->extra5 ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF17; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->extra6 ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF18; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->extra7 ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF19; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->extra8 ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF20; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>

												<?php if ( $row->pets ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF11; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left">
<?php if ( $row->pets==1 ){ ?>
<?php echo _EZREALTY_CONFIG_NO; ?>
<?php } if ( $row->pets==2 ){ ?>
<?php echo _EZREALTY_CONFIG_YES; ?>
<?php } if ( $row->pets==3 ){ ?>
<?php echo _EZREALTY_HELPER_PETS; ?>
<?php } ?>
</td>
												</tr>
												<?php } ?>


		</table>

</td>
</tr>
</table>


<!--END ADDITIONAL PROPERTY FEATURES TABLE-->			


<?php
$tabs->endTab();

}


		if ( $er_useflv==1 && $row->vtour) {

		$tabs->startTab(_EZREALTY_TABS_VIDEO,"map-page");
			?>

							<table width="100%">
								<tr>
									<td>
										<div align="center">

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" height="<?php echo $er_flvheight;?>" width="<?php echo $er_flvwidth;?>">
<param name="salign" value="lt" />
<param name="quality" value="high" />
<param name="scale" value="noscale" />  
<param name="wmode" value="transparent" />
<param name="movie" value="<?php echo $mosConfig_live_site;?>/components/com_ezrealty/library/flash/flvplay.swf" />  
<param name="FlashVars" value="&amp;streamName=<?php echo $row->vtour;?>&amp;skinName=<?php echo $mosConfig_live_site;?>/components/com_ezrealty/library/flash/flvskin&amp;autoPlay=false&amp;autoRewind=true" />
<embed flashvars="&amp;streamName=<?php echo $row->vtour;?>&amp;autoPlay=false&amp;autoRewind=true&amp;skinName=<?php echo $mosConfig_live_site;?>/components/com_ezrealty/library/flash/flvskin" quality="high" scale="noscale" salign="LT" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" src="<?php echo $mosConfig_live_site;?>/components/com_ezrealty/library/flash/flvplay.swf" wmode="transparent" height="<?php echo $er_flvheight;?>" width="<?php echo $er_flvwidth;?>"></embed>
</object>

										</div>
									</td>
								</tr>
							</table>

<?php
$tabs->endTab();

 }

$tabs->endPane();
?>



</td>
</tr>



			<tr>
				<td><?php if ($row->propdesc) { ?><?php echo parseThruBots(stripslashes($row->propdesc));?><?php } else { ?><?php echo parseThruBots($row->smalldesc);?><?php } ?></td>
			</tr>



<?php if ( $row->openhouse && $row->ohouse_desc ){ ?>
			<tr>
				<td><span class="h3"><?php echo _EZREALTY_OPENHOUSE_DETAILS; ?></span>

	<table border="0" cellpadding="0" cellspacing="0" width="100%" class="listtableborder">
		<tr>
			<td>
				<table border="0" width="100%" class="listbkgr" cellpadding="5">
					<tr>
						<td valign="top"><?php echo $row->ohouse_desc; ?></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

				</td>
			</tr>
<?php } ?>


		</table>
		</td>
	</tr>
</table>

