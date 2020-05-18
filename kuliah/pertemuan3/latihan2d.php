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
			.ganjil{
				background-color: #003;
				color: #fff;
			}
			.genap{
				background-color: #57e65a;

			}
		</style>
</head>
<body>
<?php
 $baris = 1;	
while($baris <=5) {
		if ($baris %2){
			for ($Kotak1=$baris; $Kotak1 >=1 ; $Kotak1--) { 
				echo "<div class = 'kotak1'>#$baris</div>";
				echo "<div class = 'kotak1 ganjil'>$Kotak1</div>";
			}
			echo "<div class = 'clear'></div>"; 

	}else{
		for($Kotak1=$baris; $Kotak1 >=1 ; $Kotak1--) { 
				echo "<div class = 'kotak1'>#$baris</div>";
				echo "<div class = 'kotak1 genap'>$Kotak1</div>";
			}
			echo "<div class = 'clear'></div>"; 
	}
	$baris++;
}

?>
</body>
</html>


	

