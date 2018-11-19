 <?php if($this->session->userdata('manager_in')==true){?>
 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>admins/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        
        <li class=" treeview">
          <a href="<?php echo base_url('Managers')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Customer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('manager/users');?>"><i class="fa fa-circle-o"></i> Listing</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('manager/product_cat');?>"><i class="fa fa-circle-o"></i> Product Category</a></li>
            <li><a href="<?php echo base_url('manager/product_cat/product_sub_cat');?>"><i class="fa fa-circle-o"></i> Product Sub Category</a></li>
          <li><a href="<?php echo base_url('manager/product');?>"><i class="fa fa-circle-o"></i> Product List</a></li>
          

            
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Order List</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('manager/order');?>"><i class="fa fa-circle-o"></i> Order Listing</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('manager/brand');?>"><i class="fa fa-circle-o"></i> Menu Listing</a></li>
            
            <li><a href="<?php echo base_url('manager/category');?>"><i class="fa fa-circle-o"></i> Menu Category Listing</a></li>
          </ul>
        </li> 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Restaurant Table</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li><a href="<?php echo base_url('manager/service');?>"><i class="fa fa-circle-o"></i> Table List</a></li>
            <li><a href="<?php echo base_url('manager/restaurant');?>"><i class="fa fa-circle-o"></i> Restaurant List</a></li>
          </ul>
        </li> 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Payment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('manager/payment');?>"><i class="fa fa-circle-o"></i> Payment Listing</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Popular Brand</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('manager/popular');?>"><i class="fa fa-circle-o"></i> Popular Listing</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Waiter</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('manager/waiter');?>"><i class="fa fa-circle-o"></i> Listing</a></li>
            
          </ul>
        </li>
        
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <?php }?>
  <!-- Admin Dashboard -->
   <?php if($this->session->userdata('admin_in')==true){?>
 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>admins/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        
        <li class=" treeview">
          <a href="<?php echo base_url('admin/dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/users');?>"><i class="fa fa-circle-o"></i> Listing</a></li>
            
          </ul>
        </li>
       
         <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/brand');?>"><i class="fa fa-circle-o"></i> Menu Listing</a></li>
            <!-- <li><a href="<?php echo base_url('admin/category/classification');?>"><i class="fa fa-circle-o"></i> Category Classification</a></li> -->
            <li><a href="<?php echo base_url('admin/category');?>"><i class="fa fa-circle-o"></i> Menu Category Listing</a></li>
          </ul>
        </li> 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Service Table</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href="<?php echo base_url('admin/price');?>"><i class="fa fa-circle-o"></i> Price List</a></li> -->
            <li><a href="<?php echo base_url('admin/service');?>"><i class="fa fa-circle-o"></i> Table List</a></li>
          </ul>
        </li> 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Payment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/payment');?>"><i class="fa fa-circle-o"></i> Payment Listing</a></li>
          </ul>
        </li>
        
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <?php }?>
   <?php if($this->session->userdata('kitchen_in')==true){?>
 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>admins/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        
        <li class=" treeview">
          <a href="<?php echo base_url('kitchen/dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Stock</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('kitchen/stockitem/stock');?>"><i class="fa fa-circle-o"></i>Stock Listing</a></li>
             <li><a href="<?php echo base_url('kitchen/stockitem');?>"><i class="fa fa-circle-o"></i>Stock Category</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Order</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('kitchen/orderitem');?>"><i class="fa fa-circle-o"></i>Stock Listing</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Finish Item</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('kitchen/finishitem');?>"><i class="fa fa-circle-o"></i>Finish Listing</a></li>
            
          </ul>
        </li>
       
         <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('kitchen/brand');?>"><i class="fa fa-circle-o"></i> Menu Listing</a></li>
            <li><a href="<?php echo base_url('kitchen/category');?>"><i class="fa fa-circle-o"></i> Menu Category Listing</a></li>
          </ul>
        </li>  -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Service Table</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu"> -->
            <!-- <li><a href="<?php echo base_url('kitchen/price');?>"><i class="fa fa-circle-o"></i> Price List</a></li> -->
            <!-- <li><a href="<?php echo base_url('kitchen/service');?>"><i class="fa fa-circle-o"></i> Table List</a></li>
          </ul>
        </li>  -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Payment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('kitchen/payment');?>"><i class="fa fa-circle-o"></i> Payment Listing</a></li>
          </ul>
        </li> -->
        
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <?php }?>