<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet"
    href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">

    <link rel="stylesheet"
    href="<?=base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>">    
    <title> FORM PERUBAHAN DATA</title>

</head>
<body>
<div class="container">

    <h2> EDIT Data </h2>
    <hr>
    <form action ="<?= site_url('AController/simpan_edit') ?>" method="post">

    <h5>Input Data</h5>
<form>
<div class="form-group">
		<label for="nim">NIM</label>
		<input type="text"readonly value="<?=$data_nim->nim?>" name="nim" class="form-control" placeholder="Masukan ID ..">
    </div>
    
	<div class="form-group">
		<label for="nama">Nama</label>
		<input type="text" value="<?=$data_nim->nama?>" name="nama" class="form-control" placeholder="Masukan Nama..">
	</div>
<!--  
    <div class="form-group">
		<label for="nama">Alamat</label>
		<input type="textarea" value=",>" name="nama" class="form-control" placeholder="Masukan Nama..">
    </div> -->

    <div class="form-group">
    <!-- <label for="exampleFormControlTextarea1">Alamat</label> -->
    <!-- <input type="textarea" row=3 value=" " name="alamat" class="form-control" placeholder="Masukan Nama.."
    > -->

    <label for="alamat">Alamat</label>
  
     <textarea class="form-control" name="alamat" rows="3" > <?=$data_nim->alamat?> </textarea>
    
  </div>
    
     <input type ="submit" name="submit" value="Simpan" 
     class="btn btn-primary">
     
     <a href="<?= site_url('AController/index')?>"
     class="btn btn-warning">Batal</a>




    </from>
</div>


</body>
</html>
