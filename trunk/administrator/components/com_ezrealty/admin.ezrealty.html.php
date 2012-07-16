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


class HTML_ezrealty {







function migrateUsers( $option, &$rows, &$pageNav  ) {

?>

<form action="index2.php" method="post" name="adminForm">

	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><?php echo _EZREALTY_MIGRATE_MEMBERS;?></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th align="left"><?php echo _EZREALTY_SELLER_SMS7;?></th>
		</tr>
		<?php
			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
				$row = &$rows[$i];

			$row->id 	= $row->id;
			$link 		= 'index2.php?option=com_ezrealty&task=domigrate&id='. $row->id;

			?>
		<tr class="<?php echo "row$k"; ?>">




				<td width="20"><?php echo mosHTML::idBox( $i, $row->id ); ?>
				</td>

			<td align="left"><?php echo $row->name; ?></td>
			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>
<?php


}



/* *********************************************************************************
          						  SHOW THE CPANEL
   ********************************************************************************* */


function cPanel( $option, $totalprofs ) {
	global $mosConfig_live_site;

$tabs = new mosTabs(0);

?>

<link rel="stylesheet" href="components/com_ezrealty/includes/cpanel.css" type="text/css" />

  <table cellpadding="4" cellspacing="1" border="0" width="100%">
  <tr bgcolor="#990000">

    <td width="100%" align="center" >
<font color="#ffffff" size="6" face="impact">Property Manager cPanel</font>
</td>
  </tr>
</table>
<table cellpadding="1" cellspacing="0" border="0" width="100%" class="menudottedline">  
  <tr  class="menubackgr" >
    <td width="100%" align="right" class="smallgrey">
Version 5.1.6 Stable &nbsp;&nbsp;
    </td>
  </tr>
  </table>

<table class="adminform">
	<tr>
		<td width="55%" valign="top">

			<div id="cpanel">

				<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezrealty&amp;task=show">
					<img src="components/com_ezrealty/images/icon1.png" alt="<?php echo _EZREALTY_CPANEL_PROPERTYMGR;?>" align="top" border="0" /><span><?php echo _EZREALTY_CPANEL_PROPERTYMGR;?></span>
				</a>
			</div>
		</div>

				<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezrealty&amp;task=showcatg">
					<img src="components/com_ezrealty/images/icon2.png" alt="<?php echo _EZREALTY_CPANEL_MGCAT;?>" align="top" border="0" /><span><?php echo _EZREALTY_CPANEL_MGCAT;?></span>
				</a>
			</div>
		</div>

			<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezrealty&amp;task=localities">
					<img src="components/com_ezrealty/images/icon17.png" alt="<?php echo _EZREALTY_CPANEL_LOCALITIES;?>" align="top" border="0" /><span><?php echo _EZREALTY_CPANEL_LOCALITIES;?></span>
				</a>
			</div>
		</div>

			<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezrealty&amp;task=states">
					<img src="components/com_ezrealty/images/icon3.png" alt="<?php echo _EZREALTY_CPANEL_STATES;?>" align="top" border="0" /><span><?php echo _EZREALTY_CPANEL_STATES;?></span>
				</a>
			</div>
		</div>

			<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezrealty&amp;task=countrys">
					<img src="components/com_ezrealty/images/icon4.png" alt="<?php echo _EZREALTY_CPANEL_COUNTRIES;?>" align="top" border="0" /><span><?php echo _EZREALTY_CPANEL_COUNTRIES;?></span>
				</a>
			</div>
		</div>

				<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezrealty&amp;task=rooms">
					<img src="components/com_ezrealty/images/icon18.png" alt="<?php echo _EZREALTY_CPANEL_BEDROOMS;?>" align="top" border="0" /><span><?php echo _EZREALTY_CPANEL_BEDROOMS;?></span>
				</a>
			</div>
		</div>

				<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezrealty&amp;task=prices">
					<img src="components/com_ezrealty/images/icon6.png" alt="<?php echo _EZREALTY_CPANEL_MGPRICE;?>" align="top" border="0" /><span><?php echo _EZREALTY_CPANEL_MGPRICE;?></span>
				</a>
			</div>
		</div>

<?php if ( $totalprofs > 0 ) { ?>

				<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezrealty&amp;task=profiles">
					<img src="components/com_ezrealty/images/icon7.png" alt="<?php echo _EZREALTY_CPANEL_PROFMGR;?>" align="top" border="0" /><span><?php echo _EZREALTY_CPANEL_PROFMGR;?></span>
				</a>
			</div>
		</div>

<?php } ?>

			<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezrealty&amp;task=leads">
					<img src="components/com_ezrealty/images/icon8.png" alt="<?php echo _EZREALTY_CPANEL_MGSALES;?>" align="top" border="0" /><span><?php echo _EZREALTY_CPANEL_MGSALES;?></span>
				</a>
			</div>
		</div>

			<div style="float:left;">
			<div class="icon">
				<a href = "javascript:if (confirm('<?php echo _EZREALTY_CHECK_ALERT;?>')){ location.href='index2.php?option=com_ezrealty&amp;task=sendalertmail';}" title="<?php echo _EZREALTY_CHECK_ALERT;?>">
					<img src="components/com_ezrealty/images/icon9.png" alt="<?php echo _EZREALTY_CPANEL_SENDALERT;?>" align="top" border="0" /><span><?php echo _EZREALTY_CPANEL_SENDALERT;?></span>
				</a>
			</div>
		</div>

			<div style="float:left;">
			<div class="icon">
				<a href = "javascript:if (confirm('<?php echo _EZREALTY_CHECK_CLEAN;?>')){ location.href='index2.php?option=com_ezrealty&amp;task=cleandb';}" title="<?php echo _EZREALTY_CHECK_CLEAN;?>">
					<img src="components/com_ezrealty/images/icon10.png" alt="<?php echo _EZREALTY_CPANEL_CLEANLIST;?>" align="top" border="0" /><span><?php echo _EZREALTY_CPANEL_CLEANLIST;?></span>
				</a>
			</div>
		</div>

			<div style="float:left;">
			<div class="icon">
				<a href = "javascript:if (confirm('<?php echo _EZREALTY_CHECK_PRUNE;?>')){ location.href='index2.php?option=com_ezrealty&amp;task=prunelightbox';}" title="<?php echo _EZREALTY_CHECK_PRUNE;?>">
					<img src="components/com_ezrealty/images/icon11.png" alt="<?php echo _EZREALTY_CPANEL_PRUNE;?>" align="top" border="0" /><span><?php echo _EZREALTY_CPANEL_PRUNE;?></span>
				</a>
			</div>
		</div>

			<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezrealty&amp;task=upgradetables">
					<img src="components/com_ezrealty/images/icon12.png" alt="<?php echo _EZREALTY_CPANEL_UPGRADE;?>" align="top" border="0" /><span><?php echo _EZREALTY_CPANEL_UPGRADE;?></span>
				</a>
			</div>
		</div>

			<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezrealty&amp;task=optimizetables">
					<img src="components/com_ezrealty/images/icon16.png" alt="<?php echo _EZREALTY_CPANEL_OPTIMIZE;?>" align="top" border="0" /><span><?php echo _EZREALTY_CPANEL_OPTIMIZE;?></span>
				</a>
			</div>
		</div>

			<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezrealty&amp;task=content">
					<img src="components/com_ezrealty/images/icon19.png" alt="<?php echo _EZREALTY_CPANEL_STATIC;?>" align="top" border="0" /><span><?php echo _EZREALTY_CPANEL_STATIC;?></span>
				</a>
			</div>
		</div>


			<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezrealty&amp;task=mlist">
					<img src="components/com_ezrealty/images/icon21.png" alt="<?php echo _EZREALTY_CPANEL_MLIST;?>" align="top" border="0" /><span><?php echo _EZREALTY_CPANEL_MLIST;?></span>
				</a>
			</div>
		</div>

			

			<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezrealty&amp;task=settings">
					<img src="components/com_ezrealty/images/icon15.png" alt="<?php echo _EZREALTY_CPANEL_CONFIG;?>" align="top" border="0" /><span><?php echo _EZREALTY_CPANEL_CONFIG;?></span>
				</a>
			</div>
		</div>

<?php if ( $totalprofs < 1 ) { ?>

			<div style="float:left;">
			<div class="icon">
				<a href="index2.php?option=com_ezrealty&amp;task=migrateusers">
					<img src="components/com_ezrealty/images/icon14.png" alt="<?php echo _EZREALTY_CPANEL_MIGRATE;?>" align="top" border="0" /><span><?php echo _EZREALTY_CPANEL_MIGRATE;?></span>
				</a>
			</div>
		</div>

<?php } ?>

</div>


		</td>
		<td width="45%" valign="top">

<?php
$tabs->startPane("displayPane");
$tabs->startTab( _EZREALTY_CPANEL_INTRO,"intro-page");
?>

<table cellpadding="5" cellspacing="5" border="0" width="100%" class="adminform">

  <tr>
    <td valign="top"><br />

<p>All new customers receive 1 month of free support from the date of purchase, and this is only available via the Helpdesk 
ticketing system. Please ensure you read the support guidelines included in your download package and consult the online 
documentation prior to submitting any support ticket. This will help to avoid unnecessary delays in resolving your problem - 
and keep the support system clear of inappropriate requests so we can get on with proving you with great software.</p>
<p>If you have exceeded your free support period, we will have new extended support solutions available shortly - so keep 
an eye on our site news.</p>
<p>Requests that fall outside the scope of support will only be dealt with on a commercial basis due to the time involved 
in answering these.</p>

</td>
  </tr>

</table>


<?php
$tabs->endTab();
$tabs->startTab( _EZREALTY_CPANEL_FEEDS,"feeds-page");
?>

<table cellpadding="5" cellspacing="5" border="0" width="100%" class="adminform">

  <tr>
    <td valign="top"><br /><?php echo _EZREALTY_CPANEL_FEEDSDESC;?>


<?php

$google = $mosConfig_live_site .'/components/com_ezrealty/feeds/google.ezrealty.php';
$edgeio = $mosConfig_live_site .'/components/com_ezrealty/feeds/edgeio.ezrealty.php';
$propsmart = $mosConfig_live_site .'/components/com_ezrealty/feeds/propsmart.ezrealty.php';

?>

<br /><br />

<a target="_blank" href="<?php echo $google;?>"><?php echo _EZREALTY_CPANEL_GOOGLE1;?></a> - 

<strong>(<a target="_blank" href="http://www.google.com/base/help/housing.html"><?php echo _EZREALTY_CPANEL_GOOGLE2;?></a>)</strong>

<br />
<br />

<a target="_blank" href="<?php echo $edgeio;?>"><?php echo _EZREALTY_CPANEL_EDGEIO1;?></a> - 

<strong>(<a target="_blank" href="http://www.edgeio.com/view/about/"><?php echo _EZREALTY_CPANEL_EDGEIO2;?></a>)</strong>

<br />
<br />
<a target="_blank" href="<?php echo $propsmart;?>"><?php echo _EZREALTY_CPANEL_PROPSMART1;?></a> - 

<strong>(<a target="_blank" href="http://www.propsmart.com/datafeed#intro"><?php echo _EZREALTY_CPANEL_PROPSMART2;?></a>)</strong>

<br />
<br />


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



<?php

}




/**************************************************\
            SHOW THE LIST OF PROPERTIES
\**************************************************/


function showProperties( $option, &$rows, &$lists, &$pageNav ) {
global $my, $er_imagedirectory, $mosConfig_live_site, $er_stateloc, $er_country;
global $er_currencypos, $er_currencysign, $er_currencyformat, $er_expmgmt, $er_expsys, $er_impnum;

	mosCommonHTML::loadOverlib();

$status2 = 'status=yes,toolbar=yes,scrollbars=yes,titlebar=yes,menubar=yes,resizable=yes,width=750,height=600,directories=no,location=no';

?>

<link rel="stylesheet" href="components/com_ezrealty/includes/cpanel.css" type="text/css" />

<form action="index2.php" method="post" name="adminForm">

<table border="0" width="100%">
	<tr>
		<td align="left">

    <table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"> </td>
			<td nowrap="nowrap" width="70" align="right"><?php echo _EZREALTY_ORDERBY;?>:- </td>
			<td align="right"><?php echo $lists['order'];?></td>
		</tr>
	</table>

</td>
	</tr>
	<tr>
		<td align="left">

    <table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"> </td>
			<td nowrap="nowrap"><?php echo _EZREALTY_LISTINGS_FILTER;?></td>
			<td align="right"><?php echo $lists['idnum'];?></td>
			<td align="right"><?php echo $lists['mls'];?></td>
			<td align="right"><?php echo $lists['agent'];?></td>
			<td align="right"><?php echo $lists['cid'];?></td>
		</tr>
	</table>
</td>
	</tr>
	<tr>
		<td align="left">

    <table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><?php echo _EZREALTY_LISTINGS_TITLE;?></td>
			<td nowrap="nowrap"><?php echo _EZREALTY_LISTINGS_FILTER;?></td>
			<td align="right"><?php echo $lists['street'];?></td>
<?php if ( $er_stateloc == 1 ) { ?>
			<td align="right"><?php echo $lists['locid'];?></td>
			<td align="right"><?php echo $lists['stid'];?></td>
<?php } ?>
<?php if ( $er_stateloc == 2 ) { ?>
			<td align="right"><?php echo $lists['locid'];?></td>
<?php } ?>
<?php if ( $er_country ) { ?>
			<td align="right"><?php echo $lists['cnid'];?></td>
<?php } ?>
		</tr>
	</table>
</td>
	</tr>


</table>
	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<tr>
			<th width="20" align="left">ID#</th>
			<th width="20" align="left"><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th width="50" align="left"> </th>
			<th align="left"><?php echo _EZREALTY_LISTINGS_PROPNAME;?></th>
			<th width="60" align="left"><?php echo "MLS #";?></th>
			<th width="80" align="left"><?php echo _EZREALTY_LISTINGS_PROPCAT;?></th>
			<th width="70" align="left"><?php echo _EZREALTY_LISTINGS_PROPPRICE;?></th>
			<th width="30" align="center"><?php echo _EZREALTY_LISTINGS_PROPHITS;?></th>
			<th width="60" align="center"><?php echo _EZREALTY_LISTINGS_PUBSTATUS;?></th>
			<th width="30" align="center"><?php echo _EZREALTY_PREMIUM;?></th>
			<th width="30" align="center"><?php echo _EZREALTY_FEATURED;?></th>
			<th width="60" align="center"><?php echo _EZREALTY_LISTINGS_SELLER;?></th>
			<th width="40" align="center"><?php echo _EZREALTY_LISTINGS_MARKETSTATUS;?></th>
			<th width="70" align="center"><?php echo _EZREALTY_LISTINGS_LISTINGDATE;?></th>
			<th width="70" align="center"><?php echo _EZREALTY_LISTINGS_UPDATE;?></th>
<?php if ($er_expmgmt==1 && $er_expsys==1) { ?>
			<th width="70" align="center"><?php echo _EZREALTY_LISTINGS_EXPDATE;?></th>
<?php } ?>
			<th align='center' width='50'><?php echo _EZREALTY_VLDET_DELETE;?></th>
			<th align='center' width='50'><?php echo _EZREALTY_PRINT_ADMIN;?></th>
		</tr>

		<?php
			$k = 0;
			for ($i=0, $n=count( $rows ); $i < $n; $i++) {
				$row = &$rows[$i];

			$link 	= 'index2.php?option=com_ezrealty&task=editA&hidemainmenu=1&id='. $row->id;
			$link3  = 'index3.php?option=com_ezrealty&amp;task=print&hidemainmenu=1&id='. $row->id;

				$task	=	$row->published ? 'unpublish' : 'publish';
				$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';
				$alt 	=	$row->published ? _EZREALTY_GENERAL_PUBLISHED : _EZREALTY_GENERAL_UNPUBLISHED;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );

		$number = $row->price;

		if ($er_currencyformat==0) {
			$formatted_price = number_format($number);
		} else if ($er_currencyformat==1) {
			$formatted_price = number_format($number, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price = number_format($number, 0,",",".");
		}

        ?>

		<tr class="<?php echo "row$k"; ?>">
			<td width="20" align="left"><?php echo ($row->id); ?></td>

			<td width="20">
				<?php echo $checked; ?>
			</td>

			<td width="50" align="left"><?php if ($row->image1) { ?><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/<?php echo $er_imagedirectory;?>/th/<?php echo $row->image1;?>" border="0" width="50" alt="<?php echo _EZREALTY_LISTINGS_EDIT; ?>" /><?php }else{ ?><img src="../components/com_ezrealty/<?php echo $er_imagedirectory;?>/th/nothumb.gif" border="0" width="50" alt="<?php echo _EZREALTY_LISTINGS_EDIT;?>" /><?php } ?></td>

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

				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->unit_num.' '.$row->street_num.' '.$row->address2.' '.$row->proploc.' '.$row->postcode;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZREALTY_LISTINGS_EDIT;?>">
					<?php echo $row->unit_num.' '.$row->street_num.' '.$row->address2.' '.$row->proploc.' '.$row->postcode; ?>
					</a>
					<?php
				}
				?>
			</td>

			<td width="60" align="left"><?php echo ($row->mls_id); ?></td>
			<td width="80" align="left"><?php echo ($row->category); ?></td>
			<td width="70" align="left">

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

			</td>
			<td width="30" align="center"><?php echo $row->hits; ?><br /><a href = "javascript:if (confirm('<?php echo _EZREALTY_RESET_BTN;?>')){ location.href='index2.php?option=com_ezrealty&amp;task=resethits&amp;id=<?php echo $row->id?>';}" title="<?php echo _EZREALTY_RESET_BTN;?>"><strong><?php echo _EZREALTY_RESET_BTN;?></strong></a></td>
			<td align='center' width="60">
				<a href="javascript: void(0);" onClick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" /></a></td>
			<td width='30' align='center'><?php if ($row->premium == 1){ ?><img src="../images/M_images/rating_star.png" border="0" alt="<?php echo _EZREALTY_PREMIUM; ?>" title="<?php echo _EZREALTY_PREMIUM; ?>" /><?php }else{ ?><img src="../images/M_images/rating_star_blank.png" border="0" alt="<?php echo _REALTY_DETAILS_FREESTATUS; ?>" title="<?php echo _EZREALTY_DETAILS_FREESTATUS; ?>" /><?php } ?></td>
			<td width='30' align='center'><?php if ($row->featured == 1){ ?><img src="../images/M_images/rating_star.png" border="0" alt="<?php echo EZREALTY_FEATURED; ?>" title="<?php echo EZREALTY_FEATURED; ?>" /><?php }else{ ?><img src="../images/M_images/rating_star_blank.png" border="0" alt="" /><?php } ?></td>
			<td width='60' align='center'><?php echo ($row->propseller); ?></td>
			<td width='40' align='center'>

<?php if ( $row->sold==1 ){ ?><?php echo _EZREALTY_DETAILS_MARKET1;?><?php } ?>
<?php if ( $row->sold==2 ){ ?><?php echo _EZREALTY_DETAILS_MARKET2;?><?php } ?>
<?php if ( $row->sold==3 ){ ?><?php echo _EZREALTY_DETAILS_MARKET3;?><?php } ?>
<?php if ( $row->sold==4 ){ ?><?php echo _EZREALTY_DETAILS_MARKET4;?><?php } ?>
<?php if ( $row->sold==5 ){ ?><?php echo _EZREALTY_DETAILS_MARKET5;?><?php } ?>

</td>
			<td width='70' align='center'><?php echo ($row->listdate); ?></td>
			<td width='70' align='center'><?php echo strftime("%c",$row->lastupdate); ?></td>


<?php if ($er_expmgmt==1 && $er_expsys==1) { ?>

			<td width='70' align='center'>
<?php if ($row->expdate) { ?>

<?php echo strftime("%c",$row->expdate); ?><br />
<?php if ($row->expdate <= mktime(0, 0, 0, date("m"), date("d"), date("Y"))) { ?><a href = "javascript:if (confirm('<?php echo _EZREALTY_RESET_BTN; ?>')){ location.href='index2.php?option=com_ezrealty&amp;task=resetdate&amp;id=<?php echo $row->id?>';}" title="<?php echo _EZREALTY_RESET_BTN;?>"><strong><?php echo _EZREALTY_RESET_BTN;?></strong></a><?php } ?>
<?php } else { ?>
<a href = "javascript:if (confirm('<?php echo _EZREALTY_RESET_BTN; ?>')){ location.href='index2.php?option=com_ezrealty&amp;task=resetdate&amp;id=<?php echo $row->id?>';}" title="<?php echo _EZREALTY_RESET_BTN;?>"><strong><?php echo _EZREALTY_RESET_BTN;?></strong></a>
<?php } ?>
</td>

<?php } ?>


			<td align='center' width="50"><a href = "javascript:if (confirm('<?php echo _EZREALTY_VLDET_DELETE;?>')){ location.href='index2.php?option=com_ezrealty&amp;task=remove&amp;id=<?php echo $row->id?>';}" title="<?php echo _EZREALTY_VLDET_DELETE;?>"><strong><?php echo _EZREALTY_VLDET_DELETE;?></strong></a></td>
			<td align='center' width="50"><a href="javascript:void(0)" onclick="window.open('<?php echo $link3; ?>','win2','<?php echo $status2; ?>');" title="<?php echo _EZREALTY_VIEWDET_PRINT;?>"><strong><?php echo _EZREALTY_VIEWDET_PRINT;?></strong></a></td>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="show" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>

<?php

  }


/**************************************************\
            ADD/EDIT PROPERTY DETAILS
\**************************************************/


function editProperty( $option, &$row, &$lists, $list ) {
global $my, $database, $mosConfig_live_site, $er_usebookings;
global $er_country, $er_usemap, $er_usepc, $er_maxwidth, $er_maxheight, $er_stateloc, $er_useflv;


$tabs = new mosTabs(0);
mosMakeHtmlSafe( $row );

?>


    <script language="javascript" type="text/javascript">


		function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancel') {
        submitform( pressbutton );
        return;
      }

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

      } else if (form.bedrooms.value == ""){
        alert( "<?php echo _EZREALTY_DETAILS_ERROR7;?>" );

      } else if (form.price.value == ""){
        alert( "<?php echo _EZREALTY_DETAILS_ERROR8;?>" );

      } else if (form.adline.value == ""){
        alert( "<?php echo _EZREALTY_DETAILS_ERROR10;?>" );

      } else if (form.smalldesc.value == ""){
        alert( "<?php echo _EZREALTY_DETAILS_ERROR11;?>" );

      } else if (form.sold.value == "0"){
        alert( "<?php echo _EZREALTY_SOLD_ERROR;?>" );

      } else if (form.owner.value == "0"){
        alert( "<?php echo _EZREALTY_ADDOWNER_ERROR;?>" );

			} else {
				<?php getEditorContents( 'editor1', 'propdesc' ) ; ?>

        submitform( pressbutton );
      }
    }

    </script>

