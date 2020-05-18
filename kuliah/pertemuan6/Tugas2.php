<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tugas 2</title>
		<style type="text/css">

			tr {
				text-align: center; 
				font-family: monospace;
				font-size: 20px;
			}
			h1{
				text-align: center;
				font-family: monospace;
				letter-spacing: 10px;
				font-size: 30px;
			}
			img {
				width: 210px;
			}

		</style>
</head>
	<body>
		<h1>Daftar Buku</h1>

		<?php 
			$Buku = array(
			array("<img src = 'img/1.jpg'>", "Sebuah Seni Untuk Bersikap Bodo Amat", "Mark Manson", "Gramedia Pustaka Utama", "Februari 2018", "56.950"),
			array("<img src = 'img/2.jpg'>", "Everything Is Fu*cked(Segala-galanya kacau)", "Mark Manson", "Gramedia Pustaka Utama", "Februari 2020","76.500"),
			array("<img src = 'img/3.jpg'>", "Buku Besar Peminum Kopi", "Andrea Hirata", "Bentang Pustaka", "Februari 2020", "76.500"),
			array("<img src = 'img/4.jpg'>", "Guru Aini", "Andrea Hirata", "Bentang Pustaka", "Januari 2020", "84.150"),
			array("<img src = 'img/5.jpg'>", "Nanti & Kembali", "Hangka", "Rene Islam", "Desember 2019", "52.000"),
			array("<img src = 'img/6.jpg'>", "300 Hari di Bumi Syam", "Febri Ramdani", "BukuKita", "Februari 2020", "85.000"),
			array("<img src = 'img/7.jpg'>", "My Demian", "Motterial Ziacky", "Gradien Mediatama", "April 2018", "74.800"),
			array("<img src = 'img/8.jpg'>", "Circe", "Madeline Miller", "Gramedia Pustaka Utama", "April 2019", "114.750"),
			array("<img src = 'img/9.jpg'>", "Cantik Itu Luka", "Eka Kurniawan", "Gramedia Pustaka Utama", "Mei 2018", "106.250"),
			array("<img src = 'img/10.jpg'>", "Filosofi Teras", "Henry Manampiring", "Kompas", "November 2018", "78.400")
	
			);

		 ?>
			<table border="1" cellspacing="0" cellpadding="20">
		
				<tr bgcolor="#A9A9A9">
					<td><h3>Foto</h3></td>
					<td><h3>Judul buku</h3></td>
					<td><h3>Penulis</h3></td>
					<td><h3>Penerbit</h3></td>
					<td><h3>Tanggal Terbit</h3></td>
					<td><h3>Harga</h3></td>
				</tr>
				<tr>
					<td><?php echo $Buku[0][0] ?></td>
					<td><?php echo $Buku[0][1] ?></td>
					<td><?php echo $Buku[0][2] ?></td>
					<td><?php echo $Buku[0][3] ?></td>
					<td><?php echo $Buku[0][4] ?></td>
					<td><?php echo "Rp. ".$Buku[0][5] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[1][0] ?></td>
					<td><?php echo $Buku[1][1] ?></td>
					<td><?php echo $Buku[1][2] ?></td>
					<td><?php echo $Buku[1][3] ?></td>
					<td><?php echo $Buku[1][4] ?></td>
					<td><?php echo "Rp. ".$Buku[1][5] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[2][0] ?></td>
					<td><?php echo $Buku[2][1] ?></td>
					<td><?php echo $Buku[2][2] ?></td>
					<td><?php echo $Buku[2][3] ?></td>
					<td><?php echo $Buku[2][4] ?></td>
					<td><?php echo "Rp. ".$Buku[2][5] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[3][0] ?></td>
					<td><?php echo $Buku[3][1] ?></td>
					<td><?php echo $Buku[3][2] ?></td>
					<td><?php echo $Buku[3][3] ?></td>
					<td><?php echo $Buku[3][4] ?></td>
					<td><?php echo "Rp. ".$Buku[3][5] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[4][0] ?></td>
					<td><?php echo $Buku[4][1] ?></td>
					<td><?php echo $Buku[4][2] ?></td>
					<td><?php echo $Buku[4][3] ?></td>
					<td><?php echo $Buku[4][4] ?></td>
					<td><?php echo "Rp. ".$Buku[4][5] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[5][0] ?></td>
					<td><?php echo $Buku[5][1] ?></td>
					<td><?php echo $Buku[5][2] ?></td>
					<td><?php echo $Buku[5][3] ?></td>
					<td><?php echo $Buku[5][4] ?></td>
					<td><?php echo "Rp. ".$Buku[5][5] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[6][0] ?></td>
					<td><?php echo $Buku[6][1] ?></td>
					<td><?php echo $Buku[6][2] ?></td>
					<td><?php echo $Buku[6][3] ?></td>
					<td><?php echo $Buku[6][4] ?></td>
					<td><?php echo "Rp. ".$Buku[6][5] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[7][0] ?></td>
					<td><?php echo $Buku[7][1] ?></td>
					<td><?php echo $Buku[7][2] ?></td>
					<td><?php echo $Buku[7][3] ?></td>
					<td><?php echo $Buku[7][4] ?></td>
					<td><?php echo "Rp. ".$Buku[7][5] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[8][0] ?></td>
					<td><?php echo $Buku[8][1] ?></td>
					<td><?php echo $Buku[8][2] ?></td>
					<td><?php echo $Buku[8][3] ?></td>
					<td><?php echo $Buku[8][4] ?></td>
					<td><?php echo "Rp. ".$Buku[8][5] ?></td>
				</tr>
				<tr>
					<td><?php echo $Buku[9][0] ?></td>
					<td><?php echo $Buku[9][1] ?></td>
					<td><?php echo $Buku[9][2] ?></td>
					<td><?php echo $Buku[9][3] ?></td>
					<td><?php echo $Buku[9][4] ?></td>
					<td><?php echo "Rp. ".$Buku[9][5] ?></td>
				</tr>
		</table>
	</body>
</html>

		