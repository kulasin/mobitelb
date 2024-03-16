@extends('layouts.app')

@section('content')
<div id="carousel-home">
			<div class="owl-carousel owl-theme">
                <!--/owl-slide-->
				<div class="owl-slide cover" style="background-image: url({{ asset('/resources/img/slides/55.png') }});">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
						<div class="container">
                            <div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-6 static">
									<div class="slide-text white">
                                        <p class="owl-slide-animated owl-slide-subtitle" style="margin-bottom: 0">
										LAPTOPI
										</p>
										<h2 class="owl-slide-animated owl-slide-title">MacBook  Pro Apple <br>14-inch</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											
                                            M2 2023 <br>  16 512GB SSD
										</p>
                                     <h3 class="owl-slide-animated owl-slide-title mt-2">4099.99 km</h3>
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="{{ route('product.show', '5') }}" role="button">POGLEDAJ</a></div>
									</div>
                                    
								</div>
							</div>
							
						</div>
					</div>
				</div>
                
			<!--/owl-slide-->
				<div class="owl-slide cover" style="background-image: url({{ asset('/resources/img/slides/11.png') }});">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-end">
								<div class="col-lg-6 static">
									<div class="slide-text text-end white">
                                       <p class="owl-slide-animated owl-slide-subtitle" style="margin-bottom: 0">
										IGRAČKE KONZOLE
										</p>
										<h2 class="owl-slide-animated owl-slide-title mt-3">Playstation 5<br><br>Disc <br>edition</h2>
										<p class="owl-slide-animated owl-slide-subtitle mt-3">
											
                                            825GB <br>God of War Edition
										</p>
										<h3 class="owl-slide-animated owl-slide-title mt-2">1049.99 km</h3>
										<div  class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="{{ route('product.show', '83') }}" role="button">POGLEDAJ</a></div>
                                        
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/owl-slide-->
				<div class="owl-slide cover" style="background-image: url({{ asset('/resources/img/slides/22.png') }});">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
						<div class="container">
                            <div class="row justify-content-center justify-content-md-start">
								<div class="col-lg-6 static">
									<div class="slide-text white">
                                        <p class="owl-slide-animated owl-slide-subtitle" style="margin-bottom: 0">
										TABLETI
										</p>
										<h2 class="owl-slide-animated owl-slide-title">Apple iPad Pro <br>11-inch</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
											
                                             4th Gen već <br> od 1.77O KM
										</p>
                                        <div class="row mt-2">
                                        <h3 class="owl-slide-animated owl-slide-title"  >128GB </h3>
										<div class="owl-slide-animated owl-slide-cta"  style="width: unset!important"><a class="btn_1" href="{{ route('product.show', '4') }}" role="button">SILVER</a></div> 
                                            </div> 
                                          <div class="row  mt-2">
                                        <h3 class="owl-slide-animated owl-slide-title" >256GB </h3>
                                      
                                      
										<div class="owl-slide-animated owl-slide-cta"  style="width: unset!important"><a class="btn_1" href="{{ route('product.show', '14') }}" role="button">SPACE GRAY</a></div> 
                                              
                                        <div class="owl-slide-animated owl-slide-cta"  style="width: unset!important"><a class="btn_1" href="{{ route('product.show', '14') }}" role="button">SILVER</a></div> 
                                        </div>
									</div>
                                    
								</div>
							</div>
							
						</div>
					</div>
				</div>
			
				<!--/owl-slide-->
				<div class="owl-slide cover" style="background-image: url({{ asset('/resources/img/slides/44.png') }});">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
						<div class="container">
							<div class="row justify-content-center justify-content-md-end">
								<div class="col-lg-6 static">
									<div class="slide-text text-end white">
                                         <p class="owl-slide-animated owl-slide-subtitle" style="margin-bottom: 0">
										TABLET UREĐAJI
										</p>
										<h2 class="owl-slide-animated owl-slide-title">LENOVO<br>TAB P11 Plus</h2>
										<p class="owl-slide-animated owl-slide-subtitle">
								         50h baterije
                                            <br>
                                           Sofisticiran dizajn
                                            
										</p>
										<h3 class="owl-slide-animated owl-slide-title mt-2">649.99 km</h3>
										<div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="{{ route('product.show', '8894') }}" role="button">POGLEDAJ</a></div>
                                        
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/owl-slide-->
			</div>
			<div id="icon_drag_mobile"></div>
		</div>
        <div class="feat">
		
				<ul >
					<li>
						<div class="box">
							<i class="fa-regular fa-truck" style="color: #ce8d2d"></i>
							<div class="justify-content-center">
								<h3>Dostava u cijelu BiH</h3>
								<p>9 KM</p>
							</div>
						</div>
					</li>
					<li>
						<div class="box">
							<i class="fa-regular fa-shield"></i>
							<div class="justify-content-center">
								<h3>Garancija na proizvode</h3>
								<p>i do dvije godine</p>
							</div>
						</div>
					</li>
					<li>
						<div class="box">
							<i class="fa-regular fa-tag"></i>
							<div class="justify-content-center">
								<h3>Samo najbolji brandovi</h3>
								<p>za Vas</p>
							</div>
						</div>
					</li>
                    
				</ul>
		
		</div>
        <ul id="banners_grid" class="clearfix">
			<li>
				<a href="{{ route('products.filter', ['category[]' => 'Mobiteli']) }}" class="img_container">
					<img src="{{ asset('/resources/img/front/mobiteli.jpg') }}" data-src="{{ asset('/resources/img/front/mobiteli.jpg') }}" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)">
						<h3>MOBITELI</h3>
						<p>{{ $categories->firstWhere('category_name', 'Mobiteli')->products->count() }} Proizvoda</p>	
						<div>
						<span class="btn_1">POGLEDAJ</span></div>
					</div>
				</a>
			</li>
			
			<li>
				<a href="{{ route('products.filter', ['category[]' => 'Pametni satovi']) }}" class="img_container">
					<img src="{{ asset('/resources/img/front/pametni.jpg') }}" data-src="{{ asset('/resources/img/front/pametni.jpg') }}" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)">
						<h3>PAMETNI SATOVI</h3>
						<p>{{ $categories->firstWhere('category_name', 'Pametni satovi')->products->count() }} Proizvoda</p>	
						<div><span class="btn_1">POGLEDAJ</span></div>
					</div>
				</a>
			</li>
            <li>
			<a href="{{ route('products.filter', ['category[]' => 'Tableti']) }}" class="img_container">
				<img src="{{ asset('/resources/img/front/tableti.jpg') }}" data-src="{{ asset('/resources/img/front/tableti.jpg') }}" alt="" class="lazy">
					<div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)">
						<h3>TABLETI</h3>
						<p>{{ $categories->firstWhere('category_name', 'Tableti')->products->count() }} Proizvoda</p>	
						<div><span class="btn_1">POGLEDAJ</span></div>
					</div>
				</a>
			</li>
		</ul>
        <div class="bg_white">
			<div class="container margin_30">
                <div class="main_title">
				<h2>Pretraga po brandovima</h2>
				<span>Brandovi</span>
				<p>Pogledajte brandove koje smo izdvojili za Vas</p>
			</div>
			<div id="brands" class="owl-carousel owl-theme brands">
    <div class="item" >
        <a href="{{ route('products.filter', ['brand[]' => 'Apple']) }}"><img src="{{ asset('/resources/img/brands/apple.png') }}" data-src="{{ asset('/resources/img/brands/apple.png') }}" alt="" class="owl-lazy"></a>
    </div><!-- /item -->
    <div class="item">
        <a href="{{ route('products.filter', ['brand[]' => 'Samsung']) }}"><img src="{{ asset('/resources/img/brands/placeholder_brands.png') }}" data-src="{{ asset('/resources/img/brands/samsung.png') }}" alt="" class="owl-lazy"></a>
    </div><!-- /item -->
    <div class="item">
        <a href="{{ route('products.filter', ['brand[]' => 'Xiaomi']) }}"><img src="{{ asset('/resources/img/brands/placeholder_brands.png') }}" data-src="{{ asset('/resources/img/brands/xiaomi.png') }}" alt="" class="owl-lazy"></a>
    </div><!-- /item -->
    <div class="item">
        <a href="{{ route('products.filter', ['brand[]' => 'Google']) }}"><img src="{{ asset('/resources/img/brands/placeholder_brands.png') }}" data-src="{{ asset('/resources/img/brands/google.png') }}" alt="" class="owl-lazy"></a>
    </div><!-- /item -->
    <div class="item">
        <a href="{{ route('products.filter', ['brand[]' => 'PS']) }}"><img src="{{ asset('/resources/img/brands/placeholder_brands.png') }}" data-src="{{ asset('/resources/img/brands/ps.png') }}" alt="" class="owl-lazy"></a>
    </div><!-- /item -->
    <div class="item">
        <a href="{{ route('products.filter', ['brand[]' => 'Lenovo']) }}"><img src="{{ asset('/resources/img/brands/placeholder_brands.png') }}" data-src="{{ asset('/resources/img/brands/lenovo.png') }}" alt="" class="owl-lazy"></a>
    </div><!-- /item -->
    <div class="item">
        <a href="{{ route('products.filter', ['brand[]' => 'Razer']) }}"><img src="{{ asset('/resources/img/brands/placeholder_brands.png') }}" data-src="{{ asset('/resources/img/brands/razer.png') }}" alt="" class="owl-lazy"></a>
    </div>
    <div class="item">
        <a href="{{ route('products.filter', ['brand[]' => 'Honor']) }}"><img src="{{ asset('/resources/img/brands/placeholder_brands.png') }}" data-src="{{ asset('/resources/img/brands/honor.png') }}" alt="" class="owl-lazy"></a>
    </div>
    <div class="item">
        <a href="{{ route('products.filter', ['brand[]' => 'Inkax']) }}"><img src="{{ asset('/resources/img/brands/placeholder_brands.png') }}" data-src="{{ asset('/resources/img/brands/inkax.png') }}" alt="" class="owl-lazy"></a>
    </div>
