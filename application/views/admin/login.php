
<!DOCTYPE html>
<html lang="en" class="h-100">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Web Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="<?= base_url('css/admin/login.css') ?>" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="<?= base_url('css/admin/bootstrap.min.css') ?>" rel="stylesheet">
    </head>




<body class="h-100">
    <div class="authincation h-100" >
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
        <?php 
                    if(isset($success)){
                        echo "<div class='alert alert-success'>";
                        echo $success;
                        echo "</div>";
                    }
                    if(isset($error)){
                        echo "<div class='alert alert-danger'>";
                        echo $error;
                        echo "</div>";
                    }
                    echo validation_errors('<div class="alert alert-danger">', '</div>');
        ?>
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Login</h4>
                                    
                                    <form action="<?= base_url('admin/login/login') ?>" method="post">
                                         <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="" name="email" id="username">
                                        </div>
                                       
                                     
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="">
                                        </div>

                                      
                                        <div class="text-center mt-4">
                                            <button type="submit"  class="btn btn-info btn-block">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</html>