<?php
	
	$Bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");


	echo "Panjang Array = ". count($Bulan);
	echo "<br>";
	echo "<br>";
		print_r($Bulan); // untuk mengeluarkan semua Bulan
	echo "<hr>";

	echo "<br>";
		echo $Bulan[6]; // cara untuk mengeluarkan bulan Juli
	echo "<hr>";

	echo "<br>";
		$Bulan = array_pop($Bulan); // mengambil/menghapus elemen terakhir array(Desember)
		print_r($Bulan);
	echo "<hr>";

	echo "<br>";
		$angka = array(1, 2, 3, 4, 5, 6, 7,);

		$hasil = array_push($angka, 10, 9, 8, 7); // menambahkan elemen angka
		print_r($angka);
	echo "<hr>";

//mengurutkan/sorting
	//$angka = array(2, 4, 6, 8, 10, 12, 14, 15);

	//	print_r($angka);

		//echo "<hr>";
		//$hasil = asort($angka);
		//print_r($angka);

		//echo "<hr>";
		//$hasil = sort($angka);
		//print_r($angka);
?>