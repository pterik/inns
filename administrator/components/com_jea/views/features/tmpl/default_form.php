<?php
/**
 * This file is part of Joomla Estate Agency - Joomla! extension for real estate agency
 * 
 * @version     $Id: default_form.php 204 2010-09-26 18:21:05Z ilhooq $
 * @package		Jea.admin
 * @copyright	Copyright (C) 2008 PHILIP Sylvain. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla Estate Agency is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses.
 * 
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ) ;

JHTML::stylesheet('jea.admin.css', 'media/com_jea/css/');
?>

<script language="javascript" type="text/javascript">

function submitbutton( pressbutton, section ) {

	var form = document.adminForm;
	
	if ( pressbutton == 'apply' || pressbutton == 'save' ) {
	
		if ( form.value.value == "" ) {
			alert( '<?php echo JText::_('You have to write a value') ?>' );
			return;
			
		}
	}	
	
	submitform(pressbutton);
	return;
}

</script>

<form action="index.php?option=com_jea&controller=features" method="post" name="adminForm" id="adminForm">
  

  <table class="adminform"> 
	<tr>
	  <td nowrap="nowrap"><label for="value"><?php echo JText::_('Value') ?> :</label></td>
	  <td width="100%" ><input id="value" type="text" name="value" value="<?php echo $this->escape( $this->row->value ) ?>" class="inputbox" size="50" /></td>
	</tr>
	<?php if($this->params->get('relationship_dpts_towns_area', 0)): ?>
        <?php if ($this->tableName == 'towns'): ?>
    	<tr>
    	  <td nowrap="nowrap"><label for="department_id"><?php echo JText::_('Department') ?> :</label></td>
    	  <td width="100%" ><?php echo $this->getDeptsList($this->row->department_id)?></td>
    	</tr>
    	<?php elseif ($this->tableName == 'areas'): ?>
    	<tr>
    	  <td nowrap="nowrap"><label for="town_id"><?php echo JText::_('Towns') ?> :</label></td>
    	  <td width="100%" ><?php echo $this->getTownsList($this->row->town_id)?></td>
    	</tr>
    	<?php endif ?>
	<?php endif ?>
  </table>
  
  <input type="hidden" name="task" value="" />
  <input type="hidden" name="id" value="<?php echo $this->row->id ?>" />
  <?php echo JHTML::_( 'form.token' ) ?>
</form>

