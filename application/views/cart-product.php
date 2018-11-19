<style type="text/css">
	
	.dot {
    height: 25px;
    width: 25px;
    padding-left: 5px;
    background-color: #bbb;
    border-radius: 20%;
    display: inline-block;
    color: red;
}
</style>
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
					<tbody>
					<?php  $i=1; foreach ($total=$this->cart->contents() as $items): ?>
					<tr>
					  <td><?php echo $i++;?></td>
					  <!-- <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> -->
						<td><?php echo $items['name']?></td>
						<td><?php echo $items['options']?></td>
						<td>&#8377; <?php echo $items['price']?></td>
					</tr>
					<?php endforeach;?>
					
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