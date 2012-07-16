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

<script type="text/JavaScript" src="includes/js/overlib_mini.js"></script>

<script type="text/javascript">

<!-- Begin
var pic01 = new Image();
var pic02 = new Image(); 
var pic03 = new Image(); 
var pic04 = new Image();
var pic05 = new Image(); 
var pic06 = new Image(); 
var pic07 = new Image();
var pic08 = new Image(); 
var pic09 = new Image();
var pic10 = new Image(); 
var pic11 = new Image(); 
var pic12 = new Image();

pic01.src = "<?php echo "components/com_ezrealty/$er_imagedirectory/$row->image1";?>";
pic02.src = "<?php echo "components/com_ezrealty/$er_imagedirectory/$row->image2";?>"; 
pic03.src = "<?php echo "components/com_ezrealty/$er_imagedirectory/$row->image3";?>"; 
pic04.src = "<?php echo "components/com_ezrealty/$er_imagedirectory/$row->image4";?>";
pic05.src = "<?php echo "components/com_ezrealty/$er_imagedirectory/$row->image5";?>";
pic06.src = "<?php echo "components/com_ezrealty/$er_imagedirectory/$row->image6";?>";
pic07.src = "<?php echo "components/com_ezrealty/$er_imagedirectory/$row->image7";?>";
pic08.src = "<?php echo "components/com_ezrealty/$er_imagedirectory/$row->image8";?>"; 
pic09.src = "<?php echo "components/com_ezrealty/$er_imagedirectory/$row->image9";?>";
pic10.src = "<?php echo "components/com_ezrealty/$er_imagedirectory/$row->image10";?>"; 
pic11.src = "<?php echo "components/com_ezrealty/$er_imagedirectory/$row->image11";?>"; 
pic12.src = "<?php echo "components/com_ezrealty/$er_imagedirectory/$row->image12";?>";

function doButtons(picimage) {
eval("document['picture'].src = " + picimage + ".src");
}
//  End -->


<!-- Begin bookmarking
function addBookmark(title,url) {
	if (window.sidebar) { 
		window.sidebar.addPanel(title, url,""); 
	} else if( document.all ) {
		window.external.AddFavorite( url, title);
	} else if( window.opera && window.print ) {
		return true;
	}
}
//  End -->


</script>

