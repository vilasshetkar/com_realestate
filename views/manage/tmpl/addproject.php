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
    <li class="active"><a href="#Basic_Info" data-toggle="tab">Basic Info</a></li>
    <li><a href="#Amenities_Features" data-toggle="tab">Amenities/Features</a></li>
    <li><a href="#Specifications" data-toggle="tab">Specifications</a></li>
    <li><a href="#Availabillity" data-toggle="tab"> Availabillity</a></li>
    <li><a href="#Contact" data-toggle="tab">Contact</a></li>
  </ul>
  <div class="tab-content">
  <div class="tab-pane active" id="Basic_Info">
    <div class="control-group">
      <label class="control-label" for="title">Project Title</label>
      <div class="controls">
        <input type="text" id="title" name="title" >
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="featured">Featured</label>
      <div class="controls">
        <label class="radio inline">
          <input type="radio" name="featured" id="featured" value="option1" checked>
          Yes </label>
        <label class="radio inline">
          <input type="radio" name="featured" id="featured" value="option2">
          No </label>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="Category">Project Type</label>
      <div class="controls">
        <select name="category" id="category">
          <option value="">Select Category</option>
          <option value="Residential Property">Residential Property</option>
          <option value="Commercial Property">Commercial Property</option>
          <option value="Agricultural land">Agricultural land</option>
          <option value="Industrial Property">Industrial Property</option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="location">location</label>
      <div class="controls">
        <input name="location" id="location" type="text">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="Overview">Overview</label>
      <div class="controls">
        <textarea name="Overview" id="Overview" rows="3"></textarea>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="Project Images">Project Images</label>
      <div class="controls">
        <input type="file" name="Project Images" id="Project Images" >
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="Project By">Project By </label>
      <div class="controls">
        <input name="Project By" id="Project By" type="text">
      </div>
    </div>
  </div>
  <div class="tab-pane" id="Amenities_Features">
    <div class="control-group">
      <label class="control-label" for="Amenities">Amenities</label>
      <div class="controls">
        <textarea name="Amenities" id="Amenities" rows="3"></textarea>
      </div>
    </div>
  </div>
  <div class="tab-pane" id="Specifications">
    <div class="control-group">
      <label class="control-label" for="Specifications">Specifications</label>
      <div class="controls">
        <textarea name="Specifications" id="Specifications" rows="3"></textarea>
      </div>
    </div>
  </div>
  <div class="tab-pane" id="Availabillity">
   
    <div class="control-group">
      <label class="control-label" for="Availabillity">Availabillity</label>
      <div class="controls">
        <textarea name="Availabillity" id="Availabillity" rows="3"></textarea>
      </div>
    </div>
  </div>
  <div class="tab-pane" id="Contact">
    
    <div class="control-group">
      <label class="control-label" for="Contact">Contact</label>
      <div class="controls">
        <textarea name="Contact" id="Contact" rows="3"></textarea>
      </div>
    </div>
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
