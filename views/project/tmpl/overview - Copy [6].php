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
           <h3>Overview:</h3>
</div>
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

<hr>
