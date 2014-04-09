<?php
/**
**/
// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.controllerlegacy');

class RealEstateController extends JControllerLegacy
{

	public function display($cachable = false, $urlparams = false)
	{
		JRequest::setVar('view',JRequest::getVar('view')); // force it to be the search view		
		JRequest::setVar('layout',JRequest::getVar('layout')); // force it to be the search view		
		return parent::display($cachable, $urlparams);
	}

public function ajaxCall(){
	
	$model = $this->getModel('manage');
	
	$ajaxResult = $model->getAjax();

	echo $ajaxResult;

  exit;
 }
 
}
