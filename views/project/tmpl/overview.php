<?php
// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.modal');
$document = JFactory::getDocument();

	//Set Browser Title
	$this->document->setTitle("Overview : ".$this->property['browsertitle']);
	
	//Set Browser Meta Description
	$this->document->setDescription($this->property['metadesc']);
	
	//Set Browser Meta Keywords
	$this->document->setMetadata('keywords', $this->property['metakey']);


?>
<div class="row-fluid">
           <h2>Overview:</h2>
<hr>
</div>
<div class="row-fluid">

<div class="row-fluid">
      <div class="span3">
      <?php if($this->property['proj_img']!=""){ ?>
        <a class="modal" href="<?php echo $this->property['proj_img']?>"><img style="max-width:90%" class="img-polaroid" src="<?php echo $this->property['proj_img']?>" /></a>
        <?php }else{ ?>
        <img style="max-width:90%" class="img-polaroid" src="http://manage.goldenlandmarks.net/propertyImages/no-image.jpg" />
        <?php } ?>
      </div>
      <div class="span9">
      <table class="table table-hover">
	            <tbody>
	              <tr>
	                <td class="span4">Project Type</td>
	                <td class="span1"><strong>:</strong></td>
	                <td class="span7"><?php echo $this->property['type']?></td>
                  </tr>
	              <tr>
	                <td>Location</td>
	                <td><strong>:</strong></td>
	                <td><?php echo $this->property['location']?></td>
                  </tr>
                </tbody>
              </table>
       </div>
</div>
       <hr />
       <div class="row-fluid">
           <h3>Description:</h3>
           <div class="detail"><?php echo $this->property['overview']?></div>
       </div>
</div>

<hr>
