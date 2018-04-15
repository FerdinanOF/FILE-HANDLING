<!doctype>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <style type="text/css">
        .container{
        position: fixed;
        top: 25%;
        left: 40%;
      }
    </style>
</head>
<body background="file4.jpg" style="background-size:  1400px";>
	<div class="card-header text-center">
            <h2 style="color: dimgray;">Edit Kontak</h2>
    </div>
    <div class="container">
        <table border="2">
		<?php

		$file = "data.txt";
		$data = file_get_contents($file);
		$kode = explode("[R]", $data);
		$rowdel = $_GET['row'];

		for($i =0; $i<count($kode)-1; $i++) {
			if($i != $rowdel) continue;
		    //echo $b . "<br>";

		    $col = explode("|F|", $kode[$i]);
		}

		echo "<form action=tide.php method=GET>";
		echo "<table border=4>";
		echo "<tr>";
		echo "<td>Kode list</td><td><input type=text name=kode value=$rowdel readonly=readonly></td>";
		echo "</tr>";
		echo "<tr>";
		echo "  <td>Nama</td><td><input type=text name=nama value=$col[0]></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Email</td><td><input type=email name=email value=$col[1]></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Phonenumber</td><td><input type=tel name=phone value=$col[2]></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Alamat</td><td><input type=text name=alamat value=$col[3]></td>";
		echo "</tr>";

		echo "<tr>
		<td><input type=submit value=edit></td><td></td>
		</tr>";
		echo "</table>";
		echo "</form>";
		?>
	</table>
</div>
</body>
</html>






