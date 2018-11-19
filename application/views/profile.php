<?php $this->load->view('header')?>
<style type="text/css">
#subheader {
height: 60px !important;
}
.parallax-window#short {
height: 2px !important;
min-height: inherit !important;
}
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 100%;
}
</style>
<section class="parallax-window" id="short" data-parallax="scroll" data-image-src="" data-natural-width="1400" data-natural-height="350">
<div id="subheader">

</div>
</section>
<div class="container margin_60">
<div id="tabs" class="tabs">
<nav>
<ul>
<li><a href="#section-1" class="icon-profile"><span>Main info</span></a>
</li>
<li><a href="#section-2" class="icon-menut-items"><span>Menu</span></a>
</li>
<li><a href="#section-3" class="icon-settings"><span>Settings</span></a>
</li>
</ul>
</nav>
<div class="content">

<section id="section-1">
<div class="indent_title_in">
	
<i class="icon_house_alt"></i>
<h3>General restaurant description</h3>
<p>Restaurants are classified or distinguished in many different ways. The primary factors are usually the food itself (e.g. vegetarian, seafood, steak); the cuisine (e.g. Italian, Chinese, Japanese, Indian, French, Mexican, Thai) or the style of offering (e.g. tapas bar, a sushi train, a tastet restaurant, a buffet restaurant or a yum cha restaurant). Beyond this, restaurants may differentiate themselves on factors including speed (see fast food), formality, location, cost, service, or novelty themes (such as automated restaurants).</p>
</div>
<form method="post" action="<?php echo base_url('merchant/update')?>" enctype="multipart/form-data">
<div class="wrapper_indent">
<div class="form-group">
	<label>Restaurant name</label>
	<input class="form-control" name="restaurant_name" id="restaurant_name" type="text" >
</div>
<div class="form-group">
	<label>Restaurant description</label>
	<textarea name="description" id="editor1" class="form-control"></textarea>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label>Telephone</label>
			<input type="text" id="Telephone" name="mobile" class="form-control" >
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label>Email</label>
			<input type="email" id="Email" name="Email" class="form-control" >
		</div>
	</div>
</div>
</div><!-- End wrapper_indent -->

<hr class="styled_2">

<div class="indent_title_in">
<i class="icon_pin_alt"></i>
<h3>Address</h3>

</div>
<div class="wrapper_indent">
<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label>Country</label>
			<select class="form-control" name="country" id="country">
				<option value="india" selected>India</option>
			</select>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-group">
			<label>State</label>
			<select class="form-control" name="state_booking" id="state_booking" onchange="selectCity(this.value);">
				<?php foreach ($state as $value) {?>
					<option value="<?php echo $value->city_state;?>"><?php echo $value->city_state;?></option>
				<?php } ?>
				
			</select>
		</div>
	</div>
    <div class="col-md-4">
		<div class="form-group" id="city">
		<label>City</label>
			<select class="form-control">
				
			</select>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label>Street line 1</label>
			<input type="text" id="street_1" name="street_1" class="form-control">
		</div>
	</div>
	
	<div class="col-md-6">
		<div class="form-group">
			<label>Postal code</label>
			<input type="text" id="postal_code" name="postal_code" class="form-control">
		</div>
	</div>
</div><!--End row -->
</div><!-- End wrapper_indent -->

<hr class="styled_2">
<div class="indent_title_in">
<i class="icon_images"></i>
<h3>Logo and restaurant photos</h3>

</div>

<div class="wrapper_indent add_bottom_45">
<div class="form-group col-md-6">
	<label>Upload your restaurant logo</label>
	<div >
		<input name="userfile" class="dropzone" type="file" id="menu-item-pic" required>
		<div class="dz-default dz-message"><span>Click or Drop Images Here</span>
		</div>
	</div>
</div>

<div class="form-group col-md-6">
	<label>Upload your restaurant photos</label>
	<div >
		<input name="restorent_image" id="photos" class="dropzone" type="file" id="menu-item-pic" required>
		<div class="dz-default dz-message"><span>Click or Drop Images Here</span>
		</div>
	</div>
</div>
</div>

