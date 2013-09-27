<section id="cart">

	<div class="cart-total">
		<a href="<?php echo $cart; ?>" title="<?php echo $heading_title; ?>" ><i class="icon-bag"></i> <span id="cart-total"><?php echo $text_items; ?></span></a>
	</div>
	<div class="details">
		
		<div class="arrow">&nbsp;&nbsp;&nbsp;</div>
		<div class="content">
			
			<?php if ($products || $vouchers) { ?>

			<div class="mini-cart-info">

				<table class="items">

				<?php foreach ($products as $product) { ?>

					<tr>
						<td class="image" width="20%">
							<?php if ($product['thumb']) { ?>
							<a href="<?php echo $product['href']; ?>">
								<img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" />
							</a>
							<?php } ?>
						</td>
						<td class="name" width="40%">
							<a href="<?php echo $product['href']; ?>">
								<?php echo $product['name']; ?>
							</a>
							<div>
								<?php foreach ($product['option'] as $option) { ?>
								- <small><?php echo $option['name']; ?> <?php echo $option['value']; ?></small><br />
								<?php } ?>
							</div>
						</td>
						<td class="quantity" width="5%">
							<span class="qty"><?php echo $product['quantity']; ?></span>
						</td>
						<td class="subtotal" width="30%"><?php echo $product['total']; ?></td>
						<td width="5%">
							<a class="close" data-dismiss="item" title="<?php echo $button_remove; ?>" onclick="$('#cart').load('index.php?route=module/cart&remove=<?php echo $product['key']; ?> #cart > *');">&times;</a>
						</td>
					</tr>

				<?php } ?>

				<?php foreach ($vouchers as $voucher) { ?>

					<tr>
						<td class="image"></td>
						<td class="name"><?php echo $voucher['description']; ?></td>
						<td class="quantity">x&nbsp;1</td>
						<td class="total"><?php echo $voucher['amount']; ?></td>
						<td>
							<a class="close" data-dismiss="item" title="<?php echo $button_remove; ?>" onclick="$('#cart').load('index.php?route=module/cart&remove=<?php echo $voucher['key']; ?> #cart > *');">&times;</a>
						</td>
					</tr>

				<?php } ?>

				</table>

			</div>

			<div class="mini-cart-total">
				<table class="total">
					<?php foreach ($totals as $total) { ?>
					<tr>
						<td class="right">
							<b><?php echo $total['title']; ?>:</b>
						</td>
						<td class="right">
							<?php echo $total['text']; ?>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>

			<div class="checkout">
				<a href="<?php echo $cart; ?>" class="btn btn-mini"><?php echo $text_cart; ?></a>
				<a href="<?php echo $checkout; ?>" class="btn btn-mini btn-cart"><?php echo $text_checkout; ?></a>
			</div>

			<?php } else { ?>

			<div class="empty white"><?php echo $text_empty; ?></div>

			<?php } ?>

		</div>
	</div>

</section>