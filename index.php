<?php
//panggil fail sambung ke pangkalan data
include_once("config.php");

//memaparkan data mengikut susunan data terbaru dimasukkan

$result = mysqli_query($mysqli, "SELECT* FROM produk ORDER BY id DESC");
?>

<html>
    <head>
        <title> Senarai Barangan </title>
    </head>
    <body>
    <center>
        <h2> SENARAI BARANGAN DAN HARGA </h2>
        <fieldset>
            <table width= '80%' border =0>
                <tr bgcolor ='#CCCCCC'>
                    <td>Bil.</td>
                    <td>Nama Produk </td>
                    <td>Harga</td>
                    <td>Tindakan</td>
                </tr>
                
     <?php
            $no=1; //nilai pemula pembilang
     //memaparkan data ke dalam jadual yang dibina
            while ($res = mysqli_fetch_array ($result)){
                echo "<tr>";
                echo "<td>" .$no;
                 echo "<td>" .$res['harga']."</td>";
                 echo "<td>" .RM.$res ['harga']."</td>";
                 echo "<td> <a href=\"edit.php?id=$res[id]\">kemaskini</a> | <a 
                     href=\"delete.php?id=$res[id]\" onClick=\"return comfirm('Adakah anda pasti?')
                     \">hapus</a></td>";
                 $no++;//Bilangan Increment
            }
            ?>
            </table>
            <br><a href="add.php">Daftar Barang Baru</a>
    </center>           
        </fieldset>
     </body>
</html>