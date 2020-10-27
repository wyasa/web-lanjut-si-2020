<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Data Mahasiswa</title>

    <link rel="stylesheet"
    href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">
    
</head>
<body>
    <h2> Data Mahasiswa<h/2>
    <p> Nama : <?php echo $nama; ?> </p>
    <p> Alamat : <?php echo $alamat; ?> </p>
    <p> NIM : <?php echo $nim; ?> </p>
    <p> jurusan : <?php echo $jurusan; ?> </p>
    
</body>
</html>