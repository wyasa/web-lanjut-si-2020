


      <div class="container-fluid">
        <h1 class="mt-4"><font color='blue'>STOCK GUDANG</font></h1>
        
        <div class="card-body">
    
    <table class="table table-bordered">
  <thead>
    <tr>
    
    <th scope="col">NO</th>  
    <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Merk</th>
      <th scope="col">Kategori</th>
      <th scope="col">Jumlah</th>
      <th scope="col"><center> Aksi </center></th>
      
     
    </tr>
  </thead>
  <tbody>
  <?php $no =1; ?>
  <?php foreach ($stok as $key) { ?>
    <tr>
      <th scope="row"><?=$no++?></th>
      <td> <?= $key->id ?> </td>
      <td> <?= $key->nama ?> </td>
      <td> <?= $key->merk ?> </td>
      <td> <?= $key->kategori ?> </td>
      <td> <?= $key->jumlah ?> </td>
      <td class="text-center">

      <!-- <td> <button type="button" class="btn btn-warning">Edit </button> 
       <button type="button" class="btn btn-danger">Delete</button> </td> -->

       <?php if ($this->session->userdata('hak_akses') =='Admin'){ ?>

        <a href="<?=site_url('AController/edit/'.$key->id)?>"onclick="return confirm('Yakin Diedit')"
       class ="btn-info btn-sm" class ="btn btn-info  btn-sm">Edit<a/>

       <a  href="<?=site_url('AController/hapus/' . $key->id)?>"onclick="return confirm('Yakin Dihapus')"
       class ="btn-danger btn-sm">Delete</a>

       <?php } ?>
      </td>
      </tr>
      <?php } ?>
  
       
 
    
  </tbody>
</table>
    
  </div>
</div>





      <!-- </div> -->
    <!-- </div> -->
    <!-- /#page-content-wrapper -->

  <!-- </div> -->
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->

  <script src="<?=base_url('vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?=base_url('vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"> </script>

<script src="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"> </script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"> </script>
<script> $(document).ready( function () {
    $('.table').DataTable();
} );
</script>
</div>
</body>




</html>
