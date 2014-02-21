<?php
defined('_JEXEC') or die;

jimport('joomla.application.component.viewlegacy');

class RealEstateViewDefault extends JViewLegacy
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
			 
		 
		 // Check for errors.
			 if (count($errors = $this->get('Errors')))
			 {
				 JError::raiseError(500, implode('', $errors));
				 return false;
			 }
//here else statement		 
		}elseif($this->getLayout()=='search'){
			
			//$srch = $_POST['search'];
			//echo $srch[1];
			//$this->searchResult = $model->searchQuery();

			$result = $model->searchQuery();
	
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
			 

			
		}else{

			//Get property id from url parameter like $_GET
			$id = JRequest::getVar('id');
			$email = JRequest::getVar('email');
	
			//get Model Object
			$result = $model->getMsg($id);
	
			$this->property = $result;
			if($email){
				$title = $email;
			}else{
	
			$title = $this->property[0]['title'];
			}
			$metakey = $this->property[0]['meta_key'];
			$metadesc = $this->property[0]['meta_desc'];
			
			//for breadcrumb  -> Pathway
			$pathway = $app->getPathway();
			$pathway->addItem($title, JRoute::_( "index.php?view=prop&id=".$id ));
	
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
	 
		 // Display the template
		 parent::display($tpl);
	 }
	 
	 public function form(){
		 $name = JRequest::getVar('name');
		 return $name;
	 }

}
