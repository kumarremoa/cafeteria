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
              <h3 class="box-title">Stock Category Add</h3>
            </div>
            <form name="frm" action="<?php echo base_url('kitchen/stockitem/save_cat');?>" method="post">
            <div class="box-body">
                <div class="form-group">
                  <label></label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <input type="text" class="form-control" name="stoke_cat_name" required>
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