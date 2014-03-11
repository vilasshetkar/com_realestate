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
/*if (isset($_POST['submit'])=='Submit'){
$subject='Website Enquiry';

$to = 'vilasshetkar@gmail.com' ;//$_SESSION['email'] ;
$from = $_POST['email'] ;
$msg_subject = $subject ;
$message =  "This is system generated mail: \r\n
			From : $_POST[email] \r\n
			Full Name : $_POST[first_name]"." "."$_POST[last_name] \r\n
			Company : $_POST[company] \r\n
			Phone : $_POST[phone] \r\n \r\n \r\n
			Message : \r\n
			$_POST[message]" ;
$headers = 'From: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
$send_mail = mail($to,$msg_subject,$message,$headers);
$thank="<form><h1 align='center'>Thank you! We will contact you soon!</h1></form>";
echo $thank;
		}*/
?>
<?php foreach($this->property as $i => $row): ?>

<?php if (!isset($thank)){ ?>

    
  <form action="" method="post" name="form1" role="form" class="form-horizontal" id="form1">
 <fieldset>
    <legend>Enquiry Form </legend>
    <table>
      <tr>
        <td><div class="form-group">
          <label for="first_name" class="col-sm-2 control-label">First Name</label></td>
          </div>
        <td><div class="col-sm-10">
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
          </div></td>
      </tr>
      <tr>
        <td><div class="form-group">
            <label for="last_name" class="col-sm-2 control-label">Last Name</label>
          </div></td>
        <td><div class="col-sm-10">
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
          </div></td>
      </tr>
      <tr>
        <td><div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
          </div></td>
        <td><div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
          </div></td>
      </tr>
      <tr>
        <td><div class="form-group">
            <label for="phone" class="col-sm-2 control-label">Mobile</label>
          </div></td>
        <td><div class="col-sm-10">
            <input type="number" class="form-control" id="phone" name="phone" placeholder="Mobile">
          </div></td>
      </tr>
      <tr>
        <td><div class="form-group">
            <label for="company" class="col-sm-2 control-label">Company Name</label>
          </div></td>
        <td><div class="col-sm-10">
            <input type="text" class="form-control" id="company" name="company" placeholder="Company Name">
          </div></td>
      </tr>
      <tr>
        <td><div class="form-group">
            <label for="address" class="col-sm-2 control-label">Address</label>
          </div></td>
        <td><div class="col-sm-10">
            <input type="text" class="form-control" id="address" name="address" placeholder="Address">
          </div></td>
      </tr>
      <tr>
        <td><label for="message" class="col-sm-2 control-label">Message</label></td>
        <td><textarea class="form-control" rows="3" id="message" name="message"></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td><div class="form-signin">
            <div class="col-sm-offset-2 col-sm-10">
              <button class="btn btn-large btn-primary" name="submit" id="submit" value="Send Enquiry" type="submit">Send Enquiry</button>
            </div>
          </div></td>
      </tr>
    </table>
  </fieldset>
      <input name="respo_for" type="hidden" id="respo_for" value="<?php echo $row['title']?>" />
      <input name="prop_id" type="hidden" id="prop_id" value="<?php echo $row['id']?>" />
     
 
  </form>
<?php } ?>
<?php endforeach; ?>
