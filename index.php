<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Basic Editor</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Gopi Ramena IIT Kanpur" />
<meta name="keywords" content="gopi, ramena, gopi ramena, student, student search iitk, student search, iit kanpur, iitk, developer, coder, programmer, web app developer" />
<script type="text/javascript" src="pixastic.custom.js"></script>

<script type="text/javascript">

function resetDemo() {
	Pixastic.revert(document.getElementById("demoimage"));
}

function brighten1() {
	Pixastic.process(document.getElementById("demoimage"), "brightness", {"brightness":document.getElementById("value-brightness").value,"contrast":document.getElementById("value-contrast").value});
}

function blur1() {
	Pixastic.process(document.getElementById("demoimage"), "blurfast", {"amount":document.getElementById("value-blur").value});
}

function colors1() {
	Pixastic.process(document.getElementById("demoimage"), "coloradjust", {"red":document.getElementById("value-red").value,"green":document.getElementById("value-green").value,"blue":document.getElementById("value-blue").value});
}

function desaturate1() {
	Pixastic.process(document.getElementById("demoimage"), "desaturate");
}

function edges1() {
	Pixastic.process(document.getElementById("demoimage"), "edges", {"mono":document.getElementById("value-mono").checked,"invert":document.getElementById("value-invert").checked});
}

function emboss1() {
	Pixastic.process(document.getElementById("demoimage"), "emboss", {
		"strength" : document.getElementById("value-strength").value,
		"greyLevel" : document.getElementById("value-greyLevel").value,
		"direction" : document.getElementById("value-direction").value,
		"blend" : document.getElementById("value-blend").checked
	});
}

function fliphorizon1() {
	Pixastic.process(document.getElementById("demoimage"), "fliph");
}

function flipvert1() {
	Pixastic.process(document.getElementById("demoimage"), "flipv");
}

function glow1() {
	Pixastic.process(document.getElementById("demoimage"), "glow", {
		"amount" : document.getElementById("value-glow").value,
		"radius" : document.getElementById("value-radius").value
	});
}

function hsl1() {
	Pixastic.process(document.getElementById("demoimage"), "hsl", {
		"hue" : document.getElementById("value-hue").value,
		"saturation" : document.getElementById("value-saturation").value,
		"lightness" : document.getElementById("value-lightness").value
	});
}

function invert1() {
	Pixastic.process(document.getElementById("demoimage"), "invert");
}

function lighten1() {
	Pixastic.process(document.getElementById("demoimage"), "lighten", {
		"amount" : document.getElementById("value-lighten").value
	});
}

function mosaic1() {
	Pixastic.process(document.getElementById("demoimage"), "mosaic", {
		"blockSize" : document.getElementById("value-blockSize").value
	});
}

function noise1() {
	Pixastic.process(document.getElementById("demoimage"), "noise", {
		"mono" : "false",
		"amount" : document.getElementById("value-noise").value,
		"strength" : document.getElementById("value-noiseStrength").value
	});
}

function posterize1() {
	Pixastic.process(document.getElementById("demoimage"), "posterize", {
		"levels" : document.getElementById("value-levels").value
	});
}

function pointillize1() {
	Pixastic.process(document.getElementById("demoimage"), "pointillize", {
		"radius" : document.getElementById("value-pointRadius").value,
		"density" : document.getElementById("value-pointDensity").value,
		"noise" : document.getElementById("value-pointNoise").value,
		"transparent" : document.getElementById("value-pointTransparent").checked
	});
}

function sepia1() {
	Pixastic.process(document.getElementById("demoimage"), "sepia", {
		"mode" : document.getElementById("value-mode").checked ? 1 : 0
	});
}

function sharpen1() {
	Pixastic.process(document.getElementById("demoimage"), "sharpen", {
		"amount" : document.getElementById("value-sharpenAmount").value
	})
}

function solarize1() {
	Pixastic.process(document.getElementById("demoimage"), "solarize");
}
</script>


<style type="text/css">
#header
{
position:fixed;
width:100px;
top:5px;
left:640px;
}
td
{
	width:100px;
}
</style>
</head>
<body>

<div id="header">
<b>BASIC EDITS</b>
</div>

<div class="demo-options">
<table cellpadding="20" cellspacing="20" border="2" align="left" style="float:left; height:630px;">

<tr><td><div>Brightness: <input type="range" id="value-brightness" value="30" min="-150" max="150" step="5" /></div>
<div>Contrast: <input type="range" id="value-contrast" value="0.3" min="-1" max="3" step="0.1" /></div>
<input type="button" onclick="brighten1();" value="Adjust Brightness &amp; Contrast" /></td>

<td><div>Amount: <input type="range" id="value-blur" value="0.5" min="0" max="5" step="0.1" /></div>
<input type="button" onclick="blur1();" value="Blur" /></td>
<!--
<td><div>Red: <input type="range" id="value-red" value="0.5" min="-1" max="1" step="0.05" /></div>
<div>Green: <input type="range" id="value-green" value="0.0" min="-1" max="1" step="0.05" /></div>
<div>Blue: <input type="range" id="value-blue" value="0.0" min="-1" max="1" step="0.05" /></div>
<input type="button" onclick="colors1();" value="Adjust Colours" /></td> --></tr>

