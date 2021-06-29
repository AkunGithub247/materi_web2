<?php include "koneksi.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portal berita mahasiswa</title>

    <style>
    #container{  /*Style untuk bingkai*/
        width :90%;
       min-height :600px;
       margin : 10px auto;
       border :#CCC Solid 1px;
       background :#003366;
       padding:10px;
      }
     #container .header{ /*Style untuk header*/
          width:100%;
          height: 100px;
          border:#CCC solid 1px;
          background:#003399;
          font-size:14px;
          color:#fff;
           }
    #container .menu{ /*Style untuk menu*/
        height: 50px;
        background:#888;
          font-size:14px;
          color:#fff;
    }
    #container .menu ul{ /*Style untuk bagian tombol menu*/
        list-style:none;
        margin:0;
        padding:0;
        
    }
    #container .menu ul li a{
        width:100px;
        height:50px;
        float:left;
        padding-top:8px;
        margin:5px;
        #color:#fff;
        text-align:center;
        font-size:14px;
        background:#003399;
        text-decaration:none;

    }
    #container .menu ul li a:hover{ /*Style untuk tombol di dekatkan berubah warna */
        font-size:16px;
        background:#000;
  }

  #container .konten{
      min-height:400px;
      background:#CCC;
       }
      
       #container .konten .konten-kiri{
           width:70px;
           min-height:400px;
           border:#000 solid 1px;
           float:left;
           background:#000;f5f5f5;
 }

 #container .konten .konten-kanan{
           width:28%px;
           min-height:400px;
           float:right;
           background:#000;f5f5f5;

 }
 #container .footer{
     text-align:center;
     color:#fff;
     font-size:12px;
     height:800px;
     padding-top:150px;
 }
 .feedberita{
     padding:10px;
     border:#CCC solid 1px;
     border-radius:10px;
     background:auto;

 }
        

    </style>
</head>
<body>


<div id="container"> <--! kerangka dari web/bingkai-->
         <div class="header"> <--! bagian header web-->
         <h1> portal berita mahasiswa</h1>
         <p>berita terkini dan terupdate di kalangan mahasiswa</p>
         </div>
         <div class="menu"> <--! bagian menu-->
         <ul>
           <li> <a href="index.php" title="home"><beranda</a></li>
           <li> <a href=""title="home"><berita</a></li>
           <li> <a href=""title="home"><kontak kami</a></li>
           <li> <a href=""title="home"><login anggota</a></li>
           <li> <a href=""title="home"><login admin </a></li>
         </ul>
         </div>
         <div class="konten"> <--! body web-->
         <div class="konten-kiri "> <--! side bar left -->
         <h2>BERITA TERBARU</h2>
        <?php
        $data = mysqli_query($conect, "select * from tb_berita, tb_admin where tb_berita.id_admin=tb_admin.id_admin order by id_berita desc");
        while($row =mysqli_fetch_array)($data)){
            ?>
            <div class="feedberita">
            <img src="gambar/<?= $row['gambar"];?>" alt="<?= $row['judul'];?>" Style="width:150px;height:150px;float:left;margin:10px;">
            <h3><?= $row['judul'];?></h3></a>
            <hr>
            <p><?= substr($row['text_berita']0,150);?>...<a href="">baca selengkapnya</a></p>
            <p>diposting oleh : <?= $row['nama_lengkap'];?>, tanggal : <?= $row['tgl_posting']';?></p>
             </div>
         <?php } ?>
         <div class="konten-kanan "> <--! sidebar right -->

               </div>
               <div style="clear:both;"></div>
               
         </div>
         <div class="footer"> <--! footer -->
         <p>copyright....2020 -all right reserved</p>
         </div>
         <div style="clear:both;"></div>

</div>
    
</body>
</html>
