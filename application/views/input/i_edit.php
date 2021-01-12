<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet"
    href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">

    <link rel="stylesheet"
    href="<?=base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"> 


    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  
  <script>
$( function() {
  $( "#date" ).datepicker({
    dateFormat: "dd-mm-yy"
  });
} );
</script>


    <title> FORM INPUT STOCK </title>

</head>
<body>
<div class="container">

    <h2> Card Stock </h2>
    <hr>
    <form action ="<?= site_url('i_controller/simpan_edit') ?>" method="post">

    <h5>Input Data</h5>
<form>

<div class="form-group">
		<label for="kd_pembelian">KD.Pembelian</label>
		<input type="text" readonly value="<?=$data_id->kd_pembelian?>" name="kd_pembelian" class="form-control" placeholder="Masukan kode ..">
    </div>

<div class="form-group">
		<label for="id">ID</label>
		<input type="text" value="<?=$data_id->id?>" name="id" class="form-control" placeholder="Masukan ID ..">
    </div>
    
	<div class="form-group">
		<label for="nama">nama</label>
		<input type="text" value="<?=$data_id->nama?>"name="nama" class="form-control" placeholder="Masukan Nama..">
	</div>
 
    <div class="form-group">
		<label for="merk">Merk</label>
		<input type="text" value="<?=$data_id->merk?>"name="merk" class="form-control" placeholder="Masukan Merk..">
	</div>

    <div class="form-group">
		<label for="kategori">Kategori</label>
		<input type="text"  value="<?=$data_id->kategori?>"name="kategori" class="form-control" placeholder="Masukan kategori..">
        </div>

        <div class="form-group">
		<label for="jumlah">Jumlah</label>
		<input type="text" value="<?=$data_id->jumlah?>"name="jumlah" class="form-control" placeholder="Masukan Jumlah..">
	</div>

    <div class="form-group">
		<label for="tgl">Tanggal</label>
		<input type="text"  value="<?=$data_id->tgl?>"name="tgl" class="form-control" placeholder="Masukan tgl ..">
    </div>
	<!-- <div class="form-group">
		<label for="alamat">alamat</label>
		<input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat...">
    </div> -->
    
    
     <input type ="submit" name="submit" value="Simpan" 
     class="btn btn-primary">
     
     <a href="<?= site_url('AController/index')?>"
     class="btn btn-warning">Batal</a>




    </from>
</div>


</body>
</html>
