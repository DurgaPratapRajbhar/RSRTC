<div class="page-header-top">
    <div class="container">
      <!-- BEGIN LOGO -->
      <div class="page-logo">
        <a href="{{url('/')}}"><!--img src="{{url('img/logo-default.png')}}" alt="logo" class="logo-default"--> <h2 style="color: #366ca3">RSRTC</h2></a>
      </div>
      <!-- END LOGO -->
      <!-- BEGIN RESPONSIVE MENU TOGGLER -->
      <a href="javascript:;" class="menu-toggler"></a>
      <!-- END RESPONSIVE MENU TOGGLER -->
      <!-- BEGIN TOP NAVIGATION MENU -->
      <div class="top-menu">
        <ul class="nav navbar-nav pull-right">
        
     
          <!-- BEGIN INBOX DROPDOWN -->
          <li class="dropdown dropdown-extended dropdown-dark dropdown-inbox" id="header_inbox_bar">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <!-- <span class="circle">12,23,553.00</span> -->
             <font color="green"><i class="fa fa-check-circle"></i> &nbsp; <b>LT POS</b></font>
            </a>
           
          </li>

          <li class="droddown dropdown-separator">
            <span class="separator"></span>
          </li>

          <li class="dropdown dropdown-extended dropdown-dark dropdown-inbox" id="header_inbox_bar">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <!-- <span class="circle">12,23,553.00</span> -->
             <font color="red"><i class="fa  fa-times"></i> &nbsp; <b>Biometric</b></font>

            </a>
           
          </li>

          <li class="droddown dropdown-separator">
            <span class="separator"></span>
          </li>


          <!-- END INBOX DROPDOWN -->
          <!-- BEGIN USER LOGIN DROPDOWN -->
          <li class="dropdown dropdown-user dropdown-dark">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            
            <span class="username username-hide-mobile"> <i class="fa fa-user"></i> Admin</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-default">
              <li>
                <a href="#">
                <i class="icon-user"></i> My Profile </a>
              </li>

              <li>
                <a href="#">
                <i class="icon-user"></i> Change Password </a>
              </li>
             
              <li>
                <a href="{{url('login')}}">
                <i class="icon-key"></i> Log Out </a>
              </li>
            </ul>
          </li>
          <!-- END USER LOGIN DROPDOWN -->
        </ul>
      </div>
      <!-- END TOP NAVIGATION MENU -->
    </div>
  </div>