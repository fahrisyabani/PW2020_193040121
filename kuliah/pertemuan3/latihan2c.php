<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8">
	<title>modul 2 - latihan 2b</title>
		<style>
			.kotak{
				width: 30px;
				height: 30px;
				text-align: center;
				line-height: 30px;
				border: 1px solid;
				float: left;
				margin: 2px;
				color: black;

			}
			.kotak1{
				background-color: #57e65a;
				width: 30px;
				height: 30px;
				text-align: center;
				line-height: 30px;
				border: 1px solid;
				float: left;
				margin: 2px;
				color: black;
			}
			.clear{
				clear: both;
			}
		</style>
</head>
<body>
<?php



for($Baris = 1; $Baris<=5; $Baris++){while($Baris <=5){

for ($Kolom= $Baris; $Kolom >=1 ; $Kolom--) { 
	echo "<div class = 'kotak'>#$Baris</div>";
	echo "<div class = 'kotak1'>$Baris</div>";
	
}echo "<div class = 'clear'></div>"; 

	$Baris++;}
}

?>
</body>
</html>



















































