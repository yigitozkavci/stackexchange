<?php
$userid = FALSE;
if(array_key_exists("userid", $this->session->userdata))
{
	$userid = $this->session->userdata['userid'];
}
?><html>
<head>
	   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stack Exchange Projesi</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url()); ?>assets/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo(base_url()); ?>assets/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="<?php echo(base_url()); ?>assets/css/font-awesome-4.3.0/css/font-awesome.min.css">
    <!-- AngularJS -->
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
</head>
<body class="col-lg-12">
	<div id="wrapper">
	<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0px;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Stack Exchange</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle navbar-right-item" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                        
                        <i class="fa fa-caret-down"></i>
                        <?php 
                        if($userid != FALSE)
                            echo($this->session->userdata['username']); 
                        else
                            echo " Üye Girişi";
                            ?>
                    </a>
                    <ul class="dropdown-menu">
                        <?php if($userid != FALSE) { ?>
                        <li>
                            <a href="<?php echo(base_url()); ?>index.php/profile"><i class="fa fa-gear fa-fw"></i> Ayarlar</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo(base_url()); ?>index.php/logout"><i class="fa fa-sign-out fa-fw"></i> Çık</a>
                        </li>
                        <?php }else{ ?>
                        <li>
                            <a ><form method="post" action="<?php echo base_url()?>index.php/login/process">
        <p><input type="text" name="username" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p style="float:right"class="submit"><input type="submit" name="mysubmit" value="Giriş Yap"></p>
      </form></a>
                        </li>
                        <?php } ?>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
          
        </nav>
    </div>
     <div id="page-wrapper">
            
            <!-- /.row -->
            <div class="row">
