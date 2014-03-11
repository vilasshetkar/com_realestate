<?php

// no direct access
defined('_JEXEC') or die;

?>



<table class="table-bordered table-hover table" id="menutbl">
  <tr>
    <th> Sr. No. </th>
    <th colspan="2" >Property Details</th>
    <th>Response</th>
    <th >Featured</th>
    <th>Status</th>
    <th>Other Domains</th>
    <th>Manage</th>
  </tr>


<?php foreach($this->property as $i => $row): ?>

  <tr>
    <td rowspan="4" id="editmenu" align="left" valign="top" width="5%"><?php echo $i ;?></td>
    <td >Property ID</td>
    <td ><?php echo 'REL'.$row['id'];?></td>
    <td rowspan="4" ><a 
      href="http://manage.goldenlandmarks.net/manage/Projects/Real-Estate/responses.php?respo_for=property&amp;">0</a></td>
    <td ><font><strong> <?php if ($row['featured']==1){ echo '<font color="#009900"><strong>FEATURED</font></strong>';} else {echo '<font color="#FF0000">NOT FEATURED</font>';}?> </strong></font></td>
    <td ><font><strong><?php if ($row['status']==1){ echo '<font color="#009900"><strong>Active</font></strong>';} else {echo '<font color="#FF0000">Deleted</font>';}?></strong></font></td>
    <td rowspan="4" ><form method="post" action="" enctype="multipart/form-data" id="form<?php echo $i ; ?>">
    <?php echo 'REL'.$row['other_domain'];?>
    
<!--        <input name="other_domain[]" value="4" type="checkbox">
        www.jaidevlandmarks.com<br>
        <input name="other_domain[]" value="5" type="checkbox">
        www.parkstreetwakad.com<br>
        <input name="other_domain[]" value="6" checked="checked" type="checkbox">
        www.goldenlandmarks.net<br>
        <input name="other_domain[]" value="7" type="checkbox">
        www.hinjewadiproperties.com<br>
        <input name="other_domain[]" value="8" type="checkbox">
        www.hinjewadiproperties.com<br>
        <input name="other_domain[]" value="9" type="checkbox">
        www.parkstreetwakad.com/<br>
        <input name="other_domain[]" value="10" type="checkbox">
        www.24kglitterati.com/<br>
        <input name="other_domain[]" value="11" checked="checked" type="checkbox">
        www.gitakabhagwan.com<br>
        <input name="other_domain[]" value="12" checked="checked" type="checkbox">
        www.propertydemand.com<br>
        <input name="property" value="3" type="hidden">
-->      </form></td>
    <td ><a href="#" id="mname">Edit</a></td>
  </tr>
  <tr>
    <td > Property For</td>
    <td><?php echo $row['property_for'];?></td>
    <td ><?php if ($row['featured']==1){ echo '<a class="featured" href="?id='.$row["id"].'&amp;featured=0" ><input type="button" value="Set Not Featured" /></a>';} 
	  else if($row['featured']==0) {echo '<a class="featured" href="?id='.$row["id"].'&amp;featured=1" ><input type="button" value="Set Featured" /></a>';}?></td>
    <td ><?php if ($row['status']==1){ echo '<a class="featured" href="?id='.$row["id"].'&amp;status=0" ><input type="button" value="Delete Property" /></a>';} 
	  else if($row['status']==0) {echo '<a class="featured" href="?id='.$row["id"].'&amp;status=1" ><input type="button" value="Make Active" /></a>';}?></td>
    <td ><a class="view-property" href="#<?php echo $row['id'];?>" >View Property</a></td>
  </tr>
  <tr>
    <td > Type</td>
    <td><?php echo $row['type'];?></td>
    <td colspan="2" rowspan="2" ><a href="#<?php echo $row['id'];?>">Make Copy</a></td>
    <td ><a class="view-property" href="/manage/upload/rename.php?prop_prop_img=<?php echo $row['id']?>" title="Project Images"> Property Image</a></td>
  </tr>
  <tr>
    <td> Address</td>
    <td ><?php echo $row['address'];?></td>
    <td ><a class="view-property" href="#<?php echo $row['id']?>" title="Project Images"> Location Map</a></td>
  </tr>
  <?php endforeach; ?>

</table>
