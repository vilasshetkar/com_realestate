<?php
// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.tooltip');
JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.bxSlider.min.js');
JHtml::stylesheet(Juri::base() . 'components/com_realestate/css/prop-view.css');
$document = JFactory::getDocument();
 
// Add Javascript directly here
$document->addScriptDeclaration('
    $(document).ready(function(){
		$("a").click(function(){
			//alert("An inline JavaScript Declaration");
		});
    });
');
?>
<div><h1>Send Email</h1></div>