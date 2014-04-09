<?php
// no direct access
defined('_JEXEC') or die;
JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.min.js');
$document = JFactory::getDocument();


?>

<?php 
// Add Javascript directly here
$document->addScriptDeclaration('
$(document).ready(function(){

});
');
?>


<form class="form-horizontal">
<div class="container">
  <legend id="basicinfo">Basic Info</legend>
  <div class="control-group">
    <label for="PropertyFor" class="control-label">Prperty For</label>
    <div class="controls form-inline">
      <label class="radio">
        <input type="radio" name="property_for" id="list_prop" value="Sale" >
        Sale</label>
      
      <label class="radio">
        <input type="radio" name="property_for" id="list_prop" value="PG" >
        Rent/Lease</label>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="prop">Property Catagory</label>
    <div class="controls">
      <select>
        <option selected="selected">Select Catagory</option>
        <option>Residential Property</option>
        <option>Commercial Property</option>
        <option>Agriculture Land</option>
        <option>Industrial Property</option>
      </select>
    </div>
  </div>
  
  
   <div class="control-group">
    <label class="control-label" for="prop_area">Area</label>
    <div class="controls">
      <input type="number" class="country" id="prop_area"  placeholder="Property Area">
      <select class="dropdown">
        <option value="" selected="selected">Sq. Feet</option>
  <option value="Cent">Cent</option>
  <option value="Sq. Yards">Sq. Yards</option>
  <option value="Acre">Acre</option>
  <option value="Sq. Meter">Sq. Meter</option>
  <option value="Bigha">Bigha</option>
  <option value="Hectares">Hectares</option>
      </select>
    </div>
  </div>
  
  
  
  <div class="control-group">
    <label class="control-label" for="prop_budget">Budget</label>
    <div class="controls">
      <input type="number" id="prop_budget" placeholder="Property Budget">
      <select class="dropdown">
        <option selected="selected">Select Catagory</option>
        <option>In Rupees</option>
        <option>Thousand</option>
        <option>Lac</option>
        <option>Crore</option>
      </select>
    </div>
  </div>
  
  
  <div class="control-group">
    <label class="control-label" for="prop_facing">Property Facing</label>
    <div class="controls">
      <input type="text" id="prop_facing" placeholder="Property Facing">
  </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="prop_image">Property Image</label>
    <div class="controls">
      <input type="file" id="prop_image">
  </div>
  </div>
  <div class="control-group">
 <label class="control-label" for="prop_desc">Property Description</label>
    <div class="controls">
      <textarea rows="3" name="address" id="prop_desc"></textarea>
    </div>
  </div>
  <legend >Property Location</legend>
  
  <div class="control-group">
    <label class="control-label" for="prop_country">Country</label>
    <div class="controls">
      <input type="text" id="prop_country" placeholder="Country">
      </select>
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label"  for="prop_state">State</label>
    <div class="controls">
      <select name="state" id="prop_state">
        <option selected="selected">Select One</option>
        <option selected="selected">Select State</option>
        <option>India</option>
        <option>Us</option>
        <option>UK</option>
        <option>Japan</option>
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="prop_city">City</label>
    <div class="controls">
      <input type="text" id="prop_city" name="city" placeholder="City">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="prop_loc">Area/Loation</label>
    <div class="controls">
      <input type="text" id="prop_loc" name="prop_loc" placeholder="Property Location">
      </select>
    </div>
  </div>
  <legend >Your Contact Detail:</legend>
  <div class="control-group">
    <label class="control-label" for="name">Name</label>
    <div class="controls">
      <input type="text"  id="name"  placeholder="Enter Your Name">
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="prop_number">Contact Number</label>
    <div class="controls">
      <input type="number" id="prop_number" name="prop_number" placeholder="Enter your number">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="prop_email">Email</label>
    <div class="controls">
      <input type="email" id="prop_number" name="prop_number" placeholder="E-mail">
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="prop_address">Address</label>
    <div class="controls">
      <textarea rows="3" name="prop_address" id="prop_address"></textarea>
    </div>
  </div>
</div>
