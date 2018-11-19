  <?php $this->load->view('include/admin_header');?>
 <?php $this->load->view('include/sidebar');?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <?php foreach ($values as $value) {
      
    ?>
    <section class="content">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Table Add</h3>
            </div>
            <form name="frm" action="<?php echo base_url('manager/Restaurant/booking_seat');?>" method="post">
            <div class="box-body">
            <div class="col-md-6">
                <div class="form-group">
                  <label>Table Reservation</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control" name="Service_ID" value="<?= $value->Service_ID;?>">
                  </div>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-group">
                  <label>Total Seat</label>
                  <div class="input-group"> 
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control" name="total_seat" value="<?= $value->res_table_seat;?>">
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label>Reserve Seat</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <select class="form-control" name="res_seat">
                      <option value="<?= $value->res_seat;?>"><?= $value->res_seat;?></option>
                      <option value="available">Available</option>
                      <option value="occupied">Occupied</option>
                      <option value="reserved">Reserved</option>
                    </select>
                  </div>
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label>Reserve Date</label>
                  <div class="input-group"> 
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="datetime" class="form-control" id="search-to-date" name="res_date_and_time" placeholder="Data and time" value="<?= $value->res_date_and_time;?>">
                  </div>
                </div>
              </div>  
              <div class="col-md-6">
                <div class="form-group">
                  <label>User Name</label>
                  <div class="input-group"> 
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control" name="user_name" placeholder="User Name" value="<?= $value->user_name;?>">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Waiter</label>
                  <div class="input-group"> 
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <select class="form-control" name="waiter_service" placeholder="Waiter">
                      <option value="<?= $value->waiter_service;?>"><?= $value->waiter_service;?></option>
                      <?php foreach($waiter as $list){?>
                      <option value="<?= $list->waiter_name;?>"><?= $list->waiter_name;?></option>
                      <?php }?>
                    </select>
                  </div>
                </div>
              </div>
              <input type="hidden"  name="res_id"  value="<?= $value->res_id;?>">
               <div class="col-md-6">
                 <div class="form-group">
                  <div class="input-group">
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                  </div>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
       
      </div>
      <!-- /.row -->
    </section>
    <?php }?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php $this->load->view('include/admin_footer');?>
