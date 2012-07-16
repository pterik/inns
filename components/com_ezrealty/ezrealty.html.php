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


# Don't allow direct linking
  defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


function parseThruBots($string)
	{
	global $_MAMBOTS;
	$page = '';
	$_MAMBOTS->loadBotGroup( 'content' );
	$obj = new stdClass;
	$obj->text=$string;
	$params =	new dummy_params_ezrealtyclass();
	$results = $_MAMBOTS->trigger( 'onPrepareContent', array( &$obj, &$params, $page ), true );   
	$string= $obj->text;
	return $string;
	}

class dummy_params_ezrealtyclass
	{
	function get()
		{
		$a=0;
		}
	}


class HTML_ezrealty {


    /**************************************************\
  		 	FRONT PAGE CATEGORY LIST DISPLAY
    \**************************************************/


function showCategories( $option, &$rows, $gid, $bizintro ) {
global $mainframe, $Itemid, $er_catthumbwidth, $er_colcount, $er_colwidth;

$mainframe->appendMetaTag( 'title', _EZREALTY_CATEGORIES );
$mainframe->setPageTitle( _EZREALTY_CATEGORIES );


?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td><?php echo $bizintro;?></td>
	</tr>
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_CATEGORIES;?></td>
	</tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td valign="top">

<?php

$colcount 	= $er_colcount;
$colwidth 	= $er_colwidth;


echo "<table border='0' width='100%'>";
echo "<tr>";

    $num_rows=ceil( count( $rows ) / 1 );
	if ($num_rows > 0) {

    $rowcounter = 0;
    foreach($rows as $row) {
      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";

$link1 = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=viewcategory&amp;id='. $row->cid .'&amp;Itemid='. $Itemid );

?>

		<td valign="top">

			<table border="0" width="100%" cellpadding="5" onmouseover="EZOver(this)" onmouseout="EZOut(this)" onclick="location.href='<?php echo $link1;?>'">
				<tr>

<?php if ( $row->image <> "" ){ ?>

					<td valign="top" width="<?php echo $er_catthumbwidth;?>">
					<a href="<?php echo $link1;?>">
					<img src='images/stories/<?php echo $row->image;?>' align='left' border='0' width='<?php echo $er_catthumbwidth;?>' alt='category' /></a>
					</td>

<?php } ?>

					<td valign="top">
						<span class="h3"><?php echo $row->name;?></span> <font size='-7'>(<?php echo CountCont( $row->cid ) ?><?php if (CountCont( $row->cid ) == 1 ){ ?> <?php echo _EZREALTY_PROPERTY;?><?php } else { ?> <?php echo _EZREALTY_PROPERTIES;?><?php } ?>)</font><br />
						<?php echo $row->description;?> ... <a href="<?php echo $link1;?>"><strong><?php echo _EZREALTY_VIEWPROP;?></strong></a>
					</td>
				</tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">
				<tr>
					<td><img src="components/com_ezrealty/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>
				</tr>
			</table>


		</td>

<?php
	$rowcounter++;
	}
    if ($rowcounter%$colcount<>0) {
      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {
        echo "<td width='$colwidth' valign='top'> </td>";
      }
    }


}else{


}

    echo "</tr></table>";

?>

		</td>
	</tr>


</table>

<?php

}


