<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TOKO MAKMUR </title>

    <link rel="stylesheet"
    href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">

    <link rel="stylesheet"
    href="<?=base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>">

 

    
</head>
<body>
<div class= "container">
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">TOKO MAKMUR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div>
      <ul class="nav navbar-nav navbar-right">
      <li class="nav-item">
      <a class="nav-link" href="#"><b>IGede Wiyana Yasa</b></a>
      </li>
    </ul>
   </div>
</nav>
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
  <?php foreach ($mahasiswa as $key) { ?>
    <tr>
      <th scope="row"><?=$no++?></th>
      <td> <?= $key->nim ?> </td>
      <td> <?= $key->nama ?> </td>
      <td> <?= $key->alamat ?> </td>
      <td class="text-center">

      <!-- <td> <button type="button" class="btn btn-warning">Edit </button> 
       <button type="button" class="btn btn-danger">Delete</button> </td> -->
        <a href= " " class ="btn btn-info  btn-sm">Edit<a/>
       <a  href= "<?=site_url('AController/hapus/' . $key->nim)?>"
       onclick="return confirm('Yakin Dihapus')"
       class ="btn-danger btn-sm">Delete</a>

       </td>
      
      
    </tr>
       


    <?php } ?>
  </tbody>
</table>
    
    </table>
   
  </div>
</div>

<script src="<?=base_url('assets/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
</div>
</body>
</html>