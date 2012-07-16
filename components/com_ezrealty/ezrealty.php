<?php

if (! defined ( "_VALID_MOS" )) {
	exit ( "Direct Access to this location is not allowed." );
}
global $mainframe, $mosConfig_absolute_path, $mosConfig_lang;
require_once ($mainframe->getpath ( "front_html", "com_ezrealty" ));
define ( "LANGUAGE_PATH", "components/com_ezrealty/language/" . $mosConfig_lang );
define ( "ALTLANGUAGE_PATH", "components/com_ezrealty/language" );
if (file_exists ( LANGUAGE_PATH . ".php" )) {
	include (LANGUAGE_PATH . ".php");
} else if (file_exists ( ALTLANGUAGE_PATH . "/english.php" )) {
	include (ALTLANGUAGE_PATH . "/english.php");
} else {
	echo "Language file is not available";
}
define ( "EZADMIN_PATH", "administrator/components/com_ezrealty" );
define ( "INCLUDES_PATH", "administrator/components/com_ezrealty/includes" );
if (file_exists ( EZADMIN_PATH . "/config.ezrealty.php" )) {
	include (EZADMIN_PATH . "/config.ezrealty.php");
} else {
	echo _EZREALTY_FNA;
}
if (file_exists ( INCLUDES_PATH . "/class.ezrealty.php" )) {
	include (INCLUDES_PATH . "/class.ezrealty.php");
} else {
	echo _EZREALTY_FNA;
}
if (file_exists ( INCLUDES_PATH . "/images.php" )) {
	include (INCLUDES_PATH . "/images.php");
} else {
	echo _EZREALTY_FNA;
}
$uid = intval ( mosgetparam ( $_REQUEST, "uid", 0 ) );
$id = intval ( mosgetparam ( $_REQUEST, "id", 0 ) );
$stid = intval ( mosgetparam ( $_REQUEST, "stid", 0 ) );
$locid = intval ( mosgetparam ( $_REQUEST, "locid", 0 ) );
$limit = intval ( mosgetparam ( $_REQUEST, "limit", 0 ) );
$limitstart = intval ( mosgetparam ( $_REQUEST, "limitstart", 0 ) );
if ($task != "helpers") {
	includeajax ( $option );
}
switch ( $task) {
	case "deleteimage1" :
		deleteimage1 ( $id, $option );
		return 1;
	case "deleteimage2" :
		deleteimage2 ( $id, $option );
		return 1;
	case "deleteimage3" :
		deleteimage3 ( $id, $option );
		return 1;
	case "deleteimage4" :
		deleteimage4 ( $id, $option );
		return 1;
	case "deleteimage5" :
		deleteimage5 ( $id, $option );
		return 1;
	case "deleteimage6" :
		deleteimage6 ( $id, $option );
		return 1;
	case "deleteimage7" :
		deleteimage7 ( $id, $option );
		return 1;
	case "deleteimage8" :
		deleteimage8 ( $id, $option );
		return 1;
	case "deleteimage9" :
		deleteimage9 ( $id, $option );
		return 1;
	case "deleteimage10" :
		deleteimage10 ( $id, $option );
		return 1;
	case "deleteimage11" :
		deleteimage11 ( $id, $option );
		return 1;
	case "deleteimage12" :
		deleteimage12 ( $id, $option );
		return 1;
	case "deleteprofile_image" :
		deleteprofileimage ( $id, $option );
		return 1;
	case "deletelogo_image" :
		deletelogoimage ( $id, $option );
		return 1;
	case "helpers" :
		helpers ( $_REQUEST ['id'] );
		return 1;
	case "upgrade1" :
		upgrade1 ( $option );
		return 1;
	case "upgrade2" :
		upgrade2 ( $option );
		return 1;
	case "upgrade3" :
		upgrade3 ( $option );
		return 1;
	case "upgrade4" :
		upgrade4 ( $option );
		return 1;
	case "removelightbox" :
		removelightbox ( $option, $id );
		return 1;
	case "lightbox" :
		dolightbox ( $option, $id );
		return 1;
	case "viewlightbox" :
		ezheader ();
		viewlightbox ( $option, $id );
		ezfooter ();
		ezpowered ();
		return 1;
	case "dealerresults" :
		ezheader ();
		dealerresults ( $option );
		ezfooter ();
		ezpowered ();
		return 1;
	case "displayprofiles" :
		ezheader ();
		displayprofiles ( $option, $limit, $limitstart );
		ezfooter ();
		ezpowered ();
		return 1;
	case "dealerlistings" :
		ezheader ();
		dealerlistings ( $option, $id, $limit, $limitstart );
		ezfooter ();
		ezpowered ();
		return 1;
	case "showprofile" :
		ezheader ();
		showprofile ( $option, $id );
		ezfooter ();
		ezpowered ();
		return 1;
	case "editprofile" :
		ezmembersheader ();
		editprofile ( $option, $id );
		ezmembersfooter ();
		ezpowered ();
		return 1;
	case "addprofile" :
		ezmembersheader ();
		editprofile ( $option, 0 );
		ezmembersfooter ();
		ezpowered ();
		return 1;
	case "saveprofile" :
		saveprof ( $option );
		return 1;
	case "contactbusiness" :
		ezemailheader ();
		contactbusiness ( $option, $id );
		ezemailfooter ();
		return 1;
	case "sendbusinesscontact" :
		sendbusinesscontact ( $option );
		return 1;
	case "smsbusiness" :
		ezemailheader ();
		smsbusiness ( $option, $id );
		ezemailfooter ();
		return 1;
	case "sendbusinesssms" :
		sendbusinesssms ( $option );
		return 1;
	case "maillist" :
		ezemailheader ();
		maillist ( $option, $id );
		ezemailfooter ();
		return 1;
	case "joinmaillist" :
		joinmaillist ( $option );
		return 1;
	case "recommend" :
		ezemailheader ();
		recommendlisting ( $option, $id );
		ezemailfooter ();
		return 1;
	case "sendrecommend" :
		sendrecommend ( $option );
		return 1;
	case "smsseller" :
		ezemailheader ();
		dosms ( $option, $id );
		ezemailfooter ();
		return 1;
	case "send_sms" :
		sendsms ( $option );
		return 1;
	case "contactseller" :
		ezemailheader ();
		contactseller ( $option, $id );
		ezemailfooter ();
		return 1;
	case "sendselleremail" :
		sendselleremail ( $option );
		return 1;
	case "contactprofile" :
		ezemailheader ();
		contactprofile ( $option, $id );
		ezemailfooter ();
		return 1;
	case "sendcontactprofile" :
		sendcontactprofile ( $option );
		return 1;
	case "smsprofile" :
		ezemailheader ();
		smsprofile ( $option, $id );
		ezemailfooter ();
		return 1;
	case "sendprofilesms" :
		sendprofilesms ( $option );
		return 1;
	case "enquire" :
		ezemailheader ();
		leadenquiry ( $option, $id );
		ezemailfooter ();
		return 1;
	case "enquiry2" :
		sendenquiry ( $option );
		return 1;
	case "savelead" :
		ezheader ();
		saveleads ( $option );
		ezfooter ();
		ezpowered ();
		return 1;
	case "register" :
		ezheader ();
		registerleads ( $option );
		ezfooter ();
		ezpowered ();
		return 1;
	case "showleads" :
		ezheader ();
		showleads ( $option );
		ezfooter ();
		ezpowered ();
		return 1;
	case "ezpanel" :
		ezmembersheader ();
		myezpanel ( $option );
		ezmembersfooter ();
		ezpowered ();
		return 1;
	case "newloc" :
		ezemailheader ();
		editlocalities ( $option, $id );
		ezemailfooter ();
		ezpowered ();
		return 1;
	case "saveloc" :
		savelocality ( $option, $id );
		return 1;
	case "newstate" :
		ezemailheader ();
		editstates ( $option, $id );
		ezemailfooter ();
		ezpowered ();
		return 1;
	case "savestate" :
		savestate ( $option, $id );
		return 1;
	case "newcountry" :
		ezemailheader ();
		editcountrys ( $option, $id );
		ezemailfooter ();
		ezpowered ();
		return 1;
	case "savecountry" :
		savecountry ( $option, $id );
		return 1;
	case "success" :
		ezheader ();
		showsuccess ( $option );
		ezfooter ();
		ezpowered ();
		return 1;
	case "cancel" :
		ezheader ();
		showcancel ( $option );
		ezfooter ();
		ezpowered ();
		return 1;
	case "terms" :
		ezmembersheader ();
		viewterms ( $option );
		ezmembersfooter ();
		ezpowered ();
		return 1;
	case "preview_listing" :
		if (! $my->id) {
			mosnotauth ();
			return;
		}
		ezmembersheader ();
		previewdetails ( $option, $id );
		ezmembersfooter ();
		ezpowered ();
		return 1;
	case "save" :
		savelist ( $option );
		return 1;
	case "deleteit" :
		deletelisting ( $id, $option );
		return 1;
	case "edit" :
		ezmembersheader ();
		editproperty ( $option, $id );
		ezmembersfooter ();
		ezpowered ();
		return 1;
	case "addnew" :
		ezmembersheader ();
		editproperty ( $option, 0 );
		ezmembersfooter ();
		ezpowered ();
		return 1;
	case "profile" :
		ezmembersheader ();
		viewprofile ( $option, $id );
		ezmembersfooter ();
		ezpowered ();
		return 1;
	case "results" :
		ezheader ();
		searchresults ( $option );
		ezfooter ();
		ezpowered ();
		return 1;
	case "quickresults" :
		ezheader ();
		quickresults ( $option );
		ezfooter ();
		ezpowered ();
		return 1;
	case "search" :
		ezheader ();
		itemsearch ( $option );
		ezfooter ();
		ezpowered ();
		return 1;
	case "print" :
		printdetails ( $option, $id );
		return 1;
	case "featured" :
		ezheader ();
		featuredproperties ( $option );
		ezfooter ();
		ezpowered ();
		return 1;
	case "openhouse" :
		ezheader ();
		openhouse ( $option );
		ezfooter ();
		ezpowered ();
		return 1;
	case "newlistings" :
		ezheader ();
		newlistings ( $option );
		ezfooter ();
		ezpowered ();
		return 1;
	case "detail" :
		ezheader ();
		viewdetails ( $option, $id );
		ezfooter ();
		ezpowered ();
		return 1;
	case "viewcategory" :
		ezheader ();
		viewcategory ( $option, $id, $gid, $limit, $limitstart );
		ezfooter ();
		ezpowered ();
		return 1;

	default :
		ezheader ();
		showcategories ( $option, $gid );
		ezfooter ();
		ezpowered ();
}
function helpers($id) {
	global $database;
	global $mainframe;
	switch ( $id) {
		case "1" :
			if (isset ( $_GET ['firstCode'] )) {
				$sqlx = "SELECT * FROM #__ezrealty_locality WHERE published='1' AND stateid=" . $_GET ['firstCode'] . " ORDER BY ezcity";
				$database->setquery ( $sqlx );
				$arr = $database->loadobjectlist ();
				echo "obj.options[obj.options.length] = new Option('" . _EZREALTY_DETAILS_SELLOC . "','0');\n";
				foreach ( $arr as $row ) {
					echo "obj.options[obj.options.length] = new Option('" . $row->ezcity . "','" . $row->locid . "');\n";
				}
			}
			if (isset ( $_GET ['firstCode2'] )) {
				$sqlx = "SELECT * FROM #__ezrealty_locality WHERE published='1' AND stateid=" . $_GET ['firstCode2'] . " ORDER BY ezcity";
				$database->setquery ( $sqlx );
				$arr = $database->loadobjectlist ();
				echo "obj.options[obj.options.length] = new Option('" . _EZREALTY_DETAILS_SELLOC . "','0');\n";
				foreach ( $arr as $row ) {
					echo "obj.options[obj.options.length] = new Option('" . $row->ezcity . "','" . $row->locid . "');\n";
				}
			}
			if (isset ( $_GET ['firstCode3'] )) {

				$sqlx = "SELECT * FROM #__ezrealty_locality WHERE published='1' AND stateid=" . $_GET ['firstCode3'] . " ORDER BY ezcity";
				$database->setquery ( $sqlx );
				$arr = $database->loadobjectlist ();
				echo "obj.options[obj.options.length] = new Option('" . _EZREALTY_DETAILS_SELLOC . "','0');\n";
				foreach ( $arr as $row ) {
					echo "obj.options[obj.options.length] = new Option('" . $row->ezcity . "','" . $row->locid . "');\n";
				}
			}
	}
}

function showcategories($option, $gid) {
	global $database,$my,$mainframe;
	$sqlx = "SELECT content FROM #__ezrealty_content\n WHERE contid=1";
	$database->setquery ( $sqlx );
	$rows = $database->loadresult ();
	$sqlx = "SELECT c.* FROM #__ezrealty_catg AS c\n WHERE c.published='1'" . ("\n AND c.access<='" . $my->gid . "'") . "\n ORDER BY c.ordering";
	$database->setquery ( $sqlx );
	$arr = $database->loadobjectlist ();
	html_ezrealty::showcategories ( $option, $arr, $gid, $rows );
}

function viewcategory($option, $id, $gid, $limit, $limitstart) {
	global $database;
	global $my;
	global $mainframe;
	global $Itemid;
	global $er_perpage;
	global $mosConfig_list_limit;
	global $mosConfig_absolute_path;
	global $er_impnum;
	global $er_expmgmt;
	global $er_expsys;
	global $er_pageorder;
	define ( "PAGENAV_PATH", "administrator/includes" );
	$query = "SELECT count(cid) FROM #__ezrealty_catg" . ("\n WHERE cid=" . $id) . ("\n AND access <= " . $my->gid);
	$database->setquery ( $query );
	$cat_access = $database->loadresult ();
	if ($cat_access < 1) {
		mosnotauth ();
	} else {
		$query = "SELECT name FROM #__ezrealty_catg" . ("\n WHERE cid=" . $id);
		$database->setquery ( $query );
		$catname = $database->loadresult ();
		if ($er_expmgmt == 1) {
			if ($er_expsys == 0) {
				$query = "SELECT COUNT(a.id) as numitems\n FROM #__ezrealty AS a\n LEFT JOIN #__ezrealty_catg as c on c.cid=a.cid" . ("\n WHERE a.published = '1' AND a.cid = " . $id . " AND a.hits<{$er_impnum}") . ("\n ORDER BY " . $er_pageorder);
				$database->setquery ( $query );
				$counter = $database->loadobjectlist ();
				$total = $counter [0]->numitems;
				$limit = $limit ? $limit : $er_perpage;
				if ($total <= $limit) {
					$limitstart = 0;
				}
				require_once (PAGENAV_PATH . "/pageNavigation.php");
				$pageNav = new mospagenav ( $total, $limitstart, $limit );
				$query = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published=1 AND a.cid=" . $id . " AND a.hits<{$er_impnum}") . ("\n ORDER BY " . $er_pageorder) . ("\n LIMIT " . $limitstart . ", {$limit}");
				$database->setquery ( $query );
				$rows = $database->loadobjectlist ();
			} else {
				$currentdate = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ), date ( "Y" ) );
				$query = "SELECT COUNT(a.id) as numitems\n FROM #__ezrealty AS a\n LEFT JOIN #__ezrealty_catg as c on c.cid=a.cid" . ("\n WHERE a.published = '1' AND a.cid = " . $id . " AND a.expdate>{$currentdate}") . ("\n ORDER BY " . $er_pageorder);
				$database->setquery ( $query );
				$counter = $database->loadobjectlist ();
				$total = $counter [0]->numitems;
				$limit = $limit ? $limit : $er_perpage;
				if ($total <= $limit) {
					$limitstart = 0;
				}
				require_once (PAGENAV_PATH . "/pageNavigation.php");
				$pageNav = new mospagenav ( $total, $limitstart, $limit );
				$query = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published=1 AND a.cid=" . $id . " AND a.expdate>{$currentdate}") . ("\n ORDER BY " . $er_pageorder) . ("\n LIMIT " . $limitstart . ", {$limit}");
				$database->setquery ( $query );
				$rows = $database->loadobjectlist ();
			}
		} else {
			$query = "SELECT COUNT(a.id) as numitems\n FROM #__ezrealty AS a\n LEFT JOIN #__ezrealty_catg as c on c.cid=a.cid" . ("\n WHERE a.published = '1' AND a.cid = " . $id) . ("\n ORDER BY " . $er_pageorder);
			$database->setquery ( $query );
			$counter = $database->loadobjectlist ();
			$total = $counter [0]->numitems;
			$limit = $limit ? $limit : $er_perpage;
			if ($total <= $limit) {
				$limitstart = 0;
			}
			require_once (PAGENAV_PATH . "/pageNavigation.php");
			$pageNav = new mospagenav ( $total, $limitstart, $limit );
			$query = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published=1 AND a.cid=" . $id) . ("\n ORDER BY " . $er_pageorder) . ("\n LIMIT " . $limitstart . ", {$limit}");
			$database->setquery ( $query );
			$rows = $database->loadobjectlist ();
		}
		html_ezrealty::viewcategory ( $option, $rows, $id, $catname, $pageNav, $total );
	}
}

