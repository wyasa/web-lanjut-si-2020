<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet"
    href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">

    <link rel="stylesheet"
    href="<?=base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>">    
    <title> Tambah Data Mahasiswa</title>

</head>
<body>
<div class="container">

    <h2> Tambah Data </h2>
    <hr>
    <form action ="<?= site_url('mahasiswa/proses_tambah') ?>" method="post">

        <div class="from-group">
            <label for="">NAMA</label>
            <input type="text" name="txtnama" class="from-control" >
        </div>

        <div class="from-group">
            <label for="">NIM</label>
            <input type="int" name="intnim" class="from-control" >
            <!-- //<input type="text" name="nim" onkeypress="return event.charCode >= 48 && event.charCode <=57"></td>// -->
        </div>

        <div class="from-group">
            <label for="">ALAMAT</label>
            <textarea name="txtalamat" class="from-control" id="" 
            cols="30" rows="5"></textarea>
           
        </div>

     <input type ="submit" name="submit" value="Simpan" 
     class="btn btn-primary">
     
     <a href="<?= site_url('mahasiswa/index')?>"
     class="btn btn-warning">Batal</a>




    </from>
</div>


</body>
</html>
