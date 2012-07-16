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
$link3 = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=viewlightbox&amp;Itemid='. $Itemid );


?>

<table border="0" width="100%" cellpadding="5" onmouseover="EZOver(this)" onmouseout="EZOut(this)" onclick="location.href='<?php echo $link2; ?>'">
	<tr>
		<td width="<?php echo $er_thumbwidth;?>" valign="top" align="center">
<span class="h3">

<?php if ( $row->type ){ ?>
<?php if ( $row->type==1 ){ ?><?php echo _EZREALTY_TYPE_SALE;?><?php } ?>
<?php if ( $row->type==2 ){ ?><?php echo _EZREALTY_TYPE_RENTAL;?><?php } ?>
<?php if ( $row->type==3 ){ ?><?php echo _EZREALTY_TYPE_LEASE;?><?php } ?>
<?php if ( $row->type==4 ){ ?><?php echo _EZREALTY_TYPE_AUCTION;?><?php } ?>
<?php if ( $row->type==5 ){ ?><?php echo _EZREALTY_TYPE_SWAP;?><?php } ?>
<?php if ( $row->type==6 ){ ?><?php echo _EZREALTY_TYPE_TENDER;?><?php } ?>
<?php } ?>

</span>


<a href="<?php echo $link2; ?>"><?php if ($row->image1) { ?><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?><?php if ( $er_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image1;?>" border="0" hspace="15" width="<?php echo $er_thumbwidth;?>" alt="" /><?php }else{ ?><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?>/th/nothumb.gif" border="0" hspace="15" width="<?php echo $er_thumbwidth;?>" alt="" /><?php } ?></a></td>
		<td valign="top"><span class="h3"><?php echo $row->adline;?> - 

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

</strong></span><br />
		<?php echo parseThruBots($row->smalldesc);?> ... <a href="<?php echo $link2; ?>"><strong><?php echo _EZREALTY_READMORE;?></strong></a></td>
	</tr>
</table>

<?php if ( $er_useshortlist ){ ?>
<table border="0" cellpadding="5" cellspacing="0" width="100%">
	<tr>
		<td>
<?php
$status3 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=500,height=400,directories=no,location=no';
$link5 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;Itemid='.$Itemid.'&amp;task=lightbox&amp;id='. $row->id;

?>
<div align="right"><img src="components/com_ezrealty/images/add_lightbox.gif" alt="" align="top" hspace="5" border="0" /><a href="javascript:void(0)" onclick="window.open('<?php echo $link5; ?>','win2','<?php echo $status3; ?>');" title="<?php echo _EZREALTY_LISTINGS_ADDLIGHTBOX;?>"><?php echo _EZREALTY_LISTINGS_ADDLIGHTBOX;?></a> | 
 <img src="components/com_ezrealty/images/show_lightbox.gif" alt="" align="top" hspace="5" border="0" /><a href="<?php echo $link3;?>"><?php echo _EZREALTY_VIEW_LIGHTBOX;?></a></div>

		</td>
	</tr>
</table>
<?php } ?>

			<table border="0" cellpadding="0" cellspacing="0" width="100%" class="sectiontableheader">
				<tr>
					<td><img src="components/com_ezrealty/images/pixel.gif" border="0" height="2" width="1" alt="" /></td>
				</tr>
			</table>

