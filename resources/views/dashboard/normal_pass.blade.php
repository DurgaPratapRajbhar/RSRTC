@extends('dashboard.include.master')
@section('content')


  <!-- END PAGE HEAD -->
  <!-- BEGIN PAGE CONTENT -->
  <div class="page-content">
    <div class="container">
      <!-- BEGIN PAGE BREADCRUMB -->
     
      <!-- END PAGE BREADCRUMB -->
      <!-- BEGIN PAGE CONTENT INNER -->
      <div class="row margin-top-10">
        
        <div class="col-md-12 col-sm-12">
          <!-- BEGIN PORTLET-->
          <div class="row">
        <div class="col-md-12">
          <div class="portlet light" id="form_wizard_1">
            <div class="portlet-title">
              <div class="caption">
                <span class="caption-subject font-green-sharp bold">
                <h3 class="block">Student Pass - <b>Service Pass (Normal)</b></h3> 
                </span>
              </div>
            </div>
            <div class="portlet-body form">
              <form action="javascript:;" class="form-horizontal" id="submit_form" method="POST">
                <div class="form-wizard">
                  <div class="form-body">
                    <ul class="nav nav-pills nav-justified steps">
                      <li>
                        <a href="#tab1" data-toggle="tab" class="step">
                        <span class="number">
                        1 </span>
                        <span class="desc">
                        <i class="fa fa-check"></i> Pass Availability </span>
                        </a>
                      </li>
                      <li>
                        <a href="#tab2" data-toggle="tab" class="step">
                        <span class="number">
                        2 </span>
                        <span class="desc">
                        <i class="fa fa-check"></i> Customer's Details </span>
                        </a>
                      </li>
                      <li>
                        <a href="#tab3" data-toggle="tab" class="step active">
                        <span class="number">
                        3 </span>
                        <span class="desc">
                        <i class="fa fa-check"></i> Routes & Fare Details </span>
                        </a>
                      </li>
                      <li>
                        <a href="#tab4" data-toggle="tab" class="step">
                        <span class="number">
                        4 </span>
                        <span class="desc">
                        <i class="fa fa-check"></i> Confirm & Payment </span>
                        </a>
                      </li>
                    </ul>
                    <div id="bar" class="progress progress-striped" role="progressbar">
                      <div class="progress-bar progress-bar-success">
                      </div>
                    </div>
                    <div class="tab-content">
                      <div class="alert alert-danger display-none">
                        <button class="close" data-dismiss="alert"></button>
                        You have some form errors. Please check below.
                      </div>
                      <div class="alert alert-success display-none">
                        <button class="close" data-dismiss="alert"></button>
                        Your form validation is successful!
                      </div>




                      <div class="tab-pane active" id="tab1">

                      <h3 class="block">Check Pass Feasibility</h3>

                      <table border="0" width=100% align="center">
                        <tr>
                          <td width="60%" valign="top">
                            
                          <div class="form-group">
                              <label class="control-label col-md-3">Mobile Number <span class="required">
                              * </span>
                              </label>
                              <div class="col-md-6">
                                <input type="tel" pattern="\d*" inputmode="numeric" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control" name="mb"/>
                                <span class="help-block">
                                Enter customer mobile number </span>
                              </div>                   
                          </div>
                          
                          <div class="form-group">
                              <label class="control-label col-md-3">Pass Type <span class="required">
                              * </span>
                              </label>
                            <div class="col-md-6">
                              <select name="pass_type" class="form-control">
                                    <option value="">--- Select Pass Type --- </option>
                                    <option value="">Normal Pass</option>
                                    <option value="">Student Pass</option>
                                    <option value="">Concession Pass</option>
                              </select>
                              <span class="help-block">
                              Chose customer Pass Type</span>
                            </div>
                          </div>
                          </td>

                          <td width="40%" valign="top">
                            
                            <div class="portlet-body" style="padding: 2px; border:1px solid red; border-style: dashed;>
                              <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; "><div class="scroller" style="overflow: hidden; width: auto;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2" data-initialized="1">
                              <div class="general-item-list">
                              <div class="item">
                                <div class="item-head">
                                  <div class="item-details">
                                    <img class="item-pic" src="img/avatar3.jpg">
                                    <a href="" class="item-name primary-link">Shurya Kant Singh &nbsp; ( सूर्य कांत सिंह )</a>
                                    
                                  </div>
                                  <span class="item-status"><span class="badge badge-empty badge-success"></span> Active</span>
                                </div>
                                      <div class="item-body">
                                                                                  
                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Pass Number</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-7">                                              
                                              <span class="help-block">545154110210</span>
                                            </div>                 
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Pass Type</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-7">                                              
                                              <span class="help-block">College Pass</span>
                                            </div>                  
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Validity date</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-7">                                              
                                              <span class="help-block">12/12/2018 - 12/12/2019</span>
                                            </div>                  
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Issued Depot</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-7">                                              
                                              <span class="help-block">Amravati ( अमरावती ) </span>
                                            </div>                  
                                        </div>


                                        <div class="form-group0">
                                            <div class="col-md-3">
                                                <span class="help-block"></span>
                                            </div> 
                                            <div class="col-md-6">
                                                <h4><span class="help-block"> <font color="red"><i class="fa fa-times-circle"></i> Card Already Issued</font></span></h4>
                                            </div> 
                                            <div class="col-md-3">                                              
                                              <span class="help-block"></span>
                                            </div>                  
                                        </div>

                                         
                                      </div>
                              </div>
                        
                       
                       
                                </div>
                              </div>

                            </div>
                            </div>



                          </td>
                        </tr>
                      </table>
   
                      </div>











                    <div class="tab-pane" id="tab2">
                        
                      <h3 class="block">Provide Customer's Details</h3>

                      <table border="0" width=100% align="center">
                        <tr>
                          <td width="70%" valign="top">
                            
                          
                          
                          <div class="form-group">
                             
                            <div class="col-md-3">
                              <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1">
                                <label for="form_control_1">First Name *</label>     
                              </div> 
                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-3">
                              <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1">
                                <label for="form_control_1">Middle Name</label>     
                              </div> 
                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-3">
                              <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1">
                                <label for="form_control_1">Last Name *</label>     
                              </div> 
                            </div>

                          </div>
                          </td>

                          <td width="30%" valign="top" rowspan="3">
                            
                            <div class="portlet-body" style="padding: 2px; border:1px solid #ababab; border-style: dashed;>
                              <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; "><div class="scroller" style="overflow: hidden; width: auto;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2" data-initialized="1">
                              <div class="general-item-list">
                              <div class="item">
                                <div class="item-head">
                                  <div class="item-details">
                                    <img class="item-pic" src="img/avatar3.jpg">
                                     <i class="fa fa-camera"></i> <a href="#" class="item-name primary-link">Upload Photo</a>  
                                     &nbsp; | &nbsp;                                  
                                     <i class="fa fa-camera"></i> <a href="#" class="item-name primary-link">Web Cam</a> 
                                  </div>
                                  
                                </div>
                                      <div class="item-body">
                                                                                  
                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Mobile</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-5">                                              
                                              <span class="help-block">9967844833</span>
                                            </div>                 
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Pass Type</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-5">                                              
                                              <span class="help-block">Service Pass</span>
                                            </div>                 
                                        </div>

                                        

                                         
                                      </div>
                              </div>
                        
                       
                       
                                </div>
                              </div>

                            </div>
                            </div>



                          </td>
                        </tr>

                        <tr>
                          <td width="70%" valign="top">
                            
                          
                          
                          <div class="form-group">
                             
                            <div class="col-md-3">
                              <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1">
                                <label for="form_control_1">Date Of Birth (dd/mm/yyyy)*</label>     
                              </div> 
                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-3">
                              <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1">
                                <label for="form_control_1">Gender *</label>     
                              </div> 
                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-3">
                              <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1">
                                <label for="form_control_1">Age *</label>     
                              </div> 
                            </div>

                          </div>
                          </td>
                        </tr>


                        <tr>
                          <td width="70%" valign="top">
                            
                          
                          
                          <div class="form-group">
                             
                            <div class="col-md-3">
                              <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1">
                                <label for="form_control_1">State *</label>     
                              </div> 
                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-3">
                              <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1">
                                <label for="form_control_1">District *</label>     
                              </div> 
                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-3">
                              <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1">
                                <label for="form_control_1">Taluka *</label>     
                              </div> 
                            </div>

                          </div>
                          </td>
                        </tr>


                        <tr>
                          <td width="70%" valign="top">
                            
                          
                          
                          <div class="form-group">
                             
                            <div class="col-md-7">
                              <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1">
                                <label for="form_control_1">Address *</label>     
                              </div> 
                            </div>

                           

                            <div class="col-md-1"></div>

                            <div class="col-md-3">
                              <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1">
                                <label for="form_control_1">City *</label>     
                              </div> 
                            </div>

                          </div>
                          </td>
                        </tr>

                        <tr>
                          <td width="70%" valign="top">
                            
                          
                          
                          <div class="form-group">
                             
                            <div class="col-md-3">
                              <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1">
                                <label for="form_control_1">Pin Code *</label>     
                              </div> 
                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-7">
                              <div class="form-group form-md-line-input form-md-floating-label">
                                <input type="text" class="form-control" id="form_control_1">
                                <label for="form_control_1">Email Id</label>     
                              </div> 
                            </div>

                          </div>
                          </td>
                        </tr>
                      </table>

                    </div>



                      <div class="tab-pane" id="tab3">
                        <h3 class="block">Pass, Routes and Fares details</h3>
                        <table border="0" width=100% align="center">
                        <tr>
                          <td width="65%" valign="top">
                            
                          <div class="caption"> 
                              <span class="caption-subject font-green-sharp bold">Select Validity & Bus Type</span>
                            </div>
                          
                          <div class="form-group">
                             
                            <div class="col-md-3">
                              <div class="form-group form-md-line-input form-md-floating-label">
                                <select name="pass_type" class="form-control">
                                    <option value="">--- Select Pass Validity --- </option>
                                    <option value="">1 Month (30 days)</option>
                                    <option value="">3 Month (90 Days)</option>
                                    <option value="">1 Year</option>
                                </select>
                                  
                              </div> 
                            </div>

                            <div class="col-md-1"></div>

                            <div class="col-md-3">
                              <div class="form-group form-md-line-input form-md-floating-label">
                                <select name="pass_type" class="form-control">
                                    <option value="">--- Select Bus Type --- </option>
                                    <option value="">Ordinary bus</option>
                                    <option value="">Semi Luxury</option>
                                    <option value="">Sleeper</option>
                                </select>     
                              </div> 
                            </div>

                           

                          </div>
                          </td>

                          <td width="35%" valign="top" rowspan="3">
                            
                            <div class="portlet-body" style="padding: 2px; border:1px solid #ababab; border-style: dashed;>
                              <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; "><div class="scroller" style="overflow: hidden; width: auto;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2" data-initialized="1">
                              <div class="general-item-list">
                              <div class="item">
                                <div class="item-head">
                                  <div class="item-details">
                                    <img class="item-pic" src="img/avatar3.jpg">
                                     <i class="fa fa-camera"></i> <a href="#" class="item-name primary-link">Upload Photo</a>  
                                     &nbsp; | &nbsp;                                  
                                     <i class="fa fa-camera"></i> <a href="#" class="item-name primary-link">Web Cam</a> 
                                  </div>
                                  
                                </div>
                                      <div class="item-body">
                                                                                  
                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Mobile</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-6">                                              
                                              <span class="help-block">9967844833</span>
                                            </div>                 
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Pass Type</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-6">                                              
                                              <span class="help-block">Service Pass</span>
                                            </div>                 
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Name</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-6">                                              
                                              <span class="help-block">Rajesh Kumar (35)</span>
                                            </div>                 
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Address</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-6">                                              
                                              <span class="help-block">402, Shiv Apt. CHS, Panvel</span>
                                            </div>                 
                                        </div>

                                        

                                         
                                      </div>
                              </div>
                        
                       
                       
                                </div>
                              </div>

                            </div>
                            </div>



                          </td>
                        </tr>

                        <tr>
                          <td width="70%" valign="top">
                            
                          <!-- BEGIN EXAMPLE TABLE PORTLET-->
          
                          <div class="portlet-title">
                            <div class="caption"> 
                              <span class="caption-subject font-green-sharp bold">Choose Route</span>
                            </div>
                          
                          </div>
                          <div class="portlet-body">
                           
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                            <thead>
                            <tr>
                              <th class="table-checkbox">
                                Sr.
                              </th>
                              <th>
                                 From - To
                              </th>
                              <th>
                                 Bus Type
                              </th>
                              <th>
                                 Fare Type
                              </th>
                              <th align="right">
                                 Fare
                              </th>
                             
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="odd gradeX">
                              <td><input type="checkbox" class="checkboxes" value="1"/></td>
                              <td>Mumbai Centeral &nbsp; <i class="fa fa-exchange"></i> &nbsp; Bhor</td>
                              <td>Ordinary</td>
                              <td>N</td>
                              <td align="right">2,000.00</td>
                            </tr>

                            <tr class="odd gradeX">
                              <td><input type="checkbox" class="checkboxes" value="1"/></td>
                              <td>Panvel &nbsp; <i class="fa fa-exchange"></i> &nbsp; Shivaji Nagar Pune</td>
                              <td>Ordinary</td>
                              <td>N</td>
                              <td align="right">780.00</td>
                            </tr>

                            <tr class="odd gradeX">
                              <td><input type="checkbox" class="checkboxes" value="1"/></td>
                              <td>Dadar Mumbai &nbsp; <i class="fa fa-exchange"></i> &nbsp; Khopoli</td>
                              <td>Ordinary</td>
                              <td>N</td>
                              <td align="right">1,280.50</td>
                            </tr>
                           
                            </tbody>
                            </table>
                          </div>
                       
                        <!-- END EXAMPLE TABLE PORTLET-->
                          
                       
                          </td>
                        </tr>

                      </table>
                      </div>




                      <div class="tab-pane" id="tab4">
                   
                         <h3 class="block">Confirm Customer's Pass Details</h3>

                      <table border="0" width=100% align="center">
                        <tr>
                          <td width="48%" valign="top">
                            
                          <div class="portlet-body" style="padding: 2px; border:1px solid #ababab; border-style: dashed;>
                              <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; "><div class="scroller" style="overflow: hidden; width: auto;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2" data-initialized="1">
                              <div class="general-item-list">
                              <div class="item">
                                <div class="item-head">
                                  <div class="item-details">
                                    &nbsp; &nbsp; <img class="item-pic" src="img/avatar3.jpg">
                                   <a href="#" class="item-name primary-link"><b>Shurya Kant Singh &nbsp; ( सूर्य कांत सिंह )</b></a>
                                    
                                  </div>
                                 
                                </div>
                                      <div class="item-body">
                                                                                  
                                        
                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Pass Type</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-7">                                              
                                              <span class="help-block"><b>Service Pass (Normal)</b></span>
                                            </div>                  
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Pass Validity</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-7">                                              
                                              <span class="help-block"><b>1 Month (30 days)</b></span>
                                            </div>                  
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Valid From</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-7">                                              
                                              <span class="help-block"><b>12/11/2019 - 12/12/2019</b></span>
                                            </div>                  
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Route</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-7">                                              
                                              <span class="help-block"><b>Panvel &nbsp; <i class="fa fa-exchange"></i> &nbsp; Shivaji Nagar Pune</b></span>
                                            </div>                  
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Bus Type</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-7">                                              
                                              <span class="help-block"><b>Ordinary Bus</b></span>
                                            </div>                  
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Mobile Number</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-7">                                              
                                              <span class="help-block">9967844833 </span>
                                            </div>                  
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Card Collect From</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-7">                                              
                                              <span class="help-block">Amravati ( अमरावती ) </span>
                                            </div>                  
                                        </div>                                       

                                         
                                      </div>
                              </div>
                        
                       
                       
                                </div>
                              </div>

                            </div>
                            </div>
                          </td>
                          <td width="2%" valign="top"></td>

                          <td width="48%" valign="top">
                            
                            <div class="portlet-body" style="padding: 2px; border:1px solid #ababab; border-style: dashed;>
                              <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; "><div class="scroller" style="overflow: hidden; width: auto;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2" data-initialized="1">
                              <div class="general-item-list">
                              <div class="item">
                                
                                      <div class="item-body">

                                        <div class="form-group0">
                                             
                                            <div class="col-md-12">
                                                <h3><a href="#" class="item-name primary-link">Fare Calculation</a></h3>
                                            </div> 
                                                         
                                        </div>
                                                                                  
                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Pass Amount</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-7" align="right">                                              
                                              <span class="help-block">200.00</span>
                                            </div>                 
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">GST</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-7" align="right">                                              
                                              <span class="help-block">0.36</span>
                                            </div>                  
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Loading Fee</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-7" align="right">                                              
                                              <span class="help-block">0.00</span>
                                            </div>                  
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Card Fee</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-7" align="right">                                              
                                              <span class="help-block">50.00</span>
                                            </div>                  
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Convenience Fee</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-7" align="right">                                              
                                              <span class="help-block">20.00</span>
                                            </div>                  
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">e-Purse Fee</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-7" align="right">                                              
                                              <span class="help-block">0.00</span>
                                            </div>                  
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block">Pass Charges</span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block">:</span>
                                            </div> 
                                            <div class="col-md-7" align="right">                                              
                                              <span class="help-block">2.00</span>
                                            </div>                  
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-12">
                                                <hr>
                                            </div>                
                                        </div>

                                        <div class="form-group0">
                                            <div class="col-md-4">
                                                <span class="help-block"><b>Total Amount Payable</b></span>
                                            </div> 
                                            <div class="col-md-1">
                                                <span class="help-block"></span>
                                            </div> 
                                            <div class="col-md-7" align="right">                                              
                                              <span class="help-block"><b>272.36</b></span>
                                            </div>                  
                                        </div>


                                        

                                         
                                      </div>
                              </div>
                        
                       
                       
                                </div>
                              </div>

                            </div>
                            </div>



                          </td>
                        </tr>
                      </table>



                      </div>
                    </div>
                  </div>
                  <div class="form-actions">
                    <div class="row">
                      <div class="col-md-offset-3 col-md-9">
                        <a href="javascript:;" class="btn default button-previous">
                        <i class="m-icon-swapleft"></i> Back </a>
                        <a href="javascript:;" class="btn blue button-next">
                        Continue <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                        <a href="{{url('submit-registration')}}" class="btn green button-submit">
                        Submit <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
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
