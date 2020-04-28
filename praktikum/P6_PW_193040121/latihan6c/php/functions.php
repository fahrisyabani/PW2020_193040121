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

function tambah($data)
{
	$conn = koneksi();

	$foto = htmlspecialchars($data['foto']);
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
function hapus($id)
{
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id") or die(mysqli_error($conn));
	return mysqli_affected_rows($conn);
}
function cari($keyword)
{
	$conn = koneksi();

	$query = "SELECT * FROM elektronik
						WHERE  
						nama_barang LIKE '%$keyword%' 
					 ";
	$result = mysqli_query($conn, $query);

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}


	return $rows;
}
