<?php
$file = "data.txt";
$nama = $_GET['nama'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$alamat= $_GET['alamat'];
$row = $_GET['kode'];

$baru = $nama  . "|F|" . 
        $email . "|F|" .
        $phone . "|F|" .
        $alamat . "[R]" ;

$data = file_get_contents($file);
$kode = explode("[R]", $data);
$databaru = "";

for($i = 0; $i<count($kode)-1; $i++)
    if($i == $row) {
    	$databaru .= $baru;
    }
    	else {
    $databaru .= $kode[$i] . "[R]";

    }
file_put_contents($file, $databaru);

header('location:baca.php');








