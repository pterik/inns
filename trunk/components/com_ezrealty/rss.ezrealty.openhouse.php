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

# define some security variables

DEFINE("EZBASE_PATH","../..");
DEFINE("EZBASEINCL_PATH","../../includes");
DEFINE("EZINST_PATH","../../components/com_ezrealty");
DEFINE("EZADMIN_PATH","../../administrator/components/com_ezrealty");

include(EZBASE_PATH."/configuration.php");
include(EZADMIN_PATH."/config.ezrealty.php");
include(EZBASEINCL_PATH."/mambo.php");

if (!file_exists(EZBASEINCL_PATH."/joomla.php")) {
include(EZBASEINCL_PATH."/database.php");
}

DEFINE("LANGUAGE_PATH","../../components/com_ezrealty/language");

if (file_exists(LANGUAGE_PATH."/".$mosConfig_lang.".php")) {
  include(LANGUAGE_PATH."/".$mosConfig_lang.".php");
} elseif (file_exists(LANGUAGE_PATH."/english.php"))  {
  include(LANGUAGE_PATH."/english.php");
} else {
echo "Language file is not available";
}

$database = new database( $mosConfig_host, $mosConfig_user, $mosConfig_password, $mosConfig_db, $mosConfig_dbprefix );

  # Check that access to member listings is allowed

    if ( !$er_rssfeed ){
	echo _EZREALTY_VIEWDET_NOVIEW;
    } else {

$er_rssohname = stripslashes($er_rssohname);

// set the file content type and character set
header("Content-Type: text/xml;charset=iso-8859-1");

$phpversion = phpversion();

//set the beginning of the xml file
ECHO <<<END
<?xml version="1.0" encoding="iso-8859-1"?>
<rss version="2.0" xmlns:media="http://search.yahoo.com/mrss">
    <channel>
      <title>$er_rssohname</title>
      <link>$mosConfig_live_site</link>
      <description>$mosConfig_MetaDesc</description>
      <language>en-us</language>
      <docs>http://backend.userland.com/rss</docs>
      <generator>PHP/$phpversion</generator>
    <image>
<url>$mosConfig_live_site/components/com_ezrealty/images/mini_ezrealty.jpg</url>
<title>$mosConfig_live_site</title>
<link>$mosConfig_live_site</link>
</image>\n
END;



// Find EZ Realty Itemid from the menu table

	$query = "SELECT * from #__menu"
	. "\n WHERE link = 'index.php?option=com_ezrealty'"
	. "\n AND published = '1'"
	;
	$database->setQuery( $query );
	$id = $database->loadResult();
	$Itemid = $id;


if ( $er_expmgmt==1 ) {

if ( $er_expsys==0 ) {

  # Do the main database query to list the contents
	$query = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a"
	. "\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid"
	. "\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid"
	. "\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid"
	. "\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner"
	. "\n WHERE a.openhouse = 1 AND a.published=1 AND a.hits<$er_impnum AND cc.published=1"
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $er_newlist"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

} else {

$currentdate=mktime(0, 0, 0, date("m"), date("d"), date("Y"));

  # Do the main database query to list the contents
	$query = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a"
	. "\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid"
	. "\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid"
	. "\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid"
	. "\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner"
	. "\n WHERE a.openhouse = 1 AND a.published=1 AND cc.published=1 AND a.expdate>$currentdate"
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $er_newlist"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

}

} else {


  # Do the main database query to list the contents
	$query = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a"
	. "\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid"
    . "\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid"
	. "\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid"
	. "\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid"
	. "\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner"
	. "\n WHERE a.openhouse = 1 AND a.published=1 AND cc.published=1"
	. "\n ORDER BY a.id DESC"
	. "\n LIMIT $er_newlist"
	;
	$database->setQuery( $query );
	$rows = $database->loadObjectList();

}


//Make a loop to create the feed                                                

			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
				$row = &$rows[$i];

// Check if there is no thumbnail image for the vehicle
if ($row->image1==""){
$row->image1 = "nothumb.gif";
}

// Clean up the title for use in rss feeds

$row->adline = str_replace ("&amp","",htmlspecialchars(stripslashes($row->adline)));
$row->intro="$row->adline";
// Escape all the nasty bits
$row->intro = preg_replace(array('/</', '/>/', '/"/'), array('&lt;', '&gt;', '&quot;'), $row->intro);

// Clean up the description for use in rss feeds

$row->smalldesc = str_replace ("&amp","",htmlspecialchars(stripslashes($row->smalldesc)));
$row->content1="$row->smalldesc";
// Escape all the nasty bits
$row->content1 = preg_replace(array('/</', '/>/', '/"/'), array('&lt;', '&gt;', '&quot;'), $row->content1);

// Clean up the open house details for use in rss feeds

$row->ohouse_desc = str_replace ("&amp","",htmlspecialchars(stripslashes($row->ohouse_desc)));
$row->content2="$row->ohouse_desc";
// Escape all the nasty bits
$row->content2 = preg_replace(array('/</', '/>/', '/"/'), array('&lt;', '&gt;', '&quot;'), $row->content2);


// display an item

ECHO <<<END
<item>
<title>$row->adline</title>
    <link>$mosConfig_live_site/index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=detail&amp;id=$row->id</link>
    <description><![CDATA["<img src='$mosConfig_live_site/components/com_ezrealty/$er_imagedirectory/th/$row->image1' align='left' />$row->content2 ..."]]></description>
    <guid>$mosConfig_live_site/index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=detail&amp;id=$row->id</guid>
	<pubDate>$row->listdate</pubDate>
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

}

?>
