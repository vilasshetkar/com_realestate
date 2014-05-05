<?php
// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.modal');
$document = JFactory::getDocument();
 
?>
  	<div class="project-detail">
    

<?php foreach($this->property as $i => $row): ?>
<?php 
$id = ($row['id'])-1;
$email = JRoute::_( "index.php?view=default&layout=email&id=".$row['id']."&projTitle=".$row['title']);
?>

<h2> <?php echo $row['title']?></h2>


<ul class="nav nav-tabs">
<?php if($row['overview']!= ""):?>
  <li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
<?php endif ?>
<?php if($row['amenities']!= ""):?>
  <li><a href="#amenities" data-toggle="tab">Amenities</a></li>
<?php endif ?>
<?php if($row['specifications']!= ""):?>
  <li><a href="#specifications" data-toggle="tab">Specifications</a></li>
<?php endif ?>
<?php if($row['location_map']!= ""):?>
  <li><a href="#location-map" data-toggle="tab">Location Map</a></li>
<?php endif ?>
<?php if($row['layout_map']!= ""):?>
  <li><a href="#layout-map" data-toggle="tab">Layout Map</a></li>
<?php endif ?>
<?php if($row['floor_plans']!= ""):?>
  <li><a href="#floor-plans" data-toggle="tab">Floor Plans</a></li>
<?php endif ?>
<?php if($row['availability']!= ""):?>
  <li><a href="#availability" data-toggle="tab">Availability</a></li>
<?php endif ?>
<?php if($row['contact']!= ""):?>
  <li><a href="#contact" data-toggle="tab">Contact</a></li>
<?php endif ?>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="overview">
<div class="row-fluid">
      <div class="span3">
      <?php if($row['proj_img']!=""){ ?>
        <a class="modal" href="<?php echo $row['proj_img']?>"><img style="max-width:90%" class="img-polaroid" src="<?php echo $row['proj_img']?>" /></a>
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
	                <td class="span7"><?php echo $row['type']?></td>
                  </tr>
	              <tr>
	                <td>Location</td>
	                <td><strong>:</strong></td>
	                <td><?php echo $row['location']?></td>
                  </tr>
                </tbody>
              </table>
       </div>
</div>
       <div>
       <hr />
           <h3>Overview:</h3>
           <span class="detail"><?php echo $row['overview']?></span>
       </div>
  </div>
  
  
  <div class="tab-pane" id="amenities">
       <div>
           <h3>Amenities:</h3>
           <span class="detail"><?php echo $row['amenities']?></span>
       </div>
  </div>
  <div class="tab-pane" id="specifications">
       <div>
           <h3>Specifications:</h3>
           <span class="detail"><?php echo $row['specifications']?></span>
       </div>
  </div>
  <div class="tab-pane" id="location-map">
       <div>
           <h3>Location Map:</h3>
           <span class="detail">
		   <a class="modal" href="<?php echo $row['location_map']?>">
           	<img style="max-width:90%" class="img-polaroid" src="<?php echo $row['location_map']?>" />
           </a>
		   </span>
       </div>
  </div>
  <div class="tab-pane" id="layout-map">
       <div>
           <h3>Layout Map:</h3>
           <span class="detail">
		   <a class="modal" href="<?php echo $row['layout_map']?>">
           	<img style="max-width:90%" class="img-polaroid" src="<?php echo $row['layout_map']?>" />
           </a>
		   </span>
       </div>
  </div>
  <div class="tab-pane" id="floor-plans">
       <div>
           <h3>Floor Plans:</h3>
           <span class="detail">
		   <a class="modal" href="<?php echo $row['floor_plans']?>">
           	<img style="max-width:90%" class="img-polaroid" src="<?php echo $row['floor_plans']?>" />
           </a>
		   </span>
       </div>
  </div>
  <div class="tab-pane" id="availability">
       <div>
           <h3>Availability:</h3>
           <span class="detail"><?php echo $row['availability']?></span>
       </div>
  </div>
  <div class="tab-pane" id="contact">
       <div>
           <h3>Contact:</h3>
           <span class="detail"><?php echo $row['contact']?></span>
       </div>
  </div>
</div>
	
<?php endforeach; ?>

<div>
<a class="btn btn-primary" href="<?php echo $email ; ?>" title="Send Enquiry"><i class="icon-envelope"> </i> Send Enquiry</a></div>

<hr>
     </div>
