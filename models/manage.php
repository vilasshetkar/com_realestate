<?php


defined('_JEXEC') or die;
jimport('joomla.application.component.model');

/**
 * Content Component Archive Model
 *
 * @package     Joomla.Site
 * @subpackage  com_content
 * @since       1.5
 */
class RealEstateModelManage extends JModelItem
{
	/*public function __construct($config = array())
         {
                parent::__construct($config);
 
                $option = array(); //prevent problems
 
				$option['driver']   = 'mysql';            // Database driver name
				$option['host']     = 'localhost';    // Database host name 169.254.182.25
				$option['user']     = 'yogesh';       // User for database authentication
				$option['password'] = 'root';   // Password for database authentication
				$option['database'] = 'realEstate';      // Database name
				$option['prefix']   = '';             // Database prefix (may be empty)
 
                $db = JDatabase::getInstance( $option );
				
				 // Set the pagination request variables
				 JRequest::setVar('limit', JRequest::getVar('limit', 5, '', 'int'));
				 JRequest::setVar('limitstart', JRequest::getVar('limitstart', 0, '', 'int'));
				
                parent::setDbo($db);
         }*/

	public function addProperty()
	{		 
		$db = $this->getDbo();

		$query = $db->getQuery(true);

		$query = "INSERT INTO `2_real_property` (`user_id`, `featured`, `property_for`, `category`, `type`, `buildup_area`, `build_unit`, `land_area`, `land_unit`, `carpet_area`, `carpet_unit`, `price`, `currency`, `bedrooms`, `bathrooms`, `country`, `state`, `city`, `address`, `location`, `title`, `society_name`, `prop_desc`, `cont_name`, `contact`, `email`, `cont_address`, `prop_age`, `furnished`, `transaction_type`, `prop_owner`, `floors`, `on_floor`, `parking`, `hospital`, `airport`, `railway`, `school`, `power`, `water`, `lift`, `res_parking`, `security`, `maintenance`, `gym`, `park`, `tarrace`, `swimming`, `quarters`, `club`, `facing`, domain, meta_desc, meta_key) VALUES ('$_POST[user_id]', '$_POST[featured]', '$_POST[property_for]', '$_POST[category]', '$_POST[type]', '$_POST[build_area]', '$_POST[build_unit]', '$_POST[land_area]', '$_POST[land_unit]', '$_POST[carpet_area]', '$_POST[carpet_unit]', '$_POST[price]', '$_POST[currency]', '$_POST[bedrooms]', '$_POST[bathrooms]', '$_POST[country]', '$_POST[state]', '$_POST[city]', '$_POST[address]', '$_POST[location]', '$_POST[title]', '$_POST[society_name]', '$_POST[prop_desc]', '$_POST[cont_name]', '$_POST[contact_no]', '$_POST[email]', '$_POST[cont_address]', '$_POST[prop_age]', '$_POST[furnished]', '$_POST[transaction_type]', '$_POST[prop_owner]', '$_POST[floors]', '$_POST[on_floor]', '$_POST[parking]', '$_POST[hospital]', '$_POST[airport]', '$_POST[railway]', '$_POST[school]', '$_POST[power]', '$_POST[water]', '$_POST[lift]', '$_POST[res_parking]', '$_POST[security]', '$_POST[maintenance]', '$_POST[gym]', '$_POST[park]', '$_POST[tarrace]', '$_POST[swimming]', '$_POST[quarters]', '$_POST[club]', '$_POST[facing]','$_SERVER[HTTP_HOST]','$_POST[meta_desc]','$_POST[meta_key]');";

		$db->setQuery($query);
		$db->query();

		$result = JFactory::getApplication()->enqueueMessage('Property Added Successfully','message');

		return $result;
	}


public function viewProperty()
	{		 
		$db = $this->getDbo();

		$query = $db->getQuery(true);

		$query = "SELECT * FROM `2_real_property` ORDER BY `status` DESC";

		$db->setQuery($query);
		$result = $db->loadAssocList();// load accociate array

		return $result;
	}

public function uploadImage($imageInput)
	{		 
		/***********************
		*                     *
		* File upload example *
		*                     *
		***********************/
				
		//Retrieve file details from uploaded file, sent from upload form
		$file = JRequest::getVar($imageInput, null, 'files', 'array');
		 
		//Import filesystem libraries. Perhaps not necessary, but does not hurt
		jimport('joomla.filesystem.file');
		 
		//Clean up filename to get rid of strange characters like spaces etc
		$filename = JFile::makeSafe($file['name']);
		 echo $filename.'<br>';
		//Set up the source and destination of the file
		$src = $file['tmp_name'];
		$dest = JPATH_COMPONENT . DS . "uploads" . DS . $filename;
		 
		//First check if the file has the right extension, we need jpg only
		if ( strtolower(JFile::getExt($filename) ) == 'jpg' || 'jpeg' || 'png' || 'gif') {
		   if ( JFile::upload($src, $dest) ) {
			  //Redirect to a page of your choice
			$result = JFactory::getApplication()->enqueueMessage('Image Uploaded Successfully');
		   } else {
			  //Redirect and throw an error message
			$result = JFactory::getApplication()->enqueueMessage('Image not Uploaded');
		   }
		} else {
		   //Redirect and notify user file is not right extension
			$result = JFactory::getApplication()->enqueueMessage('Image must be .jpg, .jpeg, .png or .gif');
		}
		
		return $result;
	}

