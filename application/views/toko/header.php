<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TOKO MAKMUR</title>


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js "></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
  
  
  <script>
$( function() {
  $( "#tgl" ).datepicker({
    dateFormat: "dd-mm-yy"
  });
} );
</script>

  <!-- Bootstrap core CSS -->
  <link  href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url('vendor/bootstrap/css/bootstrap.min.css');?>">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url('css/simple-sidebar.css');?>">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-info border-right " id="sidebar-wrapper">
      <div class="sidebar-heading "> <font color='white'>MENU ACTION</font> </div>
      <div class="list-group list-group-flush">
        <a href="<?= site_url('AController/index') ?>" class="list-group-item list-group-item-action bg-">STOK</a>
        <a href="<?= site_url('i_controller/index') ?>" class="list-group-item list-group-item-action bg-light">INPUT</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">OUTPUT</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">LOGOUT</a>
        <!-- <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a> -->
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-warning border-bottom">
        <button class="btn btn-primary" id="menu-toggle"> <font color='white'>Menu</font></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          
            <li class="nav-item active">
              <a class="nav-link" href="#">USERS <span class="sr-only">(current)</span></a>
            </li>
            
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> -->
              <!-- </div> -->
            </li>
          </ul>
        </div>
        <span class="navbar-text">
      <?php echo $this->session->userdata('nama_pengguna');?>
    </span>
      </nav>