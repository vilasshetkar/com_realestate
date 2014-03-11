<?php
// no direct access
defined('_JEXEC') or die;
JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.bxSlider.min.js');
JHtml::stylesheet(Juri::base() . 'components/com_realestate/css/prop-view.css');
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
<?php foreach($this->property as $i => $row): ?>
<?php 
$id = ($row['id'])-1;
$link = JRoute::_( "index.php?view=prop&id=".$id );
$email = JRoute::_( "index.php?view=Default&layout=Email&id=".$row['id']  );
 ?>
	<div class="project-detail">
    <div class="pull-right">
    <a class="btn btn-primary" href="<?php echo $email ; ?>" title="Send Enquiry"><i class="icon-envelope"> </i> Send Enquiry</a>
    </div>
	  <h1> <?php echo $row['title']?> </h1>
	  <p class="detail"><?php echo $row['prop_desc']?></p>
	  <table border="0" align="center" cellpadding="5" cellspacing="0" class="tbl-width" style="">
	    <tr>
	      <td align="left" valign="top"><h3>Property Details:</h3></td>
	      <td rowspan="2" align="center" valign="middle">
          <div class="slider">
        <img src="<?php echo $row['prop_image'];?>" />
            </a>
          </div>
          </td>
        </tr>
	    <tr>
	      <td width="60%" align="left" valign="top">
          <table width="100%" cellpadding="5"  cellspacing="0" class="border">
	        <tbody>
	          <tr valign="top">
	            <td width="2%" align="left" valign="top">&nbsp;</td>
	            <td width="37%" align="left" valign="top">Property For</td>
	            <td width="3%" align="left" valign="top"><strong>:</strong></td>
	            <td width="58%" align="left" valign="top"><?php echo $row['property_for']?></td>
              </tr>
	          <tr valign="top">
	            <td align="left" valign="top">&nbsp;</td>
	            <td align="left" valign="top">Property Type</td>
	            <td align="left" valign="top"><strong>:</strong></td>
	            <td align="left" valign="top"><?php echo $row['type']?></td>
              </tr>
	          <tr valign="top">
	            <td align="left" valign="top">&nbsp;</td>
	            <td align="left" valign="top">Price</td>
	            <td align="left" valign="top"><strong>:</strong></td>
	            <td align="left" valign="top"><?php if($row['price']==0){echo "Contact Us!";}else {echo $row['price'];}?></td>
              </tr>
	          <tr valign="top">
	            <td align="left" valign="top">&nbsp;</td>
	            <td align="left" valign="top">Location</td>
	            <td align="left" valign="top"><strong>:</strong></td>
	            <td align="left" valign="top"><?php echo $row['location']?></td>
              </tr>
	          <tr valign="top">
	            <td align="left" valign="top">&nbsp;</td>
	            <td align="left" valign="top">Area</td>
	            <td align="left" valign="top"><strong>:</strong></td>
	            <td align="left" valign="top"><?php echo $row['buildup_area']?> <?php echo $row['build_unit']?></td>
              </tr>
            </tbody>
          </table></td>
        </tr>
      </table>
	  <h3>Property Built Up Details:</h3>
      <table border="0" align="center" cellpadding="5" cellspacing="0" class="tbl-width cont border">
        <tbody>
	        <tr>
	          <td width="12%" align="left"><strong>Furnishing</strong></td>
	          <td width="12%" align="left"><strong>Transaction</strong></td>
	          <td width="12%" align="left"><strong>Bedrooms</strong></td>
	          <td width="12%" align="left"><strong>Bathrooms</strong></td>
	          <td width="12%" align="left"><strong>Reserved Parking</strong></td>
          </tr>
	        <tr>
	          <td><?php echo $row['furnished']?></td>
	          <td><?php echo $row['transaction_type']?></td>
	          <td><?php echo $row['bedrooms']?></td>
	          <td><?php echo $row['bathrooms']?></td>
	          <td><?php echo $row['res_parking']?></td>
            </tr>
        </tbody>
      </table>
      <br />
	  <h3>Amenities:</h3>
	  <p class="detail"><?php if($row['power']=='1'){ echo 'Power Backup, ';}?><?php if($row['water']=='1'){ echo 'Water Storage, ';}?></p>
	  <h3>Property Address:</h3>
	  <p class="detail"><?php echo $row['address']?></p>
	  <h3>Property Seller Detail :      </h3>
	  <table width="100%" cellpadding="5" cellspacing="0" class="cont tbl-width">
        <tbody>
	        <tr valign="top">
	          <td width="20%">Contact Person</td>
	          <td width="4%">:</td>
	          <td width="76%"><?php echo $row['cont_name']?></td>
            </tr>
	        <tr valign="top">
	          <td width="20%">Mobile</td>
	          <td width="4%">:</td>
	          <td width="76%"><?php echo $row['contact']?></td>
            </tr>
	        <tr valign="top">
	          <td>Email</td>
	          <td>:</td>
	          <td colspan="3"><?php echo $row['email']?></td>
            </tr>
	        <tr valign="top">
	          <td>Contact Address</td>
	          <td>:</td>
	          <td colspan="3"><?php echo $row['cont_address']?></td>
            </tr>
        </tbody>
      </table>
	</div>
<?php endforeach; ?>
