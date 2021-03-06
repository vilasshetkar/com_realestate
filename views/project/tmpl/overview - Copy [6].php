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
<div class="span4">
  <ul class="nav menu proj_nav">
      <li class="item-134"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=overview&amp;id=<?php echo $hello["id"]; ?>&amp;project=<?php echo $hello["title"]; ?>">Overview</a></li>
      <li class="item-136"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=area-statement&amp;id=<?php echo $hello["id"]; ?>&amp;project=<?php echo $hello["title"]; ?>">Area Statement</a></li>
      <li class="item-137"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=floor-plan&amp;id=<?php echo $hello["id"]; ?>&amp;project=<?php echo $hello["title"]; ?>">Floor Plan</a></li>
      <li class="item-135"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=amenities-specification&amp;id=<?php echo $hello["id"]; ?>&amp;project=<?php echo $hello["title"]; ?>">Amenities Specification</a></li>
      <li class="item-138"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=location-layout&amp;id=<?php echo $hello["id"]; ?>&amp;project=<?php echo $hello["title"]; ?>">Layout &amp; Location Map</a></li>
      <li class="item-139"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=walk-through&amp;id=<?php echo $hello["id"]; ?>&amp;project=<?php echo $hello["title"]; ?>">Walk Through</a></li>
    </ul>
</div>
<div class="span8">
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
</div>

<hr>
