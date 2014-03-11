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
class RealEstateModelProject extends JModelItem
{
	public function __construct($config = array())
         {
                parent::__construct($config);
 
                $option = array(); //prevent problems
 
				$option['driver']   = 'mysql';            // Database driver name
				$option['host']     = '169.254.182.25';    // Database host name 169.254.182.25
				$option['user']     = 'yogesh';       // User for database authentication
				$option['password'] = 'root';   // Password for database authentication
				$option['database'] = 'prop';      // Database name
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
		
		$query = "SELECT * From `2_real_project` WHERE status='1' $dblimit AND `domain` LIKE '%$_SERVER[HTTP_HOST]%' ";
		echo $query;
		$db->setQuery($query);
		$result = $db->loadAssocList();//loadRowList(); //loadRow();
		//$result; //$result[2];
		
		return $result;
	}

	public function FeaturedProj()
	{		 
		$db = $this->getDbo();
		$query = $db->getQuery(true);

		$query = "SELECT * From `2_real_project` WHERE status='1' AND featured= '0' AND `domain` LIKE '%$_SERVER[HTTP_HOST]%' ";
		$db->setQuery($query);
		$result = $db->loadAssocList();//loadRowList(); //loadRow();
		//$result; //$result[2];
		return $result;
	}
}
