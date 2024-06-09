<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<head>
     @php
        $currentRoute = \Illuminate\Support\Facades\Route::currentRouteName();
    @endphp

    @if($currentRoute == 'home') <!-- Replace 'home' with the actual name of your homepage route -->
        <meta property="og:site_name" content="MobitelBA | ">
        <meta property="og:title" content="Svijet elektronike na jednom mjestu" />
        <meta property="og:image" itemprop="image" content="{{ asset('resources/img/slides/55.png') }}">
        <meta property="og:type" content="website" />
        
    @elseif($currentRoute == 'product.show') <!-- Replace 'product.show' with the actual name of your product page route -->
         <!-- Add Open Graph meta tags -->
    @foreach($ogTags as $tag => $content)
        <meta property="{{ $tag }}" content="{{ $content }}">
    @endforeach
    
    @else
     <meta property="og:image" itemprop="image" content="{{ asset('resources/img/slides/55.png') }}">
    @endif
 <title>MobitelBA | Svijet elektronike na jednom mjestu</title>
    <!-- Rest of the head content -->
   

    <!-- Favicons-->
    <link rel="shortcut icon" href="/resources/img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="/resources/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/resources/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/resources/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="/resources/img/apple-touch-icon-144x144-precomposed.png">
	
    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   

<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-light.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/sharp-regular.css">

	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<!-- Include DataTables CSS and JS -->
	
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

	<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>


    <!-- BASE CSS -->
    <link href="{{ asset('/resources/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/resources/css/style.css?ver=7') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/css/bootstrap3/bootstrap-switch.min.css">
	
 
	
	<!-- SPECIFIC CSS -->
	<link href="{{ asset('/resources/css/home_1.css?ver=7') }}" rel="stylesheet">
	<link href="{{ asset('/resources/css/product_page.css?ver=7') }}" rel="stylesheet">
	<link href="{{ asset('/resources/css/listing.css?ver=7') }}" rel="stylesheet">
	<link href="{{ asset('/resources/css/account.css?ver=7') }}" rel="stylesheet">
	<link href="{{ asset('/resources/css/cart.css?ver=7') }}" rel="stylesheet">
	<link href="{{ asset('/resources/css/checkout.css?ver=7') }}" rel="stylesheet">
	<link href="{{ asset('/resources/css/faq.css?ver=7') }}" rel="stylesheet">
	<link href="{{ asset('/resources/css/about.css?ver=7') }}" rel="stylesheet">
	<script src="{{ asset('/resources/js/common_scripts.min.js') }}"></script>
	
	
	
 

    <!-- YOUR CUSTOM CSS -->
	<link href="{{ asset('/resources/css/custom.css?ver=7') }}" rel="stylesheet">
	
   

</head>
 <style>

    /* Add this CSS to style the real-time notifications */
.realtime-notification {
    position: fixed;
    top: 20px;
    right: 20px;
    background-color: #28a745;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    z-index: 99999999;
}

.close-btn {
    position: absolute;
    top: 0;
    left: 5px;
    cursor: pointer;
    font-size: 12px;
    font-weight: 700;
}

.feat ul li {
  width: 33.0%;
  border-right: 1px solid #dddddd;
  display: inline-block;
  position: relative;
  text-align: center;
}

	.note-editable, .note-resizebar { background-color: black !important;  }

	
     @media (max-width: 767px) {
  .cat-slika {
         
         position: absolute;
         bottom: 0;
     } 
}
     
     .featured {
         
         background-attachment: unset!important;
     }
 


.upload__inputfile {
  width: .1px;
  height: .1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}

.upload__btn {
  display: inline-block;
  font-weight: 600;
  color: #fff;
  text-align: center;
  min-width: 116px;
  padding: 5px;
  transition: all .3s ease;
  cursor: pointer;
  border: 2px solid;
  border-radius: 5px;
  line-height: 26px;
  font-size: 14px;
}

.delete__btn {
  display: inline-block;
  font-weight: 600;
  color: #fff;
  text-align: center;
  min-width: 116px;
  padding: 5px;
  transition: all .3s ease;
  cursor: pointer;
  border: 2px solid;
  border-radius: 5px;
  line-height: 26px;
  font-size: 14px;
  background:red;
}

.delete__btn:hover {
  opacity:0.9;
  border:2px solid #d4aa51;
  transition: all .3s ease;
  
}


.upload__btn:hover {
  background-color: unset;
  border:2px solid #d4aa51;
  transition: all .3s ease;
}

