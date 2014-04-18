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
<div class="span3">
  <ul class="nav menu proj_nav">
      <li class="item-134"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=overview&amp;id=<?php echo $hello["id"]; ?>&amp;project=<?php echo $hello["title"]; ?>">Overview</a></li>
      <li class="item-136"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=area-statement&amp;id=<?php echo $hello["id"]; ?>&amp;project=<?php echo $hello["title"]; ?>">Area Statement</a></li>
      <li class="item-137"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=floor-plan&amp;id=<?php echo $hello["id"]; ?>&amp;project=<?php echo $hello["title"]; ?>">Floor Plan</a></li>
      <li class="item-135"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=amenities-specification&amp;id=<?php echo $hello["id"]; ?>&amp;project=<?php echo $hello["title"]; ?>">Amenities Specification</a></li>
      <li class="item-138"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=location-layout&amp;id=<?php echo $hello["id"]; ?>&amp;project=<?php echo $hello["title"]; ?>">Layout &amp; Location Map</a></li>
      <li class="item-139"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=walk-through&amp;id=<?php echo $hello["id"]; ?>&amp;project=<?php echo $hello["title"]; ?>">Walk Through</a></li>
    </ul>
</div>
<div class="span9">
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
</div>
</div>