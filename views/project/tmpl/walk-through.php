<?php
// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.modal');
$document = JFactory::getDocument();
 
	//Set Browser Title
	$this->document->setTitle("Walk Through : ".$this->property['browsertitle']);
	
	//Set Browser Meta Description
	$this->document->setDescription($this->property['metadesc']);
	
	//Set Browser Meta Keywords
	$this->document->setMetadata('keywords', $this->property['metakey']);

?>

<div class="row-fluid">
           <h2>Walk Through:</h2>
</div>
<div class="row-fluid">
      <div class="span12">
      <?php echo $this->property['availability']?>
      </div>
</div>
       <hr />
