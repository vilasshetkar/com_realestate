<?php

// no direct access
defined('_JEXEC') or die;
JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.bxSlider.min.js');
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
 
<form action="<?php echo JRoute::_('index.php?option=com_realestate'); ?>" method="post">

<?php foreach($this->category as $i => $item):
$propCategory = JRoute::_( "index.php?view=Default&layout=default&category=".$item['category'] ); 

?>
<a class="btn btn-primary" href="<?php echo $propCategory ?>" title=""><?php echo $item['category']; ?></a><div class="divider-vertical pull-left"></div>
<?php endforeach; ?>


<?php foreach($this->items as $i => $item): ?>
<tr class="row<?php echo $i % 2; ?>">
<td>
<?php 
$link = JRoute::_( "index.php?view=Default&layout=SingleProperty&id=".$item->greeting['id'] ); 
$email = JRoute::_( "index.php?view=Default&layout=Email&id=".$item->greeting['id']  );
$refer = JRoute::_( "index.php?view=Default&layout=ReferFriend&id=".$item->greeting['id']  );
?>


<div class="row-fluid">
        <div class="span12">
        <h4> <a href="<?php echo $link ; ?>"><?php echo $item->greeting['title'];?></a></h4>
        <div class="row-fluid">
        	<div class="span3">
        	<img src="<?php echo $item->greeting['prop_image'];?>" />
        
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
                                <a class="btn btn-info" href="<?php echo $link; ?>">More Detail</a>
                                <a class="btn btn-info" href="<?php echo $email; ?>">Send Email</a>
                                 <a class="btn btn-info" href="<?php echo $refer; ?>">Refer Friend</a>
                              </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

<?php endforeach; ?>
<?php echo $this->pagination->getListFooter(); ?>

</form>

