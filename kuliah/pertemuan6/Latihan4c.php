<!DOCTYPE html>
<html>
<head>
	<title>Latihan_4c</title>
	<style type="text/css">
		h2{
			font-family: arial;
		}
	</style>
</head>
	<body>
			<h2>Macam-macam perangkat keras komputer dan fungsinya</h2>
		<table>
			<?php 
				$Hardware = array();

				$Hardware["<strong>Motherboard</strong>"] = "Papan Sirkuit komponen komputer";
				$Hardware["<strong>Processor</strong>"] = "Sebuah IC yang mengontrol seluruh jalannya sistem komputer";
				$Hardware["<strong>Hard Disk</strong>"] = "Media penyimpanan sekunder";
				$Hardware["<strong>PC Coller</strong>"] = "Mengurangi panas yang dihasilkan oleh komputer";
				$Hardware["<strong>VGA Card</strong>"] = "Mengolah data grafik yang akan ditampilkan oleh monitor";
				$Hardware["<strong>Optical Drive</strong>"] = "Membaca, maupun menulis dari kepingan C
				D";
				$Hardware["<strong>Card Reader</strong>"] = "Untuk Membaca data-data yang tersimpan didalam memory card";
				$Hardware["<strong>Modem</strong>"] = "Mengubah sinyal digital menjadi sinyal analog";


			?>

			<ol>
				<?php 
					foreach ($Hardware as $hw => $desk) {
						echo "<tr><td>$hw</td><td> : </td><td> $desk </td></tr>";
					}

				?>
			</ol>
		</table>
	</body>
</html>