<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Basic Editor</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Gopi Ramena IIT Kanpur" />
<meta name="keywords" content="gopi, ramena, gopi ramena, student, student search iitk, student search, iit kanpur, iitk, developer, coder, programmer, web app developer" />
</head>

<body>

<div id="header" align="center"><b>SELECT YOUR FRAME</b><br/>
OR<br/>
<a href="index1.php?frame=noframe">Skip this step</a>
</div><br/><br/><br/>
<div id="frame_display">
<table cellpadding="20" cellspacing="20" align="center">
<?php

$directory = "frames/";
 
//get all image files with a .jpg extension.
$images = glob($directory . "*.jpg");
$c=0; 
echo "<tr>";

//print each file name
foreach($images as $image)
{
if($c==3)
{
	$c=0;
	echo "</tr><tr>";
}
?>
<td><a href="index1.php?frame=<?php echo $image ?>">
<img src="<?php echo $image ?>" height="200" width="200" border="1" /></a></td>

<?php
$c++;
}
echo "</tr>";
?>
</table>
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