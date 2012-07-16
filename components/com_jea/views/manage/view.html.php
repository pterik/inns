<?php
/**
 * This file is part of Joomla Estate Agency - Joomla! extension for real estate agency
 *
 * @version     $Id: view.html.php 207 2010-10-03 13:15:10Z ilhooq $
 * @package     Jea.site
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

require_once JPATH_COMPONENT.DS.'view.php';
require_once JPATH_COMPONENT.DS.'models'.DS.'properties.php';
require_once JPATH_COMPONENT_ADMINISTRATOR .DS.'models'.DS.'features.php';

class JeaViewManage extends JeaView 
{
    
	function display( $tpl = null )
	{
        $defaultModel = new JeaModelProperties();
	    $this->setModel($defaultModel, true);
	    
	    $access =& ComJea::getAccess();
	    
	    if(!($access->canEdit || $access->canEditOwn)){
            echo JText::_('Unauthorized access');
            return;
        }

		if( $this->getLayout() == 'form'){
			$this->getItemDetail();
		} elseif($this->getLayout() == 'default_iptc') {
		    $this->getIptcDetails();
		} else {
			$this->getItemsList();
		}

        $this->assignRef('access', $access);
		parent::display($tpl);
	}


	function getItemsList()
	{
		jimport('joomla.html.pagination');
		$res = $this->get('userProperties');
		$this->pagination = new JPagination($res['total'], $res['limitstart'], $res['limit']);
		$this->assign($res);
	}

	function getItemDetail()
	{
	    $row =& $this->get('row');
		$this->assignRef('row', $row);
		$session =& JFactory::getSession();
		
	    // Keep post data if there is an error 
		$post_error = $session->get('post_error', array() , 'jea');
		if(!empty($post_error)) {
    		$this->row->bind($post_error);
            if(is_array($this->row->advantages)) {
                $this->row->advantages = implode('-', $this->row->advantages);
            }
		}

		$res = ComJea::getImagesById($row->id);
		
	    if (!empty($res['main_image']) && is_array($res['main_image'])) {
            $res['main_image']['delete_url'] = JRoute::_('&task=deleteimg&id='.$row->id ) ;
            $res['main_image']['iptc_url'] = JRoute::_('&layout=default_iptc&tmpl=component&id='.$row->id ) ;
        }
            
        foreach ( $res['secondaries_images']  as $k => $v) {
            $res['secondaries_images'][$k]['delete_url'] = JRoute::_(   '&task=deleteimg&image='.urlencode($v['name']) 
                                                                       . '&id='.$row->id ) ;
            $res['secondaries_images'][$k]['iptc_url'] = JRoute::_(   '&layout=default_iptc&image='.urlencode($v['name'])
                                                                       . '&tmpl=component&id='.$row->id ) ;
        }
		
        if($row->id){
            $page_title = ucfirst( JText::sprintf('Edit property', $this->escape($row->ref)));
        } else {
            $page_title = ucfirst( JText::_('New property'));
        }
    
		$this->assignRef('main_image', $res['main_image']);
		$this->assignRef('secondaries_images', $res['secondaries_images']);

		$this->assign( 'page_title', $page_title );

		$mainframe =& JFactory::getApplication();
		$pathway =& $mainframe->getPathway();
		$pathway->addItem( $page_title );

		$document=& JFactory::getDocument();
		$document->setTitle( $page_title );

	}
	
	function getIptcDetails()
	{
	    $iptc =& $this->get('iptc');
	    $this->assignRef('infos', $iptc);
	}
	
	
    function getHtmlList($tableName, $default=0 )
    {   
        static $lists = null;
        
        if (!is_array($lists)) {
        
            $t_department    = '- ' . JText::_( 'Department' ).' -' ;
            $t_condition     = '- ' . JText::_( 'Condition' ).' -' ;
            $t_area          = '- ' . JText::_( 'Area' ).' -' ;
            $t_slogan        = '- ' . JText::_( 'Slogan' ).' -' ;
            $t_town          = '- ' . JText::_( 'Town' ).' -' ;
            $t_property_type = '- ' . JText::_( 'Property type' ).' -' ;
            $t_heating_type  = '- ' . JText::_( 'Heating type' ).' -' ;
            $t_hotwater_type = '- ' . JText::_( 'Hot water type' ).' -' ;
            
            $lists = array( 'departments' => array( $t_department , 'department_id'),
                            'conditions' => array( $t_condition , 'condition_id' ),
                            'areas' => array( $t_area , 'area_id' ),
                            'slogans' => array( $t_slogan , 'slogan_id' ),
                            'towns' => array( $t_town , 'town_id' ),
                            'types' => array( $t_property_type , 'type_id' ),
                            'heatingtypes' => array( $t_heating_type , 'heating_type' ),
                            'hotwatertypes' => array( $t_hotwater_type , 'hot_water_type' ),
                          );
        }
        
        if ( isset($lists[$tableName]) ) {
            
            $featuresModel = new JeaModelFeatures();
            $featuresModel->setTableName( $tableName );
            
            return JHTML::_('select.genericlist', 
                            $featuresModel->getListForHtml($lists[$tableName][0]) , 
                            $lists[$tableName][1], 
                            'class="inputbox" size="1" ' , 
                            'value', 
                            'text', 
                            $default );
        }
        
        return 'list Error';    
    }
    
    function getTownsList($default=0, $department_id=0 )
    {
		$featuresModel = new JeaModelFeatures();
		$title         = '- ' . JText::_( 'Town' ).' -' ;
		$list = array();
		
		if($department_id > 0) {
			$featuresModel->setTableName( 'towns' );
			$list = $featuresModel->getListForHtml(
				$title, 'text', 
				'department_id=' . intval($department_id)
			);
		} else {
			// Potentialy Too much values
			$list[] = JHTML::_('select.option', '0', $title );
		}
		return JHTML::_(
			'select.genericlist', 
			$list, 
			'town_id', 
			'class="inputbox" size="1"', 
			'value', 
			'text', 
			$default 
		);
    }
    
    
    function getAreasList($default=0, $town_id=0 )
    {
		$featuresModel = new JeaModelFeatures();
		$title         = '- ' . JText::_( 'Area' ).' -' ;
		$list = array();
		
		if($town_id > 0) {
			$featuresModel->setTableName( 'areas' );
			$list = $featuresModel->getListForHtml(
				$title, 'text', 
				'town_id=' . intval($town_id)
			);
		} else {
			// Potentialy Too much values
			$list[] = JHTML::_('select.option', '0', $title );
		}
		return JHTML::_(
			'select.genericlist', 
			$list, 
			'area_id', 
			'class="inputbox" size="1"', 
			'value', 
			'text', 
			$default 
		);
    }
    
    function getAdvantagesRadioList()
    {
        $html = '';
        
        $featuresModel = new JeaModelFeatures();
        $featuresModel->setTableName( 'advantages' );
        $res = $featuresModel->getItems(true);
        
        $advantages = array();
        
        if ( !empty( $this->row->advantages ) ) {
            $advantages = explode( '-' , $this->row->advantages );
        }
        
        foreach ( $res['rows'] as $k=> $row ) {
            
            $checked = '';
            
            if ( in_array($row->id, $advantages) ) {
                $checked = 'checked="checked"' ;
            }
            
            $html .= '<label class="advantage">' . PHP_EOL 
                  .'<input type="checkbox" name="advantages[' . $k . ']" value="' 
                  . $row->id . '" ' . $checked . ' />' . PHP_EOL 
                  . $row->value . PHP_EOL 
                  . '</label>' . PHP_EOL ;
        }
        return $html;
    }
    
    function is_checkout( $checked_out )
    {
        if ($this->user && JTable::isCheckedOut( $this->user->get('id'), $checked_out ) ) {
            return true;
        }
        return false;
    }


}
