<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>E-DOKUMEN</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url('assets/font-awesome-4.3.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/dist/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/square/blue.css') ?>" rel="stylesheet" type="text/css" />

	<link rel="icon" href="<?php echo base_url('assets/icon.png') ?>" sizes="32x32" />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="login-page" style="background-image: url(<?php echo base_url('');?>);background-repeat: no-repeat;background-size: cover;">
        <div class="login-box">
            <div class="login-logo" style="line-height: 1.2; font-size: 20px;">
                <a href="<?php echo base_url('') ?>">
                <b style="font-size:18pt; font-family:'Helvetica';">E-DOKUMEN<br>Kabupaten Sukoharjo</b>
                <br></a>
            </div><!-- /.login-logo -->
			<div class="login-box-body" style="background-color:#f39c12;">
			<div style="font-size:24px; color:white; text-align:center;">Login User</div>
			</div>
            <div class="login-box-body">
                <form action="<?php echo site_url('auth/login') ?>" method="post">
                    <div class="form-group has-feedback">
                        Username<input name="username" type="text" class="form-control" placeholder="Username"/>
                    </div>
                    <div class="form-group has-feedback">
                        Password<input name="password" type="password" class="form-control" placeholder="Password"/>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">                      
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-success btn-block btn-flat">Enter</button>
                        </div><!-- /.col -->
                    </div>
                </form>

               

               <br>
               

            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.3 -->
        <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/jQuery/jQuery-2.1.3.min.js') ?>"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url('assets/AdminLTE-2.0.5/plugins/iCheck/icheck.min.js') ?>" type="text/javascript"></script>
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>