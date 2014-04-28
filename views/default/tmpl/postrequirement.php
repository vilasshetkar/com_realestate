<?php
// no direct access
defined('_JEXEC') or die;
JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.js');
JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.bxSlider.min.js');


$document = JFactory::getDocument();


?>

<?php 
// Add Javascript directly here
$document->addScriptDeclaration('
$(document).ready(function() {
    $(".slidera").bxSlider({
		auto: true,
		mode: "vertical",
		pager: false,
		controls: false,
		minSlides: 2,
		  maxSlides: 2,
		  //slideWidth: 360,
		  slideMargin: 10
	});
});
');
?>
<style>
.slidera li{
	display:block;
	height:180px;
}
</style>

<ul class="slidera">
  <li><a href=""><img src="../../../../../images/headers/blue-flower.jpg" alt="" width="700" height="180"></a></li>
  <li>
    <a href=""><img src="../../../../../images/headers/maple.jpg" alt="" width="700" height="180"></a>
  </li>
  <li><a href=""><img src="../../../../../images/headers/raindrops.jpg" alt="" width="700" height="180"></a>
  </li>
  <li><a href=""><img src="../../../../../images/headers/walden-pond.jpg" alt="" width="700" height="180"></a></li>
</ul>
