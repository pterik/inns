<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<script type="text/javascript">
<!--
	Window.onDomReady(function(){
		document.formvalidator.setHandler('passverify', function (value) { return ($('password').value == value); }	);
	});
// -->
</script>

<form action="<?php echo JRoute::_( 'index.php' ); ?>" method="post" name="userform" autocomplete="off" class="form-validate">
<?php if ( $this->params->def( 'show_page_title', 1 ) ) : ?>
	<div class="componentheading<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>">
		<?php echo $this->escape($this->params->get('page_title')); ?>
	</div>
<?php endif; ?>
<?php $db = JFactory::getDBO();
	$query = 'SELECT mobile FROM #__contact_details where user_id = '.$this->user->get('id');
	$db->setQuery( $query );
	$telephone1 = $db->loadResult();
	$query = 'SELECT telephone FROM #__contact_details where user_id = '.$this->user->get('id');
	$db->setQuery( $query );
	$telephone2 = $db->loadResult();
	$query = 'SELECT fax FROM #__contact_details where user_id = '.$this->user->get('id');
	$db->setQuery( $query );
	$telephone3 = $db->loadResult();
?>
<table cellpadding="5" cellspacing="0" border="0" width="100%">
<tr>
	<td width="20%"> <label for="username"> <?php echo JText::_( 'User Name' ); ?>: </label>
	</td>
	<td width="20%"> <span><?php echo $this->user->get('username');?></span>
	</td>
	<td width="60%"> 
	</td>
</tr>
<tr>
	<td width="20%"> <label for="name"> <?php echo JText::_( 'Your Name' ); ?>: </label>
	</td>
	<td width="20%">
		<input class="inputbox required" type="text" id="name" name="name" value="<?php echo $this->escape($this->user->get('name'));?>" size="40" />
	</td>
</tr>
<tr>
	<td width="20%"> <label for="telephone1"> <?php echo JText::_( 'Telephone1' ); ?>: </label>
	</td>
	<td width="20%"><label for="telephone1"><?php echo $telephone1; ?></label>
	</td>
	<td width="60%"> <label for="telephone2wrong"> <?php echo JText::_( 'CONTACT US WHEN TELEPHONE WRONG' ); ?> </label>
	</td>
</tr>
<tr>
	<td width="20%"> <label for="telephone2"> <?php echo JText::_( 'Telephone2' ); ?>: </label>
	</td>
	<td width="20%"> <label for="telephone2"> <?php echo $telephone2; ?> </label>
	</td>
</tr>
<tr>
	<td width="20%"> <label for="telephone3"> <?php echo JText::_( 'telephone3' ); ?>: </label>
	</td>
	<td width="20%"> <label for="telephone3"> <?php echo $telephone3; ?> </label>
	</td>
</tr>
<tr>
	<td>
		<label for="email">
			<?php echo JText::_( 'email' ); ?>:
		</label>
	</td>
	<td>
		<input class="inputbox required validate-email" type="text" id="email" name="email" value="<?php echo $this->escape($this->user->get('email'));?>" size="40" />
	</td>
</tr>
<?php if($this->user->get('password')) : ?>
<tr>
	<td>
		<label for="password">
			<?php echo JText::_( 'Password' ); ?>:
		</label>
	</td>
	<td>
		<input class="inputbox validate-password" type="password" id="password" name="password" value="" size="40" />
	</td>
</tr>
<tr>
	<td>
		<label for="password2">
			<?php echo JText::_( 'Verify Password' ); ?>:
		</label>
	</td>
	<td>
		<input class="inputbox validate-passverify" type="password" id="password2" name="password2" size="40" />
	</td>
</tr>
<?php endif; ?>
</table>
<?php if(isset($this->params)) :  echo $this->params->render( 'params' ); endif; ?>
	<button class="button validate" type="submit" onclick="submitbutton( this.form );return false;"><?php echo JText::_('Save'); ?></button>
	<input type="hidden" name="username" value="<?php echo $this->user->get('username');?>" />
	<input type="hidden" name="id" value="<?php echo $this->user->get('id');?>" />
	<input type="hidden" name="gid" value="<?php echo $this->user->get('gid');?>" />
	<input type="hidden" name="option" value="com_user" />
	<input type="hidden" name="task" value="save" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
