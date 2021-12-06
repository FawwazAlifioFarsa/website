<?php 
session_start();
    if($_POST){
        include "koneksi.php";
        
        $query=mysqli_query($conn,"select * from produk where id = '".$_GET['id']."'");
        $data=mysqli_fetch_array($query);
        $_SESSION['cart'][]=array(
            'id'=>$data['id'],
            'nama'=>$data['nama'],
            'qty'=>$_POST['jumlah']
        );
    }
    header('location: keranjang.php');
?>
