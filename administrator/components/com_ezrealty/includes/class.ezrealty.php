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


class mosezrealty extends mosDBTable {

var $id=null;
var $type=null;
var $cid=null;
var $locid=null;
var $stid=null;
var $cnid=null;
var $agent_id=null;
var $mls_id=null;
var $viewad=null;
var $viewbooking=null;
var $bookinglink=null;
var $unit_num=null;
var $street_num=null;
var $address1=null;
var $address2=null;
var $postcode=null;
var $county=null;
var $price=null;
var $showprice=null;
var $freq=null;
var $bond=null;
var $priceview=null;
var $age=null;
var $landtype=null;
var $frontage=null;
var $depth=null;
var $bedrooms=null;
var $totalrooms=null;
var $livingarea=null;
var $bathrooms=null;
var $parking=null;
var $mapref=null;
var $declat=null;
var $declong=null;
var $vtour=null;
var $feature=null;
var $com_feature=null;
var $adline=null;
var $propdesc=null;
var $smalldesc=null;
var $image1=null;
var $image2=null;
var $image3=null;
var $image4=null;
var $image5=null;
var $image6=null;
var $image7=null;
var $image8=null;
var $image9=null;
var $image10=null;
var $image11=null;
var $image12=null;
var $ctown=null;
var $ctport=null;
var $schooldist=null;
var $preschool=null;
var $primaryschool=null;
var $highschool=null;
var $university=null;
var $hofees=null;
var $custom1=null;
var $custom2=null;
var $custom3=null;
var $custom4=null;
var $custom5=null;
var $pool=null;
var $fplace=null;
var $bbq=null;
var $gazebo=null;
var $lug=null;
var $bir=null;
var $heating=null;
var $airco=null;
var $shops=null;
var $schools=null;
var $elevator=null;
var $pets=null;
var $extra1=null;
var $extra2=null;
var $extra3=null;
var $extra4=null;
var $extra5=null;
var $extra6=null;
var $extra7=null;
var $extra8=null;
var $openhouse=null;
var $ohouse_desc=null;
var $takings=null;
var $returns=null;
var $netprofit=null;
var $bustype=null;
var $bussubtype=null;
var $stock=null;
var $fixtures=null;
var $fittings=null;
var $squarefeet=null;
var $percentoffice=null;
var $percentwarehouse=null;
var $loadingfac=null;
var $fencing=null;
var $rainfall=null;
var $soiltype=null;
var $grazing=null;
var $cropping=null;
var $irrigation=null;
var $waterresources=null;
var $carryingcap=null;
var $storage=null;
var $services=null;
var $listdate=null;
var $lastupdate=null;
var $expdate=null;
var $hits=null;
var $sold=null;
var $published=null;
var $checked_out=null;
var $checked_out_time=null;
var $editor=null;
var $owner=null;
var $premium=null;
var $featured=null;
var $metadesc=null;
var $metakey=null;

  function mosezrealty( &$db ) {
    $this->mosDBTable( '#__ezrealty', 'id', $db );
  }
function check() {
	$this->id = intval( $this->id );
	return true;
	}
}
  

class mosLeads extends mosDBTable {

var $lid=null;
var $status=null;
var $lead_name=null;
var $hphone=null;
var $wphone=null;
var $mobile=null;
var $fax=null;
var $email=null;
var $cid=null;
var $locid=null;
var $stid=null;
var $cnid=null;
var $ezcity=null;
var $type=null;
var $bedrooms=null;
var $bathrooms=null;
var $budget=null;
var $source=null;
var $comments=null;
var $notes=null;
var $date=null;
var $checked_out=null;
var $checked_out_time=null;
var $editor=null;
var $published=null;

function mosLeads( &$db ) {
	$this->mosDBTable( '#__ezrealty_leads', 'lid', $db );
	}
function check() {
	$this->lid = intval( $this->lid );
	return true;
	}
}


class mosCatgs extends mosDBTable {

var $cid=null;
var $name=null;
var $description=null;
var $image=null;
var $published=null;
var $ordering=null;
var $access=null;
var $checked_out=null;
var $checked_out_time=null;
var $editor=null;

function mosCatgs( &$db ) {
	$this->mosDBTable( '#__ezrealty_catg', 'cid', $db );
	}
function check() {
	$this->cid = intval( $this->cid );
	return true;
	}
}


class mosPrice extends mosDBTable {

var $pid=null;
var $range=null;
var $display=null;
var $published=null;
var $ordering=null;
var $checked_out=null;
var $checked_out_time=null;
var $editor=null;

	function mosPrice( &$db ) {

		$this->mosDBTable( '#__ezrealty_price', 'pid', $db );

  }
function check() {
	$this->pid = intval( $this->pid );
	return true;
	}
}


