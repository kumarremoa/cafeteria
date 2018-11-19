  <?php $this->load->view('include/admin_header');?>
 <?php $this->load->view('include/sidebar');?>
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Stock Add</h3>
            </div>
            <form name="frm" action="<?php echo base_url('kitchen/stockitem/stockUpdate/'.$listing[0]->stock_id);?>" method="post">
            <div class="box-body">
            <div class="col-md-6">
                <div class="form-group">
                  <label>Stock Category</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                     <select class="form-control" name="stock_cat" required>
                      <option value="<?php echo $listing[0]->stock_cat;?>"><?php echo $listing[0]->stock_cat;?></option>
                      <<?php foreach ($listing as $value): ?>
                        <option value="<?php echo $value->stoke_cat_name;?>"><?php echo ucfirst($value->stoke_cat_name);?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Name</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <input type="text" class="form-control" name="stock_name" value="<?php echo $listing[0]->stock_name;?>">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Price</label>
                  <div class="input-group"> 
                    <div class="input-group-addon">
                    </div>
                    <input type="text" class="form-control" name="stock_price" value="<?php echo $listing[0]->stock_price;?>">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Quantity</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <select class="form-control" name="stock_quantity" required id="demo">
                     <option value="<?php echo $listing[0]->stock_quantity;?>"><?php echo $listing[0]->stock_quantity;?></option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Stock Total</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                    </div>
                    <input type='text' class="form-control" name="stock_total" value="<?php echo $listing[0]->stock_total;?>">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
               <div class="form-group">
                <div class="input-group">
                 
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
var select = document.getElementById("demo");  

var i=0;
 for(i=1;i<=100;i++){  
     select.options[select.options.length] = new Option(i,i);
} 
</script>