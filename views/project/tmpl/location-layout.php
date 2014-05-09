<?php
// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.modal');
$document = JFactory::getDocument();

	//Set Browser Title
	$this->document->setTitle("Location and Layout Map : ".$this->property['browsertitle']);
	
	//Set Browser Meta Description
	$this->document->setDescription($this->property['metadesc']);
	
	//Set Browser Meta Keywords
	$this->document->setMetadata('keywords', $this->property['metakey']);
?>

<div class="row-fluid">
           <h2>Location and Layout Map:</h2>
           <h3>Location Map</h3>
       <hr />
</div>
<div class="row-fluid">
      <div class="span12">
      <?php if($this->property['location_map']!=""){ ?>
        <?php echo $this->property['location_map']?>
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
		<?php echo $this->property['layout_map']?>
        <?php }else{ ?>
        <img style="max-width:90%" class="img-polaroid" src="http://manage.goldenlandmarks.net/propertyImages/no-image.jpg" />
        <?php } ?>
      </div>
      
</div>
