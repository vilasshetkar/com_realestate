<?php
// no direct access
defined('_JEXEC') or die;
JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.min.js');
JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.bxSlider.min.js');
JHtml::script(Juri::base() . 'components/com_realestate/js/Spray/SpryValidationSelect.js');
JHtml::script(Juri::base() . 'components/com_realestate/js/Spray/SpryValidationTextField.js');
JHtml::script(Juri::base() . 'components/com_realestate/js/Spray/SpryValidationTextarea.js');
JHtml::stylesheet(Juri::base() . 'components/com_realestate/js/Spray/SpryValidationSelect.css');
JHtml::stylesheet(Juri::base() . 'components/com_realestate/js/Spray/SpryValidationTextField.css');
JHtml::stylesheet(Juri::base() . 'components/com_realestate/js/Spray/SpryValidationTextarea.css');
$document = JFactory::getDocument();


?>
<?php 

// Add Javascript directly here
$document->addScriptDeclaration('
$(document).ready(function(){
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["blur"]});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["blur"]});
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3", {validateOn:["blur"]});
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4", {validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["blur"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {maxChars:255, counterId:"countsprytextarea1", counterType:"chars_remaining", validateOn:["blur"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["blur"]});
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2", {maxChars:255, counterId:"countsprytextarea2", counterType:"chars_remaining", validateOn:["blur"]});
var sprytextarea3 = new Spry.Widget.ValidationTextarea("sprytextarea3", {maxChars:2000, counterId:"countsprytextarea3", validateOn:["blur"], counterType:"chars_remaining", hint:"First 160 characters are effective for search engine optimization. So important data must be in first 160chrs."});
var sprytextarea4 = new Spry.Widget.ValidationTextarea("sprytextarea4", {maxChars:2000, counterId:"countsprytextarea4", counterType:"chars_remaining", validateOn:["blur"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {maxChars:50, validateOn:["blur"]});
var sprytextarea5 = new Spry.Widget.ValidationTextarea("sprytextarea5", {maxChars:2000, counterId:"countsprytextarea5", counterType:"chars_remaining", validateOn:["blur"]});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {validateOn:["blur"]});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "phone_number", {format:"phone_custom", pattern:"0000000000", validateOn:["blur"], hint:"10 Digit Mobile no."});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "email", {validateOn:["blur"]});
var sprytextarea6 = new Spry.Widget.ValidationTextarea("sprytextarea6", {maxChars:255, counterId:"countsprytextarea6", counterType:"chars_remaining"});
});
');
?>

