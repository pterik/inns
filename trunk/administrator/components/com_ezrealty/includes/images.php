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


/**************************************************\
                  FUNCTION USED TO SHOW THE IMAGE OPTIONS
-image name (from db)
-if its an admin show the dropdown of the existing images
-dropdown of existing images
-name of the db field that holds the image
\**************************************************/


function imageUpload($image,$admin,$images=null,$fieldname){
global $database,$mosConfig_dbprefix,$Itemid,$mosConfig_absolute_path,$mosConfig_live_site,$er_imagedirectory, $er_thumbwidth;
?>

<table ><tr><td width="150">
<strong><?php echo _EZREALTY_VLDET_CURRENTIMG;?></strong><br />

<img src='<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php if(!$image  ||   !file_exists($mosConfig_absolute_path.'/components/com_ezrealty/'.$er_imagedirectory.'/'.$image) ){echo 'th/nothumb.gif';}else{echo $image;} ?>' hspace='4' width='<?php echo $er_thumbwidth;?>' border='0' alt='' />
<?php if($image &&   file_exists($mosConfig_absolute_path.'/components/com_ezrealty/'.$er_imagedirectory.'/'.$image)){?>
<br /><a href='<?php echo $mosConfig_live_site;?>/components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $image;?>' target="_blank"><?php echo _EZREALTY_VLDET_OPENFULLSIZE;?></a><br />
<?php } ?>

</td></tr>

<tr><td>
<?php if(!$image){ ?>

<strong><?php echo _EZREALTY_VLDET_UPLOADNEW;?>:</strong><br />
<input class="inputbox" type='file' name='<?php echo $fieldname;?>upload' size="15" /><br /><br />

<?php } ?>
</td></tr></table>
<?php
}


/**************************************************\
        FRONT-END IMAGE MANAGEMENT STUFF
\**************************************************/


function imageUploadFront($image,$admin,$images=null,$fieldname){
global $database,$mosConfig_dbprefix,$Itemid,$mosConfig_absolute_path,$mosConfig_live_site,$er_imagedirectory, $er_thumbwidth;
?>

<table ><tr><td width="150">
<strong><?php echo _EZREALTY_VLDET_CURRENTIMG;?></strong><br />

<img src='<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php if(!$image  ||   !file_exists($mosConfig_absolute_path.'/components/com_ezrealty/'.$er_imagedirectory.'/'.$image) ){echo 'th/nothumb.gif';}else{echo $image;} ?>' hspace='4' width='<?php echo $er_thumbwidth;?>' border='0' alt='' />
<?php if($image &&   file_exists($mosConfig_absolute_path.'/components/com_ezrealty/'.$er_imagedirectory.'/'.$image)){?>
<br /><a href='<?php echo $mosConfig_live_site;?>/components/com_ezrealty/<?php echo $er_imagedirectory;?>/<?php echo $image;?>' target="_blank"><?php echo _EZREALTY_VLDET_OPENFULLSIZE;?></a><br />
<?php } ?>

</td></tr>

<tr><td>
<?php if(!$image){ ?>

<strong><?php echo _EZREALTY_VLDET_UPLOADNEW;?>:</strong><br />
<input class="inputbox" type='file' name='<?php echo $fieldname;?>upload' size="15" /><br /><br />

<?php } ?>
</td></tr></table>
<?php
}



/**************************************************\
        PROFILE IMAGE MANAGEMENT STUFF
\**************************************************/


function profileUpload($image,$admin,$images=null,$fieldname){
global $database,$mosConfig_dbprefix,$Itemid,$mosConfig_absolute_path,$mosConfig_live_site, $er_thumbwidth;


?>

<table ><tr><td width="150">
<strong><?php echo _EZREALTY_VLDET_CURRENTIMG;?></strong><br />

<img src='<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/profiles/<?php if(!$image  ||   !file_exists($mosConfig_absolute_path.'/components/com_ezrealty/profiles/'.$image) ){echo 'nothumb.jpg';}else{echo $image;} ?>' hspace='4' width='<?php echo $er_thumbwidth;?>' border='0' alt='' />

</td></tr>

<tr><td>
<?php if(!$image){ ?>

<strong><?php echo _EZREALTY_VLDET_UPLOADNEW;?>:</strong><br />
<input class="inputbox" type='file' name='<?php echo $fieldname;?>upload' size="15" /><br /><br />

<?php } ?>
</td></tr></table>
<?php
}