<tr><td><div>Strength: <input type="range" id="value-strength" value="1" min="0" max="10" step="0.2" /></div>
<div>Grey level: <input type="range" id="value-greyLevel" value="179" min="0" max="255" step="5" /></div>
<div>Direction: <select id="value-direction">
<option value="topleft">Top left</option>
<option value="top">Top</option>
<option value="topright">Top right</option>
<option value="right">Right</option>
<option value="bottomright">Bottom right</option>
<option value="bottom">Bottom</option>
<option value="bottomleft">Bottom left</option>
<option value="left">Left</option>
</select></div>
<div>Blend with original: <input type="checkbox" id="value-blend" checked="checked" /></div>
<input type="button" onclick="emboss1()" value="Emboss" /></td>

<td><input type="button" onclick="fliphorizon1()" value="Flip Horizontally" /><br/><br/>
<input type="button" onclick="flipvert1()" value="Flip Vertically" /><br/><br/>
<input type="button" onclick="invert1();" value="Invert Image" /></td>
<!--
<td><div>Glow Amount: <input type="range" id="value-glow" value="0.3" min="0" max="1" step="0.02" /></div>
<div>Radius: <input type="range" id="value-radius" value="0.2" min="0" max="1" step="0.02" /></div>
<input type="button" onclick="glow1();" value="Glow" /></td> --></tr>

<tr><td><div>Hue: <input type="range" id="value-hue" value="72" min="-180" max="180" step="10" /></div>
<div>Saturation: <input type="range" id="value-saturation" value="-20" min="-100" max="100" step="5" /></div>
<div>Lightness: <input type="range" id="value-lightness" value="0" min="-100" max="100" step="5" /></div>
<input type="button" onclick="hsl1();" value="Adjust HSL" /></td>

<td><div>Noise Amount: <input type="range" id="value-noise" value="0.5" min="0" max="1" step="0.02" /></div>
<div>Strength: <input type="range" id="value-noiseStrength" value="0.5" min="0" max="1" step="0.02" /></div>
<input type="button" onclick="noise1();" value="Add Noise" /></td>
<!--
<td><div>Levels: <input type="range" id="value-levels" value="6" min="1" max="32" step="1" /></div>
<input type="button" onclick="posterize1();" value="Posterize" /></td> --></tr>

</table>
<table cellpadding="20" cellspacing="20" border="2" align="right" style="float:right; height:630px;">
<tr><td><input type="button" onclick="desaturate1();" value="Desaturate (Black &amp; White)" /><br/><br/>
<input type="button" onclick="solarize1();" value="Solarize" /></td>

<td><div>Mono: <input type="checkbox" id="value-mono" /></div>
<div>Invert: <input type="checkbox" id="value-invert" /></div>
<input type="button" onclick="edges1()" value="Edge Detection" /></td></tr>

<tr><td><div>block Size: <input type="range" id="value-blockSize" value="6" min="1" max="100" step="1" /></div>
<input type="button" onclick="mosaic1();" value="Mosaic" /></td>

<td><div>Lighten Amount: <input type="range" id="value-lighten" value="0.4" min="-1" max="1" step="0.1" /></div>
<input type="button" onclick="lighten1();" value="Lighten" /></td></tr>

<tr><td><div>Alternative mode: <input type="checkbox" id="value-mode" /></div>
<input type="button" onclick="sepia1();" value="Apply sepia toning" /><br/><br/></td>

<td><div>Sharpen amount: <input type="range" id="value-sharpenAmount" value="0.5" min="0" max="1" step="0.02" /></div>
<input type="button" onclick="sharpen1();" value="Sharpen" /></td></tr>

<td><div>Red: <input type="range" id="value-red" value="0.5" min="-1" max="1" step="0.05" /></div>
<div>Green: <input type="range" id="value-green" value="0.0" min="-1" max="1" step="0.05" /></div>
<div>Blue: <input type="range" id="value-blue" value="0.0" min="-1" max="1" step="0.05" /></div>
<input type="button" onclick="colors1();" value="Adjust Colours" /></td>

<td><div>Glow Amount: <input type="range" id="value-glow" value="0.3" min="0" max="1" step="0.02" /></div>
<div>Radius: <input type="range" id="value-radius" value="0.2" min="0" max="1" step="0.02" /></div>
<input type="button" onclick="glow1();" value="Glow" /></td></tr>
</table>
</div><br/><br/>

<div id="image" align="center">
<input type="button" onclick="resetDemo();" value="RESET"/><br/><br/>
<img src="demo_small.jpg" id="demoimage" height="250" width="300" alt="Image not loaded... Refresh the page"/>
</div><br/>

<script type="text/javascript">
function sendData()
{
var canvasData=demoimage.toDataURL("image/png");
var ajax=new XMLHttpRequest();
ajax.open('POST','save.php',false);
ajax.setRequestHeader('Content-Type', 'application/upload');
ajax.send(canvasData);
setTimeout("window.location.href='index2.php'",1000);
}
</script>
<br/><div id="next" align="center"><input type="button" onclick="sendData()" value="CONTINUE" /></div><br/><br/><br/>

<div align="center"><table cellpadding="20" cellspacing="20" border="2" style="width:300px; height:165px;">
<tr><td><div>Levels: <input type="range" id="value-levels" value="6" min="1" max="32" step="1" /></div>
<input type="button" onclick="posterize1();" value="Posterize" /></td></tr>
</table></div>

</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28288340-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
