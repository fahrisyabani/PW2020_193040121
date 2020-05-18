<?php
	
	
	$r1 = 6;
	$r2 = 9;
	$PHI = 3.14;


	echo "Total Luas = ".hitungluaslingkaran($r1,$r2). "<br>";

		function hitungluaslingkaran($PHI, $r)
			{
				$luasL = $PHI*$r*$r;
				return $luasL;
			}


		function tambahluaslingkaran($luas1, $luas2)
			{
				$luasL = $luas1+$luas2;
				return $luasL;
			}

	$luaslingkaranke1 = hitungluaslingkaran($PHI, $r1);
	$luaslingkaranke2 = hitungluaslingkaran($PHI, $r2);

	echo "Total Luas Lingkaran = ". tambahluaslingkaran($luaslingkaranke1, $luaslingkaranke2);


?>