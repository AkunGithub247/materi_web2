<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampilan data dari database</title>
</head>
<body>

<?php
include "koneksi.php"; //include file koneksi
include "fungsi.php"; //include file fungsi
?>
<table border="1" width="800x" align="center">
   <thead>
   <tr>
        <th colspan= "6"><h3>data user</h3></th>
        </tr>
        <tr>
          <th>ID</th>
          <th>nama</th>
          <th>mulai kerja </th>
          <th>selesai kerja </th>
          <th>lama kerja</th>
          <th>honor</th>
          </tr>
   </thead>
   <tbody>
   <?php
   $data = mysqli_query($conect, "select * from tb_user"); //ambil data dari tabel
   while($row = mysqli_fetch_array($data)){ //buat perulagan dengan while dan ambil data per record
       ?>
     <tr>
              <td><?= $row['id_user'];?></td> <!-- tampilkan pada isian tabel -->
              <td><?= $row['nama'];?></td> 
              <td><?= $row['tgl_mulaikerja'];?></td>
              <td><?= $row['tgl_selesaikerja'];?></td>
              <td><?= $row['lama_kerja'];?></td>
              <td><?= nominal($row['honor'];?></td> <!-- ubah menjadi format nominal -->
          </tr>
          <?php }?>
   </tbody>
</table>

    
</body>
</html>