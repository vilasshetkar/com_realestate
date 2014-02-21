<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

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
				$option['user']     = 'root';       // User for database authentication
				$option['password'] = '';   // Password for database authentication
				$option['database'] = 'test';      // Database name
				$option['prefix']   = '';             // Database prefix (may be empty)
 
                $db = JDatabase::getInstance( $option );
				
				 // Set the pagination request variables
				 JRequest::setVar('limit', JRequest::getVar('limit', 5, '', 'int'));
				 JRequest::setVar('limitstart', JRequest::getVar('limitstart', 0, '', 'int'));
				
                parent::setDbo($db);
         }

	public function getMsg($limit=null)
	{		 
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		if(!$limit == null){
			$dblimit = " AND id=$limit";
		}else{ $dblimit = "" ; }
		
		$query = "SELECT * From `2_real_property` WHERE status='1' $dblimit";
		$db->setQuery($query);
		$result = $db->loadAssocList();//loadRowList(); //loadRow();
		//$result; //$result[2];
		return $result;
	}

	public function FeaturedProp()
	{		 
		$db = $this->getDbo();
		$query = $db->getQuery(true);
		
		$query = "SELECT * From `2_real_property` WHERE status='1'  AND featured = '1' ";
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
		

		//$searchArray = $search;//explode(" ", $search);

		//$description = "";
		//$name = "";
		//foreach($searchArray AS $s)
		//{
			$type = "`category` LIKE '%".mysql_real_escape_string($_POST['type'])."%'";
			$property_for = "`property_for` LIKE '%".mysql_real_escape_string($_POST['property_for'])."%'";
			$city = "`city` LIKE '%".mysql_real_escape_string($_POST['city'])."%'";
			$price = "`price` LIKE '%".mysql_real_escape_string($_POST['price'])."%'";
		//}
		
		
		//$query = "SELECT * FROM `users` WHERE ($description) OR ($name)";

		$query = "SELECT * From `2_real_property` WHERE ($property_for) AND ($city) AND ($price) AND ($type)" ;

		$db->setQuery($query);

		$result = $db->loadAssocList();//loadRowList(); //loadRow();
		
		echo $query;

		//$result; //$result[2];

		return $result;

	}


	
}
