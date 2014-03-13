<?php
// no direct access
defined('_JEXEC') or die;
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
$email = JRoute::_( "index.php?view=Default&layout=Email&id=".$row['id']."&propTitle=".$row['title']);
 ?>

  <h3><?php echo $row['title']?> </h3>
  <div class="pull-right">
<a class="btn btn-primary" href="<?php echo $email ; ?>" title="Send Enquiry"><i class="icon-envelope"> </i> Send Enquiry</a></div>
<blockquote> <?php echo $row['prop_desc']?></blockquote>
<ul class="nav nav-tabs" id="myTab">
  <li class="active"><a href="#Property_Details" data-toggle="tab">Property Details</a></li>
  <li><a href="#Property_Built_Up_Details" data-toggle="tab">Property Built Up Details</a></li>
  <li><a href="#Amenities" data-toggle="tab">Amenities</a></li>
  <li><a href="#Property_Address" data-toggle="tab">Property Address</a></li>
  <li><a href="#Property_Seller_Detail" data-toggle="tab">Property Seller Detail</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="Property_Details">
  <div class="row-fluid">
    <div class="span9">
      <div class="row-fluid">
        <div class="span12">
          <div class="row-fluid">
            <div class="span3"> Property For </div>
            <div class="span9"> <?php echo $row['property_for']?> </div>
          </div>
          <div class="row-fluid">
            <div class="span3"> Property Type </div>
            <div class="span9"> <?php echo $row['type']?> </div>
          </div>
          <div class="row-fluid">
            <div class="span3"> Location </div>
            <div class="span9"> <?php echo $row['location']?> </div>
          </div>
          <div class="row-fluid">
            <div class="span3"> Area </div>
            <div class="span9"> <?php echo $row['buildup_area']?> <?php echo $row['build_unit']?> </div>
          </div>
          <div class="row-fluid">
            <div class="span3"> Price </div>
            <div class="span9">
              <?php if($row['price']==0){echo "Contact Us!";}else {echo $row['price'];}?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="span2"> <img src="<?php echo $row['prop_image'];?>" /> </div>
  </div>
</div>
<div class="tab-pane" id="Property_Built_Up_Details">
  <tr>Property Built Up Details
  <tr>
    <table class="table table-bordered">
      <tr>
        <th>Furnishing</th>
        <th>Transaction</th>
        <th>Bedrooms</th>
        <th>Bathrooms</th>
        <th>Reserved Parking</th>
      </tr>
      <tr>
        <td><?php echo $row['furnished']?></td>
        <td><?php echo $row['transaction_type']?></td>
        <td><?php echo $row['bedrooms']?></td>
        <td><?php echo $row['bathrooms']?></td>
        <td><?php echo $row['res_parking']?></td>
      </tr>
    </table>
</div>
<div class="tab-pane" id="Amenities">
  <table class="table table-stripped">
    <tr>
      <ul>
        <?php if($row['power']=='1'){ echo '<li>Power Backup</li>';}?>
        <?php if($row['water']=='1'){ echo '<li>Water Storage</li>';}?>
        <?php if($row['lift']=='1'){ echo '<li>Lift</li>';}?>
        <?php if($row['res_parking']=='1'){ echo '<li>Reserve Parking</li>';}?>
        <?php if($row['security']=='1'){ echo '<li>Security</li>';}?>
        <?php if($row['maintenance']=='1'){ echo '<li>Maintenance Staff</li>';}?>
        <?php if($row['gym']=='1'){ echo '<li>GYM</li>';}?>
        <?php if($row['park']=='1'){ echo '<li>Park</li>';}?>
        <?php if($row['tarrace']=='1'){ echo '<li>Private Tarrace</li>';}?>
        <?php if($row['swimming']=='1'){ echo '<li>Swimming Pool</li>';}?>
        <?php if($row['quarters']=='1'){ echo '<li>Servant Quarters</li>';}?>
        <?php if($row['club']=='1'){ echo '<li>Club House</li>';}?>
      </ul>
    </tr>
  </table>
</div>
<div class="tab-pane" id="Property_Address">
  <h4>Property Address</h4>
      <p><?php echo $row['address']?></p>
</div>
<div class="tab-pane" id="Property_Seller_Detail">
  <table class="table table-bordered">
    <tbody>
      <tr>
        <th>Property Seller Detail</th>
      </tr>
      <tr>
        <td>Contact Person</td>
        <td><?php echo $row['cont_name']?></td>
      </tr>
      <tr>
        <td>Mobile</td>
        <td><?php echo $row['contact']?></td>
      </tr>
      <tr >
        <td>Email</td>
        <td><?php echo $row['email']?></td>
      </tr>
      <tr>
        <td>Contact Address</td>
        <td><?php echo $row['cont_address']?></td>
      </tr>
    </tbody>
  </table>
</div>
<?php endforeach; ?>
