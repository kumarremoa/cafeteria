 <footer class="main-footer">
     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Change Password</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url('admin/dashboard/change');?>">
			  <div class="form-group">
			    <label for="pwd">Password:</label>
			    <input type="password" class="form-control" name="password" id="password">
			  </div>
			  <div class="form-group">
			    <label for="pwd">confirm Password:</label>
			    <input type="password" class="form-control" name="con_password" id="con_password">

			    <input type="hidden" class="form-control" name="id" id="id" value="1">
			  </div>
			  <div class="error1" style="color: red;"></div>
			  <button type="submit" name="submit" id="submit" class="btn btn-default">Submit</button>
			</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- jQuery 2.2.3 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>admins/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>admins/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url();?>admins/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>admins/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>admins/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>admins/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>admins/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url();?>admins/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>admins/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>admins/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>admins/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>admins/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>admins/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) --><!-- 
<script src="<?php echo base_url();?>admins/dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>admins/dist/js/demo.js"></script>

 <script src="<?php echo base_url();?>admins/build/jquery.datetimepicker.full.js"></script>

<script>
  $(document).ready();
  $(function () {
    $("#example1").DataTable();
  });

</script>
<script type="text/javascript">
    $(function () {
        $("#submit").click(function () {
            var password = $("#password").val();
            var confirmPassword = $("#con_password").val();
            if (password != confirmPassword) {
                $('.error1').html('Psaaword did not match');
                return false;
            }
            return true;
        });
    });

</script>

        <script>
            /*jslint browser:true*/
            /*global jQuery, document*/

            jQuery(document).ready(function () {
                jQuery('#filter-date, #search-from-date, #search-to-date').datetimepicker();
            });
        </script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('#category').on("input", function() {
              var dInput = this.value;
              $('#slug').val(dInput.toLowerCase().replace(/ /g,'-'));
              $('#tag').val(dInput.toLowerCase());
            });
        });
        $('.alert').hide(10000);
        $(function() {
          $('#datetimepicker1').datetimepicker();
        });

</script>
</body>
</html>
