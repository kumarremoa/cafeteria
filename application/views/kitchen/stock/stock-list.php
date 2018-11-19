
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
             
              <a class="btn btn-primary pull-right" href="<?php echo  base_url('kitchen/stockitem/addStock')?>">Add Stock</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Stock Category</th>
                  <th>Stock Name</th>
                  <th>Stock Price</th>
                  <th>Stock Quantity</th>
                  <th>Stock Total</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach($listing as $list){?>
                <tr>
                  <td><?php echo $i++;?></td>
                  <td><?php echo $list->stock_cat;?></td>
                  <td><?php echo $list->stock_name;?></td>
                  <td><?php echo $list->stock_price;?></td>
                  <td><?php echo $list->stock_quantity;?></td>
                  <td><?php echo $list->stock_total;?></td>
                  <td>
                      <?php if($list->stock_quantity > 10 && $list->stock_quantity > 5){ ?>
                        <button class="btn btn-success">Stock Full</button>
                      <?php } else if($list->stock_quantity < 5 && $list->stock_quantity > 2){?>
                      <button class="btn btn-info" >Stock Less</button>
                      <?php }else {?>
                        <button class="btn btn-danger">Stock Finish</button>
                      <?php }?>
                  </td>
                 <td><a class="btn btn-primary" href="<?php echo  base_url('kitchen/stockitem/stockEdit/').$list->stock_id;?>"><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-danger" href="<?php echo  base_url('kitchen/stockitem/stockDelete/').$list->stock_id;?>"><i class="fa fa-trash"></i></a></td>
                </tr>
              <?php }?>
                 </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
 
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