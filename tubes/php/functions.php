<?php

//functions untuk melakukan koneksi ke database
function koneksi()
{
	$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
	mysqli_select_db($conn, "pw_193040121") or die("Database salah!!");

	return $conn;
}

//functions untuk melakukan query ke database
function query($query)
{
	$conn = koneksi();
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) == 1) {
		return mysqli_fetch_assoc($result);
	}

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}
// upload file
function upload()
{

	$nama_file = $_FILES['foto']['name'];
	$tipe_file = $_FILES['foto']['type'];
	$ukuran_file = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];
	$tmp_file = $_FILES['foto']['tmp_name'];


	// ketika tidak ada gambar yang dipilih
	if ($error == 4) {
		// echo "<script>
		// 				alert('pilih gambar terlebih dahulu!');
		// 				</script>";
		return 'nophoto.png';
	}

	// cek ektensi file
	$daftar_gambar = ['jpg', 'jpeg', 'png'];
	$ektensi_file = explode('.', $nama_file);
	$ektensi_file = strtolower(end($ektensi_file));

	if (!in_array($ektensi_file, $daftar_gambar)) {
		echo "<script>
					alert('Yang anda pilih bukan gambar!');
					</script>";

		return false;
	}

	// cek tipe file
	if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {

		echo "<script>
					alert('Yang anda pilih bukan gambar!');
					</script>";

		return false;
	}

	// cek ukuran file
	// maksimal 5 mb = 5000000
	if ($ukuran_file > 5000000) {

		echo "<script>
					alert('ukuran terlalu besar!');
					</script>";

		return false;
	}

	// lolos pengecekan 
	// siap upload file
	// generate nama file baru
	$nama_file_baru = uniqid();
	$nama_file_baru .= '.';
	$nama_file_baru .= $ektensi_file;
	move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

	return $nama_file_baru;
}

// tambah data
function tambah($data)
{

	$conn = koneksi();


	// upload gambar
	$foto = upload();
	if (!$foto) {

		return false;
	}
	// $foto = htmlspecialchars($data['foto']);
	$nama_barang = htmlspecialchars($data['nama_barang']);
	$brand = htmlspecialchars($data['brand']);
	$spesifikasi = htmlspecialchars($data['spesifikasi']);
	$keunggulan = htmlspecialchars($data['keunggulan']);
	$tanggal_rilis = htmlspecialchars($data['tanggal_rilis']);
	$harga = htmlspecialchars($data['harga']);

	$query = "INSERT INTO
						elektronik
						VALUES
						(null, 
						'$foto', 
						'$nama_barang', 
						'$brand', 
						'$spesifikasi', 
						'$keunggulan',
						'$tanggal_rilis',
						'$harga');
				";
	mysqli_query($conn, $query) or die(mysqli_error($conn));
	echo mysqli_error($conn);
	return mysqli_affected_rows($conn);
}

// hapus data
function hapus($id)
{
	$conn = koneksi(); 	// menghapus gambar difolder img
	$etk = query("SELECT * FROM elektronik WHERE id = $id");
	if ($etk['foto'] != 'nophoto.jpg') {
		unlink('../assets/img/' . $etk['foto']);
	}
	mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id") or die(mysqli_error($conn));
	return mysqli_affected_rows($conn);
}

// ubah data
function ubah($data)
{
	$conn = koneksi();

	$id = $data['id'];
	$foto_lama = htmlspecialchars($data['foto_lama']);
	$nama_barang = htmlspecialchars($data['nama_barang']);
	$brand = htmlspecialchars($data['brand']);
	$spesifikasi = htmlspecialchars($data['spesifikasi']);
	$keunggulan = htmlspecialchars($data['keunggulan']);
	$tanggal_rilis = htmlspecialchars($data['tanggal_rilis']);
	$harga = htmlspecialchars($data['harga']);
	$foto = upload();
	if (!$foto) {

		return false;
	}

	if ($foto == 'nophoto.png') {
		$foto = $foto_lama;
	}
	$query = "UPDATE elektronik SET

						foto = '$foto', 
						nama_barang =	'$nama_barang', 
						brand = '$brand', 
						spesifikasi = '$spesifikasi', 
						keunggulan = '$keunggulan',
						tanggal_rilis = '$tanggal_rilis',
						harga = '$harga'
					
						WHERE id = $id";

	mysqli_query($conn, $query) or die(mysqli_error($conn));
	echo mysqli_error($conn);
	return mysqli_affected_rows($conn);
}

// cari data
function cari($keyword)
{
	$conn = koneksi();

	$query = "SELECT * FROM elektronik
						WHERE 
						foto LIKE '%$keyword%' OR 
						nama_barang LIKE '%$keyword%' OR
						brand LIKE '%$keyword%' OR
						spesifikasi LIKE '%$keyword%' OR
						keunggulan LIKE '%$keyword%' OR
						tanggal_rilis LIKE '%$keyword%' OR
						harga LIKE '%$keyword%' 
					 ";
	$result = mysqli_query($conn, $query);

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}


	return $rows;
}


// 	return mysqli_affected_rows($conn);
// }
// registrasi data
function registrasi($data)
{


	$conn = koneksi();

	$username = htmlspecialchars(strtolower($data['username']));
	$password1 = mysqli_real_escape_string($conn, $data['password1']);
	$password2 = mysqli_real_escape_string($conn, $data['password2']);

	// jika username / password kosong
	if (empty($username) || empty($password1) || empty($password2)) {
		echo "<script>
							alert('Username / password tidak boleh kosong!');
							document.location.href = 'registrasi.php';
						</script>";
		return false;
	}

	// jika username sudah ada
	if (query("SELECT * FROM user WHERE username = '$username' ")) {
		echo "<script>
						alert('Username sudah terdaftar!');
						document.location.href = 'registrasi.php';
					</script>";

		return false;
	}

	// jika konfirmasi password tidak sesuai
	if ($password1 !== $password2) {
		echo "<script>
						alert('Konfirmasi password tidak sesuai!');
						document.location.href = 'registrasi.php';
					</script>";


		return false;
	}

	// jika password < 5 digit
	if (strlen($password1) < 5) {
		echo "<script>
						alert('password terlalu pendek!');
						document.location.href = 'registrasi.php';
					</script>";

		return false;
	}

	// jika username & password sudah sesuai
	// enkripsi password
	$password_baru = password_hash($password1, PASSWORD_DEFAULT);

	// insert ke tabel user
	$query = "INSERT INTO user 
						VALUES
						(null, '$username', '$password_baru')
						";


	mysqli_query($conn, $query) or die(mysqli_error($conn));

	return mysqli_affected_rows($conn);
}
