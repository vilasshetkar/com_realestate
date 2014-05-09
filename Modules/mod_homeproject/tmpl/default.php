<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

 		$app	= JFactory::getApplication();
		$menus	= $app->getMenu();
		$menu	= $menus->getActive();
		$menuid	= "&Itemid=".$menu->id;


?>

<div class="row-fluid home_project">
<div class="span3">
  <ul class="nav menu proj_nav">
      <li><a href="index.php?option=com_realestate&amp;view=project&amp;layout=overview&amp;id=<?php echo $hello["id"]; ?>&amp;project=<?php echo $hello["title"].$menuid; ?>">Overview</a></li>
      <li class="item-136"><a href="index.php?option=com_realestate&amp;view=default&amp;layout=search&amp;id=<?php echo $hello["id"]; ?>&amp;project=<?php echo $hello["title"].$menuid; ?>">Availability</a></li>
      <li class="item-137"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=floor-plan&amp;id=<?php echo $hello["id"]; ?>&amp;project=<?php echo $hello["title"].$menuid; ?>">Floor Plan</a></li>
      <li class="item-135"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=amenities-specification&amp;id=<?php echo $hello["id"]; ?>&amp;project=<?php echo $hello["title"].$menuid; ?>">Amenities Specification</a></li>
      <li class="item-138"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=location-layout&amp;id=<?php echo $hello["id"]; ?>&amp;project=<?php echo $hello["title"].$menuid; ?>">Layout &amp; Location Map</a></li>
      <li class="item-139"><a href="index.php?option=com_realestate&amp;view=project&amp;layout=walk-through&amp;id=<?php echo $hello["id"]; ?>&amp;project=<?php echo $hello["title"].$menuid; ?>">Walk Through</a></li>
    </ul>
</div>
<div class="span6">
<div class="project-banner">
<img class="projImg" src="<?php echo $hello["proj_img"]; ?>" alt="<?php echo $hello["title"]; ?>">
</div>
</div>
<div class="span3">
	<div class="project-banner">
    	<div class="projLogo">
		  <?php echo $hello["logo"]; ?>
        </div>
	</div>

</div>

</div>

