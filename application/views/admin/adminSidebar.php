<?php 
?>

 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel" style="margin-bottom:5%;height:auto;text-align:center">
        <div class= "image" style="margin-bottom:5%;text-align:center;margin-top:10%;">
          <img src="<?php echo (isset($admindata))?'../../'.$admindata->image_path:'../../assets/images/avatar.png';?>"  style='border-radius: 100%;max-height:105px;max-width:105px;' class="img-circle" alt="User Image">
        </div>
        <div class="info" style="left:0;position:relative;padding:0;">
          <p style="display:inline-block;">Admin #<?php echo $_SESSION['hotelno'];?></p><p style="font-size: 1.2em;"> <?php echo (isset($admindata))?$admindata->first_name.' '.$admindata->last_name :'';?></p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
         <li>
            <a href="<?php echo base_url();?>index.php/LoginController/adminHome" >
            <i class="fa fa-calendar"></i> <span>Home Page</span>
           
            </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/RedirectPageController/myAccount" >
            <i class="fa fa-calendar"></i> <span>My Account</span>
            <small class="label pull-right bg-red" id="ordersSideBar"></small>
            </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/HotelDetailController/index" >
            <i class="fa fa-calendar"></i> <span>Hotels</span>
            <small class="label pull-right bg-red" id="ordersSideBar"></small>
            </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/HotelDetailController/logins" >
            <i class="fa fa-calendar"></i> <span>Hotel Details/ Logins</span>
            <small class="label pull-right bg-red" id="ordersSideBar"></small>
            </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/RedirectPageController/hotelList" >
            <i class="fa fa-calendar"></i> <span>Destination List</span>
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
            <i class="fa fa-calendar"></i> <span>All Bookings</span>
            <small class="label pull-right bg-red" id="ordersSideBar"></small>
            </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/RedirectPageController/priceSets" >
            <i class="fa fa-calendar"></i> <span>Extra Price Sets</span>
            <small class="label pull-right bg-red" id="ordersSideBar"></small>
            </a>
        </li>
        <li>
          <a href="<?php echo base_url();?>index.php/RedirectPageController/tickFaci" >
            <i class="fa fa-calendar"></i> <span>Main Facilities</span>
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