function viewDetails($option, $id) {
	global $database;
	global $mainframe;
	global $mosConfig_absolute_path;
	global $Itemid;
	global $my;
	global $er_memlistings;
	global $er_impnum;
	global $er_expmgmt;
	global $er_expsys;
	$sqlx = "SELECT a.*, c.name AS category, e.ezcity AS proploc, e.ezcity_desc AS ezdesc, d.name AS statename, b.name AS countryname, u.mid AS mid, u.dealer_name AS dealer_name, u.dealer_company AS dealer_company, u.dealer_phone AS dealer_phone, \r\n\tu.dealer_mobile AS dealer_mobile, u.dealer_sms AS dealer_sms, u.show_sms AS show_sms, u.dealer_image AS dealer_image, u.dealer_type AS dealer_type, u.logo_image AS logo_image, u.published AS dealerpublished FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS c ON c.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS e ON e.locid = a.locid\n LEFT JOIN #__ezrealty_state AS d ON d.stid = a.stid\n LEFT JOIN #__ezrealty_country AS b ON b.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published = '1' AND a.id = " . $id);
	$database->setquery ( $sqlx );
	$database->loadobject ( $row );
	if ($er_expmgmt == 1 && $er_expsys == 0 && $er_impnum <= $row->hits) {
		echo _EZREALTY_NLAVAIL;
	} else if ($er_expmgmt == 1 && $er_expsys == 1) {
		$vTime = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ), date ( "Y" ) );
		if ($row->expdate < $vTime) {
			echo _EZREALTY_NLAVAIL;
		} else {
		}
	} else if (! $row->published) {
		echo _EZREALTY_NLAVAIL;
	} else {
		$cat = new moscatgs ( $database );
		$cat->load ( $row->cid );
		if (! $cat->published) {
			mosnotauth ();
		} else if ($my->gid < $cat->access) {
			echo _EZREALTY_REGISTERED_ACCESS;
		} else {
			$sqlx = "UPDATE #__ezrealty\n SET hits = hits + 1" . ("\n WHERE id = " . $id);
			$database->setquery ( $sqlx );
			$database->query ();
			html_ezrealty::viewdetails ( $option, $row );
		}
	}
}

function previewdetails($option, $id) {
	global $database;
	global $mainframe;
	global $mosConfig_absolute_path;
	global $Itemid;
	global $my;
	global $er_memlistings;
	$sqlx = "SELECT a.*, c.name AS category, e.ezcity AS proploc, e.ezcity_desc AS ezdesc, d.name AS statename, b.name AS countryname, u.mid AS mid, u.dealer_name AS dealer_name, u.dealer_company AS dealer_company, u.dealer_phone AS dealer_phone, \r\n\tu.dealer_mobile AS dealer_mobile, u.dealer_sms AS dealer_sms, u.show_sms AS show_sms, u.dealer_image AS dealer_image, u.dealer_type AS dealer_type, u.logo_image AS logo_image, u.published AS dealerpublished FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS c ON c.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS e ON e.locid = a.locid\n LEFT JOIN #__ezrealty_state AS d ON d.stid = a.stid\n LEFT JOIN #__ezrealty_country AS b ON b.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published = '1' AND a.id = " . $id);
	$database->setquery ( $sqlx );
	$database->loadobject ( $row );
	if ($row->owner != $my->id) {
		mosnotauth ();
	} else {
		html_ezrealty::viewdetails ( $option, $row );
	}
}

function printdetails($option, $id) {
	global $database;
	global $mainframe;
	global $mosConfig_absolute_path;
	global $mosConfig_live_site;
	global $Itemid;
	global $my;
	global $er_impnum;
	global $er_expmgmt;
	global $er_expsys;
	$sqlx = "SELECT a.*, c.name AS category, e.ezcity AS proploc, e.ezcity_desc AS ezdesc, d.name AS statename, b.name AS countryname, u.mid AS mid, u.dealer_name AS dealer_name, u.dealer_company AS dealer_company, u.dealer_phone AS dealer_phone, \r\n\tu.dealer_mobile AS dealer_mobile, u.dealer_sms AS dealer_sms, u.show_sms AS show_sms, u.dealer_image AS dealer_image, u.dealer_type AS dealer_type, u.logo_image AS logo_image, u.published AS dealerpublished FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS c ON c.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS e ON e.locid = a.locid\n LEFT JOIN #__ezrealty_state AS d ON d.stid = a.stid\n LEFT JOIN #__ezrealty_country AS b ON b.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published = '1' AND a.id = " . $id);
	$database->setquery ( $sqlx );
	$database->loadobject ( $row );
	if ($er_expmgmt == 1 && $er_expsys == 0 && $er_impnum < $row->hits) {
		echo _EZREALTY_NLAVAIL;
	} else if ($er_expmgmt == 1 && $er_expsys == 1 && $row->expdate <= mktime ( 0, 0, 0, date ( "m" ), date ( "d" ), date ( "Y" ) )) {
		echo _EZREALTY_NLAVAIL;
	} else if (! $row->published) {
		echo _EZREALTY_NLAVAIL;
	} else {
		$cat = new moscatgs ( $database );
		$cat->load ( $row->cid );
		if (! $cat->published) {
			mosnotauth ();
		} else if ($my->gid < $cat->access) {
			mosnotauth ();
		} else {
			html_ezrealty::printdetails ( $option, $row );
		}
	}
}

function newlistings($option) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $er_perpage;
	global $er_newlist;
	global $mosConfig_list_limit;
	global $mosConfig_absolute_path;
	global $er_impnum;
	global $er_expmgmt;
	global $er_expsys;
	if ($er_expmgmt == 1) {
		if ($er_expsys == 0) {
			$sqlx = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published=1 AND a.hits<" . $er_impnum . " AND cc.published=1") . "\n ORDER BY a.id DESC" . ("\n LIMIT " . $er_newlist);
			$database->setquery ( $sqlx );
			$arr = $database->loadobjectlist ();
		} else {
			$vTime = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ), date ( "Y" ) );
			$sqlx = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published=1 AND cc.published=1 AND a.expdate>" . $vTime) . "\n ORDER BY a.id DESC" . ("\n LIMIT " . $er_newlist);
			$database->setquery ( $sqlx );
			$arr = $database->loadobjectlist ();
		}
	} else {
		$sqlx = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner\n WHERE a.published=1 AND cc.published=1\n ORDER BY a.id DESC" . ("\n LIMIT " . $er_newlist);
		$database->setquery ( $sqlx );
		$arr = $database->loadobjectlist ();
	}
	html_ezrealty::newlistings ( $option, $arr, $lists );
}

function openhouse($option) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $er_perpage;
	global $er_newlist;
	global $er_impnum;
	global $er_expmgmt;
	global $er_expsys;
	global $er_pageorder;
	if ($er_expmgmt == 1) {
		if ($er_expsys == 0) {
			$sqlx = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.openhouse = 1 AND a.published=1 AND a.hits<" . $er_impnum . " AND cc.published=1") . ("\n ORDER BY " . $er_pageorder);
			$database->setquery ( $sqlx );
			$arr = $database->loadobjectlist ();
		} else {
			$vTime = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ), date ( "Y" ) );
			$sqlx = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.openhouse = 1 AND a.published=1 AND cc.published=1 AND a.expdate>" . $vTime) . ("\n ORDER BY " . $er_pageorder);
			$database->setquery ( $sqlx );
			$arr = $database->loadobjectlist ();
		}
	} else {
		$sqlx = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner\n WHERE a.openhouse = 1 AND a.published=1 AND cc.published=1" . ("\n ORDER BY " . $er_pageorder);
		$database->setquery ( $sqlx );
		$arr = $database->loadobjectlist ();
	}
	html_ezrealty::openhouse ( $option, $arr );
}

function featuredproperties($option) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $er_perpage;
	global $er_newlist;
	global $er_impnum;
	global $er_expmgmt;
	global $er_expsys;
	global $er_pageorder;
	if ($er_expmgmt == 1) {
		if ($er_expsys == 0) {
			$sqlx = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.featured = 1 AND a.published=1 AND a.hits<" . $er_impnum . " AND cc.published=1") . ("\n ORDER BY " . $er_pageorder);
			$database->setquery ( $sqlx );
			$arr = $database->loadobjectlist ();
		} else {
			$vTime = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ), date ( "Y" ) );
			$sqlx = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.featured = 1 AND a.published=1 AND cc.published=1 AND a.expdate>" . $vTime) . ("\n ORDER BY " . $er_pageorder);
			$database->setquery ( $sqlx );
			$arr = $database->loadobjectlist ();
		}
	} else {
		$sqlx = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner\n WHERE a.featured = 1 AND a.published=1 AND cc.published=1" . ("\n ORDER BY " . $er_pageorder);
		$database->setquery ( $sqlx );
		$arr = $database->loadobjectlist ();
	}
	html_ezrealty::featuredproperties ( $option, $arr );
}

function dolightbox($option, $id) {
	global $database;
	global $my;
	global $mainframe;
	global $Itemid;
	if (! $my->id) {
		echo _EZREALTY_NEEDTOLOGIN;
	} else {
		$iIntVal = ( integer ) $id;
		$database->setquery ( "SELECT count(*) from #__ezrealty_lightbox WHERE propid = '" . $iIntVal . "' AND uid='{$my->id}'" );
		$rrows = $database->loadresult ();
		if (0 < $rrows) {
			echo "<script> alert('" . _EZREALTY_SHORTLIST_ERROR . "'); window.history.go(-1); </script>\n";
			ezemailheader ();
			ezclose ();
			ezemailfooter ();
		} else {
			$row = new moslightbox ( $database );
			if (! $row->bind ( $_POST )) {
				echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
				exit ();
			}
			if (! $row->check ()) {
				echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
				exit ();
			}
			$row->propid = $iIntVal;
			$row->uid = $my->id;
			$row->date = mktime ();
			if (! $row->store ()) {
				echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
				exit ();
			}
			ezemailheader ();
			ezclose ();
			ezemailfooter ();
		}
	}
}

function removelightbox($option, $id) {
	global $database;
	global $my;
	global $mainframe;
	global $Itemid;
	if (! $my->id) {
		echo _EZREALTY_NEEDTOLOGIN;
	} else {
		$inval = ( integer ) $id;
		$row = new moslightbox ( $database );
		$row->load ( $id );
		$database->setquery ( "DELETE FROM #__ezrealty_lightbox WHERE llid=" . $id );
		if (! $database->query ()) {
			echo "<script> alert('" . $database->geterrormsg () . "'); window.history.go(-1); </script>\n";
		}
		mosredirect ( sefreltoabs ( "index.php?option=com_ezrealty&amp;Itemid=" . $Itemid . "&amp;task=viewlightbox" ) );
	}
}

function viewlightbox($option, $id) {
	global $database;
	global $my;
	global $mainframe;
	global $Itemid;
	global $mosConfig_absolute_path;
	global $er_perpage;
	global $er_impnum;
	global $er_expmgmt;
	global $er_expsys;
	global $er_pageorder;
	if (! $my->id) {
		echo _EZREALTY_NEEDTOLOGIN;
	} else {
		if ($er_expmgmt == 1) {
			if ($er_expsys == 0) {
				$sqlx = "SELECT *, lb.llid AS litem, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_lightbox as lb on lb.propid=a.id\n LEFT JOIN #__ezrealty_catg as c on c.cid=a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published=1 AND lb.uid=" . $my->id . " AND a.hits<{$er_impnum}") . ("\n ORDER BY " . $er_pageorder);
				$database->setquery ( $sqlx );
				$arr = $database->loadobjectlist ();
			} else {
				$vTime = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ), date ( "Y" ) );
				$sqlx = "SELECT *, lb.llid AS litem, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_lightbox as lb on lb.propid=a.id\n LEFT JOIN #__ezrealty_catg as c on c.cid=a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published=1 AND lb.uid=" . $my->id . " AND a.expdate>{$vTime}") . ("\n ORDER BY " . $er_pageorder);
				$database->setquery ( $sqlx );
				$arr = $database->loadobjectlist ();
			}
		} else {
			$sqlx = "SELECT *, lb.llid AS litem, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_lightbox as lb on lb.propid=a.id\n LEFT JOIN #__ezrealty_catg as c on c.cid=a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published=1 AND lb.uid=" . $my->id) . ("\n ORDER BY " . $er_pageorder);
			$database->setquery ( $sqlx );
			$arr = $database->loadobjectlist ();
		}
		html_ezrealty::viewlightbox ( $option, $arr, $id );
	}
}

