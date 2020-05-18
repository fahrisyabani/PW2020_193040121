<?php 

	
	$arah = array("Kanan" , "Kiri" );

	$arah[2] = "Atas"; 

	$arah[] = "Bawah";

	$arah[1] = "Kanan";

	$arah[0] = "Kiri";

	 	echo "Panjang Array = " .count($arah);
	 	echo "<br>";
	 	print_r($arah);
		echo "<br>";

	for ($i=0; $i < count($arah); $i++) { 
		echo "Arah = ". $arah[$i];
		echo "<br>";
	}

		echo "<br>";

	$i = 1;
	foreach ($arah as $namaarah) {

		echo $namaarah;
	}

		echo "<br>";


	// array multidimensi
	$mahasiswa = array();
	$mahasiswa[0][0] = "193040121";
	$mahasiswa[0][1] = "Fahri Syabani";
	$mahasiswa[1][0] = "Bandung";
	$mahasiswa[1][1] = "xxxxxxx";

	// print("<pre>" .print_r($mahasiswa,true)."</pre"); //lebih bersih

	for ($i=0; $i < count($mahasiswa) ; $i++) { 
		for ($j=0; $j < count($mahasiswa) ; $j++) { 
				echo $mahasiswa[$i][$j];
				echo "<br>";
		}
	}


	// echo "<br>";
	// var_dump($mahasiswa); //semua tipe data dikeluarin


?>