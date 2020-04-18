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
	if (mysqli_num_rows($result) == 1) {
		return mysqli_fetch_assoc($result);
	}
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data)
{
	$conn = koneksi();

	$gambar = htmlspecialchars($data['gambar']);
	$nrp = htmlspecialchars($data['nrp']);
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$jurusan = htmlspecialchars($data['jurusan']);

	$query = "INSERT INTO
					mahasiswa
					VALUES
					(null, '$gambar', '$nrp', '$nama', '$email', '$jurusan','aksi');
			";
	mysqli_query($conn, $query);
	echo mysqli_error($conn);
	return mysqli_affected_rows($conn);
}