class mosLocality extends mosDBTable {

var $locid=null;
var $stateid=null;
var $ezcity=null;
var $ezcity_desc=null;
var $published=null;
var $checked_out=null;
var $checked_out_time=null;
var $editor=null;

	function mosLocality( &$db ) {

		$this->mosDBTable( '#__ezrealty_locality', 'locid', $db );

  }
function check() {
	$this->locid = intval( $this->locid );
	return true;
	}
}


class mosCountry extends mosDBTable {

var $cnid=null;
var $name=null;
var $published=null;
var $checked_out=null;
var $checked_out_time=null;
var $editor=null;

	function mosCountry( &$db ) {

		$this->mosDBTable( '#__ezrealty_country', 'cnid', $db );

  }
function check() {
	$this->cnid = intval( $this->cnid );
	return true;
	}
}


class mosState extends mosDBTable {

var $stid=null;
var $name=null;
var $published=null;
var $checked_out=null;
var $checked_out_time=null;
var $editor=null;

	function mosState( &$db ) {

		$this->mosDBTable( '#__ezrealty_state', 'stid', $db );

  }
function check() {
	$this->stid = intval( $this->stid );
	return true;
	}
}


class mosRoom extends mosDBTable {

var $bid=null;
var $number=null;
var $published=null;
var $ordering=null;
var $checked_out=null;
var $checked_out_time=null;
var $editor=null;

	function mosRoom( &$db ) {

		$this->mosDBTable( '#__ezrealty_room', 'bid', $db );

  }
function check() {
	$this->bid = intval( $this->bid );
	return true;
	}
}


class mosProfile extends mosDBTable {

	var	$prid=null;
	var	$mid=null;
	var $dealer_name=null;
	var $dealer_company=null;
	var $dealer_type=null;
	var $dealer_info=null;
	var $dealer_address1=null;
	var $dealer_address2=null;
	var $dealer_locality=null;
	var $dealer_pcode=null;
	var $dealer_state=null;
	var $dealer_country=null;
	var $show_addy=null;
	var $dealer_declat=null;
	var $dealer_declong=null;
	var $dealer_phone=null;
	var $dealer_fax=null;
	var $dealer_mobile=null;
	var $dealer_sms=null;
	var $show_sms=null;
	var $dealer_email=null;
	var $dealer_msn=null;
	var $dealer_skype=null;
	var $dealer_ymsgr=null;
	var $dealer_icq=null;
	var $dealer_web=null;
	var $dealer_blog=null;
	var $dealer_image=null;
	var $logo_image=null;
	var $published=null;
	var $checked_out=null;
	var $checked_out_time=null;
	var $editor=null;

function mosProfile( &$db ) {
	$this->mosDBTable( '#__ezrealty_profile', 'prid', $db );
	}
function check() {
	$this->prid = intval( $this->prid );
	return true;
	}
}


class mosLightbox extends mosDBTable {

var $llid=null;
var $uid=null;
var $propid=null;
var $date=null;

	function mosLightbox( &$db ) {

		$this->mosDBTable( '#__ezrealty_lightbox', 'llid', $db );

  }
function check() {
	$this->llid = intval( $this->llid );
	return true;
	}
}



class mosezContent extends mosDBTable {

	var $contid=null;
	var $title=null;
	var $content=null;
	var $checked_out=null;
	var $checked_out_time=null;
	var $editor=null;

	function mosezContent( &$db ) {

		$this->mosDBTable( '#__ezrealty_content', 'contid', $db );

  }
function check() {
	$this->contid = intval( $this->contid );
	return true;
	}
}




class mosezMail extends mosDBTable {

	var $mailid=null;
	var $name=null;
	var $email=null;
	var $confirmed=null;
	var $date=null;

	function mosezMail( &$db ) {

		$this->mosDBTable( '#__ezrealty_mail', 'mailid', $db );

  }
function check() {
	$this->mailid = intval( $this->mailid );
	return true;
	}
}




/**************************************************\
 REALLY BASIC FUNCTION TO CHECK VALID EMAIL FORMATS
\**************************************************/


function check_email($str){

    //returns 1 if valid email, 0 if not

    if(preg_match("/[\w\.\-]+@\w+[\w\.\-]*?\.\w{1,4}/", $str))


        return 1;

    else

        return 0;
}



/**************************************************\
            AJAX STUFF FOR DROPDOWN LISTS
\**************************************************/


function includeAjax($option){
global $mosConfig_live_site;
?>
<script type="text/javascript" src="<?php echo $mosConfig_live_site;?>/components/com_ezrealty/library/ajax/ajax.js"></script>
<?php
}


?>