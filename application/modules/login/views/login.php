<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>
        <!-- META SECTION -->
        <title>SIAB - Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url() ?>assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>

        <div class="login-container lightmode">

            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Log In</strong> to your account</div>
                    <form action="<?php base_url() ?>login/login_adm" class="form-horizontal" method="POST">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" name="username" class="form-control" placeholder="Username"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" name="password" class="form-control" placeholder="Password"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 pull-left">
                                <a href="<?php base_url() ?>../home" class="btn btn-info fa fa-external-link" title="Menuju Halaman Depan"></a>
                            </div>
                            <div class="col-md-6 pull-right">
                                <button class="btn btn-success btn-block"><i class="fa fa-sign-in"></i>Log In</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="">
                        <p class="text-center">&copy; 2015 Sistem Informasi Assessment Bencana</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>