<table cellpadding="4" cellspacing="0" border="0" width="100%">
  <tr>
    <td width="100%" align="left"><span class="sectionname"><?php echo $row->cid ? _EZREALTY_GENERIC_EDIT : _EZREALTY_GENERIC_ADD;?> <?php echo _EZREALTY_DETAILS_TITLE;?></span></td>
  </tr>
</table>


<form action="index2.php" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">


<table cellpadding="0" cellspacing="0" border="0" width="100%">
    <tr>
		<td align="left">


<?php
$tabs->startPane("displayPane");
$tabs->startTab(_EZREALTY_TABS_ADDRESS,"summary-page");
?>


<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminform">
    <tr>
      <th colspan="2"><div align="center"><?php echo _EZREALTY_DETAILS_TAB1A;?></div></th>
    </tr>
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
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_MAPREF;?>:</strong></td>
    <td valign="top"><br /><textarea class="inputbox" rows="5" name="mapref" cols="55"><?php echo $row->mapref;?></textarea><br /><?php echo _EZREALTY_DETAILS_OPT;?>  (<?php echo _EZREALTY_DETAILS_MAPREFDESC;?>)</td>
  </tr>
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

<?php
$tabs->endTab();
$tabs->startTab(_EZREALTY_TABS_SPECS,"specs-page");
?>

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminform">
    <tr>
      <th colspan="2"><div align="center"><?php echo _EZREALTY_DETAILS_GENERAL;?></div></th>
    </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_AGE?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="age" size="20" value="<?php echo $row->age;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_LANDTYPE?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="landtype" size="50" value="<?php echo $row->landtype;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?>  (<?php echo _EZREALTY_DETAILS_LANDTYPEDESC;?>)</td>
  </tr>


  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_FRONTAGE?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="frontage" size="20" value="<?php echo $row->frontage;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_DEPTH?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="depth" size="20" value="<?php echo $row->depth;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_BEDROOMS;?>:</strong></td>
    <td align="left"><br /><?php echo $lists['bedrooms']; ?>  <?php echo _EZREALTY_DETAILS_REQ;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_TOTALROOMS;?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="totalrooms" size="15" value="<?php echo $row->totalrooms;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_LIVINGAREA;?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="livingarea" size="15" value="<?php echo $row->livingarea;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_BATHROOMS;?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="bathrooms" size="15" value="<?php echo $row->bathrooms;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?>  (<?php echo _EZREALTY_DETAILS_BATHROOMSDESC;?>)</td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_PARKING;?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="parking" size="15" value="<?php echo $row->parking;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?>  (<?php echo _EZREALTY_DETAILS_PARKINGDESC;?>)</td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_CTOWN;?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="ctown" size="35" value="<?php echo $row->ctown;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_CTPORT;?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="ctport" size="35" value="<?php echo $row->ctport;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LISTINGS_SCHOOLDIST;?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="schooldist" size="35" value="<?php echo $row->schooldist;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LISTINGS_PRESCHOOL;?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="preschool" size="35" value="<?php echo $row->preschool;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LISTINGS_PRIMARYSCHOOL;?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="primaryschool" size="35" value="<?php echo $row->primaryschool;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LISTINGS_HIGHSCHOOL;?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="highschool" size="35" value="<?php echo $row->highschool;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LISTINGS_UNIVERSITY;?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="university" size="35" value="<?php echo $row->university;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LISTINGS_HOFEES;?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="hofees" size="35" value="<?php echo $row->hofees;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></strong></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_CPI1; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="custom1" size="35" value="<?php echo $row->custom1;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_CPI2; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="custom2" size="35" value="<?php echo $row->custom2;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_CPI3; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="custom3" size="35" value="<?php echo $row->custom3;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?><br /><br /></td>
  </tr>



  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_CUSTOM4; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="custom4" size="35" value="<?php echo $row->custom4;?>" /> <strong><?php echo _EZREALTY_FIELD_SEARCHABLE;?></strong></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_CUSTOM5; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="custom5" size="35" value="<?php echo $row->custom5;?>" /> <strong><?php echo _EZREALTY_FIELD_SEARCHABLE;?></strong></td>
  </tr>



    <tr>
      <th colspan="2"><div align="center"><?php echo _EZREALTY_DETAILS_BUSINESS;?></div></th>
    </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_TAKINGS; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="takings" size="35" value="<?php echo $row->takings;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_RETURNS; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="returns" size="35" value="<?php echo $row->returns;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_NETPROFIT; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="netprofit" size="35" value="<?php echo $row->netprofit;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_BUSTYPE; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="bustype" size="35" value="<?php echo $row->bustype;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_BUSSUBTYPE; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="bussubtype" size="35" value="<?php echo $row->bussubtype;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_STOCK; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="stock" size="35" value="<?php echo $row->stock;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_FIXTURES; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="fixtures" size="35" value="<?php echo $row->fixtures;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_FITTINGS; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="fittings" size="35" value="<?php echo $row->fittings;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_SQUARES; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="squarefeet" size="35" value="<?php echo $row->squarefeet;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_POFFICE; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="percentoffice" size="35" value="<?php echo $row->percentoffice;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_PWAREHOUSE; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="percentwarehouse" size="35" value="<?php echo $row->percentwarehouse;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_LOADING; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="loadingfac" size="35" value="<?php echo $row->loadingfac;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?><br /><br /></td>
  </tr>

    <tr>
      <th colspan="2"><div align="center"><?php echo _EZREALTY_DETAILS_RURAL;?></div></th>
    </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_FENCING; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="fencing" size="35" value="<?php echo $row->fencing;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_RAINFALL; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="rainfall" size="35" value="<?php echo $row->rainfall;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_SOILTYPE; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="soiltype" size="35" value="<?php echo $row->soiltype;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_GRAZING; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="grazing" size="35" value="<?php echo $row->grazing;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_CROPPING; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="cropping" size="35" value="<?php echo $row->cropping;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_IRRIGATION; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="irrigation" size="35" value="<?php echo $row->irrigation;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_WATERRESOURCES; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="waterresources" size="35" value="<?php echo $row->waterresources;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_CARRYINGCAP; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="carryingcap" size="35" value="<?php echo $row->carryingcap;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_STORAGE; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="storage" size="35" value="<?php echo $row->storage;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_SERVICES; ?>:</strong></td>
    <td align="left"><br /><input class="inputbox" type="text" name="services" size="35" value="<?php echo $row->services;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?></td>
  </tr>

</table>

<?php
$tabs->endTab();
$tabs->startTab(_EZREALTY_DETAILS_TAB2A,"features-page");
?>

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminform">
    <tr>
      <th colspan="2"><div align="center"><?php echo _EZREALTY_DETAILS_TAB2A;?></div></th>
    </tr>
	<tr>
		<td valign="top" width="100"><?php echo _EZREALTY_APF1; ?>: </td><td valign="top"><?php echo $lists['pool']; ?></td>
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