function registerleads($option) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $mosConfig_absolute_path;
	global $mosConfig_list_limit;
	global $er_newlist;
	global $er_stateloc;
	global $er_country;
	global $er_usetype1;
	global $er_usetype2;
	global $er_usetype3;
	global $er_usetype4;
	global $er_usetype5;
	global $er_usetype6;
	$sql = "SELECT c.cid as value, c.name as text FROM #__ezrealty_catg AS c WHERE c.published = 1 ORDER by c.ordering";
	$database->setquery ( $sql );
	if (! $database->query ()) {
		echo $database->stderr ();
	} else {
		$selCat [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELCAT );
		$selCat = array_merge ( $selCat, $database->loadobjectlist () );
		$lists ['cid'] = mosHTML::selectlist ( $selCat, "cid", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
		if ($er_stateloc == 1) {
			$sql = "SELECT d.stid as value, d.name as text FROM #__ezrealty_state AS d ORDER by d.name";
			$database->setquery ( $sql );
			if (! $database->query ()) {
				echo $database->stderr ();
			} else {
				$statelist [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELSTATE );
				$statelist = array_merge ( $statelist, $database->loadobjectlist () );
				$lists ['stid'] = mosHTML::selectlist ( $statelist, "stid", "class=\"searchbox\" id=\"stid\" size=\"1\" onchange=\"getDropLocList(this,0)\" ", "value", "text", "" );
				$sql = "SELECT e.locid as value, e.ezcity as text FROM #__ezrealty_locality AS e WHERE e.published=1 ORDER by e.ezcity";
				$database->setquery ( $sql );
				if (! $database->query ()) {
					echo $database->stderr ();
				} else {
					$locslist [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELLOC );
					$lists ['locid'] = mosHTML::selectlist ( $locslist, "locid", "class=\"searchbox\" id=\"locid\" size=\"1\" ", "value", "text", "" );
				}
			}
		}
		if ($er_stateloc == 2) {
			$sql = "SELECT f.locid as value, f.ezcity as text FROM #__ezrealty_locality AS f WHERE f.published=1 ORDER by f.ezcity";
			$database->setquery ( $sql );
			if (! $database->query ()) {
				echo $database->stderr ();
			} else {
				$selLoct [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELLOC );
				$selLoct = array_merge ( $selLoct, $database->loadobjectlist () );
				$lists ['locid2'] = mosHTML::selectlist ( $selLoct, "locid", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
			}
		}
		$sql = "SELECT g.cnid as value, g.name as text FROM #__ezrealty_country AS g WHERE g.published = 1 ORDER by g.name";
		$database->setquery ( $sql );
		if (! $database->query ()) {
			echo $database->stderr ();
		} else {
			$selLoctC [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELCOUNTRY );
			$selLoctC = array_merge ( $selLoctC, $database->loadobjectlist () );
			$lists ['cnid'] = mosHTML::selectlist ( $selLoctC, "cnid", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
			$sql = "SELECT h.number as value, h.number as text FROM #__ezrealty_room AS h WHERE h.published = 1 ORDER by h.ordering";
			$database->setquery ( $sql );
			if (! $database->query ()) {
				echo $database->stderr ();
			} else {
				$selLoctR [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELROOM );
				$selLoctR [] = mosHTML::makeOption ( "0.5", _EZREALTY_STUDIO );
				$selLoctR = array_merge ( $selLoctR, $database->loadobjectlist () );
				$lists ['bedrooms'] = mosHTML::selectlist ( $selLoctR, "bedrooms", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
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
				$lists ['type'] = mosHTML::selectlist ( $typeit, "type", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
				html_ezrealty::registerleads ( $option, $lists );
			}
		}
	}
}

function showleads($option) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $mosConfig_absolute_path;
	global $mosConfig_list_limit;
	global $er_newlist;
	$sqlx = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname\n FROM #__ezrealty_leads AS a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n WHERE a.published = '1'\n ORDER BY a.lid DESC";
	$database->setquery ( $sqlx );
	$arr = $database->loadobjectlist ();
	html_ezrealty::showleads ( $option, $arr );
}

function saveleads() {
	global $database;
	global $Itemid;
	global $mosConfig_sitename;
	global $mosConfig_mailfrom;
	global $er_viewing_notify;
	global $er_leadsnotice;
	global $mosConfig_usecaptcha;
	define ( "CAPTCHA_PATH", "includes" );
	$stVal = 0;
	if ($mosConfig_usecaptcha == "1" && file_exists ( CAPTCHA_PATH . "/captcha.php" )) {
		session_name ( "mos_captcha" );
		session_start ();
		$rLead = mosgetparam ( $_POST, "spamstop", "" );
		if (isset ( $_SESSION ['code'] ) && $_SESSION ['code'] != "" && $_SESSION ['code'] == $rLead) {
			$stVal = 1;
		} else {
			$stVal = 2;
		}
	}
	if ($stVal != "2") {
		$Leadss = $_POST ['email'];
		if (! check_email ( $Leadss )) {
			echo "<script> alert('" . _EZREALTY_EMAIL_FORMAT_ERROR . "'); window.history.go(-1); </script>\n";
		} else {
			$row = new mosleads ( $database );
			if (! $row->bind ( $_POST )) {
				echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
				exit ();
			}
			$row->lid = ( integer ) $row->lid;
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
			if ($er_leadsnotice) {
				$mVal .= _EZREALTY_LEADS_SUBMSG . "\r\n\r\n";
				$val = $mosConfig_sitename . " " . _EZREALTY_YOUVEGOT_LEADSMAIL;
				$mmVal = "From: " . $mosConfig_sitename . "\r\n";
				$mmVal .= "Reply-To: " . $mosConfig_mailfrom . "\r\n";
				$mmVal .= "X-Priority: 1\r\n";
				$mmVal .= "X-MSMail-Priority: High\r\n";
				$mmVal .= "X-Mailer: EZ Realty Real Estate Software\r\n";
				mosmail ( $mosConfig_mailfrom, $mosConfig_sitename, $er_viewing_notify, $val, $mVal, 0 );
			}
			mosredirect ( sefreltoabs ( "index.php?option=com_ezrealty&amp;Itemid=" . $Itemid ), _EZREALTY_SUBLEAD_THANKS );
		}
	} else {
		echo "<SCRIPT> alert('" . _EZREALTY_SECURITY_FAILED . "'); window.history.go(-1);</SCRIPT>";
	}
}

function itemsearch($option) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $er_uselocid;
	global $er_usetype1;
	global $er_usetype2;
	global $er_usetype3;
	global $er_usetype4;
	global $er_usetype5;
	global $er_usetype6;
	global $er_usemarket1;
	global $er_usemarket2;
	global $er_usemarket3;
	global $er_usemarket4;
	global $er_usemarket5;
	global $er_usemarket6;
	global $er_usecust4;
	global $er_usecust5;
	global $er_usemls;
	global $er_usecnid;
	global $er_usepostcode;
	$typeit [] = mosHTML::makeOption ( 0, _EZREALTY_LISTING_ANYTYPE );
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
	$lists ['type'] = mosHTML::selectlist ( $typeit, "type", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
	$sql = "SELECT c.cid as value, c.name as text FROM #__ezrealty_catg AS c WHERE c.published=1 ORDER by c.ordering";
	$database->setquery ( $sql );
	if (! $database->query ()) {
		echo $database->stderr ();
	} else {
		$selCat [] = mosHTML::makeOption ( "0", _EZREALTY_SEARCH_ALCAT );
		$selCat = array_merge ( $selCat, $database->loadobjectlist () );
		$lists ['cid'] = mosHTML::selectlist ( $selCat, "cid", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
		$sql = "SELECT a.range as value, a.display as text FROM #__ezrealty_price AS a WHERE a.published=1 ORDER by a.ordering";
		$database->setquery ( $sql );
		if (! $database->query ()) {
			echo $database->stderr ();
		} else {
			$minpriceit [] = mosHTML::makeOption ( "", _EZREALTY_SEARCH_MINPRI );
			$minpriceit = array_merge ( $minpriceit, $database->loadobjectlist () );
			$lists ['minprice'] = mosHTML::selectlist ( $minpriceit, "minprice", "class=\"slimsearchbox\" size=\"1\"", "value", "text", "" );
			$sql = "SELECT b.range as value, b.display as text FROM #__ezrealty_price AS b WHERE b.published=1 ORDER by b.ordering";
			$database->setquery ( $sql );
			if (! $database->query ()) {
				echo $database->stderr ();
			} else {
				$maxpriceit [] = mosHTML::makeOption ( "", _EZREALTY_SEARCH_MAXPRI );
				$maxpriceit = array_merge ( $maxpriceit, $database->loadobjectlist () );
				$lists ['maxprice'] = mosHTML::selectlist ( $maxpriceit, "maxprice", "class=\"slimsearchbox\" size=\"1\"", "value", "text", "" );
				if ($er_uselocid == 1) {
					$sql = "SELECT s.stid as value, s.name as text FROM #__ezrealty_state AS s WHERE s.published=1 ORDER by s.name";
					$database->setquery ( $sql );
					if (! $database->query ()) {
						echo $database->stderr ();
					} else {
						$statelist [] = mosHTML::makeOption ( "0", _EZREALTY_SEARCH_ALSTA );
						$statelist = array_merge ( $statelist, $database->loadobjectlist () );
						$lists ['stid'] = mosHTML::selectlist ( $statelist, "stid", "class=\"searchbox\" id=\"stid\" size=\"1\" onchange=\"getDropLocList(this,0)\" ", "value", "text", "" );
						$sql = "SELECT lo.locid as value, lo.ezcity as text FROM #__ezrealty_locality AS lo WHERE lo.published=1 ORDER by lo.ezcity";
						$database->setquery ( $sql );
						if (! $database->query ()) {
							echo $database->stderr ();
						} else {
							$sLoc [] = mosHTML::makeOption ( "0", _EZREALTY_SEARCH_ALLOC );
							$lists ['locid'] = mosHTML::selectlist ( $sLoc, "locid", "class=\"searchbox\" id=\"locid\" size=\"1\" ", "value", "text", "" );
						}
					}
				}
				if ($er_uselocid == 2) {
					$sql = "SELECT loc.locid as value, loc.ezcity as text FROM #__ezrealty_locality AS loc WHERE loc.published=1 ORDER by loc.ezcity";
					$database->setquery ( $sql );
					if (! $database->query ()) {
						echo $database->stderr ();
					} else {
						$localitylist [] = mosHTML::makeOption ( "0", _EZREALTY_SEARCH_ALLOC );
						$localitylist = array_merge ( $localitylist, $database->loadobjectlist () );
						$lists ['locid'] = mosHTML::selectlist ( $localitylist, "locid", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
					}
				}
				if ($er_usecnid) {
					$sql = "SELECT cn.cnid as value, cn.name as text FROM #__ezrealty_country AS cn WHERE cn.published=1 ORDER by cn.name";
					$database->setquery ( $sql );
					if (! $database->query ()) {
						echo $database->stderr ();
					} else {
						$selLoctC [] = mosHTML::makeOption ( "0", _EZREALTY_SEARCH_ALCOU );
						$selLoctC = array_merge ( $selLoctC, $database->loadobjectlist () );
						$lists ['cnid'] = mosHTML::selectlist ( $selLoctC, "cnid", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
					}
				}
				if ($er_usepostcode) {
					$sql = "SELECT DISTINCT p.postcode as value, p.postcode as text FROM #__ezrealty AS p WHERE p.published = 1 ORDER by p.postcode";
					$lbjss = $database->loadobjectlist ();
					$database->setquery ( $sql );
					if (! $database->query ()) {
						echo $database->stderr ();
					} else {
						$postcodelist [] = mosHTML::makeOption ( "", _EZREALTY_SEARCH_ALLPOSTCODES );
						if ($lbjss) {
							$postcodelist = array_merge ( $postcodelist, $database->loadobjectlist () );
						}
						$lists ['postcode'] = mosHTML::selectlist ( $postcodelist, "postcode", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
					}
				}
				if ($er_usemls) {
					$sql = "SELECT DISTINCT mls.mls_id as value, mls.mls_id as text FROM #__ezrealty AS mls WHERE mls.published = 1 AND mls.mls_id != '' ORDER by mls.mls_id";
					$database->setquery ( $sql );
					$lbjst = $database->loadobjectlist ();
					if (! $database->query ()) {
						echo $database->stderr ();
					} else {
						$anymlsit [] = mosHTML::makeOption ( "", _EZREALTY_SEARCH_ANYMLS );
						if ($lbjst) {
							$anymlsit = array_merge ( $anymlsit, $database->loadobjectlist () );
						}
						$lists ['mls_id'] = mosHTML::selectlist ( $anymlsit, "mls_id", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
					}
				}
				$sql = "SELECT b1.number as value, b1.number as text FROM #__ezrealty_room AS b1 WHERE b1.published=1 ORDER by b1.ordering";
				$database->setquery ( $sql );
				if (! $database->query ()) {
					echo $database->stderr ();
				} else {
					$minbedit [] = mosHTML::makeOption ( "", _EZREALTY_SEARCH_MINBED );
					$minbedit [] = mosHTML::makeOption ( "0.5", _EZREALTY_STUDIO );
					$minbedit = array_merge ( $minbedit, $database->loadobjectlist () );
					$lists ['minbed'] = mosHTML::selectlist ( $minbedit, "minbed", "class=\"slimsearchbox\" size=\"1\"", "value", "text", "" );
					$sql = "SELECT b2.number as value, b2.number as text FROM #__ezrealty_room AS b2 WHERE b2.published=1 ORDER by b2.ordering";
					$database->setquery ( $sql );
					if (! $database->query ()) {
						echo $database->stderr ();
					} else {
						$maxbedit [] = mosHTML::makeOption ( "", _EZREALTY_SEARCH_MAXBED );
						$maxbedit [] = mosHTML::makeOption ( "0.5", _EZREALTY_STUDIO );
						$maxbedit = array_merge ( $maxbedit, $database->loadobjectlist () );
						$lists ['maxbed'] = mosHTML::selectlist ( $maxbedit, "maxbed", "class=\"slimsearchbox\" size=\"1\"", "value", "text", "" );
						$sql = "SELECT DISTINCT ba.bathrooms as value, ba.bathrooms as text FROM #__ezrealty AS ba WHERE ba.published=1 AND ba.bathrooms !='' ORDER by ba.bathrooms";
						$database->setquery ( $sql );
						$lbjsu = $database->loadobjectlist ();
						if (! $database->query ()) {
							echo $database->stderr ();
						} else {
							$bathroomslist [] = mosHTML::makeOption ( "", _EZREALTY_SELECT_BATHROOMS );
							if ($lbjsu) {
								$bathroomslist = array_merge ( $bathroomslist, $database->loadobjectlist () );
							}
							$lists ['bath'] = mosHTML::selectlist ( $bathroomslist, "bathrooms", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
							if ($er_usecust4) {
								$sql = "SELECT DISTINCT t.custom4 as value, t.custom4 as text FROM #__ezrealty AS t WHERE t.published=1 AND t.custom4 !='' ORDER by t.custom4";
								$database->setquery ( $sql );
								$lbjusecust4 = $database->loadobjectlist ();
								if (! $database->query ()) {
									echo $database->stderr ();
								} else {
									$ancstlst [] = mosHTML::makeOption ( "", _EZREALTY_ANYCUSTOM4 );
									if ($lbjusecust4) {
										$ancstlst = array_merge ( $ancstlst, $database->loadobjectlist () );
									}
									$lists ['custom4'] = mosHTML::selectlist ( $ancstlst, "custom4", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
								}
							}
							if ($er_usecust5) {
								$sql = "SELECT DISTINCT u.custom5 as value, u.custom5 as text FROM #__ezrealty AS u WHERE u.published=1 AND u.custom5 !='' ORDER by u.custom5";
								$database->setquery ( $sql );
								$lbjdyz = $database->loadobjectlist ();
								if (! $database->query ()) {
									echo $database->stderr ();
								} else {
									$ancstm5 [] = mosHTML::makeOption ( "", _EZREALTY_ANYCUSTOM5 );
									if ($lbjdyz) {
										$ancstm5 = array_merge ( $ancstm5, $database->loadobjectlist () );
									}
									$lists ['custom5'] = mosHTML::selectlist ( $ancstm5, "custom5", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
								}
							}
							$soldit [] = mosHTML::makeOption ( 0, _EZREALTY_SEARCH_ANYMARKET );
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
							$lists ['sold'] = mosHTML::selectlist ( $soldit, "sold", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
							$localitylist [] = mosHTML::makeOption ( 0, _EZREALTY_NA );
							$localitylist [] = mosHTML::makeOption ( 1, _EZREALTY_CONFIG_NO );
							$localitylist [] = mosHTML::makeOption ( 2, _EZREALTY_CONFIG_YES );
							$localitylist [] = mosHTML::makeOption ( 3, _EZREALTY_HELPER_PETS );
							$lists ['pets'] = mosHTML::selectlist ( $localitylist, "pets", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
							$yesno [] = mosHTML::makeOption ( 0, _EZREALTY_CONFIG_NO );
							$yesno [] = mosHTML::makeOption ( 1, _EZREALTY_CONFIG_YES );
							$lists ['lug'] = mosHTML::selectlist ( $yesno, "lug", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
							$sany [] = mosHTML::makeOption ( "0", _EZREALTY_SEARCH_ANY );
							$sany [] = mosHTML::makeOption ( "1", _EZREALTY_SEARCH_ONLYFEAT );
							$lists ['featured'] = mosHTML::selectlist ( $sany, "featured", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
							html_ezrealty::itemsearch ( $option, $lists );
						}
					}
				}
			}
		}
	}
}

function searchresults($option) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $mosConfig_absolute_path;
	global $er_perpage;
	global $er_impnum;
	global $er_expmgmt;
	global $er_expsys;
	define ( "PAGENAV_PATH", "administrator/includes" );
	$where = "";
	$wheres = "";
	$limit = intval ( mosgetparam ( $_REQUEST, "limit", $er_perpage ) );
	$limitstart = intval ( mosgetparam ( $_REQUEST, "limitstart", 0 ) );
	$type = intval ( mosgetparam ( $_REQUEST, "type", 0 ) );
	$cid = intval ( mosgetparam ( $_REQUEST, "cid", 0 ) );
	$locid = intval ( mosgetparam ( $_REQUEST, "locid", 0 ) );
	$stid = intval ( mosgetparam ( $_REQUEST, "stid", 0 ) );
	$cnid = intval ( mosgetparam ( $_REQUEST, "cnid", 0 ) );
	$postcode = mosgetparam ( $_REQUEST, "postcode", "" );
	$mls_id = mosgetparam ( $_REQUEST, "mls_id", "" );
	$pets = intval ( mosgetparam ( $_REQUEST, "pets", 0 ) );
	$lug = intval ( mosgetparam ( $_REQUEST, "lug", 0 ) );
	$sold = mosgetparam ( $_REQUEST, "sold", "" );
	$minprice = intval ( mosgetparam ( $_REQUEST, "minprice", 0 ) );
	$maxprice = intval ( mosgetparam ( $_REQUEST, "maxprice", 0 ) );
	$minbed = mosgetparam ( $_REQUEST, "minbed", "" );
	$maxbed = mosgetparam ( $_REQUEST, "maxbed", "" );
	$bathrooms = mosgetparam ( $_REQUEST, "bathrooms", "" );
	$featured = intval ( mosgetparam ( $_REQUEST, "featured", 0 ) );
	$custom4 = mosgetparam ( $_REQUEST, "custom4", "" );
	$custom5 = mosgetparam ( $_REQUEST, "custom5", "" );
	$direction = mosgetparam ( $_REQUEST, "direction", "" );
	if ($type) {
		$where [] = " a.type=" . $type;
	}
	if ($cid) {
		$where [] = " a.cid=" . $cid;
	}
	if ($locid) {
		$where [] = " a.locid=" . $locid;
	}
	if ($stid) {
		$where [] = " a.stid=" . $stid;
	}
	if ($cnid) {
		$where [] = " a.cnid=" . $cnid;
	}
	if ($postcode) {
		$where [] = " a.postcode='" . $postcode . "'";
	}
	if ($mls_id) {
		$where [] = " a.mls_id='" . $mls_id . "'";
	}
	if ($pets) {
		$where [] = " a.pets=" . $pets;
	}
	if ($lug) {
		$where [] = " a.lug=" . $lug;
	}
	if ($sold) {
		$where [] = " a.sold='" . $sold . "'";
	}
	if ($minprice) {
		$where [] = " a.price>=" . $minprice;
	}
	if ($maxprice) {
		$where [] = " a.price<=" . $maxprice;
	}
	if ($minbed) {
		$where [] = " a.bedrooms>=" . $minbed;
	}
	if ($maxbed) {
		$where [] = " a.bedrooms<=" . $maxbed;
	}
	if ($bathrooms) {
		$where [] = " a.bathrooms=" . $bathrooms;
	}
	if ($featured) {
		$where [] = " a.featured=" . $featured;
	}
	if ($custom4) {
		$where [] = " a.custom4='" . $custom4 . "'";
	}
	if ($custom5) {
		$where [] = " a.custom5='" . $custom5 . "'";
	}
	if ($direction) {
		switch ( $direction) {
			case "ASCPRICE" :
				$order = "ORDER BY a.price ASC";
				break;
			case "DESCPRICE" :
				$order = "ORDER BY a.price DESC";
				break;
			case "DESCID" :
				$order = "ORDER BY a.id DESC";
				break;
			case "ASCID" :
				$order = "ORDER BY a.id ASC";
				break;
		}
	} else {
		$order = "ORDER BY a.id DESC";
	}

	if (isset ( $where [0] ) && 0 < count ( $where )) {
		$wheres = implode ( " AND ", $where );
		if (0 < count ( $where )) {
			$wheres = " AND " . $wheres;
		}
	}
	if ($er_expmgmt == 1) {
		if ($er_expsys == 0) {
			$query = "SELECT COUNT(*) FROM #__ezrealty AS a WHERE a.published = 1 AND a.hits < " . $er_impnum . " {$wheres} " . $order;
		} else {
			$currentdate = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ), date ( "Y" ) );
			$query = "SELECT COUNT(*) FROM #__ezrealty AS a WHERE a.published = 1 AND a.expdate>" . $currentdate . " {$wheres} " . $order;
		}
	} else {
		$query = "SELECT COUNT(*) FROM #__ezrealty AS a WHERE a.published = 1 " . $wheres . " " . $order;
	}
	$database->setquery ( $query );
	$records = $database->loadresult ();
	if ($database->geterrornum ()) {
		echo $database->stderr ();
		return false;
	}
	require_once (PAGENAV_PATH . "/pageNavigation.php");
	$pageNav = new mospagenav ( $records, $limitstart, $limit );
	if ($er_expmgmt == 1) {
		if ($er_expsys == 0) {
			$query = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published = 1 AND a.hits < " . $er_impnum . " {$wheres} ") . $order . " LIMIT " . $pageNav->limitstart . ", " . $pageNav->limit;
		} else {
			$currentdate = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ), date ( "Y" ) );
			$query = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published = '1' AND a.expdate>" . $currentdate . " {$wheres} ") . $order . " LIMIT " . $pageNav->limitstart . ", " . $pageNav->limit;
		}
	} else {
		$query = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published = '1' " . $wheres . " ") . $order . " LIMIT " . $pageNav->limitstart . ", " . $pageNav->limit;
	}
	$database->setquery ( $query );
	$rows = $database->loadobjectlist ();
	if ($database->geterrornum ()) {
		echo $database->stderr ();
		return false;
	}
	html_ezrealty::searchresults ( $option, $rows, $pageNav );
}

function quickresults($option) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $mosConfig_absolute_path;
	global $er_perpage;
	global $er_impnum;
	global $er_expmgmt;
	global $er_expsys;
	define ( "ADMINPAGENAV_PATH", "administrator/includes" );
	$where = "";
	$wheres = "";
	$limit = intval ( mosgetparam ( $_REQUEST, "limit", 10 ) );
	$limitstart = intval ( mosgetparam ( $_REQUEST, "limitstart", 0 ) );
	$type = intval ( mosgetparam ( $_REQUEST, "type", 0 ) );
	$locid = intval ( mosgetparam ( $_REQUEST, "locid5", 0 ) );
	$maxprice = intval ( mosgetparam ( $_REQUEST, "maxprice", 0 ) );
	$direction = mosgetparam ( $_REQUEST, "direction", "" );
	if ($type) {
		$where [] = " a.type=" . $type;
	}
	if ($locid) {
		$where [] = " a.locid=" . $locid;
	}
	if ($sold) {
		$where [] = " a.sold='" . $sold . "'";
	}
	if ($maxprice) {
		$where [] = " a.price<=" . $maxprice;
	}
	if ($direction) {
		switch ( $direction) {
			case "ASCPRICE" :
				$order = "ORDER BY a.price ASC";
				break;
			case "DESCPRICE" :
				$order = "ORDER BY a.price DESC";
				break;
			case "DESCID" :
				$order = "ORDER BY a.id DESC";
				break;
			case "ASCID" :
				$order = "ORDER BY a.id ASC";
				break;
		}
	} else {
		$order = "ORDER BY a.id DESC";
	}
	if (isset ( $where [0] ) && 0 < count ( $where )) {
		$wheres = implode ( " AND ", $where );
		if (0 < count ( $where )) {
			$wheres = " AND " . $wheres;
		}
	}
	if ($er_expmgmt == 1) {
		if ($er_expsys == 0) {
			$query = "SELECT COUNT(*) FROM #__ezrealty AS a WHERE a.published = 1 AND a.hits < " . $er_impnum . " {$wheres} " . $order;
		} else {
			$currentdate = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ), date ( "Y" ) );
			$query = "SELECT COUNT(*) FROM #__ezrealty AS a WHERE a.published = 1 AND a.expdate>" . $currentdate . " {$wheres} " . $order;
		}
	} else {
		$query = "SELECT COUNT(*) FROM #__ezrealty AS a WHERE a.published = 1 " . $wheres . " " . $order;
	}
	$database->setquery ( $query );
	$records = $database->loadresult ();
	if ($database->geterrornum ()) {
		echo $database->stderr ();
		return false;
	}
	require_once (ADMINPAGENAV_PATH . "/pageNavigation.php");
	$pageNav = new mospagenav ( $records, $limitstart, $limit );
	if ($er_expmgmt == 1) {
		if ($er_expsys == 0) {
			$query = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published = 1 AND a.hits < " . $er_impnum . " {$wheres} ") . $order . " LIMIT " . $pageNav->limitstart . ", " . $pageNav->limit;
		} else {
			$currentdate = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ), date ( "Y" ) );
			$query = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published = '1' AND a.expdate>" . $currentdate . " {$wheres} ") . $order . " LIMIT " . $pageNav->limitstart . ", " . $pageNav->limit;
		}
	} else {
		$query = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published = '1' " . $wheres . " ") . $order . " LIMIT " . $pageNav->limitstart . ", " . $pageNav->limit;
	}
	$database->setquery ( $query );
	$rows = $database->loadobjectlist ();
	if ($database->geterrornum ()) {
		echo $database->stderr ();
		return false;
	}
	html_ezrealty::quickresults ( $option, $rows, $pageNav );
}

function bookadmin($option, $id) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $my;
	global $ea_viewenq;
	$row = new mosezautos ( $database );
	$row->load ( $id );
	if (! $row->published) {
		mosnotauth ();
	} else if (! $ea_viewenq) {
		mosnotauth ();
	} else {
		$cat = new moscatgs ( $database );
		$cat->load ( $row->cid );
		if (! $cat->published) {
			mosnotauth ();
		} else if ($my->gid < $cat->access) {
			mosnotauth ();
		} else {
			html_ezautos::bookadmin ( $option, $row );
		}
	}
}

function sendadminmail($option) {
	global $database;
	global $Itemid;
	global $mosConfig_db;
	global $er_viewing_notify;
	global $mosConfig_live_site;
	global $ea_bizname;
	$nname = $_POST ['name'];
	$Leadss = $_POST ['email'];
	$mtlp = $_POST ['telephone'];
	$mshort_message = $_POST ['short_message'];
	$id = intval ( $_POST ['id'] );
	$val = stripslashes ( $ea_bizname ) . " " . _EZAUTOS_VEHENQREQ;
	$mVal = $nname . " (" . $Leadss . ") " . _EZAUTOS_REQUEST_VEHENQ . "\r \n";
	$mVal .= $mosConfig_live_site . ("/index.php?option=com_ezautos&Itemid=" . $Itemid . "&task=detail&id={$id} \r \n ") . _EZAUTOS_TELEPHONE . (" " . $mtlp . " \r\n ") . _EZAUTOS_MSG . (" " . $mshort_message . " ");
	$mmVal = "From: " . $er_viewing_notify . "\r\n";
	$mmVal .= "Reply-To: " . $Leadss . "\r\n";
	$mmVal .= "X-Priority: 1\r\n";
	$mmVal .= "X-MSMail-Priority: High\r\n";
	$mmVal .= "X-Mailer: EZ Autos\r\n";
	$msMail = mosmail ( $er_viewing_notify, $nname, $er_viewing_notify, $val, $mVal, 0 );
	ezemailheader ();
	ezclose ();
	ezemailfooter ();
}

function contactbusiness($option, $id) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $my;
	global $er_viewarrange;
	$row = new mosezrealty ( $database );
	$row->load ( $id );
	if (! $row->published) {
		mosnotauth ();
	} else if (! $er_viewarrange) {
		mosnotauth ();
	} else {
		$cat = new moscatgs ( $database );
		$cat->load ( $row->cid );
		if (! $cat->published) {
			mosnotauth ();
		} else if ($my->gid < $cat->access) {
			mosnotauth ();
		} else {
			html_ezrealty::contactbusiness ( $option, $row );
		}
	}
}

function sendbusinesscontact($option) {
	global $database;
	global $Itemid;
	global $mosConfig_db;
	global $er_viewing_notify;
	global $mosConfig_live_site;
	global $er_bizname;
	global $mosConfig_usecaptcha;
	define ( "CAPTCHA_PATH", "includes" );
	$stVal = 0;
	if ($mosConfig_usecaptcha == "1" && file_exists ( CAPTCHA_PATH . "/captcha.php" )) {
		session_name ( "mos_captcha" );
		session_start ();
		$rLead = mosgetparam ( $_POST, "spamstop", "" );
		if (isset ( $_SESSION ['code'] ) && $_SESSION ['code'] != "" && $_SESSION ['code'] == $rLead) {
			$stVal = 1;
		} else {
			$stVal = 2;
		}
	}
	if ($stVal != "2") {
		$sapptname = $_POST ['apptname'];
		$sapptmail = $_POST ['apptmail'];
		$mtlp = $_POST ['telephone'];
		$sdatetime = $_POST ['datetime'];
		$id = intval ( $_POST ['id'] );
		if (! check_email ( $sapptmail )) {
			echo "<script> alert('" . _EZREALTY_EMAIL_FORMAT_ERROR . "'); window.history.go(-1); </script>\n";
		} else {
			$sqlx = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, ee.ezcity_desc AS ezdesc, dd.name AS statename, bb.name AS countryname, u.mid AS mid, u.dealer_name AS dealer_name, u.dealer_company AS dealer_company, u.dealer_phone AS dealer_phone, \r\n\tu.dealer_mobile AS dealer_mobile, u.dealer_sms AS dealer_sms, u.show_sms AS show_sms, u.dealer_image AS dealer_image, u.dealer_type AS dealer_type, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published = '1' AND a.id = " . $id);
			$database->setquery ( $sqlx );
			$database->loadobject ( $thisdbmysql );
			$val = stripslashes ( $er_bizname ) . " " . _EZREALTY_INSPECTION;
			$mVal = $sapptname . " " . _EZREALTY_REQUEST_PROPVIEWING . "\r \n";
			$mVal .= _EZREALTY_MAIL_PROPADD1 . "\r\n" . _EZREALTY_MAIL_CONTACTDET . "\r\n" . _EZREALTY_MAIL_PROPADD3 . "\r\n\r\n";
			$mVal .= _EZREALTY_MAIL_EMAIL . (" " . $sapptmail . " \r\n ");
			$mVal .= _EZREALTY_TELEPHONE . (" " . $mtlp . " \r\n ");
			$mVal .= _EZREALTY_DATETIME . (" " . $sdatetime . " \r\n\r\n");
			$mVal .= _EZREALTY_MAIL_PROPADD1 . "\r\n" . _EZREALTY_MAIL_LISTDET . "\r\n" . _EZREALTY_MAIL_PROPADD3 . "\r\n\r\n";
			$mVal .= _EZREALTY_DET_ADDNUM . (" " . $id . " \r\n\r\n ");
			$mVal .= _EZREALTY_REQUEST_FOLLOWLINK . "\r \n";
			$mVal .= $mosConfig_live_site . ("/index.php?option=com_ezrealty&Itemid=" . $Itemid . "&task=detail&id={$id} \r\n\r\n");
			$mVal .= _EZREALTY_BROKENLINK_WARNING . "\r \n";
			$mVal .= _EZREALTY_MAIL_PROPADD1 . "\r\n" . _EZREALTY_MAIL_PROPADD2 . "\r\n" . _EZREALTY_MAIL_PROPADD3 . "\r \n";
			$mVal .= $thisdbmysql->unit_num . " " . $thisdbmysql->street_num . " " . $thisdbmysql->address2 . " \r\n ";
			$mVal .= $thisdbmysql->proploc . " " . $thisdbmysql->postcode . " \r\n ";
			$mVal .= $thisdbmysql->statename . " \r\n ";
			$mVal .= $thisdbmysql->countryname . " \r\n ";
			$mmVal = "From: " . $er_viewing_notify . "\r\n";
			$mmVal .= "Reply-To: " . $sapptmail . "\r\n";
			$mmVal .= "X-Priority: 1\r\n";
			$mmVal .= "X-MSMail-Priority: High\r\n";
			$mmVal .= "X-Mailer: EZ Realty Real Estate Software\r\n";
			$msMail = mosmail ( $er_viewing_notify, $sapptname, $er_viewing_notify, $val, $mVal, 0 );
			ezemailheader ();
			ezclose ();
			ezemailfooter ();
		}
	} else {
		echo "<SCRIPT> alert('" . _EZREALTY_SECURITY_FAILED . "'); window.history.go(-1);</SCRIPT>";
	}
}

function smsbusiness($option, $id) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $my;
	$row = new mosezrealty ( $database );
	$row->load ( $id );
	if (! $row->published) {
		mosnotauth ();
	} else {
		$cat = new moscatgs ( $database );
		$cat->load ( $row->cid );
		if (! $cat->published) {
			mosnotauth ();
		} else if ($my->gid < $cat->access) {
			mosnotauth ();
		} else {
			html_ezrealty::smsbusiness ( $option, $row );
		}
	}
}

function sendbusinesssms($option) {
	$user = $_GET ['user'];
	$password = $_GET ['password'];
	$to = $_GET ['to'];
	$from = $_GET ['from'];
	$text = urlencode ( $_GET ['text'] );
	$api_id = $_GET ['api_id'];
	$baseurl = "http://api.clickatell.com";
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
	ezemailheader ();
	ezclose ();
	ezemailfooter ();
}

function maillist($option, $id) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $my;
	global $er_viewmailing;
	$row = new mosezrealty ( $database );
	$row->load ( $id );
	if (! $row->published) {
		mosnotauth ();
	} else if (! $er_viewmailing) {
		mosnotauth ();
	} else {
		$cat = new moscatgs ( $database );
		$cat->load ( $row->cid );
		if (! $cat->published) {
			mosnotauth ();
		} else if ($my->gid < $cat->access) {
			mosnotauth ();
		} else {
			html_ezrealty::maillist ( $option, $row );
		}
	}
}

function joinmaillist($option) {
	global $database;
	global $my;
	global $Itemid;
	global $mosConfig_db;
	global $er_viewing_notify;
	global $mosConfig_live_site;
	global $er_bizname;
	global $mosConfig_usecaptcha;
	define ( "CAPTCHA_PATH", "includes" );
	$stVal = 0;
	if ($mosConfig_usecaptcha == "1" && file_exists ( CAPTCHA_PATH . "/captcha.php" )) {
		session_name ( "mos_captcha" );
		session_start ();
		$rLead = mosgetparam ( $_POST, "spamstop", "" );
		if (isset ( $_SESSION ['code'] ) && $_SESSION ['code'] != "" && $_SESSION ['code'] == $rLead) {
			$stVal = 1;
		} else {
			$stVal = 2;
		}
	}
	if ($stVal != "2") {
		$nname = $_POST ['name'];
		$Leadss = $_POST ['email'];
		$millistinterest = $_POST ['listinterest'];
		$id = intval ( $_POST ['id'] );
		if (! check_email ( $Leadss )) {
			echo "<script> alert('" . _EZREALTY_EMAIL_FORMAT_ERROR . "'); window.history.go(-1); </script>\n";
		} else {
			$database->setquery ( "SELECT count(*) from #__ezrealty_mail WHERE email = '" . $Leadss . "'" );
			$rrows = $database->loadresult ();
			if (0 < $rrows) {
				echo "<script> alert('" . _EZREALTY_ERROR_DUPLICATE . "'); window.history.go(-1); </script>\n";
			} else {
				$row = new mosezmail ( $database );
				if (! $row->bind ( $_POST )) {
					echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
					exit ();
				}
				$row->mailid = ( integer ) $row->mailid;
				if (! $row->check ()) {
					echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
					exit ();
				}
				mosmakehtmlsafe ( $row );
				$comps = $row->mailid < 1;
				if ($comps) {
					$row->date = date ( "Y-m-d H:i:s" );
					$row->confirmed = 1;
				}
				if (! $row->store ()) {
					echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
					exit ();
				}
				$val = stripslashes ( $er_bizname ) . " " . _EZREALTY_MAILING_TITLE;
				$mVal = $nname . " (" . $Leadss . ") " . _EZREALTY_REQUEST_MAILINGLIST . "\r \n";
				$mVal .= $mosConfig_live_site . ("/index.php?option=com_ezrealty&Itemid=" . $Itemid . "&task=detail&id={$id} \r \n ") . _EZREALTY_PROPERTY_INTERESTS . (" " . $millistinterest . " ");
				$mmVal = "From: " . $er_viewing_notify . "\r\n";
				$mmVal .= "Reply-To: " . $Leadss . "\r\n";
				$mmVal .= "X-Priority: 1\r\n";
				$mmVal .= "X-MSMail-Priority: High\r\n";
				$mmVal .= "X-Mailer: EZ Realty Real Estate Software\r\n";
				$msMail = mosmail ( $er_viewing_notify, $nname, $er_viewing_notify, $val, $mVal, 0 );
				ezemailheader ();
				ezclose ();
				ezemailfooter ();
			}
		}
	} else {
		echo "<SCRIPT> alert('" . _EZREALTY_SECURITY_FAILED . "'); window.history.go(-1);</SCRIPT>";
	}
}

function recommendlisting($option, $id) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $my;
	global $er_viewrecommend;
	$row = new mosezrealty ( $database );
	$row->load ( $id );
	if (! $row->published) {
		mosnotauth ();
	} else if (! $er_viewrecommend) {
		mosnotauth ();
	} else {
		$cat = new moscatgs ( $database );
		$cat->load ( $row->cid );
		if (! $cat->published) {
			mosnotauth ();
		} else if ($my->gid < $cat->access) {
			mosnotauth ();
		} else {
			html_ezrealty::recommendlisting ( $option, $row );
		}
	}
}

