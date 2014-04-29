<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$searchView = JRoute::_( "index.php?option=com_realestate&view=default&layout=search" ); 

?>
<form action="<?php echo $searchView; ?>" method="post" enctype="multipart/form-data">
<div class="p10px pb5px"><!-- padding div starts -->
		<table width="96%" align="center" cellpadding="5">
			<tbody><tr><td><p>I Want to :</p>
			<p>
            <table>
            <tr valign="top">
              <td width="73%"><input name="property_for" id="listfor" type="radio" value="Sale" checked="checked" onclick="channgePropertyCat(this.value)" />
                Sale 
                <input name="property_for" id="listfor" type="radio" value="Rent" onclick="channgePropertyCat(this.value)" />
                Rent 
                <input name="property_for" id="listfor" type="radio" value="PG" onclick="channgePropertyCat(this.value)" />
                PG</td>
              </tr>
              </table>

			</p></td></tr>
			<tr><td>
			<p>Property Type :</p>
			<p>
            <select name="type" id="type">
              <option value="">Select Category</option>
              <option value="Residential Property">Residential Property</option>
              <option value="Commercial Property">Commercial Property</option>
              <option value="Agricultural land">Agricultural land</option>
              <option value="Industrial Property">Industrial Property</option>
            </select>
            </p></td></tr>
			<tr><td>
			<p>City :</p>
			<p>
            <input type="text" name="city" id="city" value="" />
			</p></td></tr>
			<tr><td>
			<p>Budget :</p> <p style="display:block" id="sell">
            <input type="text" name="price" id="price" value="" class="input" />
			
			</p>			
			</td></tr>
		</tbody></table>
		<input type="hidden" name="searchProp" value="Y">
		<input class="vam large b" name="" type="submit" value="SEARCH"></p>
		
		</div>
</form>

<!--<ul class="latestnews">
<?php foreach ($realestate as $item) :
$link = JRoute::_( "index.php?option=com_realestate&view=default&layout=SingleProperty&id=".$item['id'] ); ?>




	<li>
		<a href="<?php echo $link; ?>">
			<?php echo $item['title']; ?></a>
	</li>
<?php endforeach; ?>
</ul>-->