<hr class="styled_2">
<div class="wrapper_indent">
<button class="btn_1" type="submit" name="merchant">Save now</button>
</div>
</form>
</section>
<!-- End section 1 -->
<!-- close profile merchant -->
<!-- product details -->
<section id="section-2">
<div class="indent_title_in">
<i class="icon_document_alt"></i>
<h3>Add menu list</h3>
<p>We perform the labor intensive and time consuming tasks that you would rather outsource - such as product upload, bulk product upload, data entry, inventory management, etc. Use our professional Amazon product listing services, and concentrate instead on other facets of your business while we do the "behind the scenes" work for you.</p>
</div>

<hr class="styled_2">

<div class="wrapper_indent">
<div class="col-sm-12">
<form method="post" action="<?php echo base_url('merchant/product')?>" enctype="multipart/form-data">
<div class="form-group col-sm-6">
	<label>Menu Category</label>
	<select name="product_category" id="product_category" onchange="selectCategory(this.value)" class="form-control" placeholder="EX. Main courses">
	<option>Please Select Category</option>
	<?php foreach($categories as $cat){?>
	<option value="<?php echo $cat->prod_cat_name;?>"><?php echo $cat->prod_cat_name;?></option>
	<?php }?>
	</select>
</div>
<div class="form-group col-sm-6" id="subcate">
	<label>Sub Category</label><select  class="form-control" placeholder="Select Sub Category"></select>
</div>
</div>

<div class="menu-item-section clearfix">
	<h4>Menu item #1</h4>
	
</div>

<div class="strip_menu_items">
	<div class="row">
		<div class="col-md-3">
    <div class="form-group">
        <label>Upload Image</label>
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" name="userfile" id="imgInp">
                </span>
            </span>
            <input type="text" class="form-control" readonly>
        </div>
        <img id='img-upload'/>
	    </div>
	</div>
		<div class="col-sm-9">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="product_title" class="form-control">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Price</label>
						<input type="text" name="price" id="price" onkeyup="priceval(this.value)" class="form-control">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Discount</label>
						<input type="text" name="discount" id="discount" class="form-control" onkeyup="priceval(this.value)">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Discount Price</label>
						<input type="text" name="dis_price" id="dis_price" class="form-control">
					</div>
				</div>
			</div>
			<div class="form-group">
				<label>Short description</label>
				<textarea name="description" id="editor" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<label>Item options</label>
                <div class="table-responsive">
				<table class="table table-striped notifications">
					<tbody>
						<tr>
							
							<td style="width:33%">
								<input type="text" name="medium_price" class="form-control" placeholder="Price Medium">
							</td>
							<td style="width:33%">
								<input type="text" name="small_price" class="form-control" placeholder="Price Small">
							</td>
						</tr>
						
						</tr>
					</tbody>
				</table>
                </div>
			</div><!-- End form-group -->

			<div class="form-group">
				<label>Extra Item ingredients</label>
                <div class="table-responsive">
				<table class="table table-striped notifications">
					<tbody>
						<tr>
							<td style="width:33%">
								<input type="text" name="extra_item_price" class="form-control" placeholder="Extra Item Price">
							</td>
							<td style="width:33%">
								<input type="text" name="extra_item_paper" class="form-control" placeholder="Extra Item Paper Price">
							</td>
							
						</tr>
						
					</tbody>
				</table>
                </div>
			</div><!-- End form-group -->
		</div>
	</div><!-- End row -->
</div><!-- End strip_menu_items -->
</div><!-- End wrapper_indent -->

<hr class="styled_2">

<div class="wrapper_indent">
<div class="add_more_cat">
<button type="submit" name="merchant" class="btn_1" >Save now</button> </div>
</div><!-- End wrapper_indent -->
</form>
</section><!-- End section 2 -->

<section id="section-3">

<div class="row">

<div class="col-md-6 col-sm-6 add_bottom_15">
	<form action="<?php echo base_url('profile/changePassword');?>">
	<div class="indent_title_in">
		<i class="icon_lock_alt"></i>
		<h3>Change your password</h3>
		<p>
			Mussum ipsum cacilds, vidis litro abertis.
		</p>
	</div>
	<div class="wrapper_indent">
		<div class="form-group">
			<label>Old password</label>
			<input class="form-control" name="old_password" id="old_password" type="password">
		</div>
		<div class="form-group">
			<label>New password</label>
			<input class="form-control" name="new_password" id="new_password" type="password">
		</div>
		<div class="form-group">
			<label>Confirm new password</label>
			<input class="form-control" name="confirm_new_password" id="confirm_new_password" type="password">
		</div>
		<button type="submit" class="btn_1 green">Update Password</button>
	</div><!-- End wrapper_indent -->
	</form>
