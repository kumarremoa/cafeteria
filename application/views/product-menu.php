<?php $this->load->view('header')?>


<!-- SubHeader =============================================== -->
<section class="parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url();?>img/sub_header_2.jpg" data-natural-width="1400" data-natural-height="470">
    <div id="subheader">
    <div id="sub_content">
        <div id="thumb"><img src="<?php echo base_url();?>img/thumb_restaurant.jpg" alt=""></div>
                     <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="detail_page_2.html">Read 98 reviews</a></small>)</div>
                    <h1>Mexican TacoMex</h1>
                    <div><em>Mexican / American</em></div>
                    <div><i class="icon_pin"></i> 135 Newtownards Road, Belfast, BT4 1AB - <strong>Delivery charge:</strong> $10, free over $15.</div>
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
            	<p><a href="<?php echo base_url('product/country');?>" " class="btn_side">Back to search</a></p>
				<div class="box_style_1">
					<ul id="cat_nav">
                    <?php 
                    $cat_lists=$this->Product_model->listingcount();
                    foreach($cat_lists as $cat):?>
						<li><a href="#<?php echo $cat->product_category;?>" class="active"> <?php echo ucfirst($cat->product_category);?><span>(<?php echo $cat->total?>)</span></a></li>
                    <?php endforeach; ?>
					</ul>
				</div><!-- End box_style_1 -->
                
				<div class="box_style_2 hidden-xs" id="help">
					<i class="icon_lifesaver"></i>
					<h4>Need <span>Help?</span></h4>
					<a href="tel://004542344599" class="phone">+45 423 445 99</a>
					<small>Monday to Friday 9.00am - 7.30pm</small>
				</div>
			</div><!-- End col-md-3 -->
            
			<div class="col-md-6">
				<div class="box_style_2" id="main_menu">
					<h2 class="inner">Menu</h2>
                    <?php foreach($cat_lists as $product){?>
					<h3 class="nomargin_top" id="<?php echo $product->product_category;?>"><?php echo ucfirst($product->product_category);?></h3>
					<hr>
					<table class="table table-striped cart-list">
					<thead>
					<tr>
						<th>
							 Item
						</th>
						<th>
							 Price
						</th>
						<th>
							 Order
						</th>
					</tr>
					</thead>
					<tbody>
                    <?php $i=1; foreach($products as $prod){
                        if($prod->product_category == $product->product_category){
                        ?>
					<tr>
						<td>
                        	<figure class="thumb_menu_list"><img src="<?php echo base_url('products/').$prod->product_image;?>" alt="thumb"></figure>
							<h5><?php echo $i++.'. '. $prod->product_name;?></h5>
							<p>
								<?php echo $prod->product_desc;?>
							</p>
						</td>
						<td>
							<strong>&#8377; <?php echo $prod->product_price;?></strong>
						</td>
						<td class="options">
                        <div class="dropdown dropdown-options">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><i class="icon_plus_alt2"></i></a>
                            <div class="dropdown-menu">
                                <h5>Select an option</h5>
                                <label>
                                <input type="radio" id="options_1"  name="options_1" value="Large,<?php echo $prod->product_price;?>"> Large <span>+ &#8377;<?php echo $prod->product_price;?></span>
                                </label>
                                <label>
                                <input type="radio" id="options_1"  name="options_1" value="Medium,<?php echo $prod->product_price / 2 * 1;?>">Medium <span>+ &#8377;<?php echo $prod->product_price / 2 * 1;?></span>
                                </label>
                                 <label>
                                <input type="radio" id="options_1"  name="options_1" value="Small,<?php echo $prod->product_price / 3.2 * 1;?>">Small <span>+ &#8377;<?php echo $prod->product_price / 3.2 * 1;?></span>
                                </label>
                                <!-- <h5>Add ingredients</h5>
                                <label>
                                <input type="checkbox" value="">Extra Tomato <span>+ $4.30</span>
                                </label>
                                <label>
                                <input type="checkbox" value="">Extra Peppers <span>+ $2.50</span>
                                </label> -->
                                <a onclick="selectItem('<?php echo $prod->product_id;?>')" class="add_to_basket">Add to cart</a>
                            </div>
                        </div>
                    </td>
					</tr>
					<?php } }?>
					</tbody>
					</table>
                    <hr>
                    <?php } ?>
					<hr>
				</div>
			</div>
            
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
					<!-- <a class="btn_full" href="<?php echo base_url('cart-distroy');?>">Order Empty</a> -->
				</div>
                </div>
			</div>
            
		</div>
</div>
<!-- End Content =============================================== -->
<?php $this->load->view('footer')?>

<!-- SPECIFIC SCRIPTS -->
<script  src="<?php echo base_url();?>js/cat_nav_mobile.js"></script>
<script>$('#cat_nav').mobileMenu();</script>
<script src="<?php echo base_url();?>js/theia-sticky-sidebar.js"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
      additionalMarginTop: 80
    });
</script>
<script>
$('#cat_nav a[href^="#"]').on('click', function (e) {
	e.preventDefault();
	var target = this.hash;
	var $target = $(target);
	$('html, body').stop().animate({
		'scrollTop': $target.offset().top - 70
	}, 900, 'swing', function () {
		window.location.hash = target;
	});
});
function selectItem(arg)
{
	var elem=$('#options_1:checked').val();
	if(elem)
	{
		$.ajax({
			url: '<?php echo base_url('cart');?>',
			type: 'POST',
			data: {'product_id': arg,'product_size':elem},
			success:function(res){
				console.log(res);
				
			}
		});
	}
	else{
		alert('Product Option Is Not Select');
	}
}


</script>