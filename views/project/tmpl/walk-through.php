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
           <h2>Walk Through:</h2>
</div>
<div class="row-fluid">
      <div class="span12">
      <?php echo $this->property['title']?>
      </div>
</div>
       <hr />
