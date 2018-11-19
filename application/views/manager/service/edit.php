
 <?php $this->load->view('include/admin_header');?>
 <?php $this->load->view('include/sidebar');?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-offset-3 col-md-6">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Service Update</h3>
            </div>
            <form name="frm" action="<?php echo base_url('manager/service/update');?>" method="post">
            <div class="box-body">
              <div class="form-group">
                <label>Table Serial No.</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" name="Service_ID" value="<?php echo $brand[0]->Service_ID;?>" >
                </div>
              </div>

              <div class="form-group">
                <label>Table Name.</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" name="Service_Name" value="<?php echo $brand[0]->Service_Name;?>">
                  <input type="hidden" class="form-control" name="SN" value="<?php echo $brand[0]->SN;?>">
                </div>
              </div>
              <div class="form-group">
                <label>Total Seat.</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" name="total_seat" value="<?php echo $brand[0]->total_seat;?>">
                 
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