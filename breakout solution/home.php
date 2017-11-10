<?php
session_start();
include 'connect.php';
$x=$_POST['s1'];echo $x;
?> 
<html>
    <head>
        <title>Breakout</title>
    </head>
    <body>
        
         <canvas id="game" height="480" width="480" algin="center" style="border:1px solid #ff1919;"></canvas>
        <script src="home.js">
            document.getElementById('s1').value=final;
        </script>
     <script type="text/javascript">
		document.getElementById("game").onmousedown = function() { 
			draw();              }
                
     </script>
       
    </body>
</html>
