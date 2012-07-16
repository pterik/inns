<?php
/**
 * This file is part of Joomla Estate Agency - Joomla! extension for real estate agency
 * 
 * @version     $Id: view.html.php 145 2010-03-31 10:03:47Z ilhooq $
 * @package		Jea.admin
 * @copyright	Copyright (C) 2008 PHILIP Sylvain. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla Estate Agency is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses.
 * 
 */


// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

jimport( 'joomla.application.component.view');

class JeaViewDefault extends JView

{
	var $pagination = null ;

	function display( $tpl = null )
	{
		
		JToolBarHelper::title( 'Joomla Estate Agency', 'jea.png' );
		
		
		parent::display($tpl);
	}




}