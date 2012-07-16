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



defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

require_once( $mainframe->getPath( 'toolbar_html' ) );
require_once( $mainframe->getPath( 'toolbar_default' ) );

switch ($task) {


	case 'newmlist':
	case 'editmlist':
	case 'editmlistA':
    menuezrealty::EDIT_MLIST_MENU();
		break;

	case 'editcontent':
	case 'editcontentA':
    menuezrealty::EDIT_CONTENT_MENU();
		break;

	case 'new':
	case 'edit':
	case 'editA':
    menuezrealty::EDIT_MENU();
		break;

	case 'newcatg':
	case 'editcatg':
	case 'editcatgA':
		menuezrealty::EDIT_CTG_MENU();
		break;

	case 'newloc':
	case 'editloc':
	case 'editlocA':
		menuezrealty::EDIT_LOC_MENU();
		break;

	case 'newstate':
	case 'editstate':
	case 'editstateA':
		menuezrealty::EDIT_STATE_MENU();
		break;

	case 'newcountry':
	case 'editcountry':
	case 'editcountryA':
		menuezrealty::EDIT_COUNTRY_MENU();
		break;

	case 'newprc':
	case 'editprc':
	case 'editprcA':
		menuezrealty::EDIT_PRC_MENU();
		break;

	case 'newroom':
	case 'editroom':
	case 'editroomA':
		menuezrealty::EDIT_ROOM_MENU();
		break;

	case 'newleads':
	case 'editleads':
	case 'editleadsA':
		menuezrealty::EDIT_LEAD_MENU();
		break;

	case 'newprof':
	case 'editprof':
	case 'editprofA':
		menuezrealty::EDIT_PROFILE_MENU();
		break;


  case "settings":
    menuezrealty::CONFIG_MENU();
    break;

  case "mlist":
    menuezrealty::MLIST_MENU();
    break;

  case "content":
    menuezrealty::CONTENT_MENU();
    break;

  case "prices":
    menuezrealty::PRICES_MENU();
    break;

  case "leads":
    menuezrealty::LEADS_MENU();
    break;

	case "profiles":
		menuezrealty::PROFILE_MENU();
		break;

  case "localities":
    menuezrealty::LOCALITIES_MENU();
    break;

  case "states":
    menuezrealty::STATES_MENU();
    break;

  case "countrys":
    menuezrealty::COUNTRYS_MENU();
    break;

  case "rooms":
    menuezrealty::ROOMS_MENU();
    break;

  case "showcatg":
    menuezrealty::CTG_MENU();
    break;

	case "show":
		menuezrealty::LISTINGS_MENU();
		break;

	case "migrateusers":
		menuezrealty::MIGRATE_MENU();
		break;


	default:
		break;

}
?>