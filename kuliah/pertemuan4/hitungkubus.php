<?php    
	//kubus pertama 
	$sisi1 = 9;

	//kubus kedua
	$sisi2 = 4;

	//luas ke 1
	$luas_kb1 = $sisi1*$sisi1*6;

	//luas ke 2
	$luas_kb2 = $sisi2*$sisi2*6;

	// $total_luas = $luas_kb1+$luas_kb2;
	echo "total luas = ".tambahluas2kubus(9, 4) "<br>";


		function tambahluas2kubus($Luas1, $Luas2)
	{
		$total_luas = $luas1+$luas2;
		return $total_luas;


	}
		echo "total luas kubus = ".hitungluaskubus($luas_kb1,$luas_kb2);

		function hitungluaskubus($Luas1, $Luas2)
	{
		$total_luas = $luas1+$luas2;
		return $total_luas;
 
	}





?>