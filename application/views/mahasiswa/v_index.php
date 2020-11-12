<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Data Mahasiswa</title>

    <link rel="stylesheet"
    href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">

    <link rel="stylesheet"
    href="<?=base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>">

 

    
</head>
<body>
<div class= "container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">TUGAS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('mahasiswa/tambah') ?>">Tambah Data</a>
      </li>
      </ul>
  </div>

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
    Data Mahasiswa
  </div>
  <a href="<?= site_url('mahasiswa/tambah') ?>" class="btn btn-primary" >Tambah Data</a> <br> <br>
  <div class="card-body">
    
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Alamat</th>
      <th scope ="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $no =1; ?>
  <?php foreach ($tbl_mahasiswa as $key) { ?>
    <tr>
      <th scope="row"><?=$no++?></th>
      <td> <?= $key->nama ?> </td>
      
      <td> <?= $key->nim ?> </td>
      <td> <?= $key->alamat ?> </td>
      <td> <button type="button" class="btn btn-warning">Edit </button> 
       <button type="button" class="btn btn-danger">Delete</button> </td>
    </tr>
    <!-- <tr>
      <th scope="row">2</th>
      <td>Irfan</td>
      <td>20020123929</td>
      <td>Mataram Lagi</td>
      <td> <button type="button" class="btn btn-warning">Edit </button> 
       <button type="button" class="btn btn-danger">Delete</button> </td>
    </tr> -->
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