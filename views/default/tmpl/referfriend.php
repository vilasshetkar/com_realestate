<?php
// no direct access
defined('_JEXEC') or die;
JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.min.js');
JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.bxSlider.min.js');
JHtml::script(Juri::base() . 'components/com_realestate/js/Spray/SpryValidationTextField.js');
JHtml::script(Juri::base() . 'components/com_realestate/js/Spray/SpryValidationTextarea.js');
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

    <h1>Refer Your Friend: </h1>
  <form action="" method="post" name="form1" class="form-horizontal" id="form1">
    <div class="control-group">
      <label class="control-label" for="inputEmail">First Name: </label>
      <div class="controls"> <span id="sprytextfield1">
        <input type="text" name="first_name" id="first_name" />
        <span class="textfieldRequiredMsg">A value is require</span></span> </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputEmail">Last Name: </label>
    <div class="controls"> <span id="sprytextfield2">
      <input type="text" name="last_name" id="last_name" />
      <span class="textfieldRequiredMsg">A value is required.</span></span> </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputEmail">Email: </label>
    <div class="controls"> <span id="sprytextfield3">
      <input type="text" name="email" id="email" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Please provide a valid email id.</span></span> </div>
      </div>
    <div class="control-group">
      <label class="control-label" for="inputEmail">Mobile: </label>
      <div class="controls"> <span id="sprytextfield4">
        <input type="text" name="phone" id="phone" />
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Please provide 10 digit mobile no.</span></span> </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="inputEmail">Company Name: </label>
      <div class="controls"> <span id="sprytextfield6">
        <input type="text" name="company" id="company" />
        </span> </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="inputEmail">Address: </label>
      <div class="controls"> <span id="sprytextfield5">
        <input type="text" name="address" id="address" />
        <span class="textfieldRequiredMsg">A value is required.</span></span> </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="inputEmail">Messate: </label>
      <div class="controls"> <span id="sprytextarea1">
        <textarea name="message" id="message" cols="45" rows="3"></textarea>
        Characters left <span id="countsprytextarea1"></span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span> </div>
    </div>
    <div class="controls">
      <input name="respo_for" type="hidden" id="respo_for" value="<?php echo $row['title']?>" />
      <input name="prop_id" type="hidden" id="prop_id" value="<?php echo $row['id']?>" />
      <input type="submit" name="submit" id="submit" value="Send Enquiry" />
    </div>
  </form>
<?php } ?>
<?php endforeach; ?>