function sendrecommend($option) {
	global $database;
	global $Itemid;
	global $mosConfig_db;
	global $er_viewing_notify;
	global $mosConfig_live_site;
	global $er_bizname;
	global $mosConfig_usecaptcha;
	define ( "CAPTCHA_PATH", "includes" );
	$stVal = 0;
	if ($mosConfig_usecaptcha == "1" && file_exists ( CAPTCHA_PATH . "/captcha.php" )) {
		session_name ( "mos_captcha" );
		session_start ();
		$rLead = mosgetparam ( $_POST, "spamstop", "" );
		if (isset ( $_SESSION ['code'] ) && $_SESSION ['code'] != "" && $_SESSION ['code'] == $rLead) {
			$stVal = 1;
		} else {
			$stVal = 2;
		}
	}
	if ($stVal != "2") {
		$cmdfriendname = $_POST ['friendname'];
		$cmdfriendmail = $_POST ['friendmail'];
		$cmdfromname = $_POST ['fromname'];
		$cmdfrommail = $_POST ['frommail'];
		$id = intval ( $_POST ['id'] );
		if (! check_email ( $cmdfriendmail )) {
			echo "<script> alert('" . _EZREALTY_EMAIL_FORMAT_ERROR . "'); window.history.go(-1); </script>\n";
		} else if (! check_email ( $cmdfrommail )) {
			echo "<script> alert('" . _EZREALTY_EMAIL_FORMAT_ERROR . "'); window.history.go(-1); </script>\n";
		} else {
			$val = stripslashes ( $er_bizname ) . " " . _EZREALTY_RECCOMEND_PROP_FROM_FREND;
			$mVal = $cmdfromname . " (" . $cmdfrommail . ") " . _EZREALTY_INVITE_VIEW_PROP . "\r \n";
			$mVal .= $mosConfig_live_site . ("/index.php?option=com_ezrealty&Itemid=" . $Itemid . "&task=detail&id={$id} \r \n\r \n");
			$mVal .= _EZREALTY_BROKENLINK_WARNING . "\r \n";
			$mmVal = "From: " . $er_viewing_notify . "\r\n";
			$mmVal .= "Reply-To: " . $cmdfrommail . "\r\n";
			$mmVal .= "X-Priority: 3\r\n";
			$mmVal .= "X-MSMail-Priority: Low\r\n";
			$mmVal .= "X-Mailer: EZ Realty Real Estate Software\r\n";
			$msMail = mosmail ( $er_viewing_notify, $cmdfromname, $cmdfriendmail, $val, $mVal, 0 );
			ezemailheader ();
			ezclose ();
			ezemailfooter ();
		}
	} else {
		echo "<SCRIPT> alert('" . _EZREALTY_SECURITY_FAILED . "'); window.history.go(-1);</SCRIPT>";
	}
}

