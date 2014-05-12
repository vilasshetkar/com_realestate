<?php
/**
 * Helper class for Hello World! module
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://dev.joomla.org/component/option,com_jd-wiki/Itemid,31/id,tutorials:modules/
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// require_once JPATH_SITE.'/components/com_content/helpers/route.php';

$document = JFactory::getDocument();


class modWebEnquiryHelper
{
    /**
     * Retrieves the hello message
     *
     * @param array $params An object containing the module parameters
     * @access public
     */    
    public static function getWebEnquiry( $params )
    {
		// Get an instance of the generic articles model
		//$model = JModelLegacy::getInstance('Project', 'RealEstateModel');
		//$result = $model->HomeProject($params->get("home_project"));

		$mailer = JFactory::getMailer();
		$config = JFactory::getConfig();

		// Sender
		$from = JRequest::getVar('email');
		$firstName = JRequest::getVar('first_name');
		$lastName = JRequest::getVar('last_name');
		$company = JRequest::getVar('company');
		$address = JRequest::getVar('address');
		$phone = JRequest::getVar('phone');
		$message = JRequest::getVar('message');

		$sender = array( $from , $firstName.' '.$lastName );
		$mailer->setSender($sender);
		
		// Recipient
		$recipient = $params->get("email") ;
		//$recipient = $config->get( 'config.mailfrom' ) ;
		//$recipient = array( 'person1@domain.com', 'person2@domain.com', 'person3@domain.com' );
		$mailer->addRecipient($recipient);

		// Subject for Mail
		$mailer->setSubject("Website Enquiry From: ".$_SERVER['SERVER_NAME']);

		// Message Body
		
		$body   = "<p><small>This is system generated mail:</small> </p>
			<hr />
			<div>
			<p><strong>From :</strong> $from</p>
			<p><strong>Full Name :</strong> $firstName"." "."$lastName </p>
			<p><strong>Company :</strong> $company </p>
			<p><strong>Address :</strong> $address</p>
			<p><strong>Phone :</strong> $phone </p></div>
			<div><h3>Message : </h3>
			<p>$message</p></div>" ;
		$mailer->isHTML(true);
		$mailer->Encoding = 'base64';
		$mailer->setBody($body);
		

		// Send Mail
		if($from){
			$send = $mailer->send();
			if ( $send !== true ) {
				$result = 'Error sending email: ' . $send->getMessage();
			return $result;
			} else{
				$result = JFactory::getApplication()->enqueueMessage('Thank you for Contact!');
			return $result;
			}
		}else {
			return false;
		}
    }
}
?>