﻿<?php 

include 'header.php';

?>

<div class="container">
		<ul class="small-menu"><!--small-nav -->
			<li><a href="" class="myacc">My Account</a></li>
			<li><a href="" class="myshop">Shopping Chart</a></li>
			<li><a href="" class="mycheck">Checkout</a></li>
		</ul><!--small-nav -->
		<div class="clearfix"></div>
		<div class="lines"></div>
		
<?php include 'slider.php'; ?>


	</div>
	<div class="f-widget featpro">
		<div class="container">
			<div class="title-widget-bg">
				<div class="title-widget">Featured Products</div>
				<div class="carousel-nav">
					<a class="prev"></a>
					<a class="next"></a>
				</div>
			</div>
			<div id="product-carousel" class="owl-carousel owl-theme">
				<div class="item">
					<div class="productwrap">
						<div class="pr-img">
							<div class="hot"></div>
							<a href="product.htm"><img src="images\sample-1.jpg" alt="" class="img-responsive"></a>
							<div class="pricetag blue"><div class="inner"><span>$199</span></div></div>
						</div>
							<span class="smalltitle"><a href="product.htm">Nikon Camera</a></span>
							<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div>
				<div class="item">
					<div class="productwrap">
						<div class="pr-img">
							<div class="new"></div>
							<a href="product.htm"><img src="images\sample-2.jpg" alt="" class="img-responsive"></a>
							<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale"><span class="oldprice">$314</span>$199</span></div></div>
						</div>
							<span class="smalltitle"><a href="product.htm">Black Shoes</a></span>
							<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div>
				<div class="item">
					<div class="productwrap">
						<div class="pr-img">
							<a href="product.htm"><img src="images\sample-3.jpg" alt="" class="img-responsive"></a>
							<div class="pricetag blue"><div class="inner"><span>$199</span></div></div>
						</div>
							<span class="smalltitle"><a href="product.htm">Red T-Shirt</a></span>
							<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div>
				<div class="item">
					<div class="productwrap">
						<div class="pr-img">
							<a href="product.htm"><img src="images\sample-1.jpg" alt="" class="img-responsive"></a>
							<div class="pricetag blue"><div class="inner"><span>$199</span></div></div>
						</div>
							<span class="smalltitle"><a href="product.htm">Nikon Camera</a></span>
							<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div>
				<div class="item">
					<div class="productwrap">
						<div class="pr-img">
							<a href="product.htm"><img src="images\sample-2.jpg" alt="" class="img-responsive"></a>
							<div class="pricetag blue"><div class="inner"><span>$199</span></div></div>
						</div>
							<span class="smalltitle"><a href="product.htm">Black Shoes</a></span>
							<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div>
				<div class="item">
					<div class="productwrap">
						<div class="pr-img">
							<a href="product.htm"><img src="images\sample-3.jpg" alt="" class="img-responsive"></a>
							<div class="pricetag blue"><div class="inner"><span>$199</span></div></div>
						</div>
							<span class="smalltitle"><a href="product.htm">Red T-Shirt</a></span>
							<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div>
				<div class="item">
					<div class="productwrap">
						<div class="pr-img">
							<a href="product.htm"><img src="images\sample-1.jpg" alt="" class="img-responsive"></a>
							<div class="pricetag blue"><div class="inner"><span>$199</span></div></div>
						</div>
							<span class="smalltitle"><a href="product.htm">Nikon Camera</a></span>
							<span class="smalldesc">Item no.: 1000</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php 

include 'footer.php';

?>