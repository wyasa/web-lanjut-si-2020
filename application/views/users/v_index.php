
<br/>

    <div class="alert alert-info" role="alert" >
    <h2> <center> IGede Wiyana Yasa / 190105000 </center> </h2>
    </div>
<br>

<div class="card">
  <div class="card-header">
    DAFTAR USER
  </div>
  <a href="<?= site_url('user/tambah') ?>" class="btn btn-primary" >Tambah Data</a> <br> <br>
  <div class="card-body">
    
    <table class="table table-bordered">
  <thead>
    <tr>
    
    <th scope="col">NO</th>  
    <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Nama_lengkap</th>
      <th scope="col">Hak_Akses</th>
      <th scope="col">Aksi</th>
      
     
    </tr>
  </thead>
  <tbody>
  <?php $no = 1; ?>
  <?php foreach ($user as $key) { ?>
    <tr>
      <th scope="row"> <?=$no++?> </th>
      <td> <?= $key->id ?> </td>
      <td> <?= $key->username ?> </td>
      <td> <?= $key->password ?> </td>
      <td> <?= $key->nama_lengkap ?> </td>
      <td> <?= $key->hak_akses ?> </td>
      <td class="text-center">

      <!-- <td> <button type="button" class="btn btn-warning">Edit </button> 
       <button type="button" class="btn btn-danger">Delete</button> </td> -->
<<<<<<< HEAD
  <?php if ($this-> session-> userdata('hak_akses') =='admin'){ ?>
=======
  <?php if ($this-> session-> userdata('hak_akses') =='Admin'){ ?>
>>>>>>> 0dfe009f2bf79eeb202a8552d61d4b9f26f0dcab
        

        <a href="<?=site_url('user/edit/'.$key->id)?>"onclick="return confirm('Yakin Diedit')"
       class ="btn-info btn-sm" class ="btn btn-info  btn-sm">Edit<a/>

       <a  href="<?=site_url('user/hapus/' . $key->id)?>"onclick="return confirm('Yakin Dihapus')"
       class ="btn-danger btn-sm">Delete</a>

       <?php } ?>

       </td>
      
      
    </tr>
       
   <?php }  ?> 
    
  </tbody>
</table>
    
    </table>
   
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"></script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script> $(document).ready( function () {
    $('.table').DataTable();
} );
</script>
</div>
</body>
</html>