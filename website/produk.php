<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <a style="display:block;width:max;background-color:#27a60d;color:white;font-family: 'Poppins', sans-serif;" class="btn" href="index.php">Click Disini Untuk Ke Halaman Utama</a>
    <?php   
        include "koneksi.php";
        $detail=mysqli_query($conn,"select * from produk where id = '".$_GET['id']."'");
        $data=mysqli_fetch_array($detail);
    ?>
    <br><br><br>
    <div class="row" style="font-family: 'Poppins', sans-serif; padding:10px;">
        <div class="col-md-2" style="margin: auto; width: 60%; padding: 30px 80px 30px 80px; margin:0 auto;">
            <center><h2 style="margin-bottom:20px;letter-spacing:0.8px;"><?=$data['nama']?></h2></center>
            <center><img src="assets/<?=$data['gambar']?>" class="card-img-top" style="width:200px;"></center>
            <br>
            <form action="proses_keranjang.php?id=<?=$data['id']?>" method="post">
                <table class="table" style="color:rgb(233, 231, 231);border:none;">
                    <thead>
                        <tr>
                            <td><?=$data['deskripsi']?></td>
                        </tr>
                        <tr>
                            <td><?=$data['harga']?></td>
                        </tr>
                        <tr>
                            <td>Stock <?=$data['stok']?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Beli <input type="number" name="jumlah" value="1"></td>
                        </tr>
                    </thead>
                </table>
                <center><input class="button" type="submit" value="BELI"></center>
            </form>
        </div>
    </div>
</body>
</html>
