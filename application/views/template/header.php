<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATABASE MAHASISWA</title>

        
    <link rel="stylesheet" href="<?=base_url('assets/bootstrap/css/bootstrap.min.css');?>">
    
    <link rel="stylesheet"href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">


 
    <div class="container p-3 my-3 border">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?= site_url('AController/tambah') ?>" >Data Mahasiswa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href='AController/tambah'>Tambah Data</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          USER
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= site_url('user/user_edit') ?>">Edit</a>
          <a class="dropdown-item" href="<?= site_url('login/logout') ?>">Log Out</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Delete User</a>
        </div>
      </li>
      
    </ul>
    <span class="navbar-text">
      <?php echo $this->session->userdata('nama_pengguna');?>
    </span>

</nav>