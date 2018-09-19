<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Uhuru App : Home</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //font-awesome icons -->
	<!-- js -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!-- //js -->
	<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet'
	 type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
	 rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
	</script>
	<!-- start-smoth-scrolling -->
</head>

<body>
	<!-- header -->
	<div class="agileits_header col-md-12">
		<div class="w3l_offers">
			<a href="products.html">Today's special Offers !</a>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}"
				 required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="product_list_header">
			<form action="#" method="post" class="last">
				<fieldset>
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<input type="submit" name="submit" value="View your orders" class="button" />
				</fieldset>
			</form>
		</div>
		div
		<div class="pull-right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					{{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('images/9.png')}}" alt="user" height="40px"></a>					--}}
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="{{route('login')}}">Login</a></li>
								<li><a href="{{route('register')}}">Sign Up</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- script-for sticky-nav -->
	<script>
		$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
	<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.html"><span>Grocery</span> Store</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="{{('product')}}">Post product</a><i>/</i></li>

					<li class="dropdown mega-dropdown active">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Order<span class="caret"></span></a>
						<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
							<div class="w3ls_vegetables">
								<ul>
									<li><a href="{{('place_order')}}">place an order</a></li><br>
									<li><a href="{{('retrieve_order')}}">retrieve an order</a></li>
								</ul>
							</div>
						</div>
						<i>/</i>
					</li>
					<li><a href="{{('loan')}}">Request a loan</a><i>/</i></li>
					<li><a href="{{('business')}}">Register business</a>
						<i>/</i>
					</li>

					<li class="dropdown mega-dropdown active">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Trainings<span class="caret"></span></a>
						<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
							<div class="w3ls_vegetables">
								<ul>
									<li><a href="{{('place_order')}}">Sales technique</a></li><br>
									<li><a href="{{('retrieve_order')}}">Marketing of products</a></li>
									<li><a href="{{('retrieve_order')}}">Finance management</a></li>
									<li><a href="{{('retrieve_order')}}">How to invest and expand</a></li>
									<li><a href="{{('retrieve_order')}}">Other resource sites</a></li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //header -->
	<!-- banner -->
	<div class="banner">
		<div class="row">
			<div class="col-md-3">
				<nav class="navbar nav_bottom">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav nav_1">
							<li><a href="products.html">Branded Foods</a></li>
							<li><a href="household.html">Households</a></li>
							<li class="dropdown mega-dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>
								<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
									<div class="w3ls_vegetables">
										<ul>
											<li><a href="vegetables.html">Vegetables</a></li>
											<li><a href="vegetables.html">Fruits</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li><a href="kitchen.html">Kitchen</a></li>
							<li><a href="short-codes.html">Short Codes</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>
								<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
									<div class="w3ls_vegetables">
										<ul>
											<li><a href="drinks.html">Soft Drinks</a></li>
											<li><a href="drinks.html">Juices</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li><a href="pet.html">Pet Food</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Frozen Foods<span class="caret"></span></a>
								<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
									<div class="w3ls_vegetables">
										<ul>
											<li><a href="frozen.html">Frozen Snacks</a></li>
											<li><a href="frozen.html">Frozen Nonveg</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li><a href="bread.html">Bread & Bakery</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
			<div class="col-md-6">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3l_banner_nav_right_banner">
									<h3>Make your <span>food</span> with Spicy.</h3>
									<div class="more">
										<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
									</div>
								</div>
							</li>
							<li>
								<div class="w3l_banner_nav_right_banner1">
									<h3>Make your <span>food</span> with Spicy.</h3>
									<div class="more">
										<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
									</div>
								</div>
							</li>
							<li>
								<div class="w3l_banner_nav_right_banner2">
									<h3>upto <i>50%</i> off.</h3>
									<div class="more">
										<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</section>
			</div>
			<div class="col-md-3">
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="bread.html">Currency as of today</a></li>
						<li><a href="bread.html">Market price as of today</a></li>
						<li><a href="bread.html">Market demand</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- flexSlider -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
	</script>
	<!-- //flexSlider -->
	</div>
	<div class="clearfix"></div>
	</div>
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Hot Offers</h3>
			<div class="agile_top_brands_grids">
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="tag"><img src="images/tag.png" alt=" " class="img-responsive" /></div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img title=" " alt=" " src="images/1.png" /></a>
											<p>fortune sunflower oil</p>
											<h4>$7.99 <span>$10.00</span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="checkout.html" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Fortune Sunflower Oil" />
													<input type="hidden" name="amount" value="7.99" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img title=" " alt=" " src="images/3.png" /></a>
											<p>basmati rise (5 Kg)</p>
											<h4>$11.99 <span>$15.00</span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="basmati rise" />
													<input type="hidden" name="amount" value="11.99" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/2.png" alt=" " class="img-responsive" /></a>
											<p>Pepsi soft drink (2 Ltr)</p>
											<h4>$8.00 <span>$10.00</span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Pepsi soft drink" />
													<input type="hidden" name="amount" value="8.00" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.html"><img src="images/4.png" alt=" " class="img-responsive" /></a>
											<p>dogs food (4 Kg)</p>
											<h4>$9.00 <span>$11.00</span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="dogs food" />
													<input type="hidden" name="amount" value="9.00" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="wthree_footer_copy">
						<p>© 2016 Grocery Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="w3_footer_grid_bottom">
						<h5>connect with us</h5>
						<ul class="agileits_social_icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<script src="js/minicart.js"></script>
	<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
</body>

</html>