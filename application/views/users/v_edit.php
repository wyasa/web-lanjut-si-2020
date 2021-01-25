
<body>
<div class="container p-3 my-3 border">

    <h2> EDIT Data </h2>
    <hr>
    <form action ="<?= site_url('user/simpan_edit') ?>" method="post">

    <h5>Input Data</h5>
    <div class="container">
<form>
<div class="form-group">
		<label for="id">ID</label>
		<input type="text" readonly value ="<?=$data_id->id?>" name="id" class="form-control" placeholder="Masukan ID ..">
    </div>
    
	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" value="<?=$data_id->username?>" name="username" class="form-control" placeholder="Masukan Nama..">
	</div>

    <div class="form-group">
		<label for="password">Password</label>
		<input type="text" value="<?=$data_id->password?>" name="password" class="form-control" placeholder="Masukan Nama..">
	</div>

    
    <div class="form-group">
    <label for="hak_akses">Hak Akses</label>
		<!-- <input type="text" name="hak_akses" class="form-control" placeholder="Masukan Hak Akses...">
    </div> -->
    <br>

    <input type="text" readonly value ="<?=$data_id->hak_akses?>" >   
 <br>

 <label class="p-3 ">  Ubah Hak_Akses ke :</label>
<h6><select name="hak_akses">

<option value="#"> --Pilih-- </option>
<option value="Admin">Admin</option>
<option value="Operator">Operator</option>
<option value="Kasir">Kasir</option>

</select>
<br>
<br>

    
  </div>
 
     <input type ="submit" name="submit"  value="Simpan " 
      class="btn btn-primary " >
     

     
     <a href="<?= site_url('AController/index')?>"
     class="btn btn-warning">Batal</a>




    </from>
    </div>
</div>


</body>
</html>
