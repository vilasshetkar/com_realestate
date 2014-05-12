<?php
// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.modal');
$document = JFactory::getDocument();

	//Set Browser Title
	$this->document->setTitle("Floor Plan : ".$this->property['browsertitle_floorplan']);
	
	//Set Browser Meta Description
	$this->document->setDescription($this->property['metadesc']);
	
	//Set Browser Meta Keywords
	$this->document->setMetadata('keywords', $this->property['metakey']);


?>

<div class="row-fluid">
           <h2>Floor Plan:</h2>
</div>
<div class="row-fluid">
      <div class="span12">
      <?php if($this->property['floor_plans']!=""){ ?>
        <?php echo $this->property['floor_plans']?>
        <?php }else{ ?>
        <img style="max-width:90%" class="img-polaroid" src="http://manage.goldenlandmarks.net/propertyImages/no-image.jpg" />
        <?php } ?>
      </div>
</div>
       <hr />