<form class="form-horizontal" id="form1" name="form1" method="post" action="" enctype="multipart/form-data" >
<legend>Basic Info</legend>
  <div class="control-group">
    <label class="control-label" for="listfor">Property for</label>
    <div class="controls">
      <input name="property_for" id="listfor" type="radio" value="Sale" checked="checked" onclick="channgePropertyCat(this.value)" />
      Sale 
      <input name="property_for" id="listfor" type="radio" value="Rent" onclick="channgePropertyCat(this.value)" />
      Rent 
      <input name="property_for" id="listfor" type="radio" value="PG" onclick="channgePropertyCat(this.value)" />
      PG </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="featured">* Featured</label>
    <div class="controls">
      <input name="featured" id="featured" type="radio" value="1"  />
      Yes
      <input name="featured" type="radio" id="featured" value="0" checked="checked" />
      No </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="category"> * Property Category</label>
    <!--<span id="spryselect1"> -->
    <div class="controls">
      <select name="category" id="category">
        <option value="">Select Category</option>
        
              
              
                 
                
              
              
        <option value="Residential Property">Residential Property</option>
        
              
              
                 
                
              
              
        <option value="Commercial Property">Commercial Property</option>
        
              
              
                 
                
              
              
        <option value="Agricultural land">Agricultural land</option>
        
              
              
                 
                
              
              
        <option value="Industrial Property">Industrial Property</option>
        
              
              
                 
              
            
            
      </select>
      <span class="selectRequiredMsg">Please select a Category.</span></div>
  </div>
  <div class="control-group">
    <label class="control-label" for="type">* Property Type</label>
    <div class="controls"> 
    <span id="sprytextfield1">
      <input name="type" id="type" value="" required="required" />
      <span class="textfieldRequiredMsg">A value is required.</span></span> </div>
  </div>
  
    <div class="control-group">

      <label class="control-label" for="build_area">* Built Up Area</label>
    <div class="controls"> 
     <span id="sprytextfield2">
  <input name="build_area" type="text" id="build_area" maxlength="8" value="" required="required"/>
      <span class="textfieldRequiredMsg">A value is required.</span></span><span id="spryselect2">
      <select name="build_unit" id="build_unit">
        
              
                   
                  
              
        <option value="">Unit Area</option>
        
              
                   	
                  
              
        <option value="Sq. Feet">Sq. Feet</option>
        
              
                   		
                  
              
        <option value="Cent">Cent</option>
        
              
                   		
                  
              
        <option value="Sq. Yards">Sq. Yards</option>
        
              
                   		
                  
              
        <option value="Acre">Acre</option>
        
              
                   		
                  
              
        <option value="Sq. Meter">Sq. Meter</option>
        
              
                   		
                  
              
        <option value="Bigha">Bigha</option>
        
              
                   		
                  
              
        <option value="Hectares">Hectares</option>
        
              
                   		
                  
              
        <option value="Guntha">Guntha</option>
        
              
                   		
                  
              
        <option value="Marla">Marla</option>
        
              
                   	
                
            
      </select>
      <span class="selectRequiredMsg">Please select an item.</span></span>
      </div></div>
   
  
  
    <div class="control-group">
    <label class="control-label" for="land_area">* Plot / Land Area</label>
    <div class="controls"> 
    <span id="sprytextfield3">
      <input name="land_area" type="text" id="land_area" maxlength="8" value="" required="required"/>
      <span class="textfieldRequiredMsg">A value is required.</span></span><span id="spryselect3">
      <select name="land_unit" id="land_unit" >
        
              
                   
                  
              
        <option value="">Unit Area</option>
        
              
                   	
                  
              
        <option value="Sq. Feet">Sq. Feet</option>
        
              
                   		
                  
              
        <option value="Cent">Cent</option>
        
              
                   		
                  
              
        <option value="Sq. Yards">Sq. Yards</option>
        
              
                   		
                  
              
        <option value="Acre">Acre</option>
        
              
                   		
                  
              
        <option value="Sq. Meter">Sq. Meter</option>
        
              
                   		
                  
              
        <option value="Bigha">Bigha</option>
        
              
                   		
                  
              
        <option value="Hectares">Hectares</option>
        
              
                   		
                  
              
        <option value="Guntha">Guntha</option>
        
              
                   		
                  
              
        <option value="Marla">Marla</option>
        
              
                   	
                
            
      </select>
      <span class="selectRequiredMsg">Please select an item.</span></span></div></div>
      
          <div class="control-group">
      <label class="control-label" for="carpet_area"> Carpet Area</label>
      <div class="controls">

   <input name="carpet_area" type="text" id="carpet_area" maxlength="8" value="" onkeypress="return disableEnterKey(event)" onblur="validate_form_field(this.value,'landarea')" />
      <select name="carpet_unit" id="carpet_unit">
        
                   
                  
        <option value="">Unit Area</option>
        
                   	
                  
        <option value="Sq. Feet">Sq. Feet</option>
        
                   		
                  
        <option value="Cent">Cent</option>
        
                   		
                  
        <option value="Sq. Yards">Sq. Yards</option>
        
                   		
                  
        <option value="Acre">Acre</option>
        
                   		
                  
        <option value="Sq. Meter">Sq. Meter</option>
        
                   		
                  
        <option value="Bigha">Bigha</option>
        
                   		
                  
        <option value="Hectares">Hectares</option>
        
                   		
                  
        <option value="Guntha">Guntha</option>
        
                   		
                  
        <option value="Marla">Marla</option>
        
                   	
                
      </select></div></div>

    <div class="control-group">
      <label class="control-label" for="Property Price">Property Price</label>
      <div class="controls">
<input name="price" type="text" id="price" maxlength="8" value="" onkeypress="return disableEnterKey(event)" onblur="validate_form_field(this.value,'landarea')" />
      <select name="currency " id="currency " onchange="if(this.value=='100000'){document.getElementById('optn').innerHTML='&lt;select name=\'price4\' style=\'width:80px\'&gt;&lt;option value=0&gt;Select&lt;/option&gt;&lt;option value=100&gt;Hundred&lt;/option&gt;&lt;option value=1000&gt;Thousand&lt;/option&gt;&lt;/select&gt;';}else{document.getElementById('optn').innerHTML='&lt;select name=\'price4\' id=\'price4\' style=\'width:80px\'&gt;&lt;option value=0&gt;Select&lt;/option&gt;&lt;option value=100&gt;Hundred&lt;/option&gt;&lt;option value=1000&gt;Thousand&lt;/option&gt;&lt;option value=100000&gt;Lac&lt;/option&gt;&lt;/select&gt;';}">
        
               
              
        <option value="">In Rupees</option>
        
               
              
        <option value="Thousand">Thousand</option>
        
               
              
        <option value="Lac">Lac</option>
        
               
              
        <option value="Crore">Crore</option>
        
               
            
      </select></div></div>
      
      
      
      
      
      
      
