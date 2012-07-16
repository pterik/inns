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

//Don't allow direct linking
  defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );


$link2 = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=detail&amp;id='. $row->id .'&amp;Itemid='. $Itemid );

$link5 = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=removelightbox&amp;id='. $row->litem .'&amp;Itemid='. $Itemid );

?>

<table border="0" cellpadding="0" cellspacing="0" width="100%" class="listtableborder">
	<tr>
		<td>

<table border="0" width="100%" cellpadding="3" cellspacing="0" onclick="location.href='<?php echo $link2; ?>'" class="listbkgr">
	<tr>
		<td width="60%" valign="top" align="left"><span class="h3">

<?php if ( $row->type ){ ?>
<?php if ( $row->type==1 ){ ?><?php echo _EZREALTY_TYPE_SALE;?><?php } ?>
<?php if ( $row->type==2 ){ ?><?php echo _EZREALTY_TYPE_RENTAL;?><?php } ?>
<?php if ( $row->type==3 ){ ?><?php echo _EZREALTY_TYPE_LEASE;?><?php } ?>
<?php if ( $row->type==4 ){ ?><?php echo _EZREALTY_TYPE_AUCTION;?><?php } ?>
<?php if ( $row->type==5 ){ ?><?php echo _EZREALTY_TYPE_SWAP;?><?php } ?>
<?php if ( $row->type==6 ){ ?><?php echo _EZREALTY_TYPE_TENDER;?><?php } ?>
<?php } ?>
 - 
<?php echo $row->proploc;?></span>&nbsp;&nbsp;

<span class="h3">

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


</span> <span class="smalldark"><strong>

<?php if ( $row->sold ) { ?>(<?php if ( $row->sold==1 ){ ?><?php echo _EZREALTY_DETAILS_MARKET1;?><?php } ?>
<?php if ( $row->sold==2 ){ ?><?php echo _EZREALTY_DETAILS_MARKET2;?><?php } ?>
<?php if ( $row->sold==3 ){ ?><?php echo _EZREALTY_DETAILS_MARKET3;?><?php } ?>
<?php if ( $row->sold==4 ){ ?><?php echo _EZREALTY_DETAILS_MARKET4;?><?php } ?>
<?php if ( $row->sold==5 ){ ?><?php echo _EZREALTY_DETAILS_MARKET5;?><?php } ?>
<?php if ( $row->sold==6 ){ ?><?php echo _EZREALTY_DETAILS_MARKET6;?><?php } ?>
)<?php } ?>

</strong></span>
</td>
		<td width="40%">

<div align="right">

<?php if ( $row->bathrooms ){ ?>
<img border="0" src="components/com_ezrealty/images/bathroom.gif" alt="" />&nbsp;<span class="icons"><?php echo $row->bathrooms;?></span>&nbsp;&nbsp;
<?php } ?>

<?php if ( $row->bedrooms >= 1 ){ ?>
<img border="0" src="components/com_ezrealty/images/bedrooms.gif" alt="" />&nbsp;<span class="icons"><?php echo $row->bedrooms;?></span>&nbsp;&nbsp;
<?php } ?>

<?php if ( $row->parking ){ ?>
<img border="0" src="components/com_ezrealty/images/parking.gif" alt="" />&nbsp;<span class="icons"><?php echo $row->parking;?></span>
<?php } ?>

</div>

		</td>
	</tr>
</table>




<table border="0" width="100%" cellpadding="5" onclick="location.href='<?php echo $link2; ?>'">
	<tr>
		<td width="<?php echo $er_thumbwidth;?>" valign="top" align="center">

<a href="<?php echo $link2; ?>"><?php if ($row->image1) { ?><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?><?php if ( $er_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image1;?>" border="0" style="margin-top: 5px; margin-bottom: 5px; margin-left: 5px; margin-right: 5px" width="<?php echo $er_thumbwidth;?>" alt="" /><?php }else{ ?><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?>/th/nothumb.gif" border="0" hspace="15" width="<?php echo $er_thumbwidth;?>" alt="" /><?php } ?></a></td>
		<td valign="top"><?php if ($row->logo_image && $er_useprofile) { ?><img border="0" src="components/com_ezrealty/profiles/<?php echo $row->logo_image;?>" align="right" style="margin-top: 5px; margin-bottom: 5px; margin-left: 5px; margin-right: 5px" alt="" /><?php } ?>
<span class="h3"><?php echo $row->adline;?></span>

<br />
		<?php echo parseThruBots($row->smalldesc);?></td>
	</tr>
</table>

<table border="0" cellpadding="5" cellspacing="0" width="100%">
	<tr>
		<td>
			<a class="readit" href="<?php echo $link5; ?>"><?php echo _EZREALTY_REMOVE_LIGHTBOX;?></a>
		</td>
		<td>
			<div align="right">
				<input class="readit" type="button" value="<?php echo _EZREALTY_READMORE;?>" onclick="location.href='<?php echo $link2; ?>'" />
			</div>
		</td>
	</tr>
</table>

		</td>
	</tr>
</table>

<br />