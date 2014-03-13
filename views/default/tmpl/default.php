<?php


// no direct access
defined('_JEXEC') or die;


JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.min.js');
JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.bxSlider.min.js');
JHtml::script(Juri::base() . 'components/com_realestate/js/Spray/SpryValidationTextField.js');
JHtml::script(Juri::base() . 'components/com_realestate/js/Spray/SpryValidationTextarea.js');
JHtml::stylesheet(Juri::base() . 'components/com_realestate/css/prop-view.css');
JHtml::stylesheet(Juri::base() . 'components/com_realestate/js/Spray/SpryValidationTextField.css');
JHtml::stylesheet(Juri::base() . 'components/com_realestate/js/Spray/SpryValidationTextarea.css');
$document = JFactory::getDocument();


JHTML::_('behavior.modal');
// Add Javascript directly here
$document->addScriptDeclaration('
    $(document).ready(function(){
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email", {validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "phone_number", {format:"phone_custom", pattern:"0000000000", validateOn:["blur"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["blur"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {isRequired:false, maxChars:200, counterType:"chars_remaining", counterId:"countsprytextarea1"});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {isRequired:false});

    });
');

?>
 
<?php
$prms = $this->params;
$catShow = $prms->get('propCategory');
	if($catShow == 1){
		foreach($this->category as $i => $item):
		$propCategory = JRoute::_( "index.php?view=Default&layout=default&category=".$item['category'] ); 
		
		?>
		<a class="btn btn-primary" href="<?php echo $propCategory ?>" title=""><?php echo $item['category']; ?></a><div class="divider-vertical pull-left"></div>
		<?php endforeach; ?>
	<?php } ?>


<?php foreach($this->items as $i => $item): ?>
<tr class="row<?php echo $i % 2; ?>">
<td>
<?php 
$link = JRoute::_( "index.php?view=Default&layout=SingleProperty&id=".$item->greeting['id']."&tmpl=component" ); 
$email = JRoute::_( "index.php?view=Default&layout=Email&id=".$item->greeting['id']."&propTitle=".$item->greeting['title']."&tmpl=component" );
$refer = JRoute::_( "index.php?view=Default&layout=prop-contact&id=".$item->greeting['id']."&tmpl=component"  );
?>


<div class="row-fluid featured-property">
        <div class="span12">
        <h4> <a href="<?php echo $link ; ?>"><?php echo $item->greeting['title'];?></a></h4>
        <div class="row-fluid">
        	<div class="span3">
        	<img class="img-polaroid img-responsive" src="<?php echo $item->greeting['prop_image'];?>" alt="<?php echo $item->greeting['title'];?>" style="max-width:93%" />
        
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
                                <a class="btn btn-info modal" href="<?php echo $link; ?>" rel="{size: {x: 700, y: 480}}" >More Detail</a>
                                <a class="btn btn-info modal" href="<?php echo $email; ?>" rel="{size: {x: 550, y: 480}}">Send Email</a>
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
<?php echo $this->pagination->getListFooter(); ?>


