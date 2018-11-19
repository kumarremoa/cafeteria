<?php $this->load->view('header');?>
<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
        <div id="sub_content">
         <h1>Place your order</h1>
            <div class="bs-wizard">
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#0" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart_2.html" class="bs-wizard-dot"></a>
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
                </div><!-- End box_style_1 -->
                
                <div class="box_style_2 hidden-xs" id="help">
                    <i class="icon_lifesaver"></i>
                    <h4>Need <span>Help?</span></h4>
                    <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                    <small>Monday to Friday 9.00am - 7.30pm</small>
                </div>
                
            </div><!-- End col-md-3 -->
            
            <div class="col-md-6">
                <div class="box_style_2" id="order_process">
                    <h2 class="inner">Your order details</h2>
                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" class="form-control" id="firstname_order" name="firstname_order" placeholder="First name">
                    </div>
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" class="form-control" id="lastname_order" name="lastname_order" placeholder="Last name">
                    </div>
                    <div class="form-group">
                        <label>Telephone/mobile</label>
                        <input type="text" id="tel_order" name="tel_order" class="form-control" placeholder="Telephone/mobile">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email_booking_2" name="email_order" class="form-control" placeholder="Your email">
                    </div>
                    <div class="form-group">
                        <label>Your full address</label>
                        <input type="text" id="address_order" name="address_order" class="form-control" placeholder=" Your full address">
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" id="city_order" name="city_order" class="form-control" placeholder="Your city">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Postal code</label>
                                <input type="text" id="pcode_oder" name="pcode_order" class="form-control" placeholder=" Your postal code">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label><i class="icon-calendar-7"></i> Select a date</label>
                                <input class="date-pick form-control" data-date-format="M d, D" type="text" name="order_date">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label><i class=" icon-clock"></i> Time</label>
                                <input class="time-pick form-control" name="order_time" type="text">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                                <label>Notes for the restaurant</label>
                                <textarea class="form-control" style="height:150px" placeholder="Ex. Allergies, cash change..." name="notes" id="notes"></textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                        <input type="submit" class="btn btn-info" name="submit" value="Fill Order Detail">
                        </div>
                    </div>
                </div><!-- End box_style_1 -->
            </div><!-- End col-md-6 -->
            <div class="col-md-3" id="sidebar">
            <div class="theiaStickySidebar">
                <div id="cart_box" >
                    <h3>Your order <i class="icon_cart_alt pull-right"></i><button class="pull-right colror fa fa-circle-thin dot" id="productvalue"></button></h3>
                    <table class="table table_summary">
                    <thead>
                        <tr>
                        <td>Qty</td>
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
                             TOTAL: &#8377; <span class="pull-right" id="totalvalue"> </span>
                        </td>
                    </tr>
                    </tbody>
                    </table>
                    <hr>
                    <a class="btn_full" href="<?php echo base_url('product/cart')?>">Order now</a>
                    <a class="btn_full" href="<?php echo base_url('cart-distroy');?>">All Order Empty</a>
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