<?php
$tabs->endTab();
$tabs->startTab(_EZREALTY_TABS_MARKETING,"marketing-page");
?>

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminform">
    <tr>
      <th colspan="2"><div align="center"><?php echo _EZREALTY_DETAILS_TAB3A;?></div></th>
    </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LISTING_TYPE;?>:</strong></td>
    <td valign="top"><br /><?php echo $lists['type']; ?> <?php echo _EZREALTY_DETAILS_REQ;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_SELCAT;?>:</strong></td>
    <td valign="top"><br /><?php echo $lists['cid']; ?>  <?php echo _EZREALTY_DETAILS_REQ;?></td>
  </tr>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_PROPPRICE;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="price" size="15" value="<?php echo $row->price;?>" />  <?php echo _EZREALTY_DETAILS_REQ;?> - <strong><?php echo _EZREALTY_DETAILS_PROPPRICEDESC;?></strong></td>
  </tr>

  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_RENTAL_FREQUENCY;?>:</strong></td>
    <td valign="top"><br /><?php echo $lists['freq']; ?></td>
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
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_AGENTID;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="agent_id" size="20" value="<?php echo $row->agent_id;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?>  (<?php echo _EZREALTY_DETAILS_AGENTIDDESC;?>)</td>
  </tr>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_MLSID;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="mls_id" size="20" value="<?php echo $row->mls_id;?>" /> <?php echo _EZREALTY_DETAILS_OPT;?>  (<?php echo _EZREALTY_DETAILS_MLSIDDESC;?>)</td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_ADLINE;?>:</strong></td>
    <td width="80%" valign="top"><br /><input class="inputbox" type="text" name="adline" size="70" value="<?php echo $row->adline;?>" /> <?php echo _EZREALTY_DETAILS_REQ;?></td>
  </tr>
  <tr>
    <td valign="top" width="20%"><br /><strong><?php echo _EZREALTY_DETAILS_SHORTDESC;?></strong><br /><?php echo _EZREALTY_DETAILS_REQ;?></td>
    <td align="left"><br /><textarea rows="5" class="inputbox" name="smalldesc" cols="70"><?php echo $row->smalldesc;?></textarea><br /><br /></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_VTOUR;?>:</strong><?php if ($er_useflv==1) { ?><br /><br /><?php echo _EZREALTY_LISTINGS_FLVMODE;?><?php } ?></td>
    <td valign="top"><br /><textarea class="inputbox" rows="5" name="vtour" cols="55"><?php echo $row->vtour;?></textarea> <?php echo _EZREALTY_DETAILS_OPT;?>  (<?php echo _EZREALTY_DETAILS_VTOURDESC;?>)<br /><br /></td>
  </tr>
  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_OHOUSE;?>:</strong></td>
    <td align="left"><br /><?php echo $lists['openhouse']; ?><br /><br /></td>
  </tr>

  <tr>
    <td valign="top" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_OHOUSEDET;?></strong></td>
    <td align="left"><textarea class="inputbox" rows="5" name="ohouse_desc" cols="55"><?php echo $row->ohouse_desc;?></textarea><br /><br /></td>
  </tr>

</table>

<?php
$tabs->endTab();
$tabs->startTab(_EZREALTY_DETAILS_TAB7A,"metatags-page");
?>

<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminform">
    <tr>
      <th colspan="2"><div align="center"><?php echo _EZREALTY_DETAILS_TAB7A;?></div></th>
    </tr>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_METADESC;?>:</strong></td>
    <td width="80%" valign="top"><br /><textarea class="inputbox" cols="40" rows="5" name="metadesc"><?php echo $row->metadesc; ?></textarea></td>
  </tr>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_METAKEYS;?>:</strong></td>
    <td width="80%" valign="top"><br /><textarea class="inputbox" cols="40" rows="5" name="metakey"><?php echo $row->metakey; ?></textarea></td>
  </tr>
</table>


<?php
$tabs->endTab();
$tabs->startTab(_EZREALTY_TABS_ADMIN,"admin-page");
?>


<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminform">
    <tr>
      <th colspan="2"><div align="center"><?php echo _EZREALTY_DETAILS_TAB6A;?></div></th>
    </tr>

  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DEALER_SELLER;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['owner']; ?></td>
  </tr>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_PUBL;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['published']; ?><br /></td>
  </tr>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_LISTSTATUS;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['premium']; ?></td>
  </tr>
  <tr>
    <td width="20%" valign="top"><br /><strong><?php echo _EZREALTY_DETAILS_LISTPREMIUM;?>:</strong></td>
    <td width="80%" valign="top"><br /><?php echo $lists['featured']; ?><br /><br /></td>
  </tr>
</table>

<?php
$tabs->endTab();
$tabs->startTab(_EZREALTY_CONFIG_IMG1,"images-page");
?>


<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminform">
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_DETAILS_TAB4A;?></div></th>
    </tr>

  <tr>
    <td width="100%" valign="top" colspan="3"><br /><strong><?php echo _EZREALTY_IMAGE_WARNING;?></strong></td>
  </tr>
  <tr>
    <td width="100%" valign="top" colspan="3"><br /><strong><?php echo _EZREALTY_CONFIG_MAXWIDTH;?>:</strong> <?php echo $er_maxwidth." "._EZREALTY_PIXELS; ?></td>
  </tr>
  <tr>
    <td width="100%" valign="top" colspan="3"><br /><strong><?php echo _EZREALTY_CONFIG_MAXHEIGHT;?>:</strong> <?php echo $er_maxheight." "._EZREALTY_PIXELS; ?></td>
  </tr>

	<tr>
        <td bgcolor="#000000" width="33%"><font color="#ffffff"><strong><u><?php echo _EZREALTY_VLDET_IMAGE1;?></u></strong></font></td>
        <td bgcolor="#000000" width="33%"><font color="#ffffff"><strong><u><?php echo _EZREALTY_VLDET_IMAGE2;?></u></strong></font></td>
        <td bgcolor="#000000" width="33%"><font color="#ffffff"><strong><u><?php echo _EZREALTY_VLDET_IMAGE3;?></u></strong></font></td>
	</tr>
	<tr>

        <td valign="top"><?php imageUpload($row->image1,'1',$list['image1'],'image1');?>
<?php if ($row->image1){ ?>
&nbsp;&nbsp;<strong><a href="index2.php?option=com_ezrealty&task=deleteimage1&id=<?php echo $row->id;?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
</td>
        <td valign="top"><?php imageUpload($row->image2,'1',$list['image2'],'image2');?>
<?php if ($row->image2){ ?>
&nbsp;&nbsp;<strong><a href="index2.php?option=com_ezrealty&task=deleteimage2&id=<?php echo $row->id;?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
</td>
        <td valign="top"><?php imageUpload($row->image3,'1',$list['image3'],'image3');?>
<?php if ($row->image3){ ?>
&nbsp;&nbsp;<strong><a href="index2.php?option=com_ezrealty&task=deleteimage3&id=<?php echo $row->id;?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
</td>

	</tr>
	<tr>
        <td bgcolor="#000000" width="33%"><font color="#ffffff"><strong><u><?php echo _EZREALTY_VLDET_IMAGE4;?></u></strong></font></td>
        <td bgcolor="#000000" width="33%"><font color="#ffffff"><strong><u><?php echo _EZREALTY_VLDET_IMAGE5;?></u></strong></font></td>
        <td bgcolor="#000000" width="33%"><font color="#ffffff"><strong><u><?php echo _EZREALTY_VLDET_IMAGE6;?></u></strong></font></td>
	</tr>
	<tr>

        <td valign="top"><?php imageUpload($row->image4,'1',$list['image4'],'image4');?>
<?php if ($row->image4){ ?>
&nbsp;&nbsp;<strong><a href="index2.php?option=com_ezrealty&task=deleteimage4&id=<?php echo $row->id;?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
</td>
        <td valign="top"><?php imageUpload($row->image5,'1',$list['image5'],'image5');?>
<?php if ($row->image5){ ?>
&nbsp;&nbsp;<strong><a href="index2.php?option=com_ezrealty&task=deleteimage5&id=<?php echo $row->id;?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
</td>
        <td valign="top"><?php imageUpload($row->image6,'1',$list['image6'],'image6');?>
<?php if ($row->image6){ ?>
&nbsp;&nbsp;<strong><a href="index2.php?option=com_ezrealty&task=deleteimage6&id=<?php echo $row->id;?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
</td>

	</tr>
	<tr>
        <td bgcolor="#000000" width="33%"><font color="#ffffff"><strong><u><?php echo _EZREALTY_VLDET_IMAGE7;?></u></strong></font></td>
        <td bgcolor="#000000" width="33%"><font color="#ffffff"><strong><u><?php echo _EZREALTY_VLDET_IMAGE8;?></u></strong></font></td>
        <td bgcolor="#000000" width="33%"><font color="#ffffff"><strong><u><?php echo _EZREALTY_VLDET_IMAGE9;?></u></strong></font></td>
	</tr>
	<tr>

        <td valign="top"><?php imageUpload($row->image7,'1',$list['image7'],'image7');?>
<?php if ($row->image7){ ?>
&nbsp;&nbsp;<strong><a href="index2.php?option=com_ezrealty&task=deleteimage7&id=<?php echo $row->id;?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
</td>
        <td valign="top"><?php imageUpload($row->image8,'1',$list['image8'],'image8');?>
<?php if ($row->image8){ ?>
&nbsp;&nbsp;<strong><a href="index2.php?option=com_ezrealty&task=deleteimage8&id=<?php echo $row->id;?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
</td>
        <td valign="top"><?php imageUpload($row->image9,'1',$list['image9'],'image9');?>
<?php if ($row->image9){ ?>
&nbsp;&nbsp;<strong><a href="index2.php?option=com_ezrealty&task=deleteimage9&id=<?php echo $row->id;?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
</td>

	</tr>
	<tr>
        <td bgcolor="#000000" width="33%"><font color="#ffffff"><strong><u><?php echo _EZREALTY_VLDET_IMAGE10;?></u></strong></font></td>
        <td bgcolor="#000000" width="33%"><font color="#ffffff"><strong><u><?php echo _EZREALTY_VLDET_IMAGE11;?></u></strong></font></td>
        <td bgcolor="#000000" width="33%"><font color="#ffffff"><strong><u><?php echo _EZREALTY_VLDET_IMAGE12;?></u></strong></font></td>
	</tr>
	<tr>

        <td valign="top"><?php imageUpload($row->image10,'1',$list['image10'],'image10');?>
<?php if ($row->image10){ ?>
&nbsp;&nbsp;<strong><a href="index2.php?option=com_ezrealty&task=deleteimage10&id=<?php echo $row->id;?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
</td>
        <td valign="top"><?php imageUpload($row->image11,'1',$list['image11'],'image11');?>
<?php if ($row->image11){ ?>
&nbsp;&nbsp;<strong><a href="index2.php?option=com_ezrealty&task=deleteimage11&id=<?php echo $row->id;?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
</td>
        <td valign="top"><?php imageUpload($row->image12,'1',$list['image12'],'image12');?>
<?php if ($row->image12){ ?>
&nbsp;&nbsp;<strong><a href="index2.php?option=com_ezrealty&task=deleteimage12&id=<?php echo $row->id;?>"><?php echo _EZREALTY_VLDET_DELETEIMG;?></a></strong>
<?php } ?>
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


<table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminform">
    <tr>
      <th colspan="2"><div align="center"><?php echo _EZREALTY_DETAILS_PROPDESC;?></div></th>
    </tr>
  <tr>
    <td valign="top" width="200"><?php echo _EZREALTY_DETAILS_REQ;?></td>
    <td align="left"><br />
		<?php
		// parameters : areaname, content, hidden field, width, height, rows, cols
		editorArea( 'editor1',  $row->propdesc , 'propdesc', '100%;', '300', '60', '20' ) ; ?>
    </td>
	</tr>
</table>



	<input type="hidden" name="id" value="<?php echo $row->id; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />

</form>


<?php

  }



/**************************************************\
             PRINT FORM ENTRY
\**************************************************/



function printDetails( $option, &$row, $ez_printheader, $ez_printfooter ) {
global $database, $mainframe, $mosConfig_live_site, $er_template, $er_currencysign, $er_imgwidth;
global $er_thumbwidth, $er_imagedirectory, $er_viewarrange, $er_viewrecommend, $er_viewmailing, $er_special_feature;
global $er_paypal, $er_thumbcreation, $er_bizname, $er_memlistings, $er_mobile, $er_usepc, $er_mapsys;
global $er_colour1, $er_usemap, $er_mapwidth, $er_mapheight, $er_currencyformat, $er_currencypos, $er_profaccess;
global $er_useprofile, $er_usesms, $er_usemapstnum, $er_usemapstreet, $er_usemaplocid, $er_usemapstid;
global $mosConfig_absolute_path, $er_usebookings;


DEFINE("PRINTTEMPLATE_PATH","components/com_ezrealty/includes");


if (file_exists(PRINTTEMPLATE_PATH.'/print.ezrealty.php')) {
  include(PRINTTEMPLATE_PATH.'/print.ezrealty.php');
} else {
echo _EZREALTY_TEMPLATE_ERROR;  
}



}




/**************************************************\
            SHOW THE LIST OF PROPERTY TYPES
\**************************************************/


	function showCatgs( &$rows, &$pageNav, $option ) {
		global $my;

		mosCommonHTML::loadOverlib();
		?>

		<form action="index2.php" method="post" name="adminForm">

    <table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><?php echo _EZREALTY_CATEGORY_PAGETITLE;?></td>
		</tr>
	</table>

		<table class="adminlist">
		<tr>
			<th width="20"><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th class="title" align="left"><?php echo _EZREALTY_CATEGORY_CATNAME;?></th>
			<th nowrap width="100"><?php echo _EZREALTY_CATEGORY_PUBSTATUS;?></th>
			<th nowrap width="150"><?php echo _EZREALTY_CATEGORY_ACCLEVEL;?></th>
			<th colspan="2" nowrap="nowrap" width="100"><div align="center"><?php echo _EZREALTY_CATEGORY_REORDER;?></div></th>
		</tr>
		<?php
		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];


				$task	=	$row->published ? 'unpublishcatg' : 'publishcatg';
				$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';
				$alt 	=	$row->published ? _EZREALTY_GENERAL_PUBLISHED : _EZREALTY_GENERAL_UNPUBLISHED;


			$row->id 	= $row->cid;
			$link 		= 'index2.php?option=com_ezrealty&task=editcatgA&hidemainmenu=1&id='. $row->id;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );
			?>
			<tr class="<?php echo "row$k"; ?>">
				<td width="20">
				<?php echo $checked; ?>
				</td>
				<td align="left">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->name;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZREALTY_CATEGORY_EDITTAG;?>">
					<?php echo $row->name; ?>
					</a>
					<?php
				}
				?>
				</td>
			<td width="100" align="center" nowrap><a href="javascript: void(0);" onClick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" /></a></td>
			<td width="150" align="center" nowrap><?php echo $row->groupname;?></td>
			<td width="50" align="right">
				<?php	if ($i > 0 || ($i+$pageNav->limitstart > 0)) { ?>
				<div align="right"><a href="#reorder" onclick="return listItemTask('cb<?php echo $i;?>','orderupcatg')"><img src="images/uparrow.png" width="12" height="12" border="0" alt="<?php echo _EZREALTY_GENERAL_UP; ?>" /></a>
				<?php } else { echo "&nbsp;"; } ?>
				</div>
			</td>
			<td width="50">

				<?php if ($i < $n-1 || $i+$pageNav->limitstart < $pageNav->total-1) { ?>
				<div align="center"><a href="#reorder" onclick="return listItemTask('cb<?php echo $i;?>','orderdowncatg')"><img src="images/downarrow.png" width="12" height="12" border="0" alt="<?php echo _EZREALTY_GENERAL_DOWN; ?>" /></a>
				<?php } else { echo "&nbsp;"; } ?>
        		</div>
			</td>
			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="showcatg" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>
		<?php
	}


/**************************************************\
            ADD/EDIT PROPERTY TYPE ENTRIES
\**************************************************/


function editCatg( &$row, $option, $glist, $orderlist, &$lists  ) {
global $database, $my;

mosMakeHtmlSafe( $row );

?>

<script language="javascript" type="text/javascript">

	function changeDisplayImage() {
		if (document.adminForm.image.value !='') {
			document.adminForm.imagelib.src='../images/stories/' + document.adminForm.image.value;
		} else {
			document.adminForm.imagelib.src='images/blank.png';
		}
	}

    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelcatg') {
        submitform( pressbutton );
        return;
      }
      // do field validation
      if (form.name.value == ""){
			alert( "<?php echo _EZREALTY_CATEGORY_ERROR1;?>" );
      } else {

				<?php getEditorContents( 'editor1', 'description' ) ; ?>

        submitform( pressbutton );
      }
    }

</script>

<form action="index2.php" method="POST" name="adminForm">

	<table cellpadding="4" cellspacing="0" border="0" width="100%">
	    <tr>
	      <td width="100%" align="left"><span class="sectionname"><?php echo $row->cid ? _EZREALTY_CATEGORY_EDIT : _EZREALTY_CATEGORY_ADD;?> <?php echo _EZREALTY_CATEGORY_MAIN;?></span></td>
	    </tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
		<tr class="row0">
			<td width="200"><?php echo _EZREALTY_CATEGORY_DEFTITLE;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="name" size="25" value="<?php echo $row->name;?>"></td>
		</tr>

		<tr class="row0">
			<td valign="top"><?php echo _EZREALTY_CATEGORY_DEFCONTENT;?>:</td>
			<td align="left">
		<?php
		// parameters : areaname, content, hidden field, width, height, rows, cols
		editorArea( 'editor1',  $row->description , 'description', '100%;', '300', '60', '20' ) ; ?>
			</td>
		</tr>
		<tr class="row1">
			<td valign="top" ><?php echo _EZREALTY_CATEGORY_DEFACCESS;?></td>
			<td nowrap ><?php echo $glist?></td>
		</tr>
		<tr class="row0">
			<td valign="top" ><?php echo _EZREALTY_CATEGORY_DEFORDER;?></td>
			<td nowrap ><?php echo $orderlist?></td>
		</tr>
		<tr>
			<td valign="top"><?php echo _EZREALTY_CATEGORY_IMAGESEL;?>:</td>
			<td align="left"><?php echo $lists['image']; ?></td>
		</tr>
		<tr>
			<td valign="top"><?php echo _EZREALTY_CATEGORY_IMAGE;?>:</td>
			<td valign="top">
			<?php
			if (eregi("swf", $row->image)) {
				?>
				<img src="images/blank.png" name="imagelib" alt="" />
				<?php
			} elseif (eregi("gif|jpg|png", $row->image)) {
				?>
				<img src="../images/stories/<?php echo $row->image; ?>" name="imagelib" alt="<?php echo _EZREALTY_CATEGORY_IMAGE; ?>" />
				<?php
			} else {
				?>
				<img src="images/blank.png" name="imagelib" alt="" />
				<?php
			}
			?>
			</td>
		</tr>

	</table>

	<input type="hidden" name="cid" value="<?php echo $row->cid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />

</form>

<?php

}


/**************************************************\
            SHOW THE LIST OF SUBURBS
\**************************************************/


function showLocalities( $option, &$rows, &$pageNav, $lists ) {
global $my;

		mosCommonHTML::loadOverlib();

    ?>

<form action="index2.php" method="post" name="adminForm">

    <table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><?php echo _EZREALTY_LOCALITIES_TITLE;?></td>
			<td nowrap="nowrap"><?php echo 'filter';?></td>
			<td width="right"><?php echo $lists['statelist'];?></td>
			<td nowrap="nowrap" width="70" align="right"><?php echo 'order by';?>:- </td>
			<td align="right"><?php echo $lists['order'];?></td>
		</tr>
	</table>

    <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th width='100' align="left"><?php echo 'state';?></th>
			<th align="left"><?php echo _EZREALTY_LOCALITIES_LOC;?></th>
			<th width='100'><?php echo _EZREALTY_LOCALITIES_PUBSTATUS;?></th>
		</tr>
		<?php
		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];


			$task	=	$row->published ? 'unpublishloc' : 'publishloc';
			$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';
			$alt 	=	$row->published ? _EZREALTY_GENERAL_PUBLISHED : _EZREALTY_GENERAL_UNPUBLISHED;


			$row->id 	= $row->locid;
			$link 		= 'index2.php?option=com_ezrealty&task=editlocA&hidemainmenu=1&id='. $row->id;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );

		?>
		<tr class="<?php echo "row$k"; ?>">
				<td width="20">
				<?php echo $checked; ?>
				</td>

            <td width="100" align="left">(<?php echo $row->statename; ?>)</td>

			<td align="left">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->ezcity;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZREALTY_LOCALITIES_EDITTAG;?>">
					<?php echo $row->ezcity; ?>
					</a>
					<?php
				}
				?>
			</td>


			<td width="10%" align="center" nowrap><a href="javascript: void(0);" onclick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" /></a></td>
			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="localities" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>

<?php

}


/**************************************************\
            ADD/EDIT SUBURB ENTRIES
\**************************************************/


function editLocalities( &$row, $option, $lists ) {
global $database, $my, $er_stateloc;

mosMakeHtmlSafe( $row );

?>

<script language="javascript" type="text/javascript">

    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelloc') {
        submitform( pressbutton );
        return;
      }
      // do field validation
      if (form.ezcity.value == ""){
        alert( "<?php echo _EZREALTY_MODLOC_ERROR1;?>" );

<?php if ( $er_stateloc == 1 ) { ?>

      } else if (form.stateid.value == "0"){
        alert( "<?php echo _EZREALTY_DETAILS_ERROR3;?>" );

<?php } ?>

      } else {
        submitform( pressbutton );
      }
    }

</script>

<form action="index2.php" method="POST" name="adminForm">


	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" align="left"><span class="sectionname"><?php echo $row->locid ? _EZREALTY_MODLOC_EDIT : _EZREALTY_MODLOC_ADD;?> <?php echo _EZREALTY_MODLOC_TITLE;?></span></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
		<tr class="row0">
			<td width="200"><?php echo _EZREALTY_MODLOC_LOC;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="ezcity" size="30" value="<?php echo $row->ezcity;?>" /></td>
		</tr>

<?php if ( $er_stateloc == 1 ) { ?>

		<tr class="row1">
			<td valign="top" ><?php echo _EZREALTY_DETAILS_SELSTATE;?></td>
			<td nowrap ><?php echo $lists['stateid'];?></td>
		</tr>

<?php } ?>

		<tr class="row0">
			<td width="200"><?php echo _EZREALTY_LOCALITY_DESC;?>:</td>
			<td align="left"><textarea class="inputbox" cols="40" rows="5" name="ezcity_desc" id="ezcity_desc"><?php echo $row->ezcity_desc;?></textarea></td>
		</tr>

	</table>

	<input type="hidden" name="locid" value="<?php echo $row->locid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />

</form>


<?php 

}


