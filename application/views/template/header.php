<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATABASE MAHASISWA</title>

    <link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?=base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>">
    <link rel="stylesheet"href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">


 
<div class="container mt-6">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?= site_url('AController/tambah') ?>" >Data Mahasiswa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href='Controller/tambah'>Tambah Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('login/logout') ?>">Log Out</a>
      </li>
      
    </ul>
    <span class="navbar-text">
      <?php echo $this->session->userdata('nama_pengguna');?>
    </span>
  </div>
</nav>