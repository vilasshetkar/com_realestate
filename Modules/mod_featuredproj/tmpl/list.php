<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); ?>



<div class="featured_project">
<ul>

		 <?php foreach($hello as $i => $item): ?>
<?php 
$link = JRoute::_( "index.php?option=com_realestate&view=project&layout=SingleProject&id=".$item['id'] ); 
$ViewAll= JRoute::_( "index.php?option=com_realestate&view=project"); 
$email = JRoute::_( "index.php?option=com_realestate&view=Default&layout=Email&id=".$item['id']  );
$refer = JRoute::_( "index.php?option=com_realestate&view=Default&layout=ReferFriend&id=".$item['id']  );
?>
<li>
<?php echo $item['title'];?>
</li>
<?php endforeach; ?>
<div class="clear"></div>
</ul>
<div class="ViewAll">
<a href="<?php echo $ViewAll ; ?>" title="Click Here to View All Projects">View All Projects</a>
</div>
</div>