<div class="control-group">
      <label class="control-label" for="bedrooms">Bedrooms</label>
             <div class="controls">

       <select name="bedrooms" id="bedrooms">
        
          
               
              
          
        <option value="">Select one</option>
        
          
               	
              
          
        <option value="1">1</option>
        
          
               		
              
          
        <option value="2">2</option>
        
          
               		
              
          
        <option value="3">3</option>
        
          
               		
              
          
        <option value="4">4</option>
        
          
               		
              
          
        <option value="5">5</option>
        
          
               		
              
          
        <option value="6">6</option>
        
          
               		
              
          
        <option value="7">7</option>
        
          
               		
              
          
        <option value="8">8</option>
        
          
               		
              
          
        <option value="9">9</option>
        
          
               		
              
          
        <option value="10">10</option>
        
          
               		
              
          
        <option value="11">11</option>
        
          
               		
              
          
        <option value="12">12</option>
        
          
               		
              
          
        <option value="13">13</option>
        
          
               		
              
          
        <option value="14">14</option>
        
          
               		
              
          
        <option value="15">15</option>
        
          
               		
              
          
        <option value="16">16</option>
        
          
               		
              
          
        <option value="17">17</option>
        
          
               		
              
          
        <option value="18">18</option>
        
          
               		
              
          
        <option value="19">19</option>
        
          
               		
              
          
        <option value="20">20</option>
        
          
               		
              
          
        <option value="21">21</option>
        
          
               		
              
          
        <option value="22">22</option>
        
          
               		
              
          
        <option value="23">23</option>
        
          
               		
              
          
        <option value="24">24</option>
        
          
               		
              
          
        <option value="25">25</option>
        
          
               		
              
          
        <option value="26">26</option>
        
          
               		
              
          
        <option value="27">27</option>
        
          
               		
              
          
        <option value="28">28</option>
        
          
               		
              
          
        <option value="29">29</option>
        
          
               		
              
          
        <option value="30">30</option>
        
          
               		
              
          
        <option value="31">31</option>
        
          
               		
              
          
        <option value="32">32</option>
        
          
               		
              
          
        <option value="33">33</option>
        
          
               		
              
          
        <option value="34">34</option>
        
          
               		
              
          
        <option value="35">35</option>
        
          
               		
              
          
        <option value="36">36</option>
        
          
               		
              
          
        <option value="37">37</option>
        
          
               		
              
          
        <option value="38">38</option>
        
          
               		
              
          
        <option value="39">39</option>
        
          
               		
              
          
        <option value="40">40</option>
        
          
               		
              
          
        <option value="41">41</option>
        
          
               		
              
          
        <option value="42">42</option>
        
          
               		
              
          
        <option value="43">43</option>
        
          
               		
              
          
        <option value="44">44</option>
        
          
               		
              
          
        <option value="45">45</option>
        
          
               		
              
          
        <option value="46">46</option>
        
          
               		
              
          
        <option value="47">47</option>
        
          
               		
              
          
        <option value="48">48</option>
        
          
               		
              
          
        <option value="49">49</option>
        
          
               		
              
          
        <option value="50">50</option>
        
          
               		
              
          
        <option value="51">51</option>
        
          
               		
              
          
        <option value="52">52</option>
        
          
               		
              
          
        <option value="53">53</option>
        
          
               		
              
          
        <option value="54">54</option>
        
          
               		
              
          
        <option value="55">55</option>
        
          
               		
              
          
        <option value="56">56</option>
        
          
               		
              
          
        <option value="57">57</option>
        
          
               		
              
          
        <option value="58">58</option>
        
          
               		
              
          
        <option value="59">59</option>
        
          
               		
              
          
        <option value="60">60</option>
        
          
               		
              
          
        <option value="61">61</option>
        
          
               		
              
          
        <option value="62">62</option>
        
          
               		
              
          
        <option value="63">63</option>
        
          
               		
              
          
        <option value="64">64</option>
        
          
               		
              
          
        <option value="65">65</option>
        
          
               		
              
          
        <option value="66">66</option>
        
          
               		
              
          
        <option value="67">67</option>
        
          
               		
              
          
        <option value="68">68</option>
        
          
               		
              
          
        <option value="69">69</option>
        
          
               		
              
          
        <option value="70">70</option>
        
          
               		
              
          
        <option value="71">71</option>
        
          
               		
              
          
        <option value="72">72</option>
        
          
               		
              
          
        <option value="73">73</option>
        
          
               		
              
          
        <option value="74">74</option>
        
          
               		
              
          
        <option value="75">75</option>
        
          
               		
              
          
        <option value="76">76</option>
        
          
               		
              
          
        <option value="77">77</option>
        
          
               		
              
          
        <option value="78">78</option>
        
          
               		
              
          
        <option value="79">79</option>
        
          
               		
              
          
        <option value="80">80</option>
        
          
               		
              
          
        <option value="81">81</option>
        
          
               		
              
          
        <option value="82">82</option>
        
          
               		
              
          
        <option value="83">83</option>
        
          
               		
              
          
        <option value="84">84</option>
        
          
               		
              
          
        <option value="85">85</option>
        
          
               		
              
          
        <option value="86">86</option>
        
          
               		
              
          
        <option value="87">87</option>
        
          
               		
              
          
        <option value="88">88</option>
        
          
               		
              
          
        <option value="89">89</option>
        
          
               		
              
          
        <option value="90">90</option>
        
          
               		
              
          
        <option value="91">91</option>
        
          
               		
              
          
        <option value="92">92</option>
        
          
               		
              
          
        <option value="93">93</option>
        
          
               		
              
          
        <option value="94">94</option>
        
          
               		
              
          
        <option value="95">95</option>
        
          
               		
              
          
        <option value="96">96</option>
        
          
               		
              
          
        <option value="97">97</option>
        
          
               		
              
          
        <option value="98">98</option>
        
          
               		
              
          
        <option value="99">99</option>
        
          
               		
              
          
        <option value="100">100</option>
        
          
               	
            
        
      </select>
      No(s).</div></div>
      
          <div class="control-group">
      <label class="control-label" for="bathrooms">Bathrooms</label>
      <div class="controls">

      
  <select name="bathrooms" id="bathrooms">
        
          
               
              
          
        <option value="">Select one</option>
        
          
               	
              
          
        <option value="1">1</option>
        
          
               		
              
          
        <option value="2">2</option>
        
          
               		
              
          
        <option value="3">3</option>
        
          
               		
              
          
        <option value="4">4</option>
        
          
               		
              
          
        <option value="5">5</option>
        
          
               		
              
          
        <option value="6">6</option>
        
          
               		
              
          
        <option value="7">7</option>
        
          
               		
              
          
        <option value="8">8</option>
        
          
               		
              
          
        <option value="9">9</option>
        
          
               		
              
          
        <option value="10">10</option>
        
          
               		
              
          
        <option value="11">11</option>
        
          
               		
              
          
        <option value="12">12</option>
        
          
               		
              
          
        <option value="13">13</option>
        
          
               		
              
          
        <option value="14">14</option>
        
          
               		
              
          
        <option value="15">15</option>
        
          
               		
              
          
        <option value="16">16</option>
        
          
               		
              
          
        <option value="17">17</option>
        
          
               		
              
          
        <option value="18">18</option>
        
          
               		
              
          
        <option value="19">19</option>
        
          
               		
              
          
        <option value="20">20</option>
        
          
               		
              
          
        <option value="21">21</option>
        
          
               		
              
          
        <option value="22">22</option>
        
          
               		
              
          
        <option value="23">23</option>
        
          
               		
              
          
        <option value="24">24</option>
        
          
               		
              
          
        <option value="25">25</option>
        
          
               		
              
          
        <option value="26">26</option>
        
          
               		
              
          
        <option value="27">27</option>
        
          
               		
              
          
        <option value="28">28</option>
        
          
               		
              
          
        <option value="29">29</option>
        
          
               		
              
          
        <option value="30">30</option>
        
          
               		
              
          
        <option value="31">31</option>
        
          
               		
              
          
        <option value="32">32</option>
        
          
               		
              
          
        <option value="33">33</option>
        
          
               		
              
          
        <option value="34">34</option>
        
          
               		
              
          
        <option value="35">35</option>
        
          
               		
              
          
        <option value="36">36</option>
        
          
               		
              
          
        <option value="37">37</option>
        
          
               		
              
          
        <option value="38">38</option>
        
          
               		
              
          
        <option value="39">39</option>
        
          
               		
              
          
        <option value="40">40</option>
        
          
               		
              
          
        <option value="41">41</option>
        
          
               		
              
          
        <option value="42">42</option>
        
          
               		
              
          
        <option value="43">43</option>
        
          
               		
              
          
        <option value="44">44</option>
        
          
               		
              
          
        <option value="45">45</option>
        
          
               		
              
          
        <option value="46">46</option>
        
          
               		
              
          
        <option value="47">47</option>
        
          
               		
              
          
        <option value="48">48</option>
        
          
               		
              
          
        <option value="49">49</option>
        
          
               		
              
          
        <option value="50">50</option>
        
          
               		
              
          
        <option value="51">51</option>
        
          
               		
              
          
        <option value="52">52</option>
        
          
               		
              
          
        <option value="53">53</option>
        
          
               		
              
          
        <option value="54">54</option>
        
          
               		
              
          
        <option value="55">55</option>
        
          
               		
              
          
        <option value="56">56</option>
        
          
               		
              
          
        <option value="57">57</option>
        
          
               		
              
          
        <option value="58">58</option>
        
          
               		
              
          
        <option value="59">59</option>
        
          
               		
              
          
        <option value="60">60</option>
        
          
               		
              
          
        <option value="61">61</option>
        
          
               		
              
          
        <option value="62">62</option>
        
          
               		
              
          
        <option value="63">63</option>
        
          
               		
              
          
        <option value="64">64</option>
        
          
               		
              
          
        <option value="65">65</option>
        
          
               		
              
          
        <option value="66">66</option>
        
          
               		
              
          
        <option value="67">67</option>
        
          
               		
              
          
        <option value="68">68</option>
        
          
               		
              
          
        <option value="69">69</option>
        
          
               		
              
          
        <option value="70">70</option>
        
          
               		
              
          
        <option value="71">71</option>
        
          
               		
              
          
        <option value="72">72</option>
        
          
               		
              
          
        <option value="73">73</option>
        
          
               		
              
          
        <option value="74">74</option>
        
          
               		
              
          
        <option value="75">75</option>
        
          
               		
              
          
        <option value="76">76</option>
        
          
               		
              
          
        <option value="77">77</option>
        
          
               		
              
          
        <option value="78">78</option>
        
          
               		
              
          
        <option value="79">79</option>
        
          
               		
              
          
        <option value="80">80</option>
        
          
               		
              
          
        <option value="81">81</option>
        
          
               		
              
          
        <option value="82">82</option>
        
          
               		
              
          
        <option value="83">83</option>
        
          
               		
              
          
        <option value="84">84</option>
        
          
               		
              
          
        <option value="85">85</option>
        
          
               		
              
          
        <option value="86">86</option>
        
          
               		
              
          
        <option value="87">87</option>
        
          
               		
              
          
        <option value="88">88</option>
        
          
               		
              
          
        <option value="89">89</option>
        
          
               		
              
          
        <option value="90">90</option>
        
          
               		
              
          
        <option value="91">91</option>
        
          
               		
              
          
        <option value="92">92</option>
        
          
               		
              
          
        <option value="93">93</option>
        
          
               		
              
          
        <option value="94">94</option>
        
          
               		
              
          
        <option value="95">95</option>
        
          
               		
              
          
        <option value="96">96</option>
        
          
               		
              
          
        <option value="97">97</option>
        
          
               		
              
          
        <option value="98">98</option>
        
          
               		
              
          
        <option value="99">99</option>
        
          
               		
              
          
        <option value="100">100</option>
        
          
               	
            
        
      </select>
      No(s).</div></div>
  
      <div class="control-group">

        <label class="control-label" for="prop_img[]">* Property Images</label>
      <div class="controls">
