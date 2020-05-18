<?php                                                                                                
$lirik = "balonku ada lima <br> 
			rupa rupa warnanya <br> 
			Hijau, Kuning, Kelabu <br>
			Merah muda dan Biru <br> 
			Meletus balon Hijau DOR! <br> 
			hatiku sangat kacau <br> 
			Balonku tinggal empat <br>
			ku pegang erat erat";

$lirik = str_replace("a", "o", $lirik) . "<br>";
$lirik = str_replace("u", "o", $lirik) . "<br>";
$lirik = str_replace("i", "o", $lirik) . "<br>";
$lirik = str_replace("e", "o", $lirik) . "<br>";


	echo "$lirik";




?>