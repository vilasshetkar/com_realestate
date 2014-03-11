<?php
/*ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
defined('_JEXEC') or die;
*/
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
		$layout =$this->getLayout();
		
		switch ($layout)
		{
			case "default": $this->prepareDocument();
			  break;
			case "search": $this->registeredUser();
			  break;
			case "ReferFriend": $this->referView();
			  break;
			case "email": $this->emailView();
			  break;
			default: $this->createEvent();
		}
		
		
	 
		 // Display the template
		 parent::display($tpl);
	 }


		protected function registeredUser(){
			$app	= JFactory::getApplication();
			$params = $app->getParams();
			$menus	= $app->getMenu();
			$menu	= $menus->getActive();
			$model = $this->getModel();
			$layout =$this->getLayout();

			//$srch = $_POST['search'];
			//echo $srch[1];
			//$this->searchResult = $model->searchQuery();
			if(!isset($_POST['searchProp'])){
			//$this->setLayout('default');
				$mainframe = JFactory::getApplication();
				$mainframe->redirect('index.php?option=com_realestate&view=default');
			}
			
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
			 

			
		}

		protected function createEvent(){
			$app	= JFactory::getApplication();
			$params = $app->getParams();
			$menus	= $app->getMenu();
			$menu	= $menus->getActive();
			$model = $this->getModel();
			$layout =$this->getLayout();

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

		protected function emailView(){
			$app	= JFactory::getApplication();
			$params = $app->getParams();
			$menus	= $app->getMenu();
			$menu	= $menus->getActive();
			$model = $this->getModel();
			$layout =$this->getLayout();

			//Get property id from url parameter like $_GET
			$id = JRequest::getVar('id');
			$email = JRequest::getVar('respo_for');
	
			//get Model Object
			$result = $model->getMsg($id);
	
			$this->property = $result;
			if($email){
				echo $model->sendMail($id);
			}
			
			if(!isset($_GET['id'])){
				$title = "Send Email" ;
			}else{
	
				$title = "Send Email: ".$this->property[0]['title'];
				$metakey = $this->property[0]['meta_key'];
				$metadesc = $this->property[0]['meta_desc'];
				//Set Browser Title
				$this->document->setTitle($title);
				//Set Browser Meta Description
				$this->document->setDescription($metadesc);
		
				//Set Browser Meta Keywords
				$this->document->setMetadata('keywords', $metakey);
			}
			
			//for breadcrumb  -> Pathway
			$pathway = $app->getPathway();
			$pathway->addItem($title, JRoute::_( "index.php?view=prop&id=".$id ));
	
	
	
			if ($params->get('robots')) 
			{
				$this->document->setMetadata('robots', $params->get('robots'));
			}
		}

		protected function referView(){
			$app	= JFactory::getApplication();
			$params = $app->getParams();
			$menus	= $app->getMenu();
			$menu	= $menus->getActive();
			$model = $this->getModel();
			$layout =$this->getLayout();

			//Get property id from url parameter like $_GET
			$id = JRequest::getVar('id');
			$email = JRequest::getVar('respo_for');
	
			//get Model Object
			$result = $model->getMsg($id);
	
			$this->property = $result;
			if($email){
				echo $model->sendMail($id);
			}else{
	
			$title = "Refer Your Friend: ".$this->property[0]['title'];
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


		protected function prepareDocument(){
			$app	= JFactory::getApplication();
			$params = $app->getParams();
			$menus	= $app->getMenu();
			$menu	= $menus->getActive();
			$model = $this->getModel();
			$layout =$this->getLayout();
			$category = JRequest::getVar('category');
			
			$result = $model->getMsg($id = null,$category);
			
			$this->category = $model->getCategory();
			
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
		}


}