.upload__btn-box {
  margin-bottom: 10px;
}

.upload__img-wrap {
  display: flex;
  flex-wrap: wrap;
  margin: 0 -10px;
  justify-content:center;
}

.upload__img-box {
  width: 200px;
  padding: 0 10px;
  margin-bottom: 12px;
}

.upload__img-close {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background-color: rgba(0, 0, 0, 0.5);
  position: absolute;
  top: 10px;
  right: 10px;
  text-align: center;
  line-height: 24px;
  z-index: 1;
  cursor: pointer;
}

.upload__img-close:after {
  content: '\2716';
  font-size: 14px;
  color: white;
}

.img-bg {
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  padding-bottom: 100%;
}
.bonus-header {

    background: linear-gradient(180deg, rgba(186, 115, 33, 1) 0%, rgba(236, 200, 90, 1) 50%, rgba(186, 115, 33, 1) 100%) !important;
    border-bottom: 1px solid transparent !important;
    color: black;
    display:block;
    text-align:center;
    font-size:1rem;
    padding:2px;
    margin-left:-30px;

}

.kamion {

    width: 30px;
    height: 30px;
    position: absolute;
    margin-top: -4px;
}

     
    
    </style>
<body>
	
	<div id="page">
		
	<header class="version_2">
		<div class="bonus-header"><strong><script src="https://cdn.lordicon.com/lordicon.js"></script>
        <span style="color:#c71f16; font-weight:900">B E S P L A T N A</span> <span style=" font-weight:700">DOSTAVA</span>  <strong> <span style="font-size:0.7rem">za prvih 500 narudžbi!</span><lord-icon
    src="https://cdn.lordicon.com/amfpjnmb.json"
    trigger="loop"
    delay="1000"
    stroke="bold" class="kamion"
    colors="primary:#121331,secondary:#e8b730,tertiary:#3a3347,quaternary:#c71f16,quinary:#646e78">
</lord-icon></div><!-- Mobile menu overlay mask -->
		<div class="main_header">
			<div class="container">
				<div class="row small-gutters">
					<div class="col-xl-3 col-lg-3 col-12 d-lg-flex align-items-center">
						<div id="logo">
							<a href="{{ route('home') }}"><img src="{{ asset('/resources/img/logo-novi2.png') }}"  width="100%"></a>
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
						<a href="https://mobitelba.olx.ba/"><img  class="me-3 olx" src="{{ asset('/resources/img/olx.png') }}"></a><a class="phone_top" href="https://mobitelba.olx.ba/"><strong><span>OLX Radnja</span>mobitelba.olx.ba</strong></a>
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
																						
    @auth
        @if(auth()->user()->role === 'admin')
		<li>
											<a href="{{ route('products') }}"><i class="ti-mobile"></i>Moji proizvodi</a>

											</li>

                                            <li>
											<a href="{{ route('categories') }}"><i class="ti-angle-right"></i>Kategorije</a>

											</li>
                                            <li>
											<a href="{{ route('subcategories') }}"><i class="ti-angle-right"></i>Podkategorije</a>

											</li>

                                            <li>
											<a href="{{ route('brands') }}"><i class="ti-angle-right"></i>Brandovi</a>

											</li>
        @endif
    @endauth
										
											
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
		
<footer class="revealed" style="z-index:0!important">
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
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('/resources/img/twitter_icon.svg') }}" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('/resources/img/facebook_icon.svg') }}" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('/resources/img/instagram_icon.svg') }}" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{ asset('/resources/img/youtube_icon.svg') }}" alt="" class="lazy"></a></li>
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

  


	


    <script src="{{ asset('/resources/js/main.js') }}"></script>
	
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="{{ asset('/resources/js/carousel-home.js') }}"></script>
	<script src="{{ asset('/resources/js/jquery.cookiebar.js') }}"></script>
	<script src="{{ url('/resources/js/carousel_with_thumbs.js') }}"></script>
   

	<script>
		$(document).ready(function() {
			'use strict';
			$.cookieBar({
				fixed: true
			});
		});
	</script>
<script src="{{ asset('/resources/js/sticky_sidebar.min.js') }}"></script>
	<script src="{{ asset('/resources/js/specific_listing.js') }}"></script>
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


  
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
<!-- Include DataTables Buttons CSS and JS -->

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>



