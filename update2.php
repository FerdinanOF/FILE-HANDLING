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
        left: 30%;
      	}
        table {
        background-color: #C0C0C0;
        border-collapse: collapse;
        width: 40%;
   	 	}
        th, td {
        text-align: left;
        padding: 15px;
     	}
        tr:nth-child(even) {
        background-color: #f2f2f2;
        }
    </style>
</head>
<body background="file4.jpg" style="background-size:  1400px";>
	<div class="card-header text-center">
            <h2 style="color: dimgray;">Edit Kontak</h2>
    </div>
    <div class="container">
  
		
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
		?>

		<form action="tide.php" method="GET">
			<table>
		<tr>
			<td>Kode list</td>
			<td><?php echo "<input type=text name=kode value=$rowdel readonly=readonly>";?>
			</td>
		</tr>

		<tr>
			<td>Nama</td>
			<td><?php echo "<input type=text name=nama value=$col[0]>";?>
			</td>
		</tr>

		<tr>
			<td>Email</td>
			<td><?php echo "<input type=email name=email value= $col[1]";?>
			</td>
		</tr>

		<tr>
			<td>Phonenumber</td>
			<td><?php echo "<input type=tel name=phone value= $col[2]";?>
			</td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td><?php echo "<input type=text name=alamat value= $col[3]"; ?>
			</td>
		</tr>

		<tr>
		<td><input type=submit value=edit></td><td></td>
		</tr>

		</form>
			</table>
	</table>
</div>
</body>
</html>
