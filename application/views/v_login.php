<!-- <html>
<thml lang="en">
<head>

<link rel="stylesheet"
    href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>">

    <link rel="stylesheet"
    href="<?=base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>">
    
<title>Login</title>


</head>
<body>
    <div class="container mt-6">

        <div class="col-md-4 ">
             <div class="card">
                <div class="card-header">
            FROM LOGIN

                 </div>
                    <div class="card-body">
                        <?php   if ($this->session->flashdata('pesan')){?>
                        <div class = "alert alert-danger">
                        <?php echo ($this->session->flashdata('pesan')) ?>
                        </div>
                        <?php } ?>


                        <form action="<?=site_url('login/proses')?> " method="post">
                            <div class ="from-group">
                                <label for="">Username</label>
                                <input type="text" name="txtusername"
                                class = "from-control">
                            </div>
                        <div class="from-group">
                            <label for="">Password</label>
                            <input type="password" name="txtpassword"
                                class=" from-control">
                        
                        </div>
                        <input type="submit" class="btn btn-primary">
                        </form>
                   
                    
                    </div>
         
            </div>    
        
        </div>
    
    
    </div>

</body>

</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="login-form">

                <?php   if ($this->session->flashdata('pesan')){?>
                        <div class = "alert alert-danger">
                        <?php echo ($this->session->flashdata('pesan')) ?>
                        </div>
                        <?php } ?>
    <form action="<?=site_url('login/proses')?>" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" name="txtusername" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="txtpassword" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="<?=site_url('user/view_index')?>">Create an Account</a></p>
</div>
</body>
</html>