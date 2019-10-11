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
                <h3 class="block">Student Pass - <b>Normal Pass</b></h3> 
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
                        <div class="form-group">
                          <label class="control-label col-md-3">Mobile Number <span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
                            <input type="tel" pattern="\d*" inputmode="numeric" maxlength="10" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control" name="username"/>
                            <span class="help-block">
                            Enter customer mobile number </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Pass Type <span class="required">
                          * </span>
                          </label>
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
                      <div class="tab-pane" id="tab2">
                        <h3 class="block">Fill Customer's details</h3>
                        <div class="form-group">
                          <label class="control-label col-md-3">Fullname <span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" name="fullname"/>
                            <span class="help-block">
                            Provide your fullname </span>
                          </div>

                          <label class="control-label col-md-3">Fullname <span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" name="fullname"/>
                            <span class="help-block">
                            Provide your fullname </span>
                          </div>
                        </div>



                        <div class="form-group">
                          <label class="control-label col-md-3">Phone Number <span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" name="phone"/>
                            <span class="help-block">
                            Provide your phone number </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Gender <span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
                            <div class="radio-list">
                              <label>
                              <input type="radio" name="gender" value="M" data-title="Male"/>
                              Male </label>
                              <label>
                              <input type="radio" name="gender" value="F" data-title="Female"/>
                              Female </label>
                            </div>
                            <div id="form_gender_error">
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Address <span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" name="address"/>
                            <span class="help-block">
                            Provide your street address </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">City/Town <span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" name="city"/>
                            <span class="help-block">
                            Provide your city or town </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Country</label>
                          <div class="col-md-4">
                            <select name="country" id="country_list" class="form-control">
                              <option value=""></option>
                              <option value="AF">Afghanistan</option>
                              <option value="AL">Albania</option>
                              <option value="DZ">Algeria</option>
                              <option value="AS">American Samoa</option>
                              <option value="AD">Andorra</option>
                              <option value="AO">Angola</option>
                              <option value="AI">Anguilla</option>
                              <option value="AR">Argentina</option>
                              <option value="AM">Armenia</option>
                              <option value="AW">Aruba</option>
                              <option value="AU">Australia</option>
                              <option value="AT">Austria</option>
                              <option value="AZ">Azerbaijan</option>
                              <option value="BS">Bahamas</option>
                              <option value="BH">Bahrain</option>
                              <option value="BD">Bangladesh</option>
                              <option value="BB">Barbados</option>
                              <option value="BY">Belarus</option>
                              <option value="BE">Belgium</option>
                              <option value="BZ">Belize</option>
                              <option value="BJ">Benin</option>
                              <option value="BM">Bermuda</option>
                              <option value="BT">Bhutan</option>
                              <option value="BO">Bolivia</option>
                              <option value="BA">Bosnia and Herzegowina</option>
                              <option value="BW">Botswana</option>
                            
                              <option value="TM">Turkmenistan</option>
                              <option value="TC">Turks and Caicos Islands</option>
                              <option value="TV">Tuvalu</option>
                              <option value="UG">Uganda</option>
                             
                              <option value="ZM">Zambia</option>
                              <option value="ZW">Zimbabwe</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Remarks</label>
                          <div class="col-md-4">
                            <textarea class="form-control" rows="3" name="remarks"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="tab3">
                        <h3 class="block">Provide your billing and credit card details</h3>
                        <div class="form-group">
                          <label class="control-label col-md-3">Card Holder Name <span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" name="card_name"/>
                            <span class="help-block">
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Card Number <span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
                            <input type="text" class="form-control" name="card_number"/>
                            <span class="help-block">
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">CVC <span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
                            <input type="text" placeholder="" class="form-control" name="card_cvc"/>
                            <span class="help-block">
                            </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Expiration(MM/YYYY) <span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
                            <input type="text" placeholder="MM/YYYY" maxlength="7" class="form-control" name="card_expiry_date"/>
                            <span class="help-block">
                            e.g 11/2020 </span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3">Payment Options <span class="required">
                          * </span>
                          </label>
                          <div class="col-md-4">
                            <div class="checkbox-list">
                              <label>
                              <input type="checkbox" name="payment[]" value="1" data-title="Auto-Pay with this Credit Card."/> Auto-Pay with this Credit Card </label>
                              <label>
                              <input type="checkbox" name="payment[]" value="2" data-title="Email me monthly billing."/> Email me monthly billing </label>
                            </div>
                            <div id="form_payment_error">
                            </div>
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