/**************************************************\
            SHOW THE LIST OF STATES/REGIONS
\**************************************************/


function showStates( $option, &$rows, &$pageNav ) {
global $my;

		mosCommonHTML::loadOverlib();

    ?>

<form action="index2.php" method="post" name="adminForm">

	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><?php echo _EZREALTY_STATE_TITLE;?></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th align="left"><?php echo _EZREALTY_STATE_LOC;?></th>
			<th width='100'><?php echo _EZREALTY_STATE_PUBSTATUS;?></th>
		</tr>
		<?php
		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];

			$task	=	$row->published ? 'unpublishstate' : 'publishstate';
			$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';
			$alt 	=	$row->published ? _EZREALTY_GENERAL_PUBLISHED : _EZREALTY_GENERAL_UNPUBLISHED;

			$row->id 	= $row->stid;
			$link 		= 'index2.php?option=com_ezrealty&task=editstateA&hidemainmenu=1&id='. $row->id;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );


		?>
		<tr class="<?php echo "row$k"; ?>">
				<td width="20">
				<?php echo $checked; ?>
				</td>
			<td align="left">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->name;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZREALTY_STATE_EDITTAG;?>">
					<?php echo $row->name; ?>
					</a>
					<?php
				}
				?>
			</td>

			<td width="10%" align="center" nowrap><a href="javascript: void(0);" onclick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" /></a></td>
			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="states" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>

<?php

}


/**************************************************\
            ADD/EDIT STATE/REGION ENTRIES
\**************************************************/


function editStates( &$row, $option ) {
global $database, $my;

mosMakeHtmlSafe( $row );

?>

<script language="javascript" type="text/javascript">

    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelstate') {
        submitform( pressbutton );
        return;
      }
      // do field validation
      if (form.name.value == ""){
        alert( "<?php echo _EZREALTY_STATE_ERROR1;?>" );
      } else {
        submitform( pressbutton );
      }
    }
</script>

<form action="index2.php" method="POST" name="adminForm">

	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" align="left"><span class="sectionname"><?php echo $row->stid ? _EZREALTY_STATE_EDIT : _EZREALTY_STATE_ADD;?> <?php echo _EZREALTY_STATE_TITLE2;?></span></td>
		</tr>
	</table>


	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
		<tr class="row0">
			<td width="200"><?php echo _EZREALTY_STATE_LOC;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="name" size="30" value="<?php echo $row->name;?>" /></td>
		</tr>
	</table>

	<input type="hidden" name="stid" value="<?php echo $row->stid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />

</form>

<?php 

}



/**************************************************\
            SHOW THE LIST OF COUNTRIES
\**************************************************/


function showCountrys( $option, &$rows, &$pageNav ) {
global $my;

		mosCommonHTML::loadOverlib();

    ?>

<form action="index2.php" method="post" name="adminForm">

	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><?php echo _EZREALTY_COUNTRY_TITLE;?></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th align="left"><?php echo _EZREALTY_COUNTRY_LOC;?></th>
			<th width='100'><?php echo _EZREALTY_COUNTRY_PUBSTATUS;?></th>
		</tr>
			<?php
		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];

			$task	=	$row->published ? 'unpublishcountry' : 'publishcountry';
			$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';
			$alt 	=	$row->published ? _EZREALTY_GENERAL_PUBLISHED : _EZREALTY_GENERAL_UNPUBLISHED;

			$row->id 	= $row->cnid;
			$link 		= 'index2.php?option=com_ezrealty&task=editcountryA&hidemainmenu=1&id='. $row->id;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );

			?>
		<tr class="<?php echo "row$k"; ?>">
				<td width="20">
				<?php echo $checked; ?>
				</td>

			<td align="left">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->name;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZREALTY_COUNTRY_EDITTAG;?>">
					<?php echo $row->name; ?>
					</a>
					<?php
				}
				?>
			</td>


			<td width="10%" align="center" nowrap><a href="javascript: void(0);" onclick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" /></a></td>
			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="countrys" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>

<?php

}


/**************************************************\
            ADD/EDIT COUNTRY ENTRIES
\**************************************************/


function editCountrys( &$row, $option ) {
global $database, $my;

mosMakeHtmlSafe( $row );

?>

<script language="javascript" type="text/javascript">

    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelcountry') {
        submitform( pressbutton );
        return;
      }
      // do field validation
      if (form.name.value == ""){
        alert( "<?php echo _EZREALTY_COUNTRY_ERROR1;?>" );
      } else {
        submitform( pressbutton );
      }
    }
</script>

<form action="index2.php" method="POST" name="adminForm">


	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" align="left"><span class="sectionname"><?php echo $row->cnid ? _EZREALTY_COUNTRY_EDIT : _EZREALTY_COUNTRY_ADD;?> <?php echo _EZREALTY_COUNTRY_TITLE2;?></span></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
		<tr class="row0">
			<td width="200"><?php echo _EZREALTY_COUNTRY_LOC;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="name" size="30" value="<?php echo $row->name;?>" /></td>
		</tr>
	</table>

	<input type="hidden" name="cnid" value="<?php echo $row->cnid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />

</form>

<?php 

}


/**************************************************\
            SHOW THE PRICE RANGE LIST
\**************************************************/


function showPrices( $option, &$rows, &$pageNav ) {
global $my;

		mosCommonHTML::loadOverlib();

    ?>

<form action="index2.php" method="post" name="adminForm">


	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><?php echo _EZREALTY_PRICES_TITLE;?></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th align="left" width="150"><?php echo _EZREALTY_PRICES_RANGE;?></th>
			<th align="left" width="150"><?php echo _EZREALTY_DISPLAY_VALUE;?></th>
			<th align="left"> </th>
			<th width='100'><?php echo _EZREALTY_PRICES_PUBSTATUS;?></th>
			<th colspan="2" nowrap="nowrap" width='100'><div align="center"><?php echo _EZREALTY_PRICES_REORDER;?></div></th>
		</tr>
		<?php
		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];

			$task	=	$row->published ? 'unpublishprc' : 'publishprc';
			$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';
			$alt 	=	$row->published ? _EZREALTY_GENERAL_PUBLISHED : _EZREALTY_GENERAL_UNPUBLISHED;

			$row->id 	= $row->pid;
			$link 		= 'index2.php?option=com_ezrealty&task=editprcA&hidemainmenu=1&id='. $row->id;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );

		?>
		<tr class="<?php echo "row$k"; ?>">

				<td width="20">
				<?php echo $checked; ?>
				</td>

			<td align="left" width="150">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->range;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZREALTY_PRICES_EDITTAG;?>">
					<?php echo $row->range; ?>
					</a>
					<?php
				}
				?>
			</td>
				<td width="150"><?php echo $row->display; ?></td>
				<td align="left"> </td>
			<td width="10%" align="center" nowrap><a href="javascript: void(0);" onclick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" /></a></td>
			<td width='50'>
				<?php if ($i > 0 || ($i+$pageNav->limitstart > 0)) { ?>
				<div align="center"><a href="#reorder" onclick="return listItemTask('cb<?php echo $i;?>','orderupprc')"><img src="images/uparrow.png" width="12" height="12" border="0" alt="<?php echo _EZREALTY_GENERAL_UP; ?>" /></a>
				<?php } else { echo "&nbsp;"; } ?>
				</div>
			</td>
			<td width='50'>
				<?php if ($i < $n-1 || $i+$pageNav->limitstart < $pageNav->total-1) { ?>
				<div align="center"><a href="#reorder" onclick="return listItemTask('cb<?php echo $i;?>','orderdownprc')"><img src="images/downarrow.png" width="12" height="12" border="0" alt="<?php echo _EZREALTY_GENERAL_DOWN; ?>" /></a>
				<?php } else { echo "&nbsp;"; } ?>
				</div>
			</td>
			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="prices" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>

<?php

}


/**************************************************\
            ADD/EDIT PRICE RANGE ITEMS
\**************************************************/


function editPrices( &$row, $option, $orderlist ) {
global $database, $my;

?>

<script language="javascript" type="text/javascript">

    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelprc') {
        submitform( pressbutton );
        return;
      }
      // do field validation
      if (form.range.value == ""){
        alert( "<?php echo _EZREALTY_MODPRICES_ERROR1;?>" );
      } else {
        submitform( pressbutton );
      }
    }

</script>

<form action="index2.php" method="POST" name="adminForm">

	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" align="left"><span class="sectionname"><?php echo $row->pid ? _EZREALTY_MODPRICES_EDIT : _EZREALTY_MODPRICES_ADD;?> <?php echo _EZREALTY_MODPRICES_TITLE;?></span></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
		<tr class="row0">
			<td width="200"><?php echo _EZREALTY_MODPRICES_RANGE;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="range" size="30" value="<?php echo htmlspecialchars( $row->range, ENT_QUOTES );?>" /> <strong><?php echo _EZREALTY_DETAILS_PROPPRICEDESC;?></strong></td>
		</tr>
		<tr class="row0">
			<td width="200"><?php echo _EZREALTY_PRICE_DISPLAYVALUE;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="display" size="30" value="<?php echo $row->display;?>" /></td>
		</tr>


		<tr class="row1">
			<td valign="top" ><?php echo _EZREALTY_MODPRICES_ORDER;?></td>
			<td nowrap ><?php echo $orderlist?></td>
		</tr>
	</table>

	<input type="hidden" name="pid" value="<?php echo $row->pid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />

</form>


<?php 

}


/**************************************************\
            SHOW THE LIST OF BEDROOM NUMBERS
\**************************************************/


