
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
              <h3 class="box-title">Plan Details</h3><br>
              <a class="btn btn-primary pull-right" href="<?php echo  base_url('admin/plan/add')?>">Add bike price</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Engine_Classification</th>
                  <th>Plan_Name</th>
                  <th>No_of_Services</th>
                  <th>Breakdown_Assist</th>
                  <th>Duration_Years</th>
                  <th>Discount</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach($prices as $price){?>
                <tr>
                  <td><?php echo $i++;?></td>
                  <td><?php echo $price->Engine_Classification;?></td>
                  <td><?php echo $price->Plan_Name;?></td>
                  <td><?php echo $price->No_of_Services;?></td>
                  <td><?php echo $price->Breakdown_Assist;?></td>
                  <td><?php echo $price->Duration_Years;?></td>
                  <td><?php echo $price->Discount;?></td>
                  <td><?php echo $price->Price;?></td>
                  <td><a class="btn btn-primary" href="<?php echo  base_url('admin/plan/edit/').$price->Plan_ID;?>"><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-danger" href="<?php echo  base_url('admin/plan/delete/').$price->Plan_ID;?>"><i class="fa fa-trash"></i></a></td>
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