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

class menuezrealty {


	function EDIT_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'save' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancel', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancel' );
		}
		mosMenuBar::endTable();
	}


	function EDIT_MLIST_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'savemlist' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelmlist', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelmlist' );
		}
		mosMenuBar::endTable();
	}


	function EDIT_CONTENT_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'savecontent' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelcontent', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelcontent' );
		}
		mosMenuBar::endTable();
	}


	function EDIT_CTG_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'savecatg' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelcatg', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelcatg' );
		}
		mosMenuBar::endTable();
	}


	function EDIT_LOC_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'saveloc' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelloc', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelloc' );
		}
		mosMenuBar::endTable();
	}


	function EDIT_STATE_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'savestate' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelstate', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelstate' );
		}
		mosMenuBar::endTable();
	}


	function EDIT_COUNTRY_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'savecountry' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelcountry', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelcountry' );
		}
		mosMenuBar::endTable();
	}


	function EDIT_PRC_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'saveprc' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelprc', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelprc' );
		}
		mosMenuBar::endTable();
	}


	function EDIT_ROOM_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'saveroom' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelroom', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelroom' );
		}
		mosMenuBar::endTable();
	}


	function EDIT_LEAD_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'saveleads' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelleads', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelleads' );
		}
		mosMenuBar::endTable();
	}


	function EDIT_PROFILE_MENU() {
		global $id;

		mosMenuBar::startTable();
		mosMenuBar::save( 'saveprof' );
		mosMenuBar::spacer();
		if ( $id ) {
			// for existing content items the button is renamed `close`
			mosMenuBar::cancel( 'cancelprof', 'Close' );
		} else {
			mosMenuBar::cancel( 'cancelprof' );
		}
		mosMenuBar::endTable();
	}




  function CTG_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::publishList("publishcatg");
    mosMenuBar::unpublishList('unpublishcatg');
    mosMenuBar::addNewX('newcatg');
    mosMenuBar::editListX('editcatg');
    mosMenuBar::deleteList('','removecatg' );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back_f2.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }
  
  function MLIST_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::addNewX('newmlist');
    mosMenuBar::editListX('editmlist');
    mosMenuBar::deleteList('','removemlist' );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'exportmlist', 'archive.png', 'archive_f2.png', 'XML Export', false );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back_f2.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }
  
  function CONTENT_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::editListX('editcontent');
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back_f2.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }
  
  function LISTINGS_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::publishList('publish');
    mosMenuBar::unpublishList('unpublish');
    mosMenuBar::addNewX('new');
    mosMenuBar::editListX('edit');
    mosMenuBar::spacer();
	mosMenuBar::custom( 'copy', 'copy.png', 'copy_f2.png', 'Copy', false );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back_f2.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }

  function PRICES_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::publishList( 'publishprc' );
    mosMenuBar::unpublishList( 'unpublishprc' );
    mosMenuBar::addNewX("newprc");
    mosMenuBar::editListX("editprc");
    mosMenuBar::deleteList( '', 'removeprc' );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back_f2.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }

  function LEADS_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::publishList("publishleads");
    mosMenuBar::unpublishList('unpublishleads');
    mosMenuBar::addNewX('newleads');
    mosMenuBar::editListX('editleads');
    mosMenuBar::deleteList( '', 'removeleads' );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back_f2.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }

  function LOCALITIES_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::publishList( 'publishloc' );
    mosMenuBar::unpublishList( 'unpublishloc' );
    mosMenuBar::addNewX('newloc');
    mosMenuBar::editListX('editloc');
    mosMenuBar::deleteList( '', 'removeloc' );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back_f2.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }

  function STATES_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::publishList( 'publishstate' );
    mosMenuBar::unpublishList( 'unpublishstate' );
    mosMenuBar::addNewX('newstate');
    mosMenuBar::editListX('editstate');
    mosMenuBar::deleteList( '', 'removestate' );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back_f2.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }

  function COUNTRYS_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::publishList( 'publishcountry' );
    mosMenuBar::unpublishList( 'unpublishcountry' );
    mosMenuBar::addNewX('newcountry');
    mosMenuBar::editListX('editcountry');
    mosMenuBar::deleteList( '', 'removecountry' );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back_f2.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }

  function ROOMS_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::publishList( 'publishroom' );
    mosMenuBar::unpublishList( 'unpublishroom' );
    mosMenuBar::addNewX('newroom');
    mosMenuBar::editListX('editroom');
    mosMenuBar::deleteList( '', 'removeroom' );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back_f2.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }


  function PROFILE_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::addNewX('newprof');
    mosMenuBar::editListX('editprof');
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back_f2.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }

  function CONFIG_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::save( 'savesettings'  );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back_f2.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }

  function MIGRATE_MENU() {
    mosMenuBar::startTable();
    mosMenuBar::spacer();
	mosMenuBar::custom( 'domigrate', 'archive.png', 'archive_f2.png', 'Migrate Users', false );
    mosMenuBar::spacer();
	mosMenuBar::custom( 'default', 'back_f2.png', 'back_f2.png', 'cPanel', false );
    mosMenuBar::spacer();
    mosMenuBar::endTable();
  }


}


?>