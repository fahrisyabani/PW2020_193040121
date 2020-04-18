<?php

//functions untuk melakukan koneksi ke database
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
