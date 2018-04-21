<!doctype>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <style>
        container{
        position: fixed;
        top: 25%;
        left: 30%;
      }
        table {
        background-color: #C0C0C0;
        border-collapse: collapse;
        width: 100%;
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
<body background="file5.jpg" style="background-size:  1400px";>
    <div class="card-header text-center">
            <h2 style="color: dimgray;">Daftar Nama Buku Telepon</h2>
        </div>
    <div class="container">
        

    <?php
    $file = "data.txt";
    $data = file_get_contents($file);

    $baris = explode("[R]", $data);
    ?>
    
    <table>
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Alamat</th>
        <th>Action</th>
        <th>Edit</th>
      </tr>
   <?php
    for($i =0; $i<count($baris)-1; $i++) {
        //echo $b . "<br>";

        $col = explode("|F|", $baris[$i]);

        echo "<tr>";
        echo "  <td>" . $col[0] . "</td>";
        echo "  <td>" . $col[1] . "</td>";
        echo "  <td>" . $col[2] . "</td>";
        echo "  <td>" . $col[3] . "</td>";
        echo '  <td> <a href="delete.php?row='.$i.'">DELETE</a> </td>';
        echo '  <td> <a href="update2.php?row='.$i.'">EDIT</a> </td>';
        echo "</tr>";
    }
    
    ?>
    </table>
</div>
</body>
</html>
