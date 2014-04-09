<?php

// no direct access
defined('_JEXEC') or die;
JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.min.js');
JHTML::_('behavior.modal');
$document = JFactory::getDocument();


// Add Javascript directly here
$document->addScriptDeclaration('

    function sendAjax(layout, action, value, id){
      var data = {action:action, value:value, layout:layout, id:id.replace(/[^0-9\.]+/g, "")};
    $.ajax({
        type: "POST",
        url: "index.php?option=com_realestate&task=ajaxCall",
        data: data,
        success: function(data){
			$("#"+id).toggleClass("btn-danger")
			if(!$("#"+id).hasClass("btn-danger")){
				$("#"+id).attr("alt",0);
				$("#"+id).attr("value","Set Featured");
			}else{
				$("#"+id).attr("alt",1);
				$("#"+id).attr("value","Set Not Featured");
			}
           alert(data);

        }
    });
  };
');

?>
<!--
<script type="text/javascript">
function sendAjax(layout, action, value, id){
      var data = {action:action, value:value, layout:layout, id:id};
    $.ajax({
        type: "POST",
        url: "index.php?option=com_realestate&task=ajaxCall",
        data: data,
        success: function(data){
			$("#prop"+value).toggleClass("btn-danger").attr("alt",0);
           alert(data);

        }
    });
}
</script>-->


<table class="table-bordered table" id="menutbl">
  <tr>
    <th> Sr. No. </th>
    <th colspan="2" >Property Details</th>
    <th>Response</th>
    <th >Status</th>
    <th>Other Domains</th>
    <th>Manage</th>
  </tr>


<?php foreach($this->property as $i => $row):

$viewProp = JRoute::_( "index.php?view=Default&layout=SingleProperty&id=".$row['id']."&tmpl=component" );
$propLink = JRoute::_( "index.php?view=manage&layout=default&id=".$row['id']);
$propEdit = JRoute::_( "index.php?view=manage&layout=edit-prop&id=".$row['id']."&tmpl=component" );
$propCopy = JRoute::_( "index.php?view=manage&layout=copy-prop&id=".$row['id']."&tmpl=component" );
$propImage = JRoute::_( "index.php?view=manage&layout=prop-image&id=".$row['id']."&tmpl=component" );
$locationMap = JRoute::_( "index.php?view=manage&layout=loc-map-prop&id=".$row['id']."&tmpl=component" );


?>

  <tr>
    <td rowspan="4" id="editmenu" align="left" valign="top" width="5%"><?php echo $i ;?></td>
    <td >Property ID</td>
    <td ><?php echo 'REL'.$row['id'];?></td>
    <td rowspan="4" ><a 
      href="http://manage.goldenlandmarks.net/manage/Projects/Real-Estate/responses.php?respo_for=property&amp;">0</a></td>
    <td ><?php if (!$row['featured']==1){ $btnName = "Set Not Featured" ; $btnClass = "btn-danger"; $btnValue = 1 ; }
	else { $btnName = "Set Featured" ; $btnClass = "";  $btnValue = 0 ; }
	?>
    <label >Featured: </label>
    <input type="button" class="btn <?php echo $btnClass ; ?>" id="prop<?php echo $row['id'];?>" value="<?php echo $btnName ; ?>" alt="<?php echo $btnValue ;?>" onclick="sendAjax('default','featured',this.alt,this.id)" /></td>
    <td rowspan="4" ><form method="post" action="" enctype="multipart/form-data" id="form<?php echo $i+1 ; ?>">
      <?php echo $row['other_domain'];?>
      
    </form></td>
    <td ><a class="modal" href="<?php echo $propEdit;?>"  rel="{size: {x: 700, y: 480}}" id="mname">Edit</a></td>
  </tr>
  <tr>
    <td > Property For</td>
    <td><?php echo $row['property_for'];?></td>
    <td >
      <?php if (!$row['status']==1){ $btnName = "Delete Property" ; $btnClass = "btn-danger"; $btnValue = 1 ; }
	else { $btnName = "Make Active" ; $btnClass = "";  $btnValue = 0 ; }
	?>
    <label >Status: </label>
      <input type="button" class="btn <?php echo $btnClass ; ?>" id="propSts<?php echo $row['id'];?>" value="<?php echo $btnName ; ?>" alt="<?php echo $btnValue ;?>" onclick="sendAjax('default','status',this.alt,this.id)">
      
  </td>
      
    <td ><a class="modal" rel="{size: {x: 700, y: 480}}"  href="<?php echo $viewProp;?>" >View Property</a></td>
  </tr>
  <tr>
    <td > Type</td>
    <td><?php echo $row['type'];?></td>
    <td rowspan="2" ><a class="modal btn btn-info" href="<?php echo $propCopy;?>">Make Copy</a></td>
    <td ><a class="modal" href="<?php echo $propImage;?>" title="Property Images"> Property Image</a></td>
  </tr>
  <tr>
    <td> Address</td>
    <td ><?php echo $row['address'];?></td>
    <td ><a class="modal" href="<?php echo $locationMap;?>" title="Location Map"> Location Map</a></td>
  </tr>
  <?php endforeach; ?>

</table>
