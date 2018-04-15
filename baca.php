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
      </style>
</head>
<body background="file5.jpg" style="background-size:  1400px";>
    <div class="card-header text-center">
            <h2 style="color: dimgray;">Daftar Nama Buku Telepon</h2>
        </div>
    <div class="container">
        <table border="2">

    <?php
    $file = "data.txt";
    $data = file_get_contents($file);

    $baris = explode("[R]", $data);

    
    echo "<tr>";
    echo "  <td>Nama</td><td>Email</td>";
    echo "  <td>Phone</td><td>Alama</td><td>Action</td>";
    echo "  <td>Edit</td>";
    echo "</tr>";
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

