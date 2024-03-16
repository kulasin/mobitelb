<html lang="en">

<head>
       <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="MobitelBA">
    <meta property="og:site_name" content="MobitelBA">
<meta property="og:title" content="Svijet elektronike na jednom mjestu" />
<meta property="og:image" itemprop="image" content="../resources/img/favicon.png">
<meta property="og:type" content="website" />

    <title>MobitelBA | Svijet elektronike na jednom mjestu</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="../resources/img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../resources/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../resources/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../resources/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../resources/img/apple-touch-icon-144x144-precomposed.png">
	
    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   

<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-light.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-regular.css">

    <!-- BASE CSS -->
    <link href="{{ asset('../resources/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('../resources/css/style.css?ver=7') }}" rel="stylesheet">
	
 
	
	<!-- SPECIFIC CSS -->
	<link href="{{ asset('../resources/css/home_1.css?ver=7') }}" rel="stylesheet">
	<link href="{{ asset('../resources/css/product_page.css?ver=7') }}" rel="stylesheet">
	<link href="{{ asset('../resources/css/listing.css?ver=7') }}" rel="stylesheet">
	<link href="{{ asset('../resources/css/account.css?ver=7') }}" rel="stylesheet">
	<link href="{{ asset('../resources/css/cart.css?ver=7') }}" rel="stylesheet">
	<link href="{{ asset('../resources/css/checkout.css?ver=7') }}" rel="stylesheet">
	<link href="{{ asset('../resources/css/faq.css?ver=7') }}" rel="stylesheet">
	<link href="{{ asset('../resources/css/about.css?ver=7') }}" rel="stylesheet">
	
	
	
	
 

    <!-- YOUR CUSTOM CSS -->
	<link href="{{ asset('../resources/css/custom.css?ver=7') }}" rel="stylesheet">
   
   

</head>
 <style>
     @media (max-width: 767px) {
  .cat-slika {
         
         position: absolute;
         bottom: 0;
     } 
}
     
     .featured {
         
         background-attachment: unset!important;
     }
 
    
    
    
     
    
    </style>
<body>
	
	<div id="page">
		
	<header class="version_2">
		<div class="layer"></div><!-- Mobile menu overlay mask -->
		<div class="main_header">
			<div class="container">
				<div class="row small-gutters">
					<div class="col-xl-3 col-lg-3 col-12 d-lg-flex align-items-center">
						<div id="logo">
							<a href="{{ route('home') }}"><img src="{{ asset('../resources/img/logo-novi2.png') }}"  width="100%"></a>
						</div>
                        <svg class="d-none d-lg-block" height="30" width="20" style="
    margin-left: 50px;
">
  <line x1="0" y1="0" x2="0" y2="30" style="stroke:rgb(255,255,255);stroke-width:2"></line>
  
