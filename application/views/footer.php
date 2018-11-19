    
    <!-- Footer ================================================== -->
    <footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3">
                <h3>Secure payments with</h3>
                <p>
                    <img src="<?php echo base_url();?>img/cards.png" alt="" class="img-responsive">
                </p>
            </div>
            <div class="col-md-3 col-sm-3">
                <h3>About</h3>
                <ul>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="faq.html">Faq</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="#0" data-toggle="modal" data-target="#login_2">Login</a></li>
                    <li><a href="#0" data-toggle="modal" data-target="#register">Register</a></li>
                    <li><a href="#0">Terms and conditions</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3" id="newsletter">
                <h3>Newsletter</h3>
                <p>
                    Join our newsletter to keep be informed about offers and news.
                </p>
                <div id="message-newsletter_2">
                </div>
                <form method="post" action="" name="newsletter_2" id="newsletter_2">
                    <div class="form-group">
                        <input name="email_newsletter_2" id="email_newsletter_2" type="email" value="" placeholder="Your mail" class="form-control">
                    </div>
                    <input type="submit" value="Subscribe" class="btn_1" id="submit-newsletter_2">
                </form>
            </div>
            <div class="col-md-2 col-sm-3">
                <h3>Settings</h3>
                <div class="styled-select">
                    <select class="form-control" name="lang" id="lang">
                        <option value="English" selected>English</option>
                        <option value="French">French</option>
                        <option value="Spanish">Spanish</option>
                        <option value="Russian">Russian</option>
                    </select>
                </div>
                <div class="styled-select">
                    <select class="form-control" name="currency" id="currency">
                        <option value="USD" selected>USD</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                        <option value="RUB">RUB</option>
                    </select>
                </div>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="#0"><i class="icon-facebook"></i></a></li>
                        <li><a href="#0"><i class="icon-twitter"></i></a></li>
                        <li><a href="#0"><i class="icon-google"></i></a></li>
                        <li><a href="#0"><i class="icon-instagram"></i></a></li>
                        <li><a href="#0"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#0"><i class="icon-vimeo"></i></a></li>
                        <li><a href="#0"><i class="icon-youtube-play"></i></a></li>
                    </ul>
                    <p>
                        © Quick Food 2015
                    </p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    </footer>
    <!-- End Footer =============================================== -->

<div class="layer"></div><!-- Mobile menu overlay mask -->

<!-- Login modal -->   
<div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
                
				<form action="<?php echo base_url('user-login')?>" method="post" class="popup-form" id="myLogin">

                	<div class="login_icon">
                    <a href="" class="form-control btn btn-success" >Facebook</a>
                    <a href="<?php echo @$google_login_url;?>" class="form-control btn btn-danger">Google</a>
                    <i class="icon-lock"></i>
                    </div>

					<input type="text" class="form-control form-white" name="email"  placeholder="Email">
					<input type="password" class="form-control form-white" name="password" placeholder="Password">
					<div class="text-left">
                        <a href="#0" data-toggle="modal" data-target="#password_2">Forgot Password?</a>
					</div>
					<button type="submit" class="btn btn-submit">Submit</button>
				</form>
			</div>
		</div>
</div><!-- End modal -->  
 
    
<!-- Register modal -->   
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<form action="<?php echo base_url('signup');?>" method="post" class="popup-form" id="myRegister">
                	<div class="login_icon"><i class="icon_lock_alt"></i></div>
                    <div class="col-sm-12">
                    <div class="col-sm-6">
                    <label>User</label>
					<input type="radio" class="form-control" name="user" required value="user">
                    </div>
                    <div class="col-sm-6">
                    <label>Merchant</label>
					<input type="radio" class="form-control" name="user" required value="merchant">
                    </div>
                    </div>
                    <input type="email" id="email-input" onkeyup="checkemail(this.value);" class="form-control form-white" name="email" id="email" placeholder="Email" required>
                    <span id="name_status"></span>
                    <input type="text" class="form-control form-white" onkeyup="checkMobile(this.value);" name="mobile" id="mobile" maxlength="10" placeholder="Mobile No" required>
                   <span id="name_mobile"></span>
                    <div id="pass-info" class="clearfix"></div>
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="accept_2" id="check_2" name="check_2" required />
							<label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit">Register</button>
				</form>
			</div>
		</div>
