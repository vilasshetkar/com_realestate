<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.bxSlider.min.js');

//JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.js');

JHtml::stylesheet(Juri::base() . 'components/com_realestate/css/jquery.simplyscroll.css');
JHtml::stylesheet(Juri::base() . 'components/com_realestate/css/scroll-style.css');
JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.simplyscroll.js');

$document = JFactory::getDocument();

// Add Javascript directly here
$document->addScriptDeclaration('
(function($) {
	$(function() { //on DOM ready
		$("#scroller").simplyScroll({
			//customClass: "vert",
			orientation: "vertical",
            auto: true,
            //manualMode: "loop",
			//frameRate: 20,
			//speed: 5
		});
	});
})(jQuery);

');
?>

<div class="row-fluid">
<ul id="scroller">

<?php foreach($hellos as $i => $hello ): 
$link = JRoute::_( "index.php?option=com_realestate&view=project&layout=singleproject&id=".$hello['id']); 

?>
  <li><a href="<?php echo $link; ?>">
  	<img src="<?php echo $hello["proj_img"]; ?>" alt="" >
    <span class="proj-title"><?php echo $hello["title"]; ?></span>
  </a>
  </li>

<?php endforeach ?>

</ul>

</div>

