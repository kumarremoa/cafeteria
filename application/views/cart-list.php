<?php $this->load->view('header');?>
<!-- SubHeader =============================================== -->
<section class="parallax-window"  id="short"  data-parallax="scroll" data-image-src="" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
    	<div id="sub_content">
    	 <h1>Place your order</h1>
            <div class="bs-wizard">
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart.html" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#0" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart_3.html" class="bs-wizard-dot"></a>
                </div>  
		</div><!-- End bs-wizard --> 
        </div><!-- End sub_content -->
	</div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="#0">Home</a></li>
                <li><a href="#0">Category</a></li>
                <li>Page active</li>
            </ul>
            <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Search</a>
        </div>
    </div><!-- Position -->
    
<!-- Content ================================================== -->
<div class="container margin_60_35">
		<div class="row">
			<div class="col-md-3">
				<div class="box_style_2 hidden-xs info">
					<h4 class="nomargin_top">Delivery time <i class="icon_clock_alt pull-right"></i></h4>
					<p>
						Lorem ipsum dolor sit amet, in pri partem essent. Qui debitis meliore ex, tollit debitis conclusionemque te eos.
					</p>
					<hr>
					<h4>Secure payment <i class="icon_creditcard pull-right"></i></h4>
					<p>
						Lorem ipsum dolor sit amet, in pri partem essent. Qui debitis meliore ex, tollit debitis conclusionemque te eos.
					</p>
				</div><!-- End box_style_2 -->
                
				<div class="box_style_2 hidden-xs" id="help">
					<i class="icon_lifesaver"></i>
					<h4>Need <span>Help?</span></h4>
					<a href="tel://004542344599" class="phone">+45 423 445 99</a>
					<small>Monday to Friday 9.00am - 7.30pm</small>
				</div>
			</div><!-- End col-md-3 -->
            
			<div class="col-md-6">
				<div class="box_style_2">
					<h2 class="inner">Payment methods</h2>
					<div class="payment_select">
						<label><input type="radio" value="" checked name="payment_method" class="icheck">Credit card</label>
						<i class="icon_creditcard"></i>
					</div>
					<div class="form-group">
						<label>Name on card</label>
						<input type="text" class="form-control" id="name_card_order" name="name_card_order" placeholder="First and last name">
					</div>
					<div class="form-group">
						<label>Card number</label>
						<input type="text" id="card_number" name="card_number" class="form-control" placeholder="Card number">
					</div>
					<div class="row">
						<div class="col-md-6">
							<label>Expiration date</label>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="mm">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="yyyy">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="form-group">
								<label>Security code</label>
								<div class="row">
									<div class="col-md-4 col-sm-6">
										<div class="form-group">
											<input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
										</div>
									</div>
									<div class="col-md-8 col-sm-6">
										<img src="<?php echo base_url()?>img/icon_ccv.gif" width="50" height="29" alt="ccv"><small>Last 3 digits</small>
									</div>
								</div>
							</div>
						</div>
					</div><!--End row -->
					<div class="payment_select" id="paypal">
						<label><input type="radio" name="bn" class="icheck">Pay with paypal</label>
					</div>
					<div class="payment_select nomargin">
						<label><input type="radio" name="bn" value="0" class="icheck">Pay with cash</label>
						<i class="icon_wallet"></i>
					</div>
				</div><!-- End box_style_1 -->
			</div><!-- End col-md-6 -->
            <div class="col-md-3" id="sidebar">
            <div class="theiaStickySidebar">
				<div id="cart_box" >
					<h3>Your order <i class="icon_cart_alt pull-right"></i><button class="pull-right colror fa fa-circle-thin dot"><?php echo count($this->cart->contents());?></button></h3>
					<table class="table table_summary">
					<thead>
						<tr>
						<td>#Sr.</td>
						<td><strong> Product</strong></td>
						<td><strong>Size</strong></td>
						<td><strong class="pull-right">Price</strong></td>
					</tr>
					</thead>
					<tbody id="loadCart">
					
					
					</tbody>
					</table>
					<hr>
					
					<hr>
					<table class="table table_summary">
					<tbody>
					
					<tr>
						<td class="total">
							 TOTAL <span class="pull-right">&#8377; <?php echo $this->cart->format_number($this->cart->total()); ?></span>
						</td>
					</tr>
					</tbody>
					</table>
					<hr>
					<a class="btn_full" href="<?php echo base_url('cart-list')?>">Order now</a>
					<!-- <a class="btn_full" href="<?php echo base_url('cart-distroy');?>">Order Empty</a> -->
				</div>
                </div>
			</div>
		</div>
</div>

      

<?php $this->load->view('footer');?>
<!-- SPECIFIC SCRIPTS -->
<script src="<?php echo base_url()?>js/theia-sticky-sidebar.js"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
      additionalMarginTop: 80
    });
    setInterval(function(){
    $.ajax({
        url: '<?php echo base_url('cart/loadData');?>',
        type: 'POST',
        data: {},
        success:function(result)
        {

            document.getElementById('loadCart').innerHTML=result;
        }
    });
    }, 2000);
   
	$('input[name="bn"]').change(function() {
	   if($(this).is(':checked') && $(this).val() == '0') {
	   		$('#myModal').modal('show');
	   }
	});
</script>
