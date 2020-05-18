<?php 
	// array assosiative
	//echonya menggunakan variable yang dituliskan
	$mahasiswa = array("nama" => "fahri",
	"nrp" => "193040121",
	"alamat" => "setiabudhi",
	"usia" => "18 tahun");

	echo $mahasiswa["nama"];
	print_r($mahasiswa);
	echo "<hr>";



	// array biasa
	// echonya menggunakan nomor sesuai yg ingin ditampilkan
	$mahasiswa = array("fahri" , "193040121",
	"setiabudhi" , "18 tahun");

	echo $mahasiswa[0];
	print_r($mahasiswa); //untuk menampilkan lebih detail outputnya

?>