<?php
    if($_POST){
        $nama=$_POST['nama'];
        $deskripsi=$_POST['deskripsi'];
        $harga=$_POST['harga'];
        $ekstensi = array("png","jpg","jpeg");
        $file = $_FILES['file']['name'];
        $tmp = $_FILES['file']['tmp_name'];
        $tipe_file = pathinfo($namafile, PATHINFO_EXTENSION);
        $ukuran = $_FILES['file']['size'];
        
        if(empty($nama)){
            echo "<script>alert('Nama Buku tidak boleh kosong');location.href='tambah_buku.php';</script>";
        } elseif(empty($deskripsi)){
            echo "<script>alert('Deskripsi tidak boleh kosong');location.href='tambah_buku.php';</script>";
        } elseif(empty($file)){
            echo "<script>alert('Deskripsi tidak boleh kosong');location.href='tambah_buku.php';</script>";
        }else {
            include "koneksi.php";
            move_uploaded_file($tmp, './assets/'.$file);
            $insert = mysqli_query($conn,"insert into produk (nama, deskripsi, harga, gambar) value ('".$nama."','".$deskripsi."','".$harga."','".$file."')");
            if($insert){
                echo "<script>alert('Sukses menambahkan buku');location.href='upload.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan buku');location.href='upload.php';</script>";
            }
        }
    }
?>

