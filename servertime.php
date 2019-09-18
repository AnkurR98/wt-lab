 <!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv="refresh" content="1">
 	<title></title>
 	<style>
		.time	{
			font-size: 50px;
			background-color: red;
			color: white;
			width: 300px;
			margin-top: 21%;
		}
 	</style>
 </head>
 <body>
 	<center>
 		<div class="time">
			<?php
				// $servertime = localtime(time(), true);
				// echo $servertime["tm_hour"].":".$servertime["tm_min"].":".$servertime["tm_sec"];
				date_default_timezone_set("Asia/Kolkata");
				echo date("h:i:s A");
			?>
		</div>
	</center>
 </body>
 </html>


