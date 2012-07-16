<?php
defined ( '_VALID_MOS' ) or die ( 'Direct Access to this location is not allowed.' );
if (! ($acl->acl_check ( "administration", "edit", "users", $my->usertype, "components", "all" ) | $acl->acl_check ( "administration", "edit", "users", $my->usertype, "components", "com_ezrealty" ))) {
	mosredirect ( "index2.php", _NOT_AUTH );
}
global $mainframe, $mosConfig_absolute_path, $mosConfig_lang;
define ( "LANGUAGE_PATH", "../components/com_ezrealty/language/" . $mosConfig_lang );
define ( "ALTLANGUAGE_PATH", "../components/com_ezrealty/language" );
if (file_exists ( LANGUAGE_PATH . ".php" )) {
	include (LANGUAGE_PATH . ".php");
} else if (file_exists ( ALTLANGUAGE_PATH . "/english.php" )) {
	include (ALTLANGUAGE_PATH . "/english.php");
} else {
	echo "Language file is not available";
}
define ( "EZADMIN_PATH", "components/com_ezrealty" );
include (EZADMIN_PATH . "/config.ezrealty.php");

define ( "INCLUDES_PATH", "components/com_ezrealty/includes" );
include (INCLUDES_PATH . "/class.ezrealty.php");
include (INCLUDES_PATH . "/images.php");

require_once ($mainframe->getpath ( "admin_html" ));