function contactseller($option, $id) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $my;
	global $er_viewarrange;
	$row = new mosezrealty ( $database );
	$row->load ( $id );
	if (! $row->published) {
		mosnotauth ();
	} else if (! $er_viewarrange) {
		mosnotauth ();
	} else {
		$cat = new moscatgs ( $database );
		$cat->load ( $row->cid );
		if (! $cat->published) {
			mosnotauth ();
		} else if ($my->gid < $cat->access) {
			mosnotauth ();
		} else {
			html_ezrealty::contactseller ( $option, $row );
		}
	}
}

function sendselleremail($option) {
	global $database;
	global $Itemid;
	global $id;
	global $mosConfig_db;
	global $er_viewing_notify;
	global $mosConfig_live_site;
	global $er_bizname;
	global $mosConfig_usecaptcha;
	define ( "CAPTCHA_PATH", "includes" );
	$stVal = 0;
	if ($mosConfig_usecaptcha == "1" && file_exists ( CAPTCHA_PATH . "/captcha.php" )) {
		session_name ( "mos_captcha" );
		session_start ();
		$rLead = mosgetparam ( $_POST, "spamstop", "" );
		if (isset ( $_SESSION ['code'] ) && $_SESSION ['code'] != "" && $_SESSION ['code'] == $rLead) {
			$stVal = 1;
		} else {
			$stVal = 2;
		}
	}
	if ($stVal != "2") {
		$id = intval ( $_POST ['id'] );
		$intvScnt = intval ( $_POST ['mid'] );
		$sapptname = $_POST ['apptname'];
		$sapptmail = $_POST ['apptmail'];
		$mtlp = $_POST ['telephone'];
		$sdatetime = $_POST ['datetime'];
		if (! check_email ( $sapptmail )) {
			echo "<script> alert('" . _EZREALTY_EMAIL_FORMAT_ERROR . "'); window.history.go(-1); </script>\n";
		} else {
			$sqlx = "SELECT a.*, cc.name AS category, ee.ezcity AS proploc, ee.ezcity_desc AS ezdesc, dd.name AS statename, bb.name AS countryname, u.mid AS mid, u.dealer_name AS dealer_name, u.dealer_company AS dealer_company, u.dealer_phone AS dealer_phone, \r\n\tu.dealer_mobile AS dealer_mobile, u.dealer_sms AS dealer_sms, u.show_sms AS show_sms, u.dealer_image AS dealer_image, u.dealer_type AS dealer_type, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg AS cc ON cc.cid = a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published = '1' AND a.id = " . $id);
			$database->setquery ( $sqlx );
			$database->loadobject ( $thisdbmysql );
			$val = stripslashes ( $er_bizname ) . " " . _EZREALTY_INSPECTION;
			$mVal = $sapptname . " " . _EZREALTY_REQUEST_PROPVIEWING . "\r \n";
			$mVal .= _EZREALTY_MAIL_PROPADD1 . "\r\n" . _EZREALTY_MAIL_CONTACTDET . "\r\n" . _EZREALTY_MAIL_PROPADD3 . "\r\n\r\n";
			$mVal .= _EZREALTY_MAIL_EMAIL . (" " . $sapptmail . " \r\n ");
			$mVal .= _EZREALTY_TELEPHONE . (" " . $mtlp . " \r\n ");
			$mVal .= _EZREALTY_DATETIME . (" " . $sdatetime . " \r\n\r\n");
			$mVal .= _EZREALTY_MAIL_PROPADD1 . "\r\n" . _EZREALTY_MAIL_LISTDET . "\r\n" . _EZREALTY_MAIL_PROPADD3 . "\r\n\r\n";
			$mVal .= _EZREALTY_DET_ADDNUM . (" " . $id . " \r\n\r\n ");
			$mVal .= _EZREALTY_REQUEST_FOLLOWLINK . "\r \n";
			$mVal .= $mosConfig_live_site . ("/index.php?option=com_ezrealty&Itemid=" . $Itemid . "&task=detail&id={$id} \r\n\r\n");
			$mVal .= _EZREALTY_BROKENLINK_WARNING . "\r \n";
			$mVal .= _EZREALTY_MAIL_PROPADD1 . "\r\n" . _EZREALTY_MAIL_PROPADD2 . "\r\n" . _EZREALTY_MAIL_PROPADD3 . "\r \n";
			$mVal .= $thisdbmysql->unit_num . " " . $thisdbmysql->street_num . " " . $thisdbmysql->address2 . " \r\n ";
			$mVal .= $thisdbmysql->proploc . " " . $thisdbmysql->postcode . " \r\n ";
			$mVal .= $thisdbmysql->statename . " \r\n ";
			$mVal .= $thisdbmysql->countryname . " \r\n ";
			$mmVal = "From: " . $er_viewing_notify . "\r\n";
			$mmVal .= "Reply-To: " . $sapptmail . "\r\n";
			$mmVal .= "X-Priority: 1\r\n";
			$mmVal .= "X-MSMail-Priority: High\r\n";
			$mmVal .= "X-Mailer: EZ Realty Real Estate Software\r\n";
			$sqlx = "SELECT dealer_email AS smail FROM #__ezrealty_profile" . ("\n WHERE mid = " . $intvScnt);
			$database->setquery ( $sqlx );
			$database->loadobject ( $thisdbmysql2 );
			$msMail = mosmail ( $er_viewing_notify, $sapptname, $thisdbmysql2->smail, $val, $mVal, 0 );
			ezemailheader ();
			ezclose ();
			ezemailfooter ();
		}
	} else {
		echo "<SCRIPT> alert('" . _EZREALTY_SECURITY_FAILED . "'); window.history.go(-1);</SCRIPT>";
	}
}

function dosms($option, $id) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $my;
	$sqlx = "SELECT a.*, cc.dealer_sms AS dealer_sms FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_profile AS cc ON cc.mid = a.owner" . ("\n WHERE a.published = '1' AND a.id = " . $id);
	$database->setquery ( $sqlx );
	$database->loadobject ( $row );
	html_ezrealty::dosms ( $option, $row );
}

function sendsms($option) {
	$to = $_GET ['to'];
	$user = $_GET ['user'];
	$password = $_GET ['password'];
	$from = $_GET ['from'];
	$text = urlencode ( $_GET ['text'] );
	$api_id = $_GET ['api_id'];
	$baseurl = "http://api.clickatell.com";
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
	ezemailheader ();
	ezclose ();
	ezemailfooter ();
}

function contactprofile($option, $id) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $my;
	$row = new mosprofile ( $database );
	$row->load ( $id );
	$sqlx = "SELECT DISTINCT * FROM #__ezrealty_profile" . ("\n WHERE mid = " . $id);
	$database->setquery ( $sqlx );
	$database->loadobject ( $row );
	if (! $row->published) {
		mosnotauth ();
	} else {
		html_ezrealty::contactprofile ( $option, $row );
	}
}

function smsprofile($option, $id) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $my;
	global $er_usesms;
	$row = new mosprofile ( $database );
	$row->load ( $id );
	$sqlx = "SELECT DISTINCT * FROM #__ezrealty_profile" . ("\n WHERE mid = " . $id);
	$database->setquery ( $sqlx );
	$database->loadobject ( $row );
	if (! $row->published) {
		mosnotauth ();
	} else if ($er_usesms == 0 && ! $row->show_sms) {
		mosnotauth ();
	} else {
		html_ezrealty::smsprofile ( $option, $row );
	}
}

function sendcontactprofile($option) {
	global $database;
	global $Itemid;
	global $mosConfig_db;
	global $mosConfig_live_site;
	global $er_viewing_notify;
	global $er_bizname;
	global $mosConfig_usecaptcha;
	define ( "CAPTCHA_PATH", "includes" );
	$stVal = 0;
	if ($mosConfig_usecaptcha == "1" && file_exists ( CAPTCHA_PATH . "/captcha.php" )) {
		session_name ( "mos_captcha" );
		session_start ();
		$rLead = mosgetparam ( $_POST, "spamstop", "" );
		if (isset ( $_SESSION ['code'] ) && $_SESSION ['code'] != "" && $_SESSION ['code'] == $rLead) {
			$stVal = 1;
		} else {
			$stVal = 2;
		}
	}
	if ($stVal != "2") {
		$intvScnt = intval ( $_POST ['mid'] );
		$nname = $_POST ['name'];
		$Leadss = $_POST ['email'];
		$mtlp = $_POST ['telephone'];
		$mshort_message = $_POST ['short_message'];
		if (! check_email ( $Leadss )) {
			echo "<script> alert('" . _EZREALTY_EMAIL_FORMAT_ERROR . "'); window.history.go(-1); </script>\n";
		} else {
			$sqlx = "SELECT distinct dealer_email AS smail FROM #__ezrealty_profile" . ("\n WHERE mid = " . $intvScnt);
			$database->setquery ( $sqlx );
			$database->loadobject ( $thisdbmysql2 );
			$val = _EZREALTY_SITE_CONTACT . " " . stripslashes ( $er_bizname );
			$mVal = $nname . " (" . $Leadss . ") " . _EZREALTY_TELEPHONE . (" " . $mtlp . " \r\n ") . _EZREALTY_MSG . (" " . $mshort_message . " ");
			$mmVal = "From: " . $er_viewing_notify . "\r\n";
			$mmVal .= "Reply-To: " . $Leadss . "\r\n";
			$mmVal .= "X-Priority: 1\r\n";
			$mmVal .= "X-MSMail-Priority: High\r\n";
			$mmVal .= "X-Mailer: EZ Realty Real Estate Software\r\n";
			$msMail = mosmail ( $er_viewing_notify, $nname, $thisdbmysql2->smail, $val, $mVal, 0 );
			ezemailheader ();
			ezclose ();
			ezemailfooter ();
		}
	} else {
		echo "<script> alert('" . _EZREALTY_SECURITY_FAILED . "'); window.history.go(-1);</script>";
	}
}

function sendprofilesms($option) {
	global $er_usesms;
	global $database;
	if ($er_usesms == 0) {
		mosnotauth ();
	} else {
		$intvScnt = $_GET ['mid'];
		$user = $_GET ['user'];
		$password = $_GET ['password'];
		$from = $_GET ['from'];
		$text = urlencode ( $_GET ['text'] );
		$api_id = $_GET ['api_id'];
		$baseurl = "http://api.clickatell.com";
		$sqlx = "SELECT dealer_sms AS smail FROM #__ezrealty_profile" . ("\n WHERE mid = " . $intvScnt);
		$database->setquery ( $sqlx );
		$database->loadobject ( $thisdbmysql2 );
		$url = "{$baseurl}/http/auth?user={$user}&password={$password}&api_id={$api_id}";
		$ret = file ( $url );
		$sess = split ( ":", $ret [0] );
		if ($sess [0] == "OK") {
			$sess_id = trim ( $sess [1] );
			$url = "{$baseurl}/http/sendmsg?session_id={$sess_id}&to={$thisdbmysql2->smail}&text={$text}&from={$from}";
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
		ezemailheader ();
		ezclose ();
		ezemailfooter ();
	}
}

function leadenquiry($option, $id) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $my;
	global $er_reglead;
	if (! $er_reglead) {
		mosnotauth ();
	} else {
		$row = new mosleads ( $database );
		$row->load ( $id );
		html_ezrealty::leadenquiry ( $option, $row );
	}
}

function sendenquiry($option) {
	global $database;
	global $Itemid;
	global $mosConfig_db;
	global $er_viewing_notify;
	global $mosConfig_live_site;
	global $er_bizname;
	global $er_reglead;
	global $mosConfig_usecaptcha;
	if (! $er_reglead) {
		mosnotauth ();
	} else {
		define ( "CAPTCHA_PATH", "includes" );
		$stVal = 0;
		if ($mosConfig_usecaptcha == "1" && file_exists ( CAPTCHA_PATH . "/captcha.php" )) {
			session_name ( "mos_captcha" );
			session_start ();
			$rLead = mosgetparam ( $_POST, "spamstop", "" );
			if (isset ( $_SESSION ['code'] ) && $_SESSION ['code'] != "" && $_SESSION ['code'] == $rLead) {
				$stVal = 1;
			} else {
				$stVal = 2;
			}
		}
		if ($stVal != "2") {
			$qenqname = $_POST ['enqname'];
			$qenqmail = $_POST ['enqmail'];
			$mtlp = $_POST ['telephone'];
			$qenqmessage = $_POST ['enqmessage'];
			$id = intval ( $_POST ['id'] );
			if (! check_email ( $qenqmail )) {
				echo "<script> alert('" . _EZREALTY_EMAIL_FORMAT_ERROR . "'); window.history.go(-1); </script>\n";
			} else {
				$val = stripslashes ( $er_bizname ) . " " . _EZREALTY_LEAD_RESPONSE;
				$mVal = $qenqname . " (" . $qenqmail . ") " . _EZREALTY_RESPONS_PROPLEAD . " " . $id . "\r \n";
				$mVal .= _EZREALTY_TELEPHONE . (" " . $mtlp . " \r\n ") . _EZREALTY_SELLER_SMS10 . ":- " . $qenqmessage;
				$mmVal = "From: " . $er_viewing_notify . "\r\n";
				$mmVal .= "Reply-To: " . $qenqmail . "\r\n";
				$mmVal .= "X-Priority: 1\r\n";
				$mmVal .= "X-MSMail-Priority: High\r\n";
				$mmVal .= "X-Mailer: EZ Realty Real Estate Software\r\n";
				$msMail = mosmail ( $er_viewing_notify, $qenqname, $er_viewing_notify, $val, $mVal, 0 );
				ezemailheader ();
				ezclose ();
				ezemailfooter ();
			}
		} else {
			echo "<SCRIPT> alert('" . _EZREALTY_SECURITY_FAILED . "'); window.history.go(-1);</SCRIPT>";
		}
	}
}

