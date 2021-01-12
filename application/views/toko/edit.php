
<body>
<div class="container">

    <h2> EDIT Data </h2>
    <hr>
    <form action ="<?= site_url('AController/simpan_edit') ?>" method="post">

    <h5>Card Stok </h5>
    <div class="container p-3 my-3 border">
<form>
<div class="form-group">
		<label for="id">Id</label>
		<input type="text"readonly value="<?=$data_id->id?>" name="id" class="form-control" placeholder="Masukan ID ..">
    </div>
    
	<div class="form-group">
		<label for="nama">Nama</label>
		<input type="text" value="<?=$data_id->nama?>" name="nama" class="form-control" placeholder="Masukan Nama..">
	</div>

    <!-- <label for="alamat">Alamat</label>
  
     <textarea class="form-control" name="alamat" rows="3" > <?=$data_id->alamat?> </textarea> -->
     <div class="form-group">
		<label for="merk">Merk</label>
		<input type="text" value="<?=$data_id->merk ?>" name="Merk" class="form-control" placeholder="Masukan Nama..">
	</div>

   <div class="form-group">
		<label for="kategori">Kategori</label>
		<input type="text" value="<?=$data_id->kategori?>" name="kategori" class="form-control" placeholder="Masukan Nama..">
	</div>

    <div class="form-group">
		<label for="jumlah">Jumlah</label>
		<input type="text" value="<?=$data_id->jumlah?>" name="jumlah" class="form-control" placeholder="Masukan Nama..">
	</div>
    
  </div>
    
     <input type ="submit" name="submit" value="Simpan" 
     class="btn btn-primary">
     
     <a href="<?= site_url('AController/index')?>"
     class="btn btn-warning">Batal</a>




    </from>
    </div>
</div>
<script src="<?=base_url('vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?=base_url('vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>


</body>
</html>
