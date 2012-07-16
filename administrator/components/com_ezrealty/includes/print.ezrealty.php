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

?>

<table border="0" width="100%">
	<tr>
		<td><?php echo $ez_printheader;?></td>
	</tr>
</table>
<div align="center">
<table  cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td align="right"><br /><a href="#" onclick="window.close()"><?php echo _EZREALTY_PRINT_CLOSE;?></a><br /><br /></td>
		<td align="center" width="20"><br />&nbsp;|&nbsp;<br /><br /></td>
		<td align="left"><br /><a href="javascript:;" onclick="window.print(); return false"><?php echo _EZREALTY_PRINT_PRINT;?></a><br /><br /></td>
	</tr>
</table>
</div>

<?php

		$number = $row->price;

		if ($er_currencyformat==0) {
			$formatted_price = number_format($number);
		} else if ($er_currencyformat==1) {
			$formatted_price = number_format($number, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price = number_format($number, 0,",",".");
		}

?> 

<table border="0" width="100%">
	<tr>
		<td valign="top" width="100%" colspan="2" class="sectionname"><?php if ( $row->unit_num ){ ?><?php echo $row->unit_num;?> <?php } ?><?php if ( $row->street_num ){ ?><?php echo $row->street_num;?> <?php } ?><?php if ( $row->address2 ){ ?><?php echo $row->address2;?>, <?php } ?><?php if ( $row->proploc ){ ?><?php echo $row->proploc;?> <?php } ?><?php if ( $er_usepc && $row->postcode ){ ?><?php echo $row->postcode;?><?php } ?></td>
	</tr>
	<tr>
		<td width="50%" valign="top">
		<table border="0" width="100%">
			<tr>
				<td>
<div align="center">
			<table border="0" cellspacing="0" cellpadding="1" align="center" width="<?php echo $er_imgwidth;?>">
				<tr>
					<td valign="top" width="<?php echo $er_imgwidth;?>" align="center" colspan="3"><?php if ($row->image1) { ?><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/<?php echo $er_imagedirectory.'/'.$row->image1;?>" width="300" border="1" alt="" /><?php }else{ ?><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/<?php echo $er_imagedirectory;?>/nothumb.gif" border="1" width="300" alt="" /><?php } ?></td>
				</tr>
			</table>
</div>
</td>
			</tr>
			<tr>
				<td>
<div align="center">
			<table border="0" cellspacing="2" cellpadding="1">
				<tr>
					<?php if ( $row->image2 ){ ?>
					<td valign="top" align="center" width="33%"><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image1;?>" width="100" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE1;?>" title="" /></td>
					<?php }else{ ?>
					<td valign="top" align="center" width="33%"> </td>
					<?php } if ( $row->image2 ){ ?>
					<td valign="top" align="center" width="33%"><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image2;?>" width="100" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE2;?>" title="" /></td>
					<?php }else{ ?>
					<td valign="top" align="center" width="33%"> </td>
					<?php } if ( $row->image3 ){ ?>
					<td valign="top" align="center" width="33%"><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image3;?>" width="100" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE3;?>" title="" /></td>
					<?php }else{ ?>
					<td valign="top" align="center" width="33%"> </td>
					<?php } ?>
				</tr>
				<tr>
					<?php if ( $row->image4 ){ ?>
					<td valign="top" align="center"><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image4;?>" width="100" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE4;?>" title="" /></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $row->image5 ){ ?>
					<td valign="top" align="center"><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image5;?>" width="100" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE5;?>" title="" /></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $row->image6 ){ ?>
					<td valign="top" align="center"><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image6;?>" width="100" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE6;?>" title="" /></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } ?>
				</tr>
				<tr>
					<?php if ( $row->image7 ){ ?>
					<td valign="top" align="center"><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image7;?>" width="100" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE7;?>" title="" /></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $row->image8 ){ ?>
					<td valign="top" align="center"><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image8;?>" width="100" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE8;?>" title="" /></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $row->image9 ){ ?>
					<td valign='top' align='center'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image9;?>" width="100" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE9;?>" title="" /></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } ?>
				</tr>
				<tr>
					<?php if ( $row->image10 ){ ?>
					<td valign='top' align='center'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image10;?>" width="100" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE10;?>" title="" /></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } if ( $row->image11 ){ ?>
					<td valign='top' align='center'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image11;?>" width="100" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE11;?>" title="" /></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } if ( $row->image12 ){ ?>
					<td valign='top' align='center'><img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image12;?>" width="100" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE12;?>" title="" /></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } ?>
				</tr>
			</table>
</div>
</td>
			</tr>
		</table>
		</td>
		<td width="50%" valign="top">
		<table border="0" width="100%">
			<tr>
				<td class="sectionname"><?php echo _EZREALTY_PROPERTY_INFO;?><br /><hr /></td>
			</tr>
			<tr>
				<td>

<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_VIEWDET_PRICE;?>:</strong>&nbsp;

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
<br />
<?php if ( $row->bond != 0.00 ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_BOND;?>:</strong>&nbsp;
<?php if ( $er_currencypos==0 ) { ?>
<?php echo $er_currencysign.''.$row->bond;?>
<?php } else { ?>
<?php echo $row->bond.' '.$er_currencysign;?>
<?php } ?>
<br />
<?php } ?>

<?php if ( $row->sold ) { ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_MARKET;?>:</strong>&nbsp;
<?php if ( $row->sold==1 ){ ?><?php echo _EZREALTY_DETAILS_MARKET1;?><?php } ?>
<?php if ( $row->sold==2 ){ ?><?php echo _EZREALTY_DETAILS_MARKET2;?><?php } ?>
<?php if ( $row->sold==3 ){ ?><?php echo _EZREALTY_DETAILS_MARKET3;?><?php } ?>
<?php if ( $row->sold==4 ){ ?><?php echo _EZREALTY_DETAILS_MARKET4;?><?php } ?>
<?php if ( $row->sold==5 ){ ?><?php echo _EZREALTY_DETAILS_MARKET5;?><?php } ?>
<?php if ( $row->sold==6 ){ ?><?php echo _EZREALTY_DETAILS_MARKET6;?><?php } ?>
<br />
<?php } ?>
<?php if ( $row->mls_id ) { ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DET_MLSID;?>:</strong>&nbsp;<?php echo $row->mls_id;?><br />
<?php } ?>
<?php if ( $row->agent_id ) { ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DET_AGID;?>:</strong>&nbsp;<?php echo $row->agent_id;?><br />
<?php } ?>

<?php if ( $er_usebookings && $row->viewbooking ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_BOOKINGS; ?>:</strong>&nbsp;<?php echo parseThruBots($row->bookinglink); ?><br />
<?php } ?>
<?php if ( !$er_usemap && $row->mapref ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_VIEWDET_LOCATION;?>:</strong>&nbsp;<a target="_blank" href="<?php echo $row->mapref;?>"><?php echo _EZREALTY_VIEWDET_MAP;?></a><br />
<?php } ?>

<?php if ( $er_useflv==0 && $row->vtour ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_VIEWDET_TOUR;?>:</strong>&nbsp;<a target="_blank" href="<?php echo $row->vtour;?>"><?php echo _EZREALTY_VIEWDET_VTOUR;?></a><br />
<?php } ?>

</td>
			</tr>
			<tr>
				<td>

				<table border="0" width="100%" cellspacing="0" cellpadding="0">
					<tr>
						<td width="50%" valign="top">

<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_CATEGORY_CATNAME;?>:</strong>&nbsp;<?php echo $row->category;?><br />
<?php if ( $row->type ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_LISTING_TYPE;?>:</strong>&nbsp;
<?php if ( $row->type==1 ){ ?><?php echo _EZREALTY_TYPE_SALE;?><?php } ?>
<?php if ( $row->type==2 ){ ?><?php echo _EZREALTY_TYPE_RENTAL;?><?php } ?>
<?php if ( $row->type==3 ){ ?><?php echo _EZREALTY_TYPE_LEASE;?><?php } ?>
<?php if ( $row->type==4 ){ ?><?php echo _EZREALTY_TYPE_AUCTION;?><?php } ?>
<?php if ( $row->type==5 ){ ?><?php echo _EZREALTY_TYPE_SWAP;?><?php } ?>
<?php if ( $row->type==6 ){ ?><?php echo _EZREALTY_TYPE_TENDER;?><?php } ?>
<br />
<?php } ?>
<?php if ( $row->bedrooms==0.5 ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_BEDROOMS;?>:</strong>&nbsp;<?php echo _EZREALTY_STUDIO;?><br />
<?php } ?>
<?php if ( $row->bedrooms >= 1 ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_BEDROOMS;?>:</strong>&nbsp;<?php echo $row->bedrooms;?><br />
<?php } ?>
<?php if ( $row->bathrooms ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_BATHROOMS;?>:</strong>&nbsp;<?php echo $row->bathrooms;?><br />
<?php } ?>
<?php if ( $row->totalrooms ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_TOTALROOMS;?>:</strong>&nbsp;<?php echo $row->totalrooms;?><br />
<?php } ?>
<?php if ( $row->livingarea ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_LIVINGAREA;?>:</strong>&nbsp;<?php echo $row->livingarea;?><br />
<?php } ?>
<?php if ( $row->parking ) { ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_PARKING;?>:</strong>&nbsp;<?php echo $row->parking;?><br />
<?php } ?>
<?php if ( $row->county ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_COUNCIL;?>:</strong>&nbsp;<?php echo $row->county;?><br />
<?php }  ?>
<?php if ( $row->hofees ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_LISTINGS_HOFEES;?>:</strong>&nbsp;<?php echo $row->hofees;?><br />
<?php }  ?>
<?php if ( $row->fencing ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_FENCING;?>:</strong>&nbsp;<?php echo $row->fencing;?><br />
<?php }  ?>
<?php if ( $row->rainfall ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_RAINFALL;?>:</strong>&nbsp;<?php echo $row->rainfall;?><br />
<?php } ?>
<?php if ( $row->soiltype ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_SOILTYPE;?>:</strong>&nbsp;<?php echo $row->soiltype;?><br />
<?php } ?>
<?php if ( $row->grazing ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_GRAZING; ?>:</strong>&nbsp;<?php echo $row->grazing;?><br />
<?php } ?>
<?php if ( $row->cropping ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_CROPPING; ?>:</strong>&nbsp;<?php echo $row->cropping;?><br />
<?php } ?>
<?php if ( $row->takings ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_TAKINGS;?>:</strong>&nbsp;<?php echo $row->takings;?><br />
<?php } ?>
<?php if ( $row->returns ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_RETURNS;?>:</strong>&nbsp;<?php echo $row->returns;?><br />
<?php } ?>
<?php if ( $row->netprofit ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_NETPROFIT;?>:</strong>&nbsp;<?php echo $row->netprofit;?><br />
<?php } ?>
<?php if ( $row->bustype ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_BUSTYPE;?>:</strong>&nbsp;<?php echo $row->bustype;?><br />
<?php } ?>
<?php if ( $row->bussubtype ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_BUSSUBTYPE;?>:</strong>&nbsp;<?php echo $row->bussubtype;?><br />
<?php } ?>
<?php if ( $row->stock ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_STOCK;?>:</strong>&nbsp;<?php echo $row->stock;?><br />
<?php } ?>



</td>
						<td width="50%" valign="top">

<?php if ( $row->age ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_VIEWDET_AGE;?>:</strong>&nbsp;<?php echo $row->age;?><br />
<?php } ?>
<?php if ( $row->landtype ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_VIEWDET_LAND;?>:</strong>&nbsp;<?php echo $row->landtype;?><br />
<?php } ?>
<?php if ( $row->frontage ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_FRONTAGE;?>:</strong>&nbsp;<?php echo $row->frontage;?><br />
<?php } ?>
<?php if ( $row->depth ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_DEPTH;?>:</strong>&nbsp;<?php echo $row->depth;?><br />
<?php } ?>
<?php if ( $row->schooldist ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_LISTINGS_SCHOOLDIST;?>:</strong>&nbsp;<?php echo $row->schooldist;?><br />
<?php } ?>
<?php if ( $row->preschool ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_PRESCHOOL;?>:</strong>&nbsp;<?php echo $row->preschool;?><br />
<?php } ?>
<?php if ( $row->primaryschool ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_PRIMARYSCHOOL;?>:</strong>&nbsp;<?php echo $row->primaryschool;?><br />
<?php } ?>
<?php if ( $row->highschool ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_HIGHSCHOOL;?>:</strong>&nbsp;<?php echo $row->highschool;?><br />
<?php } ?>
<?php if ( $row->university ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_UNIVERSITY;?>:</strong>&nbsp;<?php echo $row->university;?><br />
<?php } ?>
<?php if ( $row->irrigation ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_IRRIGATION; ?>:</strong>&nbsp;<?php echo $row->irrigation;?><br />
<?php } ?>
<?php if ( $row->waterresources ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_WATERRESOURCES;?>:</strong>&nbsp;<?php echo $row->waterresources;?><br />
<?php }  ?>
<?php if ( $row->carryingcap ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_CARRYINGCAP;?>:</strong>&nbsp;<?php echo $row->carryingcap;?><br />
<?php } ?>
<?php if ( $row->storage ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_STORAGE;?>:</strong>&nbsp;<?php echo $row->storage;?><br />
<?php } ?>
<?php if ( $row->services ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_SERVICES; ?>:</strong>&nbsp;<?php echo $row->services;?><br />
<?php } ?>
<?php if ( $row->fixtures ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_FIXTURES;?>:</strong>&nbsp;<?php echo $row->fixtures;?><br />
<?php } ?>
<?php if ( $row->fittings ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_FITTINGS;?>:</strong>&nbsp;<?php echo $row->fittings;?><br />
<?php } ?>
<?php if ( $row->squarefeet ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_SQUARES;?>:</strong>&nbsp;<?php echo $row->squarefeet;?><br />
<?php } ?>
<?php if ( $row->percentoffice ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_POFFICE;?>:</strong>&nbsp;<?php echo $row->percentoffice;?><br />
<?php } ?>
<?php if ( $row->percentwarehouse ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_PWAREHOUSE;?>:</strong>&nbsp;<?php echo $row->percentwarehouse;?><br />
<?php } ?>
<?php if ( $row->loadingfac ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_DETAILS_LOADING;?>:</strong>&nbsp;<?php echo $row->loadingfac;?><br />
<?php } ?>

</td>
					</tr>
				</table>

</td>
			</tr>
			<tr>
				<td><?php if ($row->propdesc) { ?><?php echo stripslashes($row->propdesc);?><?php } ?></td>
			</tr>
			<tr>
				<td>

				<table border="0" width="100%">
					<tr>
						<td width="50%" valign="top">

<?php if ( $row->custom1 ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_CONFIG_CPI1; ?>:</strong>&nbsp;<?php echo $row->custom1;?><br />
<?php } ?>
<?php if ( $row->custom2 ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_CONFIG_CPI2; ?>:</strong>&nbsp;<?php echo $row->custom2;?><br />
<?php } ?>
<?php if ( $row->custom3 ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_CONFIG_CPI3; ?>:</strong>&nbsp;<?php echo $row->custom3;?><br />
<?php } ?>
<?php if ( $row->custom4 ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_CUSTOM4; ?>:</strong>&nbsp;<?php echo $row->custom4;?><br />
<?php } ?>

</td>
						<td width="50%" valign="top">

<?php if ( $row->ctown ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_VIEWDET_TOWN;?>:</strong>&nbsp;<?php echo $row->ctown;?><br />
<?php } ?>
<?php if ( $row->ctport ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_VIEWDET_TPORT;?>:</strong>&nbsp;<?php echo $row->ctport;?><br />
<?php } ?>
<?php if ( $row->custom5 ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_CUSTOM5; ?>:</strong>&nbsp;<?php echo $row->custom5;?><br />
<?php } ?>

</td>
					</tr>
				</table>

</td>
			</tr>
			<tr>
				<td>

				<table border="0" width="100%">
					<tr>
						<td width="50%" valign="top">
<?php if ( $row->pool ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF1; ?>:</strong>&nbsp;<?php echo _EZREALTY_VIEWDET_YES; ?><br />
<?php } ?>
<?php if ( $row->fplace ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF2; ?>:</strong>&nbsp;<?php echo _EZREALTY_VIEWDET_YES; ?><br />
<?php } ?>
<?php if ( $row->bbq ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF3; ?>:</strong>&nbsp;<?php echo _EZREALTY_VIEWDET_YES; ?><br />
<?php } ?>
<?php if ( $row->gazebo ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF4; ?>:</strong>&nbsp;<?php echo _EZREALTY_VIEWDET_YES; ?><br />
<?php } ?>
<?php if ( $row->lug ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF5; ?>:</strong>&nbsp;<?php echo _EZREALTY_VIEWDET_YES; ?><br />
<?php } ?>
<?php if ( $row->pets ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF11; ?>:</strong>&nbsp;
<?php if ( $row->pets==1 ){ ?>
<?php echo _EZREALTY_CONFIG_NO; ?>
<?php } if ( $row->pets==2 ){ ?>
<?php echo _EZREALTY_CONFIG_YES; ?>
<?php } if ( $row->pets==3 ){ ?>
<?php echo _EZREALTY_HELPER_PETS; ?>
<?php } ?>
<br />
<?php } ?>


<?php if ( $row->extra1 ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF13; ?>:</strong>&nbsp;<?php echo _EZREALTY_VIEWDET_YES; ?><br />
<?php } ?>
<?php if ( $row->extra2 ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF14; ?>:</strong>&nbsp;<?php echo _EZREALTY_VIEWDET_YES; ?><br />
<?php } ?>
<?php if ( $row->extra3 ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF15; ?>:</strong>&nbsp;<?php echo _EZREALTY_VIEWDET_YES; ?><br />
<?php } ?>
<?php if ( $row->extra4 ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF16; ?>:</strong>&nbsp;<?php echo _EZREALTY_VIEWDET_YES; ?><br />
<?php } ?>

</td>
						<td width="50%" valign="top">
<?php if ( $row->bir ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF6; ?>:</strong>&nbsp;<?php echo _EZREALTY_VIEWDET_YES; ?><br />
<?php } ?>
<?php if ( $row->heating ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF7; ?>:</strong>&nbsp;<?php echo _EZREALTY_VIEWDET_YES; ?><br />
<?php } ?>
<?php if ( $row->airco ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF8; ?>:</strong>&nbsp;<?php echo _EZREALTY_VIEWDET_YES; ?><br />
<?php } ?>
<?php if ( $row->shops ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF9; ?>:</strong>&nbsp;<?php echo _EZREALTY_VIEWDET_YES; ?><br />
<?php } ?>
<?php if ( $row->schools ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF10; ?>:</strong>&nbsp;<?php echo _EZREALTY_VIEWDET_YES; ?><br />
<?php } ?>
<?php if ( $row->elevator ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF12; ?>:</strong>&nbsp;<?php echo _EZREALTY_VIEWDET_YES; ?><br />
<?php } ?>

<?php if ( $row->extra5 ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF17; ?>:</strong>&nbsp;<?php echo _EZREALTY_VIEWDET_YES; ?><br />
<?php } ?>
<?php if ( $row->extra6 ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF18; ?>:</strong>&nbsp;<?php echo _EZREALTY_VIEWDET_YES; ?><br />
<?php } ?>
<?php if ( $row->extra7 ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF19; ?>:</strong>&nbsp;<?php echo _EZREALTY_VIEWDET_YES; ?><br />
<?php } ?>
<?php if ( $row->extra8 ){ ?>
<img src="<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<strong><?php echo _EZREALTY_APF20; ?>:</strong>&nbsp;<?php echo _EZREALTY_VIEWDET_YES; ?><br />
<?php } ?>


</td>
					</tr>
				</table>

</td>
			</tr>


<?php if ( $row->openhouse && $row->ohouse_desc ){ ?>
			<tr>
				<td class="sectionname"><?php echo _EZREALTY_OPENHOUSE_DETAILS; ?><br /><hr /></td>
			</tr>
			<tr>
				<td><?php echo $row->ohouse_desc; ?></td>
			</tr>
<?php } ?>


		</table>
		</td>
	</tr>
</table>
<table border="0" width="100%">
	<tr>
		<td><?php echo $ez_printfooter;?></td>
	</tr>
</table>