<input name="prop_img[]" type="file" multiple="multiple" required="required" id="prop_img[]"/>
      <input type="hidden" name="dir" value="../../upload/uploaded-files" />
      <input type="hidden" name="path" value="/admin/upload/uploaded-files" />
      </div></div>

      
       <legend>Property Location:</legend>
      <div class="control-group">

        <label class="control-label" for="country">Country</label>
              <div class="controls">

<input name="country" type="text" id="country" onblur="validate_form_field(this.value,'prop_address')" onkeypress="return disableEnterKey(event)" value="INDIA" readonly="readonly" />

  </div></div>
  
        <div class="control-group">
        <label class="control-label" for="state"> * State</label>
              <div class="controls">

  

    <span id="spryselect4">
      <select name="state" id="state" onchange="get_prop_state_city(this.value,'http://www.realestateindia.com','/ajax/prop_state_city_drop_down.php?id=show_city_subcity&amp;&amp;onblur_func=Y', 'city_disp')" onblur="validate_form_field(this.value,'prop_state_id')">
        <option value="" selected="selected">Select State</option>
        <option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chandigarh">Chandigarh </option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
        <option value="Daman &amp; Diu">Daman &amp; Diu</option>
        <option value="Delhi">Delhi</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Lakshadweep">Lakshadweep</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram </option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Pondicherry">Pondicherry</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttaranchal">Uttaranchal</option>
        <option value="West Bengal">West Bengal</option>
        <option value="Goa">Goa</option>
      </select>
      <span class="selectRequiredMsg">Please select an item.</span></span>
      </div></div>
      
          <div class="control-group">
      <label class="control-label" for="city">* City</label>
            <div class="controls">

      <span id="sprytextfield4">
      <input name="city" id="city" value="" required="required" />
      <span class="textfieldRequiredMsg">A value is required.</span></span>
      </div></div>
      
          <div class="control-group">
                <label class="control-label" for="address">* Address</label>
      <div class="controls">