/**************************************************\
   FUNCTION THAT MANAGES THE PROFILE IMAGE UPLOAD
\**************************************************/
    
function saveProfileUpload($fileatt_name,$fileatt_type,$fileatt){
global $database,$mosConfig_dbprefix,$Itemid,$mosConfig_absolute_path,$mosConfig_live_site;
global $er_imagedirectory,$er_thumbwidth, $er_thumbcreation, $er_thumbquality;


$fileatt_name = str_replace("%20","-",$fileatt_name);
$fileatt_name = str_replace(" ","-",$fileatt_name);

$extension = substr($fileatt_name, strrpos($fileatt_name, "."));
$name = substr($fileatt_name, 0,strrpos($fileatt_name, "."));
$fileatt_name= $name."_".md5(microtime()).$extension;

if ((strcasecmp(substr($fileatt_name,-4),".jpg")) && (strcasecmp(substr($fileatt_name,-4),".png")) && (strcasecmp(substr($fileatt_name,-4),".gif")) ) {
        echo "<script> alert('".$fileatt_name." is a file type that is not allowed!'); window.history.go(-1); </script>\n";
        exit();
}

if (file_exists( $mosConfig_absolute_path."/components/com_ezrealty/profiles/".$fileatt_name )) {
        echo "<script> alert('".$fileatt_name." already exists. Please rename your image'); window.history.go(-1); </script>\n";
        exit();
    return '';  
}else{

  // Set mode of uploaded picture
  chmod($fileatt, octdec('644'));

    if (@move_uploaded_file($fileatt ,$mosConfig_absolute_path."/components/com_ezrealty/profiles/".$fileatt_name)){
    } else {
        echo "<script> alert('".$fileatt_name." was not uploaded to directory /components/com_ezrealty/profiles/ .  Upload error!'); window.history.go(-1); </script>\n";
        exit();
    }

        resizeProfileImage($mosConfig_absolute_path.'/components/com_ezrealty/profiles/'.$fileatt_name);

return $fileatt_name;
 }

}


/**************************************************\
   FUNCTION THAT RESIZES THE PROFILE IMAGE
\**************************************************/


