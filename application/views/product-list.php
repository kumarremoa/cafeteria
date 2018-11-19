<?php $this->load->view('header')?>
<style type="text/css">
	#result{
		padding: 15px;
		text-align: top;
	}

</style>
<!-- SubHeader =============================================== -->
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/sub_header_short.jpg" data-natural-width="1400" data-natural-height="350">
    <div id="subheader">
	<div id="sub_content">
    	<h1>24 results in your zone</h1>
        <div><i class="icon_pin"></i> 135 Newtownards Road, Belfast, BT4 1AB</div>
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
    
    <div class="collapse" id="collapseMap">
		<div id="map" class="map"></div>
	</div><!-- End Map -->

<!-- Content ================================================== -->
<div class="container margin_60_35">
	<div class="row">
    
		<div class="col-md-3">
			<!-- <p>
				<a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap">View on map</a>
			</p> -->
			<div id="filters_col"><!-- href="collapseFilters" -->
				<a data-toggle="collapse" href="#" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters <i class="icon-plus-1 pull-right"></i></a>
				<div class="collapse" id="collapseFilters">
					<div class="filter_type">
                    	<h6>Distance</h6>
                        
						      <input type="text" id="range" value="" name="range" onscroll="areaRange(this.value)">
						  
						<h6>All Category</h6>
						<form action="#" method="post" class="filter" id="filter">
						<ul>
							<li><label>
							<input type="radio" name="myradios"  class="ads_Checkbox" checked value="all"  onclick="selectCategory(this.value)">All <small>(<?php echo count($tatal)?>)</small></label></li>
							<?php $cat_lists=$this->Product_model->listingcount(); 
							foreach($cat_lists as $list):?>
							<li><label>
								<input type="radio" name="myradios" class="ads_Checkbox" value="<?php echo $list->product_category?>" onclick="selectCategory(this.value)">
								<?php echo ucfirst($list->product_category);?> <small>(<?php echo $list->total;?>)</small></label><i class="color_1"></i></li>
						<?php endforeach;?>
						</ul>
						</form>
					</div>
					
					<!-- <div class="filter_type">
						<h6>Options</h6>
						<ul class="nomargin">
							<li><label><input type="checkbox" class="icheck">Delivery</label></li>
							<li><label><input type="checkbox" class="icheck">Take Away</label></li>
							<li><label><input type="checkbox" class="icheck">Distance 10Km</label></li>
							<li><label><input type="checkbox" class="icheck">Distance 5Km</label></li>
						</ul>
					</div> -->
				</div>
			</div>
		</div>
        
		<div class="col-md-9">
        
        <div id="tools">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-6">
						<div class="styled-select">
							<select name="sort_rating" id="sort_rating">
								<option value="" selected>Sort by ranking</option>
								<option value="lower">Lowest ranking</option>
								<option value="higher">Highest ranking</option>
							</select>
						</div>
					</div>
					<div class="col-md-9 col-sm-9 hidden-xs">
						<a href="<?php echo base_url('product/menu');?>" class="bt_filters"><i class="icon-list" id="grid"></i></a>
						<a href="<?php echo base_url('product/list');?>" class="bt_filters"><i class="icon_menu-circle_alt2"></i></a>
					</div>
					
				</div>
			</div>
        
        	<div class="row" id="shw">
        	<?php if(@$details[0]!=''){ 
        		foreach($details as $product):?>
            	<div class="col-md-6 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                	<a class="strip_list grid" href="javascript:0">
                    	<div class="ribbon_1">Popular</div>
                    	<div class="desc">
							<div class="thumb_strip">
								<img src="<?php echo base_url('products/').$product->product_image;?>" alt="">
							</div>
							<div class="rating">
								<i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
							</div>
							<h3><?php echo $product->product_name;?></h3>
							<div class="type">
								<?php echo 'India '.$product->states.' '.$product->cities;?>
							</div>
							<div class="location">
								<?php echo $product->product_address;?> <br>&#8377;<i class="fa fa-times"></i><span class="opening"> <?php echo $product->product_price;?></span>&nbsp;
								&#8377;<span><?php echo $product->discount_total;?></span>
							</div>
							<ul>
								<li>Take away<i class="icon_check_alt2 ok"></i></li>
								<li>Delivery<i class="icon_check_alt2 ok"></i></li>
							</ul>
							<div id="result"></div>
							 <button class="btn btn-success" onclick="addToCart(this.value)" value="<?php echo $product->product_id;?>">Add cart</button>
							<button class="btn btn-success" value="<?php echo $product->product_id;?>">More</button>
							
						</div>
                    </a>
                </div>
            <?php endforeach; } else {
            	echo '<h2 align="center"> Product Not Found!</h2>';
            	}?>
                               
            </div>
            <!-- <a href="#0" class="load_more_bt wow fadeIn" data-wow-delay="0.2s">Load more...</a> -->           
		</div>
        
	</div>
</div>

<!-- End Content =============================================== -->
<?php $this->load->view('footer')?>
<script type="text/javascript">
	var counter=0;
    $(window).scroll(function () {
        if ($(window).scrollTop() == $(document).height() - $(window).height() && counter < 2) {
            appendData();
        }
    });
function selectCategory(id)
{
	$.ajax({
		url: '<?php echo base_url('product/selectCategory')?>',
		type: 'POST',
		data: {'product_id': id},
		success:function(responce)
		{
			if(responce)
			{
				//$("#shw").html(responce);
				$('#shw').append(responce);
			    /* counter++;
			
				if(counter==2)
				$('#shw').append(responce);
        */
			}
			else{
			 $("#result").html('Order is not success!'); 
              $("#result").addClass("alert alert-danger");
			}
		}
	});	
}
function addToCart(arg)
{
	$.ajax({
		url: '<?php echo base_url('cart/cartAdd')?>',
		type: 'POST',
		data: {'product_id': arg},
		success:function(responce)
		{
			if(responce)
			{
				 $("#result").html('Order Successfully !'); 
                 $("#result").addClass("alert alert-success");
			}
			else{
				 $("#result").html('Order is not success!'); 
              $("#result").addClass("alert alert-danger");
			}
		}
	});	
}
$('#result').hide(30000);
function areaRange(area)
{
	alert(area);
}
</script>