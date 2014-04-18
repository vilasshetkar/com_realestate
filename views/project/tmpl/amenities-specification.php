<?php
// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.modal');
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

<div class="row-fluid">
           <h2>Amenities and Specifications:</h2>
</div>
<div class="row-fluid">
      <div class="span12">
      <h3>Amenities</h3>
       <hr />
      <?php echo $this->property['amenities']?>
      </div>
</div>
       <hr />
<div class="row-fluid">
      <div class="span12">
      <h3>Specifications</h3>
      <hr />
      <?php echo $this->property['specifications']?>
      </div>
</div>
