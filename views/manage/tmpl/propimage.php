<?php
// no direct access
defined('_JEXEC') or die;
JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.min.js');
JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.bxSlider.min.js');
JHtml::script(Juri::base() . 'components/com_realestate/js/Spray/SpryValidationTextField.js');
JHtml::script(Juri::base() . 'components/com_realestate/js/Spray/SpryValidationTextarea.js');
JHtml::stylesheet(Juri::base() . 'components/com_realestate/css/prop-view.css');
JHtml::stylesheet(Juri::base() . 'components/com_realestate/js/Spray/SpryValidationTextField.css');
JHtml::stylesheet(Juri::base() . 'components/com_realestate/js/Spray/SpryValidationTextarea.css');
$document = JFactory::getDocument();


?>
<?php 
// Add Javascript directly here
$document->addScriptDeclaration('
$(document).ready(function(){
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email", {validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "phone_number", {format:"phone_custom", pattern:"0000000000", validateOn:["blur"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["blur"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {isRequired:false, maxChars:200, counterType:"chars_remaining", counterId:"countsprytextarea1"});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {isRequired:false});

});
');
?>

<?php foreach($this->property as $i => $row): ?>

<?php if (!isset($thank)){ ?>

 <div class="row-fluid">
    <div class="span2">
      <label for="upload_img">Upload Image</label>
      <input id="upload_img"   type="file"  />
      <img src="img/Pune Hinjewadi Commercial Office space for sale - lease in Hinjewadi IT Park.jpg" alt="no img" height="200" width="200"> 
      </div>
    
      
        <div class="span2">
          <label for="prop_details">Property Details</label></div>
          <div class="span2">
          <textarea rows="3">Enter msg</textarea></div>
        
      
    <div class="span2">
          <label for="order_no">Order No.</label></div>
          <div class="span2">
          <input type="text" id="order_no"  /></div>
        <div class="span2">
          <button type="button" class="btn-info">Change</button></div>
          <div class="span2">
           <button type="button" class="btn-info">Delete</button></div>
    
        </div>

<?php } ?>
<?php endforeach; ?>