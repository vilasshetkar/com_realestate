<?php

// no direct access
defined('_JEXEC') or die;
JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.bxSlider.min.js');
JHtml::stylesheet(Juri::base() . 'components/com_realestate/css/style.css');
$document = JFactory::getDocument();
 
// Add Javascript directly here
$document->addScriptDeclaration('
    $(document).ready(function(){
		$("a").click(function(){
			//alert("An inline JavaScript Declaration");
		});
    });
');
?>

 
 
<h2>Search Result</h2>
<table>
<thead>
<tr>
<td><div class="pagination"><?php echo $this->pagination->getListFooter(); ?></div>
<div class="clear"></div></td>
</tr>
</thead>
<tfoot>
</tfoot>
<tbody>
		 <?php foreach($this->items as $i => $item): ?>

<tr class="row<?php echo $i % 2; ?>">
<td>
<?php 
$link = JRoute::_( "index.php?view=Default&layout=SingleProperty&id=".$item->greeting['id'] ); 
$email = JRoute::_( "index.php?view=Default&layout=Email&id=".$item->greeting['id']  );
$refer = JRoute::_( "index.php?view=Default&layout=ReferFriend&id=".$item->greeting['id']  );
?>
<div class="featured_property">
	<div class="property_img">
              <a class="fancybox" href="?r_prop=<?php echo $item->greeting['id'];?>">
              <img src="<?php echo $item->greeting['prop_image'];?>" />
              </a>              
	</div>
        <div class="proj_detail">
        <h2><a href="<?php echo $link ; ?>"><?php echo $item->greeting['title'];?></a></h2>
        <table width="100%" border="1" cellpadding="5" cellspacing="0">
          <tr valign="top"></tr>
          <tr valign="top">
            <th width="19%">Property Type</th>
            <td width="81%"><?php echo $item->greeting['type'];?> &rArr;<strong> For <?php echo $item->greeting['property_for']?></strong></td>
          </tr>
          <tr valign="top">
            <th>Built Up</th>
            <td><?php echo $item->greeting['buildup_area'].' '.$item->greeting['build_unit'];?>, <?php echo $item->greeting['bedrooms'];?> Bedroom(s), <?php echo $item->greeting['bathrooms'];?> Bathroom(s)</td>
          </tr>
          <tr valign="top">
            <th>Location</th>
            <td><?php echo $item->greeting['address'];?></td>
          </tr>
          <tr valign="top">
            <th>Price</th>
            <td><?php if($item->greeting['price']==0){echo "Call for Price!";}else {echo $item->greeting['price'];}?></td>
          </tr>
          <tr valign="top">
            <th> </th>
            <td><a href="<?php echo $link; ?>">More Detail</a> | <a class="sendmail" href="<?php echo $email; ?>">Send Email</a> | <a href="<?php echo $refer; ?>">Refer Friend</a></td>
          </tr>
        </table>
        </div>
        <div class="clear"></div>
    </div>
    </td>
</tr>
<?php endforeach; ?>
</tbody>
</table>