function showRooms( $option, &$rows, &$pageNav ) {
global $my;

		mosCommonHTML::loadOverlib();

    ?>

<form action="index2.php" method="post" name="adminForm">

	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><?php echo _EZREALTY_ROOMS_TITLE;?></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th align="left"><?php echo _EZREALTY_ROOMS_LOC;?></th>
			<th width='100'><?php echo _EZREALTY_ROOMS_PUBSTATUS;?></th>
			<th colspan="2" nowrap="nowrap" width='100'><div align="center"><?php echo _EZREALTY_ROOMS_REORDER;?></div></th>
		</tr>
			<?php
		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];

			$task	=	$row->published ? 'unpublishroom' : 'publishroom';
			$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';
			$alt 	=	$row->published ? _EZREALTY_GENERAL_PUBLISHED : _EZREALTY_GENERAL_UNPUBLISHED;

			$row->id 	= $row->bid;
			$link 		= 'index2.php?option=com_ezrealty&task=editroomA&hidemainmenu=1&id='. $row->id;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );

			?>
		<tr class="<?php echo "row$k"; ?>">
				<td width="20">
				<?php echo $checked; ?>
				</td>

			<td align="left">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->number;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZREALTY_ROOMS_EDITTAG;?>">
					<?php echo $row->number; ?>
					</a>
					<?php
				}
				?>
			</td>

			<td width="10%" align="center" nowrap><a href="javascript: void(0);" onclick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" /></a></td>


			<td width='50'>
				<?php if ($i > 0 || ($i+$pageNav->limitstart > 0)) { ?>
				<div align="center"><a href="#reorder" onclick="return listItemTask('cb<?php echo $i;?>','orderuproom')"><img src="images/uparrow.png" width="12" height="12" border="0" alt="<?php echo _EZREALTY_GENERAL_UP; ?>" /></a>
				<?php } else { echo "&nbsp;"; } ?>
				</div>
			</td>
			<td width='50'>
				<?php if ($i < $n-1 || $i+$pageNav->limitstart < $pageNav->total-1) { ?>
				<div align="center"><a href="#reorder" onclick="return listItemTask('cb<?php echo $i;?>','orderdownroom')"><img src="images/downarrow.png" width="12" height="12" border="0" alt="<?php echo _EZREALTY_GENERAL_DOWN; ?>" /></a>
				<?php } else { echo "&nbsp;"; } ?>
				</div>
			</td>
			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="rooms" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>

<?php

}


/**************************************************\
            ADD/EDIT BEDROOM NUMBER ENTRIES
\**************************************************/


function editRooms( &$row, $option, $orderlist ) {
global $database, $my;


?>

<script language="javascript" type="text/javascript">

    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelroom') {
        submitform( pressbutton );
        return;
      }
      // do field validation
      if (form.number.value == ""){
        alert( "<?php echo _EZREALTY_ROOMS_ERROR1;?>" );
      } else if (form.number.value == "0"){
        alert( "<?php echo _EZREALTY_BEDROOMS_EXPL;?>" );
      } else {
        submitform( pressbutton );
      }
    }

</script>

<form action="index2.php" method="POST" name="adminForm">

	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" align="left"><span class="sectionname"><?php echo $row->bid ? _EZREALTY_ROOMS_EDIT : _EZREALTY_ROOMS_ADD;?> <?php echo _EZREALTY_ROOMS_TITLE2;?></span></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
		<tr class="row0">
			<td width="200"><?php echo _EZREALTY_ROOMS_LOC;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="number" size="30" maxlength="100" value="<?php echo $row->number;?>" /> <?php echo _EZREALTY_BEDROOMS_EXPL;?></td>
		</tr>
		<tr class="row1">
			<td valign="top"><?php echo _EZREALTY_ROOMS_ORDER;?></td>
			<td nowrap><?php echo $orderlist?></td>
		</tr>
	</table>

	<input type="hidden" name="bid" value="<?php echo $row->bid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />

</form>

<?php 

}



/**************************************************\
            SHOW THE LEADS LIST
\**************************************************/


function showLeads( $option, &$rows, &$lists, &$pageNav ) {
global $my;

		mosCommonHTML::loadOverlib();

    ?>

<link rel="stylesheet" href="components/com_ezrealty/includes/cpanel.css" type="text/css" />

<form action="index2.php" method="post" name="adminForm">

	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><?php echo _EZREALTY_LEADS_TITLE;?></td>
			<td nowrap="nowrap"><?php echo _EZREALTY_LISTINGS_FILTER;?></td>
			<td align="right"><?php echo $lists['locid'];?></td>
			<td align="right"><?php echo $lists['cid'];?></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th width="20" align="left">ID#</th>
			<th width="200" align="left"><?php echo _EZREALTY_LEADS_LNAME;?></th>
			<th width="250" align="left"><?php echo _EZREALTY_LEADS_LEMAIL;?></th>
			<th width="150" align="left"><?php echo _EZREALTY_SELLER_SMS9;?></th>
			<th width="200" align="left"><?php echo _EZREALTY_LEADS_LLOC;?></th>
			<th align="left"><?php echo _EZREALTY_DETAILS_BEDROOMS;?></th>
			<th align="left"><?php echo _EZREALTY_DETAILS_BATHROOMS;?></th>
			<th align="left"><?php echo _EZREALTY_LEADS_AR;?></th>
			<th nowrap width="100"><?php echo _EZREALTY_CATEGORY_PUBSTATUS;?></th>
			<th nowrap width="100"><?php echo _EZREALTY_LEADS_STATUS;?></th>
		</tr>
		<?php
		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];

				$task	=	$row->published ? 'unpublishleads' : 'publishleads';
				$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';
				$alt 	=	$row->published ? _EZREALTY_GENERAL_PUBLISHED : _EZREALTY_GENERAL_UNPUBLISHED;

			$row->id 	= $row->lid;
			$link 		= 'index2.php?option=com_ezrealty&task=editleadsA&hidemainmenu=1&id='. $row->id;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );

		?>
		<tr class="<?php echo "row$k"; ?>">
				<td width="20">
				<?php echo $checked; ?>
				</td>
				<td width="20" align="left"><?php echo ($row->lid); ?></td>

			<td align="left">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->lead_name;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZREALTY_MODPRICES_EDIT; ?>">
					<?php echo $row->lead_name; ?>
					</a>
					<?php
				}
				?>
			</td>

			<td align="left"><a href="mailto:<?php echo $row->email; ?>"><?php echo $row->email; ?></a></td>
			<td align="left"><a href="<?php echo $link; ?>" title="<?php echo _EZREALTY_SELLER_SMS26; ?>"><?php echo $row->mobile; ?></a></td>
			<td align="left"><?php echo $row->proploc; ?></td>

			<td align="left"><?php if ( $row->bedrooms==0.5 ){ ?><?php echo _EZREALTY_STUDIO;?><?php } ?><?php if ( $row->bedrooms >= 1 ){ ?><?php echo $row->bedrooms; ?><?php } ?></td>

			<td align="left"><?php echo $row->bathrooms; ?></td>
			<td align="left"><?php echo strftime("%c",$row->date); ?></td>
			<td width="100" align="center" nowrap><a href="javascript: void(0);" onClick="return listItemTask('cb<?php echo $i;?>','<?php echo $task;?>')"><img src="images/<?php echo $img;?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" /></a></td>

			<td align="left">

<?php if ( $row->status==0 ){ ?><?php echo _EZREALTY_LEADS_REVIEW;?><?php } ?>
<?php if ( $row->status==1 ){ ?><?php echo _EZREALTY_LEADS_CALL;?><?php } ?>
<?php if ( $row->status==2 ){ ?><?php echo _EZREALTY_LEADS_RECALL;?><?php } ?>
<?php if ( $row->status==3 ){ ?><?php echo _EZREALTY_LEADS_DOEMAIL;?><?php } ?>
<?php if ( $row->status==4 ){ ?><?php echo _EZREALTY_LEADS_DOINSPECTION;?><?php } ?>
<?php if ( $row->status==5 ){ ?><?php echo _EZREALTY_LEADS_NOINTEREST;?><?php } ?>
<?php if ( $row->status==6 ){ ?><?php echo _EZREALTY_LEADS_CLOSED;?><?php } ?>

</td>






			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="leads" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>

<?php

}



/**************************************************\
            ADD/EDIT PROPERTY LEADS ITEMS
\**************************************************/


function editLeads( &$row, &$lists, $option ) {
global $database, $my, $mosConfig_live_site, $er_mobile, $er_username, $er_password, $er_api;

$link1 = $mosConfig_live_site. '/administrator/index2.php?option=com_ezrealty&task=sendsms';

?>

<script language="javascript" type="text/javascript">

    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelleads') {
        submitform( pressbutton );
        return;
      }
      // do field validation

      if (form.lead_name.value == ""){
        alert( "<?php echo _EZREALTY_LEADS_ERROR1;?>" );

      } else if (form.email.value == ""){
        alert( "<?php echo _EZREALTY_LEADS_ERROR2;?>" );

      } else if (form.cid.value == "0"){
        alert( "<?php echo _EZREALTY_LEADS_ERROR3;?>" );

      } else if (form.budget.value == ""){
        alert( "<?php echo _EZREALTY_LEADS_ERROR4;?>" );

      } else if (form.bedrooms.value == ""){
        alert( "<?php echo _EZREALTY_LEADS_ERROR6;?>" );


      } else {
        submitform( pressbutton );
      }
    }

</script>

<form action="index2.php" method="POST" name="adminForm">

	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" align="left"><span class="sectionname"><?php echo $row->lid ? _EZREALTY_LEADS_EDIT : _EZREALTY_LEADS_ADD;?> <?php echo _EZREALTY_LEADS_TITLE2;?></span></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">


		<tr>
			<td width="150"><strong><?php echo _EZREALTY_LEADS_LCONTACT;?>:</strong></td>
			<td align="left">&nbsp;</td>
		</tr>
		<tr>
			<td width="150"><?php echo _EZREALTY_LEADS_LNAME;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="lead_name" size="30" value="<?php echo $row->lead_name;?>" />  <?php echo _EZREALTY_DETAILS_REQ;?></td>
		</tr>

		<tr>
			<td align="left"><?php echo _EZREALTY_LEADS_HPHONE;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="hphone" size="30" value="<?php echo $row->hphone;?>" /></td>
		</tr>

		<tr>
			<td align="left"><?php echo _EZREALTY_LEADS_WPHONE;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="wphone" size="30" value="<?php echo $row->wphone;?>" /></td>
		</tr>

		<tr>
			<td align="left"><?php echo _EZREALTY_LEADS_MOBILE;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="mobile" size="30" value="<?php echo $row->mobile;?>" /></td>
		</tr>

		<tr>
			<td align="left"><?php echo _EZREALTY_LEADS_FAX;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="fax" size="30" value="<?php echo $row->fax;?>" /></td>
		</tr>

		<tr>
			<td align="left"><?php echo _EZREALTY_LEADS_LEMAIL;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="email" size="30" value="<?php echo $row->email;?>" />  <?php echo _EZREALTY_DETAILS_REQ;?></td>
		</tr>



  <tr>
    <td valign="top"><br /><strong><?php echo _EZREALTY_LEADS_DETAILS;?>:</td>
	<td align="left">&nbsp;</td>
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
	<td valign="top"><br /><input class="inputbox" type="text" name="budget" size="30" value="<?php echo $row->budget;?>" />  <?php echo _EZREALTY_DETAILS_REQ;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><?php echo _EZREALTY_DETAILS_PROPCITY;?>:</td>
    <td valign="top"><br /><?php echo $lists['locid']; ?></td>
  </tr>

  <tr>
    <td valign="top"><br /><?php echo _EZREALTY_DETAILS_AREA;?>:</td>
    <td valign="top"><br /><?php echo $lists['stid']; ?></td>
  </tr>

  <tr>
    <td valign="top"><br /><?php echo _EZREALTY_DETAILS_COUNTRY;?>:</td>
    <td valign="top"><br /><?php echo $lists['cnid']; ?></td>
  </tr>

  <tr>
    <td valign="top"><br /><?php echo _EZREALTY_DETAILS_BEDROOMS;?>:</td>
    <td align="left"><br /><?php echo $lists['bedrooms']; ?>  <?php echo _EZREALTY_DETAILS_REQ;?></td>
  </tr>
  <tr>
    <td valign="top"><br /><?php echo _EZREALTY_DETAILS_BATHROOMS;?>:</td>
    <td align="left"><br /><input class="inputbox" type="text" name="bathrooms" size="15" value="<?php echo $row->bathrooms;?>" /></td>
  </tr>

  <tr>
    <td valign="top"><br /><?php echo _EZREALTY_LEADS_SOURCE;?>:</td>
    <td valign="top"><br /><?php echo $lists['source']; ?>  <?php echo _EZREALTY_DETAILS_REQ;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><?php echo _EZREALTY_LEADS_COMMENTS;?>:<br /></td>
    <td align="left"><br /><textarea rows="5" name="comments" cols="70" maxlength="200"><?php echo $row->comments;?></textarea><br /><br /></td>
  </tr>

	<tr>
		<th colspan="2"><?php echo _EZREALTY_LEADS_ADMIN;?></th>
	</tr>

  <tr>
    <td valign="top"><br /><?php echo _EZREALTY_LEADS_STATUS;?>:</td>
    <td valign="top"><br /><?php echo $lists['status']; ?>  <?php echo _EZREALTY_DETAILS_REQ;?></td>
  </tr>

  <tr>
    <td valign="top"><br /><?php echo _EZREALTY_LEADS_NOTES;?><br /></td>
    <td align="left"><br /><textarea rows="10" name="notes" cols="70"><?php echo $row->notes;?></textarea><br /><br /></td>
  </tr>


	</table>

	<input type="hidden" name="lid" value="<?php echo $row->lid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />

</form>

<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
	<tr>
		<th><?php echo _EZREALTY_SELLER_SMS24;?></th>
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

		<script type="text/javascript">
		<!--
		function validatesms() {
			var form = document.form1;
			// do field validation
			if (form.text.value == "") {
				alert( "<?php echo _EZREALTY_SELLER_SMS18;?>" );

			} else {
				document.form1.action = '<?php echo $link1; ?>';
				document.form1.submit();
			}
		}
		//-->
		</script>

		<form class="form" name="form1" action="<?php echo $link1;?>" method="get">
			<input type="hidden" name="option" value="com_ezrealty" />
			<input type="hidden" name="task" value="sendsms" />
			<input type="hidden" name="id" value="<?php echo $row->lid;?>" />
			<input type="hidden" name="to" value="<?php echo $row->mobile;?>" />
			<input type="hidden" name="user" value="<?php echo stripslashes( $er_username );?>" />
			<input type="hidden" name="password" value="<?php echo stripslashes( $er_password );?>" />
			<input type="hidden" name="api" value="<?php echo stripslashes( $er_api );?>" />
			<input type="hidden" name="from" value="<?php echo stripslashes( $er_mobile );?>" />


			<table border="0" width="300" cellspacing="10">
				<tr>
					<td valign="top">
					<strong><?php echo _EZREALTY_SELLER_SMS10;?>:</strong><br /><textarea name="text" id="text" class="inputbox" rows="5" cols="16" maxlength="150"></textarea><br />(<?php echo _EZREALTY_SELLER_SMS21;?>)</td>
					<td valign="top" align="left"><br /><?php echo _EZREALTY_SELLER_SMS27;?></td>
				</tr>
				<tr>
					<td valign="bottom" colspan="2"><input type="button" name="<?php echo _EZREALTY_VIEWDET_SEND;?>" value="<?php echo _EZREALTY_VIEWDET_SEND;?>" class="button" onclick="validatesms()" /> <input class="button" type="reset" name="<?php echo _EZREALTY_RESET;?>" value="<?php echo _EZREALTY_RESET;?>"></td>
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
			<td width="100%" valign="top" align="left">

