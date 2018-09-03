<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>user_ussets/images/favicon.png">
    <title><?=$title?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>user_ussets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=base_url()?>user_ussets/css/helper.css" rel="stylesheet">
    <link href="<?=base_url()?>user_ussets/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>user_ussets/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>Login</h4>
                                <form>
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                                <input type="checkbox"> Remember Me
                                            </label>
                                        <label class="pull-right">
                                                <a href="#" id="forgotpass">Forgotten Password?</a>
                                        </label>

                                    </div>
                                    <button id="login" type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Don't have account ? <a href="<?=base_url()?>pages/register"> Sign Up Here</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="<?=base_url()?>user_ussets/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?=base_url()?>user_ussets/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="<?=base_url()?>user_ussets/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?=base_url()?>user_ussets/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="<?=base_url()?>user_ussets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?=base_url()?>user_ussets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?=base_url()?>user_ussets/js/custom.min.js"></script>

    <script src="<?=base_url()?>user_ussets/js/lib/sweetalert/sweetalert.min.js"></script>

    <script >
        function login()
        {
            
            event.preventDefault();
        }

        $("#login").click(function (e) {
            window.location.href="<?=base_url()?>pages/dashboard";
            e.preventDefault();
        });

          $("#forgotpass").click(function(event) {
                swal({
                    title: "Reset your password",
                    text: "Enter your email address and we will send you a link to reset your password.",
                    type: "input",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    animation: "slide-from-top",
                    inputPlaceholder: "Enter Your Email Address"
                },
                function(inputValue){
                    if (inputValue === false) return false;
                    if (inputValue === "") {
                        swal.showInputError("You need to write your Email Address!");
                        return false
                    }
                    swal("Success !!", "The password was sent your email:" + inputValue, "success");
                });
          }); 
    </script>

</body>

</html>