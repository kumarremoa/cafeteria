
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
              <h3 class="box-title">Plan Edit</h3>
            </div>
            <form name="frm" action="<?php echo base_url('admin/plan/update');?>" method="post">
            <div class="box-body">
              <div class="form-group">
                <label>Engine_Classification</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control" name="Engine_Classification" value="<?php echo $prices[0]->Engine_Classification;?>">
                </div>
              </div>
              <div class="form-group">
                <label>Plan_Name.</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control" name="Plan_Name" value="<?php echo $prices[0]->Plan_Name;?>">
                </div>
              </div>
              <div class="form-group">
                <label>No_of_Services.</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control" name="No_of_Services" value="<?php echo $prices[0]->No_of_Services;?>">
                </div>
              </div>
              <div class="form-group">
                <label>Breakdown_Assist</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control" name="Breakdown_Assist" value="<?php echo $prices[0]->Breakdown_Assist;?>">
                </div>
              </div>
              <div class="form-group">
                <label>Duration_Years.</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control" name="Duration_Years" value="<?php echo $prices[0]->Duration_Years;?>">
                </div>
              </div>
              <div class="form-group">
                <label>Discount</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control" name="Discount" value="<?php echo $prices[0]->Discount;?>">
                </div>
              </div>
              <div class="form-group">
                <label>Price</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control" name="Price" value="<?php echo $prices[0]->Price;?>">
                </div>
              </div>
              <input type="hidden" class="form-control" name="Plan_ID" value="<?php echo $prices[0]->Plan_ID;?>" >
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