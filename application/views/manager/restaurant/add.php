  <?php $this->load->view('include/admin_header');?>
 <?php $this->load->view('include/sidebar');?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Table Add</h3>
            </div>
            <form name="frm" action="<?php echo base_url('manager/Restaurant/save');?>" method="post">
            <div class="box-body">
            <div class="col-md-6">
                <div class="form-group">
                  <label>Table ID</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control" name="Service_ID">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Table Area(Left,Middle,Right)</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control" name="side">
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
                    <input type="text" class="form-control" name="total_seat">
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
                      <option value=" ">Please Select</option>
                      <option value="available">Available</option>
                      <option value="occupied">Occupied</option>
                      <option value="reserved">Reserved</option>
                    </select>
                  </div>
                </div>
              </div>
               <div class="form-group">
                <div class="input-group">
                 
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
       
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php $this->load->view('include/admin_footer');?>