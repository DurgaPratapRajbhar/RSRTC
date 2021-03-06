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
 <style>
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
 
.form-group0 {
    margin-bottom: 0px;
}

.form-group.form-md-line-input.form-md-floating-label .form-control ~ label {
    font-size: 14px;
    top: 12px;
    transition: 0.2s ease all;
    color: #999;
}
.form-horizontal .form-group.form-md-line-input .form-control ~ label, .form-horizontal .form-group.form-md-line-input .form-control ~ .form-control-focus {
    width: auto;
    left: 0px;
    right: 0px;
}

.form-horizontal .form-group {
    margin-right: 0px;
    margin-left: 0px;
}

.form-group.form-md-line-input .form-control {
    background: none;
    border: 0;
        border-bottom-width: 0px;
        border-bottom-style: none;
        border-bottom-color: currentcolor;
    border-bottom: 1px solid #e5e5e5;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    -o-border-radius: 0;
    border-radius: 0;
    color: #333;
    box-shadow: none;
    padding-left: 0;
    padding-right: 0;
    font-size: 12px;
}
.table {
    width: 95%;
    max-width: 100%;
    margin-bottom: 20px;
}
.table thead tr th {
    font-size: 12px;
    font-weight: 600;
}
.table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    padding: 3px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
}
</style>
 
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