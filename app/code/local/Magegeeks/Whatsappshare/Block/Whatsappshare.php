<?php
/**
 * @developer  Magegeeks
 * @package    Magegeeks_Whatsappshare
 * @author     magegeeks@gmail.com
 */
class Magegeeks_Whatsappshare_Block_Whatsappshare extends Mage_Core_Block_Template
{
	

    public function getMessage()
    {	
    	$current_url = Mage::helper('core/url')->getCurrentUrl();

    	if(Mage::getStoreConfig('whatsappshare/general/message')):
    		$message = str_replace("{url}",$this->current_url,Mage::getStoreConfig('whatsappshare/general/message'));
    	else:
    		$message = "Default Message";
    	endif;
        return $message;
    }

    public function getCurrentUrl()
    {	
    	return Mage::helper('core/url')->getCurrentUrl();
    }

    public function getLable(){

    	return (Mage::getStoreConfig('whatsappshare/general/lable'))?Mage::getStoreConfig('whatsappshare/general/lable'):"Whatsapp Share";
    }
    
}