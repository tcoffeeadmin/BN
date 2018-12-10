    <section class="sidebar menu-color" >
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel"> -->
      <!--   <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div> -->
       <!--  <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div> -->
      <!-- </div> -->
      <!-- search form -->
   <!--    <form action="#" method="get" class="sidebar-form">
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
      <ul class="sidebar-menu border-color" data-widget="tree">
       <!--  <li class="header">MAIN NAVIGATION</li>
 -->

          <li class="active">
          <a href="<?php echo base_url(); ?>Home/"">
            <i class="fa fa-tachometer" aria-hidden="true"></i> <span>Dashboard</span>
            <span class="pull-right-container">
        <!--       <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url(); ?>Home/orders">
           <i class="fa fa-book" aria-hidden="true"></i><span>Orders</span>
            <span class="pull-right-container">
        <!--       <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>

        <li>
         <a href="<?php echo base_url(); ?>Home/users ">
          <i class="fa fa-users" aria-hidden="true"></i> <span>Users</span>
            <span class="pull-right-container">
        <!--       <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>

        <li>
          <a href="<?php echo base_url(); ?>Home/locations">
            <i class="fa fa-map-marker" aria-hidden="true"></i><span>Locations</span>
            <span class="pull-right-container">
        <!--       <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>


        <li>
          <a href="<?php echo base_url(); ?>Home/food_items">
          <i class="fa fa-cutlery" aria-hidden="true"></i><span>Food Items</span>
            <span class="pull-right-container">
        <!--       <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>

      <li class="treeview">
          <a href="#">
            <i class="fa fa-list-alt" aria-hidden="true"></i> <span>Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Home/report "><i class="fa fa-circle-o"></i> Daily Report</a></li>
            <li><a href="<?php echo base_url(); ?>Home/monthly_report "><i class="fa fa-circle-o"></i> Monthly Report</a></li>
          </ul>
        </li>

        <li>
          <a href="<?php echo base_url(); ?>Home/banner ">
            <i class="fa fa-picture-o" aria-hidden="true"></i> <span>Banner</span>
            <span class="pull-right-container">
        <!--       <small class="label pull-right bg-green">new</small> -->
            </span>
          </a>
        </li>



      </ul>
    </section>