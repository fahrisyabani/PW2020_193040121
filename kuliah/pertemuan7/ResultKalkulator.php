<?php 
	echo "Hasil dari penjumlahan";
		echo "<hr>";

	function Hitung($Nilai1, $Nilai2) {
		$hasil = $Nilai1 * $Nilai2 ;
			return $hasil;
		
	}


	// eksekusi
	// -----------
	$Nilai1 = $_GET['Nilai1'];
	$Nilai2 = $_GET['Nilai2'];
	echo Hitung($Nilai1,$Nilai2);
?>