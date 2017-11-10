<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Create HTML5 Canvas JavaScript Game Character Example</title>
    <!--[if IE]><script type="text/javascript" src="excanvas.js"></script><![endif]-->
    
  </head>
  <body>
          <div id="canvasDiv" height="490" width="220" ></div>
    <script type="text/javascript" src="html5-canvas-game-character-2.js"></script>
    <script type="text/javascript">
        prepareCanvas(document.getElementById("canvasDiv"), 490, 220);
		document.getElementById("canvasDiv").onmousedown = function() { 
			jump(); }
                   
    </script>
  </body>
</html>
