<!doctype>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="file4.jpg" style="background-size:  1400px";>
	<?php
	$file = "data.txt";
	$data = file_get_contents($file);
	$kode = explode("[R]", $data);

	echo "<table border=1>";
	echo "<tr>";
	echo "  <td>Nama</td><td>Email</td>";
	echo "  <td>Phone</td><td>Alamat</td>";
	echo "</tr>";
	for($i =0; $i<count($kode)-1; $i++) {
	    //echo $b . "<br>";

	    $col = explode("|F|", $kode[$i]);

	    echo "<tr>";
	    echo "  <td>" . $col[0] . "</td>";
	    echo "  <td>" . $col[1] . "</td>";
	    echo "  <td>" . $col[2] . "</td>";
	    echo "  <td>" . $col[3] . "</td>";
	    echo "</tr>";
	}	
	echo "</table>";
	?>
</body>
</html>






