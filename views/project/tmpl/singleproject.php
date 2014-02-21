<?php
// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.tooltip');
JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.bxSlider.min.js');
JHtml::stylesheet(Juri::base() . 'components/com_realestate/css/prop-view.css');
JHtml::stylesheet(Juri::base() . 'components/com_realestate/css/style.css');
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
  	<div class="project-detail">
    

<?php foreach($this->property as $i => $row): ?>
<?php 
$id = ($row['id'])-1;
$link = JRoute::_( "index.php?view=prop&id=".$id ); ?>
<h2> <?php echo $row['title']?></h2>
<ul class="nav nav-tabs">
  <li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
  <li><a href="#amenities" data-toggle="tab">Amenities</a></li>
  <li><a href="#specifications" data-toggle="tab">Specifications</a></li>
  <li><a href="#location-map" data-toggle="tab">Location Map</a></li>
  <li><a href="#layout-map" data-toggle="tab">Layout Map</a></li>
  <li><a href="#floor-plans" data-toggle="tab">Floor Plans</a></li>
  <li><a href="#availability" data-toggle="tab">Availability</a></li>
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="overview">

      <div class="slider pull-left">
        <a class="fancybox" rel="gall1" href="<?php echo $row['proj_img']?>"><img src="<?php echo $row['proj_img']?>" /></a>
      </div>
      <div class="pull-right">
      <table width="100%" cellpadding="5"  cellspacing="0" class="border">
	            <tbody>
	              <tr valign="top">
	                <td width="37%" align="left" valign="top">Project Type</td>
	                <td width="3%" align="left" valign="top"><strong>:</strong></td>
	                <td width="58%" align="left" valign="top"><?php echo $row['type']?></td>
                  </tr>
	              <tr valign="top">
	                <td align="left" valign="top">Location</td>
	                <td align="left" valign="top"><strong>:</strong></td>
	                <td align="left" valign="top"><?php echo $row['location']?></td>
                  </tr>
                </tbody>
              </table>
       </div>
       <div class="clearfix"></div>
       <div>
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
           <span class="detail"><?php echo $row['location_map']?></span>
       </div>
  </div>
  <div class="tab-pane" id="layout-map">
       <div>
           <h3>Layout Map:</h3>
           <span class="detail"><?php echo $row['layout_map']?></span>
       </div>
  </div>
  <div class="tab-pane" id="floor-plans">
       <div>
           <h3>Floor Plans:</h3>
           <span class="detail"><?php echo $row['floor_plans']?></span>
       </div>
  </div>
  <div class="tab-pane" id="availability">
       <div>
           <h3>Availability:</h3>
           <span class="detail"><?php echo $row['availability']?></span>
       </div>
  </div>
</div>
	
<?php endforeach; ?>
     </div>
