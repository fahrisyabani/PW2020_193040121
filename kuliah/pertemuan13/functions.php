<?php

//functions untuk melakukan koneksi ke database

use function PHPSTORM_META\map;

function koneksi()
{
	//melanjutkan koneksi ke database
	return mysqli_connect("localhost", "root", "", "pw_193040121");
}
//functions untuk melakukan query ke database
function query($query)
{
	$conn = koneksi();

	$result = mysqli_query($conn, $query);

	// jika hasil satu data
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

	$nama_file = $_FILES['gambar']['name'];
	$tipe_file = $_FILES['gambar']['type'];
	$ukuran_file = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmp_file = $_FILES['gambar']['tmp_name'];


	// ketika tidak ada gambar yang dipilih
	if ($error == 4) {
		// echo "<script>
		// 				alert('pilih gambar terlebih dahulu!');
		// 				</script>";
		return 'default.jpg';
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
	move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);

	return $nama_file_baru;
}

// tambah data
function tambah($data)
{

	$conn = koneksi();


	// upload gambar
	$gambar = upload();
	if (!$gambar) {

		return false;
	}

	// $gambar = htmlspecialchars($data['gambar']);
	$nrp = htmlspecialchars($data['nrp']);
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);



	$query = "INSERT INTO
					mahasiswa
					VALUES
					(null, '$gambar', '$nrp', '$nama', '$email', '$jurusan');
			";

	mysqli_query($conn, $query) or die(mysqli_error($conn));
	echo mysqli_error($conn);
	return mysqli_affected_rows($conn);
}

// hapus data
function hapus($id)
{
	$conn = koneksi();

	// menghapus gambar difolder img
	$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
	if ($mhs['gambar'] != 'default.jpg') {
		unlink('img/' . $mhs['gambar']);
	}

	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
	return mysqli_affected_rows($conn);
}

// ubah data
function ubah($data)
{
	$conn = koneksi();

	$id = $data['id'];
	$gambar_lama = htmlspecialchars($data['gambar_lama']);
	$nrp = htmlspecialchars($data['nrp']);
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);

	$gambar = upload();
	if (!$gambar) {

		return false;
	}

	if ($gambar == 'default.jpg') {
		$gambar = $gambar_lama;
	}


	$query = "UPDATE mahasiswa SET

					gambar = '$gambar',
					nrp = '$nrp', 
					nama = '$nama', 
					email = '$email', 
					jurusan = '$jurusan' 
					
					WHERE id = $id";

	mysqli_query($conn, $query) or die(mysqli_error($conn));
	echo mysqli_error($conn);
	return mysqli_affected_rows($conn);
}

// cari data
function cari($keyword)
{
	$conn = koneksi();

	$query = "SELECT * FROM mahasiswa 
						WHERE 
						nama LIKE '%$keyword%' OR 
						nrp LIKE '%$keyword%'
						";

	$result = mysqli_query($conn, $query);

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}


	return $rows;
}


// login data
function login($data)
{
	$conn = koneksi();

	$username = htmlspecialchars($data['username']);
	$password = htmlspecialchars($data['password']);

	// cek dulu username
	if ($user = query("SELECT * FROM user WHERE username = '$username' ")) {
		// cek password
		if (password_verify($password, $user['password'])) {
			// set session
			$_SESSION['login'] = true;

			header("Location: index.php");
			exit;
		}
	}
	return [
		'error' => true,
		'pesan' => 'Username / Password Salah!'
	];
}


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
		echo "<scpript>
						alert('Konfirmasi password tidak sesuai!');
						document.location.href = 'registrasi.php';
					</script>";

		return false;
	}

	// jika password < 5 digit
	if (strlen($password1) < 5) {
		echo "<scpript>
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
