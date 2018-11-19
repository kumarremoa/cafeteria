<script>
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
    $.ajax({
        url: '<?php echo base_url('cart/loadtotal');?>',
        type: 'POST',
        data: {},
        success:function(result)
        {
     document.getElementById('totalvalue').innerHTML=result;

        }
    });
    $.ajax({
        url: '<?php echo base_url('cart/loadvalue');?>',
        type: 'POST',
        data: {},
        success:function(result)
        {
          
       document.getElementById('productvalues').innerHTML=result;
       document.getElementById('productvaluess').innerHTML=result;
       document.getElementById('productvalue').innerHTML=result;
        }
    });
    }, 2000);
</script>