</div>
<script src="<?php echo base_url();?>js/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url();?>js/common_scripts_min.js"></script>
<script src="<?php echo base_url();?>js/functions.js"></script>
<script src="<?php echo base_url();?>assets/validate.js"></script>
 <script src="<?php echo base_url();?>js/bootstrap3-wysihtml5.min.js"></script>
<script src="<?php echo base_url();?>js/video_header.js"></script>
<script src="<?php echo base_url();?>js/rangeslider.min.js"></script>
<script src="<?php echo base_url();?>js/tabs.js"></script>
<script src="<?php echo base_url();?>js/map.js"></script>
<script src="<?php echo base_url();?>js/ion.rangeSlider.js"></script>
<script src="<?php echo base_url();?>js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="https://cdn.ckeditor.com/4.5.1/standard/ckeditor.js"></script>
<script src="<?php echo base_url();?>js/dropzone.min.js"></script>
<script>
    $(function () {
         'use strict';
        $("#range").ionRangeSlider({
            hide_min_max: true,
            keyboard: true,
            min: 0,
            max: 15,
            from: 0,
            to:5,
            type: 'double',
            step: 1,
            prefix: "Km ",
            grid: true
        });
    });
</script>
<script type="text/javascript">
   
function checkemail(email)
{
    
 if(email)
 {
  $.ajax({
  type: 'post',
  url: '<?php echo base_url('login/checkEmail');?>',
  data: {
   'email':email,
  },
  success: function (response) {
   $( '#email_status' ).html(response);
   if(response=="OK")   
   {
   $('#name_status').html('<span style="color:green">Email Available!</span>');  
   }
   else
   {

    $('#name_status').html('<span style="color:red">Email already exit!</span>'); 
    $('#email').val('');  
   }
  }
  });
 }
 else
 {
  $('#name_status').html("");
  return false;
 }
}
function checkMobile(mobile)
{
    
 if(mobile)
 {
  $.ajax({
  type: 'post',
  url: '<?php echo base_url('login/checkMobile');?>',
  data: {
   'mobile':mobile,
  },
  success: function (response) {
   $( '#name_mobile' ).html(response);
   if(response=="OK")   
   {
   $('#name_mobile').html('<span style="color:green">Mobile Available!</span>');  
   }
   else
   {

    $('#name_mobile').html('<span style="color:red">Mobile No already exit!</span>'); 
    $('#mobile').val('');  
   }
  }
  });
 }
 else
 {
  $('#name_mobile').html("");
  return false;
 }
}

</script>

<script>
  $('input.date-pick').datepicker('setDate', 'today');
  $('input.time-pick').timepicker({
    minuteStep: 15,
    showInpunts: false
})
</script>
<script type="text/javascript">
$(document).ready(function () {
  $("#mobile").keypress(function (e) {
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        $("#error").html("Input Only 10 Digit").show().fadeOut("slow",1000);
               return false;
    }
   });
});
</script>
<script type="text/javascript">
setInterval(function(){
    $.ajax({
        url: '<?php echo base_url('cart/loadData');?>',
        type: 'POST',
        data: {},
        success:function(result)
        {
     $('#loadCart').html(result);
        }
    });
    $.ajax({
        url: '<?php echo base_url('cart/loadtotal');?>',
        type: 'POST',
        data: {},
        success:function(result)
        {
     $('#totalvalue').html(result);

        }
    });
    $.ajax({
        url: '<?php echo base_url('cart/loadvalue');?>',
        type: 'POST',
        data: {},
        success:function(result)
        {
          
       $('#productvalues').html(result);
       $('#productvaluess').html(result);
       $('#productvalue').html(result);
        }
    });
    }, 2000);
</script>
</body>

</html>