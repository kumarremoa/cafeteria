
 <?php $this->load->view('include/admin_header');?>
 <?php $this->load->view('include/sidebar');?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Stock Category</h3><br>
             
              <a class="btn btn-primary pull-right" href="<?php echo  base_url('kitchen/stockitem/add_category')?>">Add Category</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Stock Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach($listing as $list){?>
                <tr>
                  <td><?php echo $i++;?></td>
                  <td><?php echo $list->stoke_cat_name;?></td>
                 <td><a class="btn btn-primary" href="<?php echo  base_url('kitchen/stockitem/add_cat_edit/').$list->stock_cat_id;?>"><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-danger" href="<?php echo  base_url('kitchen/stockitem/del_cat/').$list->stock_cat_id;?>"><i class="fa fa-trash"></i></a></td>
                </tr>
              <?php }?>
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
<script type="text/javascript">
  function selectSeat(evt)
  {
    window.location.href="<?php echo base_url("manager/restaurant/filter/");?>"+evt;
  }
  function selectDate() {
    var selDate=document.getElementsById('search-to-date').value;
    alert(selDate)
  }
</script>
 <script type="text/javascript">
  $(function () {
      $('#datetimepicker2').datetimepicker({
          locale: 'ru'
      });
  });
</script>