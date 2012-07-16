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

define( "_VALID_MOS", 1 );

# list of common inclusions:

DEFINE("EZBASE_PATH","../../..");
DEFINE("EZBASEINCL_PATH","../../../includes");
DEFINE("EZINST_PATH","../../../components/com_ezrealty");
DEFINE("EZADMIN_PATH","../../../administrator/components/com_ezrealty");

include(EZBASE_PATH."/configuration.php");
include(EZADMIN_PATH."/config.ezrealty.php");
include(EZBASEINCL_PATH."/mambo.php");

if (!file_exists(EZBASEINCL_PATH."/joomla.php")) {
include(EZBASEINCL_PATH."/database.php");
}

DEFINE("LANGUAGE_PATH","../../../components/com_ezrealty/language");

if (file_exists(LANGUAGE_PATH."/".$mosConfig_lang.".php")) {
  include(LANGUAGE_PATH."/".$mosConfig_lang.".php");
} elseif (file_exists(LANGUAGE_PATH."/english.php"))  {
  include(LANGUAGE_PATH."/english.php");
} else {
echo "Language file is not available";
}


$database = new database( $mosConfig_host, $mosConfig_user, $mosConfig_password, $mosConfig_db, $mosConfig_dbprefix );

$er_rssname = stripslashes($er_rssname);

// set the file content type and character set
header("Content-Type: text/xml;charset=iso-8859-1");

$phpversion = phpversion();

//set the beginning of the xml file
ECHO <<<END
<?xml version="1.0"?>
<rss version="2.0" xmlns:ps="http://www.propsmart.com/datafeed">
<channel>
<title>$mosConfig_sitename</title>
<link>$mosConfig_live_site/components/com_ezrealty/feeds/propsmart.ezrealty.php</link>
<description>An RSS 2.0 data feed used by $mosConfig_sitename to add properties to the PropSmart site.</description>\n
END;


// Find EZ Realty Itemid from the menu table

	$query = "SELECT * from #__menu"
	. "\n WHERE link = 'index.php?option=com_ezrealty'"
	;
	$database->setQuery( $query );
	$id = $database->loadResult();
	$Itemid = $id;


if ( $er_expmgmt==1 ) {

if ( $er_expsys==0 ) {

  # Do the main database query
     $query = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, ee.ezcity_desc AS ezdesc, dd.name AS statename, bb.name AS countryname, u.mid AS mid, u.dealer_name AS dealer_name, u.dealer_company AS dealer_company, u.dealer_phone AS dealer_phone, 
	u.dealer_mobile AS dealer_mobile, u.dealer_email AS dealer_email, u.dealer_image AS dealer_image, u.dealer_type AS dealer_type FROM #__ezrealty as a"
	. "\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid"
	. "\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid"
	. "\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid"
	. "\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner"
	. "\n WHERE a.published=1 AND a.hits<$er_impnum AND cc.published=1"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));

  # Do the main database query
     $query = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, ee.ezcity_desc AS ezdesc, dd.name AS statename, bb.name AS countryname, u.mid AS mid, u.dealer_name AS dealer_name, u.dealer_company AS dealer_company, u.dealer_phone AS dealer_phone, 
	u.dealer_mobile AS dealer_mobile, u.dealer_email AS dealer_email, u.dealer_image AS dealer_image, u.dealer_type AS dealer_type FROM #__ezrealty as a"
	. "\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid"
	. "\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid"
	. "\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid"
	. "\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner"
	. "\n WHERE a.published=1 AND a.expdate>$currentdate AND cc.published=1"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

}

} else {

  # Do the main database query
     $query = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, ee.ezcity_desc AS ezdesc, dd.name AS statename, bb.name AS countryname, u.mid AS mid, u.dealer_name AS dealer_name, u.dealer_company AS dealer_company, u.dealer_phone AS dealer_phone, 
	u.dealer_mobile AS dealer_mobile, u.dealer_email AS dealer_email, u.dealer_image AS dealer_image, u.dealer_type AS dealer_type FROM #__ezrealty as a"
	. "\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid"
	. "\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid"
	. "\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid"
	. "\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner"
	. "\n WHERE a.published=1 AND cc.published=1"
	. "\n ORDER BY a.id DESC"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

}


//Make a loop to create the feed                                                

			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
				$row = &$rows[$i];


// Clean up the price format for use in rss feeds

$number = $row->price;
$formatted_price = number_format($number, 0,",","");



// Clean up the title for use in rss feeds

$row->adline = str_replace ("&amp","",htmlspecialchars(stripslashes($row->adline)));
$row->intro="$row->adline";
// Escape all the nasty bits
$row->intro = preg_replace(array('/</', '/>/', '/"/'), array('&lt;', '&gt;', '&quot;'), $row->intro);


// Clean up the description for use in rss feeds

$row->smalldesc = str_replace ("&amp","",htmlspecialchars(stripslashes($row->smalldesc)));
$row->content="$row->smalldesc";
// Escape all the nasty bits
$row->content = preg_replace(array('/</', '/>/', '/"/'), array('&lt;', '&gt;', '&quot;'), $row->content);

$row->viewad = preg_replace(array('/0/', '/1/'), array('no', 'yes'), $row->viewad);
$row->expdate=strftime("%Y-%m-%d",$row->expdate);


// display an item

ECHO <<<END
  <item>
    <category>$row->cid</category>
    <title>$row->intro</title>
    <description>$row->content</description>
    <address>$row->street_num $row->address2</address>
    <city>$row->unit_num</city>
    <city>$row->proploc</city>
    <state>$row->statename</state>
    <postalcode>$row->postcode</postalcode>
    <country>$row->countryname</country>
    <price>$formatted_price</price>
	<mls>$row->mls_id</mls>
    <bedroom>$row->bedrooms</bedroom>
    <bathroom>$row->bathrooms</bathroom>
	<squarefeet>$row->livingarea</squarefeet>
	<url>$mosConfig_live_site/index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=detail&amp;id=$row->id</url>
	<urltext>$row->dealer_company</urltext>
    <vtour>$row->vtour</vtour>
    <image1>$mosConfig_live_site/components/com_ezrealty/$er_imagedirectory/$row->image1</image1>
    <image2>$mosConfig_live_site/components/com_ezrealty/$er_imagedirectory/$row->image2</image2>
    <image3>$mosConfig_live_site/components/com_ezrealty/$er_imagedirectory/$row->image3</image3>
    <image4>$mosConfig_live_site/components/com_ezrealty/$er_imagedirectory/$row->image4</image4>
	<addressvisible>$row->viewad</addressvisible>
	<yearbuilt>$row->age</yearbuilt>
	<contactname>$row->dealer_name</contactname>
	<contactphone>$row->dealer_phone</contactphone>
	<contactemail>$row->dealer_email</contactemail>
	<propertyid>$row->id</propertyid>
  </item>\n
END;

  }

// Close the database

mysql_close();

// And end the xml file

ECHO <<<END
   </channel>
</rss>
END;



?>

