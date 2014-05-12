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
class RealEstateModelDefault extends JModelItem
{
	public function __construct($config = array())
         {
                parent::__construct($config);
 
                $option = array(); //prevent problems
 
				$option['driver']   = 'mysql';            // Database driver name
				$option['host']     = 'localhost';    // Database host name
				$option['user']     = 'yogesh';       // User for database authentication
				$option['password'] = 'root';   // Password for database authentication
				$option['database'] = 'prop';      // Database name
				$option['prefix']   = '';             // Database prefix (may be empty)
 
                $db = JDatabase::getInstance( $option );
				
				 // Set the pagination request variables
				 JRequest::setVar('limit', JRequest::getVar('limit', 15, '', 'int'));
				 JRequest::setVar('limitstart', JRequest::getVar('limitstart', 0, '', 'int'));
				
                parent::setDbo($db);
         }

	public function getMsg($limit=null,$category=null)
	{		 
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		if(!$limit == null){
			$dblimit = " AND id=$limit";
		}else{ $dblimit = "" ; }
		if(!$category == null){
			$dbCat = " AND category = '$category' ";
		}else{ $dbCat = "" ; }
		
		$query = "SELECT * From `2_real_property` WHERE status='1' $dblimit $dbCat AND other_domain LIKE '%$_SERVER[HTTP_HOST]%'";
		$db->setQuery($query);
		$result = $db->loadAssocList();//loadRowList(); //loadRow();
		//$result; //$result[2];
		return $result;
	}

	public function getCategory()
	{		 
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		
		$query = "SELECT * From `2_real_property` WHERE status='1' AND other_domain LIKE '%$_SERVER[HTTP_HOST]%' GROUP BY category";
		$db->setQuery($query);
		$result = $db->loadAssocList();//loadRowList(); //loadRow();
		//$result; //$result[2];
		return $result;
	}


	public function FeaturedProp()
	{		 
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		
		$query = "SELECT * From `2_real_property` WHERE status='1'  AND featured = '1'  AND other_domain LIKE '%$_SERVER[HTTP_HOST]%'";
		$db->setQuery($query);
		$result = $db->loadAssocList();//loadRowList(); //loadRow();
		//$result; //$result[2];
		return $result;
	}

//********************************* Search Module ******************
	public function searchQuery($search="")

	{		 

		$db = $this->getDbo();

		$query = $db->getQuery(true);

			$type = JRequest::getVar('type');
			$property_for = JRequest::getVar('property_for');
			$city = JRequest::getVar('city');
			$price = JRequest::getVar('price');
			$soc_name = JRequest::getVar('project');

			$type = "`category` LIKE '%".mysql_real_escape_string($type)."%'";
			$property_for = "`property_for` LIKE '%".mysql_real_escape_string($property_for)."%'";
			$city = "`city` LIKE '%".mysql_real_escape_string($city)."%'";
			$price = "`price` LIKE '%".mysql_real_escape_string($price)."%'";
			$project = "`society_name` LIKE '%".mysql_real_escape_string($soc_name)."%'";
		//}
		
		
		//$query = "SELECT * FROM `users` WHERE ($description) OR ($name)";

		$query = "SELECT * From `2_real_property` WHERE status='1' AND ($property_for) AND ($city) AND ($price) AND ($type) AND $project AND other_domain LIKE '%$_SERVER[HTTP_HOST]%'" ;

		$db->setQuery($query);

		$result = $db->loadAssocList();//loadRowList(); //loadRow();
		

		//$result; //$result[2];

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
		$recipient = 'jaidevlandmarks@gmail.com' ;
		//$recipient = $config->get( 'config.mailfrom' ) ;
		//$recipient = array( 'person1@domain.com', 'person2@domain.com', 'person3@domain.com' );
		$mailer->addRecipient($recipient);

		// Subject for Mail
		$mailer->setSubject("Website Enquiry From: ".$_SERVER['SERVER_NAME']);

		// Message Body
		$propLink = "http://".JRequest::getVar('respoLink');
		$propTitle = JRequest::getVar('prop_title');

		$body   = "<p><small>This is system generated mail:</small> </p>
			<div><p><strong>Enquiry For</strong>: <a target='new' href='$propLink' title='$propTitle'>$propTitle</a> </p>
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
		$db = $this->getDbo();

		$query = $db->getQuery(true);

		// Insert columns.
		$columns = array('first_name', 'last_name', 'company', 'address', 'email', 'phone', 'subject', 'message', 'respo_for', 'domain');
		 
		// Insert values.
		$values = array($db->quote($_POST['first_name']), $db->quote($_POST['last_name']), $db->quote($_POST['company']), $db->quote($_POST['address']), $db->quote($_POST['email']), $db->quote($_POST['phone']), $db->quote("Website Enquiry From: ".$_SERVER['SERVER_NAME']), $db->quote($body), $db->quote($_POST['respo_for']), $db->quote($_SERVER['HTTP_HOST']));
		 
		// Prepare the insert query.
		$query
			->insert($db->quoteName('2_real_response'))
			->columns($db->quoteName($columns))
			->values(implode(',', $values));

			$db->setQuery($query);
			$db->query();

			$result = JFactory::getApplication()->enqueueMessage('Mail Sent Successfully');


			$thank = " ";
		}
		return $result;
	}


	
}
