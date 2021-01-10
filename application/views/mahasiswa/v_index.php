
<br/>

    <div class="alert alert-info" role="alert" >
    <h2> <center> IGede Wiyana Yasa / 1901050001 </center> </h2>
    </div>
<br>

<div class="card">
  <div class="card-header">
    DAFTAR MAHASISWA
  </div>
  <a href="<?= site_url('AController/tambah') ?>" class="btn btn-primary" >Tambah Data</a> <br> <br>
  <div class="card-body">
    
    <table class="table table-bordered">
  <thead>
    <tr>
    
    <th scope="col">NO</th>  
    <th scope="col">nim</th>
      <th scope="col">nama</th>
      <th scope="col">alamat</th>
      <th scope="col">Aksi</th>
      
     
    </tr>
  </thead>
  <tbody>
  <?php $no =1; ?>
  <?php foreach ($stok as $key) { ?>
    <tr>
      <th scope="row"><?=$no++?></th>
      <td> <?= $key->nim ?> </td>
      <td> <?= $key->nama ?> </td>
      <td> <?= $key->alamat ?> </td>
      <td class="text-center">

      <!-- <td> <button type="button" class="btn btn-warning">Edit </button> 
       <button type="button" class="btn btn-danger">Delete</button> </td> -->
  <?php if ($this->session->userdata('hak_pengguna') =='admin'){ ?>
        

        <a href="<?=site_url('AController/edit/'.$key->nim)?>"onclick="return confirm('Yakin Diedit')"
       class ="btn-info btn-sm" class ="btn btn-info  btn-sm">Edit<a/>

       <a  href="<?=site_url('AController/hapus/' . $key->nim)?>"onclick="return confirm('Yakin Dihapus')"
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