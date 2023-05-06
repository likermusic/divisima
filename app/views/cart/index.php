
	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Your cart</h4>
			<div class="site-pagination">
				<a href="/">Home</a> /
				<a href="#">Your cart</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->
	<?php //debug($data);?>
	<!-- cart section end -->
	<section class="cart-section spad">
		<div class="container">
	<?php if (   count($data['res']['qtys'])  > 0)  :?>
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
						<h3>Your Cart</h3>
						<div class="cart-table-warp">
							<table>
							<thead>
								<tr>
									<th class="product-th">Product</th>
									<th class="quy-th">Quantity</th>
									<th class="size-th">SizeSize</th>
									<th class="total-th">Price</th>
								</tr>
							</thead>
							<tbody>



<!-- Выводит не все товары - на 1 меньше чем есть -->
<?php foreach ($data['res']['qtys'] as $ind => $item) : ?>
	<?php if (  array_search($item->product_id, array_column($data['res']['products'],'product_id')) !== false ) :?>
	
		<?php $ind_product = array_search($item->product_id, array_column($data['res']['products'],'product_id'))?>

				<?php $total += $item->qty * $data['res']['products'][$ind_product]->price?>
				<tr data-id="<?=$item->product_id?>">
					<td class="product-col">
						<img src="<?=WWW?>/img/product/<?=$data['res']['products'][$ind_product]->img?>" alt="">
						<div class="pc-title">
							<h4><?= ucfirst($data['res']['products'][$ind_product]->name) ?></h4>
							<p>$<?= $data['res']['products'][$ind_product]->price ?></p>
						</div>
					</td>
					<td class="quy-col">
						<div class="quantity">
							<div class="pro-qty">
								<input type="text" value="<?= $item->qty ?>">
							</div>
						</div>
					</td>
					<td class="size-col"><h4>Size M</h4></td>
					<td class="total-col"><h4>$ <span class="price"><?= $item->qty * $data['res']['products'][$ind_product]->price?></span> </h4></td>
				</tr>
			<?php endif;?>

			
		<?php endforeach;?>

							</tbody>
						</table>
						</div>
						<div class="total-cost">
							<h6>Total <span>$ <span class="price ml-0"><?=$total?></span></span></h6>
						</div>
					</div>
				</div>
				<div class="col-lg-4 card-right">
					<form class="promo-code-form">
						<input type="text" placeholder="Enter promo code">
						<button>Submit</button>
					</form>
					<a href="" class="site-btn">Proceed to checkout</a>
					<a href="" class="site-btn sb-dark">Continue shopping</a>
					<a id="clear-all" href="?action=clear_cart" class="site-btn bg-warning">Clear cart</a>
				</div>
			</div>
		<?php else: ?>
			<div class="row">
				<div class="col-lg-12 text-center">
					<h1>Empty cart</h1>
				</div>	
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="/" class="site-btn">Continue shopping</a>
				</div>
			</div>
		<?php endif;?>
		</div>
	</section>
	<!-- cart section end -->

	<!-- Related product section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title text-uppercase">
				<!-- <h2>Continue Shopping</h2> -->
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-new">New</div>
							<img src="./img/product/2.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Black and White Stripes Dress</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/5.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/9.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/1.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Related product section end -->



