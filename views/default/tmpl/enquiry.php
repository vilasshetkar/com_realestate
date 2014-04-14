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



    
  <form action="" method="post" name="form1" role="form" class="form-horizontal" id="form1">
 <legend id="basicinfo">Send Enquiry Form</legend>
  <div class="control-group">
    <label for="first_name" class="control-label">First Name</label>
    <div class="controls">
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
    </div>
  </div>
  
  <div class="control-group">
  <label for="last_name" class="col-sm-2 control-label">Last Name</label>
  <div class="controls">
    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
  </div></div>
  
  <div class="control-group">
  <label for="email" class="col-sm-2 control-label">Email</label>
  <div class="controls">
    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
  </div></div>
  
  <div class="control-group">
  <label for="phone" class="col-sm-2 control-label">Mobile</label>
  <div class="controls">
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Mobile">
  </div></div>
  
  <div class="control-group">
  <label for="company" class="col-sm-2 control-label">Company Name</label>
  <div class="controls">
    <input type="text" class="form-control" id="company" name="company" placeholder="Company Name">
  </div></div>
  
  <div class="control-group">
  <label for="address" class="col-sm-2 control-label">Address</label>
  <div class="controls">
    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
  </div></div>
  
  <div class="control-group">
  <label for="message" class="col-sm-2 control-label">Message</label>
  <div class="controls">
  <textarea class="form-control" rows="3" id="message" placeholder="I am interested in your property. Please get in contact with me." name="message"></textarea>
  </div></div>
  
    <div class="controls">
      <button class="btn btn-large btn-primary" name="submit" id="submit" value="Send Enquiry" type="submit">Send Enquiry</button>
    </div>
  
      <input name="respo_for" type="hidden" id="respo_for" value="<?php echo $row['title']?>" />
      <input name="prop_id" type="hidden" id="prop_id" value="<?php echo $row['id']?>" />
     
 
  </form>

