<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<table align="center">
        <tr align="center">
          <td align="center"><p>
              <button class="btn btn-large btn-primary" type="submit">Submit</button>
            </p></td>
          <td><p>
              <button class="btn btn-large btn-primary" type="reset">Reset</button>
            </p></td>
        </tr>
      </table>
<form class="form-horizontal">
  <ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#Basic_Info_Pro" data-toggle="tab">Basic Info</a></li>
    <li><a href="#Property_Location" data-toggle="tab">Property Location</a></li>
    <li><a href="#Description_Title" data-toggle="tab">Description Title</a></li>
    <li><a href="#Property_Contact_Details" data-toggle="tab">Property Contact Details</a></li>
    <li><a href="#Optional_Property_Details" data-toggle="tab">Optional Property Details</a></li>
    <li><a href="#Land_Mark" data-toggle="tab">Land Mark</a></li>
    <li><a href="#Amenities" data-toggle="tab">Amenities</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="Basic_Info_Pro">
      <legend id="basicinfo"> Basic Info </legend>
      <div class="control-group">
        <label for="PropertyFor" class="col-sm-2 control-label">Prperty For</label>
        <div class="controls form-inline">
          <label class="radio">
            <input type="radio" name="property_for" id="listfor" value="Sale" >
            Sale </label>
          <label class="radio">
            <input type="radio" name="property_for" id="listfor" value="Rent" >
            Rent </label>
          <label class="radio">
            <input type="radio" name="property_for" id="listfor" value="PG" >
            PG </label>
        </div>
      </div>
      <div class="control-group">
        <label for="featured" id="text_cat_id_id2" class="col-sm-2 control-label">Featured</label>
        <div class="controls form-inline">
          <label class="radio">
            <input type="radio" name="featured" id="featured" value="option1" >
            Yes </label>
          <label class="radio">
            <input type="radio" name="featured" id="featured" value="option2" >
            No </label>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" id="text_cat_id_id" for="prop">Property Catagory</label>
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
        <label class="control-label" id="text_sub_cat_id" for="prop">Property Type</label>
        <div class="controls">
          <input type="text" class="form-control" id="type" id="type" placeholder="Property Type">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" id="text_area_id" for="prop">Built Up Area</label>
        <div class="controls">
          <input type="text" class="form-control" id="build_area" name="build_area" placeholder="">
          <select name="build_unit" id="build_unit">
            <option selected="selected">Unit Area</option>
            <option>Residential Property</option>
            <option>Commercial Property</option>
            <option>Agriculture Land</option>
            <option>Industrial Property</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" id="text_landarea_id" for="prop">Plot/Land Area</label>
        <div class="controls">
          <input type="text" class="form-control" id="land_area" name="land_area" placeholder="">
          <select name="land_unit" id="land_unit">
            <option selected="selected">Unit Area</option>
            <option>Residential Property</option>
            <option>Commercial Property</option>
            <option>Agriculture Land</option>
            <option>Industrial Property</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" id="carpet_area"  for="prop">Carpet Area</label>
        <div class="controls">
          <input type="text" class="form-control" id="carpet_area" name="carpet_area" placeholder="">
          <select name="carpet_unit" id="carpet_unit">
            <option selected="selected">Unit Area</option>
            <option>Residential Property</option>
            <option>Commercial Property</option>
            <option>Agriculture Land</option>
            <option>Industrial Property</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" id="price"  for="prop">Property Price</label>
        <div class="controls">
          <input type="text" class="form-control" id="price" name="price" placeholder="">
          <select name="currency" id="currency">
            <option selected="selected">In Rupees </option>
            <option>In Rupees</option>
            <option>Thounsand</option>
            <option>Lac</option>
            <option>Caror</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" id="bedroomshide"  for="prop">Bedroom</label>
        <div class="controls">
          <select name="bedrooms" id="bedrooms">
            <option selected="selected">Select One</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" id="bathroomshide"  for="prop">Bathroom</label>
        <div class="controls">
          <select name="bathrooms" id="bathrooms">
            <option selected="selected">Select One</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" id="bathroomshide"  for="prop">Property Images</label>
        <div class="controls">
          <input name="prop_img[]" multiple="multiple" required="required" id="prop_img[]" type="file">
          <input name="dir" value="../../upload/uploaded-files" type="hidden">
          <input name="path" value="/admin/upload/uploaded-files" type="hidden">
          </select>
        </div>
      </div>
    </div>
    <div class="tab-pane" id="Property_Location">
      <legend >Property Location</legend>
      <div class="control-group">
        <label class="control-label" id="country"  for="prop">Country</label>
        <div class="controls">
          <input type="text" class="country" id="type" id="country" placeholder="">
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" id="text_prop_state_id_id"   for="prop">State</label>
        <div class="controls">
          <select name="state" id="state">
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
        <label class="control-label" id="text_prop_city_id_id"   for="prop">City</label>
        <div class="controls">
          <input type="text" id="city" name="city" placeholder="City">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" id="text_prop_address_id"   for="prop">Address</label>
        <div class="controls">
          <textarea rows="3" name="address" id="address"></textarea>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" id="country"  for="prop">Area/Loation</label>
        <div class="controls">
          <input type="text" class="country" id="location" name="location" placeholder="">
          </select>
        </div>
      </div>
    </div>
    <div class="tab-pane" id="Description_Title">
      <legend > Description Title</legend>
      <div class="control-group">
        <label class="control-label"   for="prop">Property Title</label>
        <div class="controls">
          <textarea rows="3" name="title" id="title"></textarea>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label"    for="prop">Meta Description</label>
        <div class="controls">
          <textarea rows="3" name="meta_desc" id="meta_desc"></textarea>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label"    for="prop">Meta Keywords</label>
        <div class="controls">
          <textarea rows="3" name="meta_key" id="meta_key"></textarea>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label"    for="prop">Society Name</label>
        <div class="controls">
          <input type="text" id="society_name" name="society_name" placeholder="">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" id="text_prop_desc_id" >Property Description</label>
        <div class="controls">
          <textarea rows="3" name="prop_desc" id="prop_desc"></textarea>
        </div>
      </div>
    </div>
    <div class="tab-pane" id="Property_Contact_Details">
      <legend > Property Contact Details</legend>
      <div class="control-group">
        <label class="control-label" id="text_contname_id" >Name</label>
        <div class="controls">
          <input type="text" name="cont_name" id="cont_name" placeholder="">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" id="text_contno_id" >Contact Number</label>
        <div class="controls">
          <input type="text" name="contact_no" id="contact_no" placeholder="">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" id="text_contno_id2" >Email</label>
        <div class="controls">
          <input type="email"  id="email" name="email" placeholder="">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" id="text_contaddress_id" >Address</label>
        <div class="controls">
          <textarea rows="5" cols="20" name="cont_address" id="cont_address" ></textarea>
        </div>
      </div>
    </div>
    <div class="tab-pane" id="Optional_Property_Details">
      <legend >Optional Property Details</legend>
      <div class="control-group">
        <label class="control-label" id="text_prop_state_id_id"   for="prop">Age Of The Property</label>
        <div class="controls">
          <select name="prop_age" id="prop_age">
            <option selected="selected">Select One</option>
            <option>Under Construction</option>
            <option>New Construction</option>
            <option>0 to 5</option>
            <option>5 to 10</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" id="text_prop_state_id_id"   for="prop">Furnished</label>
        <div class="controls">
          <select name="furnished" id="furnished">
            <option selected="selected">Select One</option>
            <option>furnished</option>
            <option>Unfurnished</option>
            <option>Semi-furnished</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" id="text_prop_state_id_id"   for="prop">Transaction Type</label>
        <div class="controls">
          <select name="transaction_type" id="transaction_type">
            <option selected="selected">Select One</option>
            <option>Resale Property</option>
            <option>New Property</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" id="text_prop_state_id_id"   for="prop">Property Ownership</label>
        <div class="controls">
          <select name="prop_owner" id="prop_owner">
            <option selected="selected">Select One</option>
            <option>Individual</option>
            <option>Others</option>
            <option>Broker/Agent</option>
            <option>Builder</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label"  for="prop">Total No Of Floors</label>
        <div class="controls">
          <select name="floors" id="floors">
            <option selected="selected">Select One</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label"  for="prop">Facing</label>
        <div class="controls">
          <select name="facing" id="facing">
            <option selected="selected">Select One</option>
            <option>East</option>
            <option>West</option>
            <option>South</option>
            <option>North</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label"  for="prop">Property On floor</label>
        <div class="controls">
          <select name="on_floor" id="on_floor">
            <option selected="selected">Select One</option>
            <option>1</option>
            <option>2</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label"  for="prop">No. Of Car Parking</label>
        <div class="controls">
          <select name="parking" id="parking">
            <option selected="selected">Select One</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
      </div>
    </div>
    <div class="tab-pane" id="Land_Mark">
      <legend >Land Mark</legend>
      <div class="control-group">
        <label class="control-label"  >Hospitals </label>
        <div class="controls">
          <input type="text" name="hospital" id="hospital" placeholder="">
          <b>Kms</b> </div>
      </div>
      <div class="control-group">
        <label class="control-label"  >Airport </label>
        <div class="controls">
          <input type="text" name="airport" id="airport" placeholder="">
          <b>Kms</b> </div>
      </div>
      <div class="control-group">
        <label class="control-label"  >Railway Station </label>
        <div class="controls">
          <input type="text" name="railway" id="railway" placeholder="">
          <b>Kms</b> </div>
      </div>
      <div class="control-group">
        <label class="control-label"  >School </label>
        <div class="controls">
          <input type="text" name="school" id="school" placeholder="">
          <b>Kms</b> </div>
      </div>
    </div>
    <div class="tab-pane" id="Amenities">
      <legend >Amenities</legend>
      <table border="2">
        <tr>
          <td width="30%"><label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              Power Backup </label></td>
          <td width="30%"><label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              Water Storage </label></td>
          <td width="30%"><label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              Lift </label></td>
        </tr>
        <tr>
          <td width="30%"><label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              Reserve Parking </label></td>
          <td width="30%"><label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              Security </label></td>
          <td width="30%"><label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              Maintenance Staff </label></td>
        </tr>
        <tr>
          <td width="30%"><label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              GYM </label></td>
          <td width="30%"><label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              Park </label></td>
          <td width="30%"><label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              Private Tarrace </label></td>
        </tr>
        <tr>
          <td width="30%"><label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              Swimmiming Pool </label></td>
          <td width="30%"><label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              Servent Quarter </label></td>
          <td width="30%"><label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1">
              Club House </label></td>
        </tr>
      </table>
      
    </div>
  </div>
</form>
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/bootstrap-tab.js"></script> 
<script type="text/javascript">
	       $('a[data-toggle="tab"]').on('shown', function (e) {
    e.target // activated tab
    e.relatedTarget // previous tab
    })
    </script>

</body>
</html>