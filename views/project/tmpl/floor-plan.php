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
           <h2>Floor Plan:</h2>
</div>
<div class="row-fluid">
      <div class="span12">
      <?php if($this->property['floor_plans']!=""){ ?>
        <a class="modal" href="<?php echo $this->property['floor_plans']?>"><img style="max-width:90%" class="img-polaroid" src="<?php echo $this->property['floor_plans']?>" /></a>
        <?php }else{ ?>
        <img style="max-width:90%" class="img-polaroid" src="http://manage.goldenlandmarks.net/propertyImages/no-image.jpg" />
        <?php } ?>
      </div>
</div>
       <hr />
