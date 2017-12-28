<?php ?>

<aside class="main-sidebar" style="" >
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" style="">
    <!-- Sidebar user panel -->
    <div class="user-panel" style="margin-bottom:5%;height:auto;text-align:center">
      <div class= "image" style="margin-bottom:5%;text-align:center;margin-top:10%;">
        <img src="../../assets/images/innalogo.jpg"  style='border-radius: 100%;max-height:105px;max-width:105px;' class="img-circle" alt="User Image">
      </div>
      <div class="info" style="left:0;position:relative;padding:0;">
        <p style="display:inline-block;"><?php echo $_SESSION['login_hotel']?></p>
      </div>
    </div>
    <!-- search form -->
     <!--  <form action="#" method="get" class="sidebar-form" style="position:relative;">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
       <li>
        <a title="My home" href='<?php echo base_url ('index.php/LoginController/viewHomePage'); ?>'>
          <i class="fa fa-calendar"></i> <span>Home Page</span>
       </a>
     </li>
     <li>
       <a title="My account" href='<?php echo base_url ('index.php/RedirectPageController/viewMyAccount'); ?>'>
        <i class="fa fa-calendar"></i> <span>My Account</span>
      </a>
    </li>
    <li>
      <a title="Edit Details" href='<?php echo base_url ('index.php/RedirectPageController/viewEditDetails'); ?>'>
        <i class="fa fa-calendar"></i> <span>Edit Details</span> 
      </a>
    </li>
   <li>
       <a title="My account" href='<?php echo base_url ('index.php/LoginController/viewOrderDetails'); ?>'>
        <i class="fa fa-calendar"></i> <span>Order History</span>
      </a>
    </li>
          <li>
              <a title="My account" href='<?php echo base_url ('index.php/ViewCalenderController/calender'); ?>'>
                  <i class="fa fa-calendar"></i> <span>View Calender</span>
              </a>
          </li>



          <!-- <li>
    <a title="Quick Email" href='<?php echo base_url ('index.php/QuickEmailController/email'); ?>' >
      <i class="fa fa-calendar"></i> <span>Quick Email</span> -->
      <!-- <small class="label pull-right bg-red">3</small> -->
   <!--  </a>
  </li> -->



</ul>
</section>
<!-- /.sidebar -->
</aside>

