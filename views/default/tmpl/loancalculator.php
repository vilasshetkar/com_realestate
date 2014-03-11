<?php
// no direct access
defined('_JEXEC') or die;
JHtml::script(Juri::base() . 'components/com_realestate/js/jquery.bxSlider.min.js');
JHtml::stylesheet(Juri::base() . 'components/com_realestate/css/prop-view.css');
$document = JFactory::getDocument();
 
// Add Javascript directly here
$document->addScriptDeclaration('
function checnum(as)
{
	var dd = as.value;
	if(isNaN(dd))
	{
		dd = dd.substring(0,(dd.length-1));
		as.value = dd;
	}		
}
function loan()
{
	var a = document.first.aa.value;
	var b = document.first.bb.value;
	var c = document.first.cc.value;
	var n = c * 12;
	var r = b/(12*100);
	var p = (a * r *Math.pow((1+r),n))/(Math.pow((1+r),n)-1);
	var prin = Math.round(p*100)/100;
	document.first.r1.value = prin;
	var mon = Math.round(((n * prin) - a)*100)/100;
	document.first.r2.value = mon;
	var tot = Math.round((mon/n)*100)/100;
	document.first.r3.value = tot;
	for(var i=0;i<n;i++)
	{
		var z = a * r * 1;
		var q = Math.round(z*100)/100;
		var t = p - z;
		var w = Math.round(t*100)/100;
		var e = a-t;
		var l = Math.round(e*100)/100;
		a=e;
	}
}
');
?>
<h2>EMI Calculator</h2>
<hr class="divider" />
		<form name="first" class="form-horizontal">
			<div class="control-group">
            <label class="control-label" for="aa">Loan Amount:</label>
            <div class="controls">
            <input name="aa" id="aa" type="text" size="15" onkeyup="checnum(this)" >
			</div>
            </div>
            
            <div class="control-group">
            <label class="control-label" for="bb">Interest Rates:</label>
            <div class="controls">
            <input name="bb" id="bb" type="text" size=15 onkeyup="checnum(this)" >
			</div></div>
            
            <div class="control-group">
            <label class="control-label" for="cc">Term(Years):</label>
            <div class="controls">
            <input name="cc" id="cc" type="text" size=15 onkeyup="checnum(this)">
            </div></div>
            <div class="control-group">
            <div class="controls">
			<input type="button" name="ss" id="ss" value="Calculate" onclick="loan()" class="calc btn-primary" />
            </div>
            </div>

<hr class="divider" />
			<h3>Results:</h3>
<hr class="divider" />

            <div class="control-group">
			<label class="control-label" for="r1">Monthly Payment(EMI):</label>
            <div class="controls">
            <input name="r1" id="r1" type="text" readonly >
            </div></div>
            <div class="control-group">
			<label class="control-label" for="r2">Monthly Avg. Interest:</label>
            <div class="controls">
            <input name="r2" id="r2" type="text" readonly >
            </div></div>
            <div class="control-group">
			<label class="control-label" for="r3">Monthly Interest:</label>
            <div class="controls">
            <input name="r3" id="r3" type="text" readonly >
            </div></div>
        </form>
	</td>
</table>