function editlocalities($option, $id) {
	global $database;
	global $my;
	global $Itemid;
	$row = new moslocality ( $database );
	$row->load ( $id );
	$sql = "SELECT stid as value, name as text FROM #__ezrealty_state ORDER by name";
	$database->setquery ( $sql );
	if (! $database->query ()) {
		echo $database->stderr ();
	} else {
		$listlistlist [] = mosHTML::makeOption ( "0", "Select State" );
		$listlistlist = array_merge ( $listlistlist, $database->loadobjectlist () );
		$lists ['stateid'] = mosHTML::selectlist ( $listlistlist, "stateid", "class=\"inputbox\" size=\"1\"", "value", "text", $row->stateid );
		html_ezrealty::editlocalities ( $option, $row, $lists );
	}
}

function savelocality($option, $id) {
	global $database;
	global $my;
	global $Itemid;
	$cezcity = $_POST ['ezcity'];
	$database->setquery ( "SELECT count(*) from #__ezrealty_locality WHERE ezcity = '" . $cezcity . "'" );
	$rrows = $database->loadresult ();
	if (0 < $rrows) {
		echo "<script> alert('" . _EZREALTY_ERROR_DUPLICATE . "'); window.history.go(-1); </script>\n";
	} else {
		$row = new moslocality ( $database );
		if (! $row->bind ( $_POST, "approved owner published" )) {
			echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
			exit ();
		}
		$row->locid = ( integer ) $row->locid;
		if (! $row->check ()) {
			echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
			exit ();
		}
		$row->ezcity = str_replace ( "'", "", $row->ezcity );
		$row->published = 1;
		if (! $row->store ()) {
			echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
			exit ();
		}
		$row->checkin ();
		$row->updateorder ( "" );
		ezemailheader ();
		ezclose ();
		echo _EZREALTY_CHECK_REFRESH;
		ezemailfooter ();
	}
}

function editstates($option, $id) {
	global $database;
	global $my;
	global $Itemid;
	$row = new mosstate ( $database );
	$row->load ( $id );
	html_ezrealty::editstates ( $option, $row );
}

function savestate($option, $id) {
	global $database;
	global $my;
	global $Itemid;
	$stname = $_POST ['name'];
	$database->setquery ( "SELECT count(*) from #__ezrealty_state WHERE name = '" . $stname . "'" );
	$rrows = $database->loadresult ();
	if (0 < $rrows) {
		echo "<script> alert('" . _EZREALTY_ERROR_DUPLICATE . "'); window.history.go(-1); </script>\n";
	} else {
		$row = new mosstate ( $database );
		if (! $row->bind ( $_POST, "approved owner published" )) {
			echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
			exit ();
		}
		$row->stid = ( integer ) $row->stid;
		if (! $row->check ()) {
			echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
			exit ();
		}
		$row->published = 1;
		if (! $row->store ()) {
			echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
			exit ();
		}
		$row->checkin ();
		ezemailheader ();
		ezclose ();
		echo _EZREALTY_CHECK_REFRESH;
		ezemailfooter ();
	}
}

function editcountrys($option, $id) {
	global $database;
	global $my;
	global $Itemid;
	$row = new moscountry ( $database );
	$row->load ( $id );
	html_ezrealty::editcountrys ( $option, $row );
}

function savecountry($option, $id) {
	global $database;
	global $my;
	global $Itemid;
	$ctname = $_POST ['name'];
	$database->setquery ( "SELECT count(*) from #__ezrealty_country WHERE name = '" . $ctname . "'" );
	$rrows = $database->loadresult ();
	if (0 < $rrows) {
		echo "<script> alert('" . _EZREALTY_ERROR_DUPLICATE . "'); window.history.go(-1); </script>\n";
	} else {
		$row = new moscountry ( $database );
		if (! $row->bind ( $_POST, "approved owner published" )) {
			echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
			exit ();
		}
		$row->cnid = ( integer ) $row->cnid;
		if (! $row->check ()) {
			echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
			exit ();
		}
		$row->published = 1;
		if (! $row->store ()) {
			echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
			exit ();
		}
		$row->checkin ();
		ezemailheader ();
		ezclose ();
		echo _EZREALTY_CHECK_REFRESH;
		ezemailfooter ();
	}
}

function dealerresults($option) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $my;
	global $mosConfig_absolute_path;
	global $er_perpage;
	global $er_useprofile;
	global $er_profaccess;
	if (! $er_useprofile) {
		echo _EZREALTY_NOPROFACCESS;
	} else if ($my->gid < $er_profaccess) {
		echo _EZREALTY_PROFACCESS_DENIED;
	} else {
		define ( "ADMINPAGENAV_PATH", "administrator/includes" );
		$where = "";
		$wheres = "";
		$limit = intval ( mosgetparam ( $_REQUEST, "limit", $er_perpage ) );
		$limitstart = intval ( mosgetparam ( $_REQUEST, "limitstart", 0 ) );
		$dealer_locality = mosgetparam ( $_REQUEST, "dealer_locality", "" );
		if ($dealer_locality) {
			$where [] = " dealer_locality='" . $dealer_locality . "'";
		}
		$order = "ORDER BY dealer_name ASC";
		if (isset ( $where [0] ) && 0 < count ( $where )) {
			$wheres = implode ( " AND ", $where );
			if (0 < count ( $where )) {
				$wheres = " AND " . $wheres;
			}
		}
		$query = "SELECT COUNT(*) FROM #__ezrealty_profile WHERE published = 1 " . $wheres . " " . $order;
		$database->setquery ( $query );
		$records = $database->loadresult ();
		if ($database->geterrornum ()) {
			echo $database->stderr ();
			return false;
		}
		require_once (ADMINPAGENAV_PATH . "/pageNavigation.php");
		$pageNav = new mospagenav ( $records, $limitstart, $limit );
		$query = "SELECT * FROM #__ezrealty_profile WHERE published = 1 " . $wheres . " " . $order . " LIMIT " . $pageNav->limitstart . ", " . $pageNav->limit;
		$database->setquery ( $query );
		$rows = $database->loadobjectlist ();
		if ($database->geterrornum ()) {
			echo $database->stderr ();
			return false;
		}
		html_ezrealty::dealerresults ( $option, $rows, $pageNav );
	}
}

function displayprofiles($option, $limit, $limitstart) {
	global $database;
	global $my;
	global $mainframe;
	global $Itemid;
	global $mosConfig_list_limit;
	global $mosConfig_absolute_path;
	global $er_perpage;
	global $er_useprofile;
	global $er_profaccess;
	if (! $er_useprofile) {
		echo _EZREALTY_NOPROFACCESS;
	} else if ($my->gid < $er_profaccess) {
		echo _EZREALTY_PROFACCESS_DENIED;
	} else {
		define ( "PAGENAV_PATH", "administrator/includes" );
		$query = "SELECT COUNT(mid) as numitems\n FROM #__ezrealty_profile\n WHERE published = '1'\n ORDER BY dealer_name ASC";
		$database->setquery ( $query );
		$counter = $database->loadobjectlist ();
		$total = $counter [0]->numitems;
		$limit = $limit ? $limit : $er_perpage;
		if ($total <= $limit) {
			$limitstart = 0;
		}
		require_once (PAGENAV_PATH . "/pageNavigation.php");
		$pageNav = new mospagenav ( $total, $limitstart, $limit );
		$query = "SELECT * FROM #__ezrealty_profile\n WHERE published=1\n ORDER BY dealer_name ASC" . ("\n LIMIT " . $limitstart . ", {$limit}");
		$database->setquery ( $query );
		$rows = $database->loadobjectlist ();
		$sql = "SELECT DISTINCT d.dealer_locality as value, d.dealer_locality as text FROM #__ezrealty_profile AS d WHERE d.dealer_locality !='' ORDER by d.dealer_locality ASC";
		$database->setquery ( $sql );
		if (! $database->query ()) {
			echo $database->stderr ();
		} else {
			$dlocalitylist [] = mosHTML::makeOption ( "0", _EZREALTY_PROFILE_SEARCHALL );
			$dlocalitylist = array_merge ( $dlocalitylist, $database->loadobjectlist () );
			$lists ['dealerloc'] = mosHTML::selectlist ( $dlocalitylist, "dealer_locality", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
			html_ezrealty::displayprofiles ( $option, $rows, $pageNav, $total, $lists );
		}
	}
}

function showprofile($option, $id) {
	global $database;
	global $mainframe;
	global $my;
	global $Itemid;
	global $er_useprofile;
	global $er_profaccess;
	if (! $er_useprofile) {
		echo _EZREALTY_NOPROFACCESS;
	} else if ($my->gid < $er_profaccess) {
		echo _EZREALTY_PROFACCESS_DENIED;
	} else {
		$row = new mosprofile ( $database );
		$row->load ( $id );
		$sqlx = "SELECT DISTINCT * FROM #__ezrealty_profile" . ("\n WHERE mid = " . $id);
		$database->setquery ( $sqlx );
		$database->loadobject ( $row );
		html_ezrealty::showprofile ( $option, $row );
	}
}

function dealerlistings($option, $id, $limit, $limitstart) {
	global $database;
	global $my;
	global $mainframe;
	global $Itemid;
	global $mosConfig_list_limit;
	global $mosConfig_absolute_path;
	global $er_impnum;
	global $er_expmgmt;
	global $er_expsys;
	global $er_perpage;
	global $er_pageorder;
	global $er_useprofile;
	global $er_profaccess;
	if (! $er_useprofile) {
		echo _EZREALTY_NOPROFACCESS;
	} else if ($my->gid < $er_profaccess) {
		echo _EZREALTY_PROFACCESS_DENIED;
	} else {
		define ( "PAGENAV_PATH", "administrator/includes" );
		$query = "SELECT dealer_name FROM #__ezrealty_profile" . ("\n WHERE mid=" . $id);
		$database->setquery ( $query );
		$dealername = $database->loadresult ();
		if ($er_expmgmt == 1) {
			if ($er_expsys == 0) {
				$query = "SELECT COUNT(a.id) as numitems\n FROM #__ezrealty AS a\n LEFT JOIN #__ezrealty_profile as c on c.mid=a.owner" . ("\n WHERE a.published = '1' AND a.owner = " . $id . " AND a.hits<{$er_impnum}") . ("\n ORDER BY " . $er_pageorder);
				$database->setquery ( $query );
				$counter = $database->loadobjectlist ();
				$total = $counter [0]->numitems;
				$limit = $limit ? $limit : $er_perpage;
				if ($total <= $limit) {
					$limitstart = 0;
				}
				require_once (PAGENAV_PATH . "/pageNavigation.php");
				$pageNav = new mospagenav ( $total, $limitstart, $limit );
				$query = "SELECT a.*, c.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg as c on c.cid=a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published=1 AND a.owner=" . $id . " AND a.hits<{$er_impnum}") . ("\n ORDER BY " . $er_pageorder) . ("\n LIMIT " . $limitstart . ", {$limit}");
				$database->setquery ( $query );
				$rows = $database->loadobjectlist ();
			} else {
				$currentdate = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ), date ( "Y" ) );
				$query = "SELECT COUNT(a.id) as numitems\n FROM #__ezrealty AS a\n LEFT JOIN #__ezrealty_profile as c on c.mid=a.owner" . ("\n WHERE a.published = '1' AND a.owner = " . $id . " AND a.expdate>{$currentdate}") . ("\n ORDER BY " . $er_pageorder);
				$database->setquery ( $query );
				$counter = $database->loadobjectlist ();
				$total = $counter [0]->numitems;
				$limit = $limit ? $limit : $er_perpage;
				if ($total <= $limit) {
					$limitstart = 0;
				}
				require_once (PAGENAV_PATH . "/pageNavigation.php");
				$pageNav = new mospagenav ( $total, $limitstart, $limit );
				$query = "SELECT a.*, c.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg as c on c.cid=a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published=1 AND a.owner=" . $id . " AND a.expdate>{$currentdate}") . ("\n ORDER BY " . $er_pageorder) . ("\n LIMIT " . $limitstart . ", {$limit}");
				$database->setquery ( $query );
				$rows = $database->loadobjectlist ();
			}
		} else {
			$query = "SELECT COUNT(a.id) as numitems\n FROM #__ezrealty AS a\n LEFT JOIN #__ezrealty_profile as c on c.mid=a.owner" . ("\n WHERE a.published = '1' AND a.owner = " . $id) . ("\n ORDER BY " . $er_pageorder);
			$database->setquery ( $query );
			$counter = $database->loadobjectlist ();
			$total = $counter [0]->numitems;
			$limit = $limit ? $limit : $er_perpage;
			if ($total <= $limit) {
				$limitstart = 0;
			}
			require_once (PAGENAV_PATH . "/pageNavigation.php");
			$pageNav = new mospagenav ( $total, $limitstart, $limit );
			$query = "SELECT a.*, c.name AS category, ee.ezcity AS proploc, dd.name AS statename, bb.name AS countryname, u.logo_image AS logo_image FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_catg as c on c.cid=a.cid\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid\n LEFT JOIN #__ezrealty_profile AS u ON u.mid = a.owner" . ("\n WHERE a.published=1 AND a.owner=" . $id) . ("\n ORDER BY " . $er_pageorder) . ("\n LIMIT " . $limitstart . ", {$limit}");
			$database->setquery ( $query );
			$rows = $database->loadobjectlist ();
		}
		html_ezrealty::dealerlistings ( $option, $rows, $id, $dealername, $pageNav, $total );
	}
}

function editprofile($option, $id) {
	global $database;
	global $mainframe;
	global $my;
	global $Itemid;
	global $mosConfig_absolute_path;
	global $mosConfig_live_site;
	if (! $my->id) {
		mosnotauth ();
	} else {
		$row = new mosprofile ( $database );
		$row->load ( $id );
		$sqlx = "SELECT DISTINCT * FROM #__ezrealty_profile" . ("\n WHERE mid = " . $my->id);
		$database->setquery ( $sqlx );
		$database->loadobject ( $row );
		$lists ['show_sms'] = mosHTML::yesnoradiolist ( "show_sms", "class=\"inputbox\"", $row->show_sms );
		$lists ['show_addy'] = mosHTML::yesnoradiolist ( "show_addy", "class=\"inputbox\"", $row->show_addy );
		$listitit [] = mosHTML::makeOption ( 0, _EZREALTY_PROFILE_TYPE1 );
		$listitit [] = mosHTML::makeOption ( 1, _EZREALTY_LISTER_AGENT );
		$listitit [] = mosHTML::makeOption ( 2, _EZREALTY_LISTER_OWNER );
		$listitit [] = mosHTML::makeOption ( 3, _EZREALTY_LISTER_BROKER );
		$lists ['dealer_type'] = mosHTML::selectlist ( $listitit, "dealer_type", "class=\"inputbox\" size=\"1\"", "value", "text", $row->dealer_type );
		$mapFiles = mosreaddirectory ( $mosConfig_absolute_path . "/components/com_ezrealty/profiles/" );
		$imagedropdown = array (mosHTML::makeOption ( "", _EZREALTY_VLDET_CHOOSENEW ) );
		foreach ( $mapFiles as $file ) {
			if (eregi ( "bmp|gif|jpg|png", $file )) {
				$imagedropdown [] = mosHTML::makeOption ( $file );
			}
		}
		$list ['dealer_image'] = mosHTML::selectlist ( $imagedropdown, "dealer_image", "class=\"inputbox\" size=\"1\" onchange=\"javascript:if (document.forms[0].dealer_image.options[selectedIndex].value!='') {document.dealer_imageprev.src='" . $mosConfig_live_site . "/components/com_ezrealty/profiles/' + document.forms[0].dealer_image.options[selectedIndex].value} else {document.dealer_imageprev.src='../images/M_images/blank.png'}\"", "value", "text", $row->dealer_image );
		$list ['logo_image'] = mosHTML::selectlist ( $imagedropdown, "logo_image", "class=\"inputbox\" size=\"1\" onchange=\"javascript:if (document.forms[0].logo_image.options[selectedIndex].value!='') {document.logo_imageprev.src='" . $mosConfig_live_site . "/components/com_ezrealty/profiles/' + document.forms[0].dealer_image.options[selectedIndex].value} else {document.logo_imageprev.src='../images/M_images/blank.png'}\"", "value", "text", $row->logo_image );
		html_ezrealty::editprofile ( $option, $row, $lists, $list );
	}
}

function saveprof() {
	global $database;
	global $my;
	global $Itemid;
	$row = new mosprofile ( $database );
	$msg = _EZREALTY_GENERIC_SAVED;
	if (! $row->bind ( $_POST, "approved owner published" )) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->prid = ( integer ) $row->prid;
	$row->mid = ( integer ) $my->id;
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
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->checkin ();
	mosredirect ( sefreltoabs ( "index.php?option=com_ezrealty&Itemid=" . $Itemid . "&task=editprofile" ), _EZREALTY_PROFILE_SAVED );
}

