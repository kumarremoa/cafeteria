
 <?php $this->load->view('include/admin_header');?>
 <?php $this->load->view('include/sidebar');?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        <?php echo $this->session->flashdata('message'); ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Product List</h3><br>
              <a class="btn btn-primary pull-right" href="<?php echo  base_url('manager/product/add_product')?>">Add Product</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Category</th>
                  <th>Sub Category </th>
                  <th>Product Name</th>
                  <th>Product Image</th>
                  <th>Price</th></th>
                  <th>Discount </th>
                  <th>Discount Price</th>
                  <th>Deliver Timing</th>
                  <th>Product Top</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 <?php $i=1; foreach($listing as $list):?>
                <tr>
                <td><?php echo $i++;?></td>
                  <td><?php echo $list->product_category;?></td>
                  <td><?php echo $list->product_sub_cat;?></td>
                  <td><?php echo $list->product_name;?></td>
                  <td><img height="50" width="100" src="<?php echo base_url('products/').$list->product_image;?>" class="img-thumbnail"></td>
                  <td style="color: red;"><?php echo $list->product_price;?></th></td>
                  <td><?php echo $list->product_discount;?></td>
                  <td><?php echo $list->discount_total;?></td>
                  <td><?php echo $list->deliver_time;?></td>
                  <td><?php echo $list->product_top;?></td>
                  <?php if($list->status==0){?>
                  <td>
                      
                        <a class="btn btn-danger" onclick="statusUpdates('<?php echo $list->product_id?>')"><i class="fa fa-trash"></i></a></td>
                      <?php }else{ ?>
                      <td><a class="btn btn-success" onclick="statusUpdate('<?php echo $list->product_id?>')"><i class="fa fa-check"></i></a></td>
                      <?php } ?>
                  
                  <td><a class="btn btn-primary" href="<?php echo base_url('manager/product/edit/'.$list->product_id) ?>"><i class="fa fa-pencil"></i></a>&nbsp;
                    <a class="btn btn-danger" href="<?php echo base_url('manager/product/delete/'.$list->product_id) ?>"><i class="fa fa-trash"></i></a></td>
                </tr>
              <?php endforeach;?>
                 </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php $this->load->view('include/admin_footer');?>
<script type="text/javascript">
  function statusUpdate(argument) 
  {
    $.ajax({
      url: '<?php echo base_url("manager/product/status")?>',
      type: 'GET',
      data: {'param': argument},
      success:function (ret) {
        window.location.reload();
      }
    });
  }
  function statusUpdates(argument) 
  {
    $.ajax({
      url: '<?php echo base_url("manager/product/status_update")?>',
      type: 'GET',
      data: {'param': argument},
      success:function (ret) {
        alert(ret)
       window.location.reload();
      }
    });
  }
</script>