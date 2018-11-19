
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
              <h3 class="box-title">Bike Details</h3><br>
              <a class="btn btn-primary pull-right" href="<?php echo  base_url('admin/price/add')?>">Add bike price</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Service_Name</th>
                  <th>Category_Name</th>
                  <th>Bikes 150CC</th>
                  <th>Scooters 150CC</th>
                  <th>Bikes 150_220CC</th>
                  <th>Bikes 220_500CC</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach($prices as $price){?>
                <tr>
                  <td><?php echo $i++;?></td>
                  <td><?php echo $price->Service_Name;?></td>
                  <td><?php echo $price->Category_Name;?></td>
                  <td><?php echo $price->Bikes_Below_150CC;?></td>
                  <td><?php echo $price->Scooters_Below_150CC;?></td>
                  <td><?php echo $price->Bikes_Btw_150_220CC;?></td>
                  <td><?php echo $price->Bikes_Btw_220_500CC;?></td>
                  <td><a class="btn btn-primary" href="<?php echo  base_url('admin/price/edit/').$price->SN;?>"><i class="fa fa-pencil"></i></a>&nbsp;<a class="btn btn-danger" href="<?php echo  base_url('admin/price/delete/').$price->SN;?>"><i class="fa fa-trash"></i></a></td>
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