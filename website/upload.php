<!DOCTYPE html>
<html>
    <style>
    </style>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <a style="display:block;width:max;background-color:#27a60d;color:white;font-family: 'Poppins', sans-serif;" class="btn" href="index.php">Click Disini Untuk Ke Halaman Utama</a>
    <title>Upload File</title>
    </head>
    <body>        
        <div class="row" style="margin-top:27px;">
            <div class="col-md-2" style="padding: 30px; margin: auto;">
                <form action="upload_proses.php" method="post" enctype="multipart/form-data">
                <h1 align="center">Tambah Produk</h1>
                    <div class="form">
                        Nama Produk :
                        <input type="text" name="nama" value="" class="form-control" style="margin-bottom: 12px;">
                        Deskripsi : 
                        <input type="text" name="deskripsi" value="" class="form-control" style="margin-bottom: 12px;">   
                        Harga : 
                        <input type="text" name="harga" value="" class="form-control" style="margin-bottom: 12px;">                      
                        Foto / Gambar :
                        <input type="file" name="file" class="form-control" style="margin-bottom: 21px;">
                        <br>      
                        <div class="submit">  
                            <input type="submit" name="simpan" value="Confirm" class="button">
                        </div>  
                    </div>
                </form>
            </div>      
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>