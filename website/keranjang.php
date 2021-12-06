<?php  session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
</body>
<a style="display:block;width:max;background-color:#27a60d;color:white;font-family: 'Poppins', sans-serif;" class="btn" href="index.php">Click Disini Untuk Ke Halaman Utama</a>
</html><br><br><br>
<table class="table table-borderless" style="background-color: rgb(25,20,20); color:white;width: 70%;margin: 0 auto;text-align:center; font-family: 'Poppins', sans-serif;border-radius:30px;">
    <thead>
        <tr>
            <th>NO</th><th>Nama Produk</th><th>Jumlah</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach (@$_SESSION['cart'] as $id => $val_produk): ?>
            <tr>
                <td><?=($id+1)?></td>
                <td><?=$val_produk['nama']?></td>
                <td><?=$val_produk['qty']?></td>
                <td><a href="assets/<?=$val_produk['nama']?>.png" class="btn btn-success" style="margin-right:10px;" download><strong>Download Image</strong></a><a href="hapus_cart.php?id=<?=$id?>" class="btn btn-danger" style="margin-left:10px;"><strong>X</strong></a></td>
            </tr>
 
        <?php endforeach ?>
    </tbody>
</table>
