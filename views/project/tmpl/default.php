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


<div class="featured_project">
<ul>

		 <?php foreach($this->items as $i => $item): ?>
<?php 
$link = JRoute::_( "index.php?view=project&layout=SingleProject&id=".$item->greeting['id'] ); 
$email = JRoute::_( "index.php?view=Default&layout=Email&id=".$item->greeting['id']  );
$refer = JRoute::_( "index.php?view=Default&layout=ReferFriend&id=".$item->greeting['id']  );
?>
<li>
          <div class="project_box">
            <table height="76" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="146" scope="col"><h1>
	              <a class="fancybox" href="<?php echo $link ; ?>">
					<?php echo $item->greeting['title'];?>
        	      </a>
				</h1></td>
              </tr>
              <tr>
                <td align="center" scope="col">
                  <a class="fancybox" href="<?php echo $link ; ?>">
                  <img src="<?php echo $item->greeting['proj_img'];?>" />
                  </a>
                </td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="77" align="left" valign="top" scope="col"><strong>Location:</strong></td>
                <td width="147" align="left" valign="top" scope="col"><?php echo $item->greeting['location'];?></td>
              </tr>
              <tr>
                <td align="left" valign="top"><strong>Type:</strong></td>
                <td align="left" valign="top"><?php echo $item->greeting['type'];?></td>
              </tr>
              <tr>
                <td colspan="2" align="left" valign="top"><a href="<?php echo $link ; ?>">More Details</a> <strong>›</strong></td>
              </tr>
            </table>
          </div>
</li>
<?php endforeach; ?>
<div class="clear"></div>
</ul>
</div>
<div class="pagination"><?php echo $this->pagination->getListFooter(); ?></div>
<div class="clear"></div>
 

