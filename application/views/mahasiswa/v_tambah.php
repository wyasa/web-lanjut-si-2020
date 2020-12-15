<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet"
    href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">

    <link rel="stylesheet"
    href="<?=base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>">    
    <title> STOK TOKO MAKMUR</title>

</head>
<body>
<div class="container">

    <h2> Tambah Data </h2>
    <hr>
    <form action ="<?= site_url('AController/proses_tambah') ?>" method="post">

    <h5>Input Data</h5>
<form>
<div class="form-group">
		<label for="nim">nim</label>
		<input type="text" name="nim" class="form-control" placeholder="Masukan ID ..">
    </div>
    
	<div class="form-group">
		<label for="nama">nama</label>
		<input type="text" name="nama" class="form-control" placeholder="Masukan Nama..">
	</div>
 
	<div class="form-group">
		<label for="alamat">alamat</label>
		<input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat...">
    </div>
    
    
     <input type ="submit" name="submit" value="Simpan" 
     class="btn btn-primary">
     
     <a href="<?= site_url('AController/index')?>"
     class="btn btn-warning">Batal</a>




    </from>
</div>


</body>
</html>
