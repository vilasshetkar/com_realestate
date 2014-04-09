<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>

<div class="row-fluid featured_project">
<ul>
		 <?php foreach($hello as $i => $item): ?>
<?php 
$link = JRoute::_( "index.php?option=com_realestate&view=project&layout=singleproject&id=".$item['id']); 
$ViewAll = JRoute::_( "index.php?option=com_realestate&view=project"); 
$email = JRoute::_( "index.php?option=com_realestate&view=Default&layout=email&id=".$item['id']  );
$refer = JRoute::_( "index.php?option=com_realestate&view=Default&layout=prop-contact&id=".$item['id']  );
?>

	<li>
    <a href="<?php echo $link ; ?>">
		<?php echo $item['title'];?>
	</a></li>
<?php endforeach; ?>
</ul>
<div class="clearfix"></div>
<div class="span12 ViewAll">
<a class="btn btn-info span12" href="<?php echo $ViewAll ; ?>" title="Click Here to View All Projects">View All Projects</a>
</div>
</div>

