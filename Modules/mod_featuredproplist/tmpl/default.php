<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

<div class="row-fluid featured-property">
<ul>
		 <?php foreach($hello as $i => $item): ?>


<?php 
$link = JRoute::_( "index.php?option=com_realestate&view=Default&layout=SingleProperty&id=".$item['id'] ); 
$ViewAll = JRoute::_( "index.php?option=com_realestate&view=Default"); 
$email = JRoute::_( "index.php?option=com_realestate&view=Default&layout=Email&id=".$item['id']  );
$refer = JRoute::_( "index.php?option=com_realestate&view=Default&layout=ReferFriend&id=".$item['id']  );
?>
        <li>
		<?php if($item['prop_image']){ ?>
        <img src="<?php echo $item['prop_image'];?>" alt="<?php echo $item['title'];?>" />
        <?php }else { ?>
        <img src="http://manage.goldenlandmarks.net/propertyImages/no-image.jpg" alt="<?php echo $item['title'];?>" />
        <?php };?>
        <a href="<?php echo $link ; ?>"><?php echo $item['title'];?></a></li>

<?php endforeach; ?>
</ul>
<div class="clearfix"></div>
<div class="span12 ViewAll">
<a class="btn btn-info span12" href="<?php echo $ViewAll ; ?>" title="Click Here to View All Properties">View All Properties</a>
</div>
</div>