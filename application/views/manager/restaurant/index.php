
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
              <h3 class="box-title">Service Details</h3><br>
              <div class="col-md-4 pull-left">
                <select class="form-control" name="seat-res" id="seat-res" onchange="selectSeat(this.value);">
                <option value=" ">Please Select</option>
                    <option value="available">Available</option>
                    <option value="occupied">Occupied</option>
                    <option value="reserved">Reserved</option>
                </select>
                
              </div>
              <div class='col-sm-4'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker2'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
              <a class="btn btn-primary pull-right" href="<?php echo  base_url('manager/restaurant/add_seat')?>">Add Service</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Table ID</th>
                  <th>Total Seat</th>
                  <th>User Name</th>
                  <th>Reserve Seat</th>
                  <th>Reserve Service</th>
                  <th>Date And Time</th>
                  <th>Order Close</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach($listing as $list){?>
                <tr>
                  <td><?php echo $i++;?></td>
                  <td><?php echo $list->Service_ID;?></td>
                  <td><?php echo $list->res_table_seat;?></td>
                  <td><?php echo $list->user_name;?></td>
                    <td><?php if($list->res_seat=='reserved'){ ?>
                          <button type="button" class="btn btn-danger">Reserved</button>
                     <?php } else if($list->res_seat=='occupied'){ ?>
                     <button type="button" class="btn btn-info">Occupied</button>
                      <?php } else{ ?>
                      <button type="button" class="btn btn-success">Available</button>
                      <?php } ?>
                    </td>
                  <td><?php echo $list->waiter_service;?></td> 
                  <td><?php echo $list->res_date_and_time;?></td>
                  <td><?php if($list->order_close==1){?>
                        <button type="button" class="btn btn-danger">Close</button>
                      <?php } else { ?>
                      <button type="button" class="btn btn-success">Open</button>
                      <?php }?></td>
                  <td>  
                    <a class="btn btn-info" href="<?php echo  base_url('manager/restaurant/booking/').$list->res_id;?>"><i class="glyphicon glyphicon-book"></i></a>&nbsp;<a class="btn btn-primary" href="<?php echo  base_url('manager/restaurant/edit/').$list->res_id;?>"><i class="fa fa-eye"></i></a>&nbsp;<a class="btn btn-danger" href="<?php echo  base_url('manager/restaurant/delete/').$list->res_id;?>"><i class="fa fa-trash"></i></a></td>
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