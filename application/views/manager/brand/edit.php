
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
              <h3 class="box-title">Menu Update</h3>
            </div>
            <form name="frm" action="<?php echo base_url('manager/brand/update');?>" method="post">
            <div class="box-body">
            <div class="form-group">
                <label>Menu Category.</label>
                <div class="input-group">
                  <div class="input-group-addon"> 
                  </div>
                  <select  class="form-control" name="Brand_menu" >
                    <option value="<?php echo $brand[0]->Brand_menu;?>"><?php echo $brand[0]->Brand_menu;?></option>
                    <?php foreach($menu as $menus){ ?>
                    <option><?= ucfirst($menus->Category_Name);?></option>
                  <?php }?>
                  </select>
                </div>
              </div>
             

              <div class="form-group">
                <label>Menu Name.</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control" name="Brand_Name" value="<?php echo $brand[0]->Brand_Name;?>">
                  <input type="hidden" class="form-control" name="SN" value="<?php echo $brand[0]->SN;?>">
                </div>
              </div>
              <div class="form-group">
                <label>Menu Price.</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control" name="Brand_price" id="Brand_price" value="<?php echo $brand[0]->Brand_price;?>">
                </div>
              </div>
              <div class="form-group">
                <label>Discount Price.</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control" name="discount_price"  id="discount_price" value="<?php echo $brand[0]->discount_price;?>">
                </div>
              </div>
              <div class="form-group">
                <label>Price.</label>
                <div class="input-group">
                  <div class="input-group-addon">
                   
                  </div>
                  <input type="text" class="form-control" name="total_price" id="total_price" value="<?php echo $brand[0]->total_price;?>">
                </div>
              </div>
               <div class="form-group">
                <div class="input-group">
                 
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
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
<script type="text/javascript">
    jQuery(document).ready(function() {
      $(document).on("change keyup blur", "#discount_price", function() {
        var amd = $('#Brand_price').val();
        var disc = $('#discount_price').val();
        if (disc != '' && amd != '') {
          var total=parseInt(amd)/100 * parseInt(disc);
          $('#total_price').val(parseInt(amd-total));
        }else{
          $('#total_price').val(parseInt(amd-total));
        }
      });
    });
</script>