	public function sendMail(){
		$mailer = JFactory::getMailer();
		$config = JFactory::getConfig();

		// Sender
		$from = JRequest::getVar('email');
		$firstName = JRequest::getVar('first_name');
		$lastName = JRequest::getVar('last_name');
		$sender = array( $from , $firstName.' '.$lastName );
		$mailer->setSender($sender);
		
		// Recipient
		$recipient = 'vilasshetkar@gmail.com' ;
		//$recipient = $config->get( 'config.mailfrom' ) ;
		//$recipient = array( 'person1@domain.com', 'person2@domain.com', 'person3@domain.com' );
		$mailer->addRecipient($recipient);

		// Subject for Mail
		$mailer->setSubject("Website Enquiry From: ".$_SERVER['SERVER_NAME']);

		// Message Body
		$prop = JRoute::_( $_SERVER['SERVER_NAME']."/index.php?option=com_realestate&view=Default&layout=singleproperty&id=".$_POST['prop_id']  );
		$body   = "<p><small>This is system generated mail:</small> </p>
			<div><p><strong>Enquiry For</strong>: <a href='$prop' title='$_POST[respo_for]'>$_POST[respo_for]</a> </p>
			<p><strong>From :</strong> $_POST[email]</p>
			<p><strong>Full Name :</strong> $_POST[first_name]"." "."$_POST[last_name] </p>
			<p><strong>Company :</strong> $_POST[company] </p>
			<p><strong>Phone :</strong> $_POST[phone] </p></div>
			<div><h3>Message : </h3>
			<p>$_POST[message]</p></div>" ;
		$mailer->isHTML(true);
		$mailer->Encoding = 'base64';
		$mailer->setBody($body);
		
		// File Attached
		//$mailer->addAttachment(JPATH_COMPONENT.'/css/nav_bg.png');

		// Send Mail
		$send = $mailer->send();
		if ( $send !== true ) {
			echo 'Error sending email: ' . $send->getMessage();
		} else {
			$result = JFactory::getApplication()->enqueueMessage('Mail Sent Successfully');
		}
		return $result;
	}

public function updateColumn($updateCol, $value, $propId)
	{		
		
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		$query = "UPDATE `2_real_property` SET `$updateCol` = '$value' WHERE `id` = $propId";

		$db->setQuery($query);
		//mysql_query($query) or die(mysql_error());
		if($value == 0){ $value = "Not"; }else{ $value = ""; }
		$result = JFactory::getApplication()->enqueueMessage("Property made $value $updateCol Successfully",'message');
		

		return $result;
	}


public function getAjax()
	{		


		$propId = JRequest::getVar('id');
		$action = JRequest::getVar('action');
		$value = JRequest::getVar('value');
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		$query = "UPDATE `2_real_property` SET `$action` = '$value' WHERE `id` = $propId";

		//$db->setQuery($query);
		mysql_query($query) or die(mysql_error());
		
		if($value == 0){ $value = "Not"; }else{ $value = ""; }
		
		$result = "Property made $value $action Successfully";
		

		return $result;
	}

	
}
