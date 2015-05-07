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
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url()); ?>assets/css/style.css">
    <script type="text/javascript" src="<?php echo(base_url()); ?>assets/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="<?php echo(base_url()); ?>assets/css/font-awesome-4.3.0/css/font-awesome.min.css">
    <!-- AngularJS -->
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
</head>
<body class="col-lg-12">
	<div id="wrapper">
	<nav class="navbar navbar-default" style="background:#f0ad4e">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="row">
      <div class="col-xs-10">
        
        <div class="navbar-header">
          <div class="col-md-offset-1">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="http://www.yigitozkavci.com/" target="_blank">DevTeam</a>

          </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         
         
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url()?>index.php/signup">Sign Up</a></li>

            <li><a href="<?php echo base_url()?>index.php/login">LogIn</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Profile<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings</a></li>
                <li><a href="#">Log Out</a></li>
              </ul>
            </li>

          </ul>
        </div>
        </div><!-- /.navbar-collapse -->
      </div>
    </div><!-- /.container-fluid -->
  </nav>

  <div id="container-fluid">
    <div class="row">


     <div class="col-lg-4 col-md-offset-1">

      
     </div>

    
     <div class="col-lg-6">
      <!-- Single button -->
      <button type="button" class="btn btn-warning pagebutton" onclick="window.location.href='<?php echo base_url()?>index.php/questions'">
        Quesetions
      </button>
      <button type="button" class="btn btn-warning pagebutton" onclick="window.location.href='<?php echo base_url()?>index.php/tags'">
        Tags
      </button>

      <button type="button" class="btn btn-warning pagebutton">
        Users
      </button>

      <button type="button" class="btn btn-warning pagebutton">
        Badgets
      </button>

      <button type="button" class="btn btn-warning pagebutton" onclick="window.location.href='<?php echo base_url()?>index.php/unanswered'">
        Unanswered
      </button>

      <button type="button" class="btn btn-warning pagebutton"  onclick="window.location.href='<?php echo base_url()?>index.php/add'">
        Ask Question
      </button>
    </div>

  </div>
  <!-- /.col-lg-12 -->
  </div>
  