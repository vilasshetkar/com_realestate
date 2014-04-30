<?php
// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.modal');
$document = JFactory::getDocument();
 
?>

<div class="row-fluid">
           <h2>Location and Layout Map:</h2>
           <h3>Location Map</h3>
       <hr />
</div>
<div class="row-fluid">
      <div class="span12">
      <?php if($this->property['location_map']!=""){ ?>
        <a class="modal" href="<?php echo $this->property['location_map']?>"><img style="max-width:90%" class="img-polaroid" src="<?php echo $this->property['location_map']?>" /></a>
        <?php }else{ ?>
        <img style="max-width:90%" class="img-polaroid" src="http://manage.goldenlandmarks.net/propertyImages/no-image.jpg" />
        <?php } ?>
      </div>
      
</div>
       <hr />
<div class="row-fluid">
           <h3>Layout Map</h3>
       <hr />
</div>
<div class="row-fluid">
      <div class="span12">
      <?php if($this->property['layout_map']!=""){ ?>
        <a class="modal" href="<?php echo $this->property['layout_map']?>"><img style="max-width:90%" class="img-polaroid" src="<?php echo $this->property['layout_map']?>" /></a>
        <?php }else{ ?>
        <img style="max-width:90%" class="img-polaroid" src="http://manage.goldenlandmarks.net/propertyImages/no-image.jpg" />
        <?php } ?>
      </div>
      
</div>
