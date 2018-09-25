@include('layouts.head')

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
		<div class="pull-right">
			<ul>
				<li class="dropdown">
					@if (Auth::check()) {
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('images/9.png')}}" alt="user" height="40px"></a>

					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li>

									<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
							{{ __('Logout') }} as {{Auth::user()->name }}
						</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</li>
							</ul>
						</div>
					</div>
					} @else{
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('images/default_image.png')}}" alt="user" height="40px"></a>

					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="{{route('login')}}">Login</a></li>
								<li><a href="{{route('register')}}">Sign Up</a></li>
							</ul>
						</div>
					</div>} @endif
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
					<li><a href="{{route('productAdd')}}">Post product</a><i>/</i></li>

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
							@foreach($categories = App\Category::all() as $category)
							<li><a href="{{route('fetchProduct', ['id' => $category->id])}}">{{$category->categoryname}}</a></li>
							@endforeach {{--
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
							</li> --}}
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>

			<div class="col-md-6 row bg-info">

				@yield('contents') {{-- contents goes here --}}

			</div>

			<div class="col-md-3 pull-right">
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

	<div>
		{{-- posted roducts --}}
	</div>

	{{-- foot goes here --}}
	@include('layouts.foot')
</body>

</html>