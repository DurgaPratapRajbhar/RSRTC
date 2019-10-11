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

                        <h3 class="block">Provide customer's details</h3>

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
                            
                            <div class="portlet-body">
                              <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; "><div class="scroller" style="overflow: hidden; width: auto;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2" data-initialized="1">
                              <div class="general-item-list">
                              <div class="item">
                                <div class="item-head">
                                  <div class="item-details">
                                    <img class="item-pic" src="img/avatar3.jpg">
                                    <a href="" class="item-name primary-link">Shurya Kant Singh</a>
                                    
                                  </div>
                                  <span class="item-status"><span class="badge badge-empty badge-success"></span> Active</span>
                                </div>
                                      <div class="item-body">
                                                                                  
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <span class="help-block">Pass Number</span>
                                            </div>  
                                            <div class="col-md-9">                                              
                                              <span class="help-block">545154110210</span>
                                            </div>                 
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <span class="help-block">Pass Type</span>
                                            </div>  
                                            <div class="col-md-9">                                              
                                              <span class="help-block">College Pass</span>
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
                        <h3 class="block">Provide Customer's details</h3>
                        <div class="form-group">
                         
                          <label class="control-label col-md-1"></label>
                          
                          <div class="col-md-3">
                            <input type="text" class="form-control" name="fname"/>
                            <span class="help-block">
                            First Name <span class="required">
                          * </span></span>
                          </div>
                        
                          <div class="col-md-3">
                            <input type="text" class="form-control" name="mname"/>
                            <span class="help-block">
                            Middle Name </span>
                          </div>

                          <div class="col-md-3">
                            <input type="text" class="form-control" name="lname"/>
                            <span class="help-block">
                            Last Name <span class="required">
                          * </span></span>
                          </div>


                        </div>
                        <!--- 11111111-->

                        <div class="form-group">
                         
                          <label class="control-label col-md-1"></label>
                          
                          <div class="col-md-3">
                           <label>
                              <input type="radio" name="gender" value="M" data-title="Male"/>
                              Male </label>
                              <label> &nbsp; &nbsp; &nbsp; 
                              <input type="radio" name="gender" value="F" data-title="Female"/>
                              Female </label>
                            <span class="help-block">
                            Gender <span class="required">
                          * </span></span>
                          </div>
                        
                          <div class="col-md-3">
                            <div class="input-icon">
                              <i class="fa fa-calendar"></i>
                              <input class="form-control date-picker" size="16" type="text" value="" data-date="" data-date-format="dd/mm/yyyy" data-date-viewmode="years"/>
                            </div>
                            <span class="help-block">
                            Date of Birth (dd/mm/yyyy) &nbsp; (35 Years) </span>
                          </div>

                          <!-- <div class="col-md-3">
                            <input type="text" class="form-control" name="lname"/>
                            <span class="help-block">
                            Last Name <span class="required">
                          * </span></span>
                          </div>
 -->

                        </div>
                        <!--- 11111111-->


                        <div class="form-group">
                         
                          <label class="control-label col-md-1"></label>
                                    
                          <div class="col-md-3">
                            <div class="input-icon">
                              <textarea class="form-control" rows="3" name="remarks"></textarea>
                            </div>
                            <span class="help-block">
                            Address <span class="required">
                          * </span></span>
                          </div>

                          <div class="col-md-3">
                            <select name="pass_type" class="form-control">
                                  <option value="">Maharashtra</option>
                            </select>
                            <span class="help-block">
                            State  <span class="required">
                          * </span></span>
                          </div>

                          
                          <div class="col-md-3">
                            <select name="pass_type" class="form-control">
                                  <option value="">--Disrict--</option>
                            </select>
                            <span class="help-block">
                            Disrict  <span class="required">
                          * </span></span>
                          </div>

                          


                        </div>

                      </div>



                      <div class="tab-pane" id="tab3">
                        <h3 class="block">Pass, Routes and Fares details</h3>
                        <div class="form-group">
                         
                          <label class="control-label col-md-1"></label>
                          
                          <div class="col-md-4">
                            <select name="pass_type" class="form-control">
                                  <option value="">1 Month (30 Days)</option>
                                  <option value="">3 Month (90 Days)</option>
                                  <option value="">1 YeaR Pass</option>
                            </select>
                            <span class="help-block">
                            Chose Pass Validity <span class="required"> * </span>
                            </span>
                          </div>

                          <div class="col-md-4">
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
                      </div>




                      <div class="tab-pane" id="tab4">
                        <h3 class="block">Confirm your account</h3>
                        <h4 class="form-section">Account</h4>
                        <div class="form-group">
                          <label class="control-label col-md-3">Username:</label>
                          <div class="col-md-4">
                            <p class="form-control-static" data-display="username">
                            </p>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Email:</label>
                          <div class="col-md-4">
                            <p class="form-control-static" data-display="email">
                            </p>
                          </div>
                        </div>
                        <h4 class="form-section">Profile</h4>
                        <div class="form-group">
                          <label class="control-label col-md-3">Fullname:</label>
                          <div class="col-md-4">
                            <p class="form-control-static" data-display="fullname">
                            </p>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Gender:</label>
                          <div class="col-md-4">
                            <p class="form-control-static" data-display="gender">
                            </p>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Phone:</label>
                          <div class="col-md-4">
                            <p class="form-control-static" data-display="phone">
                            </p>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Address:</label>
                          <div class="col-md-4">
                            <p class="form-control-static" data-display="address">
                            </p>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">City/Town:</label>
                          <div class="col-md-4">
                            <p class="form-control-static" data-display="city">
                            </p>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Country:</label>
                          <div class="col-md-4">
                            <p class="form-control-static" data-display="country">
                            </p>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Remarks:</label>
                          <div class="col-md-4">
                            <p class="form-control-static" data-display="remarks">
                            </p>
                          </div>
                        </div>
                        <h4 class="form-section">Billing</h4>
                        <div class="form-group">
                          <label class="control-label col-md-3">Card Holder Name:</label>
                          <div class="col-md-4">
                            <p class="form-control-static" data-display="card_name">
                            </p>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Card Number:</label>
                          <div class="col-md-4">
                            <p class="form-control-static" data-display="card_number">
                            </p>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">CVC:</label>
                          <div class="col-md-4">
                            <p class="form-control-static" data-display="card_cvc">
                            </p>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Expiration:</label>
                          <div class="col-md-4">
                            <p class="form-control-static" data-display="card_expiry_date">
                            </p>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Payment Options:</label>
                          <div class="col-md-4">
                            <p class="form-control-static" data-display="payment">
                            </p>
                          </div>
                        </div>
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
                        <a href="javascript:;" class="btn green button-submit">
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
