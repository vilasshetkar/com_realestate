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
<?php 
if (isset($_POST['submit'])=='Submit'){
$respo_for='web';
$subject='Website Enquiry';

$to = 'vilasshetkar@gmail.com' ;//$_SESSION['email'] ;
$from = 'website_url' ;
$msg_subject = $subject ;
$message =  'This is system generated mail: \r\n
			From : '.$_POST['email'].'\r\n
			Full Name : '.$_POST['first_name'].' '.$_POST['last_name'].' \r\n
			Company : $_POST[company] \r\n
			Phone : $_POST[phone] \r\n \r\n \r\n
			Message : \r\n
			$_POST[message]' ;
$headers = 'From: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
$send_mail = mail($to,$msg_subject,$message,$headers) or die();
$thank="<form><h1 align='center'>Thank you! We will contact you soon!</h1></form>";
echo $thank;
		}
?>
<?php if (!isset($thank)){ ?>
<div class="content">
  <form action="" method="post" name="form1" class="enquiry" id="form1">
    <h1>Send Enquiry:</h1>
    <table width="98%" border="0" align="center" cellpadding="0" cellspacing="5">
      <tr>
        <td><span id="sprytextfield1">
          First Name
          <input type="text" name="first_name" id="first_name" />
        <span class="textfieldRequiredMsg">A value is require</span></span></td>
      </tr>
      <tr>
        <td><span id="sprytextfield2">
          Last Name 
          <input type="text" name="last_name" id="last_name" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      <tr>
        <td><span id="sprytextfield3">
          Email ID
          <input type="text" name="email" id="email" />
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Please provide a valid email id.</span></span></td>
      </tr>
      <tr>
        <td><span id="sprytextfield4">
          Mobile No.
          <input type="text" name="phone" id="phone" />
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Please provide 10 digit mobile no.</span></span></td>
      </tr>
      <tr>
        <td>Company Name<span id="sprytextfield6">
          <input type="text" name="company" id="company" />
        </span></td>
      </tr>
      <tr>
        <td><span id="sprytextfield5">
          Address
          <input type="text" name="address" id="address" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      <tr>
        <td><span id="sprytextarea1">
          Message
          <textarea name="message" id="message" cols="45" rows="3"></textarea>
        Characters left <span id="countsprytextarea1"></span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
      </tr>
      <tr>
        <td valign="middle">
          <input name="respo_for" type="hidden" id="respo_for" value="<?php echo $respo_for; ?>" />
          <input name="subject" type="hidden" id="subject" value="<?php echo $subject; ?>" />
        <input type="submit" name="submit" id="submit" value="Send Enquiry" /></td>
      </tr>
    </table>
  </form>
</div>
<?php } ?>


