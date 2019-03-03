<?php 
?>

 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../../assets/images/user8-128x128.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php //echo $_SESSION['login_user']?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
         <li>
            <a href="<?php echo base_url();?>index.php/RedirectPageController/adminHome" >
            <i class="fa fa-calendar"></i> <span>Home Page</span>
           
            </a>
        </li>
      
        <!-- <li>
          <a href="<?php echo base_url();?>index.php/RedirectPageController/viewCheckOrders" >
            <i class="fa fa-calendar"></i> <span>Check Orders</span>
            <small class="label pull-right bg-red" id="ordersSideBar"></small>
            </a>
        </li> -->
        <li>
          <a href="<?php echo base_url();?>index.php/RedirectPageController/hotelList" >
            <i class="fa fa-calendar"></i> <span>Hotel/ Destination List</span>
            <small class="label pull-right bg-red" id="ordersSideBar"></small>
            </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/RedirectPageController/destinationMapList" >
            <i class="fa fa-calendar"></i> <span>Destination Map</span>
            <small class="label pull-right bg-red" id="ordersSideBar"></small>
            </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/RedirectPageController/contentGenerator" >
            <i class="fa fa-calendar"></i> <span>Content Generator</span>
            <small class="label pull-right bg-red" id="ordersSideBar"></small>
            </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/RedirectPageController/bookingDetails" >
            <i class="fa fa-calendar"></i> <span>Manual Bookings</span>
            <small class="label pull-right bg-red" id="ordersSideBar"></small>
            </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/RedirectPageController/priceSets" >
            <i class="fa fa-calendar"></i> <span>Extra Price Sets</span>
            <small class="label pull-right bg-red" id="ordersSideBar"></small>
            </a>
        </li>
        <!-- <li>
          <a href="<?php echo base_url();?>index.php/RedirectPageController/bookingContent" >
            <i class="fa fa-calendar"></i> <span>Manual Booking Content</span>
            <small class="label pull-right bg-red" id="ordersSideBar"></small>
            </a>
        </li> -->
        <!-- <li>
          <a href="<?php echo base_url();?>index.php/RedirectPageController/invoiceGenerator" >
            <i class="fa fa-calendar"></i> <span>Invoice Generator</span>
            <small class="label pull-right bg-red" id="ordersSideBar"></small>
            </a>
        </li> -->
         <!-- <li>
             <a href="<?php echo base_url();?>index.php/RedirectPageController/checkInquiries" >
            <i class="fa fa-calendar"></i> <span>Check Inquiries</span>
            <small class="label pull-right bg-red" id="inquirySideBar"></small>
            </a>
        </li>
         <li>
            <a href="<?php echo base_url();?>index.php/RedirectPageController/updateHotelDetails" >
            <i class="fa fa-calendar"></i> <span>Check Updates</span>
            <small class="label pull-right bg-red" id="updateSideBar"></small>
            </a>
        </li> -->
<!--        <li>
            <a href="sendMail.php" >
            <i class="fa fa-calendar"></i> <span>Quick Email</span>
            <small class="label pull-right bg-red">3</small>
            </a>
        </li>
       
        <li>
          <a href="mailbox/mailbox.php">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <small class="label pull-right bg-yellow">12</small>
          </a>
        </li>-->
      
      
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

