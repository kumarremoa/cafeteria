
 <?php $this->load->view('include/admin_header');?>
 <?php $this->load->view('include/sidebar');?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
        <?php echo $this->session->flashdata('message');?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Product Category</h3><br>
              <a class="btn btn-primary pull-right" href="<?php echo  base_url('manager/product_cat/sub_add')?>">Add New Category</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Category</th>
                  <th>SubCategory</th>
                  <th>Slug</th>
                  <th>Tag</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach($catlist as $list){?>
                <tr>
                  <td><?php echo $i++;?></td>
                  <td><?php echo ucfirst($list->prod_category);?></td>
                  <td><?php echo ucfirst($list->sub_cat_name);?></td>
                  <td><?php echo $list->sub_cat_slug;?></td>
                  <td><?php echo $list->sub_cat_tag;?></td>
                  <td>
                    <a class="btn btn-primary" href="<?php echo base_url('manager/product_cat/sub_edit/'.$list->sub_cat_id);?>"><i class="fa fa-pencil"></i></a>&nbsp;
                    <a class="btn btn-danger" href="<?php echo base_url('manager/product_cat/sub_cat_del/'.$list->sub_cat_id);?>"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
              <?php } ?>
                 </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php $this->load->view('include/admin_footer');?>