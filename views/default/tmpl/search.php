<?php

// no direct access
defined('_JEXEC') or die;

$document = JFactory::getDocument();
 
?>
 
 
<h2>Search Result</h2>


<?php foreach($this->items as $i => $item): ?>
<?php 
$link = JRoute::_( "index.php?view=Default&layout=SingleProperty&id=".$item->greeting['id'] ); 
$linkModal = JRoute::_( "index.php?view=Default&layout=SingleProperty&id=".$item->greeting['id']); 
$email = JRoute::_( "index.php?view=Default&layout=Email&id=".$item->greeting['id']."&propTitle=".$item->greeting['title'] );
$refer = JRoute::_( "index.php?view=Default&layout=prop-contact&id=".$item->greeting['id']  );
?>


<div class="row-fluid featured-property">
        <div class="span12">
        <h4> <a href="<?php echo $link ; ?>"><?php echo $item->greeting['title'];?></a></h4>
        <div class="row-fluid">
        	<div class="span3">
            <?php if($item->greeting['prop_image']!="") { ?>
        	<img class="img-polaroid img-responsive" src="<?php echo $item->greeting['prop_image'];?>" alt="<?php echo $item->greeting['title'];?>" style="max-width:93%" />
                    <?php }else{ ?>
        <img style="max-width:90%" class="img-polaroid" src="http://manage.goldenlandmarks.net/propertyImages/no-image.jpg" />
        <?php } ?>

        
        	</div>
        	<div class="span9">
            
                <div class="row-fluid">
                    <div class="span12">
                    	<div class="row-fluid">
                        	<div class="span3">
                            Property Type
                            </div>
                        	<div class="span9">
                            <?php echo $item->greeting['type'];?> &rArr;<strong> For <?php echo $item->greeting['property_for']?></strong>
                            </div>
                        </div>
                    	<div class="row-fluid">
                        	<div class="span3">
                            Built Up
                            </div>
                        	<div class="span9">
                           <?php echo $item->greeting['buildup_area'].' '.$item->greeting['build_unit'];?>, <?php echo $item->greeting['bedrooms'];?> Bedroom(s), <?php echo $item->greeting['bathrooms'];?> Bathroom(s)
                            </div>
                        </div>
                    	<div class="row-fluid">
                        	<div class="span3">
                            Location
                            </div>
                        	<div class="span9">
                            <?php echo $item->greeting['address'];?>
                            </div>
                        </div>
                    	<div class="row-fluid">
                        	<div class="span3">
                            Price
                            </div>
                        	<div class="span9">
                            <?php if($item->greeting['price']==0){echo "Call for Price!";}else {echo $item->greeting['price'];}?>
                            </div>
                        </div>
                    	<div class="row-fluid">
                            <div class="span12">
                              <div class="btn-group">
                                <a class="btn btn-info" href="<?php echo $link; ?>" rel="{size: {x: 700, y: 480}}" >More Detail</a>
                                <a class="btn btn-info" href="<?php echo $email; ?>" rel="{size: {x: 550, y: 480}}">Send Enquiry</a>
                                 <a class="btn btn-info" href="<?php echo $refer; ?>" rel="{size: {x: 400, y: 380}}">Contact</a>
                              </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <hr>

<?php endforeach; ?>
<div class="pagination">
<?php echo $this->pagination->getListFooter(); ?>
</div>


