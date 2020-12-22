<html>
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

</html>