<span id="sprytextarea1">
      <textarea name="address" cols="70" id="address" required="required"></textarea>
        <br />
      Remaining Chrs.: <span id="countsprytextarea1">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></div></div>
      
          <div class="control-group">
      <label class="control-label" for="location">* Area / Location</label>
      <div class="controls">

  <span id="sprytextfield5">
      <input name="location" type="text" id="location" required="required" value="" size="70" maxlength="200" />
      <span class="textfieldRequiredMsg">A value is required.</span></span>
      </div></div>
      
      
         

  <legend>Description Title:</legend>
  
   <div class="control-group">
      <label class="control-label" for="title">* Property Title</label>
      <div class="controls">
 
   <span id="sprytextarea2">
      <textarea name="title" cols="70" id="title"></textarea>
      <br />
      Remaining Chrs.: <span id="countsprytextarea2">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></div></div>
      
      
      
      
         <div class="control-group">
      <label class="control-label" for="meta_desc">*  Meta Description</label>
      <div class="controls">

  <span id="sprytextarea3">
      <textarea name="meta_desc" cols="70" id="meta_desc"></textarea>
      <br />
      Remaining Chrs.: <span id="countsprytextarea3">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></div></div>
      
      <div class="control-group">
      <label class="control-label" for="meta_key">* Meta Keywords</label>
      <div class="controls">
      
 <span id="sprytextarea4">
      <textarea name="meta_key" cols="70" id="meta_key"></textarea>
      <br />
      Remaining Chrs.: <span id="countsprytextarea4">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></div></div>
      
      
       <div class="control-group">
      <label class="control-label" for="society_name">* Society Name </label>
      <div class="controls">
  <span id="sprytextfield6">
      <input name="society_name" type="text" id="society_name" value="" size="70" maxlength="50" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></div></div>
      
      <div class="control-group">
      <label class="control-label" for="prop_desc">* Property Description </label>
      <div class="controls">
      
      
  <span id="sprytextarea5">
      <textarea name="prop_desc" cols="70" rows="4" id="prop_desc" onblur="validate_form_field(this.value,'prop_desc')" onkeydown="textLimitCounter('prop_desc','limit_char',2000)" onkeyup="textLimitCounter('prop_desc','limit_char',2000)"></textarea>
      <br />
      Remaining Chrs.: <span id="countsprytextarea5">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></div></div>
      
      
  <legend>Property Contact Detail</legend>
  <div class="control-group">
      <label class="control-label" for="cont_name">*Name </label>
      <div class="controls">
  
     <span id="sprytextfield7">
        <input name="cont_name" type="text" id="cont_name" onblur="validate_form_field(this.value,'contname')" value="" size="70" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></div></div>


