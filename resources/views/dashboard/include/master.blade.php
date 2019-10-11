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
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">

  
<link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('css/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('css/uniform.default.css')}}" rel="stylesheet" type="text/css">

<link href="{{url('css/select2.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{url('css/datepicker.css')}}"/>

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
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico">
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

<script type="text/javascript" src="{{url('js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/additional-methods.min.js')}}"></script>

<!-- 
<script src="{{url('js/morris.min.js')}}" type="text/javascript"></script>
<script src="{{url('js/raphael-min.js')}}" type="text/javascript"></script>
<script src="{{url('js/jquery.sparkline.min.js')}}" type="text/javascript"></script> -->
<!-- END PAGE LEVEL PLUGINS --> 
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{url('js/metronic.js')}}" type="text/javascript"></script>
<script src="{{url('js/layout.js')}}" type="text/javascript"></script>

<script type="text/javascript" src="{{url('js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery.bootstrap.wizard.min.js')}}"></script>
<script src="{{url('js/form-wizard.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{url('js/bootstrap-datepicker.js')}}"></script>

<!-- <script src="{{url('js/demo.js')}}" type="text/javascript"></script> -->
<!-- <script src="{{url('js/index3.js')}}" type="text/javascript"></script> -->
<!-- <script src="{{url('js/tasks.js')}}" type="text/javascript"></script> -->
<!-- END PAGE LEVEL SCRIPTS -->
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