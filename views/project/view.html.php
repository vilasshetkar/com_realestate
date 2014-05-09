<?php
defined('_JEXEC') or die;

jimport('joomla.application.component.viewlegacy');

class RealEstateViewProject extends JViewLegacy
{
	 public function display($tpl = null)
	 {
		 // Assign data to the view
 		$app	= JFactory::getApplication();
		$params = $app->getParams();
		$menus	= $app->getMenu();
		$menu	= $menus->getActive();
		$model = $this->getModel();

		if($this->getLayout()=='default'){
			$this->defaultLayout();
//here else statement		 
		}elseif($this->getLayout()=='singleproject'){
			$this->singleProject();
		}else{
			$this->singleProjectPage();
		}
		// Check for errors.
			 if (count($errors = $this->get('Errors')))
			 {
				 JError::raiseError(500, implode('', $errors));
				 return false;
			 }
		 // Display the template
		 parent::display($tpl);
	 }
	 
	 // This is default layout for grid view of project
	 public function defaultLayout(){
 		$app	= JFactory::getApplication();
		$params = $app->getParams();
		$menus	= $app->getMenu();
		$menu	= $menus->getActive();
		$model = $this->getModel();

			$result = $model->getMsg($id = null);
	
			$this->property = $result;
			
	
			 $this->msg = array();
			 for($s=0;$s<count($this->property);$s++)
			 {
				 $this->msg[$s]->greeting = $this->property[$s];
			 }
			 $total = count($this->msg);
			 if (JRequest::getVar('limit') > 0) {
			 $this->msg	= array_splice($this->msg, JRequest::getVar('limitstart'), JRequest::getVar('limit'));
			 }
		 
			 jimport('joomla.html.pagination');
			 $this->_pagination = new JPagination($total, JRequest::getVar('limitstart'), JRequest::getVar('limit') );
			 
			 $this->items = $this->msg;
			 $this->pagination = $this->_pagination;
	
			 JRequest::setVar('limit', JRequest::getVar('limit', 5, '', 'int'));
			 JRequest::setVar('limitstart', JRequest::getVar('limitstart', 0, '', 'int'));
			 
		 
	 }
	 
	 // Single Project display with tabs
	 public function singleProject(){
 		$app	= JFactory::getApplication();
		$params = $app->getParams();
		$menus	= $app->getMenu();
		$menu	= $menus->getActive();
		$model = $this->getModel();
	 			//Get property id from url parameter like $_GET
			$id = JRequest::getVar('id');
			$email = JRequest::getVar('email');
	
			//get Model Object
			$result = $model->getMsg($id);
	
			$this->property = $result;
			if($email){
				$title = $email;
			}else{
	
			$title = $this->property[0]['browsertitle'];
			}
			$metakey = $this->property[0]['metakey'];
			$metadesc = $this->property[0]['metadesc'];

			//for breadcrumb  -> Pathway
			$pathway = $app->getPathway();
			$pathway->addItem($title, JRoute::_( "index.php?view=project&id=".$id ));
	
			//Set Browser Title
			$this->document->setTitle($title);
	
			//Set Browser Meta Description
			$this->document->setDescription($metadesc);
	
			//Set Browser Meta Keywords
			$this->document->setMetadata('keywords', $metakey);
	
			if ($params->get('robots')) 
			{
				$this->document->setMetadata('robots', $params->get('robots'));
			}
		}
		
	// Project seperate pages for single project website
	 public function singleProjectPage(){
 		$app	= JFactory::getApplication();
		$params = $app->getParams();
		$menus	= $app->getMenu();
		$menu	= $menus->getActive();
		$model = $this->getModel();
		
	 			//Get property id from url parameter like $_GET
			$id = JRequest::getVar('project');
	
			//get Model Object
			$property = $model->HomeProject($id);
	
			$this->property = $property;
	
		
			//for breadcrumb  -> Pathway
			$pathway = $app->getPathway();
			$pathway->addItem($this->property['title'], JRoute::_( "index.php?view=project&id=".$id ));
	
	
			return $this;
		}

}