<div class="control-group">
      <label class="control-label" for="contact_no">* Contact No. </label>
      <div class="controls">

   <span id="sprytextfield8">
        <input name="contact_no" type="text" id="contact_no" onblur="validate_form_field(this.value,'contno')" value="" size="70" maxlength="18" />
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></div></div>
        
        
        <div class="control-group">
      <label class="control-label" for="email">* Email </label>
      <div class="controls">
        <span id="sprytextfield9">
        <input name="email" type="text" id="email" onblur="validate_form_field(this.value,'contno')" value="" size="70" />
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></div></div>
        
        
        <div class="control-group">
      <label class="control-label" for="cont_address">* Address </label>
      <div class="controls">
      <span id="sprytextarea6">
        <textarea name="cont_address" cols="70" rows="2" id="cont_address" onblur="validate_form_field(this.value,'contaddress')"></textarea>
        <br />
        Remaining Chrs.: <span id="countsprytextarea6">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></div></div>
        
        
   <legend>Optional Property Details:</legend>
   <div class="control-group">
      <label class="control-label" for="prop_age">Age of the Property </label>
      <div class="controls">
    <select name="prop_age" id="prop_age">
          
        
             	
            
        
          <option value="">Select one</option>
          
        
             			
            
        
          <option value="Under Construction">Under Construction</option>
          
        
             				
            
        
          <option value="New Construction">New Construction</option>
          
        
             				
            
        
          <option value="0 to 5 years">0 to 5 years</option>
          
        
             				
            
        
          <option value="5 to 10 years">5 to 10 years</option>
          
        
             				
            
        
          <option value="10 to 15 years">10 to 15 years</option>
          
        
             				
            
        
          <option value="15 to 20 years">15 to 20 years</option>
          
        
             				
            
        
          <option value="Above 20 years">Above 20 years</option>
          
        
             			
          
      
        </select></div></div>
        
        <div class="control-group">
      <label class="control-label" for="furnished">Furnished </label>
      <div class="controls">
        
    <select name="furnished" id="furnished">
          
        
             	
            
        
          <option value="">Select one</option>
          
        
             			
            
        
          <option value="Furnished">Furnished</option>
          
        
             				
            
        
          <option value="Unfurnished">Unfurnished</option>
          
        
             				
            
        
          <option value="Semi-Furnished">Semi-Furnished</option>
          
        
             			
          
      
        </select></div></div>
        
         <div class="control-group">
      <label class="control-label" for="transaction_type">Transaction Type </label>
      <div class="controls">
        
    <select name="transaction_type" id="transaction_type">
          
        
             	
            
        
          <option value="">Select one</option>
          
        
             			
            
        
          <option value="Resale Property">Resale Property</option>
          
        
             				
            
        
          <option value="New Property">New Property</option>
          
        
             			
          
      
        </select></div></div>
        
        
         <div class="control-group">
      <label class="control-label" for="prop_owner">Property Ownership </label>
      <div class="controls">
  <select name="prop_owner" id="prop_owner">
          
        
             	
            
        
          <option value="">Select one</option>
          
        
             	
            
        
          <option value="Individual">Individual</option>
          
        
             	
            
        
          <option value="others">others</option>
          
        
             	
            
        
          <option value="A Broker/Agent">A Broker/Agent</option>
          
        
             	
            
        
          <option value="A Builder/Promoter">A Builder/Promoter</option>
          
        
             	
          
      
      
        </select></div></div>
        
        
        <div class="control-group">
      <label class="control-label" for="floors">Total Number of Floors</label>
      <div class="controls">
   <select name="floors" id="floors">
       <option value="">Select one</option>
       
          <option value="1">1 </option>
           <option value="2">2 </option>
          
        
             	  		    
            
        
          <option value="3">3 </option>
          
        
             	  		    
            
        
          <option value="4">4 </option>
          
        
             	  		    
            
        
          <option value="5">5 </option>
          
        
             	  		    
            
        
          <option value="6">6 </option>
          

        
             	  		    
            
        
          <option value="7">7 </option>
          
        
             	  		    
            
        
          <option value="8">8 </option>
          
        
             	  		    
            
        
          <option value="9">9 </option>
          
        
             	  		    
            
        
          <option value="10">10 </option>
          
        
             	  		    
            
        
          <option value="11">11 </option>
          
        
             	  		    
            
        
          <option value="12">12 </option>
          
        
             	  		    
            
        
          <option value="13">13 </option>
          
        
             	  		    
            
        
          <option value="14">14 </option>
          
        
             	  		    
            
        
          <option value="15">15 </option>
          
        
             	  		    
            
        
          <option value="16">16 </option>
          
        
             	  		    
            
        
          <option value="17">17 </option>
          
        
             	  		    
            
        
          <option value="18">18 </option>
          
        
             	  		    
            
        
          <option value="19">19 </option>
          
        
             	  		    
            
        
          <option value="20">20 </option>
          
        
             	  		    
            
        
          <option value="21">21 </option>
          
        
             	  		    
            
        
          <option value="22">22 </option>
          
        
             	  		    
            
        
          <option value="23">23 </option>
          
        
             	  		    
            
        
          <option value="24">24 </option>
          
        
             	  		    
            
        
          <option value="25">25 </option>
          
        
             	  		    
            
        
          <option value="26">26 </option>
          
        
             	  		    
            
        
          <option value="27">27 </option>
          
        
             	  		    
            
        
          <option value="28">28 </option>
          
        
             	  		    
            
        
          <option value="29">29 </option>
          
        
             	  		    
            
        
          <option value="30">30 </option>
          
        
             	  		    
            
        
          <option value="31">31 </option>
          
        
             	  		    
            
        
          <option value="32">32 </option>
          
        
             	  		    
            
        
          <option value="33">33 </option>
          
        
             	  		    
            
        
          <option value="34">34 </option>
          
        
             	  		    
            
        
          <option value="35">35 </option>
          
        
             	  		    
            
        
          <option value="36">36 </option>
          
        
             	  		    
            
        
          <option value="37">37 </option>
          
        
             	  		    
            
        
          <option value="38">38 </option>
          
        
             	  		    
            
        
          <option value="39">39 </option>
          
        
             	  		    
            
        
          <option value="40">40 </option>
          
        
             	  		    
            
        
          <option value="41">41 </option>
          
        
             	  		    
            
        
          <option value="42">42 </option>
          
        
             	  		    
            
        
          <option value="43">43 </option>
          
        
             	  		    
            
        
          <option value="44">44 </option>
          
        
             	  		    
            
        
          <option value="45">45 </option>
          
        
             	  		    
            
        
          <option value="46">46 </option>
          
        
             	  		    
            
        
          <option value="47">47 </option>
          
        
             	  		    
            
        
          <option value="48">48 </option>
          
        
             	  		    
            
        
          <option value="49">49 </option>
          
        
             	  		    
            
        
          <option value="50">50 </option>
          
        
             	  		
          
      
        </select></div></div>
        
           <div class="control-group">
      <label class="control-label" for="facing">Facing</label>
      <div class="controls">
        
    <select name="facing" id="facing">
          
        
             	
            
        
          <option value="0" selected="selected">Select</option>
          
        
             	
            
        
          <option value="East">East</option>
          
        
             	
            
        
          <option value="South">South</option>
          
        
             	
            
        
          <option value="West">West</option>
          
        
             	
            
        
          <option value="North">North</option>
          
        
             	
            
        
          <option value="South East">South East</option>
          
        
             	
            
        
          <option value="South West">South West</option>
          
        
             	
            
        
          <option value="North West">North West</option>
          
        
             	
            
        
          <option value="North East">North East</option>
          
        
             	
          
      
        </select></div></div>
   <div class="control-group">
      <label class="control-label" for="on_floor"> Property On Floor</label>
      <div class="controls">
