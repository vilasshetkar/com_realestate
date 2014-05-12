<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

 		$app	= JFactory::getApplication();
		$menus	= $app->getMenu();
		$menu	= $menus->getActive();
		$menuid	= "&Itemid=".$menu->id;

JFactory::getDocument()->addStyleSheet(JUri::base() . 'modules/mod_webenquiry/css/style.css');
JFactory::getDocument()->addScript(JUri::base() . 'modules/mod_webenquiry/js/jquery.js');
JFactory::getDocument()->addScript(JUri::base() . 'modules/mod_webenquiry/js/validator.min.js');

?>
<script type="text/javascript">
$(document).ready(function(e) {
    var number1 = 1 + Math.floor(Math.random() * 6);
    var number2 = 1 + Math.floor(Math.random() * 6);
	var ans = number1 + number2;
	$("#num1").val(number1);
	$("#num2").val(number2);
	$("#ans").val(ans);
});
</script>

<?php if($enquiry == false){ ?>

<div class="row-fluid">
<h2>Send Your Enquiry</h2>
<hr />
<form action="" method="post" enctype="multipart/form-data" name="webenquiry" data-toggle="validator" role="form" class="form-horizontal" >


    <div class="form-group control-group">
      <label class="control-label" for="first_name">First Name: </label>
      <div class="controls"> 
        <input type="text" name="first_name" id="first_name" data-error="This field is required" required />
    	<span class="help-block with-errors"></span>
        </div>
    </div>
    
    <div class="form-group control-group">
    <label class="control-label" for="last_name">Last Name: </label>
    <div class="controls">
      <input type="text" name="last_name" id="last_name"  data-error="This field is required" required />
    	<span class="help-block with-errors"></span>
      </div>
    </div>
    
    <div class="form-group control-group">
    <label class="control-label" for="email">Email: </label>
    <div class="controls">
      <input type="email" name="email" id="email"  data-error="Invalid Email" required />
    	<span class="help-block with-errors"></span>
      </div>
    </div>
      
    <div class="form-group control-group">
      <label class="control-label" for="phone">Mobile: </label>
      <div class="controls">
        <input type="text" name="phone" id="phone" pattern="^([0-9]){8,}$" maxlength="10" data-error="Invalid Mobile" required />
    	<span class="help-block with-errors"></span>
        </div>
    </div>
    
    <div class="form-group control-group">
      <label class="control-label" for="company">Company Name: </label>
      <div class="controls">
        <input type="text" name="company" id="company"  />
      </div>
    </div>
    
    <div class="form-group control-group">
      <label class="control-label" for="address">Address: </label>
      <div class="controls">
        <input type="text" name="address" id="address"  data-error="This field is required" required />
    	<span class="help-block with-errors"></span>
        </div>
    </div>
    
    <div class="form-group control-group">
      <label class="control-label" for="message">Messate: </label>
      <div class="controls">
        <textarea name="message" id="message" cols="45" rows="3" maxlength="200" data-minlength="20" required ></textarea>
    	<span class="help-block with-errors"></span>
        </div>
    </div>
    
    <div class="form-group control-group">
      <label class="control-label" for="phone">Add these: </label>
      <div class="controls">
        <input class="input-mini" type="text" name="num1" id="num1" value="" disabled="disabled"/> + 
        <input class="input-mini" type="text" name="num2" id="num2" value="" disabled="disabled"/>
        <input type="hidden" name="ans" id="ans" value="" /> = 
        <input class="input-mini" type="text" name="finalans" id="finalans" pattern="^([0-9])" maxlength="10" data-error="Invalid Answer" data-match="#ans" required />
    	<span class="help-block with-errors"></span>
        </div>
    </div>

    <div class="form-group control-group">
      <div class="controls">
		<button type="submit" class="btn btn-primary">Submit</button>
		<button type="reset" class="btn btn-danger">Cancel</button>
      </div>
    </div>

</form>
</div>
<?php } ?>

