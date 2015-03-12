<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Stack Exchange Login</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/general.css">
      
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url()); ?>assets/css/bootstrap.min.css">
  
</head>
<body style="background-color:#6180b7">
<div class="container-fluid">
    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" 
    style="margin-top:50px;border:10px solid rgba(255, 255, 255, .3); padding:0px; border-radius:5px;">
        <div class="panel panel-primary" style="margin:0px;border:none;">
            <div class="panel-heading text-center">
                <h1 style="font-size:20px;">Stack Exchange Kullanıcı Girişi</h1>
            </div>
            <div class="panel-body">
                <form method="post" action="<?php echo base_url()?>index.php/login/process">
                    <div class="form-group text-center">
                        <label for="username">Kullanıcı Adı: </label>
                        <input class="form-control" type="text" name="username" value="" placeholder="Username or Email">
                    </div>
                    <div class="form-group text-center">
                        <label for="password">Şifre: </label>
                        <input class="form-control" type="password" name="password" value="" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="submit" name="mysubmit" value="Giriş Yap">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>