</svg>
					</div>
					<nav class="col-xl-5 col-lg-7 col">
						<a class="open_close" href="javascript:void(0);">
							<div class="hamburger hamburger--spin">
								<div class="hamburger-box">
									<div class="hamburger-inner"></div>
								</div>
							</div>
						</a>
						<!-- Mobile menu button -->
						<div class="main-menu">
							<div id="header_menu">
								
								<a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
							</div>
							<ul>
                                <li>
									<a href="{{ route('home') }}">POČetna</a>
								</li>
								<li>
									<a href="{{ route('grid') }}">Proizvodi</a>
								</li>
                                <li>
									<a href="{{ route('about') }}">O nama</a>
								</li>
                                 
								<li class="submenu">
									<a href="javascript:void(0);" class="show-submenu">pomoć</a>
									<ul>
										<li><a href="{{ route('help') }}">Plaćanje</a></li>
										<li><a href="{{ route('help') }}">Dostava</a></li>
										<li><a href="{{ route('help') }}">Reklamacije</a></li>
										<li><a href="{{ route('help') }}">Povrat</a></li>
									</ul>
								</li>
								
								<li>
									<a  href="tel:+387 63 676 620">Kontakt</a>
								</li>
								
								
							</ul>
						</div>
						<!--/main-menu -->
					</nav>
                    <div class="col-xl-4 col-2 d-flex">
                        
                        
                        
                    <div class="col-xl-6 col-lg-2  col-sm-2 d-lg-flex align-items-center justify-content-end text-end text-white">
						<a href="https://mobitelba.olx.ba/"><img  class="me-3 olx" src="{{ asset('../resources/img/olx.png') }}"></a><a class="phone_top" href="https://mobitelba.olx.ba/"><strong><span>OLX Radnja</span>mobitelba.olx.ba</strong></a>
					</div>
					<div class="col-xl-6 col-lg-2   d-lg-flex align-items-center justify-content-end text-end text-white">
						<i style="font-size: 20px; color:#c4a251" class="fa-solid fa-phone me-3 d-none d-lg-block"></i> <a class="phone_top" href="tel:+387 63 676 620"><strong><span>Kontak telefon</span>+387 63 676 620</strong></a>
					</div>
                    
                    </div>
				</div>
				<!-- /row -->
			</div>
		</div>
		<!-- /main_header -->

		<div class="main_nav Sticky">
			<div class="container">
				<div class="row small-gutters">
					<div class="col-xl-3 col-lg-3 col-md-3">
						<nav class="categories">
							<ul class="clearfix">
							<ul class="clearfix">
    <li>
        <span>
            <a href="#">
                <span class="hamburger hamburger--spin">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </span>
                Kategorije
            </a>
        </span>
        <div id="menu">
            <ul>
                @foreach($categories as $category)
                    <li>
                        <a href="{{ route('products.filter', ['category[]' => $category->category_name]) }}">{{ $category->category_name }}</a>
                        @if($category->subcategories->isNotEmpty())
                            <ul>
                                @foreach($category->subcategories as $subcategory)
                                    <li><a href="{{ route('products.filter', ['category[]' => $category->category_name, 'subcategory[]' => $subcategory->subcategory_name]) }}">{{ $subcategory->subcategory_name }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </li>
</ul>

							</ul>
						</nav>
					</div>
					<div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
					<div class="custom-search-input">
		<form action="{{ route('products.filter') }}" method="GET">
    <input type="text" name="query" placeholder="Pretražite preko 1.000 proizvoda" value="{{ request('query') }}">
    <button type="submit"><i class="header-icon_search_custom"></i></button>
</form>

    </div>
					</div>
					<div class="col-xl-3 col-lg-2 col-md-3">
						<ul class="top_tools">
							<li>
							<div class="dropdown dropdown-cart">
    <a href="#" class="cart_bt"><strong>{{ count($cartproducts) }}</strong></a>
    <div class="dropdown-menu">
        @if (count($cartproducts) > 0)
            <ul>
                @foreach ($cartproducts as $product)
                    <li>
                        <a href="{{ route('product.show', $product->id) }}">
                            
                            <strong><span>{{ $cartItems[$product->id]['quantity'] }}x {{ $product->name }}</span>{{ $product->price * $cartItems[$product->id]['quantity'] }} KM</strong>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="total_drop">
                <div class="clearfix text-white"><strong>Total</strong><span>{{ $total }} KM</span></div>
            </div>
        @else
            <p class="text-white text-center">Vaša korpa je prazna.</p>
        @endif

        <div class="buttons">
            <a href="{{ route('cart.index') }}" class="btn_1 outline mt-2">Vidite korpu</a>
            <a href="{{ route('cart.checkout') }}" class="btn_1 mt-2">Završite prodaju</a>
        </div>
    </div>
</div>


								<!-- /dropdown-cart-->
							</li>
							<li>
								<a href="#0" class="wishlist"><span>Wishlist</span></a>
							</li>
							<li>
								<div class="dropdown dropdown-access">
									<a href="#" class="access_link"><span>Account</span></a>
									<div class="dropdown-menu">
										@if (Route::has('login'))
                
                    @auth
					
					<p class="text-white">Dobrodošli, {{ Auth::user()->name }}</p<>
                    @else
                      
					<a href="{{ url('login') }}" class="btn_1">Prijava ili registracija</a>
                        
                    @endauth
                
            @endif
										
										<ul>
											
											<li>
											<a href="{{ route('user.orders') }}"><i class="ti-package"></i>Moje narudžbe</a>

											</li>
											
    @auth
        @if(auth()->user()->role === 'admin')
            <li>
                <a href="{{ route('user.users') }}"><i class="ti-link"></i>Moji korisnici</a>
            </li>
        @endif
    @endauth


											<li>
												<a href="{{ route('user.account') }}"><i class="ti-user"></i>Moj profil</a>
											</li>
											<li>
												<a href="{{route('help')}}"><i class="ti-help-alt"></i>Pomoć</a>
											</li>
										</ul>
										@if (Route::has('login'))
                
                    @auth
					<hr style="margin-top:15px">
					<form action="{{ url('/logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn_1 full-width">Odjava</button>
</form>
                    @else
                      
					
                        
                    @endauth
                
            @endif
										

									</div>
								</div>
								<!-- /dropdown-access-->
							</li>
							<li>
								<a href="javascript:void(0);" class="btn_search_mob"><span>Pretražite</span></a>
							</li>
							<li>
								<a href="#menu" class="btn_cat_mob">
									<div class="hamburger hamburger--spin" id="hamburger">
										<div class="hamburger-box">
											<div class="hamburger-inner"></div>
										</div>
									</div>
									kategorije
								</a>
							</li>
						</ul>
                        
					</div>
				</div>
				<!-- /row -->
			</div>
			<div class="search_mob_wp">
			<form action="{{ route('products.filter') }}" method="GET">
    <input class="form-control" type="text" name="query" placeholder="Pretražite preko 1.000 proizvoda" value="{{ request('query') }}">
    <button type="submit"  class="btn_1 outline pretraga" style="width: 100%; background: transparent!important" value="">Pretražite</button>
</form>
				
			</div>
			<!-- /search_mobile -->
		</div>
		<!-- /main_nav -->
	</header>
	<!-- /header -->
		
	<main>
            @yield('content')
            </main>
	<!-- /main -->
		
<footer class="revealed">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3 data-bs-target="#collapse_1">Glavni Menu</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_1">
						<ul>
							<li><a href="{{ route('home') }}">Početna</a></li>
							<li><a href="{{ route('about') }}">O nama</a></li>
							<li><a href="{{ route('help') }}">Brza Pomoć</a></li>
							
						
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-bs-target="#collapse_2">Kategorije</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_2">
					<ul>
    @foreach ($categories as $category)
        <li>
            <a href="{{ route('products.filter', ['category[]' => $category->category_name]) }}">{{ $category->category_name }}</a>
        </li>
    @endforeach
</ul>

					</div>
				</div>
				<div class="col-lg-3 col-md-6">
						<h3 data-bs-target="#collapse_3">Kontakt</h3>
					<div class="collapse dont-collapse-sm contacts" id="collapse_3">
						<ul>
							<li><i class="ti-home"></i>Bosna i Hercegovina</li>
							<li><i class="ti-headphone-alt"></i><a href="tel:+387 63 676 620">+387 63 676 620</a></li>
							<li><i class="ti-email"></i><a href="mailto:info@mobitelba.ba">info@mobitelba.ba</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
						<h3 data-bs-target="#collapse_4">Prijavite se za newsletter</h3>
					<div class="collapse dont-collapse-sm" id="collapse_4">
						<div id="newsletter">
						    <div class="form-group">
						        <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Vaš email">
						        <button type="submit" id="submit-newsletter"><i class="ti-angle-double-right"></i></button>
						    </div>
						</div>
						<div class="follow_us">
							<h5>Pratite nas</h5>
							<ul>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('../resources/img/twitter_icon.svg') }}" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('../resources/img/facebook_icon.svg') }}" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('../resources/img/instagram_icon.svg') }}" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('../resources/img/youtube_icon.svg') }}" alt="" class="lazy"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
			<div class="row add_bottom_25">
				
				<div class="col-lg-12">
					<ul class="additional_links">
						<li><a href="#0">Uvjeti Korištena</a></li>
						<li><a href="#0">Prava privatnosti</a></li>
						<li><span><a href="https://basawe.com/">© 2023 BASAWE LLC.</a></span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<div id="toTop"></div><!-- Back to top button -->
    
    
	<!-- Advertise Popup -->
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- COMMON SCRIPTS -->
    <script src="{{ asset('../resources/js/common_scripts.min.js') }}"></script>
    <script src="{{ asset('../resources/js/main.js') }}"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="{{ asset('../resources/js/carousel-home.js') }}"></script>
	<script src="{{ asset('../resources/js/jquery.cookiebar.js') }}"></script>
	<script src="{{ url('../resources/js/carousel_with_thumbs.js') }}"></script>
	
	<script>
		$(document).ready(function() {
			'use strict';
			$.cookieBar({
				fixed: true
			});
		});
	</script>