</div>

<div class="col-md-6 col-sm-6 add_bottom_15">
	<div class="indent_title_in">
		<i class="icon_mail_alt"></i>
		<h3>Change your email</h3>
		<p>
			Mussum ipsum cacilds, vidis litro abertis.
		</p>
	</div>
	<div class="wrapper_indent">
	<form action="<?php echo base_url('profile/changeEmail');?>">
		<div class="form-group">
			<label>Old email</label>
			<input class="form-control" name="old_email" id="old_email" type="email">
		</div>
		<div class="form-group">
			<label>New email</label>
			<input class="form-control" name="new_email" id="new_email" type="email">
		</div>
		<div class="form-group">
			<label>Confirm new email</label>
			<input class="form-control" name="confirm_new_email" id="confirm_new_email" type="email">
		</div>
		<button type="submit" class="btn_1 green">Update Email</button>
		</form>
	</div><!-- End wrapper_indent -->
</div>

</div>

<hr class="styled_2">

<div class="indent_title_in">
<i class="icon_shield"></i>
<h3>Notification settings</h3>
</div>
<div class="row">

<div class="col-md-6 col-sm-6">
	<div class="wrapper_indent">
		<table class="table table-striped notifications">
			<tbody>
				<tr>
					<td style="width:5%">
						<i class="icon_pencil-edit_alt"></i>
					</td>
					<td style="width:65%">
						New orders
					</td>
					<td style="width:35%">
						<label>
							<input type="checkbox" name="option_1_settings" checked class="icheck" value="yes">Yes</label>
						<label class="margin_left">
							<input type="checkbox" name="option_1_settings" class="icheck" value="no">No</label>
					</td>
				</tr>
				<tr>
					<td>
						<i class="icon_pencil-edit_alt"></i>
					</td>
					<td>
						Modified orders
					</td>
					<td>
						<label>
							<input type="checkbox" name="option_2_settings" checked class="icheck" value="yes">Yes</label>
						<label class="margin_left">
							<input type="checkbox" name="option_2_settings" class="icheck" value="no">No</label>
					</td>
				</tr>
				<tr>
					<td>
						<i class="icon_pencil-edit_alt"></i>
					</td>
					<td>
						New user registration
					</td>
					<td>
						<label>
							<input type="checkbox" name="option_3_settings" checked class="icheck" value="yes">Yes</label>
						<label class="margin_left">
							<input type="checkbox" name="option_3_settings" class="icheck" value="no">No</label>
					</td>
				</tr>
				<tr>
					<td>
						<i class="icon_pencil-edit_alt"></i>
					</td>
					<td>
						New comments
					</td>
					<td>
						<label>
							<input type="checkbox" name="option_4_settings" checked class="icheck" value="yes">Yes</label>
						<label class="margin_left">
							<input type="checkbox" name="option_4_settings" class="icheck" value="no">No</label>
					</td>
				</tr>
			</tbody>
		</table>
		<button type="submit" class="btn_1 green">Update notifications settings</button>
	</div>
    
</div>
</div>

</section>

</div>
</div>
</div>
<input type="hidden" id="productvalue">
<input type="hidden" id="productvaluess">
<?php $this->load->view('footer')?>


<script type="text/javascript">
 function priceval()
{
	var price=$('#price').val();
	var dis=$('#discount').val();
	total=price/100*dis;
	$('#dis_price').val(price-total);	
}
function selectCity(argument) 
{
$.ajax({
url: '<?php echo base_url('profile/city');?>',
type: 'POST',
data: {'param': argument},
success:function(res){
$('#city').html(res);
}
});
}
function selectCategory(argument) 
{
$.ajax({
url: '<?php echo base_url('profile/category');?>',
type: 'POST',
data: {'param': argument},
success:function(res){
$('#subcate').html(res);
}
});
}
</script>
<script>
$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
</script>

<script>
new CBPFWTabs(document.getElementById('tabs'));
</script>

<script type="text/javascript">
CKEDITOR.editorConfig = function (config) {
    config.language = 'es';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;

};
CKEDITOR.replace('editor1');
CKEDITOR.replace('editor');

if ($('.dropzone').length > 0) {
Dropzone.autoDiscover = false;
$(".menu-item-pic").dropzone({
url: "upload",
maxFiles: 1,
addRemoveLinks: true
});
}
</script>