<script>
    $(document).ready( function () {
        $('#myTable').DataTable({
            "order": [0, 'desc'],
            "sort": true,
            "searching": true,
            "language": {
                "search": "Pretraga",
                "lengthMenu": "Prikaži _MENU_ unosa",
                "info": "Prikazujem _START_ - _END_ od ukupno _TOTAL_ unosa",
                "paginate": {
                    "previous": "Prethodna",
                    "next": "Sljedeća"
                }
            },
            "buttons": [
                {
                    extend: 'excelHtml5',
                    text: 'Export to Excel',
                    exportOptions: {
                        modifier: {
                            search: 'none'
                        }
                    }
                }
            ]
        });
    });
</script>


<!-- Summernote JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        ClassicEditor
            .create(document.querySelector('#editor'), {
                autoGrow: true,
                autoGrow_minHeight: 500, // Set initial height for Editor 1
                // Add any other options you need for Editor 1
            })

		
            .catch(error => {
                console.error(error);
            });

			ClassicEditor
            .create(document.querySelector('#editor1'), {
                autoGrow: true,
                autoGrow_minHeight: 500, // Set initial height for Editor 1
                // Add any other options you need for Editor 1
            })

			.then(editor => {
                // Set default content for Editor 2
                editor.setData('<table class="table" style="color:white!important"><tbody><tr><td><strong>Osobina 1</strong></td><td>Vrijednost</td></tr><tr><td><strong>Osobina 2</strong></td><td>Vrijednost</td></tr><tr><td><strong>Osobina 3</strong></td><td>Vrijednost</td></tr><tr><td><strong>Osobina 4</strong></td><td>Vrijednost</td></tr></tbody></table>');
            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor2'), {
                autoGrow: true,
                autoGrow_minHeight: 550, // Set initial height for Editor 2
                // Add any other options you need for Editor 2
            })
			
            .catch(error => {
                console.error(error);
            });
    });
</script>


<!-- Bootstrap Switch JS (place this in your footer) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.min.js"></script>
<!-- Add the image preview and remove script -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<script>
    jQuery(document).ready(function () {
        // Check the URL structure
        var url = window.location.href;
        var regex = /\/brand\/\d+\/edit$/;
        if (regex.test(url)) {
            ImgUploadDefault();
        } else {
            ImgUploadBrand();
        }
    });

    function ImgUploadBrand() {
        var imgArray = [];

        // Function to add a new image box
        function addImageBox(imageSrc, imageName) {
            var html = "<div class='upload__img-box'><div style='background-image: url(" + imageSrc + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + imageName + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
            $('.upload__img-wrap').append(html);
        }

        // Display existing images
        $('.upload__img-wrap .img-bg').each(function () {
            var image = $(this).data('file');
            var imageSrc = "https://mobitelba.ba/resources/img/uploads/" + image;

            // Check if the image with the same file name already exists
            if ($('.upload__img-wrap [data-file="' + image + '"]').length === 0) {
                addImageBox(imageSrc, image);
            }
        });

        // Handle new image uploads
        $('#imageUpload').on('change', function (e) {
            var maxLength = $(this).data('max_length');

            var files = e.target.files;
            var filesArr = Array.prototype.slice.call(files);

            filesArr.forEach(function (f, index) {
                if (!f.type.match('image.*')) {
                    return;
                }

                if (imgArray.length >= maxLength) {
                    return false;
                } else {
                    imgArray.push(f);

                    var reader = new FileReader();
                    reader.onload = function (e) {
                        addImageBox(e.target.result, f.name);
                    }
                    reader.readAsDataURL(f);
                }
            });
        });

        // Remove image box on close button click
        $('body').on('click', ".upload__img-close", function (e) {
            var file = $(this).parent().data("file");
            for (var i = 0; i < imgArray.length; i++) {
                if (imgArray[i].name === file) {
                    imgArray.splice(i, 1);
                    break;
                }
            }
            $(this).parent().parent().remove();

            // Replace the file input with a new one to clear the selected files
            var input = $('#imageUpload');
            input.replaceWith(input.val('').clone(true));
        });
    }

    function ImgUploadDefault() {
    // Function to replace the existing image with the new one
    function replaceImageBox(imageSrc, imageName) {
        $('.upload__img-wrap').empty(); // Clear existing images
        var html = "<div class='upload__img-box'><div style='background-image: url(" + imageSrc + ")' data-file='" + imageName + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
        $('.upload__img-wrap').append(html);
    }

    // Handle new image uploads
    $('#imageUpload').on('change', function (e) {
        var maxLength = $(this).data('max_length');

        var files = e.target.files;
        var filesArr = Array.prototype.slice.call(files);

        filesArr.forEach(function (f, index) {
            if (!f.type.match('image.*')) {
                return;
            }

            if (index === 0) { // Only consider the first uploaded image
                var reader = new FileReader();
                reader.onload = function (e) {
                    replaceImageBox(e.target.result, f.name);
                }
                reader.readAsDataURL(f);
            }
        });
    });

    // Remove image box on close button click
    $('body').on('click', ".upload__img-close", function (e) {
        $('.upload__img-wrap').empty(); // Clear existing images

        // Replace the file input with a new one to clear the selected files
        var input = $('#imageUpload');
        input.replaceWith(input.val('').clone(true));
    });

   
}

