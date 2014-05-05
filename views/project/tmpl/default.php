<?php
/**
* Author:	Omar Muhammad
* Email:	admin@omar84.com
* Website:	http://omar84.com
* Component:Blank Component
* Version:	3.0.0
* Date:		03/11/2012
* copyright	Copyright (C) 2012 http://omar84.com. All Rights Reserved.
* @license	http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
**/
// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.tooltip');
JHtml::_('behavior.modal');

$document = JFactory::getDocument();
 
?>


<div class="row-fluid featured_project">

		 <?php foreach($this->items as $i => $item): ?>
<?php 
$linkModal = JRoute::_( "index.php?view=project&layout=singleproject&id=".$item->greeting['id']); 
$link = JRoute::_( "index.php?view=project&layout=singleproject&id=".$item->greeting['id']); 
$email = JRoute::_( "index.php?view=Default&layout=email&id=".$item->greeting['id']."&projTitle=".$item->greeting['title']);
$refer = JRoute::_( "index.php?view=Default&layout=prop-contact&id=".$item->greeting['id']  );
$ViewAll = JRoute::_( "index.php?option=com_realestate&view=project"); 
?>

<div class="well span4 pull-left ">
<h3 class="page-header">
	<a href="<?php echo $link ; ?>" rel="{size: {x: 700, y: 480}}">
		<?php echo $item->greeting['title'];?>
	</a>
</h3>
      <?php if($item->greeting['proj_img']!=""){ ?>
	<a href="<?php echo $linkModal ; ?>" rel="{size: {x: 700, y: 480}}">
		<img class="img-polaroid" src="<?php echo $item->greeting['proj_img'];?>" />
	</a>
            <?php }else{ ?>
        <a href="<?php echo $linkModal ; ?>" rel="{size: {x: 700, y: 480}}">
        <img style="max-width:90%" class="img-polaroid" src="http://manage.goldenlandmarks.net/propertyImages/no-image.jpg" />
        </a>
        <?php } ?>

    <div>
<table class="table table-hover">
              <tr>
                <td class="span5"><strong>Location:</strong></td>
                <td class="span7"><?php echo $item->greeting['location'];?></td>
              </tr>
              <tr>
                <td class="span5"><strong>Type:</strong></td>
                <td class="span7"><?php echo $item->greeting['type'];?></td>
              </tr>
            </table>
   </div>
    <div class="modal-footer">
    <a href="<?php echo $link ; ?>" >More Details</a> <strong>›</strong>
    </div>
</div>

<hr />
<?php endforeach; ?>
<div class="clearfix"></div>
<div class="pagination">
<?php echo $this->pagination->getListFooter(); ?>
</div>

</div>
 