<script src="{{ asset('../resources/js/sticky_sidebar.min.js') }}"></script>
	<script src="{{ asset('../resources/js/specific_listing.js') }}"></script>
	    <script>
        // When the sorting dropdown value changes, trigger the form submit to apply sorting
        $('#sort').on('change', function () {
            $('#filter-form').submit();
        });
    </script>
	
	
<script>
    $(document).ready(function() {
        function isLowContrastColor(colorString) {
            // List of low contrast colors to check against
			const lowContrastColors = [
                "rgb(255, 255, 255)", // white
                "rgb(240, 248, 255)", // aliceblue
                "rgb(230, 230, 250)", // lavender
                "rgb(245, 245, 220)", // beige
                "rgb(255, 235, 205)", // blanchedalmond
                "rgb(245, 245, 245)", // whitesmoke
                "rgb(192, 192, 192)", // silver
                "rgb(169, 169, 169)", // darkgray
                "rgb(128, 128, 128)", // gray
                "rgb(211, 211, 211)", // lightgray
                "rgb(220, 220, 220)", // gainsboro
                "rgb(255, 192, 203)", // pink
                "rgb(255, 240, 245)", // lavenderblush
                "rgb(240, 128, 128)", // lightcoral
                "rgb(255, 182, 193)", // lightpink
                "rgb(221, 160, 221)", // plum
                "rgb(219, 112, 147)", // palevioletred
                "rgb(255, 228, 225)", // mistyrose
                "rgb(255, 222, 173)", // navajowhite
                "rgb(255, 228, 196)"  // bisque
                // Add more RGB colors with better contrast here
            ];

            // Check if the colorString is in the lowContrastColors array
            return lowContrastColors.includes(colorString);
        }

        $(".prod_options .colors ul li a.color.active").each(function() {
            var bgColor = $(this).css("background-color");

            // Get the actual background color in RGB format
            var computedBgColor = getComputedStyle(this).backgroundColor;

            if (isLowContrastColor(computedBgColor)) {
                $(this).addClass("black-bg");
            }
        });
    });
</script>

<script>
// Get the element using the class path
const element = document.querySelector('.prod_options .colors ul li a.color.active');

// Get the computed background color of the element
const backgroundColor = window.getComputedStyle(element).getPropertyValue('background-color');

// Check if the background color is not white (you can customize this check based on your requirements)
if (backgroundColor.trim() !== 'rgb(255, 255, 255)') {
  // Remove the border
  element.style.border = 'none';
}
</script>

<!-- Add the following JavaScript code for opening the modal and fetching the account form -->
<!-- Your existing script -->
<script>
    $(document).ready(function () {
        // Function to open the modal when the "Izmijeni podatke" button is clicked
        $('#editUserModalButton').on('click', function () {
            $('#editUserModal').modal('show');
        });
    });
</script>
<!-- Modal for editing user information -->


<script>
    // Auto-submit the form when an option is selected
    $(document).ready(function () {
        $('.status-button').on('change', function () {
            $(this).closest('form').submit();
        });
    });
</script>






</body>
</html>