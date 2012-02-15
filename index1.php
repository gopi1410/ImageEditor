<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
if(isset($_GET['frame']))
	$frame=$_GET['frame'];
else
	header("Location: index.php");
?>
<head>
<title>Basic Editor</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Gopi Ramena IIT Kanpur" />
<meta name="keywords" content="gopi, ramena, gopi ramena, student, student search iitk, student search, iit kanpur, iitk, developer, coder, programmer, web app developer" />

<style>
            body {
                margin: 0px;
                padding: 0px;
            }
            
            canvas {
                border: 1px solid #9C9898;
            }
        </style>
		
		<?php
		if(substr($frame,0,7)=="frames/")
		{
		?>
		
        <script type="text/javascript" src="kinetic.js"></script>
        <script>
            function loadImages(sources, callback){
                var images = {};
                var loadedImages = 0;
                var numImages = 0;
                for (var src in sources) {
                    numImages++;
                }
                for (var src in sources) {
                    images[src] = new Image();
                    images[src].onload = function(){
                        if (++loadedImages >= numImages) {
                            callback(images);
                        }
                    };
                    images[src].src = sources[src];
                }
            }
            
            function addCornerHandles(shape){
                var stage = shape.stage;
                
                shape.handles = [];
                
                // define box drawing function for corner handles
                var boxFunc = function(){
                    var context = this.getContext();
                    context.fillStyle = "red";
                    context.fillRect(0, 0, 10, 10);
                };
                
                for (var n = 0; n < 4; n++) {
                    (function(){
                        var i = n;
                        var box = new Kinetic.Shape(function(){
                            var context = this.getContext();
                            context.beginPath();
                            context.fillStyle = "red";
                            context.rect(0, 0, 10, 10);
                            context.fill();
                            context.closePath();
                        });
                        
                        box.img = shape;
                        box.index = i;
                        shape.handles.push(box);
                        
                        box.addEventListener("mousedown", function(evt){
                            box.img.resizeCorner = box;
                        });
                        
                        stage.add(box);
                    })();
                }
            }
            
            function positionCornerHandles(shape){
                handles = shape.handles;
                handles[0].x = shape.x - shape.width / 2;
                handles[0].y = shape.y - shape.height / 2;
                
                handles[1].x = shape.x + shape.width / 2 - 10;
                handles[1].y = shape.y - shape.height / 2;
                
                handles[2].x = shape.x + shape.width / 2 - 10;
                handles[2].y = shape.y + shape.height / 2 - 10;
                
                handles[3].x = shape.x - shape.width / 2;
                handles[3].y = shape.y + shape.height / 2 - 10;
                
                for (var n = 0; n < handles.length; n++) {
                    handles[n].moveToTop();
                    handles[n].draw();
                }
            }
            
            function resizeImage(shape){
                var stage = shape.stage;
                var mousePos = stage.getMousePos();
                var newImageWidth, newImageHeight;
                var index = shape.resizeCorner.index;
                
                switch (index) {
                    case 0:
                        newImageWidth = shape.x - mousePos.x + shape.width / 2;
                        newImageHeight = shape.y - mousePos.y + shape.height / 2;
                        break;
                    case 1:
                        newImageWidth = mousePos.x - shape.x + shape.width / 2;
                        newImageHeight = shape.y - mousePos.y + shape.height / 2;
                        break;
                    case 2:
                        newImageWidth = mousePos.x - shape.x + shape.width / 2;
                        newImageHeight = mousePos.y - shape.y + shape.height / 2;
                        break;
                    case 3:
                        newImageWidth = shape.x - mousePos.x + shape.width / 2;
                        newImageHeight = mousePos.y - shape.y + shape.height / 2;
                        break;
                }
                
                shape.width = newImageWidth;
                shape.scale.x = newImageWidth / shape.origWidth;
                shape.height = newImageHeight;
                shape.scale.y = newImageHeight / shape.origHeight;
                shape.draw();
                positionCornerHandles(shape);
            }
            
            function initStage(images){
                var stage = new Kinetic.Stage("container", 578, 400);
                var container = stage.getContainer();
                var offsetX = 0;
                var offsetY = 0;
                var imgDragging = undefined;
                
                // darth vader
                var darthVaderWidth = 578;
                var darthVaderHeight = 400;
                var darthImgFunc = Kinetic.drawImage(images.darthVader, -100, -69, darthVaderWidth, darthVaderHeight);
                var darthVaderImg = new Kinetic.Shape(darthImgFunc);
                
                /*darthVaderImg.addEventListener("mousedown", function(){
                    var mousePos = stage.getMousePos();
                    darthVaderImg.moveToTop();
                    offsetX = mousePos.x - darthVaderImg.x;
                    offsetY = mousePos.y - darthVaderImg.y;
                    imgDragging = darthVaderImg;
                    
                    positionCornerHandles(imgDragging);
                });
                darthVaderImg.addEventListener("mouseover", function(){
                    document.body.style.cursor = "pointer";
                });
                darthVaderImg.addEventListener("mouseout", function(){
                    document.body.style.cursor = "default";
                }); */
                
                darthVaderImg.width = darthVaderWidth;
                darthVaderImg.height = darthVaderHeight;
                darthVaderImg.origWidth = darthVaderWidth;
                darthVaderImg.origHeight = darthVaderHeight;
                darthVaderImg.x = 100;
                darthVaderImg.y = 69;
                
                stage.add(darthVaderImg);
                
                // add and position corner handles
                //addCornerHandles(darthVaderImg);
                //positionCornerHandles(darthVaderImg);
                
                // yoda with INITIAL WIDTH=92 & HEIGHT=104
                var yodaWidth = 92;
                var yodaHeight = 104;
                var yodaImgFunc = Kinetic.drawImage(images.yoda, -46, -52, yodaWidth, yodaHeight);
                var yodaImg = new Kinetic.Shape(yodaImgFunc);
                
                yodaImg.addEventListener("mousedown", function(){
                    var mousePos = stage.getMousePos();
                    yodaImg.moveToTop();
                    offsetX = mousePos.x - yodaImg.x;
                    offsetY = mousePos.y - yodaImg.y;
                    imgDragging = yodaImg;
                    
                    positionCornerHandles(imgDragging);
                });
                yodaImg.addEventListener("mouseover", function(){
                    document.body.style.cursor = "pointer";
                });
                yodaImg.addEventListener("mouseout", function(){
                    document.body.style.cursor = "default";
                });
                
                yodaImg.width = yodaWidth;
                yodaImg.height = yodaHeight;
                yodaImg.origWidth = yodaWidth;
                yodaImg.origHeight = yodaHeight;
                yodaImg.x = 290;
                yodaImg.y = 180;
                
                stage.add(yodaImg);
                
                // add and position corner handles
                addCornerHandles(yodaImg);
                positionCornerHandles(yodaImg);
                
                container.addEventListener("mouseup", function(){
                    imgDragging = undefined;
                    
                    darthVaderImg.resizeCorner = undefined;
                    yodaImg.resizeCorner = undefined;
                }, false);
                
                container.addEventListener("mousemove", function(){
                    if (imgDragging) {
                        var mousePos = stage.getMousePos();
                        imgDragging.x = mousePos.x - offsetX;
                        imgDragging.y = mousePos.y - offsetY;
                        imgDragging.draw();
                        
                        positionCornerHandles(imgDragging);
                    }
                    else if (darthVaderImg.resizeCorner) {
                        resizeImage(darthVaderImg);
                    }
                    else if (yodaImg.resizeCorner) {
                        resizeImage(yodaImg);
                    }
                }, false);
            }
            
            window.onload = function(){
                var sources = {
                    darthVader: "<?php echo $frame; ?>",
                    yoda: "test.png"
                };
                loadImages(sources, initStage);
            };
        </script>
		
		<?php
		}
		?>
</head>

<body>

<div id="header" align="center"><br/><br/><b>DRAG &amp; RESIZE YOUR IMAGE</b></div>
<?php
if(substr($frame,0,7)=="frames/")
{
?>
<div id="container" style="margin-left:400px; margin-top:90px;">
</div>
<?php
}
else if($frame=="noframe")
{
?>
<canvas id="myCanvas" width="578" height="400" style="margin-left:400px; margin-top:90px;"></canvas><br/><br/><br/>
<script type="text/javascript">
window.onload=function()
{
var c=document.getElementById("myCanvas");
var ctx=c.getContext("2d");
var img=new Image();
img.src="demo_small.jpg";
ctx.drawImage(img,0,0,578,400);
}
</script>

<?php
}
else
{
header("Location: index.php");
}
?>

<?php
for($i=0;$i<22;$i++)
	echo "<br/>";
?>

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