<select name="on_floor" id="on_floor">
          
        
             	
            
        
          <option value="">Select</option>
          
        
             	
            
        
          <option value="Ground">Ground</option>
          
        
             			
            
        
          <option value="1">1 </option>
          
        
             				
            
        
          <option value="2">2 </option>
          
        
             				
            
        
          <option value="3">3 </option>
          
        
             				
            
        
          <option value="4">4 </option>
          
        
             				
            
        
          <option value="5">5 </option>
          
        
             				
            
        
          <option value="6">6 </option>
          
        
             				
            
        
          <option value="7">7 </option>
          
        
             				
            
        
          <option value="8">8 </option>
          
        
             				
            
        
          <option value="9">9 </option>
          
        
             				
            
        
          <option value="10">10 </option>
          
        
             				
            
        
          <option value="11">11 </option>
          
        
             				
            
        
          <option value="12">12 </option>
          
        
             				
            
        
          <option value="13">13 </option>
          
        
             				
            
        
          <option value="14">14 </option>
          
        
             				
            
        
          <option value="15">15 </option>
          
        
             				
            
        
          <option value="16">16 </option>
          
        
             				
            
        
          <option value="17">17 </option>
          
        
             				
            
        
          <option value="18">18 </option>
          
        
             				
            
        
          <option value="19">19 </option>
          
        
             				
            
        
          <option value="20">20 </option>
          
        
             				
            
        
          <option value="21">21 </option>
          
        
             				
            
        
          <option value="22">22 </option>
          
        
             				
            
        
          <option value="23">23 </option>
          
        
             				
            
        
          <option value="24">24 </option>
          
        
             				
            
        
          <option value="25">25 </option>
          
        
             				
            
        
          <option value="26">26 </option>
          
        
             				
            
        
          <option value="27">27 </option>
          
        
             				
            
        
          <option value="28">28 </option>
          
        
             				
            
        
          <option value="29">29 </option>
          
        
             				
            
        
          <option value="30">30 </option>
          
        
             				
            
        
          <option value="31">31 </option>
          
        
             				
            
        
          <option value="32">32 </option>
          
        
             				
            
        
          <option value="33">33 </option>
          
        
             				
            
        
          <option value="34">34 </option>
          
        
             				
            
        
          <option value="35">35 </option>
          
        
             				
            
        
          <option value="36">36 </option>
          
        
             				
            
        
          <option value="37">37 </option>
          
        
             				
            
        
          <option value="38">38 </option>
          
        
             				
            
        
          <option value="39">39 </option>
          
        
             				
            
        
          <option value="40">40 </option>
          
        
             				
            
        
          <option value="41">41 </option>
          
        
             				
            
        
          <option value="42">42 </option>
          
        
             				
            
        
          <option value="43">43 </option>
          
        
             				
            
        
          <option value="44">44 </option>
          
        
             				
            
        
          <option value="45">45 </option>
          
        
             				
            
        
          <option value="46">46 </option>
          
        
             				
            
        
          <option value="47">47 </option>
          
        
             				
            
        
          <option value="48">48 </option>
          
        
             				
            
        
          <option value="49">49 </option>
          
        
             				
            
        
          <option value="50">50 </option>
          
        
             			
          
      
        </select></div></div>
        
        
        
      <div class="control-group">
      <label class="control-label" for="parking">No. of Car Parking</label>
      <div class="controls">
    <select name="parking" id="parking">
         <option value="0">Select</option>
         
          <option value="1">1 </option>
          
          <option value="2">2 </option>
          
        
             				
            
        
          <option value="3">3 </option>
          
        
             				
            
        
          <option value="4">4 </option>
          
        
             				
            
        
          <option value="5">5 </option>
          
        
             				
            
        
          <option value="6">6 </option>
          
        
             				
            
        
          <option value="7">7 </option>
          
        
             				
            
        
          <option value="8">8 </option>
          
        
             				
            
        
          <option value="9">9 </option>
          
        
             				
            
        
          <option value="10">10 </option>
          
        
             			
          
      
        </select></div></div>
        
        
    <legend>Land Mark:</legend>
    
    
      <div class="control-group">
      <label class="control-label" for="hospital">Hospitals</label>
      <div class="controls">
    <input name="hospital" id="hospital" maxlength="100" type="text" value="" />
        kms</div></div>
        
          <div class="control-group">
      <label class="control-label" for="airport">Airport</label>
      <div class="controls">
   <input name="airport" id="airport" maxlength="100" type="text" value="" />
        kms</div></div>
        
        
          <div class="control-group">
      <label class="control-label" for="railway">Railway Station</label>
      <div class="controls">
    
    <input name="railway" id="railway" maxlength="100" type="text" value="" />
        kms</div></div>
        
        
          <div class="control-group">
      <label class="control-label" for="school">School</label>
      <div class="controls">
    <input name="school" id="school" maxlength="100" type="text" value="" />
        kms</div></div>
        
    
   
   
    <legend>Amenities:</legend>
      <table width="98%" border="1" bordercolor="#CCCCCC">
          <tbody>
            <tr>
              <td width="5%" align="center"><input name="power" type="checkbox" id="power" value="1" /></td>
              <td width="28%"><label class="control-label" for="power">Power Backup</label></td>
              <td width="5%" align="center"><input name="water" type="checkbox" id="water" value="1" /></td>
              <td width="28%">Water Storage</td>
              <td width="5%" align="center"><input name="lift" type="checkbox" id="lift" value="1" /></td>
              <td>Lift</td>
            </tr>
            <tr>
              <td align="center"><input name="res_parking" type="checkbox" id="res_parking" value="1" /></td>
              <td>Reserve Parking</td>
              <td align="center"><input name="security" type="checkbox" id="security" value="1" /></td>
              <td>Security</td>
              <td align="center"><input name="maintenance" type="checkbox" id="maintenance" value="1" /></td>
              <td>Maintenance Staff</td>
            </tr>
            <tr>
              <td align="center"><input name="gym" type="checkbox" id="gym" value="1" /></td>
              <td>GYM</td>
              <td align="center"><input name="park" type="checkbox" id="park" value="1" /></td>
              <td>Park</td>
              <td align="center"><input name="tarrace" type="checkbox" id="tarrace" value="1" /></td>
              <td>Private Tarrace</td>
            </tr>
            <tr>
              <td align="center"><input name="swimming" type="checkbox" id="swimming" value="1" /></td>
              <td>Swimming Pool</td>
              <td align="center"><input name="quarters" type="checkbox" id="quarters" value="1" /></td>
              <td>Servant Quarters</td>
              <td align="center"><input name="club" type="checkbox" id="club" value="1" /></td>
              <td>Club House</td>
            </tr>
            <tr></tr>
          </tbody>
        </table>
        <br />
        <input name="user_id" type="hidden" id="user_id" value="1" />
        <input name="insert" type="hidden" id="insert" value="newproperty" />
      <input name="Submit" type="submit" id="Submit" style="width:150px; height:30px" value="Submit" />
    
</form>