function myezpanel($option) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $my;
	global $er_stateloc;
	global $er_memlistings;
	global $er_expmgmt;
	global $er_expsys;
	global $er_impnum;
	if (! $er_memlistings) {
		mosnotauth ();
	} else {
		if ($er_expmgmt == 1) {
			if ($er_expsys == 0) {
				$sqlx = "SELECT a.*, ee.ezcity AS ezcity, dd.name AS statename, bb.name AS countryname FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid" . ("\n WHERE a.owner='" . $my->id . "' AND a.hits<{$er_impnum}") . "\n ORDER BY a.id DESC";
				$database->setquery ( $sqlx );
				$arr = $database->loadobjectlist ();
			} else {
				$vTime = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ), date ( "Y" ) );
				$sqlx = "SELECT a.*, ee.ezcity AS ezcity, dd.name AS statename, bb.name AS countryname FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid" . ("\n WHERE a.owner='" . $my->id . "' AND a.expdate>{$vTime}") . "\n ORDER BY a.id DESC";
				$database->setquery ( $sqlx );
				$arr = $database->loadobjectlist ();
			}
		} else {
			$sqlx = "SELECT a.*, ee.ezcity AS ezcity, dd.name AS statename, bb.name AS countryname FROM #__ezrealty as a\n LEFT JOIN #__ezrealty_locality AS ee ON ee.locid = a.locid\n LEFT JOIN #__ezrealty_state AS dd ON dd.stid = a.stid\n LEFT JOIN #__ezrealty_country AS bb ON bb.cnid = a.cnid" . ("\n WHERE a.owner='" . $my->id . "'") . "\n ORDER BY a.id DESC";
			$database->setquery ( $sqlx );
			$arr = $database->loadobjectlist ();
		}
		if (! $my->id) {
			mosnotauth ();
		} else {
			$sqlx = "SELECT content FROM #__ezrealty_content\n WHERE contid=2";
			$database->setquery ( $sqlx );
			$lbjsqw = $database->loadresult ();
			if ($er_stateloc == 1) {
				$sql = "SELECT st.stid as value, st.name as text FROM #__ezrealty_state AS st WHERE st.published=1 ORDER by st.name";
				$database->setquery ( $sql );
				if (! $database->query ()) {
					echo $database->stderr ();
				} else {
					$statelist [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELSTATE );
					$statelist = array_merge ( $statelist, $database->loadobjectlist () );
					$lists ['stid'] = mosHTML::selectlist ( $statelist, "stid", "class=\"searchbox\" id=\"stid\" size=\"1\" onchange=\"getDropLocList(this,0)\" ", "value", "text", "" );
					$sql = "SELECT loc.locid as value, loc.ezcity as text FROM #__ezrealty_locality AS loc WHERE loc.published=1 ORDER by loc.ezcity";
					$database->setquery ( $sql );
					if (! $database->query ()) {
						echo $database->stderr ();
					} else {
						$sLoc [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELLOC );
						$lists ['locid'] = mosHTML::selectlist ( $sLoc, "locid", "class=\"searchbox\" id=\"locid\" size=\"1\" ", "value", "text", "" );
					}
				}
			}
			if ($er_stateloc == 2) {
				$sql = "SELECT lo.locid as value, lo.ezcity as text FROM #__ezrealty_locality AS lo WHERE lo.published=1 ORDER by lo.ezcity";
				$database->setquery ( $sql );
				if (! $database->query ()) {
					echo $database->stderr ();
				} else {
					$selLoct [] = mosHTML::makeOption ( "0", _EZREALTY_DETAILS_SELLOC );
					$selLoct = array_merge ( $selLoct, $database->loadobjectlist () );
					$lists ['locid2'] = mosHTML::selectlist ( $selLoct, "locid", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
				}
			}
			$sql = "SELECT cn.cnid as value, cn.name as text FROM #__ezrealty_country AS cn WHERE cn.published = 1 ORDER by cn.name";
			$database->setquery ( $sql );
			if (! $database->query ()) {
				echo $database->stderr ();
			} else {
				$selLoctC [] = mosHTML::makeOption ( "0", _EZREALTY_CHECK_COUNTRY );
				$selLoctC = array_merge ( $selLoctC, $database->loadobjectlist () );
				$lists ['cnid'] = mosHTML::selectlist ( $selLoctC, "cnid", "class=\"searchbox\" size=\"1\"", "value", "text", "" );
				html_ezrealty::myezpanel ( $option, $arr, $lists, $lbjsqw );
			}
		}
	}
}

function editproperty($option, $id) {
	global $database;
	global $mainframe;
	global $Itemid;
	global $my;
	global $er_memlistings;
	global $er_maxlistings;
	global $er_imagedirectory;
	global $mosConfig_absolute_path;
	global $mosConfig_live_site;
	global $er_payonly;
	global $er_paypal;
	global $er_stateloc;
	global $er_usefrequit1;
	global $er_usefrequit2;
	global $er_usefrequit3;
	global $er_usefrequit4;
	global $er_usefrequit5;
	global $er_usefrequit6;
	global $er_usefrequit7;
	global $er_usetype1;
	global $er_usetype2;
	global $er_usetype3;
	global $er_usetype4;
	global $er_usetype5;
	global $er_usetype6;
	global $er_usemarket1;
	global $er_usemarket2;
	global $er_usemarket3;
	global $er_usemarket4;
	global $er_usemarket5;
	global $er_usemarket6;
	global $er_stateloc;
	global $er_country;
	if (! $er_memlistings) {
		mosnotauth ();
	} else {
		$sqlx = "select count(mid) from #__ezrealty_profile" . ("\n WHERE mid = '" . $my->id . "'");
		$database->setquery ( $sqlx );
		$cnt_prp = $database->loadresult ();
		if ($cnt_prp != 1) {
			echo _EZREALTY_ERROR_NOPROFILE;
		} else {
			$sqlx = "select count(id) from #__ezrealty" . ("\n WHERE owner = '" . $my->id . "'") . "\n AND premium = '0'";
			$database->setquery ( $sqlx );
			$cnt_prm = $database->loadresult ();
			$row = new mosezrealty ( $database );
			$row->load ( $id );
			if ($cnt_prm == $er_maxlistings && ! $row->id) {
				mosnotauth ();
			} else if ($er_payonly && $er_paypal && ! $row->id) {
				mosnotauth ();
			} else if (! $my->id) {
				mosnotauth ();
			} else {
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
						$lists ['stid'] = mosHTML::selectlist ( $statelist, "stid", "class=\"inputbox\" id=\"stid3\" size=\"1\" onchange=\"getDropLocList3(this,1)\" ", "value", "text", $row->stid );
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
							$lists ['locid'] = mosHTML::selectlist ( $sLoc, "locid", "class=\"inputbox\" id=\"locid3\" size=\"1\" READONLY ", "value", "text", $row->locid );
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
					$sql = "SELECT cnid as value, name as text FROM #__ezrealty_country WHERE published=1 ORDER by name";
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
						$lists ['openhouse'] = mosHTML::yesnoradiolist ( "openhouse", "class=\"inputbox\"", $row->openhouse );
						$lists ['published'] = mosHTML::yesnoradiolist ( "published", "class=\"inputbox\"", $row->published );
						$lists ['featured'] = mosHTML::yesnoradiolist ( "featured", "class=\"inputbox\"", $row->featured );
						$lists ['showprice'] = mosHTML::yesnoradiolist ( "showprice", "class=\"inputbox\"", $row->showprice );
						$lists ['viewad'] = mosHTML::yesnoradiolist ( "viewad", "class=\"inputbox\"", $row->viewad );
						$lists ['viewbooking'] = mosHTML::yesnoradiolist ( "viewbooking", "class=\"inputbox\"", $row->viewbooking );
						$lists ['extra1'] = mosHTML::yesnoradiolist ( "extra1", "class=\"inputbox\"", $row->extra1 );
						$lists ['extra2'] = mosHTML::yesnoradiolist ( "extra2", "class=\"inputbox\"", $row->extra2 );
						$lists ['extra3'] = mosHTML::yesnoradiolist ( "extra3", "class=\"inputbox\"", $row->extra3 );
						$lists ['extra4'] = mosHTML::yesnoradiolist ( "extra4", "class=\"inputbox\"", $row->extra4 );
						$lists ['extra5'] = mosHTML::yesnoradiolist ( "extra5", "class=\"inputbox\"", $row->extra5 );
						$lists ['extra6'] = mosHTML::yesnoradiolist ( "extra6", "class=\"inputbox\"", $row->extra6 );
						$lists ['extra7'] = mosHTML::yesnoradiolist ( "extra7", "class=\"inputbox\"", $row->extra7 );
						$lists ['extra8'] = mosHTML::yesnoradiolist ( "extra8", "class=\"inputbox\"", $row->extra8 );
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
	}
}

function savelist() {
	global $database;
	global $mainframe;
	global $mosConfig_absolute_path;
	global $Itemid;
	global $my;
	global $er_approve;
	global $er_viewing_notify;
	global $er_notification;
	global $er_imagedirectory;
	global $mosConfig_mailfrom;
	global $mosConfig_sitename;
	global $mosConfig_offset;
	global $er_expfig;
	$row = new mosezrealty ( $database );
	if (! $row->bind ( $_POST, "approved owner published" )) {
		echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
		exit ();
	}
	$row->id = ( integer ) $row->id;
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
	$row->owner = $my->id;
	if ($er_approve) {
		$row->published = 0;
	} else {
		$row->published = 1;
	}
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
	if ($er_notification) {
		$val = $mosConfig_sitename . " " . _EZREALTY_YOUVEGOTMAIL;
		$mmVal = "From: " . $mosConfig_sitename . "\r\n";
		$mmVal .= "Reply-To: " . $mosConfig_mailfrom . "\r\n";
		$mmVal .= "X-Priority: 1\r\n";
		$mmVal .= "X-MSMail-Priority: High\r\n";
		$mmVal .= "X-Mailer: EZ Realty\r\n";
		$mVal .= _EZREALTY_SUB_MSG . "\r\n\r\n";
		$mVal .= _EZREALTY_DET_ADDNUM . (" " . $row->id . " \r\n\r\n ");
		mosmail ( $mosConfig_mailfrom, $mosConfig_sitename, $er_viewing_notify, $val, $mVal, 0 );
	}
	mosredirect ( sefreltoabs ( "index.php?option=com_ezrealty&amp;Itemid=" . $Itemid . "&amp;task=ezpanel" ), _EZREALTY_UPDATEDONE );
}

function deletelisting($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $Itemid;
	global $er_imagedirectory;
	if (! $my->id) {
		mosnotauth ();
	} else {
		$database->setquery ( "select owner from #__ezrealty where id=" . intval ( $id ) );
		$ddoIt = $database->loadresult ();
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
			mosredirect ( sefreltoabs ( "index.php?option=com_ezrealty&amp;Itemid=" . $Itemid . "&amp;task=ezpanel" ), _EZREALTY_LISTING_DELETED );
		}
	}
}

function countcont($cat) {
	global $database;
	global $er_impnum;
	global $er_expmgmt;
	global $er_expsys;
	if ($er_expmgmt == 1) {
		if ($er_expsys == 0) {
			$sqlx = "SELECT count(id) as count FROM #__ezrealty WHERE cid = " . $cat . " AND published=1 AND hits<{$er_impnum}";
		} else {
			$vTime = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ), date ( "Y" ) );
			$sqlx = "SELECT count(id) as count FROM #__ezrealty WHERE cid = " . $cat . " AND published=1 AND expdate>{$vTime}";
		}
	} else {
		$sqlx = "SELECT count(id) as count FROM #__ezrealty WHERE cid = " . $cat . " AND published=1";
	}
	$database->setquery ( $sqlx );
	$querry = $database->query ();
	$rs = mysql_fetch_row ( $querry );
	return $rs [0];
}

function showsuccess($option) {
	global $database;
	global $my;
	global $mainframe;
	$sqlx = "SELECT content FROM #__ezrealty_content\n WHERE contid=4";
	$database->setquery ( $sqlx );
	$content = $database->loadresult ();
	html_ezrealty::showsuccess ( $option, $content );
}

function showcancel($option) {
	global $database;
	global $my;
	global $mainframe;
	$sqlx = "SELECT content FROM #__ezrealty_content\n WHERE contid=5";
	$database->setquery ( $sqlx );
	$contentcncl = $database->loadresult ();
	html_ezrealty::showcancel ( $option, $contentcncl );
}

function viewterms($option) {
	global $database;
	global $my;
	global $mainframe;
	$sqlx = "SELECT content FROM #__ezrealty_content\n WHERE contid=3";
	$database->setquery ( $sqlx );
	$contentvterm = $database->loadresult ();
	html_ezrealty::viewterms ( $option, $contentvterm );
}

function deleteimage1($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $Itemid;
	global $er_imagedirectory;
	if (! $my->id) {
		mosnotauth ();
	} else {
		$database->setquery ( "select owner from #__ezrealty where id=" . intval ( $id ) );
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
			mosredirect ( sefreltoabs ( "index.php?option=com_ezrealty&amp;Itemid=" . $Itemid . "&amp;task=edit&amp;id={$id}" ), _EZREALTY_LISTING_IMGDELETED );
		}
	}
}

function deleteimage2($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $Itemid;
	global $er_imagedirectory;
	if (! $my->id) {
		mosnotauth ();
	} else {
		$database->setquery ( "select owner from #__ezrealty where id=" . intval ( $id ) );
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
			mosredirect ( sefreltoabs ( "index.php?option=com_ezrealty&amp;Itemid=" . $Itemid . "&amp;task=edit&amp;id={$id}" ), _EZREALTY_LISTING_IMGDELETED );
		}
	}
}

function deleteimage3($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $Itemid;
	global $er_imagedirectory;
	if (! $my->id) {
		mosnotauth ();
	} else {
		$database->setquery ( "select owner from #__ezrealty where id=" . intval ( $id ) );
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
			mosredirect ( sefreltoabs ( "index.php?option=com_ezrealty&amp;Itemid=" . $Itemid . "&amp;task=edit&amp;id={$id}" ), _EZREALTY_LISTING_IMGDELETED );
		}
	}
}

function deleteimage4($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $Itemid;
	global $er_imagedirectory;
	if (! $my->id) {
		mosnotauth ();
	} else {
		$database->setquery ( "select owner from #__ezrealty where id=" . intval ( $id ) );
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
			mosredirect ( sefreltoabs ( "index.php?option=com_ezrealty&amp;Itemid=" . $Itemid . "&amp;task=edit&amp;id={$id}" ), _EZREALTY_LISTING_IMGDELETED );
		}
	}
}

function deleteimage5($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $Itemid;
	global $er_imagedirectory;
	if (! $my->id) {
		mosnotauth ();
	} else {
		$database->setquery ( "select owner from #__ezrealty where id=" . intval ( $id ) );
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
			mosredirect ( sefreltoabs ( "index.php?option=com_ezrealty&amp;Itemid=" . $Itemid . "&amp;task=edit&amp;id={$id}" ), _EZREALTY_LISTING_IMGDELETED );
		}
	}
}

function deleteimage6($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $Itemid;
	global $er_imagedirectory;
	if (! $my->id) {
		mosnotauth ();
	} else {
		$database->setquery ( "select owner from #__ezrealty where id=" . intval ( $id ) );
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
			mosredirect ( sefreltoabs ( "index.php?option=com_ezrealty&amp;Itemid=" . $Itemid . "&amp;task=edit&amp;id={$id}" ), _EZREALTY_LISTING_IMGDELETED );
		}
	}
}

function deleteimage7($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $Itemid;
	global $er_imagedirectory;
	if (! $my->id) {
		mosnotauth ();
	} else {
		$database->setquery ( "select owner from #__ezrealty where id=" . intval ( $id ) );
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
			mosredirect ( sefreltoabs ( "index.php?option=com_ezrealty&amp;Itemid=" . $Itemid . "&amp;task=edit&amp;id={$id}" ), _EZREALTY_LISTING_IMGDELETED );
		}
	}
}

function deleteimage8($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $Itemid;
	global $er_imagedirectory;
	if (! $my->id) {
		mosnotauth ();
	} else {
		$database->setquery ( "select owner from #__ezrealty where id=" . intval ( $id ) );
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
			mosredirect ( sefreltoabs ( "index.php?option=com_ezrealty&amp;Itemid=" . $Itemid . "&amp;task=edit&amp;id={$id}" ), _EZREALTY_LISTING_IMGDELETED );
		}
	}
}

function deleteimage9($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $Itemid;
	global $er_imagedirectory;
	if (! $my->id) {
		mosnotauth ();
	} else {
		$database->setquery ( "select owner from #__ezrealty where id=" . intval ( $id ) );
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
			mosredirect ( sefreltoabs ( "index.php?option=com_ezrealty&amp;Itemid=" . $Itemid . "&amp;task=edit&amp;id={$id}" ), _EZREALTY_LISTING_IMGDELETED );
		}
	}
}

function deleteimage10($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $Itemid;
	global $er_imagedirectory;
	if (! $my->id) {
		mosnotauth ();
	} else {
		$database->setquery ( "select owner from #__ezrealty where id=" . intval ( $id ) );
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
			mosredirect ( sefreltoabs ( "index.php?option=com_ezrealty&amp;Itemid=" . $Itemid . "&amp;task=edit&amp;id={$id}" ), _EZREALTY_LISTING_IMGDELETED );
		}
	}
}

function deleteimage11($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $Itemid;
	global $er_imagedirectory;
	if (! $my->id) {
		mosnotauth ();
	} else {
		$database->setquery ( "select owner from #__ezrealty where id=" . intval ( $id ) );
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
			mosredirect ( sefreltoabs ( "index.php?option=com_ezrealty&amp;Itemid=" . $Itemid . "&amp;task=edit&amp;id={$id}" ), _EZREALTY_LISTING_IMGDELETED );
		}
	}
}

