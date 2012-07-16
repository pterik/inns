<?php

defined( '_JEXEC' ) or die( 'Restricted access' );

define('TINCAPT_MAX', 3);
define('TINCAPT_WAIT', 45);

jimport('joomla.event.plugin');
JPlugin::loadLanguage('plg_tincaptcha', JPATH_ADMINISTRATOR); 

class plgSystemTincaptcha extends JPlugin
{
	
	function onAfterInitialise()
	{
		if (JRequest::getCmd('task') == 'captcha_display') {
			$this->onCaptchaDisplay();
		}
	}
	
	// Function wrappers for TriggerEvent usage
	function onCaptchaDisplay()
	{
		$session =& JFactory::getSession();
		$plugin =& JPluginHelper::getPlugin('system', 'tincaptcha');
       	$params = new JParameter($plugin->params);

		$txtcolor = $params->get('txtcolor', null);
		$bgcolor = $params->get('bgcolor', null);
		
		if (!empty($txtcolor))
		{
			$txtcolor = explode(',', $txtcolor);
		}
		if (!empty($bgcolor))
		{
			$bgcolor = explode(',', $bgcolor);
		}
       	
		require_once(JPATH_PLUGINS.DS.'system'.DS.'tincaptcha'.DS.'tincaptcha.class.php');
	
		$tin = new Tincaptcha($params->get('length', 4), $params->get('size', 20));

		$session->set( 'tincapt_uid', md5($tin->get()) );
		
		$tin->draw($txtcolor, $bgcolor);
		exit();
	}
	
	function onFormCaptchaDisplay()
	{
        $document =& JFactory::getDocument();
	    $refreshTxt = JText::_('TIN_REFRESH_ALT');
	    $labelTxt = JText::_('Please enter the code from the image above');
        
        $refreshId = uniqid();
        $imgId = uniqid();
        $fieldId = uniqid();
        
        $refreshImg = JHTML::_(
        	'image.site', 
            'captcha-refresh.png', 
            '/plugins/system/tincaptcha/assets/',
            null,
            '',
            $refreshTxt,
            array(
            	'title' => $refreshTxt,
                'style' => 'cursor:pointer',
                'id' => $refreshId
                )
        );
        
        JHTML::_('behavior.mootools');
        
        $document->addScriptDeclaration("
        	window.addEvent('load', function() {
        		$('$refreshId').addEvent('click', function(){
        		    $('$imgId').src = 'index.php?task=captcha_display&t='+(new Date()).getTime();
	            });
        	});
        ");
        	    
	    $html=<<<EOL
<p class="tincaptcha">
<img id="$imgId" src="index.php?task=captcha_display" alt="captcha code" />
$refreshImg <br />
<label for="$fieldId">$labelTxt</label> 
<input type="text" name="captcha_code" value="" size="6" id="$fieldId" />
</p>
EOL;
    echo $html;
    
    return true;
        
	}

	function onCaptchaCheck($word)
	{
		$session =& JFactory::getSession();
		
		$tries = $session->get('tincapt_att', 1);
		$lasttry = $session->get('tincapt_tim', 0);
		
		$now = time();

		// many attempts
		if ($tries > TINCAPT_MAX) {
			// if so fast
		    if ( ($diff = TINCAPT_WAIT - ($now - $lasttry)) > 0 ) {
				JError::raiseWarning(500, JText::sprintf('TIN_MAX_ATTEMPTS', intval($diff) ));
				return false;
			} else	{
				$tries = 0; // continue if sleep enough
			}
		}

		$session->set('tincapt_att', ++$tries);
		$session->set('tincapt_tim', $now);
        
		if (empty($word)) {
		    JError::raiseWarning(500, JText::_('TIN_REQUIRED'));
	  	    return false;
		    
		} elseif (md5($word) == $session->get('tincapt_uid')) {
  			$session->set('tincapt_att', 1);
  			return true;
	  	} else {
	  	    JError::raiseWarning(500, JText::_('TIN_WRONG'));
	  	    return false;
	  	}

		return false;
	}
    
}