</div><!-- /carousel -->


		</div>
        
        <div class="container margin_60_35">
			<div class="main_title">
				<h2>Izdvojeni proizvodi</h2>
				<span>Proizvodi</span>
				<p>Pogledajte set proizvoda koje smo izdvojili za Vas</p>
			</div>
			<div class="owl-carousel owl-theme products_carousel">
				

  @foreach ($singledOutProducts as $product)
            <div class="item">
			@if ($product->sale_active === 1)
			<div class="circle" >              
            <span class="discount_percentage">{{ number_format(round((($product->sale_old_price - $product->price) / $product->sale_old_price) * 100, 2), 2) }}%</span>      
             </div>
            @endif
                   
					<div class="grid_item">
						<span class="ribbon new">{{ $product->category }}</span>
						<figure>
							<a href="{{ route('product.show', ['id' => $product->id]) }}">
							<img style="width: 100%" class="owl-lazy" src="{{ $product->getFirstImageAttribute() }}" data-src="{{ $product->getFirstImageAttribute() }}" alt="{{ $product->name }}">
							</a>
							@if ($product->sale_active === 1)
							<div data-countdown="{{ $product->sale_price_ends }}" class="countdown"></div>
            @endif
							
						</figure>
						<small><img style="display:unset!important; width:70px; margin-top:-35px; margin-bottom:-20px" src="{{ asset('/resources/img/brands/' . $product->brand . '.png') }}"></small>
						<a href="{{ route('product.show', ['id' => $product->id]) }}">
							<h3>{{ $product->name }}</h3>
						</a>
						<div class="price_box">
							<span class="new_price">{{ $product->price }} KM</span>
							@if ($product->sale_active === 1)
                <span class="old_price">{{ $product->sale_old_price }} KM</span>
            @endif
						</div>
						
					</div>
					<!-- /grid_item -->
				</div>
        @endforeach
			</div>
			<!-- /products_carousel -->
		</div>
        <div class="container margin_60_35">
			<div class="row small-gutters categories_grid">
				<div class="col-sm-12 col-md-6">
				<a href="{{ route('products.filter', ['category[]' => 'Oprema za računare']) }}">
						<img src="{{ asset('/resources/img/front/pc.webp') }}" data-src="{{ asset('/resources/img/front/pc.webp') }}" alt="" class="img-fluid lazy loaded mob-up  cat-slika" data-was-processed="true"  style="max-width: 125%">
						<div class="wrapper">
							<h2>Gaming oprema i konzole</h2>
							<p>{{ $categories->firstWhere('category_name', 'Oprema za računare')->products->count() }} Proizvoda</p>
						</div>
					</a>
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="row small-gutters mt-md-0 mt-sm-2">
						<div class="col-sm-6">
							<a href="{{ route('products.filter', ['category[]' => 'Oprema za mobitele']) }}">
								<img src="{{ asset('/resources/img/front/zvucnici2.jpg') }}" data-src="{{ asset('/resources/img/front/zvucnici2.jpg') }}" alt="" class="img-fluid lazy loaded cat-slika" data-was-processed="true">
								<div class="wrapper">
									<h2>Bluetooth zvučnici</h2>
									<p>{{ $categories->firstWhere('category_name', 'Oprema za mobitele')->products->count() }} Proizvoda</p>
								</div>
							</a>
						</div>
						<div class="col-sm-6">
							<a href="{{ route('products.filter', ['category[]' => 'Oprema za mobitele']) }}">
								<img src="{{ asset('/resources/img/front/slusalice0.jpg') }}" data-src="{{ asset('/resources/img/front/slusalice0.jpg') }}" alt="" class="img-fluid lazy loaded  cat-slika" data-was-processed="true">
								<div class="wrapper">
									<h2>Slušalice</h2>
									<p>{{ $categories->firstWhere('category_name', 'Oprema za mobitele')->products->count() }} Proizvoda</p>
								</div>
                              
							</a>
						</div>
						<div class="col-sm-12 mt-sm-2">
							<a href="{{ route('products.filter', ['category[]' => 'Mrežna oprema']) }}">
								<img src="{{ asset('/resources/img/front/ruteri2.jpg') }}" data-src="{{ asset('/resources/img/front/ruteri2.jpg') }}" alt="" class="img-fluid lazy loaded cat-slika" data-was-processed="true" style="max-width: 150%">
								  <div class="wrapper">
									<h2>Mrežna oprema</h2>
									<p>{{ $categories->firstWhere('category_name', 'Mrežna oprema')->products->count() }} Proizvoda</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!--/categories_grid-->
		</div>
      
		<div class="featured lazy" data-bg="url({{ asset('/resources/img/front/front1.jpg') }})">
			<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.3)">
				<div class="container margin_60">
					<div class="row justify-content-center justify-content-md-start">
						<div class="col-lg-6 wow" data-wow-offset="150">
							<h3>Akcija narukvica za pametne satove</h3>
							<p>Svih brandova</p>
							<div class="feat_text_block">
								<div class="price_box">
									<span class="new_price">već od 19.88 KM</span><br>
									<span class="old_price">35.00 KM</span>
								</div>
								<a class="btn_1" href="{{ route('products.filter', ['subcategory[]' => 'Narukvice']) }}" role="button">POGLEDAJ</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /featured -->
		<div class="container margin_60_35">
			<div class="main_title">
				<h2>Zadnje dodani proizvodi</h2>
				<span>PROIZVODI</span>
				<p>Pogledajte zadnje dodane proizvode</p>
			</div>
			<div class="row small-gutters">
				
				<!-- /col -->
				
                
				<!-- /col -->
				
                
                @foreach ($products as $product)
				<div class="col-6 col-md-4 col-xl-2">
					<div class="grid_item">
                        <span class="ribbon new">{{ $product->category }}</span>
						<figure>
						@if ($product->sale_active === 1)
			<div class="circle" >              
            <span class="discount_percentage">{{ number_format(round((($product->sale_old_price - $product->price) / $product->sale_old_price) * 100, 2), 2) }}%</span>      
             </div>
            @endif
							<a href="{{ route('product.show', ['id' => $product->id]) }}">
							<img style="width: 100%" class="owl-lazy" src="{{ $product->getFirstImageAttribute() }}" data-src="{{ $product->getFirstImageAttribute() }}" alt="{{ $product->name }}">
							</a>
							@if ($product->sale_active === 1)
							<div data-countdown="{{ $product->sale_price_ends }}" class="countdown"></div>
            @endif
							
						</figure>
						<small><img style="display:unset!important; width:70px; margin-top:-35px; margin-bottom:-20px" src="{{ asset('/resources/img/brands/' . $product->brand . '.png') }}"></small>
						<a href="{{ route('product.show', ['id' => $product->id]) }}">
							<h3>{{ $product->name }}</h3>
						</a>
						<div class="price_box">
							<span class="new_price">{{ $product->price }} KM</span>
							@if ($product->sale_active === 1)
                <span class="old_price">{{ $product->sale_old_price }} KM</span>
            @endif
						</div>
						<ul>
							
						</ul>
					</div>
					<!-- /grid_item -->
				</div>
				@endforeach
				
                
				<!-- /col -->
			</div>
			<!-- /row -->
		</div>
		<div class="container margin_60_35">
			<div class="main_title">
				<h2>Zadnje dodani mobiteli</h2>
				<span>Proizvodi</span>
				<p>Pogledajte zadnje dodane mobitele</p>
			</div>
			<div class="owl-carousel owl-theme products_carousel">
				

  @foreach ($mobiteli as $product)
            <div class="item">
			@if ($product->sale_active === 1)
			<div class="circle" >              
            <span class="discount_percentage">{{ number_format(round((($product->sale_old_price - $product->price) / $product->sale_old_price) * 100, 2), 2) }}%</span>      
             </div>
            @endif
                   
					<div class="grid_item">
						<span class="ribbon new">{{ $product->category }}</span>
						<figure>
							<a href="{{ route('product.show', ['id' => $product->id]) }}">
							<img style="width: 100%" class="owl-lazy" src="{{ $product->getFirstImageAttribute() }}" data-src="{{ $product->getFirstImageAttribute() }}" alt="{{ $product->name }}">
							</a>
							@if ($product->sale_active === 1)
							<div data-countdown="{{ $product->sale_price_ends }}" class="countdown"></div>
            @endif
							
						</figure>
						<small><img style="display:unset!important; width:70px; margin-top:-35px; margin-bottom:-20px" src="{{ asset('/resources/img/brands/' . $product->brand . '.png') }}"></small>
						<a href="{{ route('product.show', ['id' => $product->id]) }}">
							<h3>{{ $product->name }}</h3>
						</a>
						<div class="price_box">
							<span class="new_price">{{ $product->price }} KM</span>
							@if ($product->sale_active === 1)
                <span class="old_price">{{ $product->sale_old_price }} KM</span>
            @endif
						</div>
						
					</div>
					<!-- /grid_item -->
				</div>
        @endforeach
			</div>
			<!-- /products_carousel -->
		</div>

		<div class="container margin_60_35">
			<div class="main_title">
				<h2>Zadnje dodani laptopi</h2>
				<span>Proizvodi</span>
				<p>Pogledajte zadnje dodane laptope</p>
			</div>
			<div class="owl-carousel owl-theme products_carousel">
				

  @foreach ($laptopi as $product)
            <div class="item">
			@if ($product->sale_active === 1)
			<div class="circle" >              
            <span class="discount_percentage">{{ number_format(round((($product->sale_old_price - $product->price) / $product->sale_old_price) * 100, 2), 2) }}%</span>      
             </div>
            @endif
                   
					<div class="grid_item">
						<span class="ribbon new">{{ $product->category }}</span>
						<figure>
							<a href="{{ route('product.show', ['id' => $product->id]) }}">
							<img style="width: 100%" class="owl-lazy" src="{{ $product->getFirstImageAttribute() }}" data-src="{{ $product->getFirstImageAttribute() }}" alt="{{ $product->name }}">
							</a>
							@if ($product->sale_active === 1)
							<div data-countdown="{{ $product->sale_price_ends }}" class="countdown"></div>
            @endif
							
						</figure>
						<small><img style="display:unset!important; width:70px; margin-top:-35px; margin-bottom:-20px" src="{{ asset('/resources/img/brands/' . $product->brand . '.png') }}"></small>
						<a href="{{ route('product.show', ['id' => $product->id]) }}">
							<h3>{{ $product->name }}</h3>
						</a>
						<div class="price_box">
							<span class="new_price">{{ $product->price }} KM</span>
							@if ($product->sale_active === 1)
                <span class="old_price">{{ $product->sale_old_price }} KM</span>
            @endif
						</div>
						
					</div>
					<!-- /grid_item -->
				</div>
        @endforeach
			</div>
			<!-- /products_carousel -->
		</div>

		<div class="container margin_60_35">
			<div class="main_title">
				<h2>Zadnje dodani tableti</h2>
				<span>Proizvodi</span>
				<p>Pogledajte zadnje dodane tablete</p>
			</div>
			<div class="owl-carousel owl-theme products_carousel">
				

  @foreach ($tableti as $product)
            <div class="item">
			@if ($product->sale_active === 1)
			<div class="circle" >              
            <span class="discount_percentage">{{ number_format(round((($product->sale_old_price - $product->price) / $product->sale_old_price) * 100, 2), 2) }}%</span>      
             </div>
            @endif
                   
					<div class="grid_item">
						<span class="ribbon new">{{ $product->category }}</span>
						<figure>
							<a href="{{ route('product.show', ['id' => $product->id]) }}">
							<img style="width: 100%" class="owl-lazy" src="{{ $product->getFirstImageAttribute() }}" data-src="{{ $product->getFirstImageAttribute() }}" alt="{{ $product->name }}">
							</a>
							@if ($product->sale_active === 1)
							<div data-countdown="{{ $product->sale_price_ends }}" class="countdown"></div>
            @endif
							
						</figure>
						<small><img style="display:unset!important; width:70px; margin-top:-35px; margin-bottom:-20px" src="{{ asset('/resources/img/brands/' . $product->brand . '.png') }}"></small>
						<a href="{{ route('product.show', ['id' => $product->id]) }}">
							<h3>{{ $product->name }}</h3>
						</a>
						<div class="price_box">
							<span class="new_price">{{ $product->price }} KM</span>
							@if ($product->sale_active === 1)
                <span class="old_price">{{ $product->sale_old_price }} KM</span>
            @endif
						</div>
						
					</div>
					<!-- /grid_item -->
				</div>
        @endforeach
			</div>
			<!-- /products_carousel -->
		</div>
        
		<div class="container margin_60_35">
			<div class="main_title">
				<h2>Zadnje vijesti</h2>
				<span>Blog</span>
				<p>Pogledajte naše zadnje vijesti</p>
			</div>
			<div class="row">
			@foreach ($lastBlogPosts as $post)
			<div class="col-lg-6">
					<a class="box_news" href="#">
						<figure>
							<img src="{{ asset('/resources/img/uploads/placeholder.png') }}" data-src="{{ asset('/resources/img/uploads/placeholder.png') }}" alt="" width="400" height="266" class="lazy">
							<figcaption><strong>{{date('j', strtotime($post->created_at))  }}</strong><?php
$monthNamesBosnianAbbrev = array(
    1 => 'JAN', 2 => 'FEB', 3 => 'MAR', 4 => 'APR',
    5 => 'MAJ', 6 => 'JUN', 7 => 'JUL', 8 => 'AUG',
    9 => 'SEP', 10 => 'OKT', 11 => 'NOV', 12 => 'DEC'
);

echo $monthNamesBosnianAbbrev[date('n', strtotime($post->created_at))];
?>
</figcaption>
						</figure>
						<ul>
							<li>by MobitelBA</li>
							<li>{{ $post->published_at }}</li>
						</ul>
						<h4>{{ $post->title }}</h4>
						<p>{{ mb_substr($post->content, 0, 80) . '..' }}</p>
					</a>
				</div>
        @endforeach
			
				
				
			</div>
			<!-- /row -->
		</div>
		<div class="popup_wrapper">
		<div class="popup_content" style="top:65%!important">
			<span class="popup_close">Zatvori</span>
			<a href="{{ route('products.filter', ['category[]' => 'Oprema za mobitele']) }}"><img class="img-fluid" src="{{ asset('/resources/img/banner_popup2.png') }}" alt="" width="500" height="500"></a>
		</div>
	</div>
@endsection
