
<body>
<div class="container">

    <h2> EDIT Data </h2>
    <hr>
    <form action ="<?= site_url('AController/simpan_edit') ?>" method="post">

    <h5>Stock Card</h5>
    <div class="container p-3 my-3 border">
<form>
<div class="form-group">
		<label for="nim">NIM</label>
		<input type="text"readonly value="<?=$data_nim->nim?>" name="nim" class="form-control" placeholder="Masukan ID ..">
    </div>
    
	<div class="form-group">
		<label for="nama">Nama</label>
		<input type="text" value="<?=$data_nim->nama?>" name="nama" class="form-control" placeholder="Masukan Nama..">
	</div>

    <label for="alamat">Alamat</label>
  
     <textarea class="form-control" name="alamat" rows="3" > <?=$data_nim->alamat?> </textarea>
    
  </div>
    
     <input type ="submit" name="submit" value="Simpan" 
     class="btn btn-primary">
     
     <a href="<?= site_url('AController/index')?>"
     class="btn btn-warning">Batal</a>




    </from>
    </div>
</div>


</body>
</html>