<?php

		$number = $row->price;

		if ($er_currencyformat==0) {
			$formatted_price = number_format($number);
		} else if ($er_currencyformat==1) {
			$formatted_price = number_format($number, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price = number_format($number, 0,",",".");
		}

		$number2 = $row->bond;

		if ($er_currencyformat==0) {
			$formatted_price2 = number_format($number2);
		} else if ($er_currencyformat==1) {
			$formatted_price2 = number_format($number2, 2,",",".");
		} else if ($er_currencyformat==2) {
			$formatted_price2 = number_format($number2, 0,",",".");
		}

?> 


<?php

$status1 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=500,height=400,directories=no,location=no';
$status2 = 'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=640,height=580,directories=no,location=no';

$link1 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=contactseller&amp;id='. $row->id .'&amp;Itemid='. $Itemid;
$link2 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=smsseller&amp;id='. $row->id .'&amp;Itemid='. $Itemid;
$link3 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=print&amp;id='. $row->id .'&amp;Itemid='. $Itemid;
$link4 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=contactbusiness&amp;id='. $row->id .'&amp;Itemid='. $Itemid;
$link5 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=smsbusiness&amp;id='. $row->id .'&amp;Itemid='. $Itemid;
$link6 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=recommend&amp;id='. $row->id .'&amp;Itemid='. $Itemid;
$link7 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=maillist&amp;id='. $row->id .'&amp;Itemid='. $Itemid;
$link8 = $mosConfig_live_site. '/index2.php?option=com_ezrealty&amp;task=lightbox&amp;id='. $row->id .'&amp;Itemid='. $Itemid;

$link9 = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=showprofile&amp;id='. $row->mid .'&amp;Itemid='. $Itemid );
$link10 = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=viewlightbox&amp;Itemid='. $Itemid );
$link11 = sefRelToAbs( 'index.php?option=com_ezrealty&amp;task=viewcategory&amp;id='. $row->cid .'&amp;Itemid='. $Itemid );

?>

<table border="0" width="100%">
	<tr>
		<td valign="top" width="100%" colspan="2">
					<div align="center"><table border="0" cellspacing="10">
						<tr>

					<td class="h3"><?php if ( $row->unit_num ){ ?><?php echo $row->unit_num;?> <?php } ?><?php if ( $row->street_num ){ ?><?php echo $row->street_num;?> <?php } ?><?php if ( $row->address2 ){ ?><?php echo $row->address2;?>, <?php } ?><?php if ( $row->proploc ){ ?><?php echo $row->proploc;?> <?php } ?><?php if ( $er_usepc && $row->postcode ){ ?><?php echo $row->postcode;?><?php } ?></td>

						</tr>
					</table></div>
</td>
	</tr>
	<tr>
		<td valign="top" width="33%">


<table border="0" width="100%">
	<tr>
		<td valign="top" width="33%">


<!--START IMAGE TABLE-->			

<div align="center">
			<table border="0" cellspacing="2" cellpadding="1">
				<tr>
					<?php if ( $row->image2 ){ ?>
					<td valign="top" align="center" width="25%"><a onmouseover="doButtons('pic01')" href="components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image1;?>" rel="lightbox[house]"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?><?php if ( $er_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image1;?>" width="<?php echo $er_thumbwidth;?>" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE1;?>" title="<?php echo _EZREALTY_CLICK_OPEN;?>" /></a></td>
					<?php }else{ ?>
					<td valign="top" align="center" width="25%"> </td>
					<?php } if ( $row->image2 ){ ?>
					<td valign="top" align="center" width="25%"><a onmouseover="doButtons('pic02')" href="components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image2;?>" rel="lightbox[house]"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?><?php if ( $er_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image2;?>" width="<?php echo $er_thumbwidth;?>" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE2;?>" title="<?php echo _EZREALTY_CLICK_OPEN;?>" /></a></td>
					<?php }else{ ?>
					<td valign="top" align="center" width="25%"> </td>
					<?php } if ( $row->image3 ){ ?>
					<td valign="top" align="center" width="25%"><a onmouseover="doButtons('pic03')" href="components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image3;?>" rel="lightbox[house]"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?><?php if ( $er_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image3;?>" width="<?php echo $er_thumbwidth;?>" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE3;?>" title="<?php echo _EZREALTY_CLICK_OPEN;?>" /></a></td>
					<?php }else{ ?>
					<td valign="top" align="center" width="25%"> </td>
					<?php } if ( $row->image4 ){ ?>
					<td valign="top" align="center" width="25%"><a onmouseover="doButtons('pic04')" href="components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image4;?>" rel="lightbox[house]"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?><?php if ( $er_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image4;?>" width="<?php echo $er_thumbwidth;?>" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE4;?>" title="<?php echo _EZREALTY_CLICK_OPEN;?>" /></a></td>
					<?php }else{ ?>
					<td valign="top" align="center" width="25%"> </td>
					<?php } ?>
				</tr>
				<tr>
					<?php if ( $row->image5 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic05')" href="components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image5;?>" rel="lightbox[house]"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?><?php if ( $er_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image5;?>" width="<?php echo $er_thumbwidth;?>" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE5;?>" title="<?php echo _EZREALTY_CLICK_OPEN;?>" /></a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $row->image6 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic06')" href="components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image6;?>" rel="lightbox[house]"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?><?php if ( $er_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image6;?>" width="<?php echo $er_thumbwidth;?>" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE6;?>" title="<?php echo _EZREALTY_CLICK_OPEN;?>" /></a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $row->image7 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic07')" href="components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image7;?>" rel="lightbox[house]"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?><?php if ( $er_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image7;?>" width="<?php echo $er_thumbwidth;?>" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE7;?>" title="<?php echo _EZREALTY_CLICK_OPEN;?>" /></a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } if ( $row->image8 ){ ?>
					<td valign="top" align="center"><a onmouseover="doButtons('pic08')" href="components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image8;?>" rel="lightbox[house]"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?><?php if ( $er_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image8;?>" width="<?php echo $er_thumbwidth;?>" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE8;?>" title="<?php echo _EZREALTY_CLICK_OPEN;?>" /></a></td>
					<?php }else{ ?>
					<td valign="top" align="center"> </td>
					<?php } ?>
				</tr>
				<tr>
					<?php if ( $row->image9 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic09')" href="components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image9;?>" rel="lightbox[house]"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?><?php if ( $er_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image9;?>" width="<?php echo $er_thumbwidth;?>" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE9;?>" title="<?php echo _EZREALTY_CLICK_OPEN;?>" /></a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } if ( $row->image10 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic10')" href="components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image10;?>" rel="lightbox[house]"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?><?php if ( $er_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image10;?>" width="<?php echo $er_thumbwidth;?>" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE10;?>" title="<?php echo _EZREALTY_CLICK_OPEN;?>" /></a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } if ( $row->image11 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic11')" href="components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image11;?>" rel="lightbox[house]"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?><?php if ( $er_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image11;?>" width="<?php echo $er_thumbwidth;?>" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE11;?>" title="<?php echo _EZREALTY_CLICK_OPEN;?>" /></a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } if ( $row->image12 ){ ?>
					<td valign='top' align='center'><a onmouseover="doButtons('pic12')" href="components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $row->image12;?>" rel="lightbox[house]"><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?><?php if ( $er_thumbcreation !== 'none' ) { ?>/th<?php } ?>/<?php echo $row->image12;?>" width="<?php echo $er_thumbwidth;?>" border="0" alt="<?php echo _EZREALTY_VLDET_IMAGE12;?>" title="<?php echo _EZREALTY_CLICK_OPEN;?>" /></a></td>
					<?php }else{ ?>
					<td valign='top' align='center'> </td>
					<?php } ?>
				</tr>
			</table>
</div>
<div align="center">
			<table border="0" cellspacing="0" cellpadding="1" width="<?php echo $er_imgwidth;?>">
				<tr>
					<td valign="top" width="<?php echo $er_imgwidth;?>"><?php if ($row->image1) { ?><img src="components/com_ezrealty/<?php echo $er_imagedirectory.'/'.$row->image1;?>" width="<?php echo $er_imgwidth;?>" border="1" name="picture" alt="<?php echo _EZREALTY_PIX_HOVER;?>" /><?php }else{ ?><img src="components/com_ezrealty/<?php echo $er_imagedirectory;?>/nothumb.gif" border="1" width="<?php echo $er_imgwidth;?>" name="picture" alt="" /><?php } ?></td>
				</tr>
			</table>
</div>

<!--END IMAGE TABLE-->


</td>
				</tr>

<tr><td valign="top">
<br />

<?php if ( $er_useprofile ) { ?>

<!--START SELLER INFORMATION BLOCK-->			

<div align="center">
	<table width="100%">
		<tr>
			<td class='sectiontableheader' colspan='2'><?php echo _EZREALTY_PROFILE_DSDET;?></td>
		</tr>
		<?php if ( $er_profaccess <= $my->gid ) { ?>
		<tr>
			<td valign="top" width="80">
			<?php if ( !$row->dealer_image ) { ?><img src="components/com_ezrealty/profiles/nothumb.jpg" alt="" align="left" width="60" hspace="10" />
			<?php } else { ?><img src="components/com_ezrealty/profiles/<?php echo $row->dealer_image;?>" alt="" align="left" width="60" hspace="10" />
			<?php } ?>
			</td>
			<td valign="top" align="left">
			<?php if ($row->dealerpublished) { ?><a href="<?php echo $link9;?>" title="<?php echo _EZREALTY_PROFILER_CBPROFILE;?>"><?php } ?><strong><?php echo $row->dealer_name;?> <?php if ($row->dealer_type == 1) { ?>(<?php echo _EZREALTY_LISTER_AGENT;?>)<?php } ?>
<?php if ($row->dealer_type == 2) { ?>(<?php echo _EZREALTY_LISTER_OWNER;?>)<?php } ?>
<?php if ($row->dealer_type == 3) { ?>(<?php echo _EZREALTY_LISTER_BROKER;?>)<?php } ?>
</strong><?php if ($row->dealerpublished) { ?></a><?php } ?><?php if ($row->dealerpublished == 0) { ?><br /><?php echo _EZREALTY_PNPFC;?><?php } ?><br />
			<?php if ($row->dealerpublished ) { ?>
			<?php if ($row->dealer_company) { ?><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" /><?php echo $row->dealer_company;?><br /><?php } ?>
			<?php if ($row->dealer_phone) { ?><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" /><?php echo _EZREALTY_PROFILE_PHONE;?>:&nbsp;<?php echo $row->dealer_phone;?><br /><?php } ?>
			<?php if ($row->dealer_mobile) { ?><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" /><?php echo _EZREALTY_PROFILE_MOBILE2;?>:&nbsp;<?php echo $row->dealer_mobile;?><br /><?php } ?>
<?php if ( $er_useprofile && $er_viewarrange && $er_profaccess <= $my->gid && $row->dealerpublished ) { ?>
			<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" /><?php echo _EZREALTY_PROFILE_EMAIL;?>:&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link1; ?>','win2','<?php echo $status1; ?>');" title="<?php echo _EZREALTY_PROFILE_CONTACT;?>"><?php echo _EZREALTY_PROFILE_CONTACT;?></a><br />
<?php } ?>
			<?php if ( $er_usesms && $row->show_sms ){ ?>
			<img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" /><?php echo _EZREALTY_SELLER_SMS1;?>:&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link2; ?>','win2','<?php echo $status2; ?>');" title="<?php echo _EZREALTY_SELLER_SMS2;?>"><?php echo _EZREALTY_SELLER_SMS2;?></a><br />
			<?php } ?>
			<?php } ?>
			</td>
		</tr>
		<?php } else { ?>
		<tr>
			<td colspan='2'><br /><strong><?php echo _EZREALTY_PROFACCESS_DENIED;?></strong></td>
		</tr>
		<?php } ?>
	</table>
</div>

<!--END SELLER INFORMATION BLOCK-->			

<br />

<?php } ?>


	<?php if ( $er_useflv==1 && $row->vtour ){ ?>

<!--BEGIN EMBEDDED FLV VIDEO CODE-->			

							<table width="100%">
								<tr>
									<td class='sectiontableheader'><?php echo _EZREALTY_DETAILS_VIDEOTOUR; ?></td>
								</tr>
								<tr>
									<td>
										<div align="center">



<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" height="<?php echo $er_flvheight;?>" width="<?php echo $er_flvwidth;?>">
<param name="salign" value="lt" />
<param name="quality" value="high" />
<param name="scale" value="noscale" />  
<param name="wmode" value="transparent" />
<param name="movie" value="<?php echo $mosConfig_live_site;?>/components/com_ezrealty/library/flash/flvplay.swf" />  
<param name="FlashVars" value="&amp;streamName=<?php echo $row->vtour;?>&amp;skinName=<?php echo $mosConfig_live_site;?>/components/com_ezrealty/library/flash/flvskin&amp;autoPlay=false&amp;autoRewind=true" />
<embed flashvars="&amp;streamName=<?php echo $row->vtour;?>&amp;autoPlay=false&amp;autoRewind=true&amp;skinName=<?php echo $mosConfig_live_site;?>/components/com_ezrealty/library/flash/flvskin" quality="high" scale="noscale" salign="LT" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" src="<?php echo $mosConfig_live_site;?>/components/com_ezrealty/library/flash/flvplay.swf" wmode="transparent" height="<?php echo $er_flvheight;?>" width="<?php echo $er_flvwidth;?>"></embed>
</object>

										</div>
									</td>
								</tr>
							</table>

<!--END EMBEDDED FLV VIDEO CODE-->			

<?php } ?>


<!--START CUSTOMER LINKS BLOCK-->			

<div align="center">
	<table width="100%">
		<tr>
			<td class='sectiontableheader'><?php echo _EZREALTY_TOOLS; ?></td>
		</tr>
		<tr>
			<td>
				<div align="center">
					<table border="0" width="100%">
						<tr valign='top'><td valign='top' align="left"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link3; ?>','win2','<?php echo $status2; ?>');" title="<?php echo _EZREALTY_VIEWDET_PRINT;?>"><?php echo _EZREALTY_VIEWDET_PRINT;?></a></td></tr>
						<tr valign='top'><td valign='top' align="left"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="<?php echo $mosConfig_live_site. '/index.php?option=com_ezrealty&amp;task=detail&amp;id='. $id.'&amp;Itemid='.$Itemid;?>" onmousedown="addBookmark('<?php echo stripslashes( $er_bizname );?>','<?php echo $mosConfig_live_site. '/index.php?option=com_ezrealty&amp;task=detail&amp;id='. $id.'&amp;Itemid='.$Itemid;?>')" onmouseover="return overlib('<?php echo _EZREALTY_VIEWDET_FAVS;?>')" onmouseout="return nd();"><?php echo _EZREALTY_VIEWDET_FAVS;?></a></td></tr>
						<?php if ( $er_useprofile == 0 && $er_viewarrange ) { ?>
						<tr valign="top"><td valign="top" align="left"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link4; ?>','win2','<?php echo $status1; ?>');" title="<?php echo _EZREALTY_VIEWDET_VIEWING;?>"><?php echo _EZREALTY_VIEWDET_VIEWING;?></a></td></tr>
						<?php } if ( $er_useprofile == 0 && $er_usesms && $er_mobile ){ ?>
						<tr valign="top"><td valign="top"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link5; ?>','win2','<?php echo $status2; ?>');" title="<?php echo _EZREALTY_SELLER_SMS2;?>"><?php echo _EZREALTY_SELLER_SMS2;?></a></td></tr>
						<?php } if ( $er_viewrecommend ){ ?>
						<tr valign="top"><td valign="top" align="left"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link6; ?>','win2','<?php echo $status1; ?>');" title="<?php echo _EZREALTY_VIEWDET_SEND_FRIEND;?>"><?php echo _EZREALTY_VIEWDET_SEND_FRIEND;?></a></td></tr>
						<?php } if ( $er_viewmailing ){ ?>
						<tr valign="top"><td valign="top" align="left"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link7; ?>','win2','<?php echo $status1; ?>');" title="<?php echo _EZREALTY_VIEWDET_MAILING;?>"><?php echo _EZREALTY_VIEWDET_MAILING;?></a></td></tr>
						<?php } ?>
						<?php if ( $er_useshortlist ){ ?>
						<tr><td valign="top" align="left"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="javascript:void(0)" onclick="window.open('<?php echo $link8; ?>','win2','<?php echo $status1; ?>');" title="<?php echo _EZREALTY_LISTINGS_ADDLIGHTBOX;?>"><?php echo _EZREALTY_LISTINGS_ADDLIGHTBOX;?></a></td></tr>
						<tr><td valign="top" align="left"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<a href="<?php echo $link10;?>"><?php echo _EZREALTY_VIEW_LIGHTBOX;?></a></td></tr>
						<?php } ?>
					</table>
				</div>
			</td>
		</tr>
	</table>
</div>

<!--END CUSTOMER LINKS BLOCK-->			

<br />

</td></tr>
			</table>


&nbsp;</td>
		<td valign="top">
				<table border="0" cellpadding="0" cellspacing="0" width="100%" class="listtableborder">

			<tr>
				<td valign="top" width="50%">
				<table width="100%">
					<tr>
						<td valign="top" colspan="3" class="sectiontableheader"><?php echo _EZREALTY_ESSENTIALS;?></td>
					</tr>

			<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DET_ADDNUM;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->id;?></td></tr>
<?php if ( $row->mls_id ) { ?>
			<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DET_MLSID;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->mls_id;?></td></tr>
<?php } ?>
<?php if ( $row->agent_id ) { ?>
			<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DET_AGID;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->agent_id;?></td></tr>
<?php } ?>

											    <?php if ( $row->sold ) { ?>
			<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_MARKET;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left" class="h4">
<?php if ( $row->sold==1 ){ ?><?php echo _EZREALTY_DETAILS_MARKET1;?><?php } ?>
<?php if ( $row->sold==2 ){ ?><?php echo _EZREALTY_DETAILS_MARKET2;?><?php } ?>
<?php if ( $row->sold==3 ){ ?><?php echo _EZREALTY_DETAILS_MARKET3;?><?php } ?>
<?php if ( $row->sold==4 ){ ?><?php echo _EZREALTY_DETAILS_MARKET4;?><?php } ?>
<?php if ( $row->sold==5 ){ ?><?php echo _EZREALTY_DETAILS_MARKET5;?><?php } ?>
<?php if ( $row->sold==6 ){ ?><?php echo _EZREALTY_DETAILS_MARKET6;?><?php } ?>
												</td></tr>
										    	<?php } ?>

										    	<?php if ( $row->type ){ ?>
												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTING_TYPE;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left">
<?php if ( $row->type==1 ){ ?><?php echo _EZREALTY_TYPE_SALE;?><?php } ?>
<?php if ( $row->type==2 ){ ?><?php echo _EZREALTY_TYPE_RENTAL;?><?php } ?>
<?php if ( $row->type==3 ){ ?><?php echo _EZREALTY_TYPE_LEASE;?><?php } ?>
<?php if ( $row->type==4 ){ ?><?php echo _EZREALTY_TYPE_AUCTION;?><?php } ?>
<?php if ( $row->type==5 ){ ?><?php echo _EZREALTY_TYPE_SWAP;?><?php } ?>
<?php if ( $row->type==6 ){ ?><?php echo _EZREALTY_TYPE_TENDER;?><?php } ?>
</td></tr>
												<?php } ?>

												<tr><td valign="top" align="left" width="150"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_VIEWDET_PRICE;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left">

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

												</td></tr>

												<?php if ( $row->bond != 0.00 ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_BOND;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left">
							<?php if ( $er_currencypos==0 ) { ?>
							<?php echo $er_currencysign.''.$formatted_price2;?>
							<?php } else { ?>
							<?php echo $formatted_price2.' '.$er_currencysign;?>
							<?php } ?>
												</td></tr>
												<?php } ?>


												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_CATEGORY_CATNAME;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><a href="<?php echo sefRelToAbs("index.php?option=com_ezrealty&amp;Itemid=$Itemid&amp;task=viewcategory&amp;id=$row->cid");?>"><?php echo $row->category;?></a></td></tr>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_VIEWDET_LOCALITY;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php if ($row->ezdesc){?><a href="#" onmouseover="return overlib('<?php echo $row->ezdesc;?>', CAPTION, '<?php echo $row->proploc; ?>');" onmouseout="return nd();"><?php } ?><?php echo stripslashes($row->proploc); ?><?php if ($row->ezdesc){?></a><?php } ?></td></tr>


												<?php if ( $row->county ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DET_COUNTY;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->county;?></td></tr>
												<?php } ?>


												<?php if ( !$er_usemap && $row->mapref ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_VIEWDET_LOCATION;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><a target="_blank" href="<?php echo $row->mapref;?>"><?php echo _EZREALTY_VIEWDET_MAP;?></a></td></tr>
												<?php } ?>
												<?php if ( $er_useflv==0 && $row->vtour ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_VIEWDET_TOUR;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><a target="_blank" href="<?php echo $row->vtour;?>"><?php echo _EZREALTY_VIEWDET_VTOUR;?></a></td></tr>
												<?php } ?>
												<?php if ( $er_usebookings && $row->viewbooking ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_BOOKINGS; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo parseThruBots($row->bookinglink); ?></td>
												<?php } ?>


												<?php if ( $row->pool ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF1; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->fplace ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF2; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->bbq ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF3; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->gazebo ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF4; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->lug ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF5; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->bir ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF6; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->heating ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF7; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->airco ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF8; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->shops ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF9; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->schools ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF10; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->elevator ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF12; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->extra1 ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF13; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->extra2 ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF14; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->extra3 ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF15; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->extra4 ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF16; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->extra5 ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF17; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->extra6 ){ ?>
												<tr><td valign="top" align="left" width="1420"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF18; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->extra7 ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF19; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>
												<?php if ( $row->extra8 ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF20; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_VIEWDET_YES; ?></td>
												</tr>
												<?php } ?>

												<?php if ( $row->pets ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_APF11; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left">
<?php if ( $row->pets==1 ){ ?>
<?php echo _EZREALTY_CONFIG_NO; ?>
<?php } if ( $row->pets==2 ){ ?>
<?php echo _EZREALTY_CONFIG_YES; ?>
<?php } if ( $row->pets==3 ){ ?>
<?php echo _EZREALTY_HELPER_PETS; ?>
<?php } ?>
</td>
												</tr>
												<?php } ?>




				</table>
				</td>
				<td valign="top" width="50%">
				<table width="100%">
					<tr>
						<td valign="top" colspan="3" class="sectiontableheader"><?php echo _EZREALTY_TABS_DETAILS;?></td>
					</tr>

										    	<?php if ( $row->age ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_VIEWDET_AGE;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->age;?></td></tr>
												<?php } ?>
										    	<?php if ( $row->landtype ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_VIEWDET_LAND;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->landtype;?></td></tr>
												<?php } ?>
										    	<?php if ( $row->frontage ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_FRONTAGE;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->frontage;?></td></tr>
												<?php } ?>
										    	<?php if ( $row->depth ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_DEPTH;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->depth;?></td></tr>
												<?php } ?>
												<?php if ( $row->bedrooms==0.5 ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_BEDROOMS;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo _EZREALTY_STUDIO;?></td></tr>
												<?php } ?>
												<?php if ( $row->bedrooms >= 1 ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_BEDROOMS;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->bedrooms;?></td></tr>
												<?php } ?>
												<?php if ( $row->totalrooms ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_TOTALROOMS;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->totalrooms;?></td></tr>
												<?php } ?>
												<?php if ( $row->livingarea ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_LIVINGAREA;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->livingarea;?></td></tr>
												<?php } ?>
												<?php if ( $row->bathrooms ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_BATHROOMS;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->bathrooms;?></td></tr>
												<?php } ?>
												<?php if ( $row->parking ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_PARKING;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->parking;?></td></tr>
												<?php }  ?>
												<?php if ( $row->ctown ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_VIEWDET_TOWN;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->ctown;?></td></tr>
												<?php } ?>
												<?php if ( $row->ctport ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_VIEWDET_TPORT;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->ctport;?></td></tr>
												<?php } ?>

												<?php if ( $row->schooldist ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTINGS_SCHOOLDIST;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->schooldist;?></td></tr>
												<?php } ?>
												<?php if ( $row->preschool ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTINGS_PRESCHOOL;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->preschool;?></td></tr>
												<?php } ?>
												<?php if ( $row->primaryschool ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTINGS_PRIMARYSCHOOL;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->primaryschool;?></td></tr>
												<?php } ?>
												<?php if ( $row->highschool ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTINGS_HIGHSCHOOL;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->highschool;?></td></tr>
												<?php } ?>
												<?php if ( $row->university ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTINGS_UNIVERSITY;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->university;?></td></tr>
												<?php } ?>
												<?php if ( $row->hofees ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_LISTINGS_HOFEES;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->hofees;?></td></tr>
												<?php } ?>

												<?php if ( $row->custom1 ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_CONFIG_CPI1; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->custom1;?></td></tr>
												<?php } ?>
												<?php if ( $row->custom2 ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_CONFIG_CPI2; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->custom2;?></td></tr>
												<?php } ?>
												<?php if ( $row->custom3 ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_CONFIG_CPI3; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->custom3;?></td></tr>
												<?php } ?>
												<?php if ( $row->custom4 ){ ?>
												<tr><td valign="top" align="left" width="120"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_CUSTOM4; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->custom4;?></td></tr>
												<?php } ?>
												<?php if ( $row->custom5 ){ ?>
												<tr><td valign="top" align="left" width="120"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_CUSTOM5; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->custom5;?></td></tr>
												<?php } ?>

										    	<?php if ( $row->takings ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_TAKINGS;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->takings;?></td></tr>
												<?php } ?>
										    	<?php if ( $row->returns ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_RETURNS;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->returns;?></td></tr>
												<?php } ?>
												<?php if ( $row->netprofit ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_NETPROFIT;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->netprofit;?></td></tr>
												<?php } ?>
												<?php if ( $row->bustype ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_BUSTYPE;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->bustype;?></td></tr>
												<?php } ?>
												<?php if ( $row->bussubtype ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_BUSSUBTYPE;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->bussubtype;?></td></tr>
												<?php } ?>
												<?php if ( $row->stock ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_STOCK;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->stock;?></td></tr>
												<?php } ?>
												<?php if ( $row->fixtures ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_FIXTURES;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->fixtures;?></td></tr>
												<?php } ?>
												<?php if ( $row->fittings ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_FITTINGS;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->fittings;?></td></tr>
												<?php } ?>
												<?php if ( $row->squarefeet ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_SQUARES;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->squarefeet;?></td></tr>
												<?php } ?>
												<?php if ( $row->percentoffice ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_POFFICE;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->percentoffice;?></td></tr>
												<?php } ?>
												<?php if ( $row->percentwarehouse ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_PWAREHOUSE;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->percentwarehouse;?></td></tr>
												<?php } ?>
												<?php if ( $row->loadingfac ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_LOADING;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->loadingfac;?></td></tr>
												<?php } ?>

												<?php if ( $row->fencing ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_FENCING;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->fencing;?></td></tr>
												<?php }  ?>
												<?php if ( $row->rainfall ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_RAINFALL;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->rainfall;?></td></tr>
												<?php } ?>
												<?php if ( $row->soiltype ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_SOILTYPE;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->soiltype;?></td></tr>
												<?php } ?>
												<?php if ( $row->grazing ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_GRAZING; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->grazing;?></td></tr>
												<?php } ?>
												<?php if ( $row->cropping ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_CROPPING; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->cropping;?></td></tr>
												<?php } ?>
												<?php if ( $row->irrigation ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_IRRIGATION; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->irrigation;?></td></tr>
												<?php } ?>
												<?php if ( $row->waterresources ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_WATERRESOURCES;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->waterresources;?></td></tr>
												<?php }  ?>
												<?php if ( $row->carryingcap ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_CARRYINGCAP;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->carryingcap;?></td></tr>
												<?php } ?>
												<?php if ( $row->storage ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_STORAGE;?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->storage;?></td></tr>
												<?php } ?>
												<?php if ( $row->services ){ ?>
												<tr><td valign="top" align="left" width="140"><img src="components/com_ezrealty/images/bullet.gif" border="0" width="12" height="12" alt="" />&nbsp;<?php echo _EZREALTY_DETAILS_SERVICES; ?></td><td align="center" width="10" valign="top">:</td><td valign="top" align="left"><?php echo $row->services;?></td></tr>
												<?php } ?>
				</table>
				</td>
			</tr>
		</table>




		<table border="0" width="528">


<!--BEGIN DESCRIPTIVE PROPERTY INFORMATION TABLE-->			

					<tr>
						<td valign="top" class="sectiontableheader"><?php echo _EZREALTY_TABS_DESCRIPTION;?></td>
					</tr>


				<tr>
				<td><?php if ($row->propdesc) { ?><?php echo parseThruBots(stripslashes($row->propdesc));?><?php } else { ?><?php echo parseThruBots($row->smalldesc);?><?php } ?></td>
				</tr>

<!--END DESCRIPTIVE PROPERTY INFORMATION TABLE-->			


	<?php if ( $row->openhouse && $row->ohouse_desc ){ ?>
					<tr>
						<td valign="top" class="sectiontableheader"><?php echo _EZREALTY_OPENHOUSE_DETAILS;?></td>
					</tr>

					<tr>
						<td valign="top"><?php echo $row->ohouse_desc;?></td>
					</tr>

	<?php } ?>


				<tr>
					<td valign="top">
<!--START MAPPING BOX-->			

<?php if ( $er_usemap ){ ?>

						<div align="center">



							<table width="100%">
								<tr>
									<td class='sectiontableheader'><?php echo _EZREALTY_PROPERTY_MAPLOC;?></td>

								</tr>
								<tr>
									<td>

<?php if ( $er_mapsys == 1 ){ ?>

<!--START GOOGLE MAPPING BOX STUFF-->			

<script type="text/javascript">
//<![CDATA[
function load()
{
    if (GBrowserIsCompatible())
    {
        map = new GMap2(document.getElementById("map"));
        map.addControl(new GSmallMapControl());
        map.addControl(new GMapTypeControl());
        map.setCenter(new GLatLng(34.20725938207231, -77.947998046875), 15);
        map.setMapType(G_MAP_TYPE);
        geocoder = new GClientGeocoder();
        showAddress("<?php if ( $er_usemapstnum && $row->street_num ){ ?><?php echo $row->street_num;?> <?php } ?><?php if ( $er_usemapstreet && $row->address2 ){ ?><?php echo $row->address2;?> <?php } ?><?php if ( $er_usemaplocid && $row->proploc ){ ?><?php echo $row->proploc;?> <?php } ?><?php if ( $er_usemapstid && $row->statename ){ ?><?php echo $row->statename;?>, <?php } ?><?php if ( $row->countryname ){ ?><?php echo $row->countryname;?><?php } ?>") ;
    }
    else
    {
        alert("<?php echo _EZREALTY_MAPPING_INCOMPATIBLE;?>");
    }
}


//]]>
</script>

										<div align="center">
											<table border="0" align="center">
												<tr valign='top'><td valign='top' align="left">
    <form action="#" onsubmit="showAddress(this.address.value); return false">
      <div id="map" style="width: <?php echo $er_mapwidth;?>px; height: <?php echo $er_mapheight;?>px"></div>
    </form>
</td></tr>
											</table>
										</div>

<!--END GOOGLE MAPPING BOX-->			

<?php } ?>

<?php if ( $er_mapsys == 2 ){ ?>


<!--START YAHOO MAPPING BOX-->			

										<div align="center">
											<table border="0" align="center">
												<tr valign='top'><td valign='top' align="left">

<div align="center"><a href="http://maps.yahoo.com/dd?taddr=<?php echo $row->street_num;?> <?php echo $row->address2;?>&tcsz=<?php echo $row->proploc;?>,+<?php echo $row->statename;?>+<?php echo $row->postcode;?>&tcountry=<?php echo $row->countryname;?>" target="_blank"><strong><?php echo _EZREALTY_DRIVING_DIRECTIONS;?></strong></a></div>
<div id="mapContainer"></div>

<script type="text/javascript">
// Create and display Map object at the address and with zoom level 3.
//Include your application ID.
var map = new Map("mapContainer", "YahooDemo", 
  "<?php if ( $er_usemapstnum && $row->street_num ){ ?><?php echo $row->street_num;?> <?php } ?><?php if ( $er_usemapstreet && $row->address2 ){ ?><?php echo $row->address2;?>, <?php } ?><?php if ( $er_usemaplocid && $row->proploc ){ ?><?php echo $row->proploc;?> <?php } ?><?php if ( $er_usemapstid && $row->statename ){ ?><?php echo $row->statename;?> <?php } ?> <?php echo $row->countryname;?>", 3); 

map.addWidget(new SatelliteControlWidget());


// Make the map draggable 
map.addTool( new PanTool(), true );

// Create a POI marker object
marker1 = new CustomPOIMarker( '<?php if ( $er_usemapstnum && $row->street_num ){ ?><?php echo $row->street_num;?> <?php } ?><?php if ( $er_usemapstreet && $row->address2 ){ ?><?php echo $row->address2;?>, <?php } ?><?php if ( $er_usemaplocid && $row->proploc ){ ?><?php echo $row->proploc;?> <?php } ?><?php if ( $er_usemapstid && $row->statename ){ ?><?php echo $row->statename;?> <?php } ?>', '(<?php if ( $row->sold==1 ){ ?><?php echo _EZREALTY_DETAILS_MARKET1;?><?php } ?>
<?php if ( $row->sold==2 ){ ?><?php echo _EZREALTY_DETAILS_MARKET2;?><?php } ?>
<?php if ( $row->sold==3 ){ ?><?php echo _EZREALTY_DETAILS_MARKET3;?><?php } ?>
<?php if ( $row->sold==4 ){ ?><?php echo _EZREALTY_DETAILS_MARKET4;?><?php } ?>
<?php if ( $row->sold==5 ){ ?><?php echo _EZREALTY_DETAILS_MARKET5;?><?php } ?>
<?php if ( $row->sold==6 ){ ?><?php echo _EZREALTY_DETAILS_MARKET6;?><?php } ?>
)',
  '<?php echo $row->adline;?>', '0xFF0000', '0xFFFFFF'); 

// Add the POI marker to the map and display it 
map.addMarkerByAddress( marker1, "<?php if ( $er_usemapstnum && $row->street_num ){ ?><?php echo $row->street_num;?> <?php } ?><?php if ( $er_usemapstreet && $row->address2 ){ ?><?php echo $row->address2;?>, <?php } ?><?php if ( $er_usemaplocid && $row->proploc ){ ?><?php echo $row->proploc;?> <?php } ?><?php if ( $er_usemapstid && $row->statename ){ ?><?php echo $row->statename;?> <?php } ?> <?php echo $row->countryname;?>"); 

// Create a Navigator Widget object 
navWidget = new NavigatorWidget();  
// Add the Navigator Widget to the map and display it 
map.addWidget(navWidget); 

</script>

</td></tr>
											</table>
										</div>

<!--END YAHOO MAPPING BOX-->			

<?php } ?>


<?php if ( $er_mapsys == 3 && $row->declat && $row->declong ){ ?>

<!--START GOOGLE COORDINATES MAPPING BOX STUFF-->			


<div align="center">

    <script type="text/javascript">
    //<![CDATA[

function load()
{

    // Check to see if this browser can run the Google API
    if (GBrowserIsCompatible()) {

      gmarkers = [];
      htmls = [];
      to_htmls = [];
      from_htmls = [];
      i=0;

      // Display the map, with some controls and set the initial location 
      var map = new GMap2(document.getElementById("map"));
      map.addControl(new GLargeMapControl());
      map.addControl(new GMapTypeControl());
      map.setCenter(new GLatLng( <?php echo $row->declat;?>,<?php echo $row->declong;?>), 15);
    
      // Set up three markers with info windows 
    
      var point = new GLatLng( <?php echo $row->declat;?>,<?php echo $row->declong;?>);
      var marker = createMarker(point,"<?php echo $row->adline;?>","<?php echo $row->adline;?>")
      map.addOverlay(marker);

    }
    
    // display a warning if the browser was not compatible
    else {
      alert("<?php echo _EZREALTY_MAPPING_INCOMPATIBLE;?>");
    }

}
    // This Javascript is based on code provided by the
    // Blackpool Community Church Javascript Team
    // http://www.commchurch.freeserve.co.uk/   
    // http://www.econym.demon.co.uk/googlemaps/

    //]]>

      // A function to create the marker and set up the event window
      function createMarker(point,name,html) {
        var marker = new GMarker(point);

        // The info window version with the "to here" form open
        to_htmls[i] = html + '<br /><?php echo _EZREALTY_MAP_DIRECTIONS;?>: <strong><?php echo _EZREALTY_MAP_TOHERE;?></strong> - <a href="javascript:fromhere(' + i + ')"><?php echo _EZREALTY_MAP_FROMHERE;?></a>' +
           '<br /><?php echo _EZREALTY_MAP_START;?>:<form action="http://maps.google.com/maps" method="get" target="_blank">' +
           '<input type="text" size="40" maxlength="40" name="saddr" id="saddr" value="" /><br />' +
           '<input value="<?php echo _EZREALTY_MAP_DIRECTIONS;?>" type="submit">' +
           '<input type="hidden" name="daddr" value="' + point.lat() + ',' + point.lng() + 
                  // "(" + name + ")" + 
           '"/>';
        // The info window version with the "to here" form open
        from_htmls[i] = html + '<br /><?php echo _EZREALTY_MAP_DIRECTIONS;?>: <a href="javascript:tohere(' + i + ')"><?php echo _EZREALTY_MAP_TOHERE;?></a> - <strong><?php echo _EZREALTY_MAP_FROMHERE;?></strong>' +
           '<br /><?php echo _EZREALTY_MAP_END;?>:<form action="http://maps.google.com/maps" method="get"" target="_blank">' +
           '<input type="text" size="40" maxlength="40" name="daddr" id="daddr" value="" /><br />' +
           '<input value="<?php echo _EZREALTY_MAP_DIRECTIONS;?>" type="submit">' +
           '<input type="hidden" name="saddr" value="' + point.lat() + ',' + point.lng() +
                  // "(" + name + ")" + 
           '"/>';
        // The inactive version of the direction info
        html = html + '<br /><?php echo _EZREALTY_MAP_DIRECTIONS;?>: <a href="javascript:tohere('+i+')"><?php echo _EZREALTY_MAP_TOHERE;?></a> - <a href="javascript:fromhere('+i+')"><?php echo _EZREALTY_MAP_FROMHERE;?></a>';

        GEvent.addListener(marker, "click", function() {
          marker.openInfoWindowHtml(html);
        });
        gmarkers[i] = marker;
        htmls[i] = html;
        i++;
        return marker;
      }

      // functions that open the directions forms
      function tohere(i) {
        gmarkers[i].openInfoWindowHtml(to_htmls[i]);
      }
      function fromhere(i) {
        gmarkers[i].openInfoWindowHtml(from_htmls[i]);
      }

    </script>

   <div id="map" style="width: <?php echo $er_mapwidth;?>px; height: <?php echo $er_mapheight;?>px"></div>

</div>

<!--END GOOGLE COORDINATES MAPPING BOX-->			

<?php } ?>



									</td>
								</tr>
							</table>
						</div>

<?php } ?>


<!--END MAPPING BOX STUFF-->			


</td>
			</tr>
		</table>
		</td>
	</tr>
	</table>