$id = mosgetparam ( $_REQUEST, "id", null );
$cid = mosgetparam ( $_REQUEST, "cid", array (0 ) );
if (! is_array ( $cid )) {
	$cid = array ($cid );
}
switch ( $task) {
	case "deleteimage1" :
		deleteimage1 ( $id, $option );
		break;
	case "deleteimage2" :
		deleteimage2 ( $id, $option );
		break;
	case "deleteimage3" :
		deleteimage3 ( $id, $option );
		break;
	case "deleteimage4" :
		deleteimage4 ( $id, $option );
		break;
	case "deleteimage5" :
		deleteimage5 ( $id, $option );
		break;
	case "deleteimage6" :
		deleteimage6 ( $id, $option );
		break;
	case "deleteimage7" :
		deleteimage7 ( $id, $option );
		break;
	case "deleteimage8" :
		deleteimage8 ( $id, $option );
		break;
	case "deleteimage9" :
		deleteimage9 ( $id, $option );
		break;
	case "deleteimage10" :
		deleteimage10 ( $id, $option );
		break;
	case "deleteimage11" :
		deleteimage11 ( $id, $option );
		break;
	case "deleteimage12" :
		deleteimage12 ( $id, $option );
		break;
	case "deleteprofile_image" :
		deleteprofileimage ( $id, $option );
		break;
	case "deletelogo_image" :
		deletelogoimage ( $id, $option );
		break;
	case "upgradetables" :
		upgradetables ( $option );
		break;
	case "optimizetables" :
		optimizetables ( $option );
		break;
	case "sendalertmail" :
		sendalertmail ( $option );
		break;
	case "prunelightbox" :
		prunelightbox ( $option );
		break;
	case "migrateusers" :
		migrateusers ( $option );
		showfooter ();
		break;
	case "domigrate" :
		domigrate ( $cid, $option );
		break;
	case "show" :
		showproperties ( $option );
		showfooter ();
		break;
	case "new" :
		editproperty ( 0, $option );
		showfooter ();
		break;
	case "edit" :
		editproperty ( intval ( $cid [0] ), $option );
		showfooter ();
		break;
	case "editA" :
		editproperty ( $id, $option );
		showfooter ();
		break;
	case "save" :
		saveproperty ( $option );
		break;
	case "cancel" :
		cancelproperty ( $option );
		break;
	case "remove" :
		removeproperty ( $id, $option );
		break;
	case "publish" :
		publishproperty ( $cid, 1, $option );
		break;
	case "unpublish" :
		publishproperty ( $cid, 0, $option );
		break;
	case "resethits" :
		resethits ( $id, $option );
		break;
	case "cleandb" :
		cleandb ( $task );
		break;
	case "copy" :
		copyproperty ( $cid, $option );
		break;
	case "resetdate" :
		resetdate ( $id, $option );
		break;
	case "print" :
		printdetails ( $id, $option );
		break;
	case "showcatg" :
		viewcatg ( $option );
		showfooter ();
		break;
	case "newcatg" :
		editcatg ( 0, $option );
		showfooter ();
		break;
	case "editcatg" :
		editcatg ( intval ( $cid [0] ), $option );
		showfooter ();
		break;
	case "editcatgA" :
		editcatg ( $id, $option );
		showfooter ();
		break;
	case "savecatg" :
		savecatg ( $option );
		break;
	case "cancelcatg" :
		cancelcatg ( $option );
		break;
	case "removecatg" :
		removecatg ( $cid, $option );
		break;
	case "publishcatg" :
		publishcatg ( $cid, 1, $option );
		break;
	case "unpublishcatg" :
		publishcatg ( $cid, 0, $option );
		break;
	case "orderupcatg" :
		ordercatg ( $cid [0], - 1, $option );
		break;
	case "orderdowncatg" :
		ordercatg ( $cid [0], 1, $option );
		break;
	case "leads" :
		showleads ( $option );
		showfooter ();
		break;
	case "newleads" :
		editleads ( 0, $option );
		showfooter ();
		break;
	case "editleads" :
		editleads ( intval ( $cid [0] ), $option );
		showfooter ();
		break;
	case "editleadsA" :
		editleads ( $id, $option );
		showfooter ();
		break;
	case "removeleads" :
		removeleads ( $cid, $option );
		break;
	case "cancelleads" :
		cancelleads ( $option );
		break;
	case "saveleads" :
		saveleads ( $option );
		break;
	case "publishleads" :
		publishleads ( $cid, 1, $option );
		break;
	case "unpublishleads" :
		publishleads ( $cid, 0, $option );
		break;
	case "sendsms" :
		sendsms ( $option );
		break;
	case "profiles" :
		viewprof ( $option );
		showfooter ();
		break;
	case "newprof" :
		editprof ( 0, $option );
		showfooter ();
		break;
	case "editprof" :
		editprof ( intval ( $cid [0] ), $option );
		showfooter ();
		break;
	case "editprofA" :
		editprof ( $id, $option );
		showfooter ();
		break;
	case "saveprof" :
		saveprof ( $option );
		break;
	case "cancelprof" :
		cancelprof ( $option );
		break;
	case "removeprof" :
		removeprof ( $id, $option );
		break;
	case "prices" :
		showprices ( $option );
		showfooter ();
		break;
	case "newprc" :
		editprices ( 0, $option );
		showfooter ();
		break;
	case "editprc" :
		editprices ( intval ( $cid [0] ), $option );
		showfooter ();
		break;
	case "editprcA" :
		editprices ( $id, $option );
		showfooter ();
		break;
	case "saveprc" :
		saveprice ( $option );
		break;
	case "cancelprc" :
		cancelprc ( $option );
		break;
	case "removeprc" :
		removeprice ( $cid, $option );
		break;
	case "publishprc" :
		publishprc ( $cid, 1, $option );
		break;
	case "unpublishprc" :
		publishprc ( $cid, 0, $option );
		break;
	case "orderupprc" :
		orderprc ( $cid [0], - 1, $option );
		break;
	case "orderdownprc" :
		orderprc ( $cid [0], 1, $option );
		break;
	case "localities" :
		showlocalities ( $option );
		showfooter ();
		break;
	case "newloc" :
		editlocalities ( 0, $option );
		showfooter ();
		break;
	case "editloc" :
		editlocalities ( intval ( $cid [0] ), $option );
		showfooter ();
		break;
	case "editlocA" :
		editlocalities ( $id, $option );
		showfooter ();
		break;
	case "saveloc" :
		savelocality ( $option );
		break;
	case "cancelloc" :
		cancelloc ( $option );
		break;
	case "removeloc" :
		removelocality ( $cid, $option );
		break;
	case "publishloc" :
		publishlocality ( $cid, 1, $option );
		break;
	case "unpublishloc" :
		publishlocality ( $cid, 0, $option );
		break;
	case "states" :
		showstates ( $option );
		showfooter ();
		break;
	case "newstate" :
		editstates ( 0, $option );
		showfooter ();
		break;
	case "editstate" :
		editstates ( intval ( $cid [0] ), $option );
		showfooter ();
		break;
	case "editstateA" :
		editstates ( $id, $option );
		showfooter ();
		break;
	case "savestate" :
		savestate ( $option );
		break;
	case "cancelstate" :
		cancelstate ( $option );
		break;
	case "removestate" :
		removestate ( $cid, $option );
		break;
	case "publishstate" :
		publishstate ( $cid, 1, $option );
		break;
	case "unpublishstate" :
		publishstate ( $cid, 0, $option );
		break;
	case "orderupstate" :
		orderstate ( $cid [0], - 1, $option );
		break;
	case "orderdownstate" :
		orderstate ( $cid [0], 1, $option );
		break;
	case "countrys" :
		showcountrys ( $option );
		showfooter ();
		break;
	case "newcountry" :
		editcountrys ( 0, $option );
		showfooter ();
		break;
	case "editcountry" :
		editcountrys ( intval ( $cid [0] ), $option );
		showfooter ();
		break;
	case "editcountryA" :
		editcountrys ( $id, $option );
		showfooter ();
		break;
	case "savecountry" :
		savecountry ( $option );
		break;
	case "cancelcountry" :
		cancelcountry ( $option );
		break;
	case "removecountry" :
		removecountry ( $cid, $option );
		break;
	case "publishcountry" :
		publishcountry ( $cid, 1, $option );
		break;
	case "unpublishcountry" :
		publishcountry ( $cid, 0, $option );
		break;
	case "rooms" :
		showrooms ( $option );
		showfooter ();
		break;
	case "newroom" :
		editrooms ( 0, $option );
		showfooter ();
		break;
	case "editroom" :
		editrooms ( intval ( $cid [0] ), $option );
		showfooter ();
		break;
	case "editroomA" :
		editrooms ( $id, $option );
		showfooter ();
		break;
	case "saveroom" :
		saveroom ( $option );
		break;
	case "cancelroom" :
		cancelroom ( $option );
		break;
	case "removeroom" :
		removeroom ( $cid, $option );
		break;
	case "publishroom" :
		publishroom ( $cid, 1, $option );
		break;
	case "unpublishroom" :
		publishroom ( $cid, 0, $option );
		break;
	case "orderuproom" :
		orderroom ( $cid [0], - 1, $option );
		break;
	case "orderdownroom" :
		orderroom ( $cid [0], 1, $option );
		break;
	case "content" :
		showcontent ( $option );
		showfooter ();
		break;
	case "editcontent" :
		editcontent ( intval ( $cid [0] ), $option );
		showfooter ();
		break;
	case "editcontentA" :
		editcontent ( $id, $option );
		showfooter ();
		break;
	case "savecontent" :
		savecontent ( $option );
		break;
	case "cancelcontent" :
		cancelcontent ( $option );
		break;
	case "removecontent" :
		removecontent ( $cid, $option );
		break;
	case "mlist" :
		showmlist ( $option );
		showfooter ();
		break;
	case "newmlist" :
		editmlist ( 0, $option );
		showfooter ();
		break;
	case "editmlist" :
		editmlist ( intval ( $cid [0] ), $option );
		showfooter ();
		break;
	case "editmlistA" :
		editmlist ( $id, $option );
		showfooter ();
		break;
	case "savemlist" :
		savemlist ( $option );
		break;
	case "cancelmlist" :
		cancelmlist ( $option );
		break;
	case "removemlist" :
		removemlist ( $cid, $option );
		break;
	case "exportmlist" :
		domailexport ( $option );
		break;
	case "settings" :
		showconfig ( $option );
		showfooter ();
		break;
	case "savesettings" :
		saveconfig ( $option );
		break;
	default :
		cpanel ( $option );
		showfooter ();
		break;
}
function upgradetables($option) {
	global $database;
	$msg = _EZREALTY_DATABASE2;
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `declat` VARCHAR( 20 ) NOT NULL AFTER `mapref`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `declong` VARCHAR( 20 ) NOT NULL AFTER `declat`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `type` TINYINT( 3 ) NOT NULL AFTER `id`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `locid` INT( 11 ) NOT NULL AFTER `cid`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `mls_id` VARCHAR ( 30 ) NOT NULL AFTER `agent_id`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `viewad` TINYINT( 1) NULL AFTER `mls_id`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `viewbooking` TINYINT( 1) NULL AFTER `viewad`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `bookinglink` VARCHAR ( 20 ) NOT NULL AFTER `viewbooking`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `unit_num` VARCHAR ( 20 ) NOT NULL AFTER `bookinglink`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `street_num` VARCHAR( 10 ) NOT NULL AFTER `unit_num`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `county` VARCHAR( 30 ) AFTER `postcode`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `showprice` TINYINT( 1 ) NOT NULL AFTER `price`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `freq` INT( 11 ) NOT NULL AFTER `showprice`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `bond` DECIMAL( 15, 2 ) AFTER `freq`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `priceview` VARCHAR( 100 ) AFTER `bond`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `frontage` VARCHAR( 30 ) AFTER `landtype`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `depth` VARCHAR( 30 ) AFTER `frontage`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `totalrooms` VARCHAR( 5 ) AFTER `bedrooms`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `livingarea` VARCHAR( 30 ) AFTER `totalrooms`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `schooldist` VARCHAR( 60 ) AFTER `ctport`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `preschool` VARCHAR( 60 ) AFTER `schooldist`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `primaryschool` VARCHAR( 60 ) AFTER `preschool`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `highschool` VARCHAR( 60 ) AFTER `primaryschool`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `university` VARCHAR( 60 ) AFTER `highschool`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `hofees` VARCHAR ( 10 ) NOT NULL AFTER `university`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `elevator` TINYINT( 1 ) NOT NULL default '0' AFTER `schools`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `pets` TINYINT( 1 ) NOT NULL default '0' AFTER `elevator`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `extra1` TINYINT( 1 ) NOT NULL default '0' AFTER `pets`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `extra2` TINYINT( 1 ) NOT NULL default '0' AFTER `extra1`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `extra3` TINYINT( 1 ) NOT NULL default '0' AFTER `extra2`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `extra4` TINYINT( 1 ) NOT NULL default '0' AFTER `extra3`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `extra5` TINYINT( 1 ) NOT NULL default '0' AFTER `extra4`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `extra6` TINYINT( 1 ) NOT NULL default '0' AFTER `extra5`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `extra7` TINYINT( 1 ) NOT NULL default '0' AFTER `extra6`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `extra8` TINYINT( 1 ) NOT NULL default '0' AFTER `extra7`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `takings` VARCHAR ( 30 ) NOT NULL AFTER `ohouse_desc`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `returns` VARCHAR ( 30 ) NOT NULL AFTER `takings`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `netprofit` VARCHAR ( 30 ) NOT NULL AFTER `returns`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `bustype` VARCHAR ( 30 ) NOT NULL AFTER `netprofit`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `bussubtype` VARCHAR ( 30 ) NOT NULL AFTER `bustype`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `stock` VARCHAR ( 50 ) NOT NULL AFTER `bustype`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `fixtures` VARCHAR ( 50 ) NOT NULL AFTER `stock`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `fittings` VARCHAR ( 50 ) NOT NULL AFTER `fixtures`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `squarefeet` VARCHAR ( 50 ) NOT NULL AFTER `fittings`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `percentoffice` VARCHAR ( 50 ) NOT NULL AFTER `squarefeet`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `percentwarehouse` VARCHAR ( 50 ) NOT NULL AFTER `percentoffice`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `loadingfac` VARCHAR ( 50 ) NOT NULL AFTER `percentwarehouse`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `fencing` VARCHAR ( 50 ) NOT NULL AFTER `loadingfac`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `rainfall` VARCHAR ( 50 ) NOT NULL AFTER `fencing`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `soiltype` VARCHAR ( 50 ) NOT NULL AFTER `rainfall`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `grazing` VARCHAR ( 50 ) NOT NULL AFTER `soiltype`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `cropping` VARCHAR ( 50 ) NOT NULL AFTER `grazing`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `irrigation` VARCHAR ( 50 ) NOT NULL AFTER `cropping`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `waterresources` VARCHAR ( 100 ) NOT NULL AFTER `irrigation`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `carryingcap` VARCHAR ( 50 ) NOT NULL AFTER `waterresources`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `storage` VARCHAR ( 50 ) NOT NULL AFTER `carryingcap`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `services` VARCHAR ( 30 ) NOT NULL AFTER `storage`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `expdate` VARCHAR( 20 ) NULL AFTER `lastupdate`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `metadesc` VARCHAR( 255 ) NOT NULL AFTER `featured`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `metakey` VARCHAR( 255 ) NOT NULL AFTER `metadesc`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `custom4` VARCHAR( 50 ) NOT NULL AFTER `custom3`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty`\n ADD `custom5` VARCHAR( 50 ) NOT NULL AFTER `custom4`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty_price`\n ADD `display` VARCHAR( 20 ) NOT NULL AFTER `range" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty_leads`\n ADD `status` INT( 3 ) NULL AFTER `lid`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty_leads`\n ADD `locid` INT( 11 ) NOT NULL AFTER `cid`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty_leads`\n ADD `type` TINYINT( 3 ) NOT NULL AFTER `cnid`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty_leads`\n ADD `notes` TEXT NOT NULL AFTER `comments`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty_leads`\n ADD `published` TINYINT( 1 ) NOT NULL AFTER `editor" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty_leads` DROP `ezcity`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty_locality`\n ADD `stateid` INT( 11) NULL AFTER `locid`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty_locality`\n CHANGE `city` `ezcity` VARCHAR( 255 ) NOT NULL" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty_locality`\n ADD `ezcity_desc` VARCHAR( 255 ) NULL AFTER `ezcity`" );
	$database->query ();
	$database->setquery ( "CREATE TABLE `#__ezrealty_profile` (\r\n  `prid` int(11) NOT NULL auto_increment,\r\n  `mid` int(11) NOT NULL default '0',\r\n  `dealer_name` varchar(50) default NULL,\r\n  `dealer_company` varchar(50) default NULL,\r\n  `dealer_type` varchar(30) default NULL,\r\n  `dealer_info` varchar(255) default NULL,\r\n  `dealer_address1` varchar(50) default NULL,\r\n  `dealer_address2` varchar(50) default NULL,\r\n  `dealer_locality` varchar(50) default NULL,\r\n  `dealer_pcode` varchar(10) default NULL,\r\n  `dealer_state` varchar(50) default NULL,\r\n  `dealer_country` varchar(50) default NULL,\r\n  `show_addy` tinyint(1) NOT NULL default '0',\r\n  `dealer_declat` varchar(20) NOT NULL default '',\r\n  `dealer_declong` varchar(20) NOT NULL default '',\r\n  `dealer_email` varchar(50) default NULL,\r\n  `dealer_phone` varchar(20) default NULL,\r\n  `dealer_fax` varchar(20) default NULL,\r\n  `dealer_mobile` varchar(20) default NULL,\r\n  `dealer_sms` varchar(20) default NULL,\r\n  `show_sms` tinyint(1) NOT NULL default '0',\r\n  `dealer_msn` varchar(30) default NULL,\r\n  `dealer_skype` varchar(30) default NULL,\r\n  `dealer_ymsgr` varchar(30) default NULL,\r\n  `dealer_icq` varchar(30) default NULL,\r\n  `dealer_web` varchar(255) default NULL,\r\n  `dealer_blog` varchar(255) default NULL,\r\n  `dealer_image` varchar(70) default NULL,\r\n  `logo_image` varchar(70) default NULL,\r\n  `published` tinyint(1) NOT NULL default '0',\r\n  `checked_out` tinyint(1) NOT NULL default '0',\r\n  `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',\r\n  `editor` varchar(50) default NULL,\r\n  PRIMARY KEY  (`prid`),\r\n  UNIQUE KEY `mid` (`mid`)\r\n) TYPE=MyISAM AUTO_INCREMENT=5" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty_profile`\n ADD `dealer_declat` VARCHAR( 20 ) NOT NULL AFTER `show_addy`" );
	$database->query ();
	$database->setquery ( "ALTER TABLE `#__ezrealty_profile`\n ADD `dealer_declong` VARCHAR( 20 ) NOT NULL AFTER `dealer_declat`" );
	$database->query ();
	$database->setquery ( "CREATE TABLE `#__ezrealty_content` (\r\n          `contid` int(11) NOT NULL auto_increment,\r\n          `title` varchar(50) NOT NULL default '',\r\n          `content` text NOT NULL default '',\r\n          `checked_out` tinyint(1) NOT NULL default '0',\r\n          `checked_out_time` datetime NOT NULL default '0000-00-00 00:00:00',\r\n          `editor` varchar(50) default NULL,\r\nPRIMARY KEY  (`contid`)\r\n) TYPE=MyISAM" );
	$database->query ();
	$database->setquery ( "CREATE TABLE `#__ezrealty_mail` (\r\n          `mailid` int(11) NOT NULL auto_increment,\r\n          `name` varchar(50) NOT NULL default '',\r\n          `email` varchar(70) NOT NULL default '',\r\n          `confirmed` tinyint(1) NOT NULL default '0',\r\n          `date` datetime NOT NULL default '0000-00-00 00:00:00',\r\nPRIMARY KEY  (`mailid`)\r\n) TYPE=MyISAM" );
	$database->query ();
	$database->setquery ( "INSERT INTO `#__ezrealty_content` ( `contid` , `title` , `content` , `checked_out` , `checked_out_time` , `editor` ) VALUES (1, 'Business Introduction', 'This is where your business introduction goes for the site.', 0, '0000-00-00 00:00:00', NULL)" );
	$database->query ();
	$database->setquery ( "INSERT INTO `#__ezrealty_content` ( `contid` , `title` , `content` , `checked_out` , `checked_out_time` , `editor` ) VALUES (2, 'Members Area Introduction', 'This is where you enter your members area introduction.', 0, '0000-00-00 00:00:00', NULL)" );
	$database->query ();
	$database->setquery ( "INSERT INTO `#__ezrealty_content` ( `contid` , `title` , `content` , `checked_out` , `checked_out_time` , `editor` ) VALUES (3, 'Terms of Listing', 'This is where your terms of listing goes.', 0, '0000-00-00 00:00:00', NULL)" );
	$database->query ();
	$database->setquery ( "INSERT INTO `#__ezrealty_content` ( `contid` , `title` , `content` , `checked_out` , `checked_out_time` , `editor` ) VALUES (4, 'Success Page', 'This is where your success page content goes. This is the page people land on after a successful payment.', 0, '0000-00-00 00:00:00', NULL)" );
	$database->query ();
	$database->setquery ( "INSERT INTO `#__ezrealty_content` ( `contid` , `title` , `content` , `checked_out` , `checked_out_time` , `editor` ) VALUES (5, 'Cancel Page', 'This is where your cancel page content goes. This is the page people land on after a cancelled or failed payment.', 0, '0000-00-00 00:00:00', NULL)" );
	$database->query ();
	$database->setquery ( "INSERT INTO `#__ezrealty_content` ( `contid` , `title` , `content` , `checked_out` , `checked_out_time` , `editor` ) VALUES (6, 'Admin Print Header Page', 'This is where the html for your print header goes.', 0, '0000-00-00 00:00:00', NULL)" );
	$database->query ();
	$database->setquery ( "INSERT INTO `#__ezrealty_content` ( `contid` , `title` , `content` , `checked_out` , `checked_out_time` , `editor` ) VALUES (7, 'Admin Print Footer Page', 'This is where the html for your print footer goes.', 0, '0000-00-00 00:00:00', NULL)" );
	$database->query ();
	mosredirect ( "index2.php?option=com_ezrealty", $msg );
}
function prunelightbox($option) {
	global $database;
	global $er_lightboxexp;
	$pTime = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ) - $er_lightboxexp, date ( "Y" ) );
	$database->setquery ( "DELETE FROM #__ezautos_lightbox WHERE date < " . $pTime );
	if (! $database->query ()) {
		echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
	}
	mosredirect ( "index2.php?option=com_ezrealty", _EZREALTY_PRUNE_DONE );
}
function optimizetables($option) {
	global $database;
	$msg = _EZREALTY_OPTIMIZE_DATABASE;
	$database->setquery ( "OPTIMIZE TABLE `jos_ezrealty`" );
	$database->query ();
	$database->setquery ( "OPTIMIZE TABLE `jos_ezrealty_catg`" );
	$database->query ();
	$database->setquery ( "OPTIMIZE TABLE `jos_ezrealty_locality`" );
	$database->query ();
	$database->setquery ( "OPTIMIZE TABLE `jos_ezrealty_state`" );
	$database->query ();
	$database->setquery ( "OPTIMIZE TABLE `jos_ezrealty_lightbox`" );
	$database->query ();
	$database->setquery ( "OPTIMIZE TABLE `jos_ezrealty_country`" );
	$database->query ();
	$database->setquery ( "OPTIMIZE TABLE `jos_ezrealty_price`" );
	$database->query ();
	$database->setquery ( "OPTIMIZE TABLE `jos_ezrealty_profile`" );
	$database->query ();
	$database->setquery ( "OPTIMIZE TABLE `jos_ezrealty_room`" );
	$database->query ();
	$database->setquery ( "OPTIMIZE TABLE `jos_ezrealty_mail`" );
	$database->query ();
	$database->setquery ( "OPTIMIZE TABLE `jos_ezrealty_content`" );
	$database->query ();
	mosredirect ( "index2.php?option=com_ezrealty", $msg );
}
function migrateusers($option) {
	global $database, $mainframe, $mosConfig_list_limit, $mosConfig_absolute_path;
	$limit = $mainframe->getuserstatefromrequest ( "viewlistlimit", "limit", $mosConfig_list_limit );
	$limitstart = $mainframe->getuserstatefromrequest ( "viewprice" . $option . "limitstart", "limitstart", 0 );
	$database->setquery ( "SELECT count(*) FROM #__users" );
	$total = $database->loadresult ();
	require_once ($mosConfig_absolute_path . "/administrator/includes/pageNavigation.php");
	$pageNav = new mospagenav ( $total, $limitstart, $limit );
	$query = "SELECT * FROM #__users ";
	$database->setquery ( $query );
	if (! ($result = $database->query ())) {
		echo $database->stderr ();
	} else {
		$rows = $database->loadobjectlist ();
		html_ezrealty::migrateusers ( $option, $rows, $pageNav );
	}
}
function domigrate($cid, $option) {
	global $database;
	$cnt = count ( $cid );

	for($t = 0; $t < $cnt; ++ $t) {
		$row = new mosprofile ( $database );
		$sqlx = "SELECT * FROM #__users\n WHERE id = " . ( integer ) $cid [$t];
		$database->setquery ( $sqlx );
		$result = $database->loadobjectlist ();
		if ($result [0]->id == 0) {
			mosredirect ( "index2.php?option=com_ezrealty&task=migrateusers", _EZREALTY_MIGRATE_ERROR );
		} else {
			$row->id = NULL;
			$row->mid = $result [0]->id;
			$row->dealer_name = $result [0]->name;
			$row->dealer_email = $result [0]->email;
			$row->published = "1";
		}
		if (! $row->check ()) {
			echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
			exit ();
		}
		if ($row->store ()) {
			continue;
		}
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=profiles" );
}

function cpanel($option) {
	global $database, $mainframe;
	$database->setquery ( "SELECT count(*) FROM #__ezrealty_profile" );
	$lRs = $database->loadresult ();
	html_ezrealty::cpanel ( $option, $lRs );
}
function showproperties($option) {
	global $database, $mainframe, $mosConfig_list_limit, $mosConfig_absolute_path;
	$filter_idnum = $mainframe->getuserstatefromrequest ( "filter_idnum" . $option, "filter_idnum", 0 );
	$filter_street = $mainframe->getuserstatefromrequest ( "filter_street" . $option, "filter_street", 0 );
	$filter_locality = $mainframe->getuserstatefromrequest ( "filter_locality" . $option, "filter_locality", 0 );
	$filter_state = $mainframe->getuserstatefromrequest ( "filter_state" . $option, "filter_state", 0 );
	$filter_country = $mainframe->getuserstatefromrequest ( "filter_country" . $option, "filter_country", 0 );
	$filter_category = $mainframe->getuserstatefromrequest ( "filter_category" . $option, "filter_category", 0 );
	$filter_mls = $mainframe->getuserstatefromrequest ( "filter_mls" . $option, "filter_mls", 0 );
	$filter_agent = $mainframe->getuserstatefromrequest ( "filter_agent" . $option, "filter_agent", 0 );
	$order = $mainframe->getuserstatefromrequest ( "zorder", "zorder", "a.id DESC" );
	$limit = $mainframe->getuserstatefromrequest ( "viewlistlimit", "limit", $mosConfig_list_limit );
	$limitstart = $mainframe->getuserstatefromrequest ( "viewprop" . $option . "limitstart", "limitstart", 0 );
	$where = array ( );
	if ($filter_idnum) {
		$where [] = "a.id = '" . $filter_idnum . "'";
	}
	if ($filter_street) {
		$where [] = "a.address2 = '" . $filter_street . "'";
	}
	if ($filter_locality) {
		$where [] = "a.locid = '" . $filter_locality . "'";
	}
	if ($filter_state) {
		$where [] = "a.stid = '" . $filter_state . "'";
	}
	if ($filter_country) {
		$where [] = "a.cnid = '" . $filter_country . "'";
	}
	if ($filter_category) {
		$where [] = "a.cid = '" . $filter_category . "'";
	}
	if ($filter_mls) {
		$where [] = "a.mls_id = '" . $filter_mls . "'";
	}
	if ($filter_agent) {
		$where [] = "a.agent_id = '" . $filter_agent . "'";
	}
	$orderAllowed = array ("a.id ASC", "a.id DESC", "a.price ASC", "a.price DESC", "seller.name ASC", "seller.name DESC", "a.cid ASC", "a.cid DESC", "a.published ASC", "a.published DESC", "a.premium ASC", "a.premium DESC", "a.featured ASC", "a.featured DESC", "a.expdate ASC", "a.expdate DESC" );
	if (! in_array ( $order, $orderAllowed )) {
		$order = "a.id DESC";
	}
	$query = "SELECT COUNT(*) FROM #__ezrealty AS a " . (count ( $where ) ? "\n WHERE " . implode ( " AND ", $where ) : "");
	$database->setquery ( $query );
	$total = $database->loadresult ();
	require_once ($mosConfig_absolute_path . "/administrator/includes/pageNavigation.php");
	$pageNav = new mospagenav ( $total, $limitstart, $limit );
	$query = "SELECT a.*, cc.name AS category, dd.ezcity AS proploc, ee.name AS statename, ff.name AS cnname, seller.name AS propseller, u.name AS editor\n FROM #__ezrealty AS a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS dd ON dd.locid = a.locid\n LEFT JOIN #__ezrealty_state AS ee ON ee.stid = a.stid\n LEFT JOIN #__ezrealty_country AS ff ON ff.cnid = a.cnid\n LEFT JOIN #__users AS seller ON seller.id = a.owner\n LEFT JOIN #__users AS u ON u.id = a.checked_out" . (count ( $where ) ? "\n WHERE " . implode ( " AND ", $where ) : "") . "\n ORDER BY " . $order . ("\n LIMIT " . $pageNav->limitstart . ", {$pageNav->limit}");
	$database->setquery ( $query );
	$rows = $database->loadobjectlist ();
	if ($database->geterrornum ()) {
		echo $database->stderr ();
		return false;
	}
	$ordering [] = mosHTML::makeOption ( "a.id ASC", _EZREALTY_ORDER_LIST1 );
	$ordering [] = mosHTML::makeOption ( "a.id DESC", _EZREALTY_ORDER_LIST2 );
	$ordering [] = mosHTML::makeOption ( "a.price ASC", _EZREALTY_ORDER_LIST19 );
	$ordering [] = mosHTML::makeOption ( "a.price DESC", _EZREALTY_ORDER_LIST20 );
	$ordering [] = mosHTML::makeOption ( "seller.name ASC", _EZREALTY_ORDER_LIST3 );
	$ordering [] = mosHTML::makeOption ( "seller.name DESC", _EZREALTY_ORDER_LIST4 );
	$ordering [] = mosHTML::makeOption ( "a.cid ASC", _EZREALTY_ORDER_LIST5 );
	$ordering [] = mosHTML::makeOption ( "a.cid DESC", _EZREALTY_ORDER_LIST6 );
	$ordering [] = mosHTML::makeOption ( "a.published ASC", _EZREALTY_ORDER_LIST9 );
	$ordering [] = mosHTML::makeOption ( "a.published DESC", _EZREALTY_ORDER_LIST10 );
	$ordering [] = mosHTML::makeOption ( "a.premium ASC", _EZREALTY_ORDER_LIST13 );
	$ordering [] = mosHTML::makeOption ( "a.premium DESC", _EZREALTY_ORDER_LIST14 );
	$ordering [] = mosHTML::makeOption ( "a.featured ASC", _EZREALTY_ORDER_LIST15 );
	$ordering [] = mosHTML::makeOption ( "a.featured DESC", _EZREALTY_ORDER_LIST16 );
	$ordering [] = mosHTML::makeOption ( "a.expdate ASC", _EZREALTY_ORDER_LIST17 );
	$ordering [] = mosHTML::makeOption ( "a.expdate DESC", _EZREALTY_ORDER_LIST18 );
	$javascript = "onchange=\"document.adminForm.submit();\"";
	$lists ['order'] = mosHTML::selectlist ( $ordering, "zorder", "class=\"dropbox\" size=\"1\"" . $javascript, "value", "text", $order );
	$query = "SELECT pp.id AS value, pp.id AS text\n FROM #__ezrealty as pp\n GROUP BY pp.id\n ORDER BY pp.id";
	$database->setquery ( $query );
	$ridnums = $database->loadobjectlist ();
	$idnums [] = mosHTML::makeOption ( "0", _EZREALTY_FILTER_ALLIDS );
	if ($ridnums) {
		$idnums = array_merge ( $idnums, $database->loadobjectlist () );
	}
	$lists ['idnum'] = mosHTML::selectlist ( $idnums, "filter_idnum", "class=\"dropbox\" size=\"1\" onchange=\"document.adminForm.submit( );\"", "value", "text", "{$filter_idnum}" );
	$query = "SELECT nn.address2 AS value, nn.address2 AS text\n FROM #__ezrealty as nn WHERE nn.address2!=''\n GROUP BY nn.address2\n ORDER BY nn.address2";
	$database->setquery ( $query );
	$rstreets = $database->loadobjectlist ();
	$streets [] = mosHTML::makeOption ( "0", _EZREALTY_FILTER_ALLSTREETS );
	if ($rstreets) {
		$streets = array_merge ( $streets, $database->loadobjectlist () );
	}
	$lists ['street'] = mosHTML::selectlist ( $streets, "filter_street", "class=\"dropbox\" size=\"1\" onchange=\"document.adminForm.submit( );\"", "value", "text", "{$filter_street}" );
	$query = "SELECT dd.locid AS value, dd.ezcity AS text\n FROM #__ezrealty_locality as dd\n LEFT JOIN #__ezrealty AS a ON a.locid = dd.locid WHERE dd.published=1\n GROUP BY dd.locid\n ORDER BY dd.ezcity";
	$database->setquery ( $query );
	$rlocalitys = $database->loadobjectlist ();
	$localitys [] = mosHTML::makeOption ( "0", _EZREALTY_LISTINGS_SORTLOCALL );
	if ($rlocalitys) {
		$localitys = array_merge ( $localitys, $database->loadobjectlist () );
	}
	$lists ['locid'] = mosHTML::selectlist ( $localitys, "filter_locality", "class=\"dropbox\" size=\"1\" onchange=\"document.adminForm.submit( );\"", "value", "text", "{$filter_locality}" );
	$query = "SELECT ee.stid AS value, ee.name AS text\n FROM #__ezrealty_state as ee\n LEFT JOIN #__ezrealty AS a ON a.stid = ee.stid WHERE ee.published=1\n GROUP BY ee.stid\n ORDER BY ee.name";
	$database->setquery ( $query );
	$rstate = $database->loadobjectlist ();
	$states [] = mosHTML::makeOption ( "0", _EZREALTY_SORT_ALLSTATES );
	if ($rstate) {
		$states = array_merge ( $states, $database->loadobjectlist () );
	}
	$lists ['stid'] = mosHTML::selectlist ( $states, "filter_state", "class=\"dropbox\" size=\"1\" onchange=\"document.adminForm.submit( );\"", "value", "text", "{$filter_state}" );
	$query = "SELECT ff.cnid AS value, ff.name AS text\n FROM #__ezrealty_country as ff\n LEFT JOIN #__ezrealty AS a ON a.cnid = ff.cnid WHERE ff.published=1\n GROUP BY ff.cnid\n ORDER BY ff.name";
	$database->setquery ( $query );
	$rcountry = $database->loadobjectlist ();
	$countrys [] = mosHTML::makeOption ( "0", _EZREALTY_SORT_ALLCOUNTRIES );
	if ($rcountry) {
		$countrys = array_merge ( $countrys, $database->loadobjectlist () );
	}
	$lists ['cnid'] = mosHTML::selectlist ( $countrys, "filter_country", "class=\"dropbox\" size=\"1\" onchange=\"document.adminForm.submit( );\"", "value", "text", "{$filter_country}" );
	$query = "SELECT cc.cid AS value, cc.name AS text\n FROM #__ezrealty_catg as cc\n LEFT JOIN #__ezrealty AS a ON a.cid = cc.cid WHERE cc.published=1\n GROUP BY cc.cid\n ORDER BY cc.name";
	$categorys [] = mosHTML::makeOption ( "0", _EZREALTY_LISTINGS_SORTTYPEALL );
	$database->setquery ( $query );
	$categorys = array_merge ( $categorys, $database->loadobjectlist () );
	$lists ['cid'] = mosHTML::selectlist ( $categorys, "filter_category", "class=\"dropbox\" size=\"1\" onchange=\"document.adminForm.submit( );\"", "value", "text", "{$filter_category}" );
	$query = "SELECT dd.mls_id AS value, dd.mls_id AS text\n FROM #__ezrealty as dd WHERE dd.mls_id != ''\n GROUP BY dd.mls_id\n ORDER BY dd.mls_id";
	$database->setquery ( $query );
	$rmlss = $database->loadobjectlist ();
	$mlss [] = mosHTML::makeOption ( "0", _EZREALTY_FILTER_MLS );
	if ($rmlss) {
		$mlss = array_merge ( $mlss, $database->loadobjectlist () );
	}
	$lists ['mls'] = mosHTML::selectlist ( $mlss, "filter_mls", "class=\"dropbox\" size=\"1\" onchange=\"document.adminForm.submit( );\"", "value", "text", "{$filter_mls}" );
	$query = "SELECT gg.agent_id AS value, gg.agent_id AS text\n FROM #__ezrealty as gg WHERE gg.agent_id != ''\n GROUP BY gg.agent_id\n ORDER BY gg.agent_id";
	$database->setquery ( $query );
	$ragent = $database->loadobjectlist ();
	$agents [] = mosHTML::makeOption ( "0", _EZREALTY_FILTER_AGENTS );
	if ($ragent) {
		$agents = array_merge ( $agents, $database->loadobjectlist () );
	}
	$lists ['agent'] = mosHTML::selectlist ( $agents, "filter_agent", "class=\"dropbox\" size=\"1\" onchange=\"document.adminForm.submit( );\"", "value", "text", "{$filter_agent}" );
	html_ezrealty::showproperties ( $option, $rows, $lists, $pageNav );
}
function editproperty($propertyid, $option) {
	global $database, $my, $er_imagedirectory, $mosConfig_absolute_path, $mosConfig_live_site, $er_stateloc, $er_country, $er_usefrequit1, $er_usefrequit2, $er_usefrequit3, $er_usefrequit4, $er_usefrequit5, $er_usefrequit6, $er_usefrequit7, $er_usetype1, $er_usetype2, $er_usetype3, $er_usetype4, $er_usetype5, $er_usetype6, $er_usemarket1, $er_usemarket2, $er_usemarket3, $er_usemarket4, $er_usemarket5, $er_usemarket6;
	includeajax ( $option );
	$lists = array ( );
	$row = new mosezrealty ( $database );
	$row->load ( $propertyid );
	if ($propertyid) {
		$row->checkout ( $my->id );
	}
	$freqit [] = mosHTML::makeOption ( 0, _EZREALTY_RENTAL_NA );
	if ($er_usefrequit1) {
		$freqit [] = mosHTML::makeOption ( 1, _EZREALTY_RENTAL_NIGHTLY );
	}
	if ($er_usefrequit2) {
		$freqit [] = mosHTML::makeOption ( 2, _EZREALTY_RENTAL_WEEKLY );
	}
	if ($er_usefrequit3) {
		$freqit [] = mosHTML::makeOption ( 3, _EZREALTY_RENTAL_FNIGHT );
	}
	if ($er_usefrequit4) {
		$freqit [] = mosHTML::makeOption ( 4, _EZREALTY_RENTAL_MONTH );
	}
	if ($er_usefrequit5) {
		$freqit [] = mosHTML::makeOption ( 5, _EZREALTY_RENTAL_SQFT );
	}
	if ($er_usefrequit6) {
		$freqit [] = mosHTML::makeOption ( 6, _EZREALTY_RENTAL_SQMTR );
	}
	if ($er_usefrequit7) {
		$freqit [] = mosHTML::makeOption ( 7, _EZREALTY_RENTAL_SPARE );
	}
	$lists ['freq'] = mosHTML::selectlist ( $freqit, "freq", "class=\"inputbox\" size=\"1\"", "value", "text", $row->freq );
	$typeit [] = mosHTML::makeOption ( 0, _EZREALTY_LISTING_SELECTTYPE );
	if ($er_usetype1) {
		$typeit [] = mosHTML::makeOption ( 1, _EZREALTY_TYPE_SALE );
	}
	if ($er_usetype2) {
		$typeit [] = mosHTML::makeOption ( 2, _EZREALTY_TYPE_RENTAL );
	}
	if ($er_usetype3) {
		$typeit [] = mosHTML::makeOption ( 3, _EZREALTY_TYPE_LEASE );
	}
	if ($er_usetype4) {
		$typeit [] = mosHTML::makeOption ( 4, _EZREALTY_TYPE_AUCTION );
	}
	if ($er_usetype5) {
		$typeit [] = mosHTML::makeOption ( 5, _EZREALTY_TYPE_SWAP );
	}
	if ($er_usetype6) {
		$typeit [] = mosHTML::makeOption ( 6, _EZREALTY_TYPE_TENDER );
	}
	$lists ['type'] = mosHTML::selectlist ( $typeit, "type", "class=\"inputbox\" size=\"1\"", "value", "text", $row->type );
	$soldit [] = mosHTML::makeOption ( 0, _EZREALTY_DETAILS_MARKET0 );
	if ($er_usemarket1) {
		$soldit [] = mosHTML::makeOption ( 1, _EZREALTY_DETAILS_MARKET1 );
	}
	if ($er_usemarket2) {
		$soldit [] = mosHTML::makeOption ( 2, _EZREALTY_DETAILS_MARKET2 );
	}
	if ($er_usemarket3) {
		$soldit [] = mosHTML::makeOption ( 3, _EZREALTY_DETAILS_MARKET3 );
	}
	if ($er_usemarket4) {
		$soldit [] = mosHTML::makeOption ( 4, _EZREALTY_DETAILS_MARKET4 );
	}
	if ($er_usemarket5) {
		$soldit [] = mosHTML::makeOption ( 5, _EZREALTY_DETAILS_MARKET5 );
	}
	if ($er_usemarket6) {
		$soldit [] = mosHTML::makeOption ( 6, _EZREALTY_DETAILS_MARKET6 );
	}
	$lists ['sold'] = mosHTML::selectlist ( $soldit, "sold", "class=\"inputbox\" size=\"1\"", "value", "text", $row->sold );
	$localitylist [] = mosHTML::makeOption ( 0, _EZREALTY_NA );
	$localitylist [] = mosHTML::makeOption ( 1, _EZREALTY_CONFIG_NO );
	$localitylist [] = mosHTML::makeOption ( 2, _EZREALTY_CONFIG_YES );
	$localitylist [] = mosHTML::makeOption ( 3, _EZREALTY_HELPER_PETS );
	$lists ['pets'] = mosHTML::selectlist ( $localitylist, "pets", "class=\"inputbox\" size=\"1\"", "value", "text", $row->pets );
	if ($er_stateloc == 1) {
		$sql = "SELECT a.stid as value, name as text FROM #__ezrealty_state AS a WHERE a.published=1 ORDER by a.name";
		$database->setquery ( $sql );
		if (! $database->query ()) {
			echo $database->stderr ();
		} else {
			$statelist [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELSTATE );
			$statelist = array_merge ( $statelist, $database->loadobjectlist () );
			$lists ['stid'] = mosHTML::selectlist ( $statelist, "stid", "class=\"inputbox\" id=\"stid\" size=\"1\" onchange=\"getDropLocList(this,1)\" ", "value", "text", $row->stid );
			if ($row->stid) {
				$sql = "SELECT g.locid as value, g.ezcity as text FROM #__ezrealty_locality AS g WHERE g.stateid=" . $row->stid . " AND g.published=1 ORDER by g.ezcity";
			} else {
				$sql = "SELECT g.locid as value, g.ezcity as text FROM #__ezrealty_locality AS g WHERE g.published=1 ORDER by g.ezcity";
			}
			$database->setquery ( $sql );
			if (! $database->query ()) {
				echo $database->stderr ();
			} else {
				$sLoc [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELLOC );
				if ($row->stid) {
					$sLoc = array_merge ( $sLoc, $database->loadobjectlist () );
				}
				$lists ['locid'] = mosHTML::selectlist ( $sLoc, "locid", "class=\"inputbox\" id=\"locid\" size=\"1\" READONLY ", "value", "text", $row->locid );
			}
		}
	}
	if ($er_stateloc == 2) {
		$sql = "SELECT b.locid as value, b.ezcity as text FROM #__ezrealty_locality AS b WHERE b.published=1 ORDER by b.ezcity";
		$database->setquery ( $sql );
		if (! $database->query ()) {
			echo $database->stderr ();
		} else {
			$selLoct [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELLOC );
			$selLoct = array_merge ( $selLoct, $database->loadobjectlist () );
			$lists ['locid2'] = mosHTML::selectlist ( $selLoct, "locid", "class=\"inputbox\" size=\"1\"", "value", "text", $row->locid );
		}
	}
	if ($er_country) {
		$sql = "SELECT c.cnid as value, c.name as text FROM #__ezrealty_country AS c WHERE c.published=1 ORDER by c.name";
		$database->setquery ( $sql );
		if (! $database->query ()) {
			echo $database->stderr ();
		} else {
			$selLoctC [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELCOUNTRY );
			$selLoctC = array_merge ( $selLoctC, $database->loadobjectlist () );
			$lists ['cnid'] = mosHTML::selectlist ( $selLoctC, "cnid", "class=\"inputbox\" size=\"1\"", "value", "text", $row->cnid );
		}
	}
	$sql = "SELECT d.cid as value, d.name as text FROM #__ezrealty_catg AS d WHERE d.published=1 ORDER by d.ordering";
	$database->setquery ( $sql );
	if (! $database->query ()) {
		echo $database->stderr ();
	} else {
		$selCat [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELCAT );
		$selCat = array_merge ( $selCat, $database->loadobjectlist () );
		$lists ['cid'] = mosHTML::selectlist ( $selCat, "cid", "class=\"inputbox\" size=\"1\"", "value", "text", $row->cid );
		$sql = "SELECT e.number as value, e.number as text FROM #__ezrealty_room AS e WHERE e.published=1 ORDER by e.ordering";
		$database->setquery ( $sql );
		if (! $database->query ()) {
			echo $database->stderr ();
		} else {
			$selLoctR [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELROOM );
			$selLoctR [] = mosHTML::makeOption ( "0.5", _EZREALTY_STUDIO );
			$selLoctR = array_merge ( $selLoctR, $database->loadobjectlist () );
			$lists ['bedrooms'] = mosHTML::selectlist ( $selLoctR, "bedrooms", "class=\"inputbox\" size=\"1\"", "value", "text", $row->bedrooms );
			$sortpremium [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_FREESTATUS );
			$sortpremium [] = mosHTML::makeOption ( "1", _EZREALTY_PREMIUM );
			$lists ['premium'] = mosHTML::selectlist ( $sortpremium, "premium", "class=\"inputbox\" size=\"1\"", "value", "text", $row->premium );
			$lists ['pool'] = mosHTML::yesnoradiolist ( "pool", "class=\"inputbox\"", $row->pool );
			$lists ['fplace'] = mosHTML::yesnoradiolist ( "fplace", "class=\"inputbox\"", $row->fplace );
			$lists ['bbq'] = mosHTML::yesnoradiolist ( "bbq", "class=\"inputbox\"", $row->bbq );
			$lists ['gazebo'] = mosHTML::yesnoradiolist ( "gazebo", "class=\"inputbox\"", $row->gazebo );
			$lists ['lug'] = mosHTML::yesnoradiolist ( "lug", "class=\"inputbox\"", $row->lug );
			$lists ['bir'] = mosHTML::yesnoradiolist ( "bir", "class=\"inputbox\"", $row->bir );
			$lists ['heating'] = mosHTML::yesnoradiolist ( "heating", "class=\"inputbox\"", $row->heating );
			$lists ['airco'] = mosHTML::yesnoradiolist ( "airco", "class=\"inputbox\"", $row->airco );
			$lists ['shops'] = mosHTML::yesnoradiolist ( "shops", "class=\"inputbox\"", $row->shops );
			$lists ['schools'] = mosHTML::yesnoradiolist ( "schools", "class=\"inputbox\"", $row->schools );
			$lists ['elevator'] = mosHTML::yesnoradiolist ( "elevator", "class=\"inputbox\"", $row->elevator );
			$lists ['extra1'] = mosHTML::yesnoradiolist ( "extra1", "class=\"inputbox\"", $row->extra1 );
			$lists ['extra2'] = mosHTML::yesnoradiolist ( "extra2", "class=\"inputbox\"", $row->extra2 );
			$lists ['extra3'] = mosHTML::yesnoradiolist ( "extra3", "class=\"inputbox\"", $row->extra3 );
			$lists ['extra4'] = mosHTML::yesnoradiolist ( "extra4", "class=\"inputbox\"", $row->extra4 );
			$lists ['extra5'] = mosHTML::yesnoradiolist ( "extra5", "class=\"inputbox\"", $row->extra5 );
			$lists ['extra6'] = mosHTML::yesnoradiolist ( "extra6", "class=\"inputbox\"", $row->extra6 );
			$lists ['extra7'] = mosHTML::yesnoradiolist ( "extra7", "class=\"inputbox\"", $row->extra7 );
			$lists ['extra8'] = mosHTML::yesnoradiolist ( "extra8", "class=\"inputbox\"", $row->extra8 );
			$lists ['openhouse'] = mosHTML::yesnoradiolist ( "openhouse", "class=\"inputbox\"", $row->openhouse );
			$lists ['published'] = mosHTML::yesnoradiolist ( "published", "class=\"inputbox\"", $row->published );
			$lists ['featured'] = mosHTML::yesnoradiolist ( "featured", "class=\"inputbox\"", $row->featured );
			$lists ['showprice'] = mosHTML::yesnoradiolist ( "showprice", "class=\"inputbox\"", $row->showprice );
			$lists ['viewad'] = mosHTML::yesnoradiolist ( "viewad", "class=\"inputbox\"", $row->viewad );
			$lists ['viewbooking'] = mosHTML::yesnoradiolist ( "viewbooking", "class=\"inputbox\"", $row->viewbooking );
			$sql = "SELECT f.mid as value, f.dealer_name as text FROM #__ezrealty_profile AS f WHERE f.published=1 ORDER by f.dealer_name ASC";
			$database->setquery ( $sql );
			if (! $database->query ()) {
				echo $database->stderr ();
			} else {
				$sortsellers [] = mosHTML::makeOption ( "0", _EZREALTY_SELECT_SELLER );
				$sortsellers = array_merge ( $sortsellers, $database->loadobjectlist () );
				$lists ['owner'] = mosHTML::selectlist ( $sortsellers, "owner", "class=\"inputbox\" size=\"1\"", "value", "text", $row->owner );
				$mapFiles = mosreaddirectory ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" );
				$imagedropdown = array (mosHTML::makeOption ( "", _EZREALTY_VLDET_CHOOSENEW ) );
				foreach ( $mapFiles as $file ) {
					if (eregi ( "bmp|gif|jpg|png", $file )) {
						$imagedropdown [] = mosHTML::makeOption ( $file );
					}
				}
				$list ['image1'] = mosHTML::selectlist ( $imagedropdown, "image1", "class=\"inputbox\" size=\"1\" onchange=\"javascript:if (document.forms[0].image1.options[selectedIndex].value!='') {document.image1prev.src='" . $mosConfig_live_site . "/components/com_ezrealty/" . $er_imagedirectory . "/th/' + document.forms[0].image1.options[selectedIndex].value} else {document.image1prev.src='../images/M_images/blank.png'}\"", "value", "text", $row->image1 );
				$list ['image2'] = mosHTML::selectlist ( $imagedropdown, "image2", "class=\"inputbox\" size=\"1\" onchange=\"javascript:if (document.forms[0].image2.options[selectedIndex].value!='') {document.image2prev.src='" . $mosConfig_live_site . "/components/com_ezrealty/" . $er_imagedirectory . "/th/' + document.forms[0].image2.options[selectedIndex].value} else {document.image2prev.src='../images/M_images/blank.png'}\"", "value", "text", $row->image2 );
				$list ['image3'] = mosHTML::selectlist ( $imagedropdown, "image3", "class=\"inputbox\" size=\"1\" onchange=\"javascript:if (document.forms[0].image3.options[selectedIndex].value!='') {document.image3prev.src='" . $mosConfig_live_site . "/components/com_ezrealty/" . $er_imagedirectory . "/th/' + document.forms[0].image3.options[selectedIndex].value} else {document.image3prev.src='../images/M_images/blank.png'}\"", "value", "text", $row->image3 );
				$list ['image4'] = mosHTML::selectlist ( $imagedropdown, "image4", "class=\"inputbox\" size=\"1\" onchange=\"javascript:if (document.forms[0].image4.options[selectedIndex].value!='') {document.image4prev.src='" . $mosConfig_live_site . "/components/com_ezrealty/" . $er_imagedirectory . "/th/' + document.forms[0].image4.options[selectedIndex].value} else {document.image4prev.src='../images/M_images/blank.png'}\"", "value", "text", $row->image4 );
				$list ['image5'] = mosHTML::selectlist ( $imagedropdown, "image5", "class=\"inputbox\" size=\"1\" onchange=\"javascript:if (document.forms[0].image5.options[selectedIndex].value!='') {document.image5prev.src='" . $mosConfig_live_site . "/components/com_ezrealty/" . $er_imagedirectory . "/th/' + document.forms[0].image5.options[selectedIndex].value} else {document.image5prev.src='../images/M_images/blank.png'}\"", "value", "text", $row->image5 );
				$list ['image6'] = mosHTML::selectlist ( $imagedropdown, "image6", "class=\"inputbox\" size=\"1\" onchange=\"javascript:if (document.forms[0].image6.options[selectedIndex].value!='') {document.image6prev.src='" . $mosConfig_live_site . "/components/com_ezrealty/" . $er_imagedirectory . "/th/' + document.forms[0].image6.options[selectedIndex].value} else {document.image6prev.src='../images/M_images/blank.png'}\"", "value", "text", $row->image6 );
				$list ['image7'] = mosHTML::selectlist ( $imagedropdown, "image7", "class=\"inputbox\" size=\"1\" onchange=\"javascript:if (document.forms[0].image7.options[selectedIndex].value!='') {document.image7prev.src='" . $mosConfig_live_site . "/components/com_ezrealty/" . $er_imagedirectory . "/th/' + document.forms[0].image7.options[selectedIndex].value} else {document.image7prev.src='../images/M_images/blank.png'}\"", "value", "text", $row->image7 );
				$list ['image8'] = mosHTML::selectlist ( $imagedropdown, "image8", "class=\"inputbox\" size=\"1\" onchange=\"javascript:if (document.forms[0].image8.options[selectedIndex].value!='') {document.image8prev.src='" . $mosConfig_live_site . "/components/com_ezrealty/" . $er_imagedirectory . "/th/' + document.forms[0].image8.options[selectedIndex].value} else {document.image8prev.src='../images/M_images/blank.png'}\"", "value", "text", $row->image8 );
				$list ['image9'] = mosHTML::selectlist ( $imagedropdown, "image9", "class=\"inputbox\" size=\"1\" onchange=\"javascript:if (document.forms[0].image1.options[selectedIndex].value!='') {document.image9prev.src='" . $mosConfig_live_site . "/components/com_ezrealty/" . $er_imagedirectory . "/th/' + document.forms[0].image1.options[selectedIndex].value} else {document.image9prev.src='../images/M_images/blank.png'}\"", "value", "text", $row->image9 );
				$list ['image10'] = mosHTML::selectlist ( $imagedropdown, "image10", "class=\"inputbox\" size=\"1\" onchange=\"javascript:if (document.forms[0].image2.options[selectedIndex].value!='') {document.image10prev.src='" . $mosConfig_live_site . "/components/com_ezrealty/" . $er_imagedirectory . "/th/' + document.forms[0].image2.options[selectedIndex].value} else {document.image10prev.src='../images/M_images/blank.png'}\"", "value", "text", $row->image10 );
				$list ['image11'] = mosHTML::selectlist ( $imagedropdown, "image11", "class=\"inputbox\" size=\"1\" onchange=\"javascript:if (document.forms[0].image3.options[selectedIndex].value!='') {document.image11prev.src='" . $mosConfig_live_site . "/components/com_ezrealty/" . $er_imagedirectory . "/th/' + document.forms[0].image3.options[selectedIndex].value} else {document.image11prev.src='../images/M_images/blank.png'}\"", "value", "text", $row->image11 );
				$list ['image12'] = mosHTML::selectlist ( $imagedropdown, "image12", "class=\"inputbox\" size=\"1\" onchange=\"javascript:if (document.forms[0].image4.options[selectedIndex].value!='') {document.image12prev.src='" . $mosConfig_live_site . "/components/com_ezrealty/" . $er_imagedirectory . "/th/' + document.forms[0].image4.options[selectedIndex].value} else {document.image12prev.src='../images/M_images/blank.png'}\"", "value", "text", $row->image12 );
				html_ezrealty::editproperty ( $option, $row, $lists, $list );
			}
		}
	}
}
function saveproperty($option) {
	global $database;
	global $er_imagedirectory;
	global $er_expfig;
	$row = new mosezrealty ( $database );
	$msg = _EZREALTY_DETAILS_SAVED;
	if (! $row->bind ( $_POST )) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->id = intval ( $row->id );
	$row->cid = intval ( $row->cid );
	if (! $row->check ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	if ($_REQUEST ['image1']) {
		$row->image1 = $_REQUEST ['image1'];
	}
	if ($_FILES ['image1upload'] ['name']) {
		$row->image1 = savefileupload ( $_FILES ['image1upload'] ['name'], $_FILES ['image1upload'] ['type'], $_FILES ['image1upload'] ['tmp_name'] );
	}
	if ($_REQUEST ['image2']) {
		$row->image2 = $_REQUEST ['image2'];
	}
	if ($_FILES ['image2upload'] ['name']) {
		$row->image2 = savefileupload ( $_FILES ['image2upload'] ['name'], $_FILES ['image2upload'] ['type'], $_FILES ['image2upload'] ['tmp_name'] );
	}
	if ($_REQUEST ['image3']) {
		$row->image3 = $_REQUEST ['image3'];
	}
	if ($_FILES ['image3upload'] ['name']) {
		$row->image3 = savefileupload ( $_FILES ['image3upload'] ['name'], $_FILES ['image3upload'] ['type'], $_FILES ['image3upload'] ['tmp_name'] );
	}
	if ($_REQUEST ['image4']) {
		$row->image4 = $_REQUEST ['image4'];
	}
	if ($_FILES ['image4upload'] ['name']) {
		$row->image4 = savefileupload ( $_FILES ['image4upload'] ['name'], $_FILES ['image4upload'] ['type'], $_FILES ['image4upload'] ['tmp_name'] );
	}
	if ($_REQUEST ['image5']) {
		$row->image5 = $_REQUEST ['image5'];
	}
	if ($_FILES ['image5upload'] ['name']) {
		$row->image5 = savefileupload ( $_FILES ['image5upload'] ['name'], $_FILES ['image5upload'] ['type'], $_FILES ['image5upload'] ['tmp_name'] );
	}
	if ($_REQUEST ['image6']) {
		$row->image6 = $_REQUEST ['image6'];
	}
	if ($_FILES ['image6upload'] ['name']) {
		$row->image6 = savefileupload ( $_FILES ['image6upload'] ['name'], $_FILES ['image6upload'] ['type'], $_FILES ['image6upload'] ['tmp_name'] );
	}
	if ($_REQUEST ['image7']) {
		$row->image7 = $_REQUEST ['image7'];
	}
	if ($_FILES ['image7upload'] ['name']) {
		$row->image7 = savefileupload ( $_FILES ['image7upload'] ['name'], $_FILES ['image7upload'] ['type'], $_FILES ['image7upload'] ['tmp_name'] );
	}
	if ($_REQUEST ['image8']) {
		$row->image8 = $_REQUEST ['image8'];
	}
	if ($_FILES ['image8upload'] ['name']) {
		$row->image8 = savefileupload ( $_FILES ['image8upload'] ['name'], $_FILES ['image8upload'] ['type'], $_FILES ['image8upload'] ['tmp_name'] );
	}
	if ($_REQUEST ['image9']) {
		$row->image9 = $_REQUEST ['image9'];
	}
	if ($_FILES ['image9upload'] ['name']) {
		$row->image9 = savefileupload ( $_FILES ['image9upload'] ['name'], $_FILES ['image9upload'] ['type'], $_FILES ['image9upload'] ['tmp_name'] );
	}
	if ($_REQUEST ['image10']) {
		$row->image10 = $_REQUEST ['image10'];
	}
	if ($_FILES ['image10upload'] ['name']) {
		$row->image10 = savefileupload ( $_FILES ['image10upload'] ['name'], $_FILES ['image10upload'] ['type'], $_FILES ['image10upload'] ['tmp_name'] );
	}
	if ($_REQUEST ['image11']) {
		$row->image11 = $_REQUEST ['image11'];
	}
	if ($_FILES ['image11upload'] ['name']) {
		$row->image11 = savefileupload ( $_FILES ['image11upload'] ['name'], $_FILES ['image11upload'] ['type'], $_FILES ['image11upload'] ['tmp_name'] );
	}
	if ($_REQUEST ['image12']) {
		$row->image12 = $_REQUEST ['image12'];
	}
	if ($_FILES ['image12upload'] ['name']) {
		$row->image12 = savefileupload ( $_FILES ['image12upload'] ['name'], $_FILES ['image12upload'] ['type'], $_FILES ['image12upload'] ['tmp_name'] );
	}
	$row->lastupdate = mktime ();
	$row->propdesc = str_replace ( "<br>", "<br />", $row->propdesc );
	$row->address2 = ampreplace ( $row->address2 );
	$row->postcode = ampreplace ( $row->postcode );
	$row->mapref = ampreplace ( $row->mapref );
	$row->age = ampreplace ( $row->age );
	$row->landtype = ampreplace ( $row->landtype );
	$row->bathrooms = ampreplace ( $row->bathrooms );
	$row->parking = ampreplace ( $row->parking );
	$row->ctown = ampreplace ( $row->ctown );
	$row->ctport = ampreplace ( $row->ctport );
	$row->custom1 = ampreplace ( $row->custom1 );
	$row->custom2 = ampreplace ( $row->custom2 );
	$row->custom3 = ampreplace ( $row->custom3 );
	$row->price = ampreplace ( $row->price );
	$row->agent_id = ampreplace ( $row->agent_id );
	$row->adline = ampreplace ( $row->adline );
	$row->smalldesc = ampreplace ( $row->smalldesc );
	$row->vtour = ampreplace ( $row->vtour );
	$row->ohouse_desc = ampreplace ( $row->ohouse_desc );
	$row->metadesc = ampreplace ( $row->metadesc );
	$row->metakey = ampreplace ( $row->metakey );
	$row->bookinglink = "{bookinglink}";
	$comps = $row->id < 1;
	if ($comps) {
		$row->listdate = date ( "Y-m-d" );
		$row->expdate = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ) + $er_expfig, date ( "Y" ) );
	}
	if (! $row->store ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->checkin ();
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=show", $msg );
}
function printdetails($propertyid, $option) {
	global $database;
	global $mainframe;
	$sqlx = "SELECT content FROM #__ezrealty_content\n WHERE contid=6";
	$database->setquery ( $sqlx );
	$varOb1 = $database->loadresult ();
	$sqlx = "SELECT content FROM #__ezrealty_content\n WHERE contid=7";
	$database->setquery ( $sqlx );
	$varOb2 = $database->loadresult ();
	$sqlx = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, ee.ezcity_desc AS ezdesc, dd.name AS statename, bb.name AS countryname, u.mid AS mid, u.dealer_name AS dealer_name, u.dealer_company AS dealer_company, u.dealer_phone AS dealer_phone, \r\n\tu.dealer_mobile AS dealer_mobile, u.dealer_sms AS dealer_sms, u.show_sms AS show_sms, u.dealer_image AS dealer_image, u.dealer_type AS dealer_type, u.logo_image AS logo_image, u.published AS dealerpublished FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.id = " . $propertyid);
	$database->setquery ( $sqlx );
	$database->loadobject ( $row );
	html_ezrealty::printdetails ( $option, $row, $varOb1, $varOb2 );
}
function cancelproperty($option) {
	global $database;
	$row = new mosezrealty ( $database );
	$row->bind ( $_POST );
	$row->checkin ();
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=show" );
}
function publishproperty($cid = null, $publish = 1, $option) {
	global $database;
	global $my;
	$catid = mosgetparam ( $_POST, "catid", array (0 ) );
	if (! is_array ( $cid ) && count ( $cid ) < 1) {
		$action = $publish ? "publish" : "unpublish";
		echo "<script> alert(_EZREALTY_GENERAL_ERROR1 '" . $action . "'); window.history.go(-1);</script>\n";
		exit ();
	}
	$cids = implode ( ",", $cid );
	$sqlx = "UPDATE #__ezrealty\n SET published = " . intval ( $publish ) . ("\n WHERE id IN ( " . $cids . " )") . ("\n AND ( checked_out = 0 OR ( checked_out = " . $my->id . " ) )");
	$database->setquery ( $sqlx );
	if (! $database->query ()) {
		echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	if (count ( $cid ) == 1) {
		$row = new mosezrealty ( $database );
		$row->checkin ( $cid [0] );
	}
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=show" );
}
function removeproperty($id, $option) {
	global $database, $mosConfig_absolute_path, $er_imagedirectory;
	$database->setquery ( "select * from #__ezrealty where id=" . intval ( $id ) );
	$doIt = $database->loadresult ();
	if ($id) {
		$row = new mosezrealty ( $database );
		$row->load ( $id );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image1 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image1 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image2 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image2 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image3 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image3 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image4 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image4 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image5 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image5 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image6 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image6 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image7 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image7 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image8 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image8 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image9 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image9 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image10 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image10 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image11 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image11 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image12 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image12 );
		$database->setquery ( "DELETE FROM #__ezrealty WHERE id=" . $id );
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( "index2.php?option=com_ezrealty&amp;task=show" );
	}
}
function copyproperty($cid, $option) {
	global $database;
	$cnt = count ( $cid );

	for($t = 0; $t < $cnt; ++ $t) {
		$row = new mosezrealty ( $database );
		$sqlx = "SELECT a.*\n FROM #__ezrealty AS a\n WHERE a.id = " . ( integer ) $cid [$t];
		$database->setquery ( $sqlx );
		$result = $database->loadobjectlist ();
		$row->id = NULL;
		$row->type = $result [0]->type;
		$row->cid = $result [0]->cid;
		$row->locid = $result [0]->locid;
		$row->stid = $result [0]->stid;
		$row->cnid = $result [0]->cnid;
		$row->agent_id = $result [0]->agent_id;
		$row->mls_id = $result [0]->mls_id;
		$row->viewad = $result [0]->viewad;
		$row->viewbooking = $result [0]->viewbooking;
		$row->bookinglink = $result [0]->bookinglink;
		$row->unit_num = $result [0]->unit_num;
		$row->street_num = $result [0]->street_num;
		$row->address2 = $result [0]->address2;
		$row->postcode = $result [0]->postcode;
		$row->county = $result [0]->county;
		$row->price = $result [0]->price;
		$row->showprice = $result [0]->showprice;
		$row->freq = $result [0]->freq;
		$row->bond = $result [0]->bond;
		$row->priceview = $result [0]->priceview;
		$row->age = $result [0]->age;
		$row->landtype = $result [0]->landtype;
		$row->frontage = $result [0]->frontage;
		$row->depth = $result [0]->depth;
		$row->bedrooms = $result [0]->bedrooms;
		$row->totalrooms = $result [0]->totalrooms;
		$row->livingarea = $result [0]->livingarea;
		$row->bathrooms = $result [0]->bathrooms;
		$row->parking = $result [0]->parking;
		$row->mapref = $result [0]->mapref;
		$row->declat = $result [0]->declat;
		$row->declong = $result [0]->declong;
		$row->vtour = $result [0]->vtour;
		$row->com_feature = $result [0]->com_feature;
		$row->adline = $result [0]->adline;
		$row->propdesc = $result [0]->propdesc;
		$row->smalldesc = $result [0]->smalldesc;
		$row->ctown = $result [0]->ctown;
		$row->ctport = $result [0]->ctport;
		$row->schooldist = $result [0]->schooldist;
		$row->preschool = $result [0]->preschool;
		$row->primaryschool = $result [0]->primaryschool;
		$row->highschool = $result [0]->highschool;
		$row->university = $result [0]->university;
		$row->hofees = $result [0]->hofees;
		$row->custom1 = $result [0]->custom1;
		$row->custom2 = $result [0]->custom2;
		$row->custom3 = $result [0]->custom3;
		$row->custom4 = $result [0]->custom4;
		$row->custom5 = $result [0]->custom5;
		$row->pool = $result [0]->pool;
		$row->fplace = $result [0]->fplace;
		$row->bbq = $result [0]->bbq;
		$row->gazebo = $result [0]->gazebo;
		$row->lug = $result [0]->lug;
		$row->bir = $result [0]->bir;
		$row->heating = $result [0]->heating;
		$row->airco = $result [0]->airco;
		$row->shops = $result [0]->shops;
		$row->schools = $result [0]->schools;
		$row->elevator = $result [0]->elevator;
		$row->pets = $result [0]->pets;
		$row->extra1 = $result [0]->extra1;
		$row->extra2 = $result [0]->extra2;
		$row->extra3 = $result [0]->extra3;
		$row->extra4 = $result [0]->extra4;
		$row->extra5 = $result [0]->extra5;
		$row->extra6 = $result [0]->extra6;
		$row->extra7 = $result [0]->extra7;
		$row->extra8 = $result [0]->extra8;
		$row->openhouse = $result [0]->openhouse;
		$row->ohouse_desc = $result [0]->ohouse_desc;
		$row->takings = $result [0]->takings;
		$row->returns = $result [0]->returns;
		$row->netprofit = $result [0]->netprofit;
		$row->bustype = $result [0]->bustype;
		$row->bussubtype = $result [0]->bussubtype;
		$row->stock = $result [0]->stock;
		$row->fixtures = $result [0]->fixtures;
		$row->fittings = $result [0]->fittings;
		$row->squarefeet = $result [0]->squarefeet;
		$row->percentoffice = $result [0]->percentoffice;
		$row->percentwarehouse = $result [0]->percentwarehouse;
		$row->loadingfac = $result [0]->loadingfac;
		$row->fencing = $result [0]->fencing;
		$row->rainfall = $result [0]->rainfall;
		$row->soiltype = $result [0]->soiltype;
		$row->grazing = $result [0]->grazing;
		$row->cropping = $result [0]->cropping;
		$row->irrigation = $result [0]->irrigation;
		$row->waterresources = $result [0]->waterresources;
		$row->carryingcap = $result [0]->carryingcap;
		$row->storage = $result [0]->storage;
		$row->services = $result [0]->services;
		$row->listdate = $result [0]->listdate;
		$row->lastupdate = $result [0]->lastupdate;
		$row->expdate = $result [0]->expdate;
		$row->hits = "0";
		$row->sold = $result [0]->sold;
		$row->published = "0";
		$row->checked_out = $result [0]->checked_out;
		$row->checked_out_time = $result [0]->checked_out_time;
		$row->editor = $result [0]->editor;
		$row->owner = $result [0]->owner;
		$row->premium = $result [0]->premium;
		$row->featured = $result [0]->featured;
		$row->metadesc = $result [0]->metadesc;
		$row->metakey = $result [0]->metakey;
		if (! $row->check ()) {
			echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
			exit ();
		}
		if ($row->store ()) {

			echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
			exit ();
		}
	}
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=show" );
}
function resethits($id, $option) {
	global $database;
	global $my;
	$database->setquery ( "select hits from #__ezrealty where id=" . $id );
	$ddoIt = $database->loadresult ();
	if ($id) {
		$row = new mosezrealty ( $database );
		$row->load ( $id );
		$database->setquery ( "UPDATE #__ezrealty SET hits=0 WHERE id=" . $id );
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( "index2.php?option=com_ezrealty&amp;task=show", _EZREALTY_RESET_MSG );
	}
}
function resetdate($id, $option) {
	global $database;
	global $mainframe;
	global $my;
	global $er_expfig;
	$database->setquery ( "select * from #__ezrealty where id=" . $id );
	$ddoIt = $database->loadresult ();
	if ($id) {
		$row = new mosezrealty ( $database );
		$row->load ( $id );
		$mt_reset = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ) + $er_expfig, date ( "Y" ) );
		$database->setquery ( "UPDATE #__ezrealty SET expdate=" . $mt_reset . " WHERE id={$id}" );
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( "index2.php?option=com_ezrealty&amp;task=show", _EZREALTY_EXPDATE_RESET );
	}
}
function cleandb($option) {
	global $database;
	global $mainframe;
	global $er_impnum;
	global $er_expmgmt;
	global $er_expsys;
	global $er_expgrace;
	if ($er_expmgmt == 1) {
		if ($er_expsys == 0) {
			$database->setquery ( "DELETE FROM #__ezrealty WHERE hits>=" . $er_impnum );
		} else {
			$dTime = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ) + $er_expgrace, date ( "Y" ) );
			$database->setquery ( "DELETE FROM #__ezrealty WHERE expdate < " . $dTime );
		}
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( "index2.php?option=com_ezrealty", _EZREALTY_CLEANDB_SUCCESS );
	} else {
		mosredirect ( "index2.php?option=com_ezrealty", _EZREALTY_CLEANDB_FAIL );
	}
}
function sendalertmail() {
	global $database;
	global $mainframe;
	global $mosConfig_live_site;
	global $er_impnum;
	global $er_expmgmt;
	global $er_expsys;
	global $er_expgrace;
	global $er_bizemail;
	global $er_bizname;
	$arr = array ( );
	$mt_sendalert = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ), date ( "Y" ) );
	if ($er_expmgmt == 1 && $er_expsys == 1) {
		$sqlx = "SELECT a.*, s.dealer_email AS smail FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_profile as s ON s.mid=a.owner" . ("\n WHERE a.expdate <= " . $mt_sendalert);
		$database->setquery ( $sqlx );
		$arr = $database->loadobjectlist ();
		$sqlx = "SELECT * from #__menu\n WHERE link = 'index.php?option=com_ezrealty'";
		$database->setquery ( $sqlx );
		$id = $database->loadresult ();
		$vId = $id;
		$val = stripslashes ( $er_bizname ) . " " . _EZREALTY_EXPIRY_WARNING;
		$mVal = _EZREALTY_EXPIRY_MESSAGE . "\r \n";
		$mVal .= $mosConfig_live_site . ("/index.php?option=com_ezrealty&Itemid=" . $vId . " \r \n ") . _EZREALTY_EXPIRY_MESSAGE2 . "\r \n";
		$mmVal = "From: " . $er_bizname . "\r\n";
		$mmVal .= "Reply-To: " . $er_bizemail . "\r\n";
		$mmVal .= "X-Priority: 1\r\n";
		$mmVal .= "X-MSMail-Priority: High\r\n";
		$mmVal .= "X-Mailer: EZ Realty\r\n";
		foreach ( $arr as $row ) {
			mosmail ( $er_bizemail, $er_bizname, $row->smail, $val, $mVal, 0 );
		}
		$msg = _EZREALTY_ALERTMSG_PT1 . " " . count ( $arr ) . " " . _EZREALTY_ALERTMSG_PT2;
		mosredirect ( "index2.php?option=com_ezrealty", $msg );
	} else {
		mosredirect ( "index2.php?option=com_ezrealty", _EZREALTY_NOALERT_SENT );
	}
}
function deleteimage1($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $er_imagedirectory;
	$database->setquery ( "select image1 from #__ezrealty where id=" . $id );
	$ddoIt = $database->loadresult ();
	if ($id) {
		$row = new mosezrealty ( $database );
		$row->load ( $id );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image1 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image1 );
		$database->setquery ( "UPDATE #__ezrealty SET image1='' WHERE id=" . $id );
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( "index2.php?option=com_ezrealty&task=editA&hidemainmenu=1&id=" . $id, _EZREALTY_LISTING_IMGDELETED );
	}
}
function deleteimage2($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $er_imagedirectory;
	$database->setquery ( "select image2 from #__ezrealty where id=" . $id );
	$ddoIt = $database->loadresult ();
	if ($id) {
		$row = new mosezrealty ( $database );
		$row->load ( $id );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image2 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image2 );
		$database->setquery ( "UPDATE #__ezrealty SET image2='' WHERE id=" . $id );
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( "index2.php?option=com_ezrealty&task=editA&hidemainmenu=1&id=" . $id, _EZREALTY_LISTING_IMGDELETED );
	}
}
function deleteimage3($id, $option) {
	global $database, $my, $mosConfig_absolute_path, $er_imagedirectory;
	$database->setquery ( "select image3 from #__ezrealty where id=" . $id );
	$ddoIt = $database->loadresult ();
	if ($id) {
		$row = new mosezrealty ( $database );
		$row->load ( $id );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image3 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image3 );
		$database->setquery ( "UPDATE #__ezrealty SET image3='' WHERE id=" . $id );
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( "index2.php?option=com_ezrealty&task=editA&hidemainmenu=1&id=" . $id, _EZREALTY_LISTING_IMGDELETED );
	}
}
function deleteimage4($id, $option) {
	global $database, $my, $mosConfig_absolute_path, $er_imagedirectory;
	$database->setquery ( "select image4 from #__ezrealty where id=" . $id );
	$ddoIt = $database->loadresult ();
	if ($id) {
		$row = new mosezrealty ( $database );
		$row->load ( $id );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image4 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image4 );
		$database->setquery ( "UPDATE #__ezrealty SET image4='' WHERE id=" . $id );
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( "index2.php?option=com_ezrealty&task=editA&hidemainmenu=1&id=" . $id, _EZREALTY_LISTING_IMGDELETED );
	}
}
function deleteimage5($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $er_imagedirectory;
	$database->setquery ( "select image5 from #__ezrealty where id=" . $id );
	$ddoIt = $database->loadresult ();
	if ($id) {
		$row = new mosezrealty ( $database );
		$row->load ( $id );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image5 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image5 );
		$database->setquery ( "UPDATE #__ezrealty SET image5='' WHERE id=" . $id );
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( "index2.php?option=com_ezrealty&task=editA&hidemainmenu=1&id=" . $id, _EZREALTY_LISTING_IMGDELETED );
	}
}
function deleteimage6($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $er_imagedirectory;
	$database->setquery ( "select image6 from #__ezrealty where id=" . $id );
	$ddoIt = $database->loadresult ();
	if ($id) {
		$row = new mosezrealty ( $database );
		$row->load ( $id );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image6 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image6 );
		$database->setquery ( "UPDATE #__ezrealty SET image6='' WHERE id=" . $id );
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( "index2.php?option=com_ezrealty&task=editA&hidemainmenu=1&id=" . $id, _EZREALTY_LISTING_IMGDELETED );
	}
}
function deleteimage7($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $er_imagedirectory;
	$database->setquery ( "select image7 from #__ezrealty where id=" . $id );
	$ddoIt = $database->loadresult ();
	if ($id) {
		$row = new mosezrealty ( $database );
		$row->load ( $id );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image7 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image7 );
		$database->setquery ( "UPDATE #__ezrealty SET image7='' WHERE id=" . $id );
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( "index2.php?option=com_ezrealty&task=editA&hidemainmenu=1&id=" . $id, _EZREALTY_LISTING_IMGDELETED );
	}
}
function deleteimage8($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $er_imagedirectory;
	$database->setquery ( "select image8 from #__ezrealty where id=" . $id );
	$ddoIt = $database->loadresult ();
	if ($id) {
		$row = new mosezrealty ( $database );
		$row->load ( $id );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image8 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image8 );
		$database->setquery ( "UPDATE #__ezrealty SET image8='' WHERE id=" . $id );
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( "index2.php?option=com_ezrealty&task=editA&hidemainmenu=1&id=" . $id, _EZREALTY_LISTING_IMGDELETED );
	}
}
function deleteimage9($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $er_imagedirectory;
	$database->setquery ( "select image9 from #__ezrealty where id=" . $id );
	$ddoIt = $database->loadresult ();
	if ($id) {
		$row = new mosezrealty ( $database );
		$row->load ( $id );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image9 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image9 );
		$database->setquery ( "UPDATE #__ezrealty SET image9='' WHERE id=" . $id );
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( "index2.php?option=com_ezrealty&task=editA&hidemainmenu=1&id=" . $id, _EZREALTY_LISTING_IMGDELETED );
	}
}
function deleteimage10($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $er_imagedirectory;
	$database->setquery ( "select image10 from #__ezrealty where id=" . $id );
	$ddoIt = $database->loadresult ();
	if ($id) {
		$row = new mosezrealty ( $database );
		$row->load ( $id );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image10 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image10 );
		$database->setquery ( "UPDATE #__ezrealty SET image10='' WHERE id=" . $id );
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( "index2.php?option=com_ezrealty&task=editA&hidemainmenu=1&id=" . $id, _EZREALTY_LISTING_IMGDELETED );
	}
}
function deleteimage11($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $er_imagedirectory;
	$database->setquery ( "select image11 from #__ezrealty where id=" . $id );
	$ddoIt = $database->loadresult ();
	if ($id) {
		$row = new mosezrealty ( $database );
		$row->load ( $id );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image11 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image11 );
		$database->setquery ( "UPDATE #__ezrealty SET image11='' WHERE id=" . $id );
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( "index2.php?option=com_ezrealty&task=editA&hidemainmenu=1&id=" . $id, _EZREALTY_LISTING_IMGDELETED );
	}
}
function deleteimage12($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $er_imagedirectory;
	$database->setquery ( "select image12 from #__ezrealty where id=" . $id );
	$ddoIt = $database->loadresult ();
	if ($id) {
		$row = new mosezrealty ( $database );
		$row->load ( $id );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/" . $row->image12 );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/" . $er_imagedirectory . "/th/" . $row->image12 );
		$database->setquery ( "UPDATE #__ezrealty SET image12='' WHERE id=" . $id );
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( "index2.php?option=com_ezrealty&task=editA&hidemainmenu=1&id=" . $id, _EZREALTY_LISTING_IMGDELETED );
	}
}
function deleteprofileimage($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	$database->setquery ( "select dealer_image from #__ezrealty_profile where prid=" . $id );
	$ddoIt = $database->loadresult ();
	if ($id) {
		$row = new mosprofile ( $database );
		$row->load ( $id );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/profiles/" . $row->dealer_image );
		$database->setquery ( "UPDATE #__ezrealty_profile SET dealer_image='' WHERE prid=" . $id );
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( "index2.php?option=com_ezrealty&task=editprofA&hidemainmenu=1&id=" . $id, _EZREALTY_LISTING_IMGDELETED );
	}
}
function deletelogoimage($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	$database->setquery ( "select logo_image from #__ezrealty_profile where prid=" . $id );
	$ddoIt = $database->loadresult ();
	if ($id) {
		$row = new mosprofile ( $database );
		$row->load ( $id );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/profiles/" . $row->logo_image );
		$database->setquery ( "UPDATE #__ezrealty_profile SET logo_image='' WHERE prid=" . $id );
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( "index2.php?option=com_ezrealty&task=editprofA&hidemainmenu=1&id=" . $id, _EZREALTY_LISTING_IMGDELETED );
	}
}
function viewcatg($option) {
	global $database;
	global $mainframe;
	global $mosConfig_list_limit;
	global $mosConfig_absolute_path;
	$limit = $mainframe->getuserstatefromrequest ( "viewlistlimit", "limit", $mosConfig_list_limit );
	$limitstart = $mainframe->getuserstatefromrequest ( "viewcli" . $option . "limitstart", "limitstart", 0 );
	$database->setquery ( "SELECT count(*) FROM #__ezrealty_catg" );
	$total = $database->loadresult ();
	require_once ($mosConfig_absolute_path . "/administrator/includes/pageNavigation.php");
	$pageNav = new mospagenav ( $total, $limitstart, $limit );
	$database->setquery ( "SELECT a.*, g.name AS groupname, u.name as editor\n FROM #__ezrealty_catg AS a\n LEFT JOIN #__groups AS g ON g.id = a.access\n LEFT JOIN #__users AS u ON u.id = a.checked_out\n ORDER BY a.ordering" . ("\n LIMIT " . $pageNav->limitstart . ",{$pageNav->limit}") );
	$rows = $database->loadobjectlist ();
	html_ezrealty::showcatgs ( $rows, $pageNav, $option );
}
function editcatg($categoryid, $option) {
	global $database;
	global $my;
	$row = new moscatgs ( $database );
	$row->load ( $categoryid );
	if ($categoryid) {
		$row->checkout ( $my->id );
	}
	$orders = mosgetorderinglist ( "SELECT ordering AS value, name AS text\nFROM #__ezrealty_catg\n ORDER BY ordering" );
	$orderlist = mosHTML::selectlist ( $orders, "ordering", "class=\"inputbox\" size=\"1\"", "value", "text", intval ( $row->ordering ) );
	$database->setquery ( "SELECT id AS value, name AS text FROM #__groups ORDER BY id" );
	$groups = $database->loadobjectlist ();
	$glist = mosHTML::selectlist ( $groups, "access", "class=\"inputbox\" size=\"1\"", "value", "text", intval ( $row->access ) );
	$javascript = "onchange=\"changeDisplayImage();\"";
	$directory = "/images/stories";
	$lists ['image'] = mosadminmenus::images ( "image", $row->image, $javascript, $directory );
	html_ezrealty::editcatg ( $row, $option, $glist, $orderlist, $lists );
}
function savecatg($option) {
	global $database;
	$row = new moscatgs ( $database );
	$msg = _EZREALTY_CATEGORY_SAVED;
	if (! $row->bind ( $_POST )) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->cid = intval ( $row->cid );
	if (! $row->check ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	if (! $row->store ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->checkin ();
	$row->updateorder ( "" );
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=showcatg", $msg );
}
function cancelcatg($option) {
	global $database;
	$row = new moscatgs ( $database );
	$row->bind ( $_POST );
	$row->checkin ();
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=showcatg" );
}
function publishcatg($cid = null, $publish = 1, $option) {
	global $database;
	global $my;
	$catid = mosgetparam ( $_POST, "catid", array (0 ) );
	if (! is_array ( $cid ) && count ( $cid ) < 1) {
		$action = $publish ? "publishcatg" : "unpublishcatg";
		echo "<script> alert(_EZREALTY_GENERAL_ERROR1 '" . $action . "'); window.history.go(-1);</script>\n";
		exit ();
	}
	$cids = implode ( ",", $cid );
	$sqlx = "UPDATE #__ezrealty_catg\n SET published = " . intval ( $publish ) . ("\n WHERE cid IN ( " . $cids . " )") . ("\n AND ( checked_out = 0 OR ( checked_out = " . $my->id . " ) )");
	$database->setquery ( $sqlx );
	if (! $database->query ()) {
		echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	if (count ( $cid ) == 1) {
		$row = new moscatgs ( $database );
		$row->checkin ( $cid [0] );
	}
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=showcatg" );
}
function removecatg($cid, $option) {
	global $database;
	$msg = "";
	$t = 0;
	$nC = count ( $cid );
	for(; $t < $nC; ++ $t) {
		$sqlx = "SELECT COUNT( id )\n FROM #__ezrealty\n WHERE cid = " . $cid [$t];
		$database->setquery ( $sqlx );
		if (($count = $database->loadresult ()) == null) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		if ($count != 0) {
			mosredirect ( "index2.php?option=com_ezrealty&amp;task=showcatg", _EZREALTY_NOREMOVE );
		} else {
			$catg = new moscatgs ( $database );
			if (! $catg->delete ( $cid [$t] )) {
				$msg .= $catg->geterror ();
			}
		}
	}
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=showcatg" );
}
function ordercatg($uid, $inc, $option) {
	global $database;
	$fp = new moscatgs ( $database );
	$fp->load ( $uid );
	$fp->move ( $inc );
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=showcatg" );
}
function showlocalities($option) {
	global $database;
	global $mainframe;
	global $mosConfig_list_limit;
	global $mosConfig_absolute_path;
	$filter_state2 = $mainframe->getuserstatefromrequest ( "filter_state2" . $option, "filter_state2", 0 );
	$order = $mainframe->getuserstatefromrequest ( "zorder", "zorder", "a.id DESC" );
	$limit = $mainframe->getuserstatefromrequest ( "viewlistlimit", "limit", $mosConfig_list_limit );
	$limitstart = $mainframe->getuserstatefromrequest ( "viewcli" . $option . "limitstart", "limitstart", 0 );
	$where = array ( );
	if ($filter_state2) {
		$where [] = "a.stateid = '" . $filter_state2 . "'";
	}
	$orderAllowed = array ("a.ezcity ASC", "a.ezcity DESC", "a.published ASC", "a.published DESC" );
	if (! in_array ( $order, $orderAllowed )) {
		$order = "a.locid DESC";
	}
	$query = "SELECT COUNT(*) FROM #__ezrealty_locality AS a " . (count ( $where ) ? "\n WHERE " . implode ( " AND ", $where ) : "");
	$database->setquery ( $query );
	$total = $database->loadresult ();
	require_once ($mosConfig_absolute_path . "/administrator/includes/pageNavigation.php");
	$pageNav = new mospagenav ( $total, $limitstart, $limit );
	$query = "SELECT a.*, c.name as statename, u.name AS editor\n FROM #__ezrealty_locality AS a\n LEFT JOIN #__ezrealty_state as c ON c.stid=a.stateid\n LEFT JOIN #__users AS u ON u.id = a.checked_out" . (count ( $where ) ? "\n WHERE " . implode ( " AND ", $where ) : "") . "\n ORDER BY " . $order . ("\n LIMIT " . $pageNav->limitstart . ", {$pageNav->limit}");
	$database->setquery ( $query );
	$rows = $database->loadobjectlist ();
	if ($database->geterrornum ()) {
		echo $database->stderr ();
		return false;
	}
	$ordering [] = mosHTML::makeOption ( "a.ezcity ASC", _EZREALTY_ORDER_LIST21 );
	$ordering [] = mosHTML::makeOption ( "a.ezcity DESC", _EZREALTY_ORDER_LIST22 );
	$ordering [] = mosHTML::makeOption ( "a.published ASC", _EZREALTY_ORDER_LIST9 );
	$ordering [] = mosHTML::makeOption ( "a.published DESC", _EZREALTY_ORDER_LIST10 );
	$javascript = "onchange=\"document.adminForm.submit();\"";
	$lists ['order'] = mosHTML::selectlist ( $ordering, "zorder", "class=\"inputbox\" size=\"1\"" . $javascript, "value", "text", $order );
	$query = "SELECT c.stid AS value, c.name AS text\n FROM #__ezrealty_state as c\n LEFT JOIN #__ezrealty_locality AS a ON a.stateid = c.stid\n GROUP BY c.stid\n ORDER BY c.name";
	$states [] = mosHTML::makeOption ( "0", _EZREALTY_SORT_ALLSTATES );
	$database->setquery ( $query );
	$states = array_merge ( $states, $database->loadobjectlist () );
	$lists ['statelist'] = mosHTML::selectlist ( $states, "filter_state2", "class=\"inputbox\" size=\"1\" onchange=\"document.adminForm.submit( );\"", "value", "text", "{$filter_state2}" );
	html_ezrealty::showlocalities ( $option, $rows, $pageNav, $lists );
}
function editlocalities($localityid, $option) {
	global $database;
	global $my;
	$row = new moslocality ( $database );
	$row->load ( $localityid );
	if ($localityid) {
		$row->checkout ( $my->id );
	}
	$sql = "SELECT a.stid as value, a.name as text FROM #__ezrealty_state AS a WHERE a.published=1 ORDER by a.name";
	$database->setquery ( $sql );
	if (! $database->query ()) {
		echo $database->stderr ();
	} else {
		$listlistlist [] = mosHTML::makeOption ( "0", "Select State" );
		$listlistlist = array_merge ( $listlistlist, $database->loadobjectlist () );
		$lists ['stateid'] = mosHTML::selectlist ( $listlistlist, "stateid", "class=\"inputbox\" size=\"1\"", "value", "text", $row->stateid );
		html_ezrealty::editlocalities ( $row, $option, $lists );
	}
}
function savelocality($option) {
	global $database;
	global $my;
	$row = new moslocality ( $database );
	$msg = _EZREALTY_MODLOC_SAVED;
	if (! $row->bind ( $_POST )) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->locid = intval ( $row->locid );
	if (! $row->check ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->ezcity = str_replace ( "'", "", $row->ezcity );
	if (! $row->store ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->checkin ();
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=localities", $msg );
}
function cancelloc($option) {
	global $database;
	$row = new moslocality ( $database );
	$row->bind ( $_POST );
	$row->checkin ();
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=localities" );
}
function publishlocality($cid = null, $publish = 1, $option) {
	global $database;
	global $my;
	$catid = mosgetparam ( $_POST, "catid", array (0 ) );
	if (! is_array ( $cid ) && count ( $cid ) < 1) {
		$action = $publish ? "publishloc" : "unpublishloc";
		echo "<script> alert(_EZREALTY_GENERAL_ERROR1 '" . $action . "'); window.history.go(-1);</script>\n";
		exit ();
	}
	$cids = implode ( ",", $cid );
	$sqlx = "UPDATE #__ezrealty_locality\n SET published = " . intval ( $publish ) . ("\n WHERE locid IN ( " . $cids . " )") . ("\n AND ( checked_out = 0 OR ( checked_out = " . $my->id . " ) )");
	$database->setquery ( $sqlx );
	if (! $database->query ()) {
		echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	if (count ( $cid ) == 1) {
		$row = new moslocality ( $database );
		$row->checkin ( $cid [0] );
	}
	mosredirect ( "index2.php?option=" . $option . "&amp;task=localities" );
}
function removelocality($cid, $option) {
	global $database;
	$msg = "";

	$nC = count ( $cid );
	for($t = 0; $t < $nC; ++ $t) {
		$loks = new moslocality ( $database );
		if (! $loks->delete ( $cid [$t] )) {
			$msg .= $loks->geterror ();
		}
	}
	mosredirect ( "index2.php?option=" . $option . "&amp;task=localities" );
}
function showstates($option) {
	global $database;
	global $mainframe;
	global $mosConfig_list_limit;
	global $mosConfig_absolute_path;
	$limit = $mainframe->getuserstatefromrequest ( "viewlistlimit", "limit", $mosConfig_list_limit );
	$limitstart = $mainframe->getuserstatefromrequest ( "viewcli" . $option . "limitstart", "limitstart", 0 );
	$database->setquery ( "SELECT count(*) FROM #__ezrealty_state" );
	$total = $database->loadresult ();
	require_once ($mosConfig_absolute_path . "/administrator/includes/pageNavigation.php");
	$pageNav = new mospagenav ( $total, $limitstart, $limit );
	$query = "SELECT b.*, u.name as editor FROM #__ezrealty_state as b \n LEFT JOIN #__users AS u ON u.id = b.checked_out\n ORDER BY b.name" . ("\n LIMIT " . $pageNav->limitstart . ",{$pageNav->limit}");
	$database->setquery ( $query );
	if (! ($result = $database->query ())) {
		echo $database->stderr ();
	} else {
		$rows = $database->loadobjectlist ();
		html_ezrealty::showstates ( $option, $rows, $pageNav );
	}
}
function editstates($stateid, $option) {
	global $database;
	global $my;
	$row = new mosstate ( $database );
	$row->load ( $stateid );
	if ($stateid) {
		$row->checkout ( $my->id );
	}
	html_ezrealty::editstates ( $row, $option );
}
function savestate($option) {
	global $database;
	$row = new mosstate ( $database );
	$msg = _EZREALTY_STATE_SAVED;
	if (! $row->bind ( $_POST )) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->stid = intval ( $row->stid );
	if (! $row->check ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	if (! $row->store ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->checkin ();
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=states", $msg );
}
function cancelstate($option) {
	global $database;
	$row = new mosstate ( $database );
	$row->bind ( $_POST );
	$row->checkin ();
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=states" );
}
function publishstate($yelz = null, $publish = 1) {
	global $database;
	global $my;
	if (! is_array ( $yelz ) && count ( $yelz ) < 1) {
		$action = $publish ? "publish" : "unpublish";
		echo "<script> alert(_EZREALTY_GENERAL_ERROR1 '" . $action . "'); window.history.go(-1);</script>\n";
		exit ();
	}
	$stids = implode ( ",", $yelz );
	$database->setquery ( "UPDATE #__ezrealty_state SET published='" . $publish . "'" . ("\nWHERE stid IN (" . $stids . ") AND (checked_out=0 OR (checked_out='{$my->id}'))") );
	if (! $database->query ()) {
		echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	if (count ( $yelz ) == 1) {
		$row = new mosstate ( $database );
		$row->checkin ( $yelz [0] );
	}
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=states" );
}
function removestate($cid, $option) {
	global $database;
	$msg = "";
	$t = 0;
	$nC = count ( $cid );
	for(; $t < $nC; ++ $t) {
		$sqlx = "SELECT COUNT( id )\n FROM #__ezrealty\n WHERE stid = " . $cid [$t];
		$database->setquery ( $sqlx );
		if (($count = $database->loadresult ()) == null) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		if ($count != 0) {
			mosredirect ( "index2.php?option=com_ezrealty&amp;task=states", _EZREALTY_NOREMOVE );
		} else {
			$catg = new mosstate ( $database );
			if (! $catg->delete ( $cid [$t] )) {
				$msg .= $catg->geterror ();
			}
		}
	}
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=states" );
}
function showcountrys($option) {
	global $database;
	global $mainframe;
	global $mosConfig_list_limit;
	global $mosConfig_absolute_path;
	$limit = $mainframe->getuserstatefromrequest ( "viewlistlimit", "limit", $mosConfig_list_limit );
	$limitstart = $mainframe->getuserstatefromrequest ( "viewcli" . $option . "limitstart", "limitstart", 0 );
	$database->setquery ( "SELECT count(*) FROM #__ezrealty_country" );
	$total = $database->loadresult ();
	require_once ($mosConfig_absolute_path . "/administrator/includes/pageNavigation.php");
	$pageNav = new mospagenav ( $total, $limitstart, $limit );
	$query = "SELECT b.*, u.name as editor FROM #__ezrealty_country as b \n LEFT JOIN #__users AS u ON u.id = b.checked_out\n ORDER BY b.name" . ("\nLIMIT " . $pageNav->limitstart . ",{$pageNav->limit}");
	$database->setquery ( $query );
	if (! ($result = $database->query ())) {
		echo $database->stderr ();
	} else {
		$rows = $database->loadobjectlist ();
		html_ezrealty::showcountrys ( $option, $rows, $pageNav );
	}
}
function editcountrys($countryid, $option) {
	global $database;
	global $my;
	$row = new moscountry ( $database );
	$row->load ( $countryid );
	if ($countryid) {
		$row->checkout ( $my->id );
	}
	html_ezrealty::editcountrys ( $row, $option );
}
function savecountry($option) {
	global $database;
	$row = new moscountry ( $database );
	$msg = _EZREALTY_COUNTRY_SAVED;
	if (! $row->bind ( $_POST )) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->cnid = intval ( $row->cnid );
	if (! $row->check ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	if (! $row->store ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->checkin ();
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=countrys", $msg );
}
function cancelcountry($option) {
	global $database;
	$row = new moscountry ( $database );
	$row->bind ( $_POST );
	$row->checkin ();
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=countrys" );
}
function publishcountry($cid = null, $publish = 1, $option) {
	global $database;
	global $my;
	$catid = mosgetparam ( $_POST, "catid", array (0 ) );
	if (! is_array ( $cid ) && count ( $cid ) < 1) {
		$action = $publish ? "publishcountry" : "unpublishcountry";
		echo "<script> alert(_EZREALTY_GENERAL_ERROR1 '" . $action . "'); window.history.go(-1);</script>\n";
		exit ();
	}
	$cids = implode ( ",", $cid );
	$sqlx = "UPDATE #__ezrealty_country\n SET published = " . intval ( $publish ) . ("\n WHERE cnid IN ( " . $cids . " )") . ("\n AND ( checked_out = 0 OR ( checked_out = " . $my->id . " ) )");
	$database->setquery ( $sqlx );
	if (! $database->query ()) {
		echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	if (count ( $cid ) == 1) {
		$row = new moscountry ( $database );
		$row->checkin ( $cid [0] );
	}
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=countrys" );
}
function removecountry($cid, $option) {
	global $database;
	$msg = "";
	$t = 0;
	$nC = count ( $cid );
	for(; $t < $nC; ++ $t) {
		$sqlx = "SELECT COUNT( id )\n FROM #__ezrealty\n WHERE cnid = " . $cid [$t];
		$database->setquery ( $sqlx );
		if (($count = $database->loadresult ()) == null) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		if ($count != 0) {
			mosredirect ( "index2.php?option=com_ezrealty&amp;task=countrys", _EZREALTY_NOREMOVE );
		} else {
			$catg = new moscountry ( $database );
			if (! $catg->delete ( $cid [$t] )) {
				$msg .= $catg->geterror ();
			}
		}
	}
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=countrys" );
}
function showprices($option) {
	global $database;
	global $mainframe;
	global $mosConfig_list_limit;
	global $mosConfig_absolute_path;
	$limit = $mainframe->getuserstatefromrequest ( "viewlistlimit", "limit", $mosConfig_list_limit );
	$limitstart = $mainframe->getuserstatefromrequest ( "viewcli" . $option . "limitstart", "limitstart", 0 );
	$database->setquery ( "SELECT count(*) FROM #__ezrealty_price" );
	$total = $database->loadresult ();
	require_once ($mosConfig_absolute_path . "/administrator/includes/pageNavigation.php");
	$pageNav = new mospagenav ( $total, $limitstart, $limit );
	$query = "SELECT b.*, u.name as editor FROM #__ezrealty_price as b \n LEFT JOIN #__users AS u ON u.id = b.checked_out\nORDER BY b.ordering" . ("\nLIMIT " . $pageNav->limitstart . ",{$pageNav->limit}");
	$database->setquery ( $query );
	if (! ($result = $database->query ())) {
		echo $database->stderr ();
	} else {
		$rows = $database->loadobjectlist ();
		html_ezrealty::showprices ( $option, $rows, $pageNav );
	}
}
function editprices($priceid, $option) {
	global $database;
	global $my;
	$row = new mosprice ( $database );
	$row->load ( ( integer ) $priceid );
	if ($priceid) {
		$row->checkout ( $my->id );
	}
	$orders = mosgetorderinglist ( "SELECT a.ordering AS value, a.range AS text\nFROM #__ezrealty_price AS a\n ORDER BY a.ordering" );
	$orderlist = mosHTML::selectlist ( $orders, "ordering", "class=\"inputbox\" size=\"1\"", "value", "text", intval ( $row->ordering ) );
	html_ezrealty::editprices ( $row, $option, $orderlist );
}
function saveprice($option) {
	global $database;
	$row = new mosprice ( $database );
	$msg = _EZREALTY_MODPRICES_SAVED;
	if (! $row->bind ( $_POST )) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->pid = intval ( $row->pid );
	if (! $row->check ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	mosmakehtmlsafe ( $row );
	if (! $row->store ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->checkin ();
	$row->updateorder ( "" );
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=prices", $msg );
}
function cancelprc($option) {
	global $database;
	$row = new mosprice ( $database );
	$row->bind ( $_POST );
	$row->checkin ();
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=prices" );
}
function publishprc($cid = null, $publish = 1, $option) {
	global $database;
	global $my;
	$catid = mosgetparam ( $_POST, "catid", array (0 ) );
	if (! is_array ( $cid ) && count ( $cid ) < 1) {
		$action = $publish ? "publishprc" : "unpublishprc";
		echo "<script> alert(_EZREALTY_GENERAL_ERROR1 '" . $action . "'); window.history.go(-1);</script>\n";
		exit ();
	}
	$cids = implode ( ",", $cid );
	$sqlx = "UPDATE #__ezrealty_price\n SET published = " . intval ( $publish ) . ("\n WHERE pid IN ( " . $cids . " )") . ("\n AND ( checked_out = 0 OR ( checked_out = " . $my->id . " ) )");
	$database->setquery ( $sqlx );
	if (! $database->query ()) {
		echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	if (count ( $cid ) == 1) {
		$row = new mosprice ( $database );
		$row->checkin ( $cid [0] );
	}
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=prices" );
}
function removeprice($cid, $option) {
	global $database;
	$msg = "";
	$t = 0;
	$nC = count ( $cid );
	for(; $t < $nC; ++ $t) {
		$catg = new mosprice ( $database );
		if (! $catg->delete ( $cid [$t] )) {
			$msg .= $catg->geterror ();
		}
	}
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=prices" );
}
function orderprc($uid, $inc, $option) {
	global $database;
	$fp = new mosprice ( $database );
	$fp->load ( $uid );
	$fp->move ( $inc );
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=prices" );
}
function showrooms($option) {
	global $database;
	global $mainframe;
	global $mosConfig_list_limit;
	global $mosConfig_absolute_path;
	$limit = $mainframe->getuserstatefromrequest ( "viewlistlimit", "limit", $mosConfig_list_limit );
	$limitstart = $mainframe->getuserstatefromrequest ( "viewcli" . $option . "limitstart", "limitstart", 0 );
	$database->setquery ( "SELECT count(*) FROM #__ezrealty_room" );
	$total = $database->loadresult ();
	require_once ($mosConfig_absolute_path . "/administrator/includes/pageNavigation.php");
	$pageNav = new mospagenav ( $total, $limitstart, $limit );
	$query = "SELECT b.*, u.name as editor FROM #__ezrealty_room as b \n LEFT JOIN #__users AS u ON u.id = b.checked_out\n ORDER BY b.ordering" . ("\n LIMIT " . $pageNav->limitstart . ",{$pageNav->limit}");
	$database->setquery ( $query );
	if (! ($result = $database->query ())) {
		echo $database->stderr ();
	} else {
		$rows = $database->loadobjectlist ();
		html_ezrealty::showrooms ( $option, $rows, $pageNav );
	}
}
function editrooms($roomid, $option) {
	global $database;
	global $my;
	$row = new mosroom ( $database );
	$row->load ( $roomid );
	if ($roomid) {
		$row->checkout ( $my->id );
	}
	$orders = mosgetorderinglist ( "SELECT b.ordering AS value, b.number AS text\n FROM #__ezrealty_room AS b\n ORDER BY b.ordering" );
	$orderlist = mosHTML::selectlist ( $orders, "ordering", "class=\"inputbox\" size=\"1\"", "value", "text", intval ( $row->ordering ) );
	html_ezrealty::editrooms ( $row, $option, $orderlist );
}
function saveroom($option) {
	global $database;
	$row = new mosroom ( $database );
	$msg = _EZREALTY_ROOMS_SAVED;
	if (! $row->bind ( $_POST )) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->bid = intval ( $row->bid );
	if (! $row->check ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	mosmakehtmlsafe ( $row );
	if (! $row->store ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->checkin ();
	$row->updateorder ( "" );
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=rooms", $msg );
}
function cancelroom($option) {
	global $database;
	$row = new mosroom ( $database );
	$row->bind ( $_POST );
	$row->checkin ();
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=rooms" );
}
function publishroom($cid = null, $publish = 1, $option) {
	global $database;
	global $my;
	$catid = mosgetparam ( $_POST, "catid", array (0 ) );
	if (! is_array ( $cid ) && count ( $cid ) < 1) {
		$action = $publish ? "publishroom" : "unpublishroom";
		echo "<script> alert(_EZREALTY_GENERAL_ERROR1 '" . $action . "'); window.history.go(-1);</script>\n";
		exit ();
	}
	$cids = implode ( ",", $cid );
	$sqlx = "UPDATE #__ezrealty_room\n SET published = " . intval ( $publish ) . ("\n WHERE bid IN ( " . $cids . " )") . ("\n AND ( checked_out = 0 OR ( checked_out = " . $my->id . " ) )");
	$database->setquery ( $sqlx );
	if (! $database->query ()) {
		echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	if (count ( $cid ) == 1) {
		$row = new mosroom ( $database );
		$row->checkin ( $cid [0] );
	}
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=rooms" );
}
function removeroom($cid, $option) {
	global $database;
	$msg = "";
	$t = 0;
	$nC = count ( $cid );
	for(; $t < $nC; ++ $t) {
		$catg = new mosroom ( $database );
		if (! $catg->delete ( $cid [$t] )) {
			$msg .= $catg->geterror ();
		}
	}
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=rooms" );
}
function orderroom($uid, $inc, $option) {
	global $database;
	$fp = new mosroom ( $database );
	$fp->load ( $uid );
	$fp->move ( $inc );
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=rooms" );
}
function showleads($option) {
	global $database;
	global $mainframe;
	global $mosConfig_list_limit;
	global $mosConfig_absolute_path;
	$filter_locality = $mainframe->getuserstatefromrequest ( "filter_locality" . $option, "filter_locality", 0 );
	$filter_category = $mainframe->getuserstatefromrequest ( "filter_category" . $option, "filter_category", 0 );
	$limit = $mainframe->getuserstatefromrequest ( "viewlistlimit", "limit", $mosConfig_list_limit );
	$limitstart = $mainframe->getuserstatefromrequest ( "viewcli" . $option . "limitstart", "limitstart", 0 );
	$where = array ( );
	if ($filter_locality) {
		$where [] = "a.locid = '" . $filter_locality . "'";
	}
	if ($filter_category) {
		$where [] = "a.cid = '" . $filter_category . "'";
	}
	$query = "SELECT COUNT(*) FROM #__ezrealty_leads AS a " . (count ( $where ) ? "\n WHERE " . implode ( " AND ", $where ) : "");
	$database->setquery ( $query );
	$total = $database->loadresult ();
	require_once ($mosConfig_absolute_path . "/administrator/includes/pageNavigation.php");
	$pageNav = new mospagenav ( $total, $limitstart, $limit );
	$query = "SELECT a.*, dd.ezcity AS proploc, u.name as editor FROM #__ezrealty_leads as a \n LEFT JOIN #__ezrealty_locality AS dd ON dd.locid = a.locid\n LEFT JOIN #__users AS u ON u.id = a.checked_out" . (count ( $where ) ? "\n WHERE " . implode ( " AND ", $where ) : "") . "\n ORDER BY a.lid DESC" . ("\n LIMIT " . $pageNav->limitstart . ", {$pageNav->limit}");
	$database->setquery ( $query );
	$rows = $database->loadobjectlist ();
	if ($database->geterrornum ()) {
		echo $database->stderr ();
		return false;
	}
	$query = "SELECT dd.locid AS value, dd.ezcity AS text\n FROM #__ezrealty_locality as dd\n LEFT JOIN #__ezrealty_leads AS a ON a.locid = dd.locid WHERE dd.published = 1 AND dd.locid != ''\n GROUP BY dd.locid\n ORDER BY dd.ezcity";
	$database->setquery ( $query );
	$rlocalitys = $database->loadobjectlist ();
	$localitys [] = mosHTML::makeOption ( "0", _EZREALTY_LISTINGS_SORTLOCALL );
	if ($rlocalitys) {
		$localitys = array_merge ( $localitys, $database->loadobjectlist () );
	}
	$lists ['locid'] = mosHTML::selectlist ( $localitys, "filter_locality", "class=\"dropbox\" size=\"1\" onchange=\"document.adminForm.submit( );\"", "value", "text", "{$filter_locality}" );
	$query = "SELECT cc.cid AS value, cc.name AS text\n FROM #__ezrealty_catg as cc\n LEFT JOIN #__ezrealty_leads AS a ON a.cid = cc.cid WHERE cc.published = 1\n GROUP BY cc.cid\n ORDER BY cc.ordering";
	$database->setquery ( $query );
	$rcategorys = $database->loadobjectlist ();
	$categorys [] = mosHTML::makeOption ( "0", _EZREALTY_LISTINGS_SORTTYPEALL );
	if ($rcategorys) {
		$categorys = array_merge ( $categorys, $database->loadobjectlist () );
	}
	$lists ['cid'] = mosHTML::selectlist ( $categorys, "filter_category", "class=\"dropbox\" size=\"1\" onchange=\"document.adminForm.submit( );\"", "value", "text", "{$filter_category}" );
	html_ezrealty::showleads ( $option, $rows, $lists, $pageNav );
}
function editleads($leadid, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $mosConfig_live_site;
	global $er_usetype1;
	global $er_usetype2;
	global $er_usetype3;
	global $er_usetype4;
	global $er_usetype5;
	global $er_usetype6;
	$row = new mosleads ( $database );
	$row->load ( $leadid );
	if ($leadid) {
		$row->checkout ( $my->id );
	}
	$typeit [] = mosHTML::makeOption ( 0, _EZREALTY_LISTING_SELECTTYPE );
	if ($er_usetype1) {
		$typeit [] = mosHTML::makeOption ( 1, _EZREALTY_TYPE_SALE );
	}
	if ($er_usetype2) {
		$typeit [] = mosHTML::makeOption ( 2, _EZREALTY_TYPE_RENTAL );
	}
	if ($er_usetype3) {
		$typeit [] = mosHTML::makeOption ( 3, _EZREALTY_TYPE_LEASE );
	}
	if ($er_usetype4) {
		$typeit [] = mosHTML::makeOption ( 4, _EZREALTY_TYPE_AUCTION );
	}
	if ($er_usetype5) {
		$typeit [] = mosHTML::makeOption ( 5, _EZREALTY_TYPE_SWAP );
	}
	if ($er_usetype6) {
		$typeit [] = mosHTML::makeOption ( 6, _EZREALTY_TYPE_TENDER );
	}
	$lists ['type'] = mosHTML::selectlist ( $typeit, "type", "class=\"inputbox\" size=\"1\"", "value", "text", $row->type );
	$sourceit [] = mosHTML::makeOption ( _EZREALTY_DETAILS_SOURCE5, _EZREALTY_DETAILS_SOURCE5 );
	$sourceit [] = mosHTML::makeOption ( _EZREALTY_DETAILS_SOURCE2, _EZREALTY_DETAILS_SOURCE2 );
	$sourceit [] = mosHTML::makeOption ( _EZREALTY_DETAILS_SOURCE3, _EZREALTY_DETAILS_SOURCE3 );
	$sourceit [] = mosHTML::makeOption ( _EZREALTY_DETAILS_SOURCE4, _EZREALTY_DETAILS_SOURCE4 );
	$sourceit [] = mosHTML::makeOption ( _EZREALTY_DETAILS_SOURCE1, _EZREALTY_DETAILS_SOURCE1 );
	$lists ['source'] = mosHTML::selectlist ( $sourceit, "source", "class=\"inputbox\" size=\"1\"", "value", "text", $row->source );
	$sql = "SELECT a.locid as value, a.ezcity as text FROM #__ezrealty_locality AS a WHERE a.published = 1 ORDER by a.ezcity";
	$database->setquery ( $sql );
	$lbj = $database->loadobjectlist ();
	if (! $database->query ()) {
		echo $database->stderr ();
	} else {
		$localitylist [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELLOC );
		if ($lbj) {
			$localitylist = array_merge ( $localitylist, $database->loadobjectlist () );
		}
		$lists ['locid'] = mosHTML::selectlist ( $localitylist, "locid", "class=\"inputbox\" size=\"1\"", "value", "text", $row->locid );
		$sql = "SELECT b.stid as value, b.name as text FROM #__ezrealty_state AS b WHERE b.published = 1 ORDER by b.name";
		$database->setquery ( $sql );
		$lbj2 = $database->loadobjectlist ();
		if (! $database->query ()) {
			echo $database->stderr ();
		} else {
			$statelist [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELSTATE );
			if ($lbj2) {
				$statelist = array_merge ( $statelist, $database->loadobjectlist () );
			}
			$lists ['stid'] = mosHTML::selectlist ( $statelist, "stid", "class=\"inputbox\" size=\"1\"", "value", "text", $row->stid );
			$sql = "SELECT c.cnid as value, c.name as text FROM #__ezrealty_country AS c WHERE c.published = 1 ORDER by c.name";
			$database->setquery ( $sql );
			$lbj3 = $database->loadobjectlist ();
			if (! $database->query ()) {
				echo $database->stderr ();
			} else {
				$selLoctC [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELCOUNTRY );
				if ($lbj3) {
					$selLoctC = array_merge ( $selLoctC, $database->loadobjectlist () );
				}
				$lists ['cnid'] = mosHTML::selectlist ( $selLoctC, "cnid", "class=\"inputbox\" size=\"1\"", "value", "text", $row->cnid );
				$sql = "SELECT d.cid as value, d.name as text FROM #__ezrealty_catg AS d WHERE d.published = 1 ORDER by d.ordering";
				$database->setquery ( $sql );
				$lbj4 = $database->loadobjectlist ();
				if (! $database->query ()) {
					echo $database->stderr ();
				} else {
					$selCat [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELCAT );
					if ($lbj4) {
						$selCat = array_merge ( $selCat, $database->loadobjectlist () );
					}
					$lists ['cid'] = mosHTML::selectlist ( $selCat, "cid", "class=\"inputbox\" size=\"1\"", "value", "text", $row->cid );
					$sql = "SELECT e.number as value, e.number as text FROM #__ezrealty_room AS e WHERE e.published = 1 ORDER by e.ordering";
					$database->setquery ( $sql );
					$lbj5 = $database->loadobjectlist ();
					if (! $database->query ()) {
						echo $database->stderr ();
					} else {
						$selLoctR [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELROOM );
						$selLoctR [] = mosHTML::makeOption ( "0.5", _EZREALTY_STUDIO );
						if ($lbj5) {
							$selLoctR = array_merge ( $selLoctR, $database->loadobjectlist () );
						}
						$lists ['bedrooms'] = mosHTML::selectlist ( $selLoctR, "bedrooms", "class=\"inputbox\" size=\"1\"", "value", "text", $row->bedrooms );
						$leadits [] = mosHTML::makeOption ( 0, _EZREALTY_LEADS_REVIEW );
						$leadits [] = mosHTML::makeOption ( 1, _EZREALTY_LEADS_CALL );
						$leadits [] = mosHTML::makeOption ( 2, _EZREALTY_LEADS_RECALL );
						$leadits [] = mosHTML::makeOption ( 3, _EZREALTY_LEADS_DOEMAIL );
						$leadits [] = mosHTML::makeOption ( 4, _EZREALTY_LEADS_DOINSPECTION );
						$leadits [] = mosHTML::makeOption ( 5, _EZREALTY_LEADS_NOINTEREST );
						$leadits [] = mosHTML::makeOption ( 6, _EZREALTY_LEADS_CLOSED );
						$lists ['status'] = mosHTML::selectlist ( $leadits, "status", "class=\"inputbox\" size=\"1\"", "value", "text", $row->status );
						html_ezrealty::editleads ( $row, $lists, $option );
					}
				}
			}
		}
	}
}
function saveleads($option) {
	global $database;
	global $my;
	$row = new mosleads ( $database );
	$msg = _EZREALTY_LEADS_SAVED;
	if (! $row->bind ( $_POST )) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->lid = intval ( $row->lid );
	if (! $row->check ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->date = mktime ();
	mosmakehtmlsafe ( $row );
	if (! $row->store ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->checkin ();
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=leads", $msg );
}
function publishleads($cid = null, $publish = 1, $option) {
	global $database;
	global $my;
	$catid = mosgetparam ( $_POST, "catid", array (0 ) );
	if (! is_array ( $cid ) && count ( $cid ) < 1) {
		$action = $publish ? "publishleads" : "unpublishleads";
		echo "<script> alert(_EZREALTY_GENERAL_ERROR1 '" . $action . "'); window.history.go(-1);</script>\n";
		exit ();
	}
	$cids = implode ( ",", $cid );
	$sqlx = "UPDATE #__ezrealty_leads\n SET published = " . intval ( $publish ) . ("\n WHERE lid IN ( " . $cids . " )") . ("\n AND ( checked_out = 0 OR ( checked_out = " . $my->id . " ) )");
	$database->setquery ( $sqlx );
	if (! $database->query ()) {
		echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	if (count ( $cid ) == 1) {
		$row = new mosleads ( $database );
		$row->checkin ( $cid [0] );
	}
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=leads" );
}
function cancelleads($option) {
	global $database;
	$row = new mosleads ( $database );
	$row->bind ( $_POST );
	$row->checkin ();
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=leads" );
}
function removeleads($cid, $option) {
	global $database;
	$msg = "";

	$nC = count ( $cid );
	for($t = 0;$t < $nC; ++ $t) {
		$leadr = new mosleads ( $database );
		if (! $leadr->delete ( $cid [$t] )) {
			$msg .= $leadr->geterror ();
		}
	}
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=leads" );
}
function sendsms($option) {
	$id = $_GET ['id'];
	$user = $_GET ['user'];
	$password = $_GET ['password'];
	$to = $_GET ['to'];
	$from = $_GET ['from'];
	$text = urlencode ( $_GET ['text'] );
	$api_id = $_GET ['api'];
	$baseurl = "http://api.clickatell.com";
	$lid = $id;
	$url = "{$baseurl}/http/auth?user={$user}&password={$password}&api_id={$api_id}";
	$ret = file ( $url );
	$sess = split ( ":", $ret [0] );
	if ($sess [0] == "OK") {
		$sess_id = trim ( $sess [1] );
		$url = "{$baseurl}/http/sendmsg?session_id={$sess_id}&to={$to}&text={$text}&from={$from}";
		$ret = file ( $url );
		$send = split ( ":", $ret [0] );
		if ($send [0] == "ID") {
			echo _EZREALTY_SELLER_SMS11 . "<br> " . _EZREALTY_SELLER_SMS12 . " : " . $send [1];
		} else {
			echo _EZREALTY_SELLER_SMS13;
		}
	} else {
		echo _EZREALTY_SELLER_SMS14 . " : " . $ret [0];
		exit ();
	}
	mosredirect ( "index2.php?option=com_ezrealty&task=editleadsA&hidemainmenu=1&id=" . $lid, _EZREALTY_SELLER_SMS25 );
}
function viewprof($option) {
	global $database;
	global $mainframe;
	global $mosConfig_list_limit;
	global $mosConfig_absolute_path;
	$filter_sellertype = $mainframe->getuserstatefromrequest ( "filter_sellertype" . $option, "filter_sellertype", 0 );
	$order = $mainframe->getuserstatefromrequest ( "zorder", "zorder", "a.prid DESC" );
	$limit = $mainframe->getuserstatefromrequest ( "viewlistlimit", "limit", $mosConfig_list_limit );
	$limitstart = $mainframe->getuserstatefromrequest ( "viewprofile" . $option . "limitstart", "limitstart", 0 );
	$where = array ( );
	if ($filter_sellertype) {
		$where [] = "a.dealer_type = '" . $filter_sellertype . "'";
	}
	$orderAllowed = array ("a.mid ASC", "a.mid DESC", "a.dealer_name ASC", "a.dealer_name DESC", "a.published ASC", "a.published DESC", "nproperties ASC", "nproperties DESC" );
	if (! in_array ( $order, $orderAllowed )) {
		$order = "a.mid DESC";
	}
	$query = "SELECT COUNT(*) FROM #__ezrealty_profile AS a " . (count ( $where ) ? "\n WHERE " . implode ( " AND ", $where ) : "");
	$database->setquery ( $query );
	$total = $database->loadresult ();
	require_once ($mosConfig_absolute_path . "/administrator/includes/pageNavigation.php");
	$pageNav = new mospagenav ( $total, $limitstart, $limit );
	$query = "SELECT a.*, count(b.id) AS nproperties, u.name as editor \n FROM #__ezrealty_profile AS a\n LEFT JOIN #__ezrealty AS b ON a.mid = b.owner\n LEFT JOIN #__users AS u ON u.id = a.checked_out" . (count ( $where ) ? "\n WHERE " . implode ( " AND ", $where ) : "") . "\n GROUP BY a.mid\n ORDER BY " . $order . ("\n LIMIT " . $pageNav->limitstart . ", {$pageNav->limit}");
	$database->setquery ( $query );
	$rows = $database->loadobjectlist ();
	if ($database->geterrornum ()) {
		echo $database->stderr ();
		return false;
	}
	$seller_typeit [] = mosHTML::makeOption ( 0, _EZREALTY_PROFILE_TYPE );
	$seller_typeit [] = mosHTML::makeOption ( 1, _EZREALTY_LISTER_AGENT );
	$seller_typeit [] = mosHTML::makeOption ( 2, _EZREALTY_LISTER_OWNER );
	$seller_typeit [] = mosHTML::makeOption ( 3, _EZREALTY_LISTER_BROKER );
	$lists ['sellertype'] = mosHTML::selectlist ( $seller_typeit, "filter_sellertype", "class=\"inputbox\" size=\"1\" onchange=\"document.adminForm.submit( );\"", "value", "text", "{$filter_sellertype}" );
	$ordering [] = mosHTML::makeOption ( "a.mid ASC", _EZREALTY_ORDER_LIST1 );
	$ordering [] = mosHTML::makeOption ( "a.mid DESC", _EZREALTY_ORDER_LIST2 );
	$ordering [] = mosHTML::makeOption ( "a.dealer_name ASC", _EZREALTY_ORDER_LIST3 );
	$ordering [] = mosHTML::makeOption ( "a.dealer_name DESC", _EZREALTY_ORDER_LIST4 );
	$ordering [] = mosHTML::makeOption ( "a.published ASC", _EZREALTY_ORDER_LIST9 );
	$ordering [] = mosHTML::makeOption ( "a.published DESC", _EZREALTY_ORDER_LIST10 );
	$ordering [] = mosHTML::makeOption ( "nproperties ASC", _EZREALTY_LISTINGS_ASC );
	$ordering [] = mosHTML::makeOption ( "nproperties DESC", _EZREALTY_LISTINGS_DESC );
	$javascript = "onchange=\"document.adminForm.submit();\"";
	$lists ['order'] = mosHTML::selectlist ( $ordering, "zorder", "class=\"inputbox\" size=\"1\"" . $javascript, "value", "text", $order );
	html_ezrealty::showprof ( $option, $rows, $pageNav, $lists );
}
function editprof($profid, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $mosConfig_live_site;
	$lists = array ( );
	$row = new mosprofile ( $database );
	$row->load ( $profid );
	if ($profid) {
		$row->checkout ( $my->id );
	}
	$sql = "SELECT n.id as value, n.username as text FROM #__users AS n ORDER by n.username ASC";
	$database->setquery ( $sql );
	if (! $database->query ()) {
		echo $database->stderr ();
	} else {
		$sortsellers [] = mosHTML::makeOption ( 0, _EZREALTY_SELECT_SELLER );
		$sortsellers = array_merge ( $sortsellers, $database->loadobjectlist () );
		$lists ['mid'] = mosHTML::selectlist ( $sortsellers, "mid", "class=\"inputbox\" size=\"1\"", "value", "text", $row->mid );
		$lists ['published'] = mosHTML::yesnoradiolist ( "published", "class=\"inputbox\"", $row->published );
		$lists ['show_sms'] = mosHTML::yesnoradiolist ( "show_sms", "class=\"inputbox\"", $row->show_sms );
		$lists ['show_addy'] = mosHTML::yesnoradiolist ( "show_addy", "class=\"inputbox\"", $row->show_addy );
		$listitit [] = mosHTML::makeOption ( 0, _EZREALTY_LISTER_SELECTTYPE );
		$listitit [] = mosHTML::makeOption ( 1, _EZREALTY_LISTER_AGENT );
		$listitit [] = mosHTML::makeOption ( 2, _EZREALTY_LISTER_OWNER );
		$listitit [] = mosHTML::makeOption ( 3, _EZREALTY_LISTER_BROKER );
		$lists ['dealer_type'] = mosHTML::selectlist ( $listitit, "dealer_type", "class=\"inputbox\" size=\"1\"", "value", "text", $row->dealer_type );
		html_ezrealty::editprof ( $row, $option, $lists, $list );
	}
}
function saveprof($option) {
	global $database;
	global $my;
	$row = new mosprofile ( $database );
	$msg = _EZREALTY_GENERIC_SAVED;
	if (! $row->bind ( $_POST )) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->prid = intval ( $row->prid );
	$row->mid = intval ( $row->mid );
	if (! $row->check ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	if ($_REQUEST ['dealer_image']) {
		$row->dealer_image = $_REQUEST ['dealer_image'];
	}
	if ($_FILES ['dealer_imageupload'] ['name']) {
		$row->dealer_image = saveprofileupload ( $_FILES ['dealer_imageupload'] ['name'], $_FILES ['dealer_imageupload'] ['type'], $_FILES ['dealer_imageupload'] ['tmp_name'] );
	}
	if ($_REQUEST ['logo_image']) {
		$row->logo_image = $_REQUEST ['logo_image'];
	}
	if ($_FILES ['logo_imageupload'] ['name']) {
		$row->logo_image = savelogoupload ( $_FILES ['logo_imageupload'] ['name'], $_FILES ['logo_imageupload'] ['type'], $_FILES ['logo_imageupload'] ['tmp_name'] );
	}
	mosmakehtmlsafe ( $row );
	if (! $row->store ()) {
		echo "<script> alert('" . _EZREALTY_DUPLICATE_PROFILE_ERROR . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->checkin ();
	mosredirect ( "index2.php?option=com_ezrealty&task=profiles", $msg );
}
function cancelprof($option) {
	global $database;
	$row = new mosprofile ( $database );
	$row->bind ( $_POST );
	$row->checkin ();
	mosredirect ( "index2.php?option=com_ezrealty&task=profiles" );
}
function removeprof($id, $option) {
	global $database;
	global $mosConfig_absolute_path;
	$database->setquery ( "select * from #__ezrealty_profile where prid=" . intval ( $id ) );
	$doIt = $database->loadresult ();
	if ($id) {
		$row = new mosprofile ( $database );
		$row->load ( $id );
		unlink ( $mosConfig_absolute_path . "/components/com_ezrealty/profiles/" . $row->dealer_image );
		$database->setquery ( "DELETE FROM #__ezrealty_profile WHERE prid=" . $id );
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( "index2.php?option=com_ezrealty&amp;task=profiles" );
	}
}
function showcontent($option) {
	global $database;
	global $mainframe;
	global $mosConfig_list_limit;
	global $mosConfig_absolute_path;
	$limit = $mainframe->getuserstatefromrequest ( "viewlistlimit", "limit", $mosConfig_list_limit );
	$limitstart = $mainframe->getuserstatefromrequest ( "viewcontent" . $option . "limitstart", "limitstart", 0 );
	$database->setquery ( "SELECT count(*) FROM #__ezrealty_content" );
	$total = $database->loadresult ();
	require_once ($mosConfig_absolute_path . "/administrator/includes/pageNavigation.php");
	$pageNav = new mospagenav ( $total, $limitstart, $limit );
	$query = "SELECT b.*, u.name as editor FROM #__ezrealty_content as b \n LEFT JOIN #__users AS u ON u.id = b.checked_out\n ORDER BY b.contid" . ("\n LIMIT " . $pageNav->limitstart . ", {$pageNav->limit}");
	$database->setquery ( $query );
	$rows = $database->loadobjectlist ();
	if ($database->geterrornum ()) {
		echo $database->stderr ();
		return false;
	}
	html_ezrealty::showcontent ( $option, $rows, $pageNav );
}
function editcontent($contentid, $option) {
	global $database;
	global $my;
	$lists = array ( );
	$row = new mosezcontent ( $database );
	$row->load ( $contentid );
	if ($contentid) {
		$row->checkout ( $my->id );
	}
	html_ezrealty::editcontent ( $row, $option );
}
function savecontent($option) {
	global $database;
	global $my;
	$row = new mosezcontent ( $database );
	$msg = _EZREALTY_GENERIC_SAVED;
	if (! $row->bind ( $_POST )) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->contid = intval ( $row->contid );
	if (! $row->check ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	if (! $row->store ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->checkin ();
	mosredirect ( "index2.php?option=com_ezrealty&task=content", $msg );
}
function cancelcontent($option) {
	global $database;
	$row = new mosezcontent ( $database );
	$row->bind ( $_POST );
	$row->checkin ();
	mosredirect ( "index2.php?option=com_ezrealty&task=content" );
}
function showmlist($option) {
	global $database;
	global $mainframe;
	global $mosConfig_list_limit;
	global $mosConfig_absolute_path;
	$limit = $mainframe->getuserstatefromrequest ( "viewlistlimit", "limit", $mosConfig_list_limit );
	$limitstart = $mainframe->getuserstatefromrequest ( "viewcontent" . $option . "limitstart", "limitstart", 0 );
	$where = array ( );
	$query = "SELECT COUNT(*) FROM #__ezrealty_mail AS b " . (count ( $where ) ? "\n WHERE " . implode ( " AND ", $where ) : "");
	$database->setquery ( $query );
	$total = $database->loadresult ();
	require_once ($mosConfig_absolute_path . "/administrator/includes/pageNavigation.php");
	$pageNav = new mospagenav ( $total, $limitstart, $limit );
	$query = "SELECT b.* FROM #__ezrealty_mail as b \n ORDER BY b.mailid" . ("\n LIMIT " . $pageNav->limitstart . ", {$pageNav->limit}");
	$database->setquery ( $query );
	$rows = $database->loadobjectlist ();
	if ($database->geterrornum ()) {
		echo $database->stderr ();
		return false;
	}
	html_ezrealty::showmlist ( $option, $rows, $pageNav );
}
function editmlist($contentid, $option) {
	global $database;
	global $my;
	$lists = array ( );
	$row = new mosezmail ( $database );
	$row->load ( $contentid );
	if ($contentid) {
		$row->checkout ( $my->id );
	}
	$lists ['confirmed'] = mosHTML::yesnoradiolist ( "confirmed", "class=\"inputbox\"", $row->confirmed );
	html_ezrealty::editmlist ( $row, $option, $lists );
}
function savemlist($option) {
	global $database;
	global $my;
	$row = new mosezmail ( $database );
	$msg = _EZREALTY_GENERIC_SAVED;
	if (! $row->bind ( $_POST )) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->mailid = intval ( $row->mailid );
	if (! $row->check ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$comps = $row->mailid < 1;
	if ($comps) {
		$row->date = date ( "Y-m-d H:i:s" );
		$row->confirmed = 1;
	}
	if (! $row->store ()) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->checkin ();
	mosredirect ( "index2.php?option=com_ezrealty&task=mlist", $msg );
}
function cancelmlist($option) {
	global $database;
	$row = new mosezmail ( $database );
	$row->bind ( $_POST );
	$row->checkin ();
	mosredirect ( "index2.php?option=com_ezrealty&task=mlist" );
}
function removemlist($cid, $option) {
	global $database;
	$msg = "";
	$t = 0;
	$nC = count ( $cid );
	for(; $t < $nC; ++ $t) {
		$leadr = new mosezmail ( $database );
		if (! $leadr->delete ( $cid [$t] )) {
			$msg .= $leadr->geterror ();
		}
	}
	mosredirect ( "index2.php?option=com_ezrealty&amp;task=mlist" );
}
function domailexport($option) {
	global $database;
	global $mosConfig_absolute_path;
	if (stristr ( $_SERVER ['PHP_SELF'], "index2" )) {
		mosredirect ( "index3.php?option=com_ezrealty&task=exportmlist&no_html=1" );
	}
	if (ereg ( "Opera(/| )([0-9].[0-9]{1,2})", $_SERVER ['HTTP_USER_AGENT'] )) {
		$brotype = "Opera";
	} else if (ereg ( "MSIE ([0-9].[0-9]{1,2})", $_SERVER ['HTTP_USER_AGENT'] )) {
		$brotype = "IE";
	} else {
		$brotype = "";
	}
	$brotypes = $brotype == "IE" || $brotype == "Opera" ? "application/octetstream" : "application/octet-stream";
	$htime = "EZ_Realty_Mail_Subscribers_from_" . date ( "d-m-Y" );
	$hxml = "<?xml version=\"1.0\" encoding=\"ISO-8859-1\" ?>\r\n\t\t\t\t  <!-- EZ Realty Mailing List Subscribers export file -->\r\n\t\t\t\t  <!DOCTYPE subscribers [\r\n\t\t\t\t  <!ELEMENT subscribers (subscriber+)>\r\n\t\t\t\t  <!ELEMENT subscriber (mailid, name, email, confirmed, date)>\r\n\t\t\t\t  <!ELEMENT mailid (#PCDATA)>\r\n\t\t\t\t  <!ELEMENT name (CDATA)>\r\n\t\t\t\t  <!ELEMENT email (#PCDATA)>\r\n\t\t\t\t  <!ELEMENT confirmed (#PCDATA)>\r\n\t\t\t\t  <!ELEMENT date (#PCDATA)>\r\n\t\t\t\t  ]>\r\n\t\t\t\t  <subscribers>\r\n\t\t\t\t  ";
	$sqlx = "SELECT mailid, name, email, confirmed, date FROM #__ezrealty_mail ORDER BY name ASC";
	$database->setquery ( $sqlx );
	$lbjs = $database->loadobjectlist ();
	foreach ( $lbjs as $mm ) {
		$hxml .= "  <subscriber>\n";
		$hxml .= "    <mailid>" . $mm->mailid . "</mailid>\n";
		$hxml .= "    <name><![CDATA[" . htmlentities ( html_entity_decode ( $mm->name ) ) . "]]></name>\n";
		$hxml .= "    <email>" . $mm->email . "</email>\n";
		$hxml .= "    <confirmed>" . $mm->confirmed . "</confirmed>\n";
		$hxml .= "    <date>" . $mm->date . "</date>\n";
		$hxml .= "  </subscriber>\n";
	}
	$hxml .= "</subscribers>";
	@ob_end_clean ();
	ob_start ();
	header ( "Content-Type: " . $brotypes );
	header ( "Expires: " . gmdate ( "D, d M Y H:i:s" ) . " GMT" );
	if ($brotype == "IE") {
		header ( "Content-Disposition: inline; filename=\"" . $htime . ".xml\"" );
		header ( "Cache-Control: must-revalidate, post-check=0, pre-check=0" );
		header ( "Pragma: public" );
	} else {
		header ( "Content-Disposition: attachment; filename=\"" . $htime . ".xml\"" );
		header ( "Pragma: no-cache" );
	}
	echo $hxml;
	exit ();
}
function showfooter() {

}
function showconfig($option) {
	global $mosConfig_absolute_path, $database, $mosConfig_live_site, $mainframe;
	define ( "EZADMIN_PATH", "components/com_ezrealty" );
	include (EZADMIN_PATH . "/config.ezrealty.php");
	$lists ['er_usesms'] = mosHTML::yesnoradiolist ( "er_usesms", "class=\"inputbox\"", $er_usesms );
	$lists ['er_usemap'] = mosHTML::yesnoradiolist ( "er_usemap", "class=\"inputbox\"", $er_usemap );
	$lists ['er_expmgmt'] = mosHTML::yesnoradiolist ( "er_expmgmt", "class=\"inputbox\"", $er_expmgmt );
	$lists ['er_useprofile'] = mosHTML::yesnoradiolist ( "er_useprofile", "class=\"inputbox\"", $er_useprofile );
	$lists ['er_viewrecommend'] = mosHTML::yesnoradiolist ( "er_viewrecommend", "class=\"inputbox\"", $er_viewrecommend );
	$lists ['er_viewarrange'] = mosHTML::yesnoradiolist ( "er_viewarrange", "class=\"inputbox\"", $er_viewarrange );
	$lists ['er_viewmailing'] = mosHTML::yesnoradiolist ( "er_viewmailing", "class=\"inputbox\"", $er_viewmailing );
	$lists ['er_rssfeed'] = mosHTML::yesnoradiolist ( "er_rssfeed", "class=\"inputbox\"", $er_rssfeed );
	$lists ['er_ohlink'] = mosHTML::yesnoradiolist ( "er_ohlink", "class=\"inputbox\"", $er_ohlink );
	$lists ['er_nllink'] = mosHTML::yesnoradiolist ( "er_nllink", "class=\"inputbox\"", $er_nllink );
	$lists ['er_reglead'] = mosHTML::yesnoradiolist ( "er_reglead", "class=\"inputbox\"", $er_reglead );
	$lists ['er_paypal'] = mosHTML::yesnoradiolist ( "er_paypal", "class=\"inputbox\"", $er_paypal );
	$lists ['er_leadsnotice'] = mosHTML::yesnoradiolist ( "er_leadsnotice", "class=\"inputbox\"", $er_leadsnotice );
	$lists ['er_changeimages'] = mosHTML::yesnoradiolist ( "er_changeimages", "class=\"inputbox\"", $er_changeimages );
	$lists ['er_memlistings'] = mosHTML::yesnoradiolist ( "er_memlistings", "class=\"inputbox\"", $er_memlistings );
	$lists ['er_notification'] = mosHTML::yesnoradiolist ( "er_notification", "class=\"inputbox\"", $er_notification );
	$lists ['er_approve'] = mosHTML::yesnoradiolist ( "er_approve", "class=\"inputbox\"", $er_approve );
	$lists ['er_freepic'] = mosHTML::yesnoradiolist ( "er_freepic", "class=\"inputbox\"", $er_freepic );
	$lists ['er_self'] = mosHTML::yesnoradiolist ( "er_self", "class=\"inputbox\"", $er_self );
	$lists ['er_usemapstnum'] = mosHTML::yesnoradiolist ( "er_usemapstnum", "class=\"inputbox\"", $er_usemapstnum );
	$lists ['er_usemapstreet'] = mosHTML::yesnoradiolist ( "er_usemapstreet", "class=\"inputbox\"", $er_usemapstreet );
	$lists ['er_usemaplocid'] = mosHTML::yesnoradiolist ( "er_usemaplocid", "class=\"inputbox\"", $er_usemaplocid );
	$lists ['er_usemapstid'] = mosHTML::yesnoradiolist ( "er_usemapstid", "class=\"inputbox\"", $er_usemapstid );
	$lists ['er_states'] = mosHTML::yesnoradiolist ( "er_states", "class=\"inputbox\"", $er_states );
	$lists ['er_country'] = mosHTML::yesnoradiolist ( "er_country", "class=\"inputbox\"", $er_country );
	$lists ['er_usetype'] = mosHTML::yesnoradiolist ( "er_usetype", "class=\"inputbox\"", $er_usetype );
	$lists ['er_usecid'] = mosHTML::yesnoradiolist ( "er_usecid", "class=\"inputbox\"", $er_usecid );
	$lists ['er_usecnid'] = mosHTML::yesnoradiolist ( "er_usecnid", "class=\"inputbox\"", $er_usecnid );
	$lists ['er_usepostcode'] = mosHTML::yesnoradiolist ( "er_usepostcode", "class=\"inputbox\"", $er_usepostcode );
	$lists ['er_useprice'] = mosHTML::yesnoradiolist ( "er_useprice", "class=\"inputbox\"", $er_useprice );
	$lists ['er_usebed'] = mosHTML::yesnoradiolist ( "er_usebed", "class=\"inputbox\"", $er_usebed );
	$lists ['er_usesold'] = mosHTML::yesnoradiolist ( "er_usesold", "class=\"inputbox\"", $er_usesold );
	$lists ['er_usemls'] = mosHTML::yesnoradiolist ( "er_usemls", "class=\"inputbox\"", $er_usemls );
	$lists ['er_usefeat'] = mosHTML::yesnoradiolist ( "er_usefeat", "class=\"inputbox\"", $er_usefeat );
	$lists ['er_usepets'] = mosHTML::yesnoradiolist ( "er_usepets", "class=\"inputbox\"", $er_usepets );
	$lists ['er_uselug'] = mosHTML::yesnoradiolist ( "er_uselug", "class=\"inputbox\"", $er_uselug );
	$lists ['er_usebath'] = mosHTML::yesnoradiolist ( "er_usebath", "class=\"inputbox\"", $er_usebath );
	$lists ['er_showmembers'] = mosHTML::yesnoradiolist ( "er_showmembers", "class=\"inputbox\"", $er_showmembers );
	$lists ['er_usepc'] = mosHTML::yesnoradiolist ( "er_usepc", "class=\"inputbox\"", $er_usepc );
	$lists ['er_featlink'] = mosHTML::yesnoradiolist ( "er_featlink", "class=\"inputbox\"", $er_featlink );
	$lists ['er_usemenu'] = mosHTML::yesnoradiolist ( "er_usemenu", "class=\"inputbox\"", $er_usemenu );
	$lists ['er_showaglink'] = mosHTML::yesnoradiolist ( "er_showaglink", "class=\"inputbox\"", $er_showaglink );
	$lists ['er_memlink'] = mosHTML::yesnoradiolist ( "er_memlink", "class=\"inputbox\"", $er_memlink );
	$lists ['er_searchlink'] = mosHTML::yesnoradiolist ( "er_searchlink", "class=\"inputbox\"", $er_searchlink );
	$lists ['er_backbut'] = mosHTML::yesnoradiolist ( "er_backbut", "class=\"inputbox\"", $er_backbut );
	$lists ['er_useflv'] = mosHTML::yesnoradiolist ( "er_useflv", "class=\"inputbox\"", $er_useflv );
	$lists ['er_usebookings'] = mosHTML::yesnoradiolist ( "er_usebookings", "class=\"inputbox\"", $er_usebookings );
	$lists ['er_useshortlist'] = mosHTML::yesnoradiolist ( "er_useshortlist", "class=\"inputbox\"", $er_useshortlist );
	$lists ['er_usemarket1'] = mosHTML::yesnoradiolist ( "er_usemarket1", "class=\"inputbox\"", $er_usemarket1 );
	$lists ['er_usemarket2'] = mosHTML::yesnoradiolist ( "er_usemarket2", "class=\"inputbox\"", $er_usemarket2 );
	$lists ['er_usemarket3'] = mosHTML::yesnoradiolist ( "er_usemarket3", "class=\"inputbox\"", $er_usemarket3 );
	$lists ['er_usemarket4'] = mosHTML::yesnoradiolist ( "er_usemarket4", "class=\"inputbox\"", $er_usemarket4 );
	$lists ['er_usemarket5'] = mosHTML::yesnoradiolist ( "er_usemarket5", "class=\"inputbox\"", $er_usemarket5 );
	$lists ['er_usemarket6'] = mosHTML::yesnoradiolist ( "er_usemarket6", "class=\"inputbox\"", $er_usemarket6 );
	$lists ['er_usetype1'] = mosHTML::yesnoradiolist ( "er_usetype1", "class=\"inputbox\"", $er_usetype1 );
	$lists ['er_usetype2'] = mosHTML::yesnoradiolist ( "er_usetype2", "class=\"inputbox\"", $er_usetype2 );
	$lists ['er_usetype3'] = mosHTML::yesnoradiolist ( "er_usetype3", "class=\"inputbox\"", $er_usetype3 );
	$lists ['er_usetype4'] = mosHTML::yesnoradiolist ( "er_usetype4", "class=\"inputbox\"", $er_usetype4 );
	$lists ['er_usetype5'] = mosHTML::yesnoradiolist ( "er_usetype5", "class=\"inputbox\"", $er_usetype5 );
	$lists ['er_usetype6'] = mosHTML::yesnoradiolist ( "er_usetype6", "class=\"inputbox\"", $er_usetype6 );
	$lists ['er_usefrequit1'] = mosHTML::yesnoradiolist ( "er_usefrequit1", "class=\"inputbox\"", $er_usefrequit1 );
	$lists ['er_usefrequit2'] = mosHTML::yesnoradiolist ( "er_usefrequit2", "class=\"inputbox\"", $er_usefrequit2 );
	$lists ['er_usefrequit3'] = mosHTML::yesnoradiolist ( "er_usefrequit3", "class=\"inputbox\"", $er_usefrequit3 );
	$lists ['er_usefrequit4'] = mosHTML::yesnoradiolist ( "er_usefrequit4", "class=\"inputbox\"", $er_usefrequit4 );
	$lists ['er_usefrequit5'] = mosHTML::yesnoradiolist ( "er_usefrequit5", "class=\"inputbox\"", $er_usefrequit5 );
	$lists ['er_usefrequit6'] = mosHTML::yesnoradiolist ( "er_usefrequit6", "class=\"inputbox\"", $er_usefrequit6 );
	$lists ['er_usefrequit7'] = mosHTML::yesnoradiolist ( "er_usefrequit7", "class=\"inputbox\"", $er_usefrequit7 );
	$lists ['er_usecust4'] = mosHTML::yesnoradiolist ( "er_usecust4", "class=\"inputbox\"", $er_usecust4 );
	$lists ['er_usecust5'] = mosHTML::yesnoradiolist ( "er_usecust5", "class=\"inputbox\"", $er_usecust5 );
	$thumbcreator [] = mosHTML::makeOption ( "none", _EZREALTY_CONFIG_TNNONE );
	$thumbcreator [] = mosHTML::makeOption ( "gd1", _EZREALTY_CONFIG_TNGD1 );
	$thumbcreator [] = mosHTML::makeOption ( "gd2", _EZREALTY_CONFIG_TNGD2 );
	$lists ['er_thumbcreation'] = mosHTML::selectlist ( $thumbcreator, "er_thumbcreation", "class=\"inputbox\" size=\"1\"", "value", "text", $er_thumbcreation );
	$payonly [] = mosHTML::makeOption ( "0", _EZREALTY_CONFIG_PAIDOPT1 );
	$payonly [] = mosHTML::makeOption ( "1", _EZREALTY_CONFIG_PAIDOPT2 );
	$lists ['er_payonly'] = mosHTML::selectlist ( $payonly, "er_payonly", "class=\"inputbox\" size=\"2\"", "value", "text", $er_payonly );
	$uselocid [] = mosHTML::makeOption ( "0", _EZREALTY_CONFIG_NEITHER );
	$uselocid [] = mosHTML::makeOption ( "1", _EZREALTY_CONFIG_STATESLOCS );
	$uselocid [] = mosHTML::makeOption ( "2", _EZREALTY_CONFIG_LOCSONLY );
	$lists ['er_uselocid'] = mosHTML::selectlist ( $uselocid, "er_uselocid", "class=\"inputbox\" size=\"1\"", "value", "text", $er_uselocid );
	$stateloc [] = mosHTML::makeOption ( "0", _EZREALTY_CONFIG_NEITHER );
	$stateloc [] = mosHTML::makeOption ( "1", _EZREALTY_CONFIG_STATESLOCS );
	$stateloc [] = mosHTML::makeOption ( "2", _EZREALTY_CONFIG_LOCSONLY );
	$lists ['er_stateloc'] = mosHTML::selectlist ( $stateloc, "er_stateloc", "class=\"inputbox\" size=\"1\"", "value", "text", $er_stateloc );
	$pmode [] = mosHTML::makeOption ( "1", _EZREALTY_CONFIG_LS );
	$pmode [] = mosHTML::makeOption ( "2", _EZREALTY_CONFIG_TS );
	$lists ['postmode'] = mosHTML::selectlist ( $pmode, "postmode", "class=\"inputbox\" size=\"2\"", "value", "text", $postmode );
	$cpos [] = mosHTML::makeOption ( "0", _EZREALTY_CONFIG_BEFORE );
	$cpos [] = mosHTML::makeOption ( "1", _EZREALTY_CONFIG_AFTER );
	$lists ['er_currencypos'] = mosHTML::selectlist ( $cpos, "er_currencypos", "class=\"inputbox\" size=\"1\"", "value", "text", $er_currencypos );
	$currencyformat [] = mosHTML::makeOption ( "0", _EZREALTY_CONFIG_DECIMAL );
	$currencyformat [] = mosHTML::makeOption ( "1", _EZREALTY_CONFIG_EUROPEAN );
	$currencyformat [] = mosHTML::makeOption ( "2", _EZREALTY_CONFIG_BRAZILIAN );
	$lists ['er_currencyformat'] = mosHTML::selectlist ( $currencyformat, "er_currencyformat", "class=\"inputbox\" size=\"1\"", "value", "text", $er_currencyformat );
	$mapsys [] = mosHTML::makeOption ( "1", _EZREALTY_CONFIG_MAPTYPE1 );
	$mapsys [] = mosHTML::makeOption ( "2", _EZREALTY_CONFIG_MAPTYPE2 );
	$mapsys [] = mosHTML::makeOption ( "3", _EZREALTY_CONFIG_MAPTYPE3 );
	$lists ['er_mapsys'] = mosHTML::selectlist ( $mapsys, "er_mapsys", "class=\"inputbox\" size=\"1\"", "value", "text", $er_mapsys );
	$expsys [] = mosHTML::makeOption ( "0", _EZREALTY_CONFIG_EXPHITSBASED );
	$expsys [] = mosHTML::makeOption ( "1", _EZREALTY_CONFIG_EXPDATEBASED );
	$lists ['er_expsys'] = mosHTML::selectlist ( $expsys, "er_expsys", "class=\"inputbox\" size=\"1\"", "value", "text", $er_expsys );
	$database->setquery ( "SELECT id AS value, name AS text FROM #__groups ORDER BY id" );
	$groups = $database->loadobjectlist ();
	$lists ['er_profaccess'] = mosHTML::selectlist ( $groups, "er_profaccess", "class=\"inputbox\" size=\"1\"", "value", "text", $er_profaccess );
	$listtemplates [] = mosHTML::makeOption ( "0", _EZREALTY_CONFIG_SELTPL );
	if ($dir = @opendir ( $GLOBALS ['mosConfig_absolute_path'] . "/components/com_ezrealty/forms/templates" )) {

		while ( ($file = readdir ( $dir )) !== false ) {
			if ($file != ".." && $file != ".") {
				if (is_dir ( $mosConfig_absolute_path . "/components/com_ezrealty/forms/templates" . "/" . $file )) {
					if (! ($file [0] == '.')) {

						$filelist [] = $file;
					}
				}
			}
		}
		closedir ( $dir );
	}
	asort ( $filelist );
	while ( list ( $key, $val ) = each ( &$filelist ) ) {
		$listtemplates [] = mosHTML::makeOption ( $val, $val );
	}
	$lists ['template'] = mosHTML::selectlist ( $listtemplates, "er_template", "class=\"inputbox\" size=\"1\"", "value", "text", $er_template );
	$listtemplate2 [] = mosHTML::makeOption ( "0", _EZREALTY_CONFIG_SELTPL );
	if ($dir = opendir ( $GLOBALS ['mosConfig_absolute_path'] . "/components/com_ezrealty/forms/list_templates" )) {
		while ( ($file = readdir ( $dir )) !== false ) {
			if ($file != ".." && $file != ".") {
				if (is_dir ( $mosConfig_absolute_path . "/components/com_ezrealty/forms/list_templates" . "/" . $file )) {
					if (! ($file [0] == '.')) {

						$filelist2 [] = $file;
					}
				}
			}
		}
		closedir ( $dir );
	}
	asort ( $filelist2 );
	while ( list ( $key, $val ) = each ( $filelist2 ) ) {
		$listtemplate2 [] = mosHTML::makeOption ( $val, $val );
	}
	$lists ['er_listtemplate'] = mosHTML::selectlist ( $listtemplate2, "er_listtemplate", "class=\"inputbox\" size=\"1\"", "value", "text", $er_listtemplate );
	$pmttmpl [] = mosHTML::makeOption ( "0", _EZREALTY_CONFIG_SELTPL );
	if ($dir = @opendir ( $GLOBALS ['mosConfig_absolute_path'] . "/components/com_ezrealty/forms/payments" )) {
		while ( ($file = readdir ( $dir )) !== false ) {
			if ($file != ".." && $file != ".") {
				if (is_dir ( $mosConfig_absolute_path . "/components/com_ezrealty/forms/payments" . "/" . $file )) {
					if (! ($file [0] == '.')) {
						$filelist3 [] = $file;
					}
				}
			}
		}
		closedir ( $dir );
	}
	asort ( $filelist3 );
	while ( list ( $key, $val ) = each ( $filelist3 ) ) {
		$pmttmpl [] = mosHTML::makeOption ( $val, $val );
	}
	$lists ['er_pmttmpl'] = mosHTML::selectlist ( $pmttmpl, "er_pmttmpl", "class=\"inputbox\" size=\"1\"", "value", "text", $er_pmttmpl );
	html_ezrealty::showconfig ( $option, $lists );
}
function saveconfig($option) {
	global $mosConfig_absolute_path;
	$configfile = "components/" . $option . "/config.ezrealty.php";
	@chmod ( $configfile, 502 );
	$permission = is_writable ( $configfile );
	if (! $permission) {
		$mosmsg = "Config file not writeable!";
		mosredirect ( "index2.php?option=" . $option . "&task=settings", $mosmsg );
		break;
	}
	if (get_magic_quotes_gpc () == 0) {
		$er_bizname = addslashes ( $er_bizname );
		$er_bizad = addslashes ( $er_bizad );
		$er_telephone = addslashes ( $er_telephone );
		$er_mobile = addslashes ( $er_mobile );
		$er_username = addslashes ( $er_username );
		$er_password = addslashes ( $er_password );
		$er_api = addslashes ( $er_api );
		$er_viewing_notify = addslashes ( $er_viewing_notify );
		$er_bizintro = addslashes ( $er_bizintro );
		$er_special_feature = addslashes ( $er_special_feature );
	}
	$config = "<?php\n";
	$config .= "\$er_thumbcreation = \"" . $_REQUEST ['er_thumbcreation'] . "\";\n";
	$config .= "\$er_thumbwidth = \"" . $_REQUEST ['er_thumbwidth'] . "\";\n";
	$config .= "\$er_thumbquality = \"" . $_REQUEST ['er_thumbquality'] . "\";\n";
	$config .= "\$er_imagedirectory = \"" . $_REQUEST ['er_imagedirectory'] . "\";\n";
	$config .= "\$er_catthumbwidth = \"" . $_REQUEST ['er_catthumbwidth'] . "\";\n";
	$config .= "\$er_imgwidth = \"" . $_REQUEST ['er_imgwidth'] . "\";\n";
	$config .= "\$er_maxwidth = \"" . $_REQUEST ['er_maxwidth'] . "\";\n";
	$config .= "\$er_maxheight = \"" . $_REQUEST ['er_maxheight'] . "\";\n";
	$config .= "\$er_bizname = \"" . $_REQUEST ['er_bizname'] . "\";\n";
	$config .= "\$er_bizad = \"" . $_REQUEST ['er_bizad'] . "\";\n";
	$config .= "\$er_telephone = \"" . $_REQUEST ['er_telephone'] . "\";\n";
	$config .= "\$er_usesms = \"" . $_REQUEST ['er_usesms'] . "\";\n";
	$config .= "\$er_mobile = \"" . $_REQUEST ['er_mobile'] . "\";\n";
	$config .= "\$er_username = \"" . $_REQUEST ['er_username'] . "\";\n";
	$config .= "\$er_password = \"" . $_REQUEST ['er_password'] . "\";\n";
	$config .= "\$er_api = \"" . $_REQUEST ['er_api'] . "\";\n";
	$config .= "\$er_viewing_notify = \"" . $_REQUEST ['er_viewing_notify'] . "\";\n";
	$config .= "\$er_currencysign = \"" . $_REQUEST ['er_currencysign'] . "\";\n";
	$config .= "\$er_currencypos = \"" . $_REQUEST ['er_currencypos'] . "\";\n";
	$config .= "\$er_currencyformat = \"" . $_REQUEST ['er_currencyformat'] . "\";\n";
	$config .= "\$er_useprofile = \"" . $_REQUEST ['er_useprofile'] . "\";\n";
	$config .= "\$er_profaccess = \"" . $_REQUEST ['er_profaccess'] . "\";\n";
	$config .= "\$er_profmaxwidth = \"" . $_REQUEST ['er_profmaxwidth'] . "\";\n";
	$config .= "\$er_profmaxheight = \"" . $_REQUEST ['er_profmaxheight'] . "\";\n";
	$config .= "\$er_bizintro = \"" . $_REQUEST ['er_bizintro'] . "\";\n";
	$config .= "\$er_special_feature =  \"" . $_REQUEST ['er_special_feature'] . "\";\n";
	$config .= "\$er_paypal = \"" . $_REQUEST ['er_paypal'] . "\";\n";
	$config .= "\$er_payonly = \"" . $_REQUEST ['er_payonly'] . "\";\n";
	$config .= "\$er_expmgmt = \"" . $_REQUEST ['er_expmgmt'] . "\";\n";
	$config .= "\$er_expsys = \"" . $_REQUEST ['er_expsys'] . "\";\n";
	$config .= "\$er_expfig = \"" . $_REQUEST ['er_expfig'] . "\";\n";
	$config .= "\$er_expgrace = \"" . $_REQUEST ['er_expgrace'] . "\";\n";
	$config .= "\$er_impnum = \"" . $_REQUEST ['er_impnum'] . "\";\n";
	$config .= "\$er_lightboxexp = \"" . $_REQUEST ['er_lightboxexp'] . "\";\n";
	$config .= "\$er_pmttmpl = \"" . $_REQUEST ['er_pmttmpl'] . "\";\n";
	$config .= "\$paypal_email = \"" . $_REQUEST ['paypal_email'] . "\";\n";
	$config .= "\$checkmail = \"" . $_REQUEST ['checkmail'] . "\";\n";
	$config .= "\$currency = \"" . $_REQUEST ['currency'] . "\";\n";
	$config .= "\$pp_currsign = \"" . $_REQUEST ['pp_currsign'] . "\";\n";
	$config .= "\$button_image = \"" . $_REQUEST ['button_image'] . "\";\n";
	$config .= "\$premium_cost = \"" . $_REQUEST ['premium_cost'] . "\";\n";
	$config .= "\$featured_cost = \"" . $_REQUEST ['featured_cost'] . "\";\n";
	$config .= "\$postmode = \"" . $_REQUEST ['postmode'] . "\";\n";
	$config .= "\$er_success = \"" . $_REQUEST ['er_success'] . "\";\n";
	$config .= "\$er_cancel = \"" . $_REQUEST ['er_cancel'] . "\";\n";
	$config .= "\$er_perpage = \"" . $_REQUEST ['er_perpage'] . "\";\n";
	$config .= "\$er_newlist = \"" . $_REQUEST ['er_newlist'] . "\";\n";
	$config .= "\$er_template = \"" . $_REQUEST ['er_template'] . "\";\n";
	$config .= "\$er_listtemplate = \"" . $_REQUEST ['er_listtemplate'] . "\";\n";
	$config .= "\$er_colcount = \"" . $_REQUEST ['er_colcount'] . "\";\n";
	$config .= "\$er_colwidth = \"" . $_REQUEST ['er_colwidth'] . "\";\n";
	$config .= "\$er_colour1 = \"" . $_REQUEST ['er_colour1'] . "\";\n";
	$config .= "\$er_colour2 = \"" . $_REQUEST ['er_colour2'] . "\";\n";
	$config .= "\$er_textbox = \"" . $_REQUEST ['er_textbox'] . "\";\n";
	$config .= "\$er_textarea = \"" . $_REQUEST ['er_textarea'] . "\";\n";
	$config .= "\$er_usemap = \"" . $_REQUEST ['er_usemap'] . "\";\n";
	$config .= "\$er_mapsys = \"" . $_REQUEST ['er_mapsys'] . "\";\n";
	$config .= "\$er_mapapi = \"" . $_REQUEST ['er_mapapi'] . "\";\n";
	$config .= "\$er_mapwidth = \"" . $_REQUEST ['er_mapwidth'] . "\";\n";
	$config .= "\$er_mapheight = \"" . $_REQUEST ['er_mapheight'] . "\";\n";
	$config .= "\$er_usemapstnum = \"" . $_REQUEST ['er_usemapstnum'] . "\";\n";
	$config .= "\$er_usemapstreet = \"" . $_REQUEST ['er_usemapstreet'] . "\";\n";
	$config .= "\$er_usemaplocid = \"" . $_REQUEST ['er_usemaplocid'] . "\";\n";
	$config .= "\$er_usemapstid = \"" . $_REQUEST ['er_usemapstid'] . "\";\n";
	$config .= "\$er_viewrecommend =  \"" . $_REQUEST ['er_viewrecommend'] . "\";\n";
	$config .= "\$er_nllink =  \"" . $_REQUEST ['er_nllink'] . "\";\n";
	$config .= "\$er_ohlink =  \"" . $_REQUEST ['er_ohlink'] . "\";\n";
	$config .= "\$er_viewarrange = \"" . $_REQUEST ['er_viewarrange'] . "\";\n";
	$config .= "\$er_viewmailing = \"" . $_REQUEST ['er_viewmailing'] . "\";\n";
	$config .= "\$er_rssfeed = \"" . $_REQUEST ['er_rssfeed'] . "\";\n";
	$config .= "\$er_rssname = \"" . $_REQUEST ['er_rssname'] . "\";\n";
	$config .= "\$er_rssohname = \"" . $_REQUEST ['er_rssohname'] . "\";\n";
	$config .= "\$er_usetype =  \"" . $_REQUEST ['er_usetype'] . "\";\n";
	$config .= "\$er_usecid =  \"" . $_REQUEST ['er_usecid'] . "\";\n";
	$config .= "\$er_uselocid =  \"" . $_REQUEST ['er_uselocid'] . "\";\n";
	$config .= "\$er_usecnid =  \"" . $_REQUEST ['er_usecnid'] . "\";\n";
	$config .= "\$er_usepostcode =  \"" . $_REQUEST ['er_usepostcode'] . "\";\n";
	$config .= "\$er_useprice =  \"" . $_REQUEST ['er_useprice'] . "\";\n";
	$config .= "\$er_usebed =  \"" . $_REQUEST ['er_usebed'] . "\";\n";
	$config .= "\$er_usesold =  \"" . $_REQUEST ['er_usesold'] . "\";\n";
	$config .= "\$er_usemls =  \"" . $_REQUEST ['er_usemls'] . "\";\n";
	$config .= "\$er_reglead = \"" . $_REQUEST ['er_reglead'] . "\";\n";
	$config .= "\$er_showmembers = \"" . $_REQUEST ['er_showmembers'] . "\";\n";
	$config .= "\$er_states = \"" . $_REQUEST ['er_states'] . "\";\n";
	$config .= "\$er_country = \"" . $_REQUEST ['er_country'] . "\";\n";
	$config .= "\$er_usepc = \"" . $_REQUEST ['er_usepc'] . "\";\n";
	$config .= "\$er_self = \"" . $_REQUEST ['er_self'] . "\";\n";
	$config .= "\$er_changeimages =  \"" . $_REQUEST ['er_changeimages'] . "\";\n";
	$config .= "\$er_memlistings = \"" . $_REQUEST ['er_memlistings'] . "\";\n";
	$config .= "\$er_notification = \"" . $_REQUEST ['er_notification'] . "\";\n";
	$config .= "\$er_leadsnotice = \"" . $_REQUEST ['er_leadsnotice'] . "\";\n";
	$config .= "\$er_approve = \"" . $_REQUEST ['er_approve'] . "\";\n";
	$config .= "\$er_maxlistings = \"" . $_REQUEST ['er_maxlistings'] . "\";\n";
	$config .= "\$er_cbint = \"" . $_REQUEST ['er_cbint'] . "\";\n";
	$config .= "\$er_freepic = \"" . $_REQUEST ['er_freepic'] . "\";\n";
	$config .= "\$er_memintro = \"" . $_REQUEST ['er_memintro'] . "\";\n";
	$config .= "\$er_terms = \"" . $_REQUEST ['er_terms'] . "\";\n";
	$config .= "\$er_featlink = \"" . $_REQUEST ['er_featlink'] . "\";\n";
	$config .= "\$er_usemenu = \"" . $_REQUEST ['er_usemenu'] . "\";\n";
	$config .= "\$er_showaglink = \"" . $_REQUEST ['er_showaglink'] . "\";\n";
	$config .= "\$er_memlink = \"" . $_REQUEST ['er_memlink'] . "\";\n";
	$config .= "\$er_searchlink = \"" . $_REQUEST ['er_searchlink'] . "\";\n";
	$config .= "\$er_backbut = \"" . $_REQUEST ['er_backbut'] . "\";\n";
	$config .= "\$er_stateloc = \"" . $_REQUEST ['er_stateloc'] . "\";\n";
	$config .= "\$er_useflv = \"" . $_REQUEST ['er_useflv'] . "\";\n";
	$config .= "\$er_flvwidth = \"" . $_REQUEST ['er_flvwidth'] . "\";\n";
	$config .= "\$er_flvheight = \"" . $_REQUEST ['er_flvheight'] . "\";\n";
	$config .= "\$er_usepets = \"" . $_REQUEST ['er_usepets'] . "\";\n";
	$config .= "\$er_uselug = \"" . $_REQUEST ['er_uselug'] . "\";\n";
	$config .= "\$er_usebookings = \"" . $_REQUEST ['er_usebookings'] . "\";\n";
	$config .= "\$er_logowidth = \"" . $_REQUEST ['er_logowidth'] . "\";\n";
	$config .= "\$er_logoheight = \"" . $_REQUEST ['er_logoheight'] . "\";\n";
	$config .= "\$er_online_status = \"" . $_REQUEST ['er_online_status'] . "\";\n";
	$config .= "\$er_currencycode = \"" . $_REQUEST ['er_currencycode'] . "\";\n";
	$config .= "\$er_useshortlist = \"" . $_REQUEST ['er_useshortlist'] . "\";\n";
	$config .= "\$er_usemarket1 = \"" . $_REQUEST ['er_usemarket1'] . "\";\n";
	$config .= "\$er_usemarket2 = \"" . $_REQUEST ['er_usemarket2'] . "\";\n";
	$config .= "\$er_usemarket3 = \"" . $_REQUEST ['er_usemarket3'] . "\";\n";
	$config .= "\$er_usemarket4 = \"" . $_REQUEST ['er_usemarket4'] . "\";\n";
	$config .= "\$er_usemarket5 = \"" . $_REQUEST ['er_usemarket5'] . "\";\n";
	$config .= "\$er_usemarket6 = \"" . $_REQUEST ['er_usemarket6'] . "\";\n";
	$config .= "\$er_usetype1 = \"" . $_REQUEST ['er_usetype1'] . "\";\n";
	$config .= "\$er_usetype2 = \"" . $_REQUEST ['er_usetype2'] . "\";\n";
	$config .= "\$er_usetype3 = \"" . $_REQUEST ['er_usetype3'] . "\";\n";
	$config .= "\$er_usetype4 = \"" . $_REQUEST ['er_usetype4'] . "\";\n";
	$config .= "\$er_usetype5 = \"" . $_REQUEST ['er_usetype5'] . "\";\n";
	$config .= "\$er_usetype6 = \"" . $_REQUEST ['er_usetype6'] . "\";\n";
	$config .= "\$er_usefrequit1 = \"" . $_REQUEST ['er_usefrequit1'] . "\";\n";
	$config .= "\$er_usefrequit2 = \"" . $_REQUEST ['er_usefrequit2'] . "\";\n";
	$config .= "\$er_usefrequit3 = \"" . $_REQUEST ['er_usefrequit3'] . "\";\n";
	$config .= "\$er_usefrequit4 = \"" . $_REQUEST ['er_usefrequit4'] . "\";\n";
	$config .= "\$er_usefrequit5 = \"" . $_REQUEST ['er_usefrequit5'] . "\";\n";
	$config .= "\$er_usefrequit6 = \"" . $_REQUEST ['er_usefrequit6'] . "\";\n";
	$config .= "\$er_usefrequit7 = \"" . $_REQUEST ['er_usefrequit7'] . "\";\n";
	$config .= "\$er_usefeat = \"" . $_REQUEST ['er_usefeat'] . "\";\n";
	$config .= "\$er_usebath = \"" . $_REQUEST ['er_usebath'] . "\";\n";
	$config .= "\$er_pageorder = \"" . $_REQUEST ['er_pageorder'] . "\";\n";
	$config .= "\$er_usecust4 = \"" . $_REQUEST ['er_usecust4'] . "\";\n";
	$config .= "\$er_usecust5 = \"" . $_REQUEST ['er_usecust5'] . "\";\n";
	$config .= "?>";
	if ($fp = fopen ( "{$configfile}", "w" )) {
		fputs ( $fp, $config, strlen ( $config ) );
		fclose ( $fp );
	}
	mosredirect ( "index2.php?option=" . $option . "&task=settings", _EZREALTY_CONFIG_CONFIGSAVED );
}
?>