<strong><?php echo _EZREALTY_SELLER_SMS23;?></strong><br />
<?php echo _EZREALTY_SELLER_SMS3;?> <a target="_blank" href="http://affiliates.clickatell.com/central/campaigns/redir.php?cid=2662">Clickatell</a> <?php echo _EZREALTY_SELLER_SMS4;?>
<br />
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
            SHOW THE LIST OF PROFILES
\**************************************************/


function showProf( $option, &$rows, &$pageNav, $lists ) {
global $my;

		mosCommonHTML::loadOverlib();

    ?>

<form action="index2.php" method="post" name="adminForm">

    <table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><?php echo _EZREALTY_PROFILE_MANAGE;?></td>
			<td nowrap="nowrap"><?php echo _EZREALTY_LISTINGS_FILTER;?></td>
			<td align="right"><?php echo $lists['sellertype'];?></td>
			<td nowrap="nowrap" width="70" align="right"><?php echo _EZREALTY_ORDERBY;?>:- </td>
			<td align="right"><?php echo $lists['order'];?></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th width="20" align='left'>ID#</th>
			<th class="title" width="70"><?php echo _EZREALTY_PROFILE_IMAGE; ?></th>
			<th class="title" width="100"><?php echo _EZREALTY_PROFILE_LOGO; ?></th>
			<th class="title" width="150"><?php echo _EZREALTY_PROFILE_NAME; ?></th>
			<th class="title" width="150"><?php echo _EZREALTY_PROFILE_TYPE; ?></th>
			<th class="title" width="150"><?php echo _EZREALTY_PROFILE_NUMPROPS; ?></th>
			<th class="title" width="150"><?php echo _EZREALTY_PROFILE_COMPANY; ?></th>
			<th class="title"><?php echo 'email'; ?></th>
			<th width="100"><?php echo 'published'; ?></th>
			<th align='center' width='100'><?php echo _EZREALTY_VLDET_DELETE;?></th>
				</tr>
		<?php
		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];

			$task	=	$row->published ? 'unpublishprofile' : 'publishprofile';
			$img	=	$row->published ? 'publish_g.png' : 'publish_x.png';
			$alt 	=	$row->published ? _EZREALTY_GENERAL_PUBLISHED : _EZREALTY_GENERAL_UNPUBLISHED;

			$row->id 	= $row->prid;
			$link 		= 'index2.php?option=com_ezrealty&task=editprofA&hidemainmenu=1&id='. $row->id;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );

		?>
		<tr class="<?php echo "row$k"; ?>">
				<td width="20">
				<?php echo $checked; ?>
				</td>
				<td width="20">
				<?php echo $row->mid; ?>
				</td>
			<td width="70" align="left"><?php if ($row->dealer_image) { ?><img src="../components/com_ezrealty/profiles/<?php echo $row->dealer_image;?>" border="0" width="50" alt="" /><?php }else{ ?><img src="../components/com_ezrealty/profiles/nothumb.jpg" border="0" width="50" alt="" /><?php } ?></td>

			<td width="100" align="left"><?php if ($row->logo_image) { ?><img src="../components/com_ezrealty/profiles/<?php echo $row->logo_image;?>" border="0" alt="" /><?php }else{ ?><img src="../components/com_ezrealty/profiles/nologo.jpg" border="0" alt="" /><?php } ?></td>

			<td width="150">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->dealer_name;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZREALTY_PROFILE_EDIT; ?>">
					<?php echo $row->dealer_name; ?>
					</a>
					<?php
				}
				?>
			</td>


			<td width="150" align="left" nowrap>
<?php if ( $row->dealer_type==1 ){ ?><?php echo _EZREALTY_LISTER_AGENT;?><?php } ?>
<?php if ( $row->dealer_type==2 ){ ?><?php echo _EZREALTY_LISTER_OWNER;?><?php } ?>
<?php if ( $row->dealer_type==3 ){ ?><?php echo _EZREALTY_LISTER_BROKER;?><?php } ?>

			</td>
			<td width="150" align="left" nowrap><?php echo $row->nproperties; ?></td>
			<td width="150" align="left" nowrap><?php echo $row->dealer_company; ?></td>

			<td align="left" nowrap><a href="mailto:<?php echo $row->dealer_email; ?>"><?php echo $row->dealer_email;?></a></td>
			<td width="100" align="center" nowrap><?php if ($row->published == 0){ ?><img src="images/publish_r.png" width="16" height="16" border="0" alt="" /><?php } else { ?><img src="images/publish_g.png" width="16" height="16" border="0" alt="" /><?php } ?></td>
			<td align='center' width="100"><a href = "javascript:if (confirm('<?php echo _EZREALTY_VLDET_DELETE;?>')){ location.href='index2.php?option=com_ezrealty&amp;task=removeprof&amp;id=<?php echo $row->prid?>';}" title="<?php echo _EZREALTY_VLDET_DELETE;?>"><strong><?php echo _EZREALTY_VLDET_DELETE;?></strong></a></td>
				</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="profiles" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>

<?php

}


/**************************************************\
            ADD/EDIT PROFILE ENTRIES
\**************************************************/


function editProf( &$row, $option, &$lists, $list ) {
global $database, $my, $er_logowidth, $er_logoheight, $er_profmaxwidth, $er_profmaxheight;


?>

<script language="javascript" type="text/javascript">

    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelprof') {
        submitform( pressbutton );
        return;
      }
      // do field validation
			if (form.mid.value == "0") {
				alert( "<?php echo _EZREALTY_PROFILE_ERROR_MID;?>" );

			} else if (form.dealer_type.value == "0") {
				alert( "<?php echo _EZREALTY_PROFILE_ERROR_TYPE;?>" );

			} else if (form.dealer_name.value == "") {
				alert( "<?php echo _EZREALTY_PROFILE_NAME;?>" );

			} else if (form.dealer_email.value == ""){
				alert( "<?php echo _EZREALTY_PROFILE_EMAIL;?>" );

			} else if (form.dealer_locality.value == ""){
				alert( "<?php echo _EZREALTY_MODLOC_ERROR1;?>" );

			} else {
        submitform( pressbutton );
      }
    }

</script>

<form action="index2.php" method="POST" name="adminForm" enctype="multipart/form-data">

	<table cellpadding="4" cellspacing="0" border="0" width="100%">
	    <tr>
	      <td width="100%" align="left"><span class="sectionname"><?php echo $row->prid ? _EZREALTY_GENERIC_EDIT : _EZREALTY_GENERIC_ADD;?> <?php echo _EZREALTY_PROFILE_DETAILS;?></span></td>
	    </tr>
	</table>



	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_LINK; ?>:</td>
			<td align="left"><?php echo $lists['mid']; ?></td>
		</tr>

		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_NAME; ?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_name" id="dealer_name" size="40" maxlength="60" value="<?php echo  $row->dealer_name ; ?>" /> <?php echo _EZREALTY_DETAILS_REQ;?></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_TYPE4; ?>:</td>
			<td align="left"><?php echo $lists['dealer_type'];?> <?php echo _EZREALTY_DETAILS_REQ;?></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_INTRO; ?>:</td>
			<td align="left"><textarea class="inputbox" cols="29" rows="5" id="dealer_info" name="dealer_info"><?php echo $row->dealer_info; ?></textarea></td>
		</tr>
		<tr>
			<td valign="top" class="key"><?php echo _EZREALTY_PROFILE_COMPANY; ?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_company" id="dealer_company" size="40" maxlength="60" value="<?php echo  $row->dealer_company ; ?>" /></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_ADDRESS1; ?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_address1" id="dealer_address1" size="15" maxlength="20" value="<?php echo $row->dealer_address1 ; ?>" /></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_ADDRESS2; ?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_address2" id="dealer_address2" size="40" maxlength="60" value="<?php echo $row->dealer_address2 ; ?>" /></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_LOCALITY; ?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_locality" id="dealer_locality" size="40" maxlength="60" value="<?php echo  $row->dealer_locality ; ?>" /> <?php echo _EZREALTY_DETAILS_REQ;?></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_PCODE; ?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_pcode" id="dealer_pcode" size="40" maxlength="60" value="<?php echo  $row->dealer_pcode ; ?>" /></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_STATE; ?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_state" id="dealer_state" size="40" maxlength="60" value="<?php echo  $row->dealer_state ; ?>" /></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_COUNTRY; ?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_country" id="dealer_country" size="40" maxlength="60" value="<?php echo  $row->dealer_country ; ?>" /></td>
		</tr>

  <tr>
    <td width="20%" valign="top"><br /> </td>
    <td width="80%" valign="top"><br /><a target="_blank" href="http://www.satsig.net/maps/lat-long-finder.htm"><strong>*** <?php echo _EZREALTY_FIND_COORDINATES;?> ***</strong></a></td>
  </tr>

		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_DETAILS_DECLAT;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_declat" size="15" value="<?php echo $row->dealer_declat;?>" /></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_DETAILS_DECLONG;?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_declong" size="15" value="<?php echo $row->dealer_declong;?>" /></td>
		</tr>


		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_SHOWADDY; ?>:</td>
			<td align="left"><?php echo $lists['show_addy']; ?> <?php echo _EZREALTY_PROFILE_SHOWADDYDESC; ?></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_EMAIL; ?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_email" id="dealer_email" size="40" maxlength="60" value="<?php echo  $row->dealer_email ; ?>" /> <?php echo _EZREALTY_DETAILS_REQ;?></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_PHONE; ?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_phone" id="dealer_phone" size="40" maxlength="60" value="<?php echo  $row->dealer_phone ; ?>" /></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_FAX; ?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_fax" id="dealer_fax" size="40" maxlength="60" value="<?php echo  $row->dealer_fax ; ?>" /></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_MOBILE; ?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_mobile" id="dealer_mobile" size="40" maxlength="60" value="<?php echo  $row->dealer_mobile ; ?>" /></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_SMS; ?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_sms" id="dealer_sms" size="40" maxlength="60" value="<?php echo  $row->dealer_sms ; ?>" /></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_ALLOWSMS; ?>:</td>
			<td align="left"><?php echo $lists['show_sms']; ?></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_WEB; ?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_web" id="dealer_web" size="40" maxlength="60" value="<?php echo  $row->dealer_web ; ?>" /></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_BLOG; ?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_blog" id="dealer_blog" size="40" maxlength="60" value="<?php echo  $row->dealer_blog ; ?>" /></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_SKYPE; ?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_skype" id="dealer_skype" size="40" maxlength="60" value="<?php echo  $row->dealer_skype ; ?>" /></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_YAHOO; ?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_ymsgr" id="dealer_ymsgr" size="40" maxlength="60" value="<?php echo  $row->dealer_ymsgr ; ?>" /></td>
		</tr>
		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_ICQ; ?>:</td>
			<td align="left"><input class="inputbox" type="text" name="dealer_icq" id="dealer_icq" size="40" maxlength="60" value="<?php echo  $row->dealer_icq ; ?>" /></td>
		</tr>


		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_IMAGE; ?>:<br /><br /><?php echo _EZREALTY_PROFILE_MAXSIZE;?><br />
<?php echo $er_profmaxwidth.' (W) x '.$er_profmaxheight.' (H)';?></td>
			<td valign="top"><?php profileUpload($row->dealer_image,'1',$list['dealer_image'],'dealer_image');?>
			<?php if ($row->dealer_image){ ?>
			&nbsp;&nbsp;<strong><a href="index2.php?option=com_ezrealty&task=deleteprofile_image&id=<?php echo $row->prid;?>"><?php echo _EZREALTY_VLDET_DELETEIMG; ?></a></strong>
			<?php } ?>
			</td>
		</tr>

		<tr>
			<td width="20%" class="key"><?php echo _EZREALTY_PROFILE_LOGO; ?>:<br /><br /><?php echo _EZREALTY_PROFILE_MAXSIZE;?><br />
<?php echo $er_logowidth.' (W) x '.$er_logoheight.' (H)';?></td>
			<td valign="top"><?php logoUpload($row->logo_image,'1',$list['logo_image'],'logo_image');?>
			<?php if ($row->logo_image){ ?>
			&nbsp;&nbsp;<strong><a href="index2.php?option=com_ezrealty&task=deletelogo_image&id=<?php echo $row->prid;?>"><?php echo _EZREALTY_VLDET_DELETEIMG; ?></a></strong>
			<?php } ?>
			</td>
		</tr>

		<tr>
			<td width="20%" class="key"><br /><br /><?php echo _EZREALTY_PROFILE_APPROVE; ?>:</td>
			<td align="left"><br /><br /><?php echo $lists['published']; ?></td>
		</tr>




	</table>

	<input type="hidden" name="prid" value="<?php echo $row->prid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />

</form>


<?php 

}











/**************************************************\
      SHOW THE LIST OF CONTENT ITEMS
\**************************************************/


function showContent( $option, &$rows, &$pageNav ) {
global $my;

mosCommonHTML::loadOverlib();

    ?>

<form action="index2.php" method="post" name="adminForm">


	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><?php echo _EZREALTY_MANAGE_STATIC; ?></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th align="left"><?php echo _EZREALTY_CONTENT_ITEM; ?></th>
		</tr>


			<?php
		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];

			$row->id 	= $row->contid;
			$link 		= 'index2.php?option=com_ezrealty&task=editcontentA&hidemainmenu=1&id='. $row->id;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );

			?>
		<tr class="<?php echo "row$k"; ?>">

				<td width="20">
				<?php echo $checked; ?>
				</td>

			<td align="left">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->title;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZREALTY_MODPRICES_EDIT; ?>">
					<?php echo $row->title; ?>
					</a>
					<?php
				}
				?>
			</td>

			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="content" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>

<?php

}


/**************************************************\
            ADD/EDIT CONTENT ITEM
\**************************************************/


function editContent( &$row, $option ) {
global $database, $my;

mosMakeHtmlSafe( $row );

?>

<script language="javascript" type="text/javascript">

    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelcontent') {
        submitform( pressbutton );
        return;
      }
				<?php getEditorContents( 'editor1', 'content' ) ; ?>

        submitform( pressbutton );
    }

</script>

<form action="index2.php" method="POST" name="adminForm">

	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" align="left"><span class="sectionname"><?php echo $row->contid ? _EZREALTY_MODPRICES_EDIT : _EZREALTY_MODPRICES_ADD;?> <?php echo $row->title; ?></span></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
		<tr class="row0">
			<td width="200" valign="top"><strong><?php echo $row->title; ?></strong>:</td>
			<td align="left">		<?php
		// parameters : areaname, content, hidden field, width, height, rows, cols
		editorArea( 'editor1',  $row->content , 'content', '100%;', '300', '60', '20' ) ; ?>

</td>
		</tr>


	</table>

	<input type="hidden" name="contid" value="<?php echo $row->contid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />

</form>

<?php 

}








/**************************************************\
      SHOW THE LIST OF MAILING LIST ITEMS
\**************************************************/


