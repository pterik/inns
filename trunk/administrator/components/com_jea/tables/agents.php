<?php
/**
 * This file is part of Joomla Estate Agency - Joomla! extension for real estate agency
 * 
 * @version     $Id: agents.php 
 * @package		Jea.admin
 * @copyright	Copyright (C) 2008 PHILIP Sylvain. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla Estate Agency is free software. This version may have been modified pursuant to the
 * GNU General Public License, and as distributed it includes or is derivative
 * of works licensed under the GNU General Public License or other free or open
 * source software licenses.
 * 
 * Replaced by Vitalii Makhaiev
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

class TableAgents extends JTable
{
    
	var $id=null;
	var $value=null;
	var $ordering=null;
	
	function TableAgents(& $db) {
		
        parent::__construct( '#__jea_agents', 'id', $db );
	}    
}