function deleteimage12($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $Itemid;
	global $er_imagedirectory;
	if (! $my->id) {
		mosnotauth ();
	} else {
		$database->setquery ( "select owner from #__ezrealty where id=" . intval ( $id ) );
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
			mosredirect ( sefreltoabs ( "index.php?option=com_ezrealty&amp;Itemid=" . $Itemid . "&amp;task=edit&amp;id={$id}" ), _EZREALTY_LISTING_IMGDELETED );
		}
	}
}

function deleteprofileimage($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $Itemid;
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
		mosredirect ( sefreltoabs ( "index.php?option=com_ezrealty&amp;Itemid=" . $Itemid . "&amp;task=editprofile&amp;id={$id}" ), _EZREALTY_LISTING_IMGDELETED );
	}
}

function deletelogoimage($id, $option) {
	global $database;
	global $my;
	global $mosConfig_absolute_path;
	global $Itemid;
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
		mosredirect ( sefreltoabs ( "index.php?option=com_ezrealty&amp;Itemid=" . $Itemid . "&amp;task=editprofile&amp;id={$id}" ), _EZREALTY_LISTING_IMGDELETED );
	}
}

function upgrade1($option) {
	global $database;
	global $mosConfig_live_site;
	global $mosConfig_sitename;
	global $mosConfig_mailfrom;
	global $er_payonly;
	global $postmode;
	global $currency;
	global $premium_cost;
	global $checkmail;
	global $er_expfig;
	global $er_expdate;
	global $er_viewing_notify;
	global $er_bizname;
	if ($postmode == 1) {
		$domain = "www.paypal.com";
	} else if ($postmode == 2) {
		$domain = "www.sandbox.paypal.com";
	}
	$req = "cmd=_notify-validate";
	foreach ( $GLOBALS ['_POST'] as $key => $value ) {
		$value = urlencode ( stripslashes ( $value ) );
		$req .= "&" . $key . "={$value}";
	}
	$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
	$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$header .= "Content-Length: " . strlen ( $req ) . "\r\n\r\n";
	$fp = fsockopen ( $domain, 80, &$errno, &$errstr, 30 );
	$item_name = $_POST ['item_name'];
	$id = $_POST ['item_number'];
	$payment_status = $_POST ['payment_status'];
	$mc_gross = $_POST ['mc_gross'];
	$mc_currency = $_POST ['mc_currency'];
	$txn_id = $_POST ['txn_id'];
	$business = $_POST ['business'];
	$receiver_email = $_POST ['receiver_email'];
	$payer_email = $_POST ['payer_email'];
	$memo = $_POST ['memo'];
	$txn_type = $_POST ['txn_type'];
	$pending_reason = $_POST ['pending_reason'];
	$reason_code = $_POST ['reason_code'];
	$payment_date = $_POST ['payment_date'];
	$payment_type = $_POST ['payment_type'];
	$first_name = $_POST ['first_name'];
	$last_name = $_POST ['last_name'];
	$owner = $_POST ['option_selection1'];
	if ($fp) {
		fputs ( $fp, $header . $req );
		while ( ! feof ( $fp ) ) {
			$res = fgets ( $fp, 1024 );
			if (strcmp ( $res, "VERIFIED" ) == 0) {
				if (strcmp ( $payment_status, "Completed" ) == 0 && ($mc_currency = $currency && ($mc_gross = $receiver_email == $checkmail))) {
					$row = new mosezrealty ( $database );
					if (! $row->bind ( $_POST )) {
						echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
						exit ();
					}
					if (! $row->check ()) {
						echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
						exit ();
					}
					$row->lastupdate = mktime ();
					$row->owner = $owner;
					$row->premium = 1;
					$row->featured = 0;
					$row->published = 0;
					$row->listdate = date ( "Y-m-d" );
					$row->expdate = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ) + $er_expfig, date ( "Y" ) );
					if (! $row->store ()) {
						echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
						exit ();
					}
					$row->checkin ();
					$val = _EZREALTY_IPN_SUBJECT . " " . $item_name;
					$mVal = _EZREALTY_IPN_MSG1 . " " . $item_name . "\r \n";
					$mVal .= _EZREALTY_IPN_MSG2 . " " . $first_name . " " . $last_name . "\r \n";
					$mVal .= _EZREALTY_IPN_MSG3 . " " . $id . "\r \n";
					$mmVal = "From: " . $er_viewing_notify . "\r\n";
					$mmVal .= "Reply-To: " . $er_viewing_notify . "\r\n";
					$mmVal .= "X-Priority: 1\r\n";
					$mmVal .= "X-MSMail-Priority: High\r\n";
					$mmVal .= "X-Mailer: EZ Realty Real Estate Software\r\n";
					mosmail ( $er_viewing_notify, $er_bizname, $er_viewing_notify, $val, $mVal, 0 );
				} else {
					echo "An error occurred while attempting to update your listing. Please contact the site admin regarding this and quote your PayPal transaction number.";
				}
			} else if (strcmp ( $res, "INVALID" ) == 0) {
				mosmail ( $er_viewing_notify, $er_bizname, $er_viewing_notify, "INVALID IPN", "{$res}\n {$req}", 0 );
			}
		}
		fclose ( $fp );
	}
}

function upgrade2($option) {
	global $database;
	global $mosConfig_live_site;
	global $mosConfig_sitename;
	global $mosConfig_mailfrom;
	global $er_payonly;
	global $postmode;
	global $currency;
	global $premium_cost;
	global $checkmail;
	global $er_expfig;
	global $er_expdate;
	global $er_viewing_notify;
	global $er_bizname;
	if ($postmode == 1) {
		$domain = "www.paypal.com";
	} else if ($postmode == 2) {
		$domain = "www.sandbox.paypal.com";
	}
	$req = "cmd=_notify-validate";
	foreach ( $GLOBALS ['_POST'] as $key => $value ) {
		$value = urlencode ( stripslashes ( $value ) );
		$req .= "&" . $key . "={$value}";
	}
	$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
	$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$header .= "Content-Length: " . strlen ( $req ) . "\r\n\r\n";
	$fp = fsockopen ( $domain, 80, $errno, $errstr, 30 );
	$item_name = $_POST ['item_name'];
	$id = $_POST ['item_number'];
	$payment_status = $_POST ['payment_status'];
	$mc_gross = $_POST ['mc_gross'];
	$mc_currency = $_POST ['mc_currency'];
	$txn_id = $_POST ['txn_id'];
	$business = $_POST ['business'];
	$receiver_email = $_POST ['receiver_email'];
	$payer_email = $_POST ['payer_email'];
	$memo = $_POST ['memo'];
	$txn_type = $_POST ['txn_type'];
	$pending_reason = $_POST ['pending_reason'];
	$reason_code = $_POST ['reason_code'];
	$payment_date = $_POST ['payment_date'];
	$payment_type = $_POST ['payment_type'];
	$first_name = $_POST ['first_name'];
	$last_name = $_POST ['last_name'];
	$owner = $_POST ['option_selection1'];
	if ($fp) {
		fputs ( $fp, $header . $req );
		while ( ! feof ( $fp ) ) {
			$res = fgets ( $fp, 1024 );
			if (strcmp ( $res, "VERIFIED" ) == 0) {
				if (strcmp ( $payment_status, "Completed" ) == 0 && ($mc_currency = $currency && ($mc_gross = $receiver_email == $checkmail))) {
					$rrtime = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ) + $er_expfig, date ( "Y" ) );
					$database->setquery ( "UPDATE #__ezrealty" . ("\n SET premium = '1', featured = '0', hits = '0', expdate = " . $rrtime) . ("\n WHERE id = '" . $id . "'") );
					if (! $database->query ()) {
						exit ( $database->stderr () );
					}
					$val = _EZREALTY_IPN_SUBJECT . " " . $item_name;
					$mVal = _EZREALTY_IPN_MSG1 . " " . $item_name . "\r \n";
					$mVal .= _EZREALTY_IPN_MSG2 . " " . $first_name . " " . $last_name . "\r \n";
					$mVal .= _EZREALTY_IPN_MSG3 . " " . $id . "\r \n";
					$mmVal = "From: " . $er_viewing_notify . "\r\n";
					$mmVal .= "Reply-To: " . $er_viewing_notify . "\r\n";
					$mmVal .= "X-Priority: 1\r\n";
					$mmVal .= "X-MSMail-Priority: High\r\n";
					$mmVal .= "X-Mailer: EZ Realty Real Estate Software\r\n";
					mosmail ( $er_viewing_notify, $er_bizname, $er_viewing_notify, $val, $mVal, 0 );
				} else {
					echo "An error occurred while attempting to update your listing. Please contact the site admin regarding this and quote your PayPal transaction number.";
				}
			} else if (strcmp ( $res, "INVALID" ) == 0) {
				mosmail ( $er_viewing_notify, $er_bizname, $er_viewing_notify, "INVALID IPN", "{$res}\n {$req}", 0 );
			}
		}
		fclose ( $fp );
	}
}

function upgrade3($option) {
	global $database;
	global $mosConfig_live_site;
	global $mosConfig_sitename;
	global $mosConfig_mailfrom;
	global $er_payonly;
	global $postmode;
	global $currency;
	global $premium_cost;
	global $checkmail;
	global $er_expfig;
	global $er_expdate;
	global $er_viewing_notify;
	global $er_bizname;
	if ($postmode == 1) {
		$domain = "www.paypal.com";
	} else if ($postmode == 2) {
		$domain = "www.sandbox.paypal.com";
	}
	$req = "cmd=_notify-validate";
	foreach ( $GLOBALS ['_POST'] as $key => $value ) {
		$value = urlencode ( stripslashes ( $value ) );
		$req .= "&" . $key . "={$value}";
	}
	$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
	$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$header .= "Content-Length: " . strlen ( $req ) . "\r\n\r\n";
	$fp = fsockopen ( $domain, 80, &$errno, &$errstr, 30 );
	$item_name = $_POST ['item_name'];
	$id = $_POST ['item_number'];
	$payment_status = $_POST ['payment_status'];
	$mc_gross = $_POST ['mc_gross'];
	$mc_currency = $_POST ['mc_currency'];
	$txn_id = $_POST ['txn_id'];
	$business = $_POST ['business'];
	$receiver_email = $_POST ['receiver_email'];
	$payer_email = $_POST ['payer_email'];
	$memo = $_POST ['memo'];
	$txn_type = $_POST ['txn_type'];
	$pending_reason = $_POST ['pending_reason'];
	$reason_code = $_POST ['reason_code'];
	$payment_date = $_POST ['payment_date'];
	$payment_type = $_POST ['payment_type'];
	$first_name = $_POST ['first_name'];
	$last_name = $_POST ['last_name'];
	$owner = $_POST ['option_selection1'];
	if ($fp) {
		fputs ( $fp, $header . $req );
		while ( ! feof ( $fp ) ) {
			$res = fgets ( $fp, 1024 );
			if (strcmp ( $res, "VERIFIED" ) == 0) {
				if (strcmp ( $payment_status, "Completed" ) == 0 && ($mc_currency = $currency && ($mc_gross = $receiver_email == $checkmail))) {
					$row = new mosezrealty ( $database );
					if (! $row->bind ( $_POST )) {
						echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
						exit ();
					}
					if (! $row->check ()) {
						echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
						exit ();
					}
					$row->lastupdate = mktime ();
					$row->owner = $owner;
					$row->premium = 1;
					$row->featured = 1;
					$row->published = 0;
					$row->listdate = date ( "Y-m-d" );
					$row->expdate = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ) + $er_expfig, date ( "Y" ) );
					if (! $row->store ()) {
						echo "<script> alert('" . $row->geterror () . "'); window.history.go(-1); </script>\n";
						exit ();
					}
					$row->checkin ();
					$val = _EZREALTY_IPN_SUBJECT . " " . $item_name;
					$mVal = _EZREALTY_IPN_MSG1 . " " . $item_name . "\r \n";
					$mVal .= _EZREALTY_IPN_MSG2 . " " . $first_name . " " . $last_name . "\r \n";
					$mVal .= _EZREALTY_IPN_MSG3 . " " . $id . "\r \n";
					$mmVal = "From: " . $er_viewing_notify . "\r\n";
					$mmVal .= "Reply-To: " . $er_viewing_notify . "\r\n";
					$mmVal .= "X-Priority: 1\r\n";
					$mmVal .= "X-MSMail-Priority: High\r\n";
					$mmVal .= "X-Mailer: EZ Realty Real Estate Software\r\n";
					mosmail ( $er_viewing_notify, $er_bizname, $er_viewing_notify, $val, $mVal, 0 );
				} else {
					echo "An error occurred while attempting to update your listing. Please contact the site admin regarding this and quote your PayPal transaction number.";
				}
			} else if (strcmp ( $res, "INVALID" ) == 0) {
				mosmail ( $er_viewing_notify, $er_bizname, $er_viewing_notify, "INVALID IPN", "{$res}\n {$req}", 0 );
			}
		}
		fclose ( $fp );
	}
}

function upgrade4($option) {
	global $database;
	global $mosConfig_live_site;
	global $mosConfig_sitename;
	global $mosConfig_mailfrom;
	global $er_payonly;
	global $postmode;
	global $currency;
	global $premium_cost;
	global $checkmail;
	global $er_expfig;
	global $er_expdate;
	global $er_viewing_notify;
	global $er_bizname;
	if ($postmode == 1) {
		$domain = "www.paypal.com";
	} else if ($postmode == 2) {
		$domain = "www.sandbox.paypal.com";
	}
	$req = "cmd=_notify-validate";
	foreach ( $GLOBALS ['_POST'] as $key => $value ) {
		$value = urlencode ( stripslashes ( $value ) );
		$req .= "&" . $key . "={$value}";
	}
	$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
	$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$header .= "Content-Length: " . strlen ( $req ) . "\r\n\r\n";
	$fp = fsockopen ( $domain, 80, &$errno, &$errstr, 30 );
	$item_name = $_POST ['item_name'];
	$id = $_POST ['item_number'];
	$payment_status = $_POST ['payment_status'];
	$mc_gross = $_POST ['mc_gross'];
	$mc_currency = $_POST ['mc_currency'];
	$txn_id = $_POST ['txn_id'];
	$business = $_POST ['business'];
	$receiver_email = $_POST ['receiver_email'];
	$payer_email = $_POST ['payer_email'];
	$memo = $_POST ['memo'];
	$txn_type = $_POST ['txn_type'];
	$pending_reason = $_POST ['pending_reason'];
	$reason_code = $_POST ['reason_code'];
	$payment_date = $_POST ['payment_date'];
	$payment_type = $_POST ['payment_type'];
	$first_name = $_POST ['first_name'];
	$last_name = $_POST ['last_name'];
	$owner = $_POST ['option_selection1'];
	if ($fp) {
		fputs ( $fp, $header . $req );
		while ( ! feof ( $fp ) ) {
			$res = fgets ( $fp, 1024 );
			if (strcmp ( $res, "VERIFIED" ) == 0) {
				if (strcmp ( $payment_status, "Completed" ) == 0 && ($mc_currency = $currency && ($mc_gross = $receiver_email == $checkmail))) {
					$rrtime = mktime ( 0, 0, 0, date ( "m" ), date ( "d" ) + $er_expfig, date ( "Y" ) );
					$database->setquery ( "UPDATE #__ezrealty" . ("\n SET premium = '1', featured = '1', hits = '0', expdate = " . $rrtime) . ("\n WHERE id = '" . $id . "'") );
					if (! $database->query ()) {
						exit ( $database->stderr () );
					}
					$val = _EZREALTY_IPN_SUBJECT . " " . $item_name;
					$mVal = _EZREALTY_IPN_MSG1 . " " . $item_name . "\r \n";
					$mVal .= _EZREALTY_IPN_MSG2 . " " . $first_name . " " . $last_name . "\r \n";
					$mVal .= _EZREALTY_IPN_MSG3 . " " . $id . "\r \n";
					$mmVal = "From: " . $er_viewing_notify . "\r\n";
					$mmVal .= "Reply-To: " . $er_viewing_notify . "\r\n";
					$mmVal .= "X-Priority: 1\r\n";
					$mmVal .= "X-MSMail-Priority: High\r\n";
					$mmVal .= "X-Mailer: EZ Realty Real Estate Software\r\n";
					mosmail ( $er_viewing_notify, $er_bizname, $er_viewing_notify, $val, $mVal, 0 );
				} else {
					echo "An error occurred while attempting to update your listing. Please contact the site admin regarding this and quote your PayPal transaction number.";
				}
			} else if (strcmp ( $res, "INVALID" ) == 0) {
				mosmail ( $er_viewing_notify, $er_bizname, $er_viewing_notify, "INVALID IPN", "{$res}\n {$req}", 0 );
			}
		}
		fclose ( $fp );
	}
}

function ezpowered() {
	global $Itemid;
	global $mosConfig_absolute_path;
	global $ez_license;

	echo "\r\n<div align=\"center\">\r\n<table>\r\n\t<tr>\r\n\t\t<td align=\"center\"><br /><span class=\"small\">Powered by EZ Realty 5.1.6</span></td>\r\n\t</tr>\r\n</table>\r\n</div>\r\n\r\n\r\n";

}

?>
