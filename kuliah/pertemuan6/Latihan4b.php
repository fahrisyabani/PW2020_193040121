<!DOCTYPE html>
<html>
<head>
	<title>latihan_4b</title>
</head>
<body>
	<?php 
		$Hardware = array ();

		$Hardware[] = "Motherboard";
		$Hardware[] = "processor";
		$Hardware[] = "Hard Disk";
		$Hardware[] = "PC Coller";
		$Hardware[] = "VGA Card";
		$Hardware[] = "SSD";
	?>

		<ol>
			<?php
				for ($i=0; $i < count($Hardware) ; $i++) { 
					echo "<li>$Hardware[$i]</li>";
				 } 

			?>
		</ol>


		<?php 
			$hasil = array_push($Hardware, "Modem", "Card Reader");
		?>

		<hr>
		<ol>
			<?php 
				for ($i=0; $i < count($Hardware); $i++) { 
					echo "<li>$Hardware[$i]</li>";
				}
			?>
</body>

</html>
