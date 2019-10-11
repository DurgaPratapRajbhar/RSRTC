<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
<title>RSRTC</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">

 -->

<link href="{{url('css/app.css')}}" rel="stylesheet" type="text/css" />

<!-- <link rel="shortcut icon" href="favicon.ico"> -->
<!-- <style>
  .nav > li > a {
    position: relative;
    display: block;
    padding: 0px 0px;
}
.form-wizard .steps {
    padding: 0px 0;
    margin-bottom: 5px;
    background-color: #fff;
    background-image: none;
    filter: none;
    border: 0px;
    box-shadow: none;
}
</style> -->
</head>

<body class="page-md"> 


<div class="page-header" style="position: sticky;top:0;z-index: 999;">
 
   @include('dashboard.include.header')
   @include('dashboard.include.sidebars')
</div>

<div  class="page-container">
@yield('content')
</div>

@include('dashboard.include.footer')

<script src="{{url('js/app.js')}}" type="text/javascript"></script>


<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   FormWizard.init();
   //Demo.init(); // init demo(theme settings page)
  // Index.init(); // init index page
  // Tasks.initDashboardWidget(); // init tash dashboard widget
});
</script>
</body>
</html>