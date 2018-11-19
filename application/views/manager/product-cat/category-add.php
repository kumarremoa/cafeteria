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
              <h3 class="box-title">Product Add</h3>
            </div>
            <form name="frm" action="<?php echo base_url('manager/product_cat/save');?>" method="post">
            <div class="box-body">
                <div class="form-group">
                  <label>Product Category</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <input type="text" class="form-control" id="category" name="prod_cat_name" required>
                      
                  </div>
                </div>
             
                <div class="form-group">
                  <label>Category Tag</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <input type="text" class="form-control" id="tag" name="tag" required>
                  </div>
                </div>
                <div class="form-group">
                  <label>Category Slug</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <input type="text" class="form-control" id='slug' name="slug_url" required>
                  </div>
                </div>
               <div class="col-md-12">
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php $this->load->view('include/admin_footer');?>