function resizeProfileImage($src_file, $er_profmaxwidth, $er_profmaxheight){
	global $er_profmaxwidth, $er_profmaxheight;

  $imagetype = array( 1 => 'GIF', 2 => 'JPG', 3 => 'PNG');
  $imginfo = getimagesize($src_file);

  if ($imginfo == null) die("ERROR: Source file not found!");

  $imginfo[2] = $imagetype[$imginfo[2]];

  // height/width
  $srcWidth = $imginfo[0];
  $srcHeight = $imginfo[1];

// Set a maximum height and width
$width = $er_profmaxwidth;
$height = $er_profmaxheight;
// Get new dimensions
list($width_orig, $height_orig) = getimagesize($src_file);

$ratio_orig = $width_orig/$height_orig;

if ($width/$height > $ratio_orig) {
$width = $height*$ratio_orig;
} else {
$height = $width/$ratio_orig;
}

// Resample
$image_p = imagecreatetruecolor($width, $height);

    if ($imginfo[2] == 'JPG')
		$image = imagecreatefromjpeg($src_file);
    if ($imginfo[2] == 'GIF')
        $image = imagecreatefromgif($src_file);
    if ($imginfo[2] == 'PNG')
        $image = imagecreatefrompng($src_file);

    // Resize
    if($withSampling)
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
    else   
        imagecopyresized($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

// Output
if(imagejpeg($image_p, $src_file, 100)) {
return 1;
} else if(imagegif($image_p, $src_file, 100)) {
return 1;
} else if(imagepng($image_p, $src_file, 100)) {
return 1;
} else {
return 0;
}

}


/**************************************************\
        LOGO IMAGE MANAGEMENT STUFF
\**************************************************/


function logoUpload($image,$admin,$images=null,$fieldname){
global $database,$mosConfig_dbprefix,$Itemid,$mosConfig_absolute_path,$mosConfig_live_site;


?>

<table ><tr><td width="150">
<strong><?php echo _EZREALTY_VLDET_CURRENTIMG;?></strong><br />

<img src='<?php echo $mosConfig_live_site; ?>/components/com_ezrealty/profiles/<?php if(!$image  ||   !file_exists($mosConfig_absolute_path.'/components/com_ezrealty/profiles/'.$image) ){echo 'nologo.jpg';}else{echo $image;} ?>' hspace='4' border='0' alt='' />

</td></tr>

<tr><td>
<?php if(!$image){ ?>

<strong><?php echo _EZREALTY_VLDET_UPLOADNEW;?>:</strong><br />
<input class="inputbox" type='file' name='<?php echo $fieldname;?>upload' size="15" /><br /><br />

<?php } ?>
</td></tr></table>
<?php
}


/**************************************************\
   FUNCTION THAT MANAGES THE LOGO IMAGE UPLOAD
\**************************************************/
    
function saveLogoUpload($fileatt_name,$fileatt_type,$fileatt){
global $database,$mosConfig_dbprefix,$Itemid,$mosConfig_absolute_path,$mosConfig_live_site;
global $er_thumbcreation, $er_thumbquality;


$fileatt_name = str_replace("%20","-",$fileatt_name);
$fileatt_name = str_replace(" ","-",$fileatt_name);

$extension = substr($fileatt_name, strrpos($fileatt_name, "."));
$name = substr($fileatt_name, 0,strrpos($fileatt_name, "."));
$fileatt_name= $name."_".md5(microtime()).$extension;

if ((strcasecmp(substr($fileatt_name,-4),".jpg")) && (strcasecmp(substr($fileatt_name,-4),".png")) && (strcasecmp(substr($fileatt_name,-4),".gif")) ) {
        echo "<script> alert('".$fileatt_name." is a file type that is not allowed!'); window.history.go(-1); </script>\n";
        exit();
}

if (file_exists( $mosConfig_absolute_path."/components/com_ezrealty/profiles/".$fileatt_name )) {
        echo "<script> alert('".$fileatt_name." already exists. Please rename your image'); window.history.go(-1); </script>\n";
        exit();
    return '';  
}else{

  // Set mode of uploaded picture
  chmod($fileatt, octdec('644'));

    if (@move_uploaded_file($fileatt ,$mosConfig_absolute_path."/components/com_ezrealty/profiles/".$fileatt_name)){
    } else {
        echo "<script> alert('".$fileatt_name." was not uploaded to directory /components/com_ezrealty/profiles/ .  Upload error!'); window.history.go(-1); </script>\n";
        exit();
    }

        resizeLogoImage($mosConfig_absolute_path.'/components/com_ezrealty/profiles/'.$fileatt_name);

return $fileatt_name;
 }

}


/**************************************************\
   FUNCTION THAT RESIZES THE LOGO IMAGE
\**************************************************/
    


function resizeLogoImage($src_file, $er_logowidth, $er_logoheight){
	global $er_logowidth, $er_logoheight;

  $imagetype = array( 1 => 'GIF', 2 => 'JPG', 3 => 'PNG');
  $imginfo = getimagesize($src_file);

  if ($imginfo == null) die("ERROR: Source file not found!");

  $imginfo[2] = $imagetype[$imginfo[2]];

  // height/width
  $srcWidth = $imginfo[0];
  $srcHeight = $imginfo[1];

// Set a maximum height and width
$width = $er_logowidth;
$height = $er_logoheight;

// Get new dimensions
list($width_orig, $height_orig) = getimagesize($src_file);

$ratio_orig = $width_orig/$height_orig;

if ($width/$height > $ratio_orig) {
$width = $height*$ratio_orig;
} else {
$height = $width/$ratio_orig;
}

// Resample
$image_p = imagecreatetruecolor($width, $height);

    if ($imginfo[2] == 'JPG')
		$image = imagecreatefromjpeg($src_file);
    if ($imginfo[2] == 'GIF')
        $image = imagecreatefromgif($src_file);
    if ($imginfo[2] == 'PNG')
        $image = imagecreatefrompng($src_file);

    // Resize
    if($withSampling)
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
    else   
        imagecopyresized($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

// Output
if(imagejpeg($image_p, $src_file, 100)) {
return 1;
} else if(imagegif($image_p, $src_file, 100)) {
return 1;
} else if(imagepng($image_p, $src_file, 100)) {
return 1;
} else {
return 0;
}

}





/**************************************************\
                  FUNCTION THAT MANAGES THE IMAGE UPLOAD AND CALL TO THUMBNAILER
\**************************************************/
    
function saveFileUpload($fileatt_name,$fileatt_type,$fileatt){
global $database,$mosConfig_dbprefix,$Itemid,$mosConfig_absolute_path,$mosConfig_live_site;
global $er_imagedirectory, $er_thumbwidth, $er_thumbcreation, $er_thumbquality, $er_maxwidth, $er_maxheight;

$fileatt_name = str_replace("%20","-",$fileatt_name);
$fileatt_name = str_replace(" ","-",$fileatt_name);

$extension = substr($fileatt_name, strrpos($fileatt_name, "."));
$name = substr($fileatt_name, 0,strrpos($fileatt_name, "."));
$fileatt_name= $name."_".md5(microtime()).$extension;

if ((strcasecmp(substr($fileatt_name,-4),".jpg")) && (strcasecmp(substr($fileatt_name,-4),".png")) && (strcasecmp(substr($fileatt_name,-4),".gif")) ) {
        echo "<script> alert('".$fileatt_name." is a file type that is not allowed!'); window.history.go(-1); </script>\n";
        exit();
}

if (file_exists( $mosConfig_absolute_path."/components/com_ezrealty/".$er_imagedirectory."/".$fileatt_name )) {
        echo "<script> alert('".$fileatt_name." already exists. Please rename your image'); window.history.go(-1); </script>\n";
        exit();
    return '';  
}else{

  // Set mode of uploaded picture
  chmod($fileatt, octdec('644'));

    if (@move_uploaded_file($fileatt ,$mosConfig_absolute_path."/components/com_ezrealty/".$er_imagedirectory."/".$fileatt_name)){
    } else {
        echo "<script> alert('".$fileatt_name." was not uploaded to directory /components/com_ezrealty/".$er_imagedirectory."/ .  Upload error!'); window.history.go(-1); </script>\n";
        exit();
    }


  // Resize the thumbnail and main image

        resize($mosConfig_absolute_path.'/components/com_ezrealty/'.$er_imagedirectory.'/'.$fileatt_name, $er_thumbwidth, $er_thumbcreation, $er_thumbquality);

        resize_image($mosConfig_absolute_path.'/components/com_ezrealty/'.$er_imagedirectory.'/'.$fileatt_name, $mosConfig_absolute_path."/components/com_ezrealty/".$er_imagedirectory."/th/".$fileatt_name, $er_thumbwidth, $er_thumbcreation, $er_thumbquality);


return $fileatt_name;
 }

}


/**************************************************\
   FUNCTION THAT RESIZES THE MAIN IMAGE
\**************************************************/


function resize($src_file, $er_maxwidth, $er_maxheight){
	global $er_maxwidth, $er_maxheight;

  $imagetype = array( 1 => 'GIF', 2 => 'JPG', 3 => 'PNG');
  $imginfo = getimagesize($src_file);

  if ($imginfo == null) die("ERROR: Source file not found!");

  $imginfo[2] = $imagetype[$imginfo[2]];

  // height/width
  $srcWidth = $imginfo[0];
  $srcHeight = $imginfo[1];

// Set a maximum height and width
$width = $er_maxwidth;
$height = $er_maxheight;

// Get new dimensions
list($width_orig, $height_orig) = getimagesize($src_file);

$ratio_orig = $width_orig/$height_orig;

if ($width/$height > $ratio_orig) {
$width = $height*$ratio_orig;
} else {
$height = $width/$ratio_orig;
}

// Resample
$image_p = imagecreatetruecolor($width, $height);

    if ($imginfo[2] == 'JPG')
		$image = imagecreatefromjpeg($src_file);
    if ($imginfo[2] == 'GIF')
        $image = imagecreatefromgif($src_file);
    if ($imginfo[2] == 'PNG')
        $image = imagecreatefrompng($src_file);

    // Resize
    if($withSampling)
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
    else   
        imagecopyresized($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

// Output
if(imagejpeg($image_p, $src_file, 100)) {
return 1;
} else if(imagegif($image_p, $src_file, 100)) {
return 1;
} else if(imagepng($image_p, $src_file, 100)) {
return 1;
} else {
return 0;
}

}


/**************************************************\
        THUMBNAILER
\**************************************************/


function resize_image($src_file, $dest_file, $new_size, $method, $er_thumbquality, $er_maxheight, $er_maxwidth){
global $mosConfig_absolute_path, $er_maxwidth, $er_maxheight, $er_imagedirectory, $fileatt_name, $fileatt;


  $imagetype = array( 1 => 'GIF', 2 => 'JPG', 3 => 'PNG', 4 => 'SWF', 5 => 'PSD', 6 => 'BMP', 7 => 'TIFF', 8 => 'TIFF', 9 => 'JPC', 10 => 'JP2', 11 => 'JPX', 12 => 'JB2', 13 => 'SWC', 14 => 'IFF');
  $imginfo = getimagesize($src_file);

  if ($imginfo == null) die("ERROR: Source file not found!");

  $imginfo[2] = $imagetype[$imginfo[2]];

  // GD can only handle JPG & PNG images
  if ($imginfo[2] != 'JPG' && $imginfo[2] != 'PNG' && ($method == 'gd1' || $method == 'gd2')) die("ERROR: GD can only handle JPG and PNG files!");



//Move on and do the thumbnailing stuff


  // height/width
  $srcWidth = $imginfo[0];
  $srcHeight = $imginfo[1];


  //echo "Creating thumbnail from $imginfo[2], $imginfo[0] x $imginfo[1]...<br>";

  $ratio = max($srcWidth, $srcHeight) / $new_size;
  $ratio = max($ratio, 1.0);
  $destWidth = (int)($srcWidth / $ratio);
  $destHeight = (int)($srcHeight / $ratio);

  // Method for thumbnails creation

  switch ($method) {

  case "gd1" :

    if (!function_exists('imagecreatefromjpeg')) {
        die('GD image library not installed!');
    }
    if ($imginfo[2] == 'JPG'){
      $src_img = imagecreatefromjpeg($src_file);
      //      echo 'src_img1'.$src_img;
    }else{
      $src_img = imagecreatefrompng($src_file);
      //      echo 'src_img2'.$src_img;
    }
    if (!$src_img){
      $ERROR = $lang_errors['invalid_image'];
//    echo $lang_errors['invalid_image'];
    echo "<font color=red>Error</font> : Thumbnailing ".$src_file." to ".$dest_file." failed<br />";  
      return false;
    }
  
    $dst_img = imagecreate($destWidth, $destHeight);

      imagetruecolortopalette($src_img, false, 256);   // Create New Color Pallete
      $palsize = ImageColorsTotal($src_img);
      for ($i = 0; $i < $palsize; $i++) {   // Counting Colors In The Image
       $colors = ImageColorsForIndex($src_img, $i);   // Number Of Colors Used
       ImageColorAllocate($dst_img, $colors['red'], $colors['green'], $colors['blue']);   // Tell The Server What Colors This Image Will Use
      }

    imagecopyresized($dst_img, $src_img, 0, 0, 0, 0, $destWidth, $destHeight, $srcWidth, $srcHeight);

    if(imagejpeg($dst_img, $dest_file, $er_thumbquality)){
        echo "<font color=red>Notice</font> : Thumbnail created ".$dest_file."<br />";   
    }else{
        echo "<font color=black>Error</font> : Thumbnailing ".$src_file." to ".$dest_file." failed<br />";           
    }
    
    imagedestroy($src_img);
    imagedestroy($dst_img);
    break;

  case "gd2" :
    if (!function_exists('imagecreatefromjpeg')) {
        die('GD image library not installed!');
    }
    if (!function_exists('imagecreatetruecolor')) {
        die('GD2 image library does not support truecolor thumbnailing!');
    }
    if ($imginfo[2] == 'JPG')
      $src_img = imagecreatefromjpeg($src_file);
    else
      $src_img = imagecreatefrompng($src_file);
    if (!$src_img){
        echo "<font color=red>Error</font> : Thumbnailing ".$src_file." to ".$dest_file." failed<br />";  
//      $ERROR = $lang_errors['invalid_image'];
      return false;
    }
    $dst_img = imagecreatetruecolor($destWidth, $destHeight);
    imagecopyresampled($dst_img, $src_img, 0, 0, 0, 0, $destWidth, (int)$destHeight, $srcWidth, $srcHeight);
    imagejpeg($dst_img, $dest_file, $er_thumbquality);

    if(imagejpeg($dst_img, $dest_file, $er_thumbquality)){
        echo "<font color=red>Notice</font> : Thumbnail created ".$dest_file."<br />";   
    }else{
        echo "<font color=black>Error</font> : Thumbnailing ".$src_file." to ".$dest_file." failed<br />";       
    }
    
    imagedestroy($src_img);
    imagedestroy($dst_img);
    break;
  }

  // Set mode of uploaded picture
  chmod($dest_file, octdec('644'));

  // We check that the image is valid
  $imginfo = getimagesize($dest_file);
  if ($imginfo == null){
    return false;
  } else {
    return true;
  }
}



?>