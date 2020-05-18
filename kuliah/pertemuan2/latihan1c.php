<!DOCTYPE html>
<html>
<head>
	<title>latihan</title>
	<style type="text/css">
		.container 
		{
			border: 1px solid black;
			width: 200px;
			height: 170px;
			padding: 5px;
			position: relative;
		}
		.box
		{
			border: 1px solid black;
			width: 50px;
			height: 50px;
			margin: 2px 5px 2px 5px;
			text-align: center;
			line-height: 50px;
			float: left;
		}
		.clear
		{
			clear: both;
		}
	</style>
</head>
<body>

	<?php
	$a="A";
	$b="B";
	$c="C";


	?>



	<div class="container">
		<div class="box">
			<?php
			echo $a;
			?>
		</div>

		<div class="box">
			<?php
			echo $a;
			?>
		</div>

		<div class="box">
			<?php
			echo $a;
			?>
		</div>

		<div class="box">
			<?php
			echo $b;
			?>
		</div>

		<div class="box">
			<?php
			echo $b;
			?>
		</div>

		<div class="clear">
			
		</div>



		<div class="box">
			<?php
			echo $c;
			?>
		</div>
	</div>
</body>
</html>