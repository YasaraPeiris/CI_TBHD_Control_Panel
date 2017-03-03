<?php ?>

 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image" >
            <img src="../../images/1_main.jpg"  style='border-radius: 40%;' class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['login_hotel']?></p>
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
             <a href="hotelsHome.php" >
            <i class="fa fa-calendar"></i> <span>Home Page</span>
           
            </a>
        </li>
       <li>
           <a href="editDetails.php" >
            <i class="fa fa-calendar"></i> <span>Edit Details</span>
           
            </a>
        </li>
  <li>
        <a href="orderList.php" >
            <i class="fa fa-calendar"></i> <span>Check Orders</span>
            <small class="label pull-right bg-red" id="ordersSideBar">3</small>
            </a>
        </li>
         
        
<!--        <li>
            <a href="quickEmailHotel.php" >
            <i class="fa fa-calendar"></i> <span>Quick Email</span>
            <small class="label pull-right bg-red">3</small>
            </a>
        </li>
        <li>
            <a href="mailboxHotel/mailbox.php">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <small class="label pull-right bg-yellow">12</small>
          </a>
        </li>-->
      
      
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