</script>


<script>
$(document).ready(function () {
    $('.upload__img-wrap').sortable({
        update: function (event, ui) {
                    // Get the new order of images as a comma-separated string
                    var newOrder = $('.upload__img-wrap .img-bg').map(function() {
                return $(this).data('file');
            }).get().join(',');
            console.log('New Order:', newOrder); // Log the new order to the console
            
            // Generate the URL for the reorder-images route
            var url = "{{ route('reorder-images', ['id' => $product->id]) }}";
            console.log('URL:', url); // Log the URL to the console

            // Send the new order to the server to update the database
            $.ajax({
                url: url,
                type: 'POST',
                data: { 
                    order: newOrder,
                    _token: '{{ csrf_token() }}' // Include the CSRF token
                },
                success: function (response) {
                    console.log('Image order updated successfully');
                },
                error: function () {
                    console.log('Error updating image order');
                }
            });
        }
    });
});
</script>








<!-- Initialization script for Bootstrap Switch -->
<script>
    // Use a document-ready function to ensure jQuery is loaded
    $(document).ready(function() {
        // Initialize Bootstrap Switch for each switch
        $("[data-toggle='switch']").bootstrapSwitch();
    });
</script>
<!-- Import Laravel Echo -->
<!-- Import Pusher JS -->

<script src="{{ asset('node_modules/pusher-js/dist/web/pusher.js') }}"></script>
<script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/laravel-echo/1.11.3/echo.min.js"></script>

@auth
        @if(auth()->user()->role === 'admin')
        <script type="module">
    // Initialize Pusher
    console.log('Initializing Pusher...');
    const pusher = new Pusher('ece2b4e0295437035db1', {
        cluster: 'eu',
        encrypted: true
    });
    console.log('Pusher initialized successfully.');

    // Configure Laravel Echo without creating an Echo instance
    window.Pusher = pusher;
    window.Echo = {
        // Configure the Pusher options directly
        options: {
            broadcaster: 'pusher',
            key: 'ece2b4e0295437035db1',
            cluster: 'eu',
            encrypted: true,
            wsHost: window.location.hostname,
            wsPort: 6001,
            disableStats: true,
        },
        // Subscribe to a private channel and handle events directly
        subscribeToChannel: function(channelName, callback) {
            const channel = pusher.subscribe(channelName);
            channel.bind('App\\Events\\OrderPlaced', callback); // Replace with your event name
            console.log('Subscribed to channel:', channelName);
        },
        // Log the connector
        connector: pusher
    };

    // Subscribe to 'admin-channel' privately and handle the event directly
    window.Echo.subscribeToChannel('admin-channel', function(e) {
        const notification = document.createElement('div');
notification.className = 'realtime-notification';
notification.innerText = 'Nova Narudžba od: ' + e.order.name + ' - Iznos: ' + e.order.total + ' KM';
console.log('Nova Narudžba od:', e.order.name, '- Iznos:', e.order.total, 'KM');

// Create the close button
const closeButton = document.createElement('span');
closeButton.className = 'close-btn';
closeButton.innerText = 'x';

// Append the close button to the notification div
notification.appendChild(closeButton);

// Add event listener to close the notification when the close button is clicked
closeButton.addEventListener('click', function() {
    notification.remove(); // Remove the notification from the DOM
});

        // Append the notification to the footer
        document.querySelector('header').appendChild(notification);
    });

    // Log initialization and setup
    console.log('Connector set to Pusher:', window.Echo.connector);
    console.log('Echo configured successfully.');
    console.log('Pusher and Echo initialized successfully.');
</script>
        @endif
    @endauth
 

</body>
</html>