    /**************************************************\
                CATEGORY CONTENTS DISPLAY
    \**************************************************/


function viewCategory( $option, &$rows, $id, $catname, &$pageNav, $total ) {
global $database, $Itemid, $mainframe, $mosConfig_live_site, $mosConfig_list_limit, $er_currencysign, $er_thumbwidth;
global $er_perpage, $er_imagedirectory, $er_thumbcreation, $er_currencyformat, $er_useprofile;
global $er_colcount,$er_colwidth, $er_currencypos, $mosConfig_absolute_path, $er_listtemplate, $er_useshortlist;

$colcount 	= $er_colcount;
$colwidth 	= $er_colwidth;

$mainframe->appendMetaTag( 'title', $catname );
$mainframe->setPageTitle( $catname );

DEFINE("TEMPLATE_PATH","components/com_ezrealty/forms/list_templates/".$er_listtemplate);

?>

<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td class="sectiontableheader"><?php echo $catname;?></td>
	</tr>
</table>

<?php

    $num_rows=ceil( count( $rows ) / 1 );
	if ($num_rows > 0) {

	if ($er_listtemplate == 'multicolumn') {


echo "<table border='0' width='100%'>";
echo "<tr>";

    $rowcounter = 0;
    foreach($rows as $row) {
      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";


if (file_exists(TEMPLATE_PATH.'/listshort.ezrealty.php')) {
  include(TEMPLATE_PATH.'/listshort.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}

	$rowcounter++;
	}
    if ($rowcounter%$colcount<>0) {
      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {
        echo "<td width='$colwidth' valign='top'> </td>";
      }
    }
    echo "</tr></table>";

} else {

	$k = 0;
	for ($i=0, $n=count( $rows ); $i < $n; $i++) {
	$row = &$rows[$i];

		$number = $row->price;

		if ($er_currencyformat==0) {
			$formatted_price = number_format($number);
		} else if ($er_currencyformat==1) {
			$formatted_price = number_format($number, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price = number_format($number, 0,",",".");
		}



if (file_exists(TEMPLATE_PATH.'/listshort.ezrealty.php')) {
  include(TEMPLATE_PATH.'/listshort.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}


}

	} 

}else{

?>

<table width='100%' border='0' cellspacing='1' cellpadding='0'>
	<tr>
		<td class='h3'><br /><br /><?php echo _EZREALTY_NOCATLISTINGS;?><br /><br /><br /></td>
	</tr>
</table>
			<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">
				<tr>
					<td><img src="components/com_ezrealty/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>
				</tr>
			</table>

<?php

}

?>

<form name="adminForm" action="index.php?option=<?php echo $option;?>&amp;Itemid=<?php echo $Itemid;?>" method="get">
<input type="hidden" name="option" value="<?php echo $option;?>" />
<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
<input type="hidden" name="task" value="<?php echo $_REQUEST['task'];?>" />
<input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>" />

<?php

$link='index.php?option='.$option.'&amp;task=viewcategory&amp;id='.$id .'&amp;Itemid='. $Itemid;
?>

<table width='100%' border='0' cellspacing='1' cellpadding='0'>
    <tr>
        <td colspan="2"><div align="center"><?php echo $pageNav->writePagesLinks($link); ?></div></td>
    </tr>
    <tr>
        <td><?php echo $pageNav->writePagesCounter();?></td><td><div align="right"><?php echo _EZREALTY_LISTINGS_DISPLAYNUM;?> <?php echo $pageNav->getLimitBox($link);?></div></td>
    </tr>
</table>

</form>

<?php


}



    /**************************************************\
           DISPLAY DETAILS OF THE SELECTED ITEM
    \**************************************************/


function viewDetails( $option, &$row ) {
global $database, $Itemid, $mainframe, $mosConfig_live_site, $id, $my, $er_template, $er_currencysign, $er_imgwidth;
global $er_thumbwidth, $er_imagedirectory, $er_viewarrange, $er_viewrecommend, $er_viewmailing, $er_special_feature;
global $er_paypal, $er_thumbcreation, $er_bizname, $er_memlistings, $er_mobile, $er_mapsys, $er_usepc;
global $er_colour1, $er_usemap, $er_mapwidth, $er_mapheight, $er_currencyformat, $er_currencypos, $er_profaccess;
global $er_useprofile, $er_usesms, $er_usemapstnum, $er_usemapstreet, $er_usemaplocid, $er_usemapstid;
global $er_flvheight, $er_flvwidth, $er_useflv, $mosConfig_absolute_path, $er_usebookings, $er_useshortlist;
global $er_useprofile, $er_profaccess;

DEFINE("MAINTEMPLATE_PATH","components/com_ezrealty/forms/templates/".$er_template);

$tabs = new mosTabs(0);

$mainframe->appendMetaTag( 'description', 	$row->metadesc );
$mainframe->appendMetaTag( 'keywords', 		$row->metakey );
$mainframe->appendMetaTag( 'title', 		$row->adline );
$mainframe->setPageTitle( $row->adline );

if (file_exists(MAINTEMPLATE_PATH.'/viewdetails.ezrealty.php')) {
  include(MAINTEMPLATE_PATH.'/viewdetails.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}


}


    /**************************************************\
     PREVIEW DETAILS OF THE SELECTED ITEM VIA USER PANEL
    \**************************************************/


function previewDetails( $option, &$row ) {
global $database, $Itemid, $mainframe, $mosConfig_live_site, $id, $my, $er_template, $er_currencysign, $er_imgwidth;
global $er_thumbwidth, $er_imagedirectory, $er_viewarrange, $er_viewrecommend, $er_viewmailing, $er_special_feature;
global $er_paypal, $er_thumbcreation, $er_bizname, $er_memlistings, $er_mobile, $er_usepc, $er_mapsys;
global $er_colour1, $er_usemap, $er_mapwidth, $er_mapheight, $er_currencyformat, $er_currencypos, $er_profaccess;
global $er_useprofile, $er_usesms, $er_usemapstnum, $er_usemapstreet, $er_usemaplocid, $er_usemapstid;
global $er_flvheight, $er_flvwidth, $er_useflv, $mosConfig_absolute_path, $er_usebookings, $er_useshortlist;
global $er_useprofile, $er_profaccess;

DEFINE("MAINTEMPLATE_PATH","components/com_ezrealty/forms/templates/".$er_template);

$tabs = new mosTabs(0);

$mainframe->appendMetaTag( 'description', 	$row->metadesc );
$mainframe->appendMetaTag( 'keywords', 		$row->metakey );
$mainframe->appendMetaTag( 'title', 		$row->adline );
$mainframe->setPageTitle( $row->adline );

if (file_exists(MAINTEMPLATE_PATH.'/viewdetails.ezrealty.php')) {
  include(MAINTEMPLATE_PATH.'/viewdetails.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}


}


    /**************************************************\
                DISPLAY DETAILS FOR PRINTING
    \**************************************************/


function printDetails( $option, &$row ) {
global $database, $Itemid, $mainframe, $mosConfig_live_site, $id, $my, $er_template, $er_currencysign, $er_imgwidth;
global $er_thumbwidth, $er_imagedirectory, $er_viewarrange, $er_viewrecommend, $er_viewmailing, $er_special_feature;
global $er_paypal, $er_thumbcreation, $er_bizname, $er_memlistings, $er_mobile, $er_usepc, $er_mapsys, $er_bizad;
global $er_colour1, $er_usemap, $er_mapwidth, $er_mapheight, $er_currencyformat, $er_currencypos, $er_profaccess;
global $er_useprofile, $er_usesms, $er_usemapstnum, $er_usemapstreet, $er_usemaplocid, $er_usemapstid;
global $er_flvheight, $er_flvwidth, $er_useflv, $mosConfig_absolute_path, $er_usebookings, $er_useshortlist, $er_telephone;
global $er_useprofile, $er_profaccess;

DEFINE("PRINTTEMPLATE_PATH","components/com_ezrealty/forms/miscellaneous");

$mainframe->appendMetaTag( 'description', 	$row->metadesc );
$mainframe->appendMetaTag( 'keywords', 		$row->metakey );
$mainframe->appendMetaTag( 'title', 		$row->adline );
$mainframe->setPageTitle( $row->adline );


if (file_exists(PRINTTEMPLATE_PATH.'/print.ezrealty.php')) {
  include(PRINTTEMPLATE_PATH.'/print.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}


}


    /**************************************************\
                SHOW THE NEW LISTINGS
    \**************************************************/


function newListings( $option, &$rows, &$lists ) {
global $database, $Itemid, $mainframe, $mosConfig_live_site, $mosConfig_list_limit, $er_currencysign, $er_thumbwidth;
global $er_perpage, $er_imagedirectory, $er_thumbcreation, $er_currencyformat, $er_listtemplate, $er_useprofile;
global $er_colcount,$er_colwidth, $er_currencypos, $mosConfig_absolute_path, $er_useshortlist;

$colcount 	= $er_colcount;
$colwidth 	= $er_colwidth;

$mainframe->appendMetaTag( 'title', 	_EZREALTY_RESULTS_NEWLISTINGS );
$mainframe->setPageTitle( _EZREALTY_RESULTS_NEWLISTINGS );


DEFINE("TEMPLATE_PATH","components/com_ezrealty/forms/list_templates/".$er_listtemplate);

?>

<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td class="sectiontableheader"><?php echo _EZREALTY_RESULTS_NEWLISTINGS;?></td>
		</tr>
	</table>

<?php

	if ($er_listtemplate == 'multicolumn') {

echo "<table border='0' width='100%'>";
echo "<tr>";

    $rowcounter = 0;
    foreach($rows as $row) {

		$number = $row->price;

		if ($er_currencyformat==0) {
			$formatted_price = number_format($number);
		} else if ($er_currencyformat==1) {
			$formatted_price = number_format($number, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price = number_format($number, 0,",",".");
		}

      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";

if (file_exists(TEMPLATE_PATH.'/listshort.ezrealty.php')) {
  include(TEMPLATE_PATH.'/listshort.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}

	$rowcounter++;
	}
    if ($rowcounter%$colcount<>0) {
      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {
        echo "<td width='$colwidth' valign='top'> </td>";
      }
    }
    echo "</tr></table>";

} else {

	$k = 0;
	for ($i=0, $n=count( $rows ); $i < $n; $i++) {
	$row = &$rows[$i];

		$number = $row->price;

		if ($er_currencyformat==0) {
			$formatted_price = number_format($number);
		} else if ($er_currencyformat==1) {
			$formatted_price = number_format($number, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price = number_format($number, 0,",",".");
		}

if (file_exists(TEMPLATE_PATH.'/listshort.ezrealty.php')) {
  include(TEMPLATE_PATH.'/listshort.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}


}

	} 

}


    /**************************************************\
                SHOW THE OPEN HOUSE LISTINGS
    \**************************************************/


function openHouse( $option, &$rows ) {
global $database, $Itemid, $mainframe, $mosConfig_live_site, $er_currencysign, $er_thumbwidth;
global $er_perpage, $er_imagedirectory, $er_thumbcreation, $er_rssohname, $er_currencyformat, $er_listtemplate;
global $er_colcount,$er_colwidth, $er_currencypos, $mosConfig_absolute_path, $er_useshortlist, $er_useprofile;

$colcount 	= $er_colcount;
$colwidth 	= $er_colwidth;

$mainframe->appendMetaTag( 'title', 	stripslashes( $er_rssohname ) );
$mainframe->setPageTitle( stripslashes( $er_rssohname ) );


DEFINE("TEMPLATE_PATH","components/com_ezrealty/forms/list_templates/".$er_listtemplate);

?>

<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td class="sectiontableheader"><?php echo stripslashes( $er_rssohname );?></td>
		</tr>
	</table>

<?php

	if ($er_listtemplate == 'multicolumn') {

echo "<table border='0' width='100%'>";
echo "<tr>";

    $rowcounter = 0;
    foreach($rows as $row) {

		$number = $row->price;

		if ($er_currencyformat==0) {
			$formatted_price = number_format($number);
		} else if ($er_currencyformat==1) {
			$formatted_price = number_format($number, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price = number_format($number, 0,",",".");
		}

      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";

if (file_exists(TEMPLATE_PATH.'/listshort.ezrealty.php')) {
  include(TEMPLATE_PATH.'/listshort.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}

	$rowcounter++;
	}
    if ($rowcounter%$colcount<>0) {
      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {
        echo "<td width='$colwidth' valign='top'> </td>";
      }
    }
    echo "</tr></table>";

} else {

	$k = 0;
	for ($i=0, $n=count( $rows ); $i < $n; $i++) {
	$row = &$rows[$i];

		$number = $row->price;

		if ($er_currencyformat==0) {
			$formatted_price = number_format($number);
		} else if ($er_currencyformat==1) {
			$formatted_price = number_format($number, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price = number_format($number, 0,",",".");
		}

if (file_exists(TEMPLATE_PATH.'/listshort.ezrealty.php')) {
  include(TEMPLATE_PATH.'/listshort.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}


}

	} 

}




    /**************************************************\
                SHOW THE FEATURED PROPERTY LISTINGS
    \**************************************************/


function featuredProperties( $option, &$rows ) {
global $database, $Itemid, $mainframe, $mosConfig_live_site, $er_currencysign, $er_thumbwidth;
global $er_perpage, $er_imagedirectory, $er_thumbcreation, $er_rssohname, $er_currencyformat, $er_listtemplate;
global $er_colcount,$er_colwidth, $er_currencypos, $mosConfig_absolute_path, $er_useshortlist, $er_useprofile;

$colcount 	= $er_colcount;
$colwidth 	= $er_colwidth;

$mainframe->appendMetaTag( 'title', 	_EZREALTY_FEATURED_PROPERTY_LIST );
$mainframe->setPageTitle( stripslashes( _EZREALTY_FEATURED_PROPERTY_LIST ) );

DEFINE("TEMPLATE_PATH","components/com_ezrealty/forms/list_templates/".$er_listtemplate);

?>

<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td class="sectiontableheader"><?php echo _EZREALTY_FEATURED_PROPERTY_LIST;?></td>
		</tr>
	</table>

<?php

	if ($er_listtemplate == 'multicolumn') {


echo "<table border='0' width='100%'>";
echo "<tr>";

    $rowcounter = 0;
    foreach($rows as $row) {

		$number = $row->price;

		if ($er_currencyformat==0) {
			$formatted_price = number_format($number);
		} else if ($er_currencyformat==1) {
			$formatted_price = number_format($number, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price = number_format($number, 0,",",".");
		}

      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";

if (file_exists(TEMPLATE_PATH.'/listshort.ezrealty.php')) {
  include(TEMPLATE_PATH.'/listshort.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}

	$rowcounter++;
	}
    if ($rowcounter%$colcount<>0) {
      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {
        echo "<td width='$colwidth' valign='top'> </td>";
      }
    }
    echo "</tr></table>";

} else {

	$k = 0;
	for ($i=0, $n=count( $rows ); $i < $n; $i++) {
	$row = &$rows[$i];

		$number = $row->price;

		if ($er_currencyformat==0) {
			$formatted_price = number_format($number);
		} else if ($er_currencyformat==1) {
			$formatted_price = number_format($number, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price = number_format($number, 0,",",".");
		}

if (file_exists(TEMPLATE_PATH.'/listshort.ezrealty.php')) {
  include(TEMPLATE_PATH.'/listshort.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}


}

	} 

}



    /**************************************************\
                LIST THE SHORTLIST CONTENTS
    \**************************************************/


function viewLightbox( $option, &$rows, $id ) {
global $database, $Itemid, $mainframe, $mosConfig_live_site, $er_currencysign, $er_thumbwidth, $er_currencyformat;
global $er_perpage, $er_imagedirectory, $er_thumbcreation, $er_sitetype, $er_currencypos, $mosConfig_absolute_path;
global $er_colcount, $er_colwidth, $er_listtemplate, $er_useshortlist, $er_useprofile;

$colcount 	= $er_colcount;
$colwidth 	= $er_colwidth;

$mainframe->appendMetaTag( 'title', 	_EZREALTY_MY_LIGHTBOX );
$mainframe->setPageTitle( _EZREALTY_MY_LIGHTBOX );

DEFINE("TEMPLATE_PATH","components/com_ezrealty/forms/shortlist/".$er_listtemplate);


?>

<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_MY_LIGHTBOX;?></td>
	</tr>
</table>

<?php

    $num_rows=ceil( count( $rows ) / 1 );
	if ($num_rows > 0) {

	if ($er_listtemplate == 'multicolumn') {


echo "<table border='0' width='100%'>";
echo "<tr>";

    $rowcounter = 0;
    foreach($rows as $row) {

		$number = $row->price;

		if ($er_currencyformat==0) {
			$formatted_price = number_format($number);
		} else if ($er_currencyformat==1) {
			$formatted_price = number_format($number, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price = number_format($number, 0,",",".");
		}

      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";

if (file_exists(TEMPLATE_PATH.'/shortlist.ezrealty.php')) {
  include(TEMPLATE_PATH.'/shortlist.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}

	$rowcounter++;
	}
    if ($rowcounter%$colcount<>0) {
      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {
        echo "<td width='$colwidth' valign='top'> </td>";
      }
    }
    echo "</tr></table>";

} else {

	$k = 0;
	for ($i=0, $n=count( $rows ); $i < $n; $i++) {
	$row = &$rows[$i];

		$number = $row->price;

		if ($er_currencyformat==0) {
			$formatted_price = number_format($number);
		} else if ($er_currencyformat==1) {
			$formatted_price = number_format($number, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price = number_format($number, 0,",",".");
		}

if (file_exists(TEMPLATE_PATH.'/shortlist.ezrealty.php')) {
  include(TEMPLATE_PATH.'/shortlist.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}

}
	} 

}else{

?>

<table width='100%' border='0' cellspacing='1' cellpadding='0'>
	<tr>
		<td class='h3'><br /><br /><?php echo _EZREALTY_EMPTY_LIGHTBOX;?><br /><br /><br /></td>
	</tr>
</table>
			<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">
				<tr>
					<td><img src="components/com_ezrealty/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>
				</tr>
			</table>

<?php

}

}




    /**************************************************\
                SHOW THE LEADS REGISTRATION PAGE
    \**************************************************/


function registerLeads( $option, $lists ) {
	global $database, $Itemid, $mainframe, $er_reglead, $er_stateloc, $er_country, $mosConfig_usecaptcha;

$mainframe->appendMetaTag( 'title', 	_EZREALTY_SUBLEAD_TITLE );
$mainframe->setPageTitle( _EZREALTY_SUBLEAD_TITLE );
$mainframe->appendMetaTag( 'description', 	_EZREALTY_SUBLEAD_INTRO );


if ( $er_reglead ){

?>


<br />
<br />


<?php


	# Submit Lead Form Check

?>
		<script type="text/javascript">
		<!--
		function validatelead() {
			var form = document.reglead;
			// do field validation
			if (form.lead_name.value == "") {
				alert( "<?php echo _EZREALTY_LM_ERROR1;?>" );
			} else if (form.email.value == "") {
				alert( "<?php echo _EZREALTY_LM_ERROR2;?>" );
			} else if (form.cid.value == "0") {
				alert( "<?php echo _EZREALTY_LM_ERROR3;?>" );
			} else if (form.budget.value == "") {
				alert( "<?php echo _EZREALTY_LM_ERROR4;?>" );

<?php if ( $er_stateloc == 1 ) { ?>

      } else if (form.stid.value == "0"){
        alert( "<?php echo _EZREALTY_DETAILS_ERROR3;?>" );

      } else if (form.locid.value == "0"){
        alert( "<?php echo _EZREALTY_DETAILS_ERROR2;?>" );

<?php } ?>

<?php if ( $er_stateloc == 2 ) { ?>

      } else if (form.locid.value == "0"){
        alert( "<?php echo _EZREALTY_DETAILS_ERROR2;?>" );

<?php } ?>


<?php if ( $er_country ) { ?>

      } else if (form.cnid.value == "0"){
        alert( "<?php echo _EZREALTY_DETAILS_ERROR4;?>" );

<?php } ?>


			} else if (form.bedrooms.value == "") {
				alert( "<?php echo _EZREALTY_LM_ERROR6;?>" );
			} else {
				document.reglead.action = '<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid");?>';
				document.reglead.submit();

			}
		}
		//-->
		</script>

<br />

<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_SUBLEAD_TITLE;?></td>
	</tr>
	<tr>
		<td><br /><?php echo _EZREALTY_SUBLEAD_INTRO;?></td>
	</tr>
</table>

<br />
<br />


<form name="reglead" action="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid");?>" method="post">

	<input type="hidden" name="option" value="com_ezrealty" />
	<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
	<input type="hidden" name="task" value="savelead" />
	<input type="hidden" name="lid" value="$row->lid" />

<table cellpadding = "4" cellspacing = "1" border = "0" width = "100%">
	<tr>
		<td width="150"><strong><?php echo _EZREALTY_SUBLEAD_CONTACT;?>:</strong></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width="150"><?php echo _EZREALTY_LEADS_LNAME;?>:</td>
		<td><input class="inputbox" type="text" name="lead_name" maxlength="100" size="30" />  <?php echo _EZREALTY_DETAILS_REQ;?></td>
	</tr>
	<tr>
		<td><?php echo _EZREALTY_LEADS_HPHONE;?>:</td>
		<td><input class="inputbox" type="text" name="hphone" maxlength="100" size="30" /></td>
	</tr>
	<tr>
		<td><?php echo _EZREALTY_LEADS_WPHONE;?>:</td>
		<td><input class="inputbox" type="text" name="wphone" maxlength="100" size="30" /></td>
	</tr>
	<tr>
		<td valign="top"><?php echo _EZREALTY_LEADS_MOBILE;?>:</td>
		<td><input class="inputbox" type="text" name="mobile" maxlength="100" size="30" />  <?php echo _EZREALTY_SELLER_SMS5;?></td>
	</tr>
	<tr>
		<td><?php echo _EZREALTY_LEADS_FAX;?>:</td>
		<td><input class="inputbox" type="text" name="fax" maxlength="100" size="30" /></td>
	</tr>
	<tr>
		<td><?php echo _EZREALTY_LEADS_LEMAIL;?>:</td>
		<td><input class="inputbox" type="text" name="email" maxlength="100" size="30" />  <?php echo _EZREALTY_DETAILS_REQ;?></td>
	</tr>
	<tr>
    	<td valign="top"><br /><strong><?php echo _EZREALTY_LEADS_DETAILS;?>:</strong></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
    	<td valign="top"><br /><?php echo _EZREALTY_LISTING_TYPE;?>:</td>
	    <td valign="top"><br /><?php echo $lists['type']; ?></td>
	</tr>
	<tr>
    	<td valign="top"><br /><?php echo _EZREALTY_DETAILS_PROPTYPE;?>:</td>
	    <td valign="top"><br /><?php echo $lists['cid']; ?>  <?php echo _EZREALTY_DETAILS_REQ;?></td>
	</tr>
	<tr>
		<td valign="top"><br /><?php echo _EZREALTY_LEADS_BUDGET;?>:</td>
		<td valign="top"><br /><input class="inputbox" type="text" name="budget" maxlength="100" size="30" />  <?php echo _EZREALTY_DETAILS_REQ;?></td>
	</tr>

<?php if ( $er_stateloc == 1 ) { ?>

  <tr>
    <td valign="top"><br /><?php echo _EZREALTY_DETAILS_AREA;?>:</td>
    <td valign="top"><br /><?php echo $lists['stid']; ?>  <?php echo _EZREALTY_DETAILS_REQ;?></td>
  </tr>

	<tr>
		<td valign="top"><br /><?php echo _EZREALTY_DETAILS_PROPCITY;?>:</td>
		<td valign="top"><br /><?php echo $lists['locid']; ?>  <?php echo _EZREALTY_DETAILS_REQ;?></td>
	</tr>

<?php } ?>

<?php if ( $er_stateloc == 2 ) { ?>

	<tr>
		<td valign="top"><br /><?php echo _EZREALTY_DETAILS_PROPCITY;?>:</td>
		<td valign="top"><br /><?php echo $lists['locid2']; ?>  <?php echo _EZREALTY_DETAILS_REQ;?></td>
	</tr>

<?php } ?>

<?php if ( $er_country ) { ?>

  <tr>
    <td valign="top"><br /><?php echo _EZREALTY_DETAILS_COUNTRY;?>:</td>
    <td valign="top"><br /><?php echo $lists['cnid']; ?></td>
  </tr>

<?php } ?>

	<tr>
		<td valign="top"><br /><?php echo _EZREALTY_DETAILS_BEDROOMS;?>:</td>
		<td><br /><?php echo $lists['bedrooms']; ?>  <?php echo _EZREALTY_DETAILS_REQ;?></td>
	</tr>
	<tr>
		<td valign="top"><br /><?php echo _EZREALTY_DETAILS_BATHROOMS;?>:</td>
		<td><br /><input class="inputbox" type="text" name="bathrooms" size="15" maxlength="100" /></td>
	</tr>

	<tr>
		<td valign="top"><br /><?php echo _EZREALTY_LEADS_SOURCE;?>:</td>
		<td valign="top"><br />
			<select name='source' class='inputbox'> 
			<option value="<?php echo _EZREALTY_DETAILS_SOURCE5;?>"><?php echo _EZREALTY_DETAILS_SOURCE5;?></option>
			<option value="<?php echo _EZREALTY_DETAILS_SOURCE2;?>"><?php echo _EZREALTY_DETAILS_SOURCE2;?></option>
			<option value="<?php echo _EZREALTY_DETAILS_SOURCE3;?>"><?php echo _EZREALTY_DETAILS_SOURCE3;?></option>
			<option value="<?php echo _EZREALTY_DETAILS_SOURCE4;?>"><?php echo _EZREALTY_DETAILS_SOURCE4;?></option>
			<option value="<?php echo _EZREALTY_DETAILS_SOURCE1;?>"><?php echo _EZREALTY_DETAILS_SOURCE1;?></option>
			</select>
		<?php echo _EZREALTY_DETAILS_REQ;?></td>
	</tr>
	<tr>
    	<td valign="top"><br /><?php echo _EZREALTY_LEADS_COMMENTS;?>:<br /></td>
	    <td><br /><textarea class="inputbox" rows="5" name="comments" cols="30"></textarea><br /><br /></td>
	</tr>

					<?php if ($mosConfig_usecaptcha == '1') { ?>
					<tr><td colspan="2" valign="top">
					<br /><?php echo _EZREALTY_ENTER_CAPTCHA;?> <input type="text" name="spamstop" maxlength="5" size="5" class="inputbox" title="" /><br />
					<img src="./includes/captcha.php" border="0" title="" alt="" align="absmiddle" /><br /><br />
					</td></tr>
					<?php } ?>					

	<tr>
		<td colspan = "2" align = "center"><div align="center"><input type="button" name="<?php echo _EZREALTY_VIEWDET_SEND;?>" value="<?php echo _EZREALTY_VIEWDET_SEND;?>" class="button" onclick="validatelead()" /></div></td>
	</tr>
</table>

</form>

<?php } else { ?>

<br />

<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td><?php echo _EZREALTY_SUBLEAD_NOTON;?></td>
	</tr>
</table>

<br />
<br />


<?php

	}
}





    /**************************************************\
                SHOW THE PROPERTIES WANTED PAGE
    \**************************************************/


function showLeads( $option, &$rows ) {
	global $database, $Itemid, $mainframe, $er_reglead, $er_perpage, $mosConfig_live_site, $er_stateloc, $er_country;

$mainframe->appendMetaTag( 'title', 	_EZREALTY_PROPERTIES_WANTED );
$mainframe->setPageTitle( _EZREALTY_PROPERTIES_WANTED );
$mainframe->appendMetaTag( 'description', 	_EZREALTY_PROPERTIES_WANTEDDESC );

if ( $er_reglead ){

?>


<br />

<div align="center"><span class="h2"><?php echo _EZREALTY_PROPERTIES_WANTED;?></span></div>
<br />
<div align="center"><strong><?php echo _EZREALTY_PROPERTIES_WANTEDDESC;?></strong></div>
<br />

<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
		<td class="sectiontableheader" width="10%">ID#</td>
		<td class="sectiontableheader" width="25%"><?php echo _EZREALTY_CATEGORY_CATNAME;?></td>
		<?php if ( $er_stateloc > 0 && $er_country ) { ?><td class="sectiontableheader" width="25%"><?php echo _EZREALTY_VIEWDET_LOCALITY;?></td><?php } ?>
		<td class="sectiontableheader" width="20%"><?php echo _EZREALTY_BEDBATH;?></td>
		<td class="sectiontableheader" width="20%"><?php echo _EZREALTY_INTERESTED;?></td>
		</tr>
	</table>

<?php

    $num_rows=ceil( count( $rows ) / 1 );
	if ($num_rows > 0) {

			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];


$status2 = 'status=no,toolbar=no,scrollbars=no,titlebar=no,menubar=no,resizable=yes,width=500,height=400,directories=no,location=no';
$link2 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;Itemid='.$Itemid.'&amp;task=enquire&amp;id='. $row->lid;
												
        ?>


<table border="0" width="100%" cellpadding="5" onmouseover="EZOver(this)" onmouseout="EZOut(this)">
	<tr>
		<td valign="top" width="10%"><?php echo $row->lid;?></td>
		<td valign="top" width="25%"><?php echo $row->category;?><br />

<?php if ( $row->type==1 ){ ?><?php echo _EZREALTY_TYPE_SALE;?><?php } ?>
<?php if ( $row->type==2 ){ ?><?php echo _EZREALTY_TYPE_RENTAL;?><?php } ?>
<?php if ( $row->type==3 ){ ?><?php echo _EZREALTY_TYPE_LEASE;?><?php } ?>
<?php if ( $row->type==4 ){ ?><?php echo _EZREALTY_TYPE_AUCTION;?><?php } ?>
<?php if ( $row->type==5 ){ ?><?php echo _EZREALTY_TYPE_SWAP;?><?php } ?>
<?php if ( $row->type==6 ){ ?><?php echo _EZREALTY_TYPE_TENDER;?><?php } ?>

</td>

<?php if ( $er_stateloc > 0 && $er_country ) { ?>
		<td valign="top" width="25%">
<?php if ( $er_stateloc == 1 ) { ?><?php echo $row->proploc;?><br /><?php echo $row->statename;?><br /><?php } ?>
<?php if ( $er_stateloc == 2 ) { ?><?php echo $row->proploc;?><br /><?php } ?>
<?php if ( $er_country ) { ?><?php echo $row->countryname;?><?php } ?>
</td>
<?php } ?>

		<td valign="top" width="20%"><?php if ( $row->bedrooms==0.5 ){ ?><?php echo _EZREALTY_STUDIO;?><?php } ?><?php if ( $row->bedrooms >= 1 ){ ?><?php echo $row->bedrooms;?><?php } ?>/<?php echo $row->bathrooms;?></td>
		<td valign="top" width="20%"><a href="javascript:void(0)" onclick="window.open('<?php echo $link2; ?>','win2','<?php echo $status2; ?>');" title="<?php echo _EZREALTY_EA;?>"><?php echo _EZREALTY_EA;?></a></td>

	</tr>


</table>
			<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">
				<tr>
					<td><img src="components/com_ezrealty/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>
				</tr>
			</table>

<?php

	} 

}else{


?>

<table width='100%' border='0' cellspacing='1' cellpadding='0'>
	<tr>
		<td class='h3'><br /><?php echo _EZREALTY_RESULTS_NORESULTS;?></td>
	</tr>
</table>

<?php

}

?>



<?php } else { ?>

<br />

<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td><?php echo _EZREALTY_SUBLEAD_NOTON;?></td>
	</tr>
</table>

<br />
<br />


<?php

	}
}





    /**************************************************\
                SHOW THE SEARCH FORM
    \**************************************************/


function itemSearch( $option, $lists ) {
	global $database, $Itemid, $mainframe, $mosConfig_live_site, $option, $er_usesold, $er_usemls, $er_uselug;
	global $er_usetype, $er_usecid, $er_uselocid, $er_usecnid, $er_usepostcode, $er_useprice, $er_usebed, $er_usepets;
	global $er_usebath, $er_usefeat, $er_usecust4, $er_usecust5;

$mainframe->appendMetaTag( 'title', 	_EZREALTY_SEARCHADV );
$mainframe->setPageTitle( _EZREALTY_SEARCHADV );

$link1 = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=results&amp;Itemid='. $Itemid );


?>

<br /><br />

<table width="90%" align="center" cellpadding="5"><tr><td>


<table width="100%" cellpadding="10" class="listtableborder"><tr><td>

	<form name="searchfilter" action="<?php echo $link1;?>" method="post">
	<input type="hidden" name="option" value="com_ezrealty" />
	<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
	<input type="hidden" name="task" value="results" />

<?php if (!$er_usetype) { ?>
	<input type="hidden" name="type" value="0" />
<?php } ?>
<?php if (!$er_usecid) { ?>
	<input type="hidden" name="cid" value="0" />
<?php } ?>
<?php if ($er_uselocid == 0) { ?>
	<input type="hidden" name="stid" value="0" />
	<input type="hidden" name="locid" value="0" />
<?php } ?>
<?php if ($er_uselocid == 2) { ?>
	<input type="hidden" name="stid" value="0" />
<?php } ?>
<?php if (!$er_usecnid) { ?>
	<input type="hidden" name="cnid" value="0" />
<?php } ?>
<?php if (!$er_usepostcode) { ?>
	<input type="hidden" name="postcode" value="" />
<?php } ?>
<?php if (!$er_useprice) { ?>
	<input type="hidden" name="minprice" value="" />
	<input type="hidden" name="maxprice" value="" />
<?php } ?>
<?php if (!$er_usebed) { ?>
	<input type="hidden" name="minbed" value="" />
	<input type="hidden" name="maxbed" value="" />
<?php } ?>
<?php if (!$er_usebath) { ?>
	<input type="hidden" name="bathrooms" value="" />
<?php } ?>
<?php if (!$er_usesold) { ?>
	<input type="hidden" name="sold" value="0" />
<?php } ?>
<?php if (!$er_usemls) { ?>
	<input type="hidden" name="mls_id" value="" />
<?php } ?>
<?php if (!$er_usefeat) { ?>
	<input type="hidden" name="featured" value="0" />
<?php } ?>
<?php if (!$er_usecust4) { ?>
	<input type="hidden" name="custom4" value="" />
<?php } ?>
<?php if (!$er_usecust5) { ?>
	<input type="hidden" name="custom5" value="" />
<?php } ?>



<table border="0" width="100%">
	<tr>
		<td class="h2"><?php echo _EZREALTY_SEARCHADV;?><br /><br /></td>
	</tr>
	<tr>
		<td>
		
		<table border="0" cellpadding="5">

<?php if ($er_usetype) { ?>
	<tr>
		<td width="150"><?php echo _EZREALTY_LISTING_TYPE;?>:-</td>
		<td colspan="2"><?php echo $lists['type'];?></td>
	</tr>
<?php } ?>
<?php if ($er_usecid) { ?>
	<tr>
		<td width="150"><?php echo _EZREALTY_CATEGORY_CATNAME;?>:-</td>
		<td colspan="2"><?php echo $lists['cid'];?></td>
	</tr>
<?php } ?>
<?php if ( $er_uselocid == 1 ) { ?>
	<tr>
		<td><?php echo _EZREALTY_SEARCHREG;?>:-</td>
		<td><?php echo $lists['stid'];?></td>
		<td></td>
	</tr>
	<tr>
		<td><?php echo _EZREALTY_SEARCHLOC;?>:-</td>
		<td><?php echo $lists['locid'];?></td>
		<td></td>
	</tr>
<?php } ?>
<?php if ( $er_uselocid == 2 ) { ?>
	<tr>
		<td><?php echo _EZREALTY_SEARCHLOC;?>:-</td>
		<td><?php echo $lists['locid'];?></td>
		<td></td>
	</tr>
<?php } ?>
<?php if ( $er_usecnid ) { ?>
	<tr>
		<td><?php echo _EZREALTY_SEARCHCON;?>:-</td>
		<td><?php echo $lists['cnid'];?></td>
		<td></td>
	</tr>
<?php } ?>
<?php if ($er_usepostcode) { ?>
	<tr>
		<td><?php echo _EZREALTY_DETAILS_PROPPOSTCODE;?>:-</td>
		<td><?php echo $lists['postcode'];?></td>
		<td></td>
	</tr>
<?php } ?>
<?php if ($er_useprice) { ?>
	<tr>
		<td><?php echo _EZREALTY_SEARCHPRICE;?>:-</td>
		<td><?php echo $lists['minprice'];?> <?php echo $lists['maxprice'];?></td>
		<td></td>
	</tr>
<?php } ?>
<?php if ($er_usebed) { ?>
	<tr>
		<td><?php echo _EZREALTY_SEARCHBRM;?>:-</td>
		<td><?php echo $lists['minbed'];?> <?php echo $lists['maxbed'];?></td>
		<td></td>
	</tr>
<?php } ?>
<?php if ($er_usebath) { ?>
	<tr>
		<td><?php echo _EZREALTY_SEARCH_BATHROOMS;?>:-</td>
		<td><?php echo $lists['bath'];?></td>
		<td></td>
	</tr>
<?php } ?>
<?php if ($er_usesold) { ?>
	<tr>
		<td><?php echo _EZREALTY_DETAILS_MARKET;?>:-</td>
		<td><?php echo $lists['sold'];?></td>
		<td></td>
	</tr>
<?php } ?>
<?php if ($er_usemls) { ?>
	<tr>
		<td><?php echo _EZREALTY_DET_MLSID;?>:-</td>
		<td><?php echo $lists['mls_id'];?></td>
		<td></td>
	</tr>
<?php } ?>
<?php if ($er_usepets) { ?>
	<tr>
		<td><?php echo _EZREALTY_APF11;?>:-</td>
		<td><?php echo $lists['pets'];?></td>
		<td></td>
	</tr>
<?php } ?>
<?php if ($er_uselug) { ?>
	<tr>
		<td><?php echo _EZREALTY_APF5;?>:-</td>
		<td><?php echo $lists['lug'];?></td>
		<td></td>
	</tr>
<?php } ?>
<?php if ($er_usefeat) { ?>
	<tr>
		<td><?php echo _EZREALTY_FEATURED_PROPERTY_LIST;?>:-</td>
		<td><?php echo $lists['featured'];?></td>
		<td></td>
	</tr>
<?php } ?>
<?php if ($er_usecust4) { ?>
	<tr>
		<td><?php echo _EZREALTY_CUSTOM4;?>:-</td>
		<td><?php echo $lists['custom4'];?></td>
		<td></td>
	</tr>
<?php } ?>
<?php if ($er_usecust5) { ?>
	<tr>
		<td><?php echo _EZREALTY_CUSTOM5;?>:-</td>
		<td><?php echo $lists['custom5'];?></td>
		<td></td>
	</tr>
<?php } ?>

	<tr>
		<td><?php echo _EZREALTY_SEARCHORD;?>:-</td>
		<td><select name="direction" class="searchbox"> 
		<option value="ASCPRICE"><?php echo _EZREALTY_SEARCH_PRIASC;?></option>
		<option value="DESCPRICE"><?php echo _EZREALTY_SEARCH_PRIDESC;?></option>
		<option value="ASCID"><?php echo _EZREALTY_SEARCH_ASC;?></option>
		<option value="DESCID"><?php echo _EZREALTY_SEARCH_DESC;?></option>
		</select></td>
		<td> </td>
	</tr>
	<tr>
		<td colspan="3"><input class="button" type="submit" name="<?php echo _EZREALTY_SEARCH_SEARCH;?>" value="<?php echo _EZREALTY_SEARCH_SEARCH;?>" /></td>
	</tr>
</table>

	</td>
	</tr>
	</table>
	</form>

</td></tr></table>

<br /><br /><br />

</td></tr></table>


<?php


}


    /**************************************************\
                SHOW THE FILTERED SEARCH RESULTS
    \**************************************************/


function searchResults( $option, &$rows, $pageNav ) {
global $database, $Itemid, $mainframe, $mosConfig_live_site, $er_currencysign, $er_thumbwidth, $er_perpage, $er_imagedirectory;
global $er_states, $er_thumbcreation, $er_country, $er_listtemplate, $er_currencyformat, $mosConfig_absolute_path;
global $er_colcount, $er_colwidth, $er_currencypos, $er_useshortlist, $er_usepets, $er_uselug, $er_usebath, $er_useprofile;

$colcount 	= $er_colcount;
$colwidth 	= $er_colwidth;

$mainframe->appendMetaTag( 'title', 	_EZREALTY_RESULTS_RESULTS );
$mainframe->setPageTitle( _EZREALTY_RESULTS_RESULTS );


DEFINE("TEMPLATE_PATH","components/com_ezrealty/forms/list_templates/".$er_listtemplate);

    $num_rows=ceil( count( $rows ) / 1 );
	if ($num_rows > 0) {


?>

<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td class="sectiontableheader"><?php echo _EZREALTY_RESULTS_RESULTS;?></td>
		</tr>
	</table>

<?php

	if ($er_listtemplate == 'multicolumn') {


echo "<table border='0' width='100%'>";
echo "<tr>";

    $rowcounter = 0;
    foreach($rows as $row) {

		$number = $row->price;

		if ($er_currencyformat==0) {
			$formatted_price = number_format($number);
		} else if ($er_currencyformat==1) {
			$formatted_price = number_format($number, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price = number_format($number, 0,",",".");
		}

      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";

if (file_exists(TEMPLATE_PATH.'/listshort.ezrealty.php')) {
  include(TEMPLATE_PATH.'/listshort.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}

	$rowcounter++;
	}
    if ($rowcounter%$colcount<>0) {
      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {
        echo "<td width='$colwidth' valign='top'> </td>";
      }
    }
    echo "</tr></table>";

} else {

	$k = 0;
	for ($i=0, $n=count( $rows ); $i < $n; $i++) {
	$row = &$rows[$i];

		$number = $row->price;

		if ($er_currencyformat==0) {
			$formatted_price = number_format($number);
		} else if ($er_currencyformat==1) {
			$formatted_price = number_format($number, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price = number_format($number, 0,",",".");
		}

if (file_exists(TEMPLATE_PATH.'/listshort.ezrealty.php')) {
  include(TEMPLATE_PATH.'/listshort.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}


}

	} 

?>

<form name="adminForm" action="index.php?option=<?php echo $option;?>&amp;task=<?php echo $_REQUEST['task'];?>&amp;Itemid=<?php echo $Itemid;?>" method="get">
<input type="hidden" name="option" value="<?php echo $option;?>" />
<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
<input type="hidden" name="task" value="<?php echo $_REQUEST['task'];?>" />
<input type="hidden" name="type" value="<?php echo $_REQUEST['type'];?>" />
<input type="hidden" name="cid" value="<?php echo $_REQUEST['cid'];?>" />
<input type="hidden" name="locid" value="<?php echo $_REQUEST['locid'];?>" />
<input type="hidden" name="stid" value="<?php echo $_REQUEST['stid'];?>" />
<input type="hidden" name="cnid" value="<?php echo $_REQUEST['cnid'];?>" />
<input type="hidden" name="postcode" value="<?php echo $_REQUEST['postcode'];?>" />
<input type="hidden" name="mls_id" value="<?php echo $_REQUEST['mls_id'];?>" />
<input type="hidden" name="sold" value="<?php echo $_REQUEST['sold'];?>" />
<?php if ($er_usepets) { ?>
<input type="hidden" name="pets" value="<?php echo $_REQUEST['pets'];?>" />
<?php } ?>
<?php if ($er_uselug) { ?>
<input type="hidden" name="lug" value="<?php echo $_REQUEST['lug'];?>" />
<?php } ?>
<input type="hidden" name="maxprice" value="<?php echo $_REQUEST['maxprice'];?>" />
<input type="hidden" name="minprice" value="<?php echo $_REQUEST['minprice'];?>" />
<input type="hidden" name="maxbed" value="<?php echo $_REQUEST['maxbed'];?>" />
<input type="hidden" name="minbed" value="<?php echo $_REQUEST['minbed'];?>" />
<input type="hidden" name="bathrooms" value="<?php echo $_REQUEST['bathrooms'];?>" />
<input type="hidden" name="featured" value="<?php echo $_REQUEST['featured'];?>" />
<input type="hidden" name="custom4" value="<?php echo $_REQUEST['custom4'];?>" />
<input type="hidden" name="custom5" value="<?php echo $_REQUEST['custom5'];?>" />
<input type="hidden" name="direction" value="<?php echo $_REQUEST['direction'];?>" />

<?php

$link='index.php?option='.$option.'&amp;task='.$_REQUEST['task'].'&amp;Itemid='. $Itemid;
?>

<table width='100%' border='0' cellspacing='1' cellpadding='0'>
    <tr>
        <td colspan="2"><div align="center"><?php echo $pageNav->writePagesLinks($link); ?></div></td>
    </tr>
    <tr>
        <td><?php echo $pageNav->writePagesCounter();?></td><td><div align="right"><?php echo _EZREALTY_LISTINGS_DISPLAYNUM;?> <?php echo $pageNav->getLimitBox($link);?></div></td>

    </tr>
</table>

</form>

<?php


}else{


?>

<table width='100%' border='0' cellspacing='1' cellpadding='0'>
	<tr>
		<td colspan='2' class='sectiontableheader' width='100%'><?php echo _EZREALTY_RESULTS_RESULTS;?></td>
	</tr>
	<tr>
		<td class='h3'><br /><?php echo _EZREALTY_RESULTS_NORESULTS;?></td>
	</tr>
</table>

<?php

}


}



    /**************************************************\
                SHOW THE FILTERED QUICK SEARCH RESULTS
    \**************************************************/


function quickResults( $option, &$rows, $pageNav ) {
global $database, $Itemid, $mainframe, $mosConfig_live_site, $er_currencysign, $er_thumbwidth, $er_perpage, $er_imagedirectory;
global $er_states, $er_thumbcreation, $er_country, $er_listtemplate, $er_currencyformat, $mosConfig_absolute_path;
global $er_colcount, $er_colwidth, $er_currencypos, $er_useshortlist, $er_usepets, $er_uselug, $er_useprofile;

$mainframe->appendMetaTag( 'title', 	_EZREALTY_RESULTS_RESULTS );
$mainframe->setPageTitle( _EZREALTY_RESULTS_RESULTS );

$colcount 	= $er_colcount;
$colwidth 	= $er_colwidth;

DEFINE("TEMPLATE_PATH","components/com_ezrealty/forms/list_templates/".$er_listtemplate);

    $num_rows=ceil( count( $rows ) / 1 );
	if ($num_rows > 0) {


?>

<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td class="sectiontableheader"><?php echo _EZREALTY_RESULTS_RESULTS;?></td>
		</tr>
	</table>

<?php

	if ($er_listtemplate == 'multicolumn') {


echo "<table border='0' width='100%'>";
echo "<tr>";

    $rowcounter = 0;
    foreach($rows as $row) {

		$number = $row->price;

		if ($er_currencyformat==0) {
			$formatted_price = number_format($number);
		} else if ($er_currencyformat==1) {
			$formatted_price = number_format($number, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price = number_format($number, 0,",",".");
		}

      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";

if (file_exists(TEMPLATE_PATH.'/listshort.ezrealty.php')) {
  include(TEMPLATE_PATH.'/listshort.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}

	$rowcounter++;
	}
    if ($rowcounter%$colcount<>0) {
      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {
        echo "<td width='$colwidth' valign='top'> </td>";
      }
    }
    echo "</tr></table>";

} else {

	$k = 0;
	for ($i=0, $n=count( $rows ); $i < $n; $i++) {
	$row = &$rows[$i];

		$number = $row->price;

		if ($er_currencyformat==0) {
			$formatted_price = number_format($number);
		} else if ($er_currencyformat==1) {
			$formatted_price = number_format($number, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price = number_format($number, 0,",",".");
		}

if (file_exists(TEMPLATE_PATH.'/listshort.ezrealty.php')) {
  include(TEMPLATE_PATH.'/listshort.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}


}

	} 

?>

<form name="adminForm" action="index.php?option=<?php echo $option;?>&amp;task=<?php echo $_REQUEST['task'];?>&amp;Itemid=<?php echo $Itemid;?>" method="get">
<input type="hidden" name="option" value="<?php echo $option;?>" />
<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
<input type="hidden" name="task" value="<?php echo $_REQUEST['task'];?>" />
<input type="hidden" name="type" value="<?php echo $_REQUEST['type'];?>" />
<input type="hidden" name="locid5" value="<?php echo $_REQUEST['locid5'];?>" />
<input type="hidden" name="maxprice" value="<?php echo $_REQUEST['maxprice'];?>" />
<input type="hidden" name="direction" value="<?php echo $_REQUEST['direction'];?>" />

<?php

$link='index.php?option='.$option.'&amp;task='.$_REQUEST['task'].'&amp;Itemid='. $Itemid;
?>

<table width='100%' border='0' cellspacing='1' cellpadding='0'>
    <tr>
        <td colspan="2"><div align="center"><?php echo $pageNav->writePagesLinks($link); ?></div></td>
    </tr>
    <tr>
        <td><?php echo $pageNav->writePagesCounter();?></td><td><div align="right"><?php echo _EZREALTY_LISTINGS_DISPLAYNUM;?> <?php echo $pageNav->getLimitBox($link);?></div></td>

    </tr>
</table>

</form>

<?php


}else{


?>

<table width='100%' border='0' cellspacing='1' cellpadding='0'>
	<tr>
		<td colspan='2' class='sectiontableheader' width='100%'><?php echo _EZREALTY_RESULTS_RESULTS;?></td>
	</tr>
	<tr>
		<td class='h3'><br /><?php echo _EZREALTY_RESULTS_NORESULTS;?></td>
	</tr>
</table>

<?php

}


}



    /**************************************************\
        SHOW CONTACT BUSINESS DIRECTLY BY EMAIL FORM
    \**************************************************/

function contactBusiness( $option, &$row ) {
global $database, $Itemid, $mainframe, $my, $id, $mosConfig_live_site, $mosConfig_usecaptcha;

$link2 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=sendbusinesscontact&amp;Itemid='. $Itemid;


	# Add to Mailing List Form Check

?>
		<script type="text/javascript">
		<!--
		function validateviewing() {
			var form = document.viewing;
			// do field validation
			if (form.apptname.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR1;?>" );
			} else if (form.apptmail.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR2;?>" );
			} else if (form.telephone.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR3;?>" );
			} else if (form.datetime.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR9;?>" );
			} else {
				document.viewing.action = '<?php echo $link2; ?>';
				document.viewing.submit();
			}
		}
		//-->
		</script>

<table width="100%" cellspacing="0" cellpadding="3">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_VIEWDET_VIEWING;?></td>
	</tr>
</table>
		<form class="form" name="viewing" action="<?php echo $link2;?>" method="post">
			<input type="hidden" name="option" value="com_ezrealty" />
			<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
			<input type="hidden" name="task" value="sendbusinesscontact" />
			<input type="hidden" name="id" value="<?php echo $id;?>" />
				<table align="center" width="300" border="0" cellspacing="1" cellpadding="3">
					<tr><td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_VNAME;?>:<br /><input type="text" name="apptname" size="18" class="inputbox" maxlength="100" /></td>
						<td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_VMAIL;?>:<br /><input type="text" name="apptmail" size="18" class="inputbox" maxlength="100" /></td></tr>
						<tr><td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_VPHONE;?>:<br /><input type="text" name="telephone" size="18" class="inputbox" maxlength="100" /></td>
						<td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_VTIME;?>:<br /><textarea name="datetime" class="inputbox" rows="3" cols="18"></textarea></td></tr>

					<?php if ($mosConfig_usecaptcha == '1') { ?>
					<tr><td colspan="2" valign="top">
					<br /><?php echo _EZREALTY_ENTER_CAPTCHA;?> <input type="text" name="spamstop" maxlength="5" size="5" class="inputbox" title="" /><br />
					<img src="./includes/captcha.php" border="0" title="" alt="" align="absmiddle" /><br /><br />
					</td></tr>
					<?php } ?>					

					<tr><td colspan="2" valign="top"><input type="button" name="<?php echo _EZREALTY_VIEWDET_SEND;?>" value="<?php echo _EZREALTY_VIEWDET_SEND;?>" class="button" onclick="validateviewing()" /></td></tr>
				</table>
		</form>

<?php

  }



    /**************************************************\
               SHOW CONTACT OWNER BY SMS FORM
    \**************************************************/


function smsBusiness( $option, &$row ) {
global $database, $Itemid, $mainframe, $my, $id, $mosConfig_live_site, $er_memlistings, $er_mobile;

$link1 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=sendbusinesssms&amp;Itemid='. $Itemid;

?>

		<script type="text/javascript">
		<!--
		function validatesms() {
			var form = document.form1;
			// do field validation
			if (form.user.value == "") {
				alert( "<?php echo _EZREALTY_SELLER_SMS15;?>" );
			} else if (form.password.value == "") {
				alert( "<?php echo _EZREALTY_SELLER_SMS16;?>" );
			} else if (form.from.value == "") {
				alert( "<?php echo _EZREALTY_SELLER_SMS17;?>" );
			} else if (form.text.value == "") {
				alert( "<?php echo _EZREALTY_SELLER_SMS18;?>" );
			} else if (form.api_id.value == "") {
				alert( "<?php echo _EZREALTY_SELLER_SMS20;?>" );

			} else {
				document.form1.action = '<?php echo $link1; ?>';
				document.form1.submit();
			}
		}
		//-->
		</script>


<table width="100%" cellspacing="0" cellpadding="3">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_SELLER_SMS6;?></td>
	</tr>
</table>
<br />
<br />
<div align="center">
	<table border="0" width="470" cellspacing="0" cellpadding="0">
		<tr>
			<td width="60%" valign="top">

	<table border="1" width="100%" cellspacing="0" cellpadding="5">
		<tr>
			<td width="100%" valign="top">

		<form class="form" name="form1" action="<?php echo $link1;?>" method="get">
			<input type="hidden" name="option" value="com_ezrealty" />
			<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
			<input type="hidden" name="task" value="sendbusinesssms" />
			<input type="hidden" name="id" value="<?php echo $id;?>" />
			<input type="hidden" name="owner" value="<?php echo $row->owner;?>" />
			<input type="hidden" name="to" value="<?php echo stripslashes( $er_mobile );?>" />

			<table border="0" width="100%">
				<tr>
					<td valign="top" width="100%" colspan="3" align="center" class="sectiontableheader"><strong><?php echo _EZREALTY_SELLER_SMS22;?></strong></td>
				</tr>
				<tr>
					<td valign="top" width="47%">
					<?php echo _EZREALTY_SELLER_SMS7;?>:<br /><input type="text" name="user" id="user" size="19" class="inputbox" maxlength="50" /></td>
					<td valign="top" width="6%">&nbsp;</td>
					<td valign="top" width="47%">
					<?php echo _EZREALTY_SELLER_SMS8;?>:<br /><input type="password" name="password" id="password" size="19" class="inputbox" maxlength="50" /></td>
				</tr>
				<tr>
					<td valign="top" width="47%"><?php echo _EZREALTY_SELLER_SMS19;?>:<br /><input type="text" name="api_id" id="api_id" size="19" class="inputbox" maxlength="50" /></td>
					<td valign="top" width="6%">&nbsp;</td>
					<td valign="top" width="47%"><?php echo _EZREALTY_SELLER_SMS9;?>:<br /><input type="text" name="from" id="from" size="19" class="inputbox" maxlength="50" /></td>
				</tr>
				<tr>
					<td valign="top" width="100%" colspan="3">
					<?php echo _EZREALTY_SELLER_SMS10;?>:<br /><textarea name="text" id="text" class="inputbox" rows="2" cols="44" maxlength="150"></textarea><br />(<?php echo _EZREALTY_SELLER_SMS21;?>)
					</td>
				</tr>
				<tr>
					<td valign="bottom" width="100%" colspan="3"><input type="button" name="<?php echo _EZREALTY_VIEWDET_SEND;?>" value="<?php echo _EZREALTY_VIEWDET_SEND;?>" class="button" onclick="validatesms()" /> <input class="button" type="reset" name="<?php echo _EZREALTY_RESET;?>" value="<?php echo _EZREALTY_RESET;?>"></td>
				</tr>
			</table>

</form>

</td>
				</tr>
			</table>

			</td>
			<td width="40%" valign="top">

	<table border="0" width="100%" cellspacing="5" cellpadding="5">
		<tr>
			<td width="100%" valign="top">

<strong><?php echo _EZREALTY_SELLER_SMS23;?></strong><br />
<?php echo _EZREALTY_SELLER_SMS3;?> <a href="http://affiliates.clickatell.com/central/campaigns/redir.php?cid=2662">Clickatell</a> <?php echo _EZREALTY_SELLER_SMS4;?>
<br />
<br />
<?php echo _EZREALTY_SELLER_SMS5;?>
</td>

</td>
				</tr>
			</table>

		</tr>
	</table>
</div>

<br />


<?php

  }



    /**************************************************\
                SHOW THE JOIN MAILING LIST FORM
    \**************************************************/


function mailList( $option, &$row ) {
global $database, $Itemid, $mainframe, $my, $id, $mosConfig_live_site, $mosConfig_usecaptcha;


$link2 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=joinmaillist&amp;Itemid='. $Itemid;

	# Add to Mailing List Form Check

?>
		<script type="text/javascript">
		<!--
		function validatemaillist() {
			var form = document.maillist;
			// do field validation
			if (form.name.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR1;?>" );
			} else if (form.email.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR2;?>" );
			} else if (form.listinterest.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR7;?>" );
			} else {
				document.maillist.action = '<?php echo $link2; ?>';
				document.maillist.submit();
			}
		}
		//-->
		</script>

<table width="100%" cellspacing="0" cellpadding="3">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_VIEWDET_MAILING;?></td>
	</tr>
	<tr>
		<td align="center"><br /><?php echo _EZREALTY_VIEWDET_MAILING_SPEIL;?></td>
	</tr>
</table>

		<form class="form" name="maillist" action="<?php echo $link2;?>" method="post">
			<input type="hidden" name="option" value="com_ezrealty" />
			<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
			<input type="hidden" name="task" value="joinmaillist" />
			<input type="hidden" name="mailid" value="<?php echo $row->mailid;?>" />

				<table align="center" width="300" border="0" cellspacing="1" cellpadding="3">
					<tr><td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_VNAME;?>:<br /><input type="text" name="name" size="18" class="inputbox" maxlength="100" /></td>
						<td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_VMAIL;?>:<br /><input type="text" name="email" size="18" class="inputbox" maxlength="100" /></td></tr>
					<tr><td colspan="2" valign="top"><?php echo _EZREALTY_VIEWDET_INTERESTS;?>:<br /><textarea name="listinterest" class="inputbox" rows="3" cols="40"></textarea></td></tr>

					<?php if ($mosConfig_usecaptcha == '1') { ?>
					<tr><td colspan="2" valign="top">
					<br /><?php echo _EZREALTY_ENTER_CAPTCHA;?> <input type="text" name="spamstop" maxlength="5" size="5" class="inputbox" title="" /><br />
					<img src="./includes/captcha.php" border="0" title="" alt="" align="absmiddle" /><br /><br />
					</td></tr>
					<?php } ?>					

					<tr><td colspan="2" valign="top"><input type="button" name="<?php echo _EZREALTY_VIEWDET_SEND;?>" value="<?php echo _EZREALTY_VIEWDET_SEND;?>" class="button" onclick="validatemaillist()" /></td></tr>
				</table>
		</form>

<?php

  }


    /**************************************************\
                SHOW RECOMMEND TO FRIEND FORM
    \**************************************************/


function recommendListing( $option, &$row ) {
global $database, $Itemid, $mainframe, $my, $id, $mosConfig_live_site, $mosConfig_usecaptcha;


$link2 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=sendrecommend&amp;Itemid='. $Itemid;


	# Add to Mailing List Form Check

?>
		<script type="text/javascript">
		<!--
		function validaterecommend() {
			var form = document.recommend;
			// do field validation
			if (form.fromname.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR1;?>" );
			} else if (form.frommail.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR2;?>" );
			} else if (form.friendname.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR5;?>" );
			} else if (form.friendmail.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR6;?>" );
			} else {
				document.recommend.action = '<?php echo $link2; ?>';
				document.recommend.submit();

			}
		}
		//-->
		</script>

<table width="100%" cellspacing="0" cellpadding="3">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_VIEWDET_SEND_FRIEND;?></td>
	</tr>
</table>

		<form class="form" name="recommend" action="<?php echo $link2;?>" method="post">
			<input type="hidden" name="option" value="com_ezrealty" />
			<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
			<input type="hidden" name="task" value="sendrecommend" />
			<input type="hidden" name="id" value="<?php echo $id;?>" />
				<table align="center" width="300" border="0" cellspacing="1" cellpadding="3">
					<tr><td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_YOUR_NAME;?>:<br /><input type="text" name="fromname" size="18" class="inputbox" maxlength="100" /></td>
						<td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_YOUR_MAIL;?>:<br /><input type="text" name="frommail" size="18" class="inputbox" maxlength="100" /></td></tr>
						<tr><td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_FRIENDS_NAME;?>:<br /><input type="text" name="friendname" size="18" class="inputbox" maxlength="100" /></td>
						<td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_FRIENDS_MAIL;?>:<br /><input type="text" name="friendmail" size="18" class="inputbox" maxlength="100" /></td></tr>

					<?php if ($mosConfig_usecaptcha == '1') { ?>
					<tr><td colspan="2" valign="top">
					<br /><?php echo _EZREALTY_ENTER_CAPTCHA;?> <input type="text" name="spamstop" maxlength="5" size="5" class="inputbox" title="" /><br />
					<img src="./includes/captcha.php" border="0" title="" alt="" align="absmiddle" /><br /><br />
					</td></tr>
					<?php } ?>					

					<tr><td colspan="2" valign="top"><input type="button" name="<?php echo _EZREALTY_VIEWDET_SEND;?>" value="<?php echo _EZREALTY_VIEWDET_SEND;?>" class="button" onclick="validaterecommend()" /></td></tr>
				</table>
		</form>

<?php

  }



    /**************************************************\
        SHOW CONTACT PROPERTY SELLER EMAIL FORM
    \**************************************************/


function contactSeller( $option, &$row ) {
global $database, $Itemid, $mainframe, $my, $id, $mosConfig_live_site, $mosConfig_usecaptcha;


$link2 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=sendselleremail&amp;Itemid='. $Itemid;


	# Add to Mailing List Form Check

?>
		<script type="text/javascript">
		<!--
		function validateviewing() {
			var form = document.viewing;
			// do field validation
			if (form.apptname.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR1;?>" );
			} else if (form.apptmail.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR2;?>" );
			} else if (form.telephone.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR3;?>" );
			} else if (form.datetime.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR9;?>" );
			} else {
				document.viewing.action = '<?php echo $link2; ?>';
				document.viewing.submit();

			}
		}
		//-->
		</script>

<table width="100%" cellspacing="0" cellpadding="3">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_VIEWDET_SELLER_VIEWING;?></td>
	</tr>
</table>

		<form class="form" name="viewing" action="<?php echo $link2;?>" method="post">
			<input type="hidden" name="option" value="com_ezrealty" />
			<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
			<input type="hidden" name="task" value="sendselleremail" />
			<input type="hidden" name="id" value="<?php echo $row->id;?>" />
			<input type="hidden" name="mid" value="<?php echo $row->owner;?>" />
				<table align="center" width="300" border="0" cellspacing="1" cellpadding="3">
					<tr><td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_VNAME;?>:<br /><input type="text" name="apptname" size="18" class="inputbox" maxlength="100" /></td>
						<td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_VMAIL;?>:<br /><input type="text" name="apptmail" size="18" class="inputbox" maxlength="100" /></td></tr>
						<tr><td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_VPHONE;?>:<br /><input type="text" name="telephone" size="18" class="inputbox" maxlength="100" /></td>
						<td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_VTIME;?>:<br /><textarea name="datetime" class="inputbox" rows="3" cols="18"></textarea></td></tr>

					<?php if ($mosConfig_usecaptcha == '1') { ?>
					<tr><td colspan="2" valign="top">
					<br /><?php echo _EZREALTY_ENTER_CAPTCHA;?> <input type="text" name="spamstop" maxlength="5" size="5" class="inputbox" title="" /><br />
					<img src="./includes/captcha.php" border="0" title="" alt="" align="absmiddle" /><br /><br />
					</td></tr>
					<?php } ?>					

					<tr><td colspan="2" valign="top"><input type="button" name="<?php echo _EZREALTY_VIEWDET_SEND;?>" value="<?php echo _EZREALTY_VIEWDET_SEND;?>" class="button" onclick="validateviewing()" /></td></tr>
				</table>
		</form>

<?php

  }



    /**************************************************\
               SHOW CONTACT OWNER BY SMS FORM
    \**************************************************/


function doSMS( $option, &$row ) {
global $database, $Itemid, $mainframe, $my, $id, $mosConfig_live_site, $er_memlistings, $er_mobile;

$link1 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=send_sms&amp;Itemid='. $Itemid;

?>

		<script type="text/javascript">
		<!--
		function validatesms() {
			var form = document.form1;
			// do field validation
			if (form.user.value == "") {
				alert( "<?php echo _EZREALTY_SELLER_SMS15;?>" );
			} else if (form.password.value == "") {
				alert( "<?php echo _EZREALTY_SELLER_SMS16;?>" );
			} else if (form.from.value == "") {
				alert( "<?php echo _EZREALTY_SELLER_SMS17;?>" );
			} else if (form.text.value == "") {
				alert( "<?php echo _EZREALTY_SELLER_SMS18;?>" );
			} else if (form.api_id.value == "") {
				alert( "<?php echo _EZREALTY_SELLER_SMS20;?>" );

			} else {
				document.form1.action = '<?php echo $link1; ?>';
				document.form1.submit();
			}
		}
		//-->
		</script>


<table width="100%" cellspacing="0" cellpadding="3">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_SELLER_SMS6;?></td>
	</tr>
</table>
<br />
<br />
<div align="center">
	<table border="0" width="470" cellspacing="0" cellpadding="0">
		<tr>
			<td width="60%" valign="top">

	<table border="1" width="100%" cellspacing="0" cellpadding="5">
		<tr>
			<td width="100%" valign="top">

		<form class="form" name="form1" action="<?php echo $link1;?>" method="get">
			<input type="hidden" name="option" value="com_ezrealty" />
			<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
			<input type="hidden" name="task" value="send_sms" />
			<input type="hidden" name="id" value="<?php echo $row->id;?>" />
			<input type="hidden" name="owner" value="<?php echo $row->owner;?>" />
			<input type="hidden" name="to" value="<?php echo $row->dealer_sms;?>" />

			<table border="0" width="100%">
				<tr>
					<td valign="top" width="100%" colspan="3" align="center" class="sectiontableheader"><strong><?php echo _EZREALTY_SELLER_SMS22;?></strong></td>
				</tr>
				<tr>
					<td valign="top" width="47%">
					<?php echo _EZREALTY_SELLER_SMS7;?>:<br /><input type="text" name="user" id="user" size="19" class="inputbox" maxlength="50" /></td>
					<td valign="top" width="6%">&nbsp;</td>
					<td valign="top" width="47%">
					<?php echo _EZREALTY_SELLER_SMS8;?>:<br /><input type="password" name="password" id="password" size="19" class="inputbox" maxlength="50" /></td>
				</tr>
				<tr>
					<td valign="top" width="47%"><?php echo _EZREALTY_SELLER_SMS19;?>:<br /><input type="text" name="api_id" id="api_id" size="19" class="inputbox" maxlength="50" /></td>
					<td valign="top" width="6%">&nbsp;</td>
					<td valign="top" width="47%"><?php echo _EZREALTY_SELLER_SMS9;?>:<br /><input type="text" name="from" id="from" size="19" class="inputbox" maxlength="50" /></td>
				</tr>
				<tr>
					<td valign="top" width="100%" colspan="3">
					<?php echo _EZREALTY_SELLER_SMS10;?>:<br /><textarea name="text" id="text" class="inputbox" rows="2" cols="44" maxlength="150"></textarea><br />(<?php echo _EZREALTY_SELLER_SMS21;?>)
					</td>
				</tr>
				<tr>
					<td valign="bottom" width="100%" colspan="3"><input type="button" name="<?php echo _EZREALTY_VIEWDET_SEND;?>" value="<?php echo _EZREALTY_VIEWDET_SEND;?>" class="button" onclick="validatesms()" /> <input class="button" type="reset" name="<?php echo _EZREALTY_RESET;?>" value="<?php echo _EZREALTY_RESET;?>"></td>
				</tr>
			</table>

</form>

</td>
				</tr>
			</table>

			</td>
			<td width="40%" valign="top">

	<table border="0" width="100%" cellspacing="5" cellpadding="5">
		<tr>
			<td width="100%" valign="top">

<strong><?php echo _EZREALTY_SELLER_SMS23;?></strong><br />
<?php echo _EZREALTY_SELLER_SMS3;?> <a href="http://affiliates.clickatell.com/central/campaigns/redir.php?cid=2662">Clickatell</a> <?php echo _EZREALTY_SELLER_SMS4;?>
<br />
<br />
<?php echo _EZREALTY_SELLER_SMS5;?>
</td>

</td>
				</tr>
			</table>

		</tr>
	</table>
</div>

<br />


<?php

  }


    /**************************************************\
      SHOW CONTACT DEALER/SELLER PRIVATELY VIA THE PROFILE PAGE TO EMAIL FORM
    \**************************************************/


function contactProfile( $option, &$row ) {
global $database, $Itemid, $mainframe, $my, $id, $mosConfig_live_site, $mosConfig_usecaptcha;


$link2 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=sendcontactprofile&amp;Itemid='. $Itemid;


?>
		<script type="text/javascript">
		<!--
		function validateenquiry2() {
			var form = document.enquiry2;
			// do field validation
			if (form.name.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR1;?>" );
			} else if (form.email.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR2;?>" );
			} else if (form.telephone.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR3;?>" );
			} else if (form.short_message.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR9;?>" );
			} else {
				document.enquiry2.action = '<?php echo $link2; ?>';
				document.enquiry2.submit();

			}
		}
		//-->
		</script>

<table width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_PROFILE_SENDCONTACT;?></td>
	</tr>
</table>

<form class="form" name="enquiry2" action="<?php echo $link2;?>" method="post">
<input type="hidden" name="option" value="com_ezrealty" />
<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
<input type="hidden" name="task" value="sendcontactprofile" />
<input type="hidden" name="mid" value="<?php echo $row->mid;?>" />

				<table align="center" width="300" border="0" cellspacing="1" cellpadding="3">
					<tr><td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_VNAME;?>:<br /><input type="text" name="name" size="18" class="inputbox" maxlength="100" /></td>
						<td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_VMAIL;?>:<br /><input type="text" name="email" size="18" class="inputbox" maxlength="100" /></td></tr>
						<tr><td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_VPHONE;?>:<br /><input type="text" name="telephone" size="18" class="inputbox" maxlength="100" /></td>
						<td width="30%" valign="top"><?php echo _EZREALTY_MSG;?>:<br /><textarea name="short_message" class="inputbox" rows="3" cols="18"></textarea></td></tr>

					<?php if ($mosConfig_usecaptcha == '1') { ?>
					<tr><td colspan="2" valign="top">
					<br /><?php echo _EZREALTY_ENTER_CAPTCHA;?> <input type="text" name="spamstop" maxlength="5" size="5" class="inputbox" title="" /><br />
					<img src="./includes/captcha.php" border="0" title="" alt="" align="absmiddle" /><br /><br />
					</td></tr>
					<?php } ?>					

	<tr>
		<td colspan="2" valign="top"><input type="button" name="<?php echo _EZREALTY_VIEWDET_SEND;?>" value="<?php echo _EZREALTY_VIEWDET_SEND;?>" class="button" onclick="validateenquiry2()" /></td>
	</tr>
</table>

</form>

<?php

  }



    /**************************************************\
       SHOW CONTACT DEALER/OWNER PRIVATELY VIA THE PROFILE PAGE BY SMS FORM
    \**************************************************/


function smsProfile( $option, &$row ) {
global $database, $Itemid, $mainframe, $my, $id, $mosConfig_live_site;

$link1 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=sendprofilesms&amp;Itemid='. $Itemid;

?>

		<script type="text/javascript">
		<!--
		function validatesms1() {
			var form = document.form1;
			// do field validation
			if (form.user.value == "") {
				alert( "<?php echo _EZREALTY_SELLER_SMS15;?>" );
			} else if (form.password.value == "") {
				alert( "<?php echo _EZREALTY_SELLER_SMS16;?>" );
			} else if (form.from.value == "") {
				alert( "<?php echo _EZREALTY_SELLER_SMS17;?>" );
			} else if (form.text.value == "") {
				alert( "<?php echo _EZREALTY_SELLER_SMS18;?>" );
			} else if (form.api_id.value == "") {
				alert( "<?php echo _EZREALTY_SELLER_SMS20;?>" );

			} else {
				document.form1.action = '<?php echo $link1; ?>';
				document.form1.submit();
			}
		}
		//-->
		</script>


<table width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_PROFILE_SMSCONTACT;?></td>
	</tr>
</table>
<br />
<br />
<div align="center">

<table border="0" width="470" cellspacing="0" cellpadding="0">
	<tr>
		<td width="60%" valign="top">
			<table border="1" width="100%" cellspacing="0" cellpadding="5">
				<tr>
					<td width="100%" valign="top">

						<form class="form" name="form1" action="<?php echo $link1;?>" method="get">
						<input type="hidden" name="option" value="com_ezrealty" />
						<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
						<input type="hidden" name="task" value="sendprofilesms" />
						<input type="hidden" name="mid" value="<?php echo $row->mid;?>" />

			<table border="0" width="100%">
				<tr>
					<td valign="top" width="100%" colspan="3" align="center" class="sectiontableheader"><strong><?php echo _EZREALTY_SELLER_SMS22;?></strong></td>
				</tr>
				<tr>
					<td valign="top" width="47%">
					<?php echo _EZREALTY_SELLER_SMS7;?>:<br /><input type="text" name="user" id="user" size="19" class="inputbox" maxlength="50" /></td>
					<td valign="top" width="6%">&nbsp;</td>
					<td valign="top" width="47%">
					<?php echo _EZREALTY_SELLER_SMS8;?>:<br /><input type="password" name="password" id="password" size="19" class="inputbox" maxlength="50" /></td>
				</tr>
				<tr>
					<td valign="top" width="47%"><?php echo _EZREALTY_SELLER_SMS19;?>:<br /><input type="text" name="api_id" id="api_id" size="19" class="inputbox" maxlength="50" /></td>
					<td valign="top" width="6%">&nbsp;</td>
					<td valign="top" width="47%"><?php echo _EZREALTY_SELLER_SMS9;?>:<br /><input type="text" name="from" id="from" size="19" class="inputbox" maxlength="50" /></td>
				</tr>
				<tr>
					<td valign="top" width="100%" colspan="3">
					<?php echo _EZREALTY_SELLER_SMS10;?>:<br /><textarea name="text" id="text" class="inputbox" rows="2" cols="44" maxlength="150"></textarea><br />(<?php echo _EZREALTY_SELLER_SMS21;?>)
					</td>
				</tr>
				<tr>
					<td valign="bottom" width="100%" colspan="3"><input type="button" name="<?php echo _EZREALTY_VIEWDET_SEND;?>" value="<?php echo _EZREALTY_VIEWDET_SEND;?>" class="button" onclick="validatesms1()" /> <input class="button" type="reset" name="<?php echo _EZREALTY_RESET;?>" value="<?php echo _EZREALTY_RESET;?>"></td>
				</tr>
			</table>
						</form>
					</td>
				</tr>
			</table>
		</td>
		<td width="40%" valign="top">
	<table border="0" width="100%" cellspacing="5" cellpadding="5">
		<tr>
			<td width="100%" valign="top">

<strong><?php echo _EZREALTY_SELLER_SMS23;?></strong><br />
<?php echo _EZREALTY_SELLER_SMS3;?> <a href="http://affiliates.clickatell.com/central/campaigns/redir.php?cid=2662">Clickatell</a> <?php echo _EZREALTY_SELLER_SMS4;?>
<br />
<br />
<?php echo _EZREALTY_SELLER_SMS5;?>
</td>

				</tr>
			</table>
		</td>
	</tr>
</table>
</div>
<br />


<?php

  }




    /**************************************************\
           SHOW SALES LEAD ENQUIRY FORM
    \**************************************************/


function leadEnquiry( $option, &$row ) {
global $database, $Itemid, $mainframe, $my, $id, $mosConfig_live_site, $er_reglead, $mosConfig_usecaptcha;


$link2 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=enquiry2&amp;Itemid='. $Itemid;

if ( $er_reglead ){


	# Add to Mailing List Form Check

?>
		<script type="text/javascript">
		<!--
		function validateviewing() {
			var form = document.viewing;
			// do field validation
			if (form.enqname.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR1;?>" );
			} else if (form.enqmail.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR2;?>" );
			} else if (form.telephone.value == "") {
				alert( "<?php echo _EZREALTY_EMAIL_ERROR3;?>" );
			} else if (form.enqmessage.value == "") {
				alert( "<?php echo _EZREALTY_LEAD_RESPONSEERROR;?>" );
			} else {
				document.viewing.action = '<?php echo $link2; ?>';
				document.viewing.submit();

			}
		}
		//-->
		</script>

<table width="100%" cellspacing="0" cellpadding="3">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_LEADCONTACT_PROMO;?> (id# <?php echo $id;?>)</td>
	</tr>
</table>

		<form class="form" name="viewing" action="<?php echo $link2;?>" method="post">
			<input type="hidden" name="option" value="com_ezrealty" />
			<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
			<input type="hidden" name="task" value="enquiry2" />
			<input type="hidden" name="id" value="<?php echo $id;?>" />

				<table align="center" width="300" border="0" cellspacing="1" cellpadding="3">
					<tr><td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_VNAME;?>:<br /><input type="text" name="enqname" size="18" class="inputbox" maxlength="100" /></td>
						<td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_VMAIL;?>:<br /><input type="text" name="enqmail" size="18" class="inputbox" maxlength="100" /></td></tr>
						<tr><td width="30%" valign="top"><?php echo _EZREALTY_VIEWDET_VPHONE;?>:<br /><input type="text" name="telephone" size="18" class="inputbox" maxlength="100" /></td>
						<td width="30%" valign="top"><?php echo _EZREALTY_SELLER_SMS10;?>:<br /><textarea name="enqmessage" class="inputbox" rows="3" cols="18"></textarea></td></tr>

					<?php if ($mosConfig_usecaptcha == '1') { ?>
					<tr><td colspan="2" valign="top">
					<br /><?php echo _EZREALTY_ENTER_CAPTCHA;?> <input type="text" name="spamstop" maxlength="5" size="5" class="inputbox" title="" /><br />
					<img src="./includes/captcha.php" border="0" title="" alt="" align="absmiddle" /><br /><br />
					</td></tr>
					<?php } ?>					

					<tr><td colspan="2" valign="top"><input type="button" name="<?php echo _EZREALTY_VIEWDET_SEND;?>" value="<?php echo _EZREALTY_VIEWDET_SEND;?>" class="button" onclick="validateviewing()" /></td></tr>
				</table>
		</form>

<?php

	}

}




    /**************************************************\
      			  SHOW ADD NEW LOCALITY FORM
    \**************************************************/


function editLocalities( $option, $row, $lists ) {
global $database, $Itemid, $mainframe, $my, $id, $mosConfig_live_site, $er_stateloc;

mosMakeHtmlSafe( $row );

$link2 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=saveloc&amp;Itemid='. $Itemid;

	# Add Locality Form Check

?>

		<script type="text/javascript">
		<!--
		function validatelocality() {
			var form = document.newloc;
			// do field validation

			if (form.ezcity.value == "") {
				alert( "<?php echo _EZREALTY_MODLOC_ERROR1;?>" );

			<?php if ( $er_stateloc == 1 ) { ?>

			} else if (form.stateid.value == "0"){
				alert( "<?php echo _EZREALTY_DETAILS_ERROR3;?>" );

			<?php } ?>

			} else {
				document.newloc.action = '<?php echo $link2; ?>';
				document.newloc.submit();

			}
		}
		//-->
		</script>

<table width="100%" cellspacing="0" cellpadding="3">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_MODLOC_ADD .' '. _EZREALTY_MODLOC_TITLE;?></td>
	</tr>
</table>

		<form class="form" name="newloc" action="<?php echo $link2;?>" method="post">
			<input type="hidden" name="option" value="com_ezrealty" />
			<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
			<input type="hidden" name="task" value="saveloc" />
			<input type="hidden" name="locid" value="<?php echo $row->locid;?>" />


	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
		<tr class="row0">
			<td width="200"><?php echo _EZREALTY_MODLOC_LOC;?>:</td>
			<td><input class="inputbox" type="text" name="ezcity" size="30" value="<?php echo $row->ezcity;?>" /></td>
		</tr>

<?php if ( $er_stateloc == 1 ) { ?>

		<tr class="row1">
			<td valign="top" ><?php echo _EZREALTY_DETAILS_SELSTATE;?></td>
			<td nowrap ><?php echo $lists['stateid'];?></td>
		</tr>

<?php } ?>

		<tr class="row0">
			<td width="200"><?php echo _EZREALTY_LOCALITY_DESC;?>:</td>
			<td><textarea class="inputbox" cols="40" rows="5" name="ezcity_desc" id="ezcity_desc"><?php echo $row->ezcity_desc;?></textarea></td>
		</tr>

	</table>
<br /><br />

<div align="center"><input type="button" name="<?php echo _EZREALTY_CHECK_GO;?>" value="<?php echo _EZREALTY_CHECK_GO;?>" class="button" onclick="validatelocality()" /></div>

</form>


<?php

  }


    /**************************************************\
      			  SHOW ADD NEW STATE FORM
    \**************************************************/


function editStates( $option, $row ) {
global $database, $Itemid, $mainframe, $my, $id, $mosConfig_live_site;

mosMakeHtmlSafe( $row );

$link2 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=savestate&amp;Itemid='. $Itemid;


	# Add State Form Check

?>

		<script type="text/javascript">
		<!--
		function validatestate() {
			var form = document.newstate;
			// do field validation
			if (form.name.value == "") {
				alert( "<?php echo _EZREALTY_STATE_ERROR1;?>" );
			} else {
				document.newstate.action = '<?php echo $link2; ?>';
				document.newstate.submit();

			}
		}
		//-->
		</script>

<table width="100%" cellspacing="0" cellpadding="3">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_STATE_ADD .' '. _EZREALTY_STATE_TITLE2;?></td>
	</tr>
</table>

		<form class="form" name="newstate" action="<?php echo $link2;?>" method="post">
			<input type="hidden" name="option" value="com_ezrealty" />
			<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
			<input type="hidden" name="task" value="savestate" />
			<input type="hidden" name="stid" value="<?php echo $row->stid;?>" />


	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
		<tr class="row0">
			<td width="200"><?php echo _EZREALTY_STATE_LOC;?>:</td>
			<td><input class="inputbox" type="text" name="name" size="30" maxlength="100" value="<?php echo $row->name;?>" /></td>
		</tr>
	</table>
<br /><br />

<div align="center"><input type="button" name="<?php echo _EZREALTY_CHECK_GO;?>" value="<?php echo _EZREALTY_CHECK_GO;?>" class="button" onclick="validatestate()" /></div>

</form>


<?php

  }


    /**************************************************\
      			  SHOW ADD NEW COUNTRY FORM
    \**************************************************/


function editCountrys( $option, $row ) {
global $database, $Itemid, $mainframe, $my, $id, $mosConfig_live_site;

mosMakeHtmlSafe( $row );

$link2 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=savecountry&amp;Itemid='. $Itemid;


	# Add State Form Check

?>

		<script type="text/javascript">
		<!--
		function validatecountry() {
			var form = document.newcountry;
			// do field validation
			if (form.name.value == "") {
				alert( "<?php echo _EZREALTY_COUNTRY_ERROR1;?>" );
			} else {
				document.newcountry.action = '<?php echo $link2; ?>';
				document.newcountry.submit();

			}
		}
		//-->
		</script>

<table width="100%" cellspacing="0" cellpadding="3">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_COUNTRY_ADD .' '. _EZREALTY_COUNTRY_TITLE2;?></td>
	</tr>
</table>

		<form class="form" name="newcountry" action="<?php echo $link2;?>" method="post">
			<input type="hidden" name="option" value="com_ezrealty" />
			<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
			<input type="hidden" name="task" value="savecountry" />
			<input type="hidden" name="cnid" value="<?php echo $row->cnid;?>" />


	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
		<tr class="row0">
			<td width="200"><?php echo _EZREALTY_COUNTRY_LOC;?>:</td>
			<td><input class="inputbox" type="text" name="name" size="30" maxlength="100" value="<?php echo $row->name;?>" /></td>
		</tr>
	</table>
<br /><br />

<div align="center"><input type="button" name="<?php echo _EZREALTY_CHECK_GO;?>" value="<?php echo _EZREALTY_CHECK_GO;?>" class="button" onclick="validatecountry()" /></div>

</form>


<?php

  }



    /**************************************************\
       DISPLAY A LIST OF DEALER/SELLER PROFILE RESULTS
    \**************************************************/


function dealerResults( $option, &$rows, $pageNav ) {
global $database, $Itemid, $mainframe, $my, $mosConfig_live_site, $er_catthumbwidth, $mosConfig_absolute_path;

$mainframe->appendMetaTag( 'title', 	_EZREALTY_PROFILE_AGSELLERS );
$mainframe->setPageTitle( _EZREALTY_PROFILE_AGSELLERS );

    $num_rows=ceil( count( $rows ) / 1 );
	if ($num_rows > 0) {


?>

<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_RESULTS_RESULTS;?></td>
	</tr>
</table>

<?php

			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
				$row = &$rows[$i];


$link2 = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=showprofile&amp;id='. $row->mid .'&amp;Itemid='. $Itemid );


?>


<table border="0" width="100%" cellpadding="5" onmouseover="EZOver(this)" onmouseout="EZOut(this)" onclick="location.href='<?php echo $link2;?>'">
	<tr>
		<td valign="top" width="<?php echo $er_catthumbwidth;?>">
		<?php if ( !$row->dealer_image ) { ?><img src="components/com_ezrealty/profiles/nothumb.jpg" alt="" align="left" width="60" hspace="10" />
		<?php } else { ?><img src="components/com_ezrealty/profiles/<?php echo $row->dealer_image;?>" alt="" align="left" width="60" hspace="10" />
		<?php } ?>
		</td>
		<td valign="top"><span class="h3"><?php echo $row->dealer_name;?> <?php if ($row->dealer_company) { ?>- <?php echo $row->dealer_company;?><?php } ?></span><br />
		<?php if ($row->dealer_locality) { ?><?php echo _EZREALTY_PROFILE_LOCALITY;?>:&nbsp;<?php echo $row->dealer_locality;?><?php } ?><br />
		<?php echo $row->dealer_info;?><br />... <a href="<?php echo $link2;?>"><strong><?php echo _EZREALTY_PROFILER_CBPROFILE;?></strong></a>
		</td>
	</tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">
	<tr>
		<td><img src="components/com_ezrealty/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>
	</tr>
</table>


<?php

    } 

?>

<form name="adminForm" action="index.php?option=<?php echo $option;?>&amp;task=<?php echo $_REQUEST['task'];?>&amp;Itemid=<?php echo $Itemid;?>" method="get">
<input type="hidden" name="option" value="<?php echo $option;?>" />
<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
<input type="hidden" name="task" value="<?php echo $_REQUEST['task'];?>" />
<input type="hidden" name="dealer_locality" value="<?php echo $_REQUEST['dealer_locality'];?>" />

<?php

$link='index.php?option='.$option.'&amp;task='.$_REQUEST['task'].'&amp;Itemid='. $Itemid;
?>

<table width='100%' border='0' cellspacing='1' cellpadding='0'>
    <tr>
        <td colspan="2"><div align="center"><?php echo $pageNav->writePagesLinks($link); ?></div></td>
    </tr>
    <tr>
        <td><?php echo $pageNav->writePagesCounter();?></td><td><div align="right"><?php echo _EZREALTY_LISTINGS_DISPLAYNUM;?> <?php echo $pageNav->getLimitBox($link);?></div></td>

    </tr>
</table>

</form>

<?php


}else{


?>

<table width='100%' border='0' cellspacing='1' cellpadding='0'>
	<tr>
		<td colspan='2' class='sectiontableheader' width='100%'><?php echo _EZREALTY_RESULTS_RESULTS;?></td>
	</tr>
	<tr>
		<td class='h3'><br /><?php echo _EZREALTY_RESULTS_NORESULTS;?></td>
	</tr>
</table>

<?php

}


}





    /**************************************************\
  		 	DISPLAY A LIST OF DEALER/SELLER PROFILES
    \**************************************************/


function displayProfiles( $option, &$rows, $pageNav, $total, $lists ) {
global $database, $Itemid, $mainframe, $mosConfig_live_site, $mosConfig_list_limit, $er_catthumbwidth, $mosConfig_absolute_path;

$mainframe->appendMetaTag( 'title', 	_EZREALTY_PROFILE_AGSELLERS );
$mainframe->setPageTitle( _EZREALTY_PROFILE_AGSELLERS );

?>

<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_PROFILE_AGSELLERS;?></td>
	</tr>
</table>

<?php

    $num_rows=ceil( count( $rows ) / 1 );
	if ($num_rows > 0) {

	$k = 0;
	for ($i=0, $n=count( $rows ); $i < $n; $i++) {
	$row = &$rows[$i];

$link2 = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=showprofile&amp;id='. $row->mid .'&amp;Itemid='. $Itemid );

?>

<table border="0" width="100%" cellpadding="5" onmouseover="EZOver(this)" onmouseout="EZOut(this)" onclick="location.href='<?php echo $link2;?>'">
	<tr>
		<td valign="top" width="<?php echo $er_catthumbwidth;?>">
		<?php if ( !$row->dealer_image ) { ?><img src="components/com_ezrealty/profiles/nothumb.jpg" alt="" align="left" width="60" hspace="10" />
		<?php } else { ?><img src="components/com_ezrealty/profiles/<?php echo $row->dealer_image;?>" alt="" align="left" width="60" hspace="10" />
		<?php } ?>
		</td>
		<td valign="top"><span class="h3"><?php echo $row->dealer_name;?> <?php if ($row->dealer_company) { ?>- <?php echo $row->dealer_company;?><?php } ?></span><br />
		<?php if ($row->dealer_locality) { ?><?php echo _EZREALTY_PROFILE_LOCALITY;?>:&nbsp;<?php echo $row->dealer_locality;?><?php } ?><br />
		<?php echo $row->dealer_info;?><br />... <a href="<?php echo $link2;?>"><strong><?php echo _EZREALTY_PROFILER_CBPROFILE;?></strong></a>
		</td>
	</tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">
	<tr>
		<td><img src="components/com_ezrealty/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>
	</tr>
</table>

<?php

	} 

}else{

?>

<table width='100%' border='0' cellspacing='1' cellpadding='0'>
	<tr>
		<td class='h3'><br /><br /><?php echo _EZREALTY_PROFILE_NOPROFILES;?><br /><br /><br /></td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">
	<tr>
		<td><img src="components/com_ezrealty/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>
	</tr>
</table>

<?php

}

?>

<form name="adminForm" action="index.php?option=<?php echo $option;?>&amp;Itemid=<?php echo $Itemid;?>" method="get">
<input type="hidden" name="option" value="<?php echo $option;?>" />
<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
<input type="hidden" name="task" value="<?php echo $_REQUEST['task'];?>" />

<?php

$link='index.php?option='.$option.'&amp;task=displayprofiles&amp;Itemid='. $Itemid;
?>

<table width='100%' border='0' cellspacing='1' cellpadding='0'>
    <tr>
        <td colspan="2"><div align="center"><?php echo $pageNav->writePagesLinks($link); ?></div></td>
    </tr>
    <tr>
        <td><?php echo $pageNav->writePagesCounter();?></td><td><div align="right"><?php echo _EZREALTY_LISTINGS_DISPLAYNUM;?> <?php echo $pageNav->getLimitBox($link);?></div></td>

    </tr>
</table>

</form>
<br />
<table width="100%" cellpadding="15" class="pollstableborder">
	<tr>
		<td>

		<form name="dealersearchfilter" action="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=dealerresults");?>" method="post">
		<input type="hidden" name="option" value="com_ezrealty" />
		<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
		<input type="hidden" name="task" value="dealerresults" />

		<div align="center">
			<table border="0">

				<tr>
					<td><strong><?php echo _EZREALTY_PROFILE_FINDDEALER;?>:-</strong>&nbsp;<?php echo $lists['dealerloc'];?>&nbsp;<input class="button" type="submit" name="<?php echo _EZREALTY_SEARCH_SEARCH;?>" value="<?php echo _EZREALTY_SEARCH_SEARCH;?>" /></td>
				</tr>
			</table>
		</div>

		</form>

		</td>
	</tr>
</table>


<?php


}








    /**************************************************\
      		  SHOW SELLER'S PROFILE
    \**************************************************/


function showProfile( $option, &$row ) {
global $database, $Itemid, $mainframe, $my, $id, $mosConfig_live_site, $er_usesms, $er_usemap, $er_mapsys, $er_mapwidth, $er_mapheight;
global $er_online_status;

$mainframe->appendMetaTag( 'title', 	$row->dealer_name );
$mainframe->setPageTitle( $row->dealer_name );
$mainframe->appendMetaTag( 'description', 	$row->dealer_info );

?>

<?php
$status3 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=500,height=400,directories=no,location=no';
$link5 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;Itemid='.$Itemid.'&amp;task=contactprofile&amp;id='. $row->mid;

$status4 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=500,height=400,directories=no,location=no';
$link6 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;Itemid='.$Itemid.'&amp;task=smsprofile&amp;id='. $row->mid;
?>


<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td class="sectiontableheader"><strong><?php echo $row->dealer_name; ?></strong> 

<?php if ($row->dealer_type == 1) { ?>(<?php echo _EZREALTY_LISTER_AGENT;?>)<?php } ?>
<?php if ($row->dealer_type == 2) { ?>(<?php echo _EZREALTY_LISTER_OWNER;?>)<?php } ?>
<?php if ($row->dealer_type == 3) { ?>(<?php echo _EZREALTY_LISTER_BROKER;?>)<?php } ?>


	</tr>
</table>

<br />

<table cellpadding="0" cellspacing="0" border="0" width="95%">
	<tr>
		<td>


				<table class="admintable">
				<tbody>

	<tr rowspan="2">
			<td valign="top" width="150">

			<?php if ( !$row->dealer_image ) { ?><img src="components/com_ezrealty/profiles/nothumb.jpg" alt="" align="left" hspace="10" />
			<?php } else { ?><img src="components/com_ezrealty/profiles/<?php echo $row->dealer_image;?>" alt="" align="left" hspace="10" />
			<?php } ?>

<p>&nbsp;</p>


			</td>
		<td valign="top">
<strong><?php echo $row->dealer_name; ?></strong> <?php if ($row->dealer_type == 1) { ?>(<?php echo _EZREALTY_LISTER_AGENT;?>)<?php } ?>
<?php if ($row->dealer_type == 2) { ?>(<?php echo _EZREALTY_LISTER_OWNER;?>)<?php } ?>
<?php if ($row->dealer_type == 3) { ?>(<?php echo _EZREALTY_LISTER_BROKER;?>)<?php } ?>
<br />
<strong><?php echo $row->dealer_company; ?></strong><br /><br />

<?php if ( $row->show_addy ){ ?>
<?php echo $row->dealer_address1; ?> <?php echo $row->dealer_address2; ?><br />
<?php echo $row->dealer_locality; ?> <?php echo $row->dealer_state; ?> <?php echo $row->dealer_pcode; ?><br />
<?php echo $row->dealer_country; ?><br /><br />
<?php } ?>


<?php echo $row->dealer_info; ?><br /><br />

<?php if ( $row->dealer_phone ) { ?>
<img src="components/com_ezrealty/images/arrow.png" alt="" align="left" /><?php echo _EZREALTY_PROFILE_PHONE; ?>:&nbsp;<?php echo $row->dealer_phone;?><br />
<?php } if ( $row->dealer_mobile ) { ?>
<img src="components/com_ezrealty/images/arrow.png" alt="" align="left" /><?php echo _EZREALTY_PROFILE_MOBILE2; ?>:&nbsp;<?php echo $row->dealer_mobile;?><br />
<?php } if ( $row->dealer_fax ) { ?>
<img src="components/com_ezrealty/images/arrow.png" alt="" align="left" /><?php echo  _EZREALTY_PROFILE_FAX; ?>:&nbsp;<?php echo $row->dealer_fax;?><br />
<?php } ?>

<img src="components/com_ezrealty/images/arrow.png" alt="" align="left" /><?php echo _EZREALTY_PROFILE_EMAIL; ?>:&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link5; ?>','win2','<?php echo $status3; ?>');" title="<?php echo _EZREALTY_SELLER_C;?>"><?php echo _EZREALTY_SELLER_C;?></a><br />
<?php if ( $er_usesms && $row->show_sms ) { ?>
<img src="components/com_ezrealty/images/arrow.png" alt="" align="left" /><?php echo _EZREALTY_PROFILE_TEXT; ?>:&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link6; ?>','win2','<?php echo $status4; ?>');" title="<?php echo _EZREALTY_SELLER_SMS2;?>"><?php echo _EZREALTY_SELLER_SMS2;?></a><br />
<?php } ?>
<br />
<?php if ( $row->dealer_web ) { ?>
<img src="components/com_ezrealty/images/arrow.png" alt="" align="left" /><?php echo _EZREALTY_PROFILE_WEB; ?>:&nbsp;<a target="_blank" href="<?php echo  $row->dealer_web; ?>"><?php echo  $row->dealer_web; ?></a><br />
<?php } if ( $row->dealer_blog ) { ?>
<img src="components/com_ezrealty/images/arrow.png" alt="" align="left" /><?php echo _EZREALTY_PROFILE_BLOG; ?>:&nbsp;<a target="_blank" href="<?php echo  $row->dealer_blog; ?>"><?php echo  $row->dealer_blog; ?></a><br /><br />
<?php } ?>


<?php if ( $row->dealer_icq ) { ?>
<img src="components/com_ezrealty/images/arrow.png" alt="" align="left" /><?php echo "ICQ"; ?>:&nbsp;<?php echo  $row->dealer_icq; ?><br />
<?php } ?>
<?php if ( $row->dealer_skype ) { ?>
<img src="components/com_ezrealty/images/arrow.png" alt="" align="left" /><?php echo "Skype"; ?>:&nbsp;<?php echo  $row->dealer_skype; ?><br />
<?php } ?>
<?php if ( $row->dealer_ymsgr ) { ?>
<img src="components/com_ezrealty/images/arrow.png" alt="" align="left" /><?php echo "Yahoo"; ?>:&nbsp;<?php echo  $row->dealer_ymsgr; ?><br /><br />
<?php } ?>


<img src="components/com_ezrealty/images/arrow.png" alt="" align="left" /><?php echo _EZREALTY_AGENT_CURRENTLISTINGS; ?>:&nbsp;<a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=dealerlistings&amp;id=$row->mid");?>"><?php echo  _EZREALTY_AGENT_MYLISTINGS; ?></a><br />


<br /><br />


	</td>


	</tr>


				</tbody>
				</table>

		</td>
	</tr>
	<tr>
		<td>




<!--MAKE SURE THEY WANT TO DISPLAY THE MAP-->			

<?php if ( $row->show_addy ){ ?>

<!--START MAPPING BOX-->			

<?php if ( $er_usemap ){ ?>

<?php if ( $er_mapsys == 1 ){ ?>

<!--START GOOGLE MAPPING BOX STUFF-->			

<script type="text/javascript">
//<![CDATA[
function load()
{
    if (GBrowserIsCompatible())
    {
        map = new GMap2(document.getElementById("map"));
        map.addControl(new GSmallMapControl());
        map.addControl(new GMapTypeControl());
        map.setCenter(new GLatLng(34.20725938207231, -77.947998046875), 15);
        map.setMapType(G_MAP_TYPE);
        geocoder = new GClientGeocoder();
        showAddress("<?php if ( $row->dealer_address1 ){ ?><?php echo $row->dealer_address1;?> <?php } ?><?php if ( $row->dealer_address2 ){ ?><?php echo $row->dealer_address2;?>, <?php } ?><?php if ( $row->dealer_locality ){ ?><?php echo $row->dealer_locality;?> <?php } ?><?php if ( $row->dealer_state ){ ?><?php echo $row->dealer_state;?> <?php } ?><?php if ( $row->dealer_country ){ ?><?php echo $row->dealer_country;?> <?php } ?>") ;
    }
    else
    {
        alert("<?php echo _EZREALTY_MAPPING_INCOMPATIBLE;?>");
    }
}


//]]>
</script>

						<div align="center">
							<table width="100%">
								<tr>
									<td>
										<div align="center">
											<table border="0" align="center">
												<tr valign='top'><td valign='top' align="left">
    <form action="#" onsubmit="showAddress(this.address.value); return false">
      <div id="map" style="width: <?php echo $er_mapwidth;?>px; height: <?php echo $er_mapheight;?>px"></div>
    </form>
</td></tr>
											</table>
										</div>
									</td>
								</tr>
							</table>
						</div>

<!--END GOOGLE MAPPING BOX-->			

<?php } ?>

<?php if ( $er_mapsys == 2 ){ ?>


<!--START YAHOO MAPPING BOX-->			

<div id="mapContainer"></div>

<script type="text/javascript">
// Create and display Map object at the address and with zoom level 3.
//Include your application ID.
var map = new Map("mapContainer", "YahooDemo", 
  "<?php if ( $row->dealer_address1 ){ ?><?php echo $row->dealer_address1;?> <?php } ?><?php if ( $row->dealer_address2 ){ ?><?php echo $row->dealer_address2;?>, <?php } ?><?php if ( $row->dealer_locality ){ ?><?php echo $row->dealer_locality;?> <?php } ?><?php if ( $row->dealer_state ){ ?><?php echo $row->dealer_state;?> <?php } ?><?php if ( $row->dealer_country ){ ?><?php echo $row->dealer_country;?> <?php } ?>", 3); 

map.addWidget(new SatelliteControlWidget());


// Make the map draggable 
map.addTool( new PanTool(), true );

// Create a POI marker object
marker1 = new CustomPOIMarker( '<?php if ( $row->dealer_address1 ){ ?><?php echo $row->dealer_address1;?> <?php } ?><?php if ( $row->dealer_address2 ){ ?><?php echo $row->dealer_address2;?>, <?php } ?><?php if ( $row->dealer_locality ){ ?><?php echo $row->dealer_locality;?> <?php } ?><?php if ( $row->dealer_state ){ ?><?php echo $row->dealer_state;?> <?php } ?><?php if ( $row->dealer_country ){ ?><?php echo $row->dealer_country;?> <?php } ?>)',
  '<?php echo $row->dealer_company;?>', '0xFF0000', '0xFFFFFF'); 

// Add the POI marker to the map and display it 
map.addMarkerByAddress( marker1, "<?php if ( $row->dealer_address1 ){ ?><?php echo $row->dealer_address1;?> <?php } ?><?php if ( $row->dealer_address2 ){ ?><?php echo $row->dealer_address2;?>, <?php } ?><?php if ( $row->dealer_locality ){ ?><?php echo $row->dealer_locality;?> <?php } ?><?php if ( $row->dealer_state ){ ?><?php echo $row->dealer_state;?> <?php } ?><?php if ( $row->dealer_country ){ ?><?php echo $row->dealer_country;?> <?php } ?>"); 

// Create a Navigator Widget object 
navWidget = new NavigatorWidget();  
// Add the Navigator Widget to the map and display it 
map.addWidget(navWidget); 

</script>


<!--END YAHOO MAPPING BOX-->			

<?php } ?>


<?php if ( $er_mapsys == 3 ){ ?>

<!--START GOOGLE COORDINATES MAPPING BOX STUFF-->			


<div align="center">



    <script type="text/javascript">
    //<![CDATA[
    
function load()
{

    if (GBrowserIsCompatible()) { 
 
      // A function to create the marker and set up the event window
      // Dont try to unroll this function. It has to be here for the function closure
      // Each instance of the function preserves the contends of a different instance
      // of the "marker" and "html" variables which will be needed later when the event triggers.    
 
      // Display the map, with some controls and set the initial location 
      var map = new GMap2(document.getElementById("dealermap"));
      map.addControl(new GLargeMapControl());
      map.addControl(new GMapTypeControl());
      map.setCenter(new GLatLng(<?php echo $row->dealer_declat;?>,<?php echo $row->dealer_declong;?>),15);
    
      // Set up marker 
    
      var point = new GLatLng(<?php echo $row->dealer_declat;?>,<?php echo $row->dealer_declong;?>);
      var marker = createMarker(point)
      map.addOverlay(marker);

    }
    
    // display a warning if the browser was not compatible
    else {
      alert("<?php echo _EZREALTY_MAPPING_INCOMPATIBLE;?>");
    }
 
    // This Javascript is based on code provided by the
    // Blackpool Community Church Javascript Team
    // http://www.commchurch.freeserve.co.uk/   
    // http://www.econym.demon.co.uk/googlemaps/

}

    //]]>

      function createMarker(point,html) {
        var marker = new GMarker(point);

        return marker;
      }

    </script>

   <div id="dealermap" style="width: <?php echo $er_mapwidth;?>px; height: <?php echo $er_mapheight;?>px"></div>


</div>

<!--END GOOGLE COORDINATES MAPPING BOX-->			

<?php } ?>


<?php } ?>


<!--END MAPPING BOX STUFF-->			


<?php } ?>






		</td>
	</tr>

</table>






<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">
	<tr>
		<td><img src="components/com_ezrealty/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>
	</tr>
</table>

<?php


}



    /**************************************************\
       	 	LIST THE AGENTS OWN LISTINGS
    \**************************************************/


function dealerListings( $option, &$rows, $id, $dealername, &$pageNav, $total ) {
global $database, $Itemid, $mainframe, $mosConfig_live_site, $mosConfig_list_limit, $er_listtemplate, $er_currencyformat;
global $er_currencypos, $er_sitetype, $er_currencysign, $er_thumbwidth, $er_imagedirectory, $er_thumbcreation;
global $er_colcount, $er_colwidth, $er_listtemplate, $mosConfig_absolute_path, $er_useshortlist;

$mainframe->appendMetaTag( 'title', 	_EZREALTY_AGENT_LISTINGSFOR.' '.$dealername );
$mainframe->setPageTitle( _EZREALTY_AGENT_LISTINGSFOR.' '.$dealername );

$colcount 	= $er_colcount;
$colwidth 	= $er_colwidth;

DEFINE("TEMPLATE_PATH","components/com_ezrealty/forms/list_templates/".$er_listtemplate);

?>

<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_AGENT_LISTINGSFOR;?> <?php echo $dealername;?></td>
	</tr>
</table>

<?php

    $num_rows=ceil( count( $rows ) / 1 );
	if ($num_rows > 0) {


	if ($er_listtemplate == 'multicolumn') {


echo "<table border='0' width='100%'>";
echo "<tr>";

    $rowcounter = 0;
    foreach($rows as $row) {

		$number = $row->price;

		if ($er_currencyformat==0) {
			$formatted_price = number_format($number);
		} else if ($er_currencyformat==1) {
			$formatted_price = number_format($number, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price = number_format($number, 0,",",".");
		}

      if (($rowcounter%$colcount==0) AND ($rowcounter<>0)) echo "</tr><tr>";

if (file_exists(TEMPLATE_PATH.'/listshort.ezrealty.php')) {
  include(TEMPLATE_PATH.'/listshort.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}

	$rowcounter++;
	}
    if ($rowcounter%$colcount<>0) {
      for ($i = 1; $i <= ($colcount-($rowcounter%$colcount)); $i++) {
        echo "<td width='$colwidth' valign='top'> </td>";
      }
    }
    echo "</tr></table>";

} else {

	$k = 0;
	for ($i=0, $n=count( $rows ); $i < $n; $i++) {
	$row = &$rows[$i];

		$number = $row->price;

		if ($er_currencyformat==0) {
			$formatted_price = number_format($number);
		} else if ($er_currencyformat==1) {
			$formatted_price = number_format($number, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price = number_format($number, 0,",",".");
		}

if (file_exists(TEMPLATE_PATH.'/listshort.ezrealty.php')) {
  include(TEMPLATE_PATH.'/listshort.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}


}


	} 

}else{

?>

<table width='100%' border='0' cellspacing='1' cellpadding='0'>
	<tr>
		<td class='h3'><br /><br /><?php echo _EZREALTY_DEALER_NOLISTINGS;?><br /><br /><br /></td>
	</tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">
	<tr>
		<td><img src="components/com_ezrealty/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>
	</tr>
</table>

<?php

}


?>

<form name="adminForm" action="index.php?option=<?php echo $option;?>&amp;Itemid=<?php echo $Itemid;?>" method="get">
<input type="hidden" name="option" value="<?php echo $option;?>" />
<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
<input type="hidden" name="task" value="<?php echo $_REQUEST['task'];?>" />
<input type="hidden" name="id" value="<?php echo $_REQUEST['id'];?>" />

<?php

$link='index.php?option='.$option.'&amp;task=dealerlistings&amp;id='.$id .'&amp;Itemid='. $Itemid;
?>

<table width='100%' border='0' cellspacing='1' cellpadding='0'>
    <tr>
        <td colspan="2"><div align="center"><?php echo $pageNav->writePagesLinks($link); ?></div></td>
    </tr>
    <tr>
        <td><?php echo $pageNav->writePagesCounter();?></td><td><div align="right"><?php echo _EZREALTY_LISTINGS_DISPLAYNUM;?> <?php echo $pageNav->getLimitBox($link);?></div></td>

    </tr>
</table>

</form>


<?php


}


    /**************************************************\
      		  ADD/EDIT SELLER'S PROFILE FORM
    \**************************************************/


function editProfile( $option, &$row, $lists, $list ) {
global $database, $Itemid, $mainframe, $my, $id, $mosConfig_live_site, $er_usesms, $er_logowidth, $er_logoheight, $er_profmaxwidth, $er_profmaxheight;


	# Profile Form Check

?>

		<script type="text/javascript">
		<!--
		function validatemyprofile() {
			var form = document.myprofile;
			// do field validation
			if (form.dealer_name.value == "") {
				alert( "<?php echo _EZREALTY_PROFILE_NAME;?>" );

			} else if (form.dealer_type.value == "0") {
				alert( "<?php echo _EZREALTY_PROFILE_ERROR_TYPE;?>" );

			} else if (form.dealer_email.value == ""){
				alert( "<?php echo _EZREALTY_PROFILE_EMAIL;?>" );

			} else if (form.dealer_locality.value == ""){
				alert( "<?php echo _EZREALTY_MODLOC_ERROR1;?>" );

			} else {
				document.myprofile.action = '<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid");?>';
				document.myprofile.submit();

			}
		}
		//-->
		</script>
<br />
<br />

<table cellpadding="0" cellspacing="0" border="0" width="95%">
	<tr>
		<td>

<form class="form" name="myprofile" action="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid");?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="option" value = "<?php echo $option;?>" />
	<input type="hidden" name="Itemid" value = "<?php echo $Itemid;?>" />
	<input type="hidden" name="prid" value = "<?php echo $row->prid; ?>" />
	<input type="hidden" name="task" value="saveprofile" />
	<input type="hidden" name="mid" value="<?php echo $my->id; ?>" />

	<table cellpadding="0" cellspacing="0" border="0" width="100%">
	    <tr>
	      <td width="100%" align="left" class="sectiontableheader"><?php echo $row->prid ? _EZREALTY_GENERIC_EDIT : _EZREALTY_GENERIC_ADD;?> <?php echo _EZREALTY_PROFILE_DETAILS;?></td>
	    </tr>
	</table>

<br />

<table width="100%" cellpadding="2" cellspacing="2">

		<tr>
			<td width="30%" class="key"><?php echo _EZREALTY_PROFILE_NAME; ?>:</td>
			<td><input class="inputbox" type="text" name="dealer_name" id="dealer_name" size="40" maxlength="60" value="<?php echo  $row->dealer_name ; ?>" /> <?php echo _EZREALTY_DETAILS_REQ;?></td>
		</tr>
		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_TYPE4; ?>:</td>
			<td><?php echo $lists['dealer_type'];?> <?php echo _EZREALTY_DETAILS_REQ;?></td>
		</tr>
		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_INTRO; ?>:</td>
			<td><textarea class="inputbox" cols="29" rows="5" id="dealer_info" name="dealer_info"><?php echo $row->dealer_info; ?></textarea></td>
		</tr>
		<tr>
			<td valign="top" class="key"><?php echo _EZREALTY_PROFILE_COMPANY; ?>:</td>
			<td><input class="inputbox" type="text" name="dealer_company" id="dealer_company" size="40" maxlength="60" value="<?php echo  $row->dealer_company ; ?>" /></td>
		</tr>
		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_ADDRESS1; ?>:</td>
			<td><input class="inputbox" type="text" name="dealer_address1" id="dealer_address1" size="15" maxlength="20" value="<?php echo $row->dealer_address1 ; ?>" /></td>
		</tr>
		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_ADDRESS2; ?>:</td>
			<td><input class="inputbox" type="text" name="dealer_address2" id="dealer_address2" size="40" maxlength="60" value="<?php echo $row->dealer_address2 ; ?>" /></td>
		</tr>
		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_LOCALITY; ?>:</td>
			<td><input class="inputbox" type="text" name="dealer_locality" id="dealer_locality" size="40" maxlength="60" value="<?php echo  $row->dealer_locality ; ?>" /> <?php echo _EZREALTY_DETAILS_REQ;?></td>
		</tr>
		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_PCODE; ?>:</td>
			<td><input class="inputbox" type="text" name="dealer_pcode" id="dealer_pcode" size="40" maxlength="60" value="<?php echo  $row->dealer_pcode ; ?>" /></td>
		</tr>
		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_STATE; ?>:</td>
			<td><input class="inputbox" type="text" name="dealer_state" id="dealer_state" size="40" maxlength="60" value="<?php echo  $row->dealer_state ; ?>" /></td>
		</tr>
		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_COUNTRY; ?>:</td>
			<td><input class="inputbox" type="text" name="dealer_country" id="dealer_country" size="40" maxlength="60" value="<?php echo  $row->dealer_country ; ?>" /></td>
		</tr>

  <tr>
    <td width="20%" valign="top"><br /> </td>
    <td width="80%" valign="top"><br /><a target="_blank" href="http://www.satsig.net/maps/lat-long-finder.htm"><strong>*** <?php echo _EZREALTY_FIND_COORDINATES;?> ***</strong></a></td>
  </tr>


  <tr>
    <td width="30%" valign="top"><br /><?php echo _EZREALTY_DETAILS_DECLAT;?>:</td>
    <td valign="top"><br /><input class="inputbox" type="text" name="declat" size="15" value="<?php echo $row->declat;?>" />  <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td width="30%" valign="top"><?php echo _EZREALTY_DETAILS_DECLONG;?>:</td>
    <td valign="top"><input class="inputbox" type="text" name="declong" size="15" value="<?php echo $row->declong;?>" />  <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_SHOWADDY; ?>:</td>
			<td><?php echo $lists['show_addy']; ?> <?php echo _EZREALTY_PROFILE_SHOWADDYDESC; ?></td>
		</tr>
		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_EMAIL; ?>:</td>
			<td><input class="inputbox" type="text" name="dealer_email" id="dealer_email" size="40" maxlength="60" value="<?php echo  $row->dealer_email ; ?>" /> <?php echo _EZREALTY_DETAILS_REQ;?></td>
		</tr>
		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_PHONE; ?>:</td>
			<td><input class="inputbox" type="text" name="dealer_phone" id="dealer_phone" size="40" maxlength="60" value="<?php echo  $row->dealer_phone ; ?>" /></td>
		</tr>
		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_FAX; ?>:</td>
			<td><input class="inputbox" type="text" name="dealer_fax" id="dealer_fax" size="40" maxlength="60" value="<?php echo  $row->dealer_fax ; ?>" /></td>
		</tr>
		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_MOBILE; ?>:</td>
			<td><input class="inputbox" type="text" name="dealer_mobile" id="dealer_mobile" size="40" maxlength="60" value="<?php echo  $row->dealer_mobile ; ?>" /></td>
		</tr>

<?php if ( $er_usesms ) {?>

		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_SMS; ?>:</td>
			<td><input class="inputbox" type="text" name="dealer_sms" id="dealer_sms" size="40" maxlength="60" value="<?php echo  $row->dealer_sms ; ?>" /></td>
		</tr>
		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_ALLOWSMS; ?>:</td>
			<td><?php echo $lists['show_sms']; ?></td>
		</tr>

<?php } ?>

		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_WEB; ?>:</td>
			<td><input class="inputbox" type="text" name="dealer_web" id="dealer_web" size="40" maxlength="60" value="<?php echo  $row->dealer_web ; ?>" /></td>
		</tr>
		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_BLOG; ?>:</td>
			<td><input class="inputbox" type="text" name="dealer_blog" id="dealer_blog" size="40" maxlength="60" value="<?php echo  $row->dealer_blog ; ?>" /></td>
		</tr>
		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_SKYPE; ?>:</td>
			<td><input class="inputbox" type="text" name="dealer_skype" id="dealer_skype" size="40" maxlength="60" value="<?php echo  $row->dealer_skype ; ?>" /></td>
		</tr>
		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_YAHOO; ?>:</td>
			<td><input class="inputbox" type="text" name="dealer_ymsgr" id="dealer_ymsgr" size="40" maxlength="60" value="<?php echo  $row->dealer_ymsgr ; ?>" /></td>
		</tr>
		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_ICQ; ?>:</td>
			<td><input class="inputbox" type="text" name="dealer_icq" id="dealer_icq" size="40" maxlength="60" value="<?php echo  $row->dealer_icq ; ?>" /></td>
		</tr>


		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_IMAGE; ?>:<br /><br /><?php echo _EZREALTY_PROFILE_MAXSIZE;?><br />
<?php echo $er_profmaxwidth.' (W) x '.$er_profmaxheight.' (H)';?></td>
			<td valign="top"><?php profileUpload($row->dealer_image,'1',$list['dealer_image'],'dealer_image');?>
			<?php if ($row->dealer_image){ ?>
			&nbsp;&nbsp;<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteprofile_image&amp;id=$row->prid");?>"><?php echo _EZREALTY_VLDET_DELETEIMG; ?></a></strong>
			<?php } ?>
			</td>
		</tr>

		<tr>
			<td class="key"><?php echo _EZREALTY_PROFILE_LOGO; ?>:<br /><br /><?php echo _EZREALTY_PROFILE_MAXSIZE;?><br />
<?php echo $er_logowidth.' (W) x '.$er_logoheight.' (H)';?></td>
			<td valign="top"><?php logoUpload($row->logo_image,'1',$list['logo_image'],'logo_image');?>
			<?php if ($row->logo_image){ ?>
			&nbsp;&nbsp;<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deletelogo_image&amp;id=$row->prid");?>"><?php echo _EZREALTY_VLDET_DELETEIMG; ?></a></strong>
			<?php } ?>
			</td>
		</tr>


				</table>
<br /><br />

<div align="center"><input type="button" name="<?php echo _EZREALTY_PROFILE_SAVE;?>" value="<?php echo _EZREALTY_PROFILE_SAVE;?>" class="button" onclick="validatemyprofile()" /></div>

</form>

		</td>
	</tr>
</table>
<br /><br />


<?php


}



    /**************************************************\
                   SELLERS PANEL
    \**************************************************/


function myEZpanel ( $option, &$rows, $lists, $ezmemintro ) {
global $database, $mainframe, $my, $er_approve, $id, $er_maxlistings, $er_currencysign, $Itemid, $er_imagedirectory;
global $er_thumbwidth, $er_memintro, $button_image, $currency, $paypal_email, $business, $premium_name, $premium_cost;
global $postmode, $er_paypal, $featured_name, $featured_cost, $mosConfig_live_site, $er_impnum, $er_country;
global $er_sbimp, $er_memlistings, $er_thumbcreation, $er_payonly, $er_states, $er_self, $pp_currsign;
global $er_expmgmt, $er_expsys, $er_pmttmpl, $mosConfig_absolute_path, $er_stateloc, $er_expfig, $er_expgrace;

$status1 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=500,height=400,directories=no,location=no';
$link1 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;Itemid='.$Itemid.'&amp;task=newloc&amp;id='. $id;
$link2 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;Itemid='.$Itemid.'&amp;task=newstate&amp;id='. $id;
$link3 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;Itemid='.$Itemid.'&amp;task=newcountry&amp;id='. $id;


DEFINE("PAYMENT_PATH","components/com_ezrealty/forms/payments/".$er_pmttmpl."/");


?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td><?php echo $ezmemintro;?></td>
	</tr>

	<tr>
		<td valign="top"><br />


			<?php if ( $er_memlistings && $er_paypal==0 ) { ?>
			<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTINGS_INTRO;?>:- <?php echo $er_maxlistings;?><br />
			<?php } ?>
			<?php if ( $er_memlistings && $er_paypal==1 && $er_payonly==0 ) { ?>
			<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTINGS_INTRO;?>:- <?php echo $er_maxlistings;?><br />
			<?php } ?>

			<?php if ( $er_paypal==1 ) { ?>
			<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo stripslashes ( _EZREALTY_PREMIUM ).' '._EZREALTY_LISTINGS_PAID1.':- '.$pp_currsign.$premium_cost.' ('.$currency.') ';?><br />
			<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo stripslashes ( _EZREALTY_FEATURED ).' '._EZREALTY_LISTINGS_PAID1.':- '.$pp_currsign.$featured_cost.' ('.$currency.') ';?><br />
			<?php } ?>

			<?php if ( $er_paypal==1 && $er_payonly==1 ) { ?>
				<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_FEND_BUYNOW;?><br />
			<?php } ?>
			<?php if ( $er_paypal==1 && $er_payonly==0 ) { ?>
				<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_FEND_BUYNOW2;?><br />
			<?php } ?>



<?php if ( $er_memlistings==1 && $er_expmgmt==1 && $er_expsys==0 ) { ?>
<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTINGS_HITSINTRO.':- '.$er_impnum.' '._EZREALTY_LISTINGS_HITS2;?><br />
<?php } ?>

<?php if ( $er_paypal==1 && $er_expmgmt==1 && $er_expsys==0 ) { ?>
<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTINGS_HITSEXPL;?><br />
<?php } ?>

<?php if ( $er_memlistings==1 && $er_expmgmt==1 && $er_expsys==1 ) { ?>
<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTINGS_TIMEINTRO.':- '.$er_expfig.' '._EZREALTY_LISTINGS_TIME2.' '.$er_expgrace.' '._EZREALTY_LISTINGS_TIME3;?><br />
<?php } ?>

<?php if ( $er_paypal==1 && $er_expmgmt==1 && $er_expsys==1 ) { ?>
<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTINGS_TIMEEXPL;?><br />
<?php } ?>

		</td>
	</tr>
</table>

<br /><br />
<table width="100%" border="0" class="pollstableborder">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_MYEZPANEL;?></td>
	</tr>
	<tr>
		<td>
<br />

<table width="100%" border="0" cellspacing="5" cellpadding="5">
	<tr>
		<td><div align="center"><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=editprofile");?>">
					<img src="administrator/components/com_ezrealty/images/icon7.png" alt="" align="top" border="0" /></a><br />
<a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=editprofile");?>"><?php echo _EZREALTY_MYPROFILE;?>
				</a></div></td>

		<td><div align="center"><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=viewlightbox");?>">
					<img src="administrator/components/com_ezrealty/images/icon17.png" alt="" align="top" border="0" /></a><br />
<a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=viewlightbox");?>"><?php echo _EZREALTY_MYLIGHTBOX;?>
				</a></div></td>
	</tr>
</table>

</td>
	</tr>
</table>

<br /><br />

<?php if ($er_self){ ?>

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="listtableborder">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_FORGOT_LOCALITY2;?></td>
	</tr>
	<tr>
		<td>
			<table border="0" cellpadding="0" cellspacing="0" width="100%">
<?php if ( $er_stateloc == 1 ) { ?>
				<tr>
		<td></td>
		<td><br /><div align="center"><strong><?php echo _EZREALTY_LISTS_STATEFIRST;?></strong></div></td>
		<td></td>
				</tr>
<?php } ?>

				<tr>
<?php if ( $er_stateloc == 1 ) { ?>
		<td><div align="center"><?php echo $lists['stid'];?></div><br /><div align="center"><a href="javascript:void(0)" onclick="window.open('<?php echo $link2; ?>','win2','<?php echo $status1; ?>');" title="<?php echo _EZREALTY_CHECK_SUBMIT;?>"><strong><?php echo _EZREALTY_CHECK_SUBMIT;?></strong></a></div><br /></td>
		<td><div align="center"><?php echo $lists['locid'];?></div><br /><div align="center"><a href="javascript:void(0)" onclick="window.open('<?php echo $link1; ?>','win2','<?php echo $status1; ?>');" title="<?php echo _EZREALTY_CHECK_SUBMIT;?>"><strong><?php echo _EZREALTY_CHECK_SUBMIT;?></strong></a></div><br /></td>
<?php } ?>

<?php if ( $er_stateloc == 2 ) { ?>
		<td><div align="center"><br /></div><br /><br /><div align="center"></div><br /></td>
		<td><br /><div align="center"><?php echo $lists['locid2'];?></div><br /><div align="center"><a href="javascript:void(0)" onclick="window.open('<?php echo $link1; ?>','win2','<?php echo $status1; ?>');" title="<?php echo _EZREALTY_CHECK_SUBMIT;?>"><strong><?php echo _EZREALTY_CHECK_SUBMIT;?></strong></a></div><br /></td>
<?php } ?>

<?php if ( $er_country ) { ?>
		<td><div align="center"><?php echo $lists['cnid'];?></div><br /><div align="center"><a href="javascript:void(0)" onclick="window.open('<?php echo $link3; ?>','win2','<?php echo $status1; ?>');" title="<?php echo _EZREALTY_CHECK_SUBMIT;?>"><strong><?php echo _EZREALTY_CHECK_SUBMIT;?></strong></a></div><br /></td>
<?php } else { ?>
		<td><div align="center"></div><br /><br /><div align="center"></div></td>
<?php } ?>
				</tr>
			</table>
		</td>
	</tr>
</table>

<?php } ?>

<br /><br />


<table width="100%" border="0" cellspacing="0" cellpadding="0">

	<tr>
					<td width="<?php echo $er_thumbwidth;?>" class="sectiontableheader"></td>
					<td class="sectiontableheader"><?php echo _EZREALTY_MEMBERS_ADDRESS;?></td>
					<td width="27" class="sectiontableheader"><?php echo _EZREALTY_MEMBERS_HITS;?></td>
					<td width="67" class="sectiontableheader"><?php echo _EZREALTY_MEMBERS_ACTION;?></td>
					<td width="63" class="sectiontableheader"><?php echo _EZREALTY_MEMBERS_STATUS;?></td>
					<?php if ( $er_paypal ) { ?>
					<td width="76" class="sectiontableheader"><?php echo stripslashes( _EZREALTY_PREMIUM );?></td>
					<td width="78" class="sectiontableheader"><?php echo stripslashes( _EZREALTY_FEATURED );?></td>
					<?php } ?>
	</tr>


	<?php


           //* 1 = Live Via PayPal Network
           //* 2 = Test Via PayPal Developers Network Sandbox


    # IPN validation mode 1: Live Via PayPal Network

if ($postmode == 1) { $domain = "www.paypal.com"; }

    # IPN validation mode 2: Test Via PayPal Developer's Sandbox

elseif ($postmode == 2) { $domain = "www.sandbox.paypal.com"; }


    $num_rows=ceil( count( $rows ) / 1 );
	if ($num_rows > 0) {

	$k = 0;
	for ($i=0, $n=count( $rows ); $i < $n; $i++) {
	$row = &$rows[$i];

	$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';
	$alt 	=	$row->published ? _EZREALTY_GENERAL_PUBLISHED : _EZREALTY_GENERAL_UNPUBLISHED;


	?>

	<tr>
					<td width="<?php echo $er_thumbwidth;?>"><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=detail&amp;id=$row->id");?>"><?php if ($row->image1) { ?><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?><?php if ( $er_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image1;?>" width="<?php echo $er_thumbwidth;?>" border="0" style="margin-top: 5px; margin-bottom: 5px; padding-left: 5px; margin-right: 5px" alt="" /><?php }else{ ?><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?>/th/nothumb.gif" border="0" style="margin-top: 5px; margin-bottom: 5px; padding-left: 5px; margin-right: 5px" width="<?php echo $er_thumbwidth;?>" alt="" /><?php } ?></a></td>

					<td align="left">

<?php if ($er_expmgmt==1 && $er_expsys==1) { ?>
<?php if ($row->expdate <= mktime(0, 0, 0, date("m"), date("d"), date("Y"))) { ?>
<strong>***<?php echo _EZREALTY_LISTINGS_EXPIRED; ?>***</strong><br />
<?php } ?>
<?php } ?>

<?php if ($er_expmgmt==1 && $er_expsys==0) { ?>
<?php if ($row->hits >= $er_impnum ) { ?>
<strong>***<?php echo _EZREALTY_LISTINGS_EXPIRED; ?>***</strong><br />
<?php } ?>
<?php } ?>

					<a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=detail&amp;id=$row->id");?>"><?php echo $row->unit_num;?> <?php echo $row->street_num;?> <?php echo $row->address2;?><br /><?php echo $row->ezcity;?> <?php echo $row->postcode;?></a></td>
					<td width="25" align="center"><?php echo $row->hits;?></td>


					<td width="60"><div align="center"><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=edit&amp;id=$row->id");?>" title = "<?php echo _EZREALTY_LISTINGS_EDIT;?>"><img src = "components/com_ezrealty/images/edit.png" width="15" height="15" border="0" alt="<?php echo _EZREALTY_LISTINGS_EDIT;?>" /></a> 
					<a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=preview_listing&amp;id=$row->id");?>" title="<?php echo _EZREALTY_LISTINGS_PREVIEW;?>"><img src = "components/com_ezrealty/images/preview.gif" width="16" height="16" border="0" alt="<?php echo _EZREALTY_LISTINGS_PREVIEW;?>" /></a> 
					<a href = "javascript:if (confirm('<?php echo _EZREALTY_CHECKDELETE;?>')){ location.href='index.php?option=com_ezrealty&amp;Itemid=<?php echo $Itemid;?>&amp;task=deleteit&amp;id=<?php echo $row->id?>';}" title="<?php echo _EZREALTY_DELETE_LISTING;?>"><img src="components/com_ezrealty/images/trash.png" width="15" height="15" border="0" alt="<?php echo _EZREALTY_DELETE_LISTING;?>" /></a></div></td>

					<td width="60"><div align="center"><img src="components/com_ezrealty/images/<?php echo $img?>" border="0" alt="<?php echo $alt; ?>" title="<?php echo $alt; ?>" /></div></td>


<?php if ( $er_paypal && $er_payonly==0 ) { ?>

<td width="75"><div align="center">

<?php if ( $row->premium==0 && $er_expmgmt==1 && $er_expsys==1 && $row->expdate <= mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>
<br /><?php echo _EZREALTY_LISTINGS_RENEW;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade2.php')) {
  include(PAYMENT_PATH.'upgrade2.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
} ?>

<?php if ( $row->premium==1 && $er_expmgmt==1 && $er_expsys==1 && $row->expdate <= mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>
<br /><?php echo _EZREALTY_LISTINGS_RENEW;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade2.php')) {
  include(PAYMENT_PATH.'upgrade2.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
} ?>

<?php if ( $row->premium==0 && $er_expmgmt==1 && $er_expsys==1 && $row->expdate > mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>
<br /><?php echo _EZREALTY_LISTING_UPGRADE;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade2.php')) {
  include(PAYMENT_PATH.'upgrade2.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
} ?>
<?php if ( $row->premium==1 && $er_expmgmt==1 && $er_expsys==1 && $row->expdate > mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>
<br /><img src="images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZREALTY_PREMIUM );?>" title="<?php echo stripslashes( _EZREALTY_PREMIUM );?>" />
<?php } ?>

<?php if ( $row->premium==0 && $er_expmgmt==1 && $er_expsys==0 && $row->hits >= $er_impnum ) { ?>
<br /><?php echo _EZREALTY_LISTINGS_RENEW;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade2.php')) {
  include(PAYMENT_PATH.'upgrade2.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
} ?>

<?php if ( $row->premium==1 && $er_expmgmt==1 && $er_expsys==0 && $row->hits >= $er_impnum ) { ?>
<br /><?php echo _EZREALTY_LISTINGS_RENEW;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade2.php')) {
  include(PAYMENT_PATH.'upgrade2.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>

<?php if ( $row->premium==0 && $er_expmgmt==1 && $er_expsys==0 && $row->hits < $er_impnum ) { ?>
<br /><?php echo _EZREALTY_LISTING_UPGRADE;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade2.php')) {
  include(PAYMENT_PATH.'upgrade2.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>


<?php if ( $row->premium==1 && $er_expmgmt==1 && $er_expsys==0 && $row->hits < $er_impnum ) { ?>
<img src="images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZREALTY_PREMIUM );?>" title="<?php echo stripslashes( _EZREALTY_PREMIUM );?>" />
<?php } ?>

<?php if ( $row->premium==0 && $er_expmgmt==0 ) { ?>
<br /><?php echo _EZREALTY_LISTING_UPGRADE;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade2.php')) {
  include(PAYMENT_PATH.'upgrade2.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>

<?php if ( $row->premium==1 && $er_expmgmt==0 ) { ?>
<img src="images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZREALTY_PREMIUM );?>" title="<?php echo stripslashes( _EZREALTY_PREMIUM );?>" />
<?php } ?>

<br />

</div></td>

<?php } ?>




<?php if ( $er_paypal && $er_payonly==0 ) { ?>

<td width="75"><div align="center">

<?php if ( $row->featured==0 && $er_expmgmt==1 && $er_expsys==1 && $row->expdate <= mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>
<br /><?php echo _EZREALTY_LISTINGS_RENEW;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade4.php')) {
  include(PAYMENT_PATH.'upgrade4.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>

<?php if ( $row->featured==1 && $er_expmgmt==1 && $er_expsys==1 && $row->expdate <= mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>
<br /><?php echo _EZREALTY_LISTINGS_RENEW;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade4.php')) {
  include(PAYMENT_PATH.'upgrade4.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>

<?php if ( $row->featured==0 && $er_expmgmt==1 && $er_expsys==1 && $row->expdate > mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>
<br /><?php echo _EZREALTY_LISTING_UPGRADE;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade4.php')) {
  include(PAYMENT_PATH.'upgrade4.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>

<?php if ( $row->featured==1 && $er_expmgmt==1 && $er_expsys==1 && $row->expdate > mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>
<img src="images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZREALTY_FEATURED );?>" title="<?php echo stripslashes( _EZREALTY_FEATURED );?>" />
<?php } ?>

<?php if ( $row->featured==0 && $er_expmgmt==1 && $er_expsys==0 && $row->hits >= $er_impnum ) { ?>
<br /><?php echo _EZREALTY_LISTINGS_RENEW;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade4.php')) {
  include(PAYMENT_PATH.'upgrade4.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>

<?php if ( $row->featured==1 && $er_expmgmt==1 && $er_expsys==0 && $row->hits >= $er_impnum ) { ?>
<br /><?php echo _EZREALTY_LISTINGS_RENEW;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade4.php')) {
  include(PAYMENT_PATH.'upgrade4.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>

<?php if ( $row->featured==0 && $er_expmgmt==1 && $er_expsys==0 && $row->hits < $er_impnum ) { ?>
<br /><?php echo _EZREALTY_LISTING_UPGRADE;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade4.php')) {
  include(PAYMENT_PATH.'upgrade4.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>

<?php if ( $row->featured==1 && $er_expmgmt==1 && $er_expsys==0 && $row->hits < $er_impnum ) { ?>
<img src="images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZREALTY_FEATURED );?>" title="<?php echo stripslashes( _EZREALTY_FEATURED );?>" />
<?php } ?>

<?php if ( $row->featured==0 && $er_expmgmt==0 ) { ?>
<br /><?php echo _EZREALTY_LISTING_UPGRADE;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade4.php')) {
  include(PAYMENT_PATH.'upgrade4.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>

<?php if ( $row->featured==1 && $er_expmgmt==0 ) { ?>
<img src="images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZREALTY_FEATURED );?>" title="<?php echo stripslashes( _EZREALTY_FEATURED );?>" />
<?php } ?>

<br />

</div></td>

<?php } ?>



<?php if ( $er_paypal && $er_payonly==1 ) { ?>

<td width="75"><div align="center">

<?php if ( $row->premium==0 && $er_expmgmt==1 && $er_expsys==1 && $row->expdate <= mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>
<br /><?php echo _EZREALTY_LISTINGS_RENEW;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade2.php')) {
  include(PAYMENT_PATH.'upgrade2.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
} ?>

<?php if ( $row->premium==1 && $er_expmgmt==1 && $er_expsys==1 && $row->expdate <= mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>
<br /><?php echo _EZREALTY_LISTINGS_RENEW;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade2.php')) {
  include(PAYMENT_PATH.'upgrade2.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
} ?>

<?php if ( $row->premium==0 && $er_expmgmt==1 && $er_expsys==1 && $row->expdate > mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>
<br /><?php echo _EZREALTY_LISTING_UPGRADE;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade2.php')) {
  include(PAYMENT_PATH.'upgrade2.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
} ?>
<?php if ( $row->premium==1 && $er_expmgmt==1 && $er_expsys==1 && $row->expdate > mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>
<br /><img src="images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZREALTY_PREMIUM );?>" title="<?php echo stripslashes( _EZREALTY_PREMIUM );?>" />
<?php } ?>

<?php if ( $row->premium==0 && $er_expmgmt==1 && $er_expsys==0 && $row->hits >= $er_impnum ) { ?>
<br /><?php echo _EZREALTY_LISTINGS_RENEW;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade2.php')) {
  include(PAYMENT_PATH.'upgrade2.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
} ?>

<?php if ( $row->premium==1 && $er_expmgmt==1 && $er_expsys==0 && $row->hits >= $er_impnum ) { ?>
<br /><?php echo _EZREALTY_LISTINGS_RENEW;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade2.php')) {
  include(PAYMENT_PATH.'upgrade2.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>

<?php if ( $row->premium==0 && $er_expmgmt==1 && $er_expsys==0 && $row->hits < $er_impnum ) { ?>
<br /><?php echo _EZREALTY_LISTING_UPGRADE;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade2.php')) {
  include(PAYMENT_PATH.'upgrade2.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>


<?php if ( $row->premium==1 && $er_expmgmt==1 && $er_expsys==0 && $row->hits < $er_impnum ) { ?>
<img src="images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZREALTY_PREMIUM );?>" title="<?php echo stripslashes( _EZREALTY_PREMIUM );?>" />
<?php } ?>

<?php if ( $row->premium==0 && $er_expmgmt==0 ) { ?>
<br /><?php echo _EZREALTY_LISTING_UPGRADE;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade2.php')) {
  include(PAYMENT_PATH.'upgrade2.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>

<?php if ( $row->premium==1 && $er_expmgmt==0 ) { ?>
<img src="images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZREALTY_PREMIUM );?>" title="<?php echo stripslashes( _EZREALTY_PREMIUM );?>" />
<?php } ?>

<br />

</div></td>

<?php } ?>




<?php if ( $er_paypal && $er_payonly==1 ) { ?>

<td width="75"><div align="center">

<?php if ( $row->featured==0 && $er_expmgmt==1 && $er_expsys==1 && $row->expdate <= mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>
<br /><?php echo _EZREALTY_LISTINGS_RENEW;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade4.php')) {
  include(PAYMENT_PATH.'upgrade4.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>

<?php if ( $row->featured==1 && $er_expmgmt==1 && $er_expsys==1 && $row->expdate <= mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>
<br /><?php echo _EZREALTY_LISTINGS_RENEW;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade4.php')) {
  include(PAYMENT_PATH.'upgrade4.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>

<?php if ( $row->featured==0 && $er_expmgmt==1 && $er_expsys==1 && $row->expdate > mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>
<br /><?php echo _EZREALTY_LISTING_UPGRADE;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade4.php')) {
  include(PAYMENT_PATH.'upgrade4.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>

<?php if ( $row->featured==1 && $er_expmgmt==1 && $er_expsys==1 && $row->expdate > mktime(0, 0, 0, date("m"), date("d"), date("Y")) ) { ?>
<img src="images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZREALTY_FEATURED );?>" title="<?php echo stripslashes( _EZREALTY_FEATURED );?>" />
<?php } ?>

<?php if ( $row->featured==0 && $er_expmgmt==1 && $er_expsys==0 && $row->hits >= $er_impnum ) { ?>
<br /><?php echo _EZREALTY_LISTINGS_RENEW;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade4.php')) {
  include(PAYMENT_PATH.'upgrade4.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>

<?php if ( $row->featured==1 && $er_expmgmt==1 && $er_expsys==0 && $row->hits >= $er_impnum ) { ?>
<br /><?php echo _EZREALTY_LISTINGS_RENEW;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade4.php')) {
  include(PAYMENT_PATH.'upgrade4.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>

<?php if ( $row->featured==0 && $er_expmgmt==1 && $er_expsys==0 && $row->hits < $er_impnum ) { ?>
<br /><?php echo _EZREALTY_LISTING_UPGRADE;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade4.php')) {
  include(PAYMENT_PATH.'upgrade4.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>

<?php if ( $row->featured==1 && $er_expmgmt==1 && $er_expsys==0 && $row->hits < $er_impnum ) { ?>
<img src="images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZREALTY_FEATURED );?>" title="<?php echo stripslashes( _EZREALTY_FEATURED );?>" />
<?php } ?>

<?php if ( $row->featured==0 && $er_expmgmt==0 ) { ?>
<br /><?php echo _EZREALTY_LISTING_UPGRADE;?>
<?php 
if (file_exists(PAYMENT_PATH.'upgrade4.php')) {
  include(PAYMENT_PATH.'upgrade4.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>
<?php } ?>

<?php if ( $row->featured==1 && $er_expmgmt==0 ) { ?>
<img src="images/M_images/rating_star.png" hspace="25" border="0" alt="<?php echo stripslashes( _EZREALTY_FEATURED );?>" title="<?php echo stripslashes( _EZREALTY_FEATURED );?>" />
<?php } ?>

<br />

</div></td>

<?php } ?>


	</tr>

				<tr>
					<td colspan="7" class="sectiontableheader"><img src="components/com_ezrealty/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>
				</tr>


	<?php

  }

}else{

	?>

	<tr>
		<td align="center" colspan="7"><br /><strong><?php echo _EZREALTY_NOLISTINGS;?></strong></td>
	</tr>

	<?php } ?>

</table>

<br /><br />



<?php if ( $er_paypal && $er_payonly==1 ) { ?>

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="listtableborder">
	<tr>
		<td><div align="center">

<?php 
if (file_exists(PAYMENT_PATH.'upgrade1.php')) {
  include(PAYMENT_PATH.'upgrade1.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>

		<br />
<?php echo stripslashes( _EZREALTY_PREMIUM ).' - '.$pp_currsign.$premium_cost.' ('.$currency.')' ;?>



		</div></td>

		<td><div align="center">

<?php 
if (file_exists(PAYMENT_PATH.'upgrade3.php')) {
  include(PAYMENT_PATH.'upgrade3.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>

			<br />
<?php echo stripslashes( _EZREALTY_FEATURED ).' - '.$pp_currsign.$featured_cost.' ('.$currency.')' ;?>

		</div></td>
	</tr>
</table>

	<?php } else { ?>

<table width="100%">
	<tr>
		<td>
		<div align="center"><input type="button" class="button" name="<?php echo _EZREALTY_ADDNEW;?>" value="<?php echo _EZREALTY_ADDNEW;?>" onclick="javascript:location.href='<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=addnew");?>';" /></div>
		</td>
	</tr>
</table>


	<?php } ?>


<?php if ( $er_paypal && $er_payonly==0 ) { ?>

<br /><br />

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="listtableborder">
	<tr>
		<td colspan="2" class="sectiontableheader"><?php echo _EZREALTY_SKIPFREE_LISTING;?></td>
	</tr>
	<tr>
		<td><div align="center"><br />


<?php 
if (file_exists(PAYMENT_PATH.'upgrade1.php')) {
  include(PAYMENT_PATH.'upgrade1.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>

		<br />
<?php echo stripslashes( _EZREALTY_PREMIUM ).' - '.$pp_currsign.$premium_cost.' ('.$currency.')' ;?>

		</div></td>

		<td><div align="center"><br />

<?php 
if (file_exists(PAYMENT_PATH.'upgrade3.php')) {
  include(PAYMENT_PATH.'upgrade3.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}
?>

			<br />
<?php echo stripslashes( _EZREALTY_FEATURED ).' - '.$pp_currsign.$featured_cost.' ('.$currency.')' ;?>

		</div></td>
	</tr>
</table>

<?php } ?>


<br /><br />


<?php } 



    /**************************************************\
                   EDIT PROPERTY LISTING
    \**************************************************/


function editProperty ( $option, &$row, &$lists, $list ) {
global $database, $mosConfig_absolute_path, $mainframe, $my, $Itemid, $er_approve, $er_maxlistings, $er_currencysign;
global $er_imagedirectory, $er_thumbwidth, $er_paypal;
global $er_freepic, $er_textarea, $er_textbox, $er_maxwidth, $er_maxheight, $er_country, $er_usemap, $er_useflv;
global $er_usepc, $er_stateloc, $er_changeimages, $er_usebookings;

$tabs = new mosTabs(0);
mosMakeHtmlSafe( $row );

?>

		<script type="text/javascript">

		<!--
		function updatedoc() {
			var form = document.adminForm;
			// do field validation



      if (form.cid.value == "0"){
        alert( "<?php echo _EZREALTY_DETAILS_ERROR6;?>" );


<?php if ( $er_stateloc == 1 ) { ?>

      } else if (form.stid.value == "0"){
        alert( "<?php echo _EZREALTY_DETAILS_ERROR3;?>" );

      } else if (form.locid.value == "0"){
        alert( "<?php echo _EZREALTY_DETAILS_ERROR2;?>" );

<?php } ?>

<?php if ( $er_stateloc == 2 ) { ?>

      } else if (form.locid.value == "0"){
        alert( "<?php echo _EZREALTY_DETAILS_ERROR2;?>" );

<?php } ?>


<?php if ( $er_country ) { ?>

      } else if (form.cnid.value == "0"){
        alert( "<?php echo _EZREALTY_DETAILS_ERROR4;?>" );

<?php } ?>
<?php if ( $er_usepc ) { ?>

      } else if (form.postcode.value == ""){
        alert( "<?php echo _EZREALTY_DETAILS_ERROR5;?>" );
<?php } ?>

      } else if (form.price.value == ""){
        alert( "<?php echo _EZREALTY_DETAILS_ERROR8;?>" );

      } else if (form.adline.value == ""){
        alert( "<?php echo _EZREALTY_DETAILS_ERROR10;?>" );

      } else if (form.smalldesc.value == ""){
        alert( "<?php echo _EZREALTY_DETAILS_ERROR11;?>" );

      } else if (form.sold.value == "0"){
        alert( "<?php echo _EZREALTY_SOLD_ERROR;?>" );

			} else {

				<?php getEditorContents( 'editor1', 'propdesc' ) ; ?>

				document.adminForm.action = 'index.php?option=com_ezrealty&amp;Itemid=<?php echo $Itemid;?>';
				document.adminForm.submit();

			}
		}
		//-->
		</script>


<br /><br />


<table cellpadding="0" cellspacing="0" border="0" width="100%">
	<tr>
		<td class="sectiontableheader"><?php echo $row->id ? _EZREALTY_GENERIC_EDIT : _EZREALTY_GENERIC_ADD;?> <?php echo _EZREALTY_DETAILS_TITLE;?></td>
	</tr>
</table>

<br />
<br />

<form action="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid");?>" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
	<input type="hidden" name="option" value = "<?php echo $option;?>" />
	<input type="hidden" name="Itemid" value = "<?php echo $Itemid;?>" />
	<input type="hidden" name="id" value = "<?php echo $row->id; ?>" />
	<input type="hidden" name="task" value="save" />
	<input type="hidden" name="owner" value="<?php echo $my->id; ?>" />

<table cellpadding="0" cellspacing="0" border="0" width="100%">
	<tr>
		<td>

<?php
$tabs->startPane("editPane");
$tabs->startTab(_EZREALTY_TABS_ADDRESS,"summary-page");
?>

<table cellpadding="0" cellspacing="0" border="0" width="100%">

  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_UNITNUM;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="unit_num" id="unit_num" size="15" value="<?php echo $row->unit_num; ?>" /></td>
  </tr>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_STREETNUM;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="street_num" id="street_num" size="15" value="<?php echo $row->street_num; ?>" /></td>
  </tr>
<?php if ( $row->address1 ) { ?>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_PROPADDRESS1;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="address1" size="50" value="<?php echo $row->address1;?>" /> <?php echo _EZREALTY_REDUNDANT;?></td>
  </tr>
<?php } ?>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_PROPADDRESS2;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="address2" size="50" value="<?php echo $row->address2;?>" /></td>
  </tr>


<?php if ( $er_stateloc == 1 ) { ?>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_AREA;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['stid']; ?>  <?php echo _EZREALTY_DETAILS_REQ;?></td>
  </tr>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_PROPCITY;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['locid']; ?>   <?php echo _EZREALTY_DETAILS_REQ;?></td>
  </tr>
<?php } ?>


<?php if ( $er_stateloc == 2 ) { ?>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_PROPCITY;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['locid2']; ?>   <?php echo _EZREALTY_DETAILS_REQ;?></td>
  </tr>
<?php } ?>

<?php if ( $er_country ) { ?>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_COUNTRY;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['cnid']; ?>  <?php echo _EZREALTY_DETAILS_REQ;?></td>
  </tr>
<?php } ?>
<?php if ( $er_usepc ) { ?>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_PROPPOSTCODE;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="postcode" size="15" value="<?php echo $row->postcode;?>" /> <?php echo _EZREALTY_DETAILS_REQ;?></td>
  </tr>
<?php } ?>

  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_PROPCOUNTY;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="county" size="35" value="<?php echo $row->county;?>" /> <?php echo _EZREALTY_DETAILS_PROPCOUNTY_DESC;?></td>
  </tr>

<?php if ( !$er_usemap ) { ?>
<?php if ( $er_paypal ){ ?>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_MAPREF;?>:</strong></td>
<?php if ( $row->premium ){ ?>
    <td width="80%" valign="top"><br /><textarea class="inputbox" rows="5" name="mapref" cols="<?php echo "$er_textarea"; ?>"><?php echo $row->mapref;?></textarea><br /><?php echo _EZREALTY_DETAILS_OPT;?> - <?php echo _EZREALTY_DETAILS_MAPREFDESC;?><br /><br /></td>
<?php } else { ?>
    <td width="80%" valign="top"><br /><strong><?php echo _EZREALTY_LISTING_RESTRICTED;?></strong><br /><br /></td>
<?php } ?>
  </tr>
<?php } else { ?>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_MAPREF;?>:</strong></td>
    <td width="80%" valign="top"><br /><textarea class="inputbox" rows="5" name="mapref" cols="<?php echo "$er_textarea"; ?>"><?php echo $row->mapref;?></textarea><br /><?php echo _EZREALTY_DETAILS_OPT;?> - <?php echo _EZREALTY_DETAILS_MAPREFDESC;?><br /><br /></td>
  </tr>
<?php } ?>
<?php } ?>

  <tr>
    <td width="20%" valign="top"><br /> </td>
    <td width="80%" valign="top"><br /><a target="_blank" href="http://www.satsig.net/maps/lat-long-finder.htm"><strong>*** <?php echo _EZREALTY_FIND_COORDINATES;?> ***</strong></a></td>
  </tr>

  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_DECLAT;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="declat" size="15" value="<?php echo $row->declat;?>" />  <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_DECLONG;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="declong" size="15" value="<?php echo $row->declong;?>" />  <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_DISPLAYAD;?>:</strong></td>
    <td valign="top"><br /><?php echo $lists['viewad']; ?><br /><?php echo _EZREALTY_LISTINGS_DISPLADDYEXTFEED;?><br /><br /></td>
  </tr>

<?php if ( $er_usebookings ) { ?>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_VIEWBOOKING;?>:</strong></td>
    <td valign="top"><br /><?php echo $lists['viewbooking']; ?><br /><?php echo _EZREALTY_DETAILS_VIEWBOOKING_DESC;?><br /><br /></td>
  </tr>

<?php } ?>

</table>
<br /><br />


<?php
$tabs->endTab();
$tabs->startTab(_EZREALTY_TABS_SPECS,"specs-page");
?>

<table width="100%">

    <tr>
      <td class="sectiontableheader" colspan="2"><div align="center"><?php echo _EZREALTY_DETAILS_GENERAL;?></div></td>
    </tr>

  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_AGE?>:</strong></td>
    <td width="80%"><br /><input class="inputbox" type="text" name="age" size="20" maxlength="30" value="<?php echo $row->age;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_BEDROOMS;?>:</strong></td>
    <td width="80%"><br /><?php echo $lists['bedrooms']; ?>  <?php echo _EZREALTY_DETAILS_REQ;?></td>
  </tr>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_BATHROOMS;?>:</strong></td>
    <td width="80%"><br /><input class="inputbox" type="text" name="bathrooms" size="15" value="<?php echo $row->bathrooms;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?>  (<?php echo _EZREALTY_DETAILS_BATHROOMSDESC;?>)</td>
  </tr>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_LANDTYPE?>:</strong></td>
    <td width="80%"><br /><input class="inputbox" type="text" name="landtype" maxlength="100" size="<?php echo "$er_textbox"; ?>" value="<?php echo $row->landtype;?>" /><br /><?php echo _EZREALTY_DETAILS_OPT;?>  (<?php echo _EZREALTY_DETAILS_LANDTYPEDESC;?>)</td>
  </tr>


<?php if ( $er_paypal ){ ?>
<?php if ( $row->premium ){ ?>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_FRONTAGE?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="frontage" size="20" value="<?php echo $row->frontage;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_DEPTH?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="depth" size="20" value="<?php echo $row->depth;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
<?php } else { ?>
  <tr>
    <td valign="top"><br /> </td>
    <td><br /><strong><?php echo _EZREALTY_LISTING_RESTRICTED;?></strong><br /><br /></td>
  </tr>
<?php } ?>
<?php } else { ?>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_FRONTAGE?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="frontage" size="20" value="<?php echo $row->frontage;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_DEPTH?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="depth" size="20" value="<?php echo $row->depth;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
<?php } ?>




<?php if ( $er_paypal ){ ?>
<?php if ( $row->premium ){ ?>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_TOTALROOMS;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="totalrooms" size="15" value="<?php echo $row->totalrooms;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_LIVINGAREA;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="livingarea" size="15" value="<?php echo $row->livingarea;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_PARKING;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="parking" size="15" value="<?php echo $row->parking;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?>  (<?php echo _EZREALTY_DETAILS_PARKINGDESC;?>)</td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_CTOWN;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="ctown" size="35" value="<?php echo $row->ctown;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_CTPORT;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="ctport" size="35" value="<?php echo $row->ctport;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LISTINGS_SCHOOLDIST;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="schooldist" size="35" value="<?php echo $row->schooldist;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LISTINGS_PRESCHOOL;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="preschool" size="35" value="<?php echo $row->preschool;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LISTINGS_PRIMARYSCHOOL;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="primaryschool" size="35" value="<?php echo $row->primaryschool;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LISTINGS_HIGHSCHOOL;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="highschool" size="35" value="<?php echo $row->highschool;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LISTINGS_UNIVERSITY;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="university" size="35" value="<?php echo $row->university;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LISTINGS_HOFEES;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="hofees" size="35" value="<?php echo $row->hofees;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_CPI1; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="custom1" size="35" value="<?php echo $row->custom1;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_CPI2; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="custom2" size="35" value="<?php echo $row->custom2;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_CPI3; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="custom3" size="35" value="<?php echo $row->custom3;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_CUSTOM4; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="custom4" size="35" value="<?php echo $row->custom4;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_CUSTOM5; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="custom5" size="35" value="<?php echo $row->custom5;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?><br /><br /></td>
  </tr>

<?php } else { ?>
  <tr>
    <td valign="top"><br /> </td>
    <td><br /><strong><?php echo _EZREALTY_LISTING_RESTRICTED;?></strong><br /><br /></td>
  </tr>
<?php } ?>
<?php } else { ?>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_TOTALROOMS;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="totalrooms" size="15" value="<?php echo $row->totalrooms;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_LIVINGAREA;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="livingarea" size="15" value="<?php echo $row->livingarea;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_PARKING;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="parking" size="15" value="<?php echo $row->parking;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?>  (<?php echo _EZREALTY_DETAILS_PARKINGDESC;?>)</td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_CTOWN;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="ctown" size="35" value="<?php echo $row->ctown;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_CTPORT;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="ctport" size="35" value="<?php echo $row->ctport;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LISTINGS_SCHOOLDIST;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="schooldist" size="35" value="<?php echo $row->schooldist;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LISTINGS_PRESCHOOL;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="preschool" size="35" value="<?php echo $row->preschool;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LISTINGS_PRIMARYSCHOOL;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="primaryschool" size="35" value="<?php echo $row->primaryschool;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LISTINGS_HIGHSCHOOL;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="highschool" size="35" value="<?php echo $row->highschool;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LISTINGS_UNIVERSITY;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="university" size="35" value="<?php echo $row->university;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LISTINGS_HOFEES;?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="hofees" size="35" value="<?php echo $row->hofees;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_CPI1; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="custom1" size="35" value="<?php echo $row->custom1;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_CPI2; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="custom2" size="35" value="<?php echo $row->custom2;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_CPI3; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="custom3" size="35" value="<?php echo $row->custom3;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_CUSTOM4; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="custom4" size="35" value="<?php echo $row->custom4;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_CUSTOM5; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="custom5" size="35" value="<?php echo $row->custom5;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?><br /><br /></td>
  </tr>
<?php } ?>



    <tr>
      <td class="sectiontableheader" colspan="2"><div align="center"><?php echo _EZREALTY_DETAILS_BUSINESS;?></div></td>
    </tr>


<?php if ( $er_paypal ){ ?>
<?php if ( $row->premium ){ ?>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_TAKINGS; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="takings" size="35" value="<?php echo $row->takings;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_RETURNS; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="returns" size="35" value="<?php echo $row->returns;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_NETPROFIT; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="netprofit" size="35" value="<?php echo $row->netprofit;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_BUSTYPE; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="bustype" size="35" value="<?php echo $row->bustype;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_BUSSUBTYPE; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="bussubtype" size="35" value="<?php echo $row->bussubtype;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?><br /><br /></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_STOCK; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="stock" size="35" value="<?php echo $row->stock;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_FIXTURES; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="fixtures" size="35" value="<?php echo $row->fixtures;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_FITTINGS; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="fittings" size="35" value="<?php echo $row->fittings;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_SQUARES; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="squarefeet" size="35" value="<?php echo $row->squarefeet;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_POFFICE; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="percentoffice" size="35" value="<?php echo $row->percentoffice;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_PWAREHOUSE; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="percentwarehouse" size="35" value="<?php echo $row->percentwarehouse;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_LOADING; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="loadingfac" size="35" value="<?php echo $row->loadingfac;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?><br /><br /></td>
  </tr>
<?php } else { ?>
  <tr>
    <td valign="top"><br /> </td>
    <td><br /><strong><?php echo _EZREALTY_LISTING_RESTRICTED;?></strong><br /><br /></td>
  </tr>
<?php } ?>
<?php } else { ?>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_TAKINGS; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="takings" size="35" value="<?php echo $row->takings;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_RETURNS; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="returns" size="35" value="<?php echo $row->returns;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_NETPROFIT; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="netprofit" size="35" value="<?php echo $row->netprofit;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_BUSTYPE; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="bustype" size="35" value="<?php echo $row->bustype;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_BUSSUBTYPE; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="bussubtype" size="35" value="<?php echo $row->bussubtype;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?><br /><br /></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_STOCK; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="stock" size="35" value="<?php echo $row->stock;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_FIXTURES; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="fixtures" size="35" value="<?php echo $row->fixtures;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_FITTINGS; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="fittings" size="35" value="<?php echo $row->fittings;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_SQUARES; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="squarefeet" size="35" value="<?php echo $row->squarefeet;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_POFFICE; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="percentoffice" size="35" value="<?php echo $row->percentoffice;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_PWAREHOUSE; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="percentwarehouse" size="35" value="<?php echo $row->percentwarehouse;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_LOADING; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="loadingfac" size="35" value="<?php echo $row->loadingfac;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?><br /><br /></td>
  </tr>
<?php } ?>

    <tr>
      <td class="sectiontableheader" colspan="2"><div align="center"><?php echo _EZREALTY_DETAILS_RURAL;?></div></td>
    </tr>


<?php if ( $er_paypal ){ ?>
<?php if ( $row->premium ){ ?>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_FENCING; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="fencing" size="35" value="<?php echo $row->fencing;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_RAINFALL; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="rainfall" size="35" value="<?php echo $row->rainfall;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_SOILTYPE; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="soiltype" size="35" value="<?php echo $row->soiltype;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_GRAZING; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="grazing" size="35" value="<?php echo $row->grazing;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_CROPPING; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="cropping" size="35" value="<?php echo $row->cropping;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_IRRIGATION; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="irrigation" size="35" value="<?php echo $row->irrigation;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_WATERRESOURCES; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="waterresources" size="35" value="<?php echo $row->waterresources;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_CARRYINGCAP; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="carryingcap" size="35" value="<?php echo $row->carryingcap;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_STORAGE; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="storage" size="35" value="<?php echo $row->storage;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_SERVICES; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="services" size="35" value="<?php echo $row->services;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
<?php } else { ?>
  <tr>
    <td valign="top"><br /> </td>
    <td><br /><strong><?php echo _EZREALTY_LISTING_RESTRICTED;?></strong><br /><br /></td>
  </tr>
<?php } ?>
<?php } else { ?>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_FENCING; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="fencing" size="35" value="<?php echo $row->fencing;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_RAINFALL; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="rainfall" size="35" value="<?php echo $row->rainfall;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_SOILTYPE; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="soiltype" size="35" value="<?php echo $row->soiltype;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_GRAZING; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="grazing" size="35" value="<?php echo $row->grazing;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_CROPPING; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="cropping" size="35" value="<?php echo $row->cropping;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_IRRIGATION; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="irrigation" size="35" value="<?php echo $row->irrigation;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_WATERRESOURCES; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="waterresources" size="35" value="<?php echo $row->waterresources;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_CARRYINGCAP; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="carryingcap" size="35" value="<?php echo $row->carryingcap;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_STORAGE; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="storage" size="35" value="<?php echo $row->storage;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_SERVICES; ?>:</strong></td>
    <td><br /><input class="inputbox" type="text" name="services" size="35" value="<?php echo $row->services;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
<?php } ?>


</table>
<br /><br />


<?php
$tabs->endTab();
$tabs->startTab(_EZREALTY_DETAILS_TAB2A,"features-page");
?>

<table width="100%">


  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_LISTING7;?>:</strong></td>
    <td width="80%" valign="top">

<?php if ( $er_paypal ){ ?>

<?php if ( $row->premium ){ ?>

<table border="0" cellpadding="5">
	<tr>
		<td valign="top" width="100"><br /><?php echo _EZREALTY_APF1; ?>: </td><td valign="top"><br /><?php echo $lists['pool']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF2; ?>: </td><td valign="top"><?php echo $lists['fplace']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF3; ?>: </td><td valign="top"><?php echo $lists['bbq']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF4; ?>: </td><td valign="top"><?php echo $lists['gazebo']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF5; ?>: </td><td valign="top"><?php echo $lists['lug']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF6; ?>: </td><td valign="top"><?php echo $lists['bir']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF7; ?>: </td><td valign="top"><?php echo $lists['heating']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF8; ?>: </td><td valign="top"><?php echo $lists['airco']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF9; ?>: </td><td valign="top"><?php echo $lists['shops']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF10; ?>: </td><td valign="top"><?php echo $lists['schools']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF12; ?>: </td><td valign="top"><?php echo $lists['elevator']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF11; ?>: </td><td valign="top"><?php echo $lists['pets']; ?></td>
	</tr>

	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF13; ?>: </td><td valign="top"><?php echo $lists['extra1']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF14; ?>: </td><td valign="top"><?php echo $lists['extra2']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF15; ?>: </td><td valign="top"><?php echo $lists['extra3']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF16; ?>: </td><td valign="top"><?php echo $lists['extra4']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF17; ?>: </td><td valign="top"><?php echo $lists['extra5']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF18; ?>: </td><td valign="top"><?php echo $lists['extra6']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF19; ?>: </td><td valign="top"><?php echo $lists['extra7']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF20; ?>: </td><td valign="top"><?php echo $lists['extra8']; ?></td>
	</tr>

</table>

<?php } else { ?>

<table border="0" width="100%" cellpadding="5">
	<tr>
		<td><br /><strong><?php echo _EZREALTY_LISTING_RESTRICTED;?></strong></td>
	</tr>
</table>

<?php } ?>
<?php } else { ?>
<table border="0" cellpadding="5">
	<tr>
		<td valign="top" width="100"><br /><?php echo _EZREALTY_APF1; ?>: </td><td valign="top"><br /><?php echo $lists['pool']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF2; ?>: </td><td valign="top"><?php echo $lists['fplace']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF3; ?>: </td><td valign="top"><?php echo $lists['bbq']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF4; ?>: </td><td valign="top"><?php echo $lists['gazebo']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF5; ?>: </td><td valign="top"><?php echo $lists['lug']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF6; ?>: </td><td valign="top"><?php echo $lists['bir']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF7; ?>: </td><td valign="top"><?php echo $lists['heating']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF8; ?>: </td><td valign="top"><?php echo $lists['airco']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF9; ?>: </td><td valign="top"><?php echo $lists['shops']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF10; ?>: </td><td valign="top"><?php echo $lists['schools']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF12; ?>: </td><td valign="top"><?php echo $lists['elevator']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF11; ?>: </td><td valign="top"><?php echo $lists['pets']; ?></td>
	</tr>

	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF13; ?>: </td><td valign="top"><?php echo $lists['extra1']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF14; ?>: </td><td valign="top"><?php echo $lists['extra2']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF15; ?>: </td><td valign="top"><?php echo $lists['extra3']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF16; ?>: </td><td valign="top"><?php echo $lists['extra4']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF17; ?>: </td><td valign="top"><?php echo $lists['extra5']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF18; ?>: </td><td valign="top"><?php echo $lists['extra6']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF19; ?>: </td><td valign="top"><?php echo $lists['extra7']; ?></td>
	</tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF20; ?>: </td><td valign="top"><?php echo $lists['extra8']; ?></td>
	</tr>

</table>
<?php } ?>


</td>
  </tr>
</table>
<br /><br />


<?php
$tabs->endTab();
$tabs->startTab(_EZREALTY_TABS_MARKETING,"marketing-page");
?>

<table width="100%">
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_LISTING_TYPE;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['type']; ?></td>
  </tr>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_SELCAT;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['cid']; ?>  <?php echo _EZREALTY_DETAILS_REQ;?></td>
  </tr>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_PROPPRICE;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="price" size="15" maxlength="20" value="<?php echo $row->price;?>" />  <?php echo _EZREALTY_DETAILS_REQ;?> - <strong><?php echo _EZREALTY_DETAILS_PROPPRICEDESC;?></strong></td>
  </tr>

  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_RENTAL_FREQUENCY;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['freq']; ?></td>
  </tr>

  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_BOND;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="bond" size="20" value="<?php echo $row->bond;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?> - <strong><?php echo _EZREALTY_DETAILS_PROPPRICEDESC;?></strong></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_SHOW_PRICE;?>:</strong></td>
    <td valign="top"><br /><?php echo $lists['showprice']; ?></td>
  </tr>

  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_PRICEVIEW;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="priceview" size="50" value="<?php echo $row->priceview;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?> - <?php echo _EZREALTY_DETAILS_PRICEVIEW_DESC;?></td>
  </tr>

  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_MARKET;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['sold']; ?> <?php echo _EZREALTY_DETAILS_REQ;?>  <?php echo _EZREALTY_DETAILS_SOLDDESC;?></td>
  </tr>
  <tr>
	<td width="20%" valign="top"><strong><?php echo _EZREALTY_DETAILS_AGENTID;?>:</strong></td>
	<td width="80%" valign="top"><input class="inputbox" type="text" name="agent_id" size="<?php echo "$er_textbox"; ?>" value="<?php echo $row->agent_id; ?>" /> <?php echo _EZREALTY_DETAILS_OPT;?>  (<?php echo _EZREALTY_DETAILS_AGENTIDDESC;?>)</td>
  </tr>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_MLSID;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="mls_id" size="20" value="<?php echo $row->mls_id;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?>  (<?php echo _EZREALTY_DETAILS_MLSIDDESC;?>)</td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_ADLINE;?>:</strong><br /><br /></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="adline" size="<?php echo "$er_textbox"; ?>" maxlength="150" value="<?php echo $row->adline;?>" /> <?php echo _EZREALTY_DETAILS_REQ;?><br /><br /></td>
  </tr>
  <tr>
    <td valign="top" width="20%"><strong><?php echo _EZREALTY_DETAILS_SHORTDESC;?></strong><br /><?php echo _EZREALTY_DETAILS_REQ;?></td>
    <td width="80%" valign="top"><textarea class="inputbox" rows="5" name="smalldesc" cols="<?php echo "$er_textarea"; ?>"><?php echo $row->smalldesc;?></textarea><br /><br /></td>
  </tr>


<?php if ( $er_paypal ){ ?>
<?php if ( $row->premium ){ ?>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_VTOUR;?>:</strong><?php if ($er_useflv==1) { ?><br /><br /><?php echo _EZREALTY_LISTINGS_FLVMODE;?><?php } ?></td>
    <td width="80%" valign="top"><br /><textarea class="inputbox" rows="5" name="vtour" cols="<?php echo "$er_textarea"; ?>"><?php echo $row->vtour;?></textarea><br /><?php if ($er_useflv==0) { ?><?php echo _EZREALTY_DETAILS_OPT;?>  (<?php echo _EZREALTY_DETAILS_VTOURDESC;?>)<?php } ?><br /><br /><br /></td>
  </tr>
<?php } else { ?>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_VTOUR;?>:</strong></td>
    <td width="80%" valign="top"><br /><strong><?php echo _EZREALTY_LISTING_RESTRICTED;?></strong><br /><br /></td>
  </tr>
<?php } ?>
<?php } else { ?>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_VTOUR;?>:</strong><?php if ($er_useflv==1) { ?><br /><br /><?php echo _EZREALTY_LISTINGS_FLVMODE;?><?php } ?></td>
    <td width="80%" valign="top"><br /><textarea class="inputbox" rows="5" name="vtour" cols="<?php echo "$er_textarea"; ?>"><?php echo $row->vtour;?></textarea><br /><?php if ($er_useflv==0) { ?><?php echo _EZREALTY_DETAILS_OPT;?>  (<?php echo _EZREALTY_DETAILS_VTOURDESC;?>)<?php } ?><br /><br /><br /></td>
  </tr>
<?php } ?>


<?php if ( $er_paypal ){ ?>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_OHOUSE;?>:</strong></td>
<?php if ( $row->premium ){ ?>
    <td><br /><?php echo $lists['openhouse']; ?><br /><br /></td>
<?php } else { ?>
    <td width="80%" valign="top"><br /><strong><?php echo _EZREALTY_LISTING_RESTRICTED;?></strong><br /><br /></td>
<?php } ?>
  </tr>
<?php } else { ?>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_OHOUSE;?>:</strong></td>
    <td><br /><?php echo $lists['openhouse']; ?><br /><br /></td>
  </tr>
<?php } ?>

<?php if ( $er_paypal ){ ?>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_OHOUSEDET;?></strong></td>
<?php if ( $row->premium ){ ?>
    <td><textarea class="inputbox" rows="5" name="ohouse_desc" cols="<?php echo "$er_textarea"; ?>"><?php echo $row->ohouse_desc;?></textarea><br /><br /></td>
<?php } else { ?>
    <td width="80%" valign="top"><br /><strong><?php echo _EZREALTY_LISTING_RESTRICTED;?></strong><br /><br /></td>
<?php } ?>
  </tr>
<?php } else { ?>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_OHOUSEDET;?></strong></td>
    <td><textarea class="inputbox" rows="5" name="ohouse_desc" cols="<?php echo "$er_textarea"; ?>"><?php echo $row->ohouse_desc;?></textarea><br /><br /></td>
  </tr>
<?php } ?>


</table>
<br /><br />


<?php
$tabs->endTab();
$tabs->startTab(_EZREALTY_DETAILS_TAB7A,"metatags-page");
?>

<table width="100%">

  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_METADESC;?>:</strong></td>
    <td width="80%" valign="top"><br /><textarea class="inputbox" cols="<?php echo "$er_textarea"; ?>" rows="2" name="metadesc" id="metadesc"><?php echo $row->metadesc; ?></textarea></td>
  </tr>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_METAKEYS;?>:</strong></td>
    <td width="80%" valign="top"><br /><textarea class="inputbox" cols="<?php echo "$er_textarea"; ?>" rows="2" name="metakey" id="metakey"><?php echo $row->metakey; ?></textarea><br /><br /></td>
  </tr>

</table>
<br /><br />


<?php
$tabs->endTab();
$tabs->startTab(_EZREALTY_CONFIG_IMG1,"images-page");
?>

<table width="100%">
  <tr>
    <td width="100%" valign="top">

<div align="center">

<table width="70%">

  <tr>
    <td width="100%" valign="top"><br /><strong><?php echo _EZREALTY_IMAGE_WARNING;?></strong></td>
  </tr>
  <tr>
    <td width="100%" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_MAXWIDTH;?>:</strong> <?php echo $er_maxwidth." "._EZREALTY_PIXELS; ?></td>
  </tr>
  <tr>
    <td width="1020%" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_MAXHEIGHT;?>:</strong> <?php echo $er_maxheight." "._EZREALTY_PIXELS; ?></td>
  </tr>

</table>
</div>
<br /><br />

<table width="100%">



<?php if ( $er_paypal ){ ?>

<?php if ( $row->premium ){ ?>

	<tr>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE1;?></strong></td>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE2;?></strong></td>
	</tr>
	<tr>
        <td valign="top"><?php imageUploadFront($row->image1,'1',$list['image1'],'image1');?>
<?php if ($er_changeimages && $row->image1){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage1&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
        <td valign="top"><?php imageUploadFront($row->image2,'1',$list['image2'],'image2');?>

<?php if ($er_changeimages && $row->image2){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage2&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
	</tr>

	<tr>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE3;?></strong></td>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE4;?></strong></td>
	</tr>
	<tr>
        <td valign="top"><?php imageUploadFront($row->image3,'1',$list['image3'],'image3');?>

<?php if ($er_changeimages && $row->image3){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage3&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
        <td valign="top"><?php imageUploadFront($row->image4,'1',$list['image4'],'image4');?>

<?php if ($er_changeimages && $row->image4){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage4&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
	</tr>

<?php if ( $row->featured ){ ?>

	<tr>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE5;?></strong></td>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE6;?></strong></td>
	</tr>
	<tr>
        <td valign="top"><?php imageUploadFront($row->image5,'1',$list['image5'],'image5');?>

<?php if ($er_changeimages && $row->image5){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage5&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
        <td valign="top"><?php imageUploadFront($row->image6,'1',$list['image6'],'image6');?>

<?php if ($er_changeimages && $row->image6){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage6&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
	</tr>
	<tr>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE7;?></strong></td>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE8;?></strong></td>
	</tr>
	<tr>
        <td valign="top"><?php imageUploadFront($row->image7,'1',$list['image7'],'image7');?>

<?php if ($er_changeimages && $row->image7){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage7&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
        <td valign="top"><?php imageUploadFront($row->image8,'1',$list['image8'],'image8');?>

<?php if ($er_changeimages && $row->image8){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage8&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
	</tr>

	<tr>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE9;?></strong></td>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE10;?></strong></td>
	</tr>
	<tr>
        <td valign="top"><?php imageUploadFront($row->image9,'1',$list['image9'],'image9');?>
<?php if ($er_changeimages && $row->image9){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage9&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
        <td valign="top"><?php imageUploadFront($row->image10,'1',$list['image10'],'image10');?>

<?php if ($er_changeimages && $row->image10){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage10&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
	</tr>

	<tr>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE11;?></strong></td>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE12;?></strong></td>
	</tr>
	<tr>
        <td valign="top"><?php imageUploadFront($row->image11,'1',$list['image11'],'image11');?>

<?php if ($er_changeimages && $row->image11){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage11&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
        <td valign="top"><?php imageUploadFront($row->image12,'1',$list['image12'],'image12');?>

<?php if ($er_changeimages && $row->image12){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage12&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
	</tr>


<?php } ?>

<?php } else { ?>

<?php if ( $er_freepic ){ ?>

	<tr>
 	   <td><br /><br />
		<?php imageUploadFront($row->image1,'1',$list['image1'],'image1');?><br />
		<?php if ($er_changeimages && $row->image1){ ?>
		<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage1&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
		<?php } ?>
		<br /><br /></td>
	</tr>

<?php } else { ?>

	<tr>
 	   <td><br /><br /><strong><?php echo _EZREALTY_LISTING_RESTRICTED;?></strong><br /><br /></td>
	<tr>

<?php } ?>

		<?php } ?>


<?php } else { ?>


	<tr>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE1;?></strong></td>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE2;?></strong></td>
	</tr>
	<tr>
        <td valign="top"><?php imageUploadFront($row->image1,'1',$list['image1'],'image1');?>
<?php if ($er_changeimages && $row->image1){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage1&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
        <td valign="top"><?php imageUploadFront($row->image2,'1',$list['image2'],'image2');?>

<?php if ($er_changeimages && $row->image2){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage2&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
	</tr>

	<tr>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE3;?></strong></td>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE4;?></strong></td>
	</tr>
	<tr>
        <td valign="top"><?php imageUploadFront($row->image3,'1',$list['image3'],'image3');?>

<?php if ($er_changeimages && $row->image3){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage3&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
        <td valign="top"><?php imageUploadFront($row->image4,'1',$list['image4'],'image4');?>

<?php if ($er_changeimages && $row->image4){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage4&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
	</tr>

	<tr>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE5;?></strong></td>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE6;?></strong></td>
	</tr>
	<tr>
        <td valign="top"><?php imageUploadFront($row->image5,'1',$list['image5'],'image5');?>

<?php if ($er_changeimages && $row->image5){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage5&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
        <td valign="top"><?php imageUploadFront($row->image6,'1',$list['image6'],'image6');?>

<?php if ($er_changeimages && $row->image6){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage6&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
	</tr>
	<tr>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE7;?></strong></td>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE8;?></strong></td>
	</tr>
	<tr>
        <td valign="top"><?php imageUploadFront($row->image7,'1',$list['image7'],'image7');?>

<?php if ($er_changeimages && $row->image7){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage7&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
        <td valign="top"><?php imageUploadFront($row->image8,'1',$list['image8'],'image8');?>

<?php if ($er_changeimages && $row->image8){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage8&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
	</tr>

	<tr>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE9;?></strong></td>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE10;?></strong></td>
	</tr>
	<tr>
        <td valign="top"><?php imageUploadFront($row->image9,'1',$list['image9'],'image9');?>
<?php if ($er_changeimages && $row->image9){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage9&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
        <td valign="top"><?php imageUploadFront($row->image10,'1',$list['image10'],'image10');?>

<?php if ($er_changeimages && $row->image10){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage10&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
	</tr>

	<tr>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE11;?></strong></td>
        <td class="h3"><strong><?php echo _EZREALTY_VLDET_IMAGE12;?></strong></td>
	</tr>
	<tr>
        <td valign="top"><?php imageUploadFront($row->image11,'1',$list['image11'],'image11');?>

<?php if ($er_changeimages && $row->image11){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage11&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
        <td valign="top"><?php imageUploadFront($row->image12,'1',$list['image12'],'image12');?>

<?php if ($er_changeimages && $row->image12){ ?>
<strong><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=deleteimage12&amp;id=$row->id");?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
<br /><br /></td>
	</tr>

<?php } ?>


</table>

</td>
	</tr>
</table>

<?php
$tabs->endTab();
$tabs->endPane();
?>

</td>
	</tr>
</table>

<br /><br />

<table width="100%">
<?php if ( $er_paypal ){ ?>
<?php if ( $row->premium ){ ?>
  <tr>
    <td colspan="2" valign="top" width="100%"><strong><?php echo _EZREALTY_DETAILS_PROPDESC;?>:</strong><br /><br />
		<?php
		// parameters : areaname, content, hidden field, width, height, rows, cols
		editorArea( 'editor1',  $row->propdesc , 'propdesc', '100%;', '200', '60', '20' ) ; ?>
    </td>
  </tr>
<?php } else { ?>
  <tr>
    <td width="20%" valign="top"><strong><?php echo _EZREALTY_DETAILS_PROPDESC;?>:</strong><br /><br /></td>
    <td width="80%" valign="top"><br /><strong><?php echo _EZREALTY_LISTING_RESTRICTED;?></strong><br /><br /></td>
  </tr>
<?php } ?>
<?php } else { ?>
  <tr>
    <td colspan="2" valign="top" width="100%"><strong><?php echo _EZREALTY_DETAILS_PROPDESC;?>:</strong><br /><br />
		<?php
		// parameters : areaname, content, hidden field, width, height, rows, cols
		editorArea( 'editor1',  $row->propdesc , 'propdesc', '100%;', '200', '60', '20' ) ; ?>
    </td>
  </tr>
<?php } ?>

</table>


<br /><br /><div align="center"><input type="button" name="<?php echo _EZREALTY_SUBMIT_LISTING ?>" value="<?php echo _EZREALTY_SUBMIT_LISTING ?>" class="button" onclick="updatedoc()" /></div>
</form>

<br /><br />

<?php


}




    /**************************************************\
                 TERMS OF LISTING PROPERTIES
    \**************************************************/


function viewTerms ( $option, $ezterms ){
global $database, $Itemid, $mainframe;

?>

<br /><br />

<table cellpadding="0" cellspacing="0" border="0" width="100%">
	<tr>
		<td class="sectiontableheader"><?php echo _EZREALTY_LISTING_TERMS;?></td>
	</tr>
</table>


<table width='100%'>
	<tr>
		<td><?php echo $ezterms; ?></td>
	</tr>
</table>

<br /><br />

<?php


}



    /**************************************************\
                TRANSACTION SUCCESSFUL PAGE
    \**************************************************/

function showSuccess ( $option, $ezsuccess ){
global $database, $Itemid, $mainframe;

?>

	<table width='100%'>
	<tr>
	<td><br /><br /><br /><?php echo $ezsuccess; ?><br /><br /><br /></td>
	</tr>
	</table>


<?php

}


    /**************************************************\
                 TRANSACTION CANCELLED PAGE
    \**************************************************/

function showCancel ( $option, $ezcancel ){
global $database, $Itemid, $mainframe;

?>

	<table width='100%'>
	<tr>
	<td><br /><br /><br /><?php echo $ezcancel; ?><br /><br /><br /></td>
	</tr>
	</table>

<?php

}












    /**************************************************\
                    END THE HTML CLASS
    \**************************************************/

}





    /**************************************************\
                         HEADER
    \**************************************************/

function EZHeader ( ){
global $database, $my, $Itemid, $mainframe, $id, $cid, $gid, $er_bizname, $er_reglead;
global $mosConfig_live_site, $er_colour1, $er_colour2, $er_ohlink, $er_nllink, $er_useprofile, $er_featlink, $er_usemenu;
global $er_searchlink, $er_memlink, $er_showaglink, $er_useshortlist;


$link1a = sefRelToAbs( 'index.php?option=com_ezrealty&amp;Itemid='. $Itemid );
$link2a = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=search&amp;Itemid='. $Itemid );
$link3a = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=newlistings&amp;Itemid='. $Itemid );
$link4a = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=openhouse&amp;Itemid='. $Itemid );
$link5a = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=featured&amp;Itemid='. $Itemid );
$link6a = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=register&amp;Itemid='. $Itemid );
$link7a = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=displayprofiles&amp;Itemid='. $Itemid );
$link8a = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=ezpanel&amp;Itemid='. $Itemid );
$link9a = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=showleads&amp;Itemid='. $Itemid );
$link10a = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=viewlightbox&amp;Itemid='. $Itemid );

	
?>

<script type="text/javascript">

function EZOver(lnk) { 
lnk.style.backgroundColor = "#<?php echo $er_colour1;?>";lnk.style.cursor = "hand" 
}

function EZOut(lnk) { 
lnk.style.backgroundColor = "#<?php echo $er_colour2;?>";lnk.style.cursor = "hand" 
}

</script>

<div class="componentheading"><?php echo stripslashes( $er_bizname );?></div>

<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">

	<?php if ( $er_usemenu ){ ?>
	<tr><td>

	<table border="0" cellspacing="5" cellpadding="5" width="100%"><tr>
	<td><div align="center"><a href="<?php echo $link1a; ?>"><?php echo _EZREALTY_INCLUDES_HOME;?></a>

	<?php if ( $er_searchlink ){ ?>
	 | <a href="<?php echo $link2a; ?>"><?php echo _EZREALTY_INCLUDES_SEARCH;?></a>
	<?php } ?>

	<?php if ( $er_nllink ){ ?>
	 | <a href="<?php echo $link3a; ?>"><?php echo _EZREALTY_INCLUDES_NEW;?></a>
	<?php } ?>

	<?php if ( $er_ohlink ){ ?>
	 | <a href="<?php echo $link4a; ?>"><?php echo _EZREALTY_HEADER_OHOUSE;?></a>
	<?php } ?>

	<?php if ( $er_featlink ){ ?>
	 | <a href="<?php echo $link5a; ?>"><?php echo _EZREALTY_HEADER_FEATURED;?></a>
	<?php } ?>

	<?php if ( $er_reglead ){ ?>
	 | <a href="<?php echo $link9a; ?>"><?php echo _EZREALTY_WANTED;?></a>
	<?php } ?>
	<?php if ( $er_useshortlist ){ ?>
	 | <a href="<?php echo $link10a;?>"><?php echo _EZREALTY_VIEW_LIGHTBOX;?></a>
	<?php } ?>

<br />

	<?php if ( $er_reglead ){ ?>
	 <a href="<?php echo $link6a; ?>"><?php echo _EZREALTY_LEADS_LISTREQ;?></a>
	<?php } ?>

	<?php if ( $er_useprofile && $er_showaglink ){ ?>
	 | <a href="<?php echo $link7a; ?>"><?php echo _EZREALTY_PROFILE_AGLINK;?></a>
	<?php } ?>

	<?php if ( $er_memlink ){ ?>
	 | <a href="<?php echo $link8a; ?>"><?php echo _EZREALTY_MYEZPANEL;?></a>
	<?php } ?>

</div>
	</td>
	</tr></table>

	</td></tr>
	<?php } ?>

</table>

<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="contentpane">

	<tr><td>

<?php

}


    /**************************************************\
                       MEMBERS HEADER
    \**************************************************/

function EZMembersHeader ( ){
	global $Itemid, $er_bizname, $mosConfig_live_site, $er_colour1, $er_colour2;
	
$link1a = sefRelToAbs( 'index.php?option=com_ezrealty&amp;Itemid='. $Itemid );
$link2a = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=ezpanel&amp;Itemid='. $Itemid );
$link3a = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=terms&amp;Itemid='. $Itemid );

?>

<script type="text/javascript">

function EZOver(lnk) { 
lnk.style.backgroundColor = "#<?php echo $er_colour1;?>";lnk.style.cursor = "hand" 
}

function EZOut(lnk) { 
lnk.style.backgroundColor = "#<?php echo $er_colour2;?>";lnk.style.cursor = "hand" 
}

</script>


<div class="componentheading"><?php echo stripslashes( $er_bizname );?></div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">

<tr><td>

<div align="center">
	<table border="0" cellspacing="5" cellpadding="5"><tr>
	<td align="center" valign="top"><a href="<?php echo $link1a; ?>"><?php echo _EZREALTY_MAINPANEL;?></a> |
	<a href="<?php echo $link2a; ?>"><?php echo _EZREALTY_MYEZPANEL;?></a> |
 <a href="<?php echo $link3a; ?>"><?php echo _EZREALTY_LISTING_TERMS;?></a>
</td>
	</tr>
	</table>
</div>


</td></tr>
</table>


<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="contentpane">

	<tr><td>

<?php

}


    /**************************************************\
                       EMAIL HEADER
    \**************************************************/

function EZEmailHeader ( ){
	global $Itemid, $er_telephone, $er_bizname, $er_bizad;
	
?>

<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="contentpane">
<tr><td>

<div align="center">
<table  cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td align="center"><br /><a href="#" onclick="window.close()"><?php echo _EZREALTY_PRINT_CLOSE;?></a><br /><br /></td>
	</tr>
</table>
</div>

</td></tr>
<tr><td>

<?php

}


    /**************************************************\
                    CLOSE EMAIL EMAIL
    \**************************************************/


function EZClose(){
	global $Itemid;

?>

<div align="center">
<table cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td align="center"><br /><br /><?php echo _EZREALTY_INCLUDES_POSTMAIL;?><br /><br /></td>
	</tr>
</table>
</div>

<?php

}

    /**************************************************\
                         FOOTER
    \**************************************************/

function EZFooter ( ){
	global $Itemid, $er_rssfeed, $er_backbut;

?>

	</td></tr>

	<?php if ( $er_rssfeed ){ ?>

	<tr><td><br /><br /><a href="components/com_ezrealty/rss.ezrealty.php" target="_blank"><img src="images/M_images/rss.png" border="0" alt="<?php echo _EZREALTY_INCLUDES_NEW;?>" title="<?php echo _EZREALTY_INCLUDES_NEW;?>" /> - <?php echo _EZREALTY_INCLUDES_NEW;?></a></td></tr>
	<tr><td><br /><a href="components/com_ezrealty/rss.ezrealty.openhouse.php" target="_blank"><img src="images/M_images/rss.png" border="0" alt="<?php echo _EZREALTY_INCLUDES_RSSOH;?>" title="<?php echo _EZREALTY_INCLUDES_RSSOH;?>" /> - <?php echo _EZREALTY_INCLUDES_RSSOH;?></a></td></tr>

	<?php } ?>

	<tr><td>
	<?php if ( $er_backbut ){ ?>
<div align="center">
<table>
	<tr>
		<td align="center"><br /><br /><input class="button" type="button" value="<?php echo _EZREALTY_BACK;?>" onclick="javascript:history.go(-1)" /></td>
	</tr>
</table>
</div>

	<?php } ?>

	</td></tr>
	</table>

<?php

}



    /**************************************************\
                     MEMBERS FOOTER
    \**************************************************/

function EZMembersFooter ( ){
	global $Itemid, $mosConfig_live_site, $er_backbut;


$link10a = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=terms&amp;Itemid='. $Itemid );


?>

	</td></tr>

	<tr><td align="center"><br /><div align="center"><a href="<?php echo $link10a; ?>"><?php echo _EZREALTY_LISTING_TERMS;?></a></div><br /></td></tr>

	<tr><td>
	<?php if ( $er_backbut ){ ?>
<div align="center">
<table>
	<tr>
		<td align="center"><br /><br /><div align="center"><input class="button" type="button" value="<?php echo _EZREALTY_BACK;?>" onclick="javascript:history.go(-1)" /></div></td>
	</tr>
</table>
</div>
	<?php } ?>

	</td></tr>

	</table>

<?php

}



    /**************************************************\
                      EMAIL FOOTER
    \**************************************************/

function EZEmailFooter ( ){
	global $Itemid;

?>

	</td></tr>
	<tr><td>
<div align="center">
	<table>
	<tr>
	<td><br /><br /><br /><div align="center"><span class='small'><?php echo mosCurrentDate(); ?></span></div></td>
	</tr></table>
</div>
	</td></tr>

	</table>


<?php

}




?>