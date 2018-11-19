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
              <h3 class="box-title">Sub Product Edit</h3>
            </div>
            <form name="frm" action="<?php echo base_url('manager/product_cat/sub_update/'.$catlist[0]->sub_cat_id);?>" method="post">
            <div class="box-body">
                <div class="form-group">
                  <label>Product Category</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <select type="text" class="form-control" name="prod_category" required>
                    <option value="<?php echo $catlist[0]->prod_category?>"><?php echo $catlist[0]->prod_category?></option>
                   <?php foreach($catlists as $list):?>
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
                    <input type="text" class="form-control" id="category" name="sub_cat_name" value="<?php echo $catlist[0]->sub_cat_name?>">
                      
                  </div>
                </div>
             
                <div class="form-group">
                  <label>Category Tag</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <input type="text" class="form-control" id="tag" name="sub_cat_tag" value="<?php echo $catlist[0]->sub_cat_tag?>">
                  </div>
                </div>
                <div class="form-group">
                  <label>Category Slug</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <input type="text" class="form-control" id="slug" name="sub_cat_slug" value="<?php echo $catlist[0]->sub_cat_slug?>">
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