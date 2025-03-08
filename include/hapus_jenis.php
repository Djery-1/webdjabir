<?php
include "../koneksi.php";
    $id=$_GET['id'];
    $hasil= $pdo->exec("DELETE from tb_jenis where id_jenis='", $id ,"'");

    if($hasil){echo "Data Berhasil di Hapus <meta http-equiv='refresh' content='1; url= index.php?page=datajenisbarang'/> ";

    }else{
        echo "Data Gagal Di Hapus";
    }
    ?>