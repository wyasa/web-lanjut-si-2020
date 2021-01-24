


      <div class="container-fluid">
        <h1 class="mt-4"><center><font color='blue'>STOCK GUDANG</font> </center></h1>
        
        <div class="card-body">
    
    <table class="table table-bordered">
  <thead>
  <tr class="table-success " >
    
    <th scope="col">NO</th>  
    <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Merk</th>
      <th scope="col">Kategori</th>
      <th scope="col">Jumlah</th>
      
      <!-- <th scope="col"><center> Aksi </center></th> -->
      
     
    </tr>
  </thead>
  <tbody>
  <?php $no =1; ?>
  <?php foreach ($stok as $key) { ?>
    <tr class="table-danger  ">
      <th scope="row"><?=$no++?></th>
      <td> <?= $key->id ?> </td>
      <td> <?= $key->nama ?> </td>
      <td> <?= $key->merk ?> </td>
      <td> <?= $key->kategori ?> </td>
      <td> <?= $key->jumlah ?> </td>
      <!-- <td class="text-center">

      <!-- <td> <button type="button" class="btn btn-warning">Edit </button> 
       <button type="button" class="btn btn-danger">Delete</button> </td> -->

       <?php if ($this->session->userdata('hak_akses') =='Admin'){ ?>

        <a href="<?=site_url('AController/edit/'.$key->id)?>"onclick="return confirm('Yakin Diedit')"
       class ="btn-info btn-sm" class ="btn btn-info  btn-sm">
                    <svg  xmlns     = "http://www.w3.org/2000/svg" width = "16" height = "16" fill = "currentColor" class = "bi bi-pencil-square" viewBox = "0 0 16 16">
                    <path d         = "M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule = "evenodd" d                        = "M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                     </svg>  
          Edit<a/>

       <a  href="<?=site_url('AController/hapus/' . $key->id)?>"onclick="return confirm('Yakin Dihapus')"
       class ="btn-danger btn-sm">
              <svg  xmlns = "http://www.w3.org/2000/svg" width = "16" height = "16" fill = "currentColor" class = "bi bi-x-circle" viewBox = "0 0 16 16">
              <path d     = "M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d     = "M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
           </svg>
          Delete</a>  -->

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
