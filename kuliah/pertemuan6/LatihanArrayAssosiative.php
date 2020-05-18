<?php

	$mahasiswa = array("nama " => "fahri",
	"Alamat " => "Setbud", 
	"TTL " =>  "19-09-2001",
	"Status " =>  "Mahasiswa cabutan",
	"No.hp " => "083xxxxx",
	"cita-cita " => "",
	"hobby " => "musik,makan,minum",
	"Makanan-fav " => "yang mantap-mantap",
	"Instagram " => "fahrisyabani00",
	"Email " => "fahrixxxxxxxxxpd@gmail.com",
	"Lagu-fav " => "Falling - Trevor Daniel",);

//output menggunakan array assosiative
	 echo $mahasiswa["nama "];
	 echo "<hr>";
	 print_r($mahasiswa);
	 echo "<hr>";

//output menggunakan foreach
	foreach ($mahasiswa as $biodata => $isi) {
		echo "$biodata : $isi";
		echo "<br>";

	}
?>

