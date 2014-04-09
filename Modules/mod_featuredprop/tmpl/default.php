<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>


		 <?php foreach($hello as $i => $item): ?>


<?php 
$link = JRoute::_( "index.php?option=com_realestate&view=Default&layout=SingleProperty&id=".$item['id'] ); 
$ViewAll = JRoute::_( "index.php?option=com_realestate&view=Default"); 
$email = JRoute::_( "index.php?option=com_realestate&view=Default&layout=Email&id=".$item['id']  );
$refer = JRoute::_( "index.php?option=com_realestate&view=Default&layout=ReferFriend&id=".$item['id']  );
?>

<div class="row-fluid featured-property">
        <div class="span12">
        <h4> <a href="<?php echo $link ; ?>"><?php echo $item['title'];?></a></h4>
        <div class="row-fluid">
        	<div class="span3">
            		<?php if($item['prop_image']){ ?>
        <img src="<?php echo $item['prop_image'];?>" alt="<?php echo $item['title'];?>" style="max-width:93%" />
        <?php }else { ?>
        <img class="img-polaroid" src="http://manage.goldenlandmarks.net/propertyImages/no-image.jpg" alt="<?php echo $item['title'];?>" style="max-width:93%" />
        <?php };?>

        
        	</div>
        	<div class="span9">
            
                <div class="row-fluid">
                    <div class="span12">
                    	<div class="row-fluid">
                        	<div class="span3">
                            Property Type
                            </div>
                        	<div class="span9">
                            <?php echo $item['type'];?> &rArr;<strong> For <?php echo $item['property_for']?></strong>
                            </div>
                        </div>
                    	<div class="row-fluid">
                        	<div class="span3">
                            Built Up
                            </div>
                        	<div class="span9">
                           <?php echo $item['buildup_area'].' '.$item->greeting['build_unit'];?>, <?php echo $item['bedrooms'];?> Bedroom(s), <?php echo $item['bathrooms'];?> Bathroom(s)
                            </div>
                        </div>
                    	<div class="row-fluid">
                        	<div class="span3">
                            Location
                            </div>
                        	<div class="span9">
                            <?php echo $item['address'];?>
                            </div>
                        </div>
                    	<div class="row-fluid">
                        	<div class="span3">
                            Price
                            </div>
                        	<div class="span9">
                            <?php if($item->greeting['price']==0){echo "Call for Price!";}else {echo $item['price'];}?>
                            </div>
                        </div>
                    	<div class="row-fluid">
                            <div class="span12">
                              <div class="btn-group">
                                <a class="btn btn-info modal" href="<?php echo $link; ?>" rel="{size: {x: 700, y: 480}}" >More Detail</a>
                                <a class="btn btn-info modal" href="<?php echo $email; ?>" rel="{size: {x: 550, y: 480}}">Send Enquiry</a>
                                 <a class="btn btn-info modal" href="<?php echo $refer; ?>" rel="{size: {x: 400, y: 380}}">Contact</a>
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
<div class="row-fluid">
<div class="span12 ViewAll">
<a class="btn btn-info" href="<?php echo $ViewAll ; ?>" title="Click Here to View All Properties">View All Properties</a>
</div>
</div>