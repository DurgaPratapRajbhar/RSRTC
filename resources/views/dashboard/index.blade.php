@extends('dashboard.include.master')
@section('content')


  <!-- END PAGE HEAD -->
  <!-- BEGIN PAGE CONTENT -->
  <div class="page-content">
    <div class="container">
      <!-- BEGIN PAGE BREADCRUMB -->
      <ul class="page-breadcrumb breadcrumb">
        <li>
          <a href="#">Dashboard</a><i class="fa fa-circle"></i>
        </li>
       <!--  <li class="active">
           Dashboard
        </li> -->
      </ul>
      <!-- END PAGE BREADCRUMB -->
      <!-- BEGIN PAGE CONTENT INNER -->
      <div class="row margin-top-10">
        
        <div class="col-md-12 col-sm-12">
          <!-- BEGIN PORTLET-->
          <div class="portlet light ">
            <div class="portlet-title">
              <div class="caption caption-md">
                <i class="icon-bar-chart theme-font hide"></i>
                <span class="caption-subject theme-font bold">Today's Overview</span>
                <span class="caption-helper hide">weekly stats...</span>
              </div>
              <!-- <div class="actions">
                <div class="btn-group btn-group-devided" data-toggle="buttons">
                  <label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
                  <input type="radio" name="options" class="toggle" id="option1">Today</label>
                  <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                  <input type="radio" name="options" class="toggle" id="option2">Week</label>
                  <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                  <input type="radio" name="options" class="toggle" id="option2">Month</label>
                </div>
              </div> -->
            </div>
            <div class="portlet-body">
             
              <div class="table-scrollable table-scrollable-borderless">
                <table class="table table-hover table-light">
                <thead>
                <tr class="uppercase">
                  <th>
                     
                  </th>
                  <th>
                     Count
                  </th>
                  <th>
                     Amount
                  </th>
                  
                </tr>
                </thead>
                <tr>
                   
                  <td>
                    <a href="javascript:;" class="primary-link">Registration</a>
                  </td>
                  <td>
                     20
                  </td>
                  <td>
                     15,000
                  </td>
                 
                </tr>
                
               
                <tr>
                   
                  <td>
                    <a href="javascript:;" class="primary-link">Top Up</a>
                  </td>
                  <td>
                     20
                  </td>
                  <td>
                     15,000
                  </td>
                  
                </tr>
                </table>
              </div>
            </div>
          </div>
          <!-- END PORTLET-->
        </div>
      </div>
   
    </div>
  </div>
  <!-- END PAGE CONTENT -->

 

@endsection
