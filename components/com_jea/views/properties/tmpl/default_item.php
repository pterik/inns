<?php 
/**
 * This file is part of Joomla Estate Agency - Joomla! extension for real estate agency
 *
 * @version     $Id: default_item.php 219 2011-01-22 15:59:03Z ilhooq $
 * @package     Jea.site
 * @copyright	Copyright (C) 2008 PHILIP Sylvain. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla Estate Agency is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses.
 *
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
if(!$this->row->id){
    echo JText::_('This property doesn\'t exists anymore');
    return;
}

JHTML::stylesheet('jea.css', 'media/com_jea/css/');
$dispatcher =& JDispatcher::getInstance();
JPluginHelper::importPlugin( 'jea' );
?>

<p class="pagenavigation">
  <?php echo $this->getPrevNextItems( $this->row->id ) ?>
</p>

<?php if ( $this->params->get('show_print_icon') || $this->params->get('show_pdf_icon') ): ?>
	<div class="jea_tools">
	<?php if ( $this->params->get('show_pdf_icon') ): ?>
    <a href="<?php echo JRoute::_('&format=pdf') ?>" title="PDF"><?php echo JHTML::_('image.site', 'pdf_button.png') ?></a>     
	<?php endif ?>
	<?php if ( $this->params->get('show_print_icon') ): ?>
	<a href="javascript:window.print()" title="<?php echo JText::_('Print') ?>"><?php echo JHTML::_('image.site', 'printButton.png') ?></a>
    <?php endif ?>
	</div>
<?php endif ?>

<h1>
<?php if (($this->row->town !="") || ($this->row->adress !="")) : echo $this->escape($this->row->town).", ".$this->escape($this->row->adress)."\n"?>   
<?php else : echo $this->escape($this->row->type) ?>
<?php endif ?>
 <?php $this->page_title ?> 
</h1>
<?php if ( $this->params->get('show_creation_date', 0) ) : ?>
    <p><span class="date">
    <?php echo JHTML::_('date',  $this->row->date_insert, JText::_('DATE_FORMAT_LC3') ); ?></span></p>
<?php endif ?>

<?php if(!empty($this->main_image)): ?>
<div id="jea-gallery">
    <?php echo $this->loadTemplate($this->images_layout) ?>
</div>
<?php endif ?>
  
 <h2 ><?php echo JText::_('Ref')?> : <?php echo $this->escape($this->row->ref) ?></h2>
 
 <div class="clr" >&nbsp;</div>
  	    
   <div class="item_second_column">
      <h3><?php echo JText::_('Adress') ?> :</h3>
      <strong>
      <?php if($this->row->adress) echo $this->escape( $this->row->adress ).", <br /> \n" ?>
      <?php if ($this->row->zip_code) echo $this->escape( $this->row->zip_code ) ?> 
      <?php if ($this->row->town) echo  $this->escape($this->row->town) ."<br /> \n" ?> 
      </strong> 
      <?php if ($this->row->area) 
              echo JText::_('Area') . ' : <strong>'
				   .$this->escape( $this->row->area ). "</strong>\n" ?>
      
     <?php if ( $this->row->advantages ) : ?>
     <h3><?php echo JText::_('Advantages')?></h3>
     <?php echo $this->getAdvantages( $this->row->advantages , 'ul' ) ?>
     <?php endif  ?>
   </div>
    

   	<?php if (intval($this->row->availability)): ?>
   	<p><em><?php echo JText::_('Availability date') ?> : <?php echo JHTML::_('date',  $this->row->availability, JText::_('DATE_FORMAT_LC3') ) ?></em> </p>
   	<?php endif  ?>
 
  <table>
    <tr>
      <td><?php echo JText::_('Renting price daily')?></td>
      <td> : <strong><?php echo $this->formatPrice( floatval($this->row->price) , JText::_('NOT PRESENT') ) ?></strong></td>
      <td><?php echo JText::_('Renting price monthly')?></td>
      <td> : <strong><?php echo $this->formatPrice( floatval($this->row->price_monthly) , JText::_('NOT PRESENT') ) ?></strong></td>
   </tr>
      
   <!---
        <?php if ( $this->row->charges ): ?> 
         <tr>
           <td><?php echo JText::_('Charges') ?></td>
           <td> : <strong><?php echo $this->formatPrice( floatval($this->row->charges), JText::_('Consult us') ) ?></strong></td>
          </tr>
        <?php endif  ?>
   -->
   <?php if ( $this->row->is_renting &&  floatval($this->row->deposit) > 0 ): ?> 
   <tr>
     <td><?php echo JText::_('Deposit') ?></td>
     <td> : <strong><?php echo $this->formatPrice( floatval($this->row->deposit), '0' ) ?></strong></td>
   </tr>
   <?php endif  ?>
   
   <!--<?php if ($this->row->fees): ?> 
   <tr>
     <td><?php echo JText::_('Fees') ?></td>
     <td> : <strong><?php echo $this->formatPrice( floatval($this->row->fees), JText::_('Consult us') ) ?></strong></td>
   </tr>
      <?php endif  ?>
  -->
  </table>
  
  <h3><?php echo JText::_('Description') ?> :</h3>
      <?php if ($this->row->condition): ?>
     <p> <?php echo JText::_('GENERAL CONDITION') ?> : <strong><?php echo ucfirst($this->escape($this->row->condition)) ?></strong></p>
      <?php endif  ?>
      
     <p>
		<?php 
		if ($this->row->living_space) {
		    echo  JText::_( 'Living space' ) . ' : <strong>' . $this->row->living_space . ' ' 
		    	  . $this->params->get( 'surface_measure' ) . '</strong>' .PHP_EOL ;
		}?>
		<br />

		<?php
		if ($this->row->land_space) {
		    echo  JText::_( 'Land space' ) . ' : <strong>' . $this->row->land_space  .' '
		          . $this->params->get('surface_measure'). '</strong>' .PHP_EOL ;
		}?>
        <br />
        
        <?php if ( $this->row->rooms ): ?>
        <?php echo JText::_('Number of rooms') ?> : <strong><?php echo $this->row->rooms ?></strong> <br />
        <?php endif  ?>
         
        <?php if ( $this->row->floor ): ?>
        <?php echo JText::_('Number of floors') ?> : <strong><?php echo $this->row->floor ?></strong> <br />
        <?php endif  ?>
         
        <?php if ( $this->row->bathrooms ): ?>
        <?php echo JText::_('Number of bathrooms') ?> : <strong><?php echo $this->row->bathrooms ?></strong> <br />
        <?php endif  ?>
        
        <?php if ($this->row->toilets): ?>
        <?php echo JText::_('Number of toilets') ?> : <strong><?php echo $this->row->toilets ?></strong>
		<?php endif ?>
    </p>

    <p>
     <?php if ( $this->row->hot_water_type ): ?>
     <?php echo JText::_('Hot water type') ?> : <strong><?php echo ucfirst($this->escape( $this->row->hot_water )) ?></strong><br />
     <?php endif  ?>
     
     <?php if ( $this->row->heating_type ): ?>
     <?php echo JText::_('Heating type') ?> : <strong><?php echo ucfirst($this->escape( $this->row->heating )) ?></strong>
     <?php endif  ?>
     </p>

     
 <div class="clr" >&nbsp;</div>
 
<?php $dispatcher->trigger('onBeforeShowDescription', array(&$this->row)) ?>
          
 <div class="item_description" > 
 <?php echo $this->row->description ?> 
 <br />
 <?php if ($this->row->phones_owner): ?>
 <?php echo JText::_('PHONES OWNER')." : "?> 
 <strong>
 <?php echo $this->row->phones_owner ?> 
 <?php endif ?>
 </strong>
 <br />
 <?php if ($this->row->phones_agent): ?>
 <?php echo JText::_('PHONES AGENT')." : " ?> 
 <strong>
 <?php echo $this->row->phones_agent ?> 
 <?php endif ?>
 </strong>
  </div>
 
<?php $dispatcher->trigger('onAfterShowDescription', array(&$this->row)) ?>

<?php if ( $this->params->get('show_googlemap') ): ?>
<h3><?php echo JText::_('Property geolocalization') ?> :</h3>
<?php echo $this->showGoogleMap($this->row) ?>
<?php endif ?>

<?php if ( $this->params->get('show_contactform') ): ?>
    
<form action="<?php echo $this->getViewUrl ($this->row->id,'&task=sendmail',  true ) ?>" method="post" enctype="application/x-www-form-urlencoded">

	<fieldset><legend><?php echo JText::_('FORMCONTACTLEGEND') ?></legend>
		<p><label for="name"><?php echo JText::_('Name') ?> :</label><br />
		   <input type="text" name="name" id="name" value="<?php echo $this->escape(JRequest::getVar('name', '')) ?>" size="40" />
		</p>
		
		<p><label for="email"><?php echo JText::_('Email') ?> :</label><br />
		   <input type="text" name="email" id="email" value="<?php echo $this->escape(JRequest::getVar('email', '')) ?>" size="40" />
		</p>
		<?php  ?>
		<p><label for="subject"><?php echo JText::_('Subject') ?> :</label><br />
		   <input type="text" name="subject" id="subject" value="<?php echo JText::_('REF').' '.$this->escape( $this->row->ref ) ?>" size="40" />
		</p>
		<p><label for="e_message"><?php echo JText::_('Message') ?> :</label><br /> 
		   <textarea name="e_message" id="e_message" rows="10" cols="40"><?php echo $this->escape(JRequest::getVar('e_message', '')) ?></textarea>
		</p>
        
        <?php $dispatcher->trigger('onFormCaptchaDisplay') ?>
        
        
		<p>
		<input type="hidden" name="created_by" value="<?php echo $this->row->created_by ?>" />
		<?php echo JHTML::_( 'form.token' ) ?>
		<input type="submit" value="<?php echo JText::_('Send') ?>" />
		</p>
		
		
	
	</fieldset>
</form>  
<?php endif  ?>

<p><a href="javascript:window.history.back()" class="jea_return_link" ><?php echo JText::_('Back')?></a></p>
