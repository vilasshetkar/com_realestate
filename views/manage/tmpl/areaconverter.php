<?php
// no direct access
defined('_JEXEC') or die;
JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.bxSlider.min.js');
JHtml::stylesheet(Juri::base() . 'components/com_realestate/css/prop-view.css');
$document = JFactory::getDocument();
 
// Add Javascript directly here
$document->addScriptDeclaration('
		
		function clearForm1()
		
		{
		
		  document.unit_convert.reset();
		
		}
		function convert() {	
		
			var base=document.unit_convert;
			if(isNaN(base.initial_value.value) || base.initial_value.value=="") {
				alert("Please enter a number");
			}
			else {
				var num=base.initial_value.value/base.units.value;
				var num1 = Math.round(num * 100) / 100;
				base.new_value.value=num1;
			}
		}
		
		function cleantext() {
			document.unit_convert.initial_value.value="";
			document.unit_convert.initial_value.focus();
		}
		

');
?>
<h2>Area Conversion to Square Feets</h2>
<hr class="divider" />

<form name="unit_convert" method="post" action="">
		<table class="w90 m0a bdrAll">
		<tbody>		
		<tr>
		<td class="headVr ar p5px w40">Enter Area : </td>
		<td class="data p5px"><input type="text" onclick="cleantext();" value="0" name="initial_value" class="input w30"></td>
		</tr>
		
		<tr>
		<td class="headVr ar p5px w40">Select Unit : </td>
		<td class="data p5px">
		<select name="units" class="input w33"> 
		<option value="1.0" selected="selected">Square Feets</option> 
		<option value="0.1111111111111111000">Sq. Yards</option> 
		<option value="0.0929030400000000000">Sq. Meters</option> 
		<option value="0.00041666666666667">Ground</option> 
		<option value="0.0000229568411386593">Acres</option> 
		<option value="0.0000573921030000000">Bigha</option> 
		<option value="0.0000092903040000000">Hectares</option> 
		</select>
		</td>
		</tr>
			
		<tr>
		<td width="40%">&nbsp;</td>
		<td class="p5px"><input type="text" class="input w30" disabled="disabled" value="0" name="new_value">Sq. feets </td>
		</tr>
		
		<tr>
		<td>&nbsp;</td>
		<td class="p5px"><input type="button" value="Calculate" name="calculate" class="button b" onclick="convert();">
		<input type="button" name="button" id="button2" value="Clear" class="button b" onclick="javascript:clearForm1();"></td>
		</tr></tbody></table></form>
	
