<?php 
	echo "Ini adalah tampilan hasil";
		echo "<hr>";

	// echo "Username: ".$_GET['username'];
		// echo "<br>";
	// echo "Password: ".$_GET['password'];

	// fungsi
	// ----------------------------------

	function cekLogin($username, $password) {
		if ($username == "fahri" && $password == "232342") {
			echo "Berhasil Login";
		} else {
			echo "Gagal Login";
		}
	}


	// eksekusi
	// -----------
	$username = $_GET['username'];
	$password = $_GET['password'];
	cekLogin($username,$password);
?>