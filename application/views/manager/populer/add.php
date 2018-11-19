
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
              <h3 class="box-title">Brand Add</h3>
            </div>
            <form name="frm" action="<?php echo base_url('manager/popular/save');?>" method="post">
            <div class="box-body">
              <div class="form-group">
                <label>Brand Name</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control" id="category" name="populer_brand_name">
                </div>
              </div>
              <div class="form-group">
                <label>Slug</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control" name="populer_brand_slug" id="slug">
                </div>
              </div>
              <div class="form-group">
                <label>Tag</label>
                <div class="input-group">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control" name="populer_brand_tag" id="tag">
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