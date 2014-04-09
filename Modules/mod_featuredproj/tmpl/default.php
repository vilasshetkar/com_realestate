<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

<div class="row-fluid featured_project">

		 <?php foreach($hello as $i => $item): ?>
<?php 
$linkModal = JRoute::_( "index.php?option=com_realestate&view=project&layout=singleproject&id=".$item['id']); 
$link = JRoute::_( "index.php?option=com_realestate&view=project&layout=singleproject&id=".$item['id']); 
$email = JRoute::_( "index.php?option=com_realestate&view=Default&layout=email&id=".$item['id']  );
$refer = JRoute::_( "index.php?option=com_realestate&view=Default&layout=prop-contact&id=".$item['id']  );
?>

<div class="well span4 pull-left ">
<h3 class="page-header">
	<a href="<?php echo $link ; ?>" rel="{size: {x: 700, y: 480}}">
		<?php echo $item['title'];?>
	</a>
</h3>
	<a href="<?php echo $linkModal ; ?>" rel="{size: {x: 700, y: 480}}">
    <?php if( $item['proj_img']!=""){ ?>
		<img class="img-polaroid" src="<?php echo $item['proj_img'];?>"  style="max-width:96%" />
    <?php }else{ ?>
        <img class="img-polaroid"  src="http://manage.goldenlandmarks.net/propertyImages/no-image.jpg" alt="<?php echo $item['title'];?>" style="max-width:96%" />
    <?php } ?>
    </a>
    <div>
<table class="table table-hover">
              <tr>
                <td class="span5"><strong>Location:</strong></td>
                <td class="span7"><?php echo $item['location'];?></td>
              </tr>
              <tr>
                <td class="span5"><strong>Type:</strong></td>
                <td class="span7"><?php echo $item['type'];?></td>
              </tr>
            </table>
   </div>
    <div class="modal-footer">
    <a href="<?php echo $link ; ?>" >More Details</a> <strong>›</strong>
    </div>
</div>
<?php endforeach; ?>
<div class="clearfix"></div>
<div class="span12 ViewAll">
<a class="btn btn-info span12" href="<?php echo $ViewAll ; ?>" title="Click Here to View All Projects">View All Projects</a>
</div>
</div>