function showMlist( $option, &$rows, &$pageNav ) {
global $my;

mosCommonHTML::loadOverlib();

    ?>

<form action="index2.php" method="post" name="adminForm">


	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" class="sectionname" align="left"><?php echo _EZREALTY_MANAGE_SUBSCRIBER; ?></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminlist">
		<tr>
			<th width="20" align='left'><input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $rows ); ?>);" /></th>
			<th align="left" width="200"><?php echo _EZREALTY_SUBSCRIBER_NAME; ?></th>
			<th align="left"><?php echo _EZREALTY_SUBSCRIBER_EMAIL; ?></th>
			<th align="left" width="100"><?php echo _EZREALTY_SUBSCRIBER_CONFIRMED; ?></th>
			<th align="left" width="200"><?php echo _EZREALTY_SUBSCRIBER_DATE; ?></th>
		</tr>


			<?php
		$k = 0;
		for ($i=0, $n=count( $rows ); $i < $n; $i++) {
			$row = &$rows[$i];

			$row->id 	= $row->mailid;
			$link 		= 'index2.php?option=com_ezrealty&task=editmlistA&hidemainmenu=1&id='. $row->id;

			$checked 	= mosCommonHTML::CheckedOutProcessing( $row, $i );

			?>
		<tr class="<?php echo "row$k"; ?>">

				<td width="20">
				<?php echo $checked; ?>
				</td>

			<td align="left" width="200">
				<?php
				if ( $row->checked_out && ( $row->checked_out != $my->id ) ) {
					echo $row->title;
				} else {
					?>
					<a href="<?php echo $link; ?>" title="<?php echo _EZREALTY_MODPRICES_EDIT; ?>">
					<?php echo $row->name; ?>
					</a>
					<?php
				}
				?>
			</td>
			<td align="left"><?php echo $row->email; ?></td>
			<td width="100"><?php if ($row->confirmed == 1){ ?><img src="images/tick.png" border="0" alt="<?php echo 'Confirmed'; ?>" title="<?php echo 'Confirmed'; ?>" /><?php }else{ ?><img src="images/publish_x.png" border="0" alt="<?php echo 'Not Confirmed'; ?>" title="<?php echo 'Not Confirmed'; ?>" /><?php } ?></td>
			<td width="200"><?php echo $row->date; ?></td>

			</tr>
			<?php
			$k = 1 - $k;
		}
		?>
		</table>
		<?php echo $pageNav->getListFooter(); ?>
		
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="mlist" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>

<?php

}


/**************************************************\
            ADD/EDIT MAILING LIST ITEM
\**************************************************/


function editMlist( &$row, $option, &$lists ) {
global $database, $my;

mosMakeHtmlSafe( $row );

?>

<script language="javascript" type="text/javascript">

    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancelmlist') {
        submitform( pressbutton );
        return;
      }
      // do field validation

      if (form.name.value == ""){
			alert( "<?php echo _EZREALTY_ERROR_SUBNAME; ?>" );
      } else if (form.email.value == ""){
        alert( "<?php echo _EZREALTY_ERROR_EMAIL;?>" );

      } else {
        submitform( pressbutton );
      }
    }

</script>

<form action="index2.php" method="POST" name="adminForm">

	<table cellpadding="4" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%" align="left"><span class="sectionname"><?php echo $row->mailid ? _EZREALTY_MODPRICES_EDIT : _EZREALTY_MODPRICES_ADD;?> <?php echo _EZREALTY_CPANEL_MLIST; ?></span></td>
		</tr>
	</table>

	<table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform">
		<tr class="row0">
			<td width="200" valign="top"><strong><?php echo _EZREALTY_SUBSCRIBER_NAME; ?></strong>:</td><td align="left"><input class="inputbox" type="text" name="name" id="name" size="40" maxlength="60" value="<?php echo  $row->name; ?>" /> <?php echo _EZREALTY_DETAILS_REQ;?></td>
		</tr>
		<tr class="row0">
			<td width="200" valign="top"><strong><?php echo _EZREALTY_SUBSCRIBER_EMAIL; ?></strong>:</td><td align="left"><input class="inputbox" type="text" name="email" id="email" size="40" maxlength="60" value="<?php echo  $row->email; ?>" /> <?php echo _EZREALTY_DETAILS_REQ;?></td>
		</tr>
		<tr class="row0">
			<td width="200" valign="top"><strong><?php echo _EZREALTY_SUBSCRIBER_CONFIRMED; ?></strong>:</td><td align="left"><?php echo $lists['confirmed']; ?> <?php echo _EZREALTY_DETAILS_REQ;?></td>
		</tr>
	</table>

	<input type="hidden" name="mailid" value="<?php echo $row->mailid; ?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="option" value="<?php echo $option; ?>" />

</form>

<?php 

}










/* *********************************************************************************
	   					BUILD AND MANAGE THE CONFIGURATION FUNCTIONS
   ********************************************************************************* */


