<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="file5.jpg" style="background-size:  1400px";>
	<?php

	$file = "data.txt";

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$alamat= $_POST['alamat'];

	$data = $nama  . "|F|" . 
	        $email . "|F|" .
	        $phone . "|F|" .
	        $alamat . "[R]" ;

	$handle = fopen($file, "a+");
	fwrite($handle, $data);
	fclose($handle);
	?>
	<h1><b><br>	Data sudah disimpan....</b></h1>
</body>
</html>
