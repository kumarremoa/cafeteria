  <?php $this->load->view('include/admin_header');?>
 <?php $this->load->view('include/sidebar');?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Product Update</h3>
            </div>
            <form name="frm" action="<?php echo base_url('manager/product/update/'.$list[0]->product_id);?>" method="post" enctype="multipart/form-data" >
            <div class="box-body">
            <div class="col-md-6">
                <div class="form-group">
                  <label>Product Category</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <select class="form-control" name="product_category" onchange="selectCategory(this.value);">
                      <option><?php echo $list[0]->product_category?></option>
                      <?php foreach($category as $cat):?>
                      <option value="<?php echo $cat->prod_cat_name;?>"><?php echo $cat->prod_cat_name;?></option>
                    <?php endforeach;?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Product Sub Category</label>
                  <div class="input-group" id="result">
                    <div class="input-group-addon">
                    </div>
                    <input type="text" name="product_sub_cat" class="form-control" value="<?php echo $list[0]->product_sub_cat?>">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Product Brand</label>
                  <div class="input-group"> 
                    <div class="input-group-addon">
                    </div>
                     <input type="text" class="form-control" name="product_brand" value="<?php echo $list[0]->product_brand?>">
                      
                  </div>
                </div>
              </div>
              <div class='col-sm-6'>
                 <div class="form-group">
                        <label class="control-label">Delivery Time</label>
                        <div class='input-group'>
                        <span class="input-group-addon">
                           <span class="glyphicon glyphicon-time"></span>
                           </span>
                           <input type='time' id="" class="form-control" name="deliver_time" value="<?php echo $list[0]->deliver_time?>" />
                           
                        </div>
                     </div>
              </div>
             
               <div class="col-md-6">
                <div class="form-group">
                  <label>Product Name</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <input type="text" class="form-control" name="product_name" value="<?php echo $list[0]->product_name?>">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Product Discount</label>
                  <div class="input-group">
                    <div class="input-group-addon">%
                    </div>
                    <input type="text" class="form-control" name="product_discount" id="product_discount" value="<?php echo $list[0]->product_discount?>">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Product Price</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <input type="text" class="form-control" name="product_price" id="product_price" value="<?php echo $list[0]->product_price?>">
                  </div>
                </div>
              </div>
              
              
              <div class="col-md-6">
                <div class="form-group">
                  <label>Discount Price</label>
                  <div class="input-group">
                    <div class="input-group-addon">%
                    </div>
                    <input type="text" class="form-control" name="discount_total" id="discount_total" value="<?php echo $list[0]->discount_total?>">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Product Image</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <input type="file" class="form-control" name="userfile">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Product Discription</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <textarea class="form-control" name="product_desc" ><?php echo $list[0]->product_desc?>
                    </textarea>
                  </div>
                </div>
              </div>
               <div class="col-md-6">
                <div class="form-group">
                  <label>Address</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <textarea class="form-control" name="product_address" ><?php echo $list[0]->product_address?>
                    </textarea>
                  </div>
                </div>
              </div>
              
               <div class="col-md-12">
               <div class="form-group">
                <div class="input-group">
                 <input type="hidden" class="form-control" name="product_image" value="<?php echo $list[0]->product_image?>">
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
<script type="text/javascript">
  function selectCategory (argument) {
    $.ajax({
      url: '<?php echo base_url('manager/product/selectCategory')?>',
      type: 'POST',
      data: { 'param': argument },
      success:function(result){
        document.getElementById('result').innerHTML=result;
      }
    });
  }

</script>
<script type="text/javascript">
    jQuery(document).ready(function() {
      $(document).on("change keyup blur", "#product_price", function() {
        var amd = $('#product_price').val();
        var disc = $('#product_discount').val();
        if (disc != '' && amd != '') {
          var total=parseInt(amd)/100 * parseInt(disc);
          $('#discount_total').val(parseInt(amd-total));
        }
      });
    });
$(function() {
  $('#product_price').on('input', function() {
    match = (/(\d{0,7})[^.]*((?:\.\d{0,4})?)/g).exec(this.value.replace(/[^\d.]/g, ''));
    this.value = match[1] + match[2];
  });
   $('#product_discount').on('input', function() {
    match = (/(\d{0,2})[^.]*((?:\.\d{0,4})?)/g).exec(this.value.replace(/[^\d.]/g, ''));
    this.value = match[1] + match[2];
  });
   $('#discount_total').on('input', function() {
    match = (/(\d{0,2})[^.]*((?:\.\d{0,4})?)/g).exec(this.value.replace(/[^\d.]/g, ''));
    this.value = match[1] + match[2];
  });

});
</script>