function showConfig( $option, $lists ) {
  global $database, $mosConfig_live_site, $mosConfig_absolute_path;


DEFINE("EZADMIN_PATH","components/com_ezrealty");
include(EZADMIN_PATH."/config.ezrealty.php");

DEFINE("INCLUDES_PATH","components/com_ezrealty/includes");
include(INCLUDES_PATH."/includes.ezrealty.php");

	$tabs = new mosTabs(0);
  
?>
    <script language="javascript" type="text/javascript">
    function submitbutton(pressbutton) {
      var form = document.adminForm;
      if (pressbutton == 'cancel') {
        submitform( pressbutton );
        return;
      } else {

        submitform( pressbutton );
        
      }
    }
    </script>


<table cellpadding="4" cellspacing="0" border="0" width="100%">
	<tr>
			<td width="270" align="right">
				<span class="componentheading">config.ezrealty.php is :
				<?php echo is_writable( 'components/com_ezrealty/config.ezrealty.php' ) ? '<strong><font color="green"> '._EZREALTY_WRITABLE.'</font></strong>' : '<strong><font color="red"> '._EZREALTY_UNWRITABLE.'</font></strong>' ?>
				</span>
			</td>
	</tr>
</table>


 <form action="index2.php" method="POST" name="adminForm">
  <table cellpadding="4" cellspacing="1" border="0" width="100%">
  <tr bgcolor="#990000">

    <td width="100%" align="center" >
<font color="#ffffff" size="6" face="impact"><?php echo _EZREALTY_CONFIG_TITLE;?></font>
</td>
  </tr>
</table>
<table cellpadding="1" cellspacing="0" border="0" width="100%" class="menudottedline">  
  <tr  class="menubackgr" >
    <td width="100%" align="right" class="smallgrey">
Version 5.1.6 Stable &nbsp;&nbsp;
    </td>
  </tr>
  </table>

<table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminform">
    <tr>
		<td align="left">



<?php
$tabs->startPane("configPane");
$tabs->startTab(_EZREALTY_CONFIG_IMG1,"image-page");
?>

<table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminform">
    <tr>
      <th><div align="center"><?php echo _EZREALTY_CONFIG_IMAGESIZES;?></div></th>
    </tr>
</table>
    <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminform">
     <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><br /><strong><?php echo _EZREALTY_CONFIG_TNCREATOR; ?></strong></td>
      <td align="left" valign="top"  width="150"><br />
      <?php echo $lists['er_thumbcreation']; ?>
      </td>
      <td align="left" valign="top"><br />
        <?php
          echo ""._EZREALTY_CONFIG_GDCHOOSE."<br />";
          # Perform check for common image processors
          #$shell_cmd="";
          #if (substr(PHP_OS, 0, 3) == "WIN") {
          #  $shell_cmd = getenv( "COMSPEC" ) . " /C ";
          #}
          # Imagemagick detection
          #unset($output);
          #@exec($shell_cmd."convert -version", $output, $status);
          #if (!$status) {
          #  if (preg_match("/imagemagick[ \t]+([0-9\.]+)/i",$output[0],$matches)) {
          #    echo "<span class='small'>Found Imagemagick</span><br />";
          #  }
          #}
          # NetPBM detection
          #unset($output);
          #@exec($shell_cmd."jpegtopnm -version 2>&1", $output, $status);
          #if (!$status) {
          #  if(preg_match("/netpbm[ \t]+([0-9\.]+)/i",$output[0],$matches)) {
          #    echo "<span class='small'>Found NetPBM</span><br />";
          #  }
          #}
          # GD detection
          $GDfuncList = get_extension_funcs('gd');
          ob_start();
          @phpinfo(INFO_MODULES);
          $output=ob_get_contents();
          ob_end_clean();
          $matches[1]='';
          if (preg_match("/GD Version[ \t]*(<[^>]+>[ \t]*)+([^<>]+)/s",$output,$matches)) {
            $gdversion = $matches[2];
          }
          if ($GDfuncList) {
            echo "<span class='small'>"._EZREALTY_CONFIG_GDFOUND." $gdversion</span><br />";
          }
        ?><br />
        <?php echo _EZREALTY_CONFIG_GDLIMIT;?>
      </td>
    </tr>
    
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_WIDTHTHUMB;?>:</strong><br /></td>
      <td align="left" valign="top"><br /><input type="text" name="er_thumbwidth" value="<?php echo "$er_thumbwidth"; ?>"><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZREALTY_CONFIG_WIDTHTHUMBDESC;?><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_THUMBQUAL;?>:</strong><br /></td>
      <td align="left" valign="top"><br /><input type="text" name="er_thumbquality" value="<?php echo "$er_thumbquality"; ?>"> <strong>%</strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZREALTY_CONFIG_THUMBQUALDESC;?><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_IMGDIR;?>:</strong><br /></td>
      <td align="left" valign="top"><br /><input type="text" name="er_imagedirectory" value="<?php echo "$er_imagedirectory"; ?>"><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZREALTY_CONFIG_IMGDIRDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_WIDTHCATTHUMB;?></strong><br /></td>
      <td align="left" valign="top"><br /><input type="text" name="er_catthumbwidth" value="<?php echo "$er_catthumbwidth"; ?>" /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZREALTY_CONFIG_WIDTHCATTHUMBDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><br /><strong><?php echo _EZREALTY_CONFIG_WIDTHPROPIMG;?></strong><br /></td>
      <td align="left" valign="top"><br /><input type="text" name="er_imgwidth" value="<?php echo "$er_imgwidth"; ?>" /><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZREALTY_CONFIG_WIDTHPROPIMGDESC;?><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_MAXWIDTH;?></strong><br /></td>
      <td align="left" valign="top"><br /><input type="text" name="er_maxwidth" value="<?php echo "$er_maxwidth"; ?>" /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZREALTY_CONFIG_MAXWIDTHDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><br /><strong><?php echo _EZREALTY_CONFIG_MAXHEIGHT;?></strong><br /></td>
      <td align="left" valign="top"><br /><input type="text" name="er_maxheight" value="<?php echo "$er_maxheight"; ?>" /><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZREALTY_CONFIG_MAXHEIGHTDESC;?><br /></td>
    </tr>

    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_CONFIG_YOURVIDEOS;?></div></th>
    </tr>

	<tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_FLV;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_useflv']; ?></td><td align="left"><?php echo _EZREALTY_CONFIG_FLV_DESC;?></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_FLVWIDTH;?></strong><br /></td>
      <td align="left" valign="top"><br /><input type="text" name="er_flvwidth" value="<?php echo "$er_flvwidth"; ?>" /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZREALTY_CONFIG_FLVWIDTH_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><br /><strong><?php echo _EZREALTY_CONFIG_FLVHEIGHT;?></strong><br /></td>
      <td align="left" valign="top"><br /><input type="text" name="er_flvheight" value="<?php echo "$er_flvheight"; ?>" /><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZREALTY_CONFIG_FLVHEIGHT_DESC;?><br /></td>
    </tr>

</table>



			<?php
		$tabs->endTab();
		$tabs->startTab(_EZREALTY_TABS_BUSINESS,"business-page");
			?>


    <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminform">
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_CONFIG_YOURBIZSET;?></div></th>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZREALTY_CONFIG_BIZNAME;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_bizname" value="<?php echo stripslashes( $er_bizname );?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_BIZNAMEDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZREALTY_CONFIG_BIZAD;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_bizad" size="40" value="<?php echo stripslashes( $er_bizad );?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_BIZADDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_TELEPHONE;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_telephone" value="<?php echo "$er_telephone"; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_TELEPHONEDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_EMAIL;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_viewing_notify" value="<?php echo "$er_viewing_notify"; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_EMAILDESC;?><br /><br /></td>
    </tr>
	<tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_CURRENCYCODE;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_currencycode" value="<?php echo "$er_currencycode"; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_CURRENCYCODEDESC;?><br /><br /></td>
    </tr>
	<tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_CURRENCYSIGN;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_currencysign" value="<?php echo htmlspecialchars ($er_currencysign); ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_CURRENCYSIGNDESC;?><br /><br /></td>
    </tr>
	<tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_CURRENCYPOS;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_currencypos']; ?></td><td align="left"><?php echo _EZREALTY_CONFIG_CURRENCYPOS_DESC;?></td>
    </tr>
	<tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_CURRENCYFORMAT;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_currencyformat']; ?></td><td align="left"><?php echo _EZREALTY_CONFIG_CURRENCYFORMAT_DESC;?></td>
    </tr>
	</table>

			<?php
		$tabs->endTab();
		$tabs->startTab(_EZREALTY_TABS_PROFILES,"profile-page");
			?>



    <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminform">
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_CONFIG_PROFILING;?></div></th>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><strong><br /><?php echo _EZREALTY_CONFIG_SHOWPROF;?></strong></td>
      <td align="left" valign="top" width="200"><br /><?php echo $lists['er_useprofile'] ?></td><td align="left"><?php echo _EZREALTY_CONFIG_SHOWPROF_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"  width="200"><strong><br /><?php echo _EZREALTY_CONFIG_PROFACCESS;?></strong></td>
      <td align="left" valign="top" width="200"><br /><?php echo $lists['er_profaccess'] ?></td><td align="left"><?php echo _EZREALTY_CONFIG_PROFACCESSDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><br /><strong><?php echo _EZREALTY_CONFIG_PROFILEWIDTH;?></strong></td>
      <td align="left" valign="top" width="200"><br /><input type="text" name="er_profmaxwidth" value="<?php echo $er_profmaxwidth; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_PROFILEWIDTHDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_PROFILEHEIGHT;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_profmaxheight" value="<?php echo $er_profmaxheight; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_PROFILEHEIGHTDESC;?><br /><br /></td>
    </tr>
	
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><br /><strong><?php echo _EZREALTY_CONFIG_LOGOWIDTH;?></strong></td>
      <td align="left" valign="top" width="200"><br /><input type="text" name="er_logowidth" value="<?php echo $er_logowidth; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_LOGOWIDTHDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_LOGOHEIGHT;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_logoheight" value="<?php echo $er_logoheight; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_LOGOHEIGHTDESC;?><br /><br /></td>
    </tr>
	
	</table>
			<?php
		$tabs->endTab();
		$tabs->startTab(_EZREALTY_TABS_SMS,"sms-page");
			?>



    <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminform">
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_SELLER_SMS22;?></div></th>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><strong><br /><?php echo _EZREALTY_CONFIG_USESMS;?></strong></td>
      <td align="left" valign="top" width="200"><br /><?php echo $lists['er_usesms'] ?></td><td align="left"><?php echo _EZREALTY_CONFIG_USESMS_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_MOBILE;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_mobile" value="<?php echo stripslashes( $er_mobile ); ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_MOBILEDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_SELLER_SMS7;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_username" value="<?php echo stripslashes( $er_username ); ?>" /></td><td align="left"><?php echo _EZREALTY_SELLER_SMS7DESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_SELLER_SMS8;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_password" value="<?php echo stripslashes( $er_password ); ?>" /></td><td align="left"><?php echo _EZREALTY_SELLER_SMS8DESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_SELLER_SMS19;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_api" value="<?php echo stripslashes( $er_api ); ?>" /></td><td align="left"><?php echo _EZREALTY_SELLER_SMS19DESC;?><br /><br /></td>
    </tr>

	
	</table>




			<?php
		$tabs->endTab();
		$tabs->startTab(_EZREALTY_TABS_MAPPING,"mapping-page");
			?>

    <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminform">
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_CONFIG_MAPPING;?></div></th>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZREALTY_CONFIG_USEMAP;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usemap'] ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_USEMAPDESC;?></td>
	</tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_MAPTYPE;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_mapsys'] ?></td><td align="left"><?php echo _EZREALTY_CONFIG_MAPTYPEDESC;?></td>
	</tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZREALTY_CONFIG_MAPAPI;?></strong></td>
      <td align="left" valign="top" colspan="2"><br /><input type="text" name="er_mapapi" size="70" value="<?php echo "$er_mapapi"; ?>" /><br /><?php echo _EZREALTY_CONFIG_MAPAPIDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZREALTY_CONFIG_MAPWIDTH;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_mapwidth" value="<?php echo "$er_mapwidth"; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_MAPWIDTHDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZREALTY_CONFIG_MAPHEIGHT;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_mapheight" value="<?php echo "$er_mapheight"; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_MAPHEIGHTDESC;?><br /><br /></td>
    </tr>

    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_CONFIG_MAPRES;?></div></th>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZREALTY_MAPPING_STNUM;?></strong></td>
      <td align="left" valign="top" width="200"><br /><?php echo $lists['er_usemapstnum'] ?><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZREALTY_MAPPING_STNUMDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"  width="200"><strong><br /><?php echo _EZREALTY_MAPPING_STREET;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usemapstreet'] ?><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZREALTY_MAPPING_STREETDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"  width="200"><strong><br /><?php echo _EZREALTY_MAPPING_LOCALITY;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usemaplocid'] ?><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZREALTY_MAPPING_LOCALITYDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"  width="200"><strong><br /><?php echo _EZREALTY_MAPPING_STATE;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usemapstid'] ?><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZREALTY_MAPPING_STATEDESC;?><br /><br /></td>
    </tr>

	</table>


			<?php
		$tabs->endTab();
		$tabs->startTab(_EZREALTY_TABS_EXP,"expiration-page");
			?>



    <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminform">
    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_CONFIG_DEFEXPMGMT;?></div></th>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZREALTY_CONFIG_USEEXPMGMT;?></strong></td>
      <td align="left" valign="top" width="200"><br /><?php echo $lists['er_expmgmt'] ?><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZREALTY_CONFIG_USEEXPMGMTDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"  width="200"><strong><br /><?php echo _EZREALTY_CONFIG_EXPSYS;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_expsys'] ?><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZREALTY_CONFIG_EXPSYSDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_EXPFIG;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_expfig" value="<?php echo $er_expfig; ?>" /><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZREALTY_CONFIG_EXPFIGDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_EXPGRACE;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_expgrace" value="<?php echo $er_expgrace; ?>" /><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZREALTY_CONFIG_EXPGRACEDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_IMPNUM;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" size="10" name="er_impnum" value="<?php echo $er_impnum; ?>" /><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZREALTY_CONFIG_IMPNUMDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_LIGHTBOXEXP;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" size="10" name="er_lightboxexp" value="<?php echo $er_lightboxexp; ?>" /><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo _EZREALTY_CONFIG_LIGHTBOXEXPDESC;?><br /><br /></td>
    </tr>

	</table>


			<?php
		$tabs->endTab();
		$tabs->startTab(_EZREALTY_TABS_FORMATTING,"formatting-page");
			?>



  <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminform">

    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_CONFIG_FORMATTING;?></div></th>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZREALTY_CONFIG_TPL;?></strong><br /><br /></td>
      <td align="left" valign="top" width="200"><br /><?php echo $lists['template']; ?></td><td align="left">
      <?php echo _EZREALTY_CONFIG_TPLDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_LISTINGSTEMPL;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_listtemplate']; ?></td><td align="left">
      <?php echo _EZREALTY_CONFIG_LISTINGSTEMPL_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZREALTY_CONFIG_COLCOUNT;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_colcount" value="<?php echo "$er_colcount"; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_COLCOUNTDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZREALTY_CONFIG_COLWIDTH;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_colwidth" value="<?php echo "$er_colwidth"; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_COLWIDTHDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZREALTY_CONFIG_COLOUR1;?></strong></td>
      <td align="left" valign="top"><br /># <input type="text" name="er_colour1" value="<?php echo "$er_colour1"; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_COLOUR1DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZREALTY_CONFIG_COLOUR2;?></strong></td>
      <td align="left" valign="top"><br /># <input type="text" name="er_colour2" value="<?php echo "$er_colour2"; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_COLOUR2DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZREALTY_CONFIG_TEXTBOX;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_textbox" value="<?php echo "$er_textbox"; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_TEXTBOXDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZREALTY_CONFIG_TEXTAREA;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_textarea" value="<?php echo "$er_textarea"; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_TEXTAREADESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"  width="200"><br /><strong><?php echo _EZREALTY_CONFIG_PROPPERPAGE;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_perpage" value="<?php echo "$er_perpage"; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_PROPPERPAGEDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_NEWLIST;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_newlist" value="<?php echo "$er_newlist"; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_NEWLISTDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_RSSNN;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" size="35" name="er_rssname" value="<?php echo stripslashes( $er_rssname ); ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_RSSNNDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_RSSOH;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" size="35" name="er_rssohname" value="<?php echo stripslashes( $er_rssohname ); ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_RSSOHDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_BACKBUT;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_backbut']; ?></td><td align="left"><?php echo _EZREALTY_CONFIG_BACKBUTDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_SHORTLIST;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_useshortlist']; ?></td><td align="left"><?php echo _EZREALTY_CONFIG_SHORTLISTDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_PAGEORDER;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_pageorder']; ?></td><td align="left"><?php echo _EZREALTY_CONFIG_PAGEORDERDESC;?><br /><br /></td>
    </tr>



    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_CONFIG_ADDRESSIMG;?></div></th>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_STATELOCTITLE;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_stateloc']; ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_STATELOCTITLE_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_COUNTRY;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_country']; ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_COUNTRYDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_SCH_PCODE;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usepc']; ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_ADDPCODEDESC;?><br /><br /></td>
    </tr>

    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_CONFIG_MARKETSTATUS;?></div></th>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_DETAILS_MARKET1;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usemarket1']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_DETAILS_MARKET2;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usemarket2']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_DETAILS_MARKET3;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usemarket3']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_DETAILS_MARKET4;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usemarket4']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_DETAILS_MARKET5;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usemarket5']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_DETAILS_MARKET6;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usemarket6']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_CONFIG_PROPTYPE;?></div></th>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_TYPE_SALE;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usetype1']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_TYPE_RENTAL;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usetype2']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_TYPE_LEASE;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usetype3']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_TYPE_AUCTION;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usetype4']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_TYPE_SWAP;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usetype5']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_TYPE_TENDER;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usetype6']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_CONFIG_FREQUITLIST;?></div></th>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_RENTAL_NIGHTLY;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usefrequit1']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_RENTAL_WEEKLY;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usefrequit2']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_RENTAL_FNIGHT;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usefrequit3']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_RENTAL_MONTH;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usefrequit4']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_RENTAL_SQFT;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usefrequit5']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_RENTAL_SQMTR;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usefrequit6']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_RENTAL_SPARE;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usefrequit7']; ?></td><td align="left"><br /><br /><br /></td>
    </tr>








	</table>


			<?php
		$tabs->endTab();
		$tabs->startTab(_EZREALTY_TABS_SEARCH,"search-page");
			?>

  <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminform">

    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_CONFIG_MGSCHFILTER;?></div></th>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_SCH_TYPE;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usetype']; ?></td><td align="left"><br /><?php echo _EZREALTY_SCH_TYPEDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_SCH_CTG;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usecid']; ?></td><td align="left"><br /><?php echo _EZREALTY_SCH_CTGDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_SCH_LOC;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_uselocid']; ?></td><td align="left"><br /><?php echo _EZREALTY_SCH_LOCDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_SCH_CNID;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usecnid']; ?></td><td align="left"><br /><?php echo _EZREALTY_SCH_CNIDDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_SCH_PCODE;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usepostcode']; ?></td><td align="left"><br /><?php echo _EZREALTY_SCH_PCODEDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_SCH_PRICE;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_useprice']; ?></td><td align="left"><br /><?php echo _EZREALTY_SCH_PRICEDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_SCH_ROOMS;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usebed']; ?></td><td align="left"><br /><?php echo _EZREALTY_SCH_ROOMSDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_SCH_BTHROOMS;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usebath']; ?></td><td align="left"><br /><?php echo _EZREALTY_SCH_BTHROOMSDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_SCH_MARKET;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usesold']; ?></td><td align="left"><br /><?php echo _EZREALTY_SCH_MARKETDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_SCH_MLS;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usemls']; ?></td><td align="left"><br /><?php echo _EZREALTY_SCH_MLSDESC;?><br /><br /></td>
    </tr>


    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_SCH_PETS;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usepets']; ?></td><td align="left"><br /><?php echo _EZREALTY_SCH_PETSDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_SCH_LUG;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_uselug']; ?></td><td align="left"><br /><?php echo _EZREALTY_SCH_LUGDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_SCH_FEAT;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usefeat']; ?></td><td align="left"><br /><?php echo _EZREALTY_SCH_FEATDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_SCH_CUST4;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usecust4']; ?></td><td align="left"><br /><?php echo _EZREALTY_SCH_CUST4DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_SCH_CUST5;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usecust5']; ?></td><td align="left"><br /><?php echo _EZREALTY_SCH_CUST5DESC;?><br /><br /></td>
    </tr>


	</table>


			<?php
		$tabs->endTab();
		$tabs->startTab(_EZREALTY_TABS_LINKS,"links-page");
			?>

  <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminform">

    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_CONFIG_TOPMENU;?></div></th>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZREALTY_CONFIG_USEMENU;?></strong></td>
      <td align="left" valign="top" width="200"><br /><?php echo $lists['er_usemenu']; ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_USEMENU_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_OHOUSE;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_ohlink']; ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_OHOUSEDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_NLLINK;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_nllink']; ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_NLLINKDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_LEAD;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_reglead']; ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_LEADDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_USEFEAT;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_featlink']; ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_USEFEAT_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_AGLINK;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_showaglink']; ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_AGLINK_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_MEMLINK;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_memlink']; ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_MEMLINK_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_SCHLINK;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_searchlink']; ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_SCHLINK_DESC;?><br /><br /></td>
    </tr>



    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_CONFIG_LAYOUTSETTINGS;?></div></th>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZREALTY_CONFIG_RECFRIEND;?></strong></td>
      <td align="left" valign="top" width="200"><br /><?php echo $lists['er_viewrecommend']; ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_RECFRIENDDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_ARRVIEW;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_viewarrange']; ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_ARRVIEWDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_MAILINGVIEW;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_viewmailing']; ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_MAILINGDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_RSS;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_rssfeed']; ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_RSSDESC;?><br /><br /></td>
    </tr>


    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_CONFIG_OP2;?></div></th>
    </tr>


    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_NOTIFICATION;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_notification'] ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_NOTIFICATIONDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZREALTY_CONFIG_LEADSNOTIFY;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_leadsnotice'] ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_LEADSNOTIFY_DESC;?><br /><br /></td>
    </tr>

    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_CONFIG_OTHERLINKS;?></div></th>
    </tr>


    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_BOOKINGS;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_usebookings'] ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_BOOKINGS_DESC;?><br /><br /></td>
    </tr>

	</table>


			<?php
		$tabs->endTab();
		$tabs->startTab(_EZREALTY_TABS_MEMBERS,"members-page");
			?>


    <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminform">

    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_CONFIG_MEMSALES;?></div></th>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZREALTY_CONFIG_MEMLISTINGS;?></strong></td>
      <td align="left" valign="top" width="200"><br /><?php echo $lists['er_memlistings']; ?></td><td align="left">
      <br /><?php echo _EZREALTY_CONFIG_MEMLISTINGSDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZREALTY_CONFIG_MEMAPPROVAL;?></strong></td>
      <td align="left" valign="top" width="200"><br /><?php echo $lists['er_approve'] ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_MEMAPPROVALDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_NUMLISTINGS;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="er_maxlistings" value="<?php echo "$er_maxlistings"; ?>" /></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_NUMLISTINGSDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_FREEPIC;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_freepic'] ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_FREEPICDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_SELFENTRY;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_self'] ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_SELFENTRYDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_CHANGEIMAGES;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_changeimages'] ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_CHANGEIMAGES_DESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_SHOWMEMB;?></strong></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_showmembers']; ?></td><td align="left"><br /><?php echo _EZREALTY_CONFIG_SHOWMEMBDESC;?><br /><br /></td>
    </tr>

</table>

			<?php
		$tabs->endTab();
		$tabs->startTab(_EZREALTY_TABS_PAYMENTS,"paypal-page");
			?>


    <table width="100%" border="0" cellpadding="4" cellspacing="2" class="adminform">


    <tr>
      <th colspan="3"><div align="center"><?php echo _EZREALTY_CONFIG_PP;?></div></th>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZREALTY_CONFIG_PAIDLISTINGS;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_paypal']; ?></td><td align="left">
      <?php echo _EZREALTY_CONFIG_PAIDLISTINGSDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top" width="200"><strong><br /><?php echo _EZREALTY_CONFIG_PAIDONLY;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_payonly']; ?></td><td align="left">
      <?php echo _EZREALTY_CONFIG_PAIDONLYDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_PAYMENTSYS;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['er_pmttmpl']; ?></td><td align="left">
      <?php echo _EZREALTY_CONFIG_PAYMENTSYS_DESC;?><br /><br /></td>
    </tr>


    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_PPEMAIL;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" size="50" name="paypal_email" value="<?php echo htmlspecialchars( $paypal_email, ENT_QUOTES ); ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_PPEMAILDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_CHECKMAIL;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" size="30" name="checkmail" value="<?php echo "$checkmail"; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_CHECKMAILDESC;?><br /><br /></td>
    </tr>
    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_PPCURRENCY;?></strong></td>
      <td align="left" valign="top">

<br /><input type="text" size="3" name="pp_currsign" value="<?php echo "$pp_currsign"; ?>" /> <?php echo _EZREALTY_CONFIG_CURRENCYSIGN;?>
<br /><input type="text" size="10" name="currency" value="<?php echo "$currency"; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_PPCURRENCYDESC;?><br /><br />

</td>
    </tr>
    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_PPBUTTON;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="button_image" value="<?php echo "$button_image"; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_PPBUTTONDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><strong><br /><?php echo _EZREALTY_CONFIG_PPPOSTMODE;?></strong><br /><br /></td>
      <td align="left" valign="top"><br /><?php echo $lists['postmode']; ?></td><td align="left">
      <?php echo _EZREALTY_CONFIG_PPPOSTMODEDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row0">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_LEVEL1COST;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="premium_cost" value="<?php echo "$premium_cost"; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_LEVEL1COSTDESC;?><br /><br /></td>
    </tr>

    <tr align="center" valign="middle" class="row1">
      <td align="left" valign="top"><br /><strong><?php echo _EZREALTY_CONFIG_LEVEL2COST;?></strong></td>
      <td align="left" valign="top"><br /><input type="text" name="featured_cost" value="<?php echo "$featured_cost"; ?>" /></td><td align="left"><?php echo _EZREALTY_CONFIG_LEVEL2COSTDESC;?><br /><br /></td>
    </tr>


</table>


			<?php
		$tabs->endTab();
		$tabs->endPane();

		?>


  <input type="hidden" name="option" value="<?php echo $option;?>">
  <input type="hidden" name="task" value="saveconfig">
  <input type="hidden" name="boxchecked" value="0">
</form>


</td>
</tr>
</table>

<?php
}











// END THE HTML CLASS

}

?>