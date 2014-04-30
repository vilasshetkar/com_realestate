<?php
// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.modal');
$document = JFactory::getDocument();
 
?>

<div class="row-fluid">
           <h2>Amenities and Specifications:</h2>
       <hr />
</div>
<div class="row-fluid">
<div class="span4">
  <ul class="nav menu proj_nav">
      <li class="item-134"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=overview&amp;id=<?php echo $this->property["id"]; ?>&amp;project=<?php echo $this->property["title"]; ?>">Overview</a></li>
      <li class="item-136"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=area-statement&amp;id=<?php echo $this->property["id"]; ?>&amp;project=<?php echo $this->property["title"]; ?>">Area Statement</a></li>
      <li class="item-137"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=floor-plan&amp;id=<?php echo $this->property["id"]; ?>&amp;project=<?php echo $this->property["title"]; ?>">Floor Plan</a></li>
      <li class="item-135"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=amenities-specification&amp;id=<?php echo $this->property["id"]; ?>&amp;project=<?php echo $this->property["title"]; ?>">Amenities Specification</a></li>
      <li class="item-138"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=location-layout&amp;id=<?php echo $this->property["id"]; ?>&amp;project=<?php echo $this->property["title"]; ?>">Layout &amp; Location Map</a></li>
      <li class="item-139"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=walk-through&amp;id=<?php echo $this->property["id"]; ?>&amp;project=<?php echo $this->property["title"]; ?>">Walk Through</a></li>
    </ul>
</div>
<div class="span8">
<div class="row-fluid">
      <div class="span12">
      <h3>Amenities <?php echo $this->property["title"]; ?></h3>
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