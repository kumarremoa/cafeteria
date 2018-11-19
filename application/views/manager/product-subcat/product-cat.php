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
              <h3 class="box-title">Product Sub Category Add</h3>
            </div>
            <form name="frm" action="<?php echo base_url('manager/product_cat/sub_save');?>" method="post">
            <div class="box-body">
                <div class="form-group">
                  <label>Product Category </label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <select type="text" class="form-control" name="category" required>
                    <option>Select Category</option>
                    <?php foreach($catlist as $list):?>
                    <option value="<?php echo $list->prod_cat_name?>"><?php echo $list->prod_cat_name?></option>
                  <?php endforeach;?>
                      </select>
                  </div>
                </div>
                <div class="form-group">
                  <label>Product SubCategory</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <input type="text" class="form-control" id="category" name="subcategory" required>
                      
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
                    <input type="text" class="form-control" id="slug" name="slug" required>
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