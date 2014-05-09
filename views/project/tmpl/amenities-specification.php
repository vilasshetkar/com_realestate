<?php
// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.modal');
$document = JFactory::getDocument();

	//Set Browser Title
	$this->document->setTitle("Amenities Specifications : ".$this->property['browsertitle']);
	
	//Set Browser Meta Description
	$this->document->setDescription($this->property['metadesc']);
	
	//Set Browser Meta Keywords
	$this->document->setMetadata('keywords', $this->property['metakey']);


?>

<div class="row-fluid">
      <div class="span12">
           <h2>Amenities and Specifications:</h2>
       <hr />
      <h3>Amenities <?php echo $this->property["title"]; ?></h3>
      <?php echo $this->property['amenities']?>

       <hr />

      <h3>Specifications</h3>
      <hr />
      <?php echo $this->property['specifications']?>
</div>
</div>
