<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.3.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>RSRTC</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>


<link href="{{url('css/login2.css')}}" rel="stylesheet" type="text/css"/>


<link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('css/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<!-- <link href="{{url('css/uniform.default.css')}}" rel="stylesheet" type="text/css"> -->

<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<!-- <link href="{{url('css/jqvmap.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('css/morris.css')}}" rel="stylesheet" type="text/css"> -->
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES --> 
<!-- <link href="{{url('css/tasks.css')}}" rel="stylesheet" type="text/css"/> -->
<!-- END PAGE STYLES -->
<link href="{{url('css/components-md.css')}}" id="style_components" rel="stylesheet" type="text/css">
<link href="{{url('css/plugins-md.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('css/layout.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('css/default.css')}}" rel="stylesheet" type="text/css" id="style_color">
<link href="{{url('css/custom.css')}}" rel="stylesheet" type="text/css">


<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-md login" style="background-color: #5c97bd;">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">
  <a href="index.html">
  <!-- <img src="{{url('img/rsz_logo-rsrtc.png')}}" style="height: 50px;" alt=""/> -->
  <h3>RSRTC</h3>
  </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
  <!-- BEGIN LOGIN FORM -->
  <form class="login-form" action="{{url('/')}}" method="post">   {{ csrf_field() }}
    <div class="form-title">
      <span class="form-title">Administrator Login</span>
      
    </div>
    <div class="alert alert-danger display-hide">
      <button class="close" data-close="alert"></button>
      <span>
      Enter any username and password. </span>
    </div>
    <div class="form-group">
      <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
      <label class="control-label visible-ie8 visible-ie9">Username</label>
      <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
    </div>
    <div class="form-group">
      <label class="control-label visible-ie8 visible-ie9">Password</label>
      <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn btn-primary btn-block uppercase">Login</button>
    </div>
    <div class="form-actions">
    
      <div class="pull-right forget-password-block">
        <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password ?</a>
      </div>
    </div>
    
    <div class="create-account">
       <i class="fa fa-check-circle"></i> &nbsp; <b>LT POS</b> &nbsp;&nbsp; | &nbsp;&nbsp; <i class="fa  fa-times"></i> &nbsp; <b>Biometric</b>
    </div>
   
    
  </form>
  <!-- END LOGIN FORM -->
  <!-- BEGIN FORGOT PASSWORD FORM -->
  <form class="forget-form" action="/" method="post">
    <div class="form-title">
      <span class="form-title">Forget Password ?</span>
      <span class="form-subtitle">Enter your e-mail to reset it.</span>
    </div>
    <div class="form-group">
      <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
    </div>
    <div class="form-actions">
      <button type="button" id="back-btn" class="btn btn-default">Back</button>
      <button type="submit" class="btn btn-primary uppercase pull-right">Submit</button>
    </div>
  </form>
  <!-- END FORGOT PASSWORD FORM -->
  <!-- BEGIN REGISTRATION FORM -->
  
  <!-- END REGISTRATION FORM -->
</div>
<div class="copyright hide">
   2019 © All Rights Reserved
</div>




<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
 





<script src="{{url('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{url('js/jquery-migrate.min.js')}}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{url('js/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{url('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{url('js/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
<script src="{{url('js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<!-- <script src="{{url('js/jquery.blockui.min.js')}}" type="text/javascript"></script> -->
<!-- <script src="{{url('js/jquery.cokie.min.js')}}" type="text/javascript"></script>
<script src="{{url('js/jquery.uniform.min.js')}}" type="text/javascript"></script> -->

<!-- 
<script src="{{url('js/morris.min.js')}}" type="text/javascript"></script>
<script src="{{url('js/raphael-min.js')}}" type="text/javascript"></script>
<script src="{{url('js/jquery.sparkline.min.js')}}" type="text/javascript"></script> -->
<!-- END PAGE LEVEL PLUGINS --> 
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{url('js/metronic.js')}}" type="text/javascript"></script>
<script src="{{url('js/layout.js')}}" type="text/javascript"></script>
<script src="{{url('js/demo.js')}}" type="text/javascript"></script>
<!-- <script src="{{url('js/index3.js')}}" type="text/javascript"></script> -->
<!-- <script src="{{url('js/tasks.js')}}" type="text/javascript"></script> -->

<script src="{{url('js/jquery.validate.min.js')}}" type="text/javascript"></script>

<script src="{{url('js/login.js')}}" type="text/javascript"></script>

<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
  Layout.init(); // init current layout
  Login.init();
  Demo.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
