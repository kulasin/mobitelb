@extends('layouts.app')

@section('content')


 

<div class="container margin_30">

@if ($product->sale_active === 1)
			            
<div class="countdown_inner">Ova akcije se završava za <div data-countdown="{{ $product->sale_price_ends }}" class="countdown"></div>
	        </div>     
             
            @endif 
	        
	        <div class="row">
	             <div class="col-md-6">
	                <div class="all">
	                    <div class="slider">
	                        <div class="owl-carousel owl-theme main">
							@foreach ($product->images as $image)
        @php
            $imagePaths = explode(',', $image);
            $processedPaths = [];
        @endphp
    @endforeach

    @foreach ($imagePaths as $imagePath)
        @if (trim($imagePath) !== '' && !in_array(trim($imagePath), $processedPaths))
            @php
                $processedPaths[] = trim($imagePath);
            @endphp
            
                <div style="background-image: url('{{ asset('resources/img/uploads/' . trim($imagePath)) }}')" data-file="{{ trim($imagePath) }}" class="item-box bg-container">
                    
                </div>
           
        @endif
    @endforeach

						
	                        </div>
	                        <div class="left nonl"><i class="ti-angle-left"></i></div>
	                        <div class="right"><i class="ti-angle-right"></i></div>
	                    </div>
	                    <div class="slider-two">
	                        <div class="owl-carousel owl-theme thumbs">
							@foreach ($product->images as $image)
        @php
            $imagePaths = explode(',', $image);
            $processedPaths = [];
        @endphp
    @endforeach

    @foreach ($imagePaths as $imagePath)
        @if (trim($imagePath) !== '' && !in_array(trim($imagePath), $processedPaths))
            @php
                $processedPaths[] = trim($imagePath);
            @endphp
            
                <div style="background-image: url('{{ asset('resources/img/uploads/' . trim($imagePath)) }}')" data-file="{{ trim($imagePath) }}" class="item">
                    
                </div>
           
        @endif
    @endforeach
	                            
	                            
	                        </div>
	                        <div class="left-t nonl-t"></div>
	                        <div class="right-t"></div>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6">
	                <div class="breadcrumbs">
	                    <ul>
	                        <li><a href="{{ route('home') }}">Početna stranica</a></li>
	                        <li><a href="#">{{ $product->category }}</a></li>
							{!! $product->subcategory ? '<li><a href="">' . $product->subcategory . '</a></li>' : '' !!}
	                        <li>{{ $product->name }}</li>
	                    </ul>
	                </div>
	                <!-- /page_header -->
	                <div class="prod_info">
	                    <h1>{{ $product->name }} @if ($product->sale_active === 1)
			            
            <span class="percentage">{{ number_format(round((($product->sale_old_price - $product->price) / $product->sale_old_price) * 100, 2), 2) }}%</span>      
             
            @endif </h1>
	                    
	                    <p class="m-0"><small><img width="100" src="{{ asset('/resources/img/brands/' . $product->brand . '.png') }}"></small><br></p>{!! $product->description !!}
	                    <div class="prod_options">
						<div class="row">
    <label class="col-xl-5 col-lg-5 col-md-6 col-6 pt-0"><strong>Boja</strong></label>
	<div class="col-xl-4 col-lg-5 col-md-6 col-6 colors text-end text-md-start">
    <ul class="text-end text-md-start">
        <li>
            <a href="#0" class="color color_1 active" style="background: {{ $product->color }};"></a>
        </li>
    </ul>
</div>

</div>

	                        
							<form action="{{ route('cart.add') }}" method="post">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}" class="price-field">
		<div class="row price-field">
	                            <label class="col-xl-5 col-lg-5  col-md-6 col-6"><strong>Količina</strong></label>
	                            <div class="col-xl-4 col-lg-5 col-md-6 col-6">
	                                <div class="numbers-row">
	                                    <input type="int" id="quantity" name="quantity" value="1" min="1" class="qty2">
	                                </div>
	                            </div>
	                        </div>
	                   
							<div class="row mt-3">
							
	                        <div class="col-lg-5 col-md-6">
	                            <div class="price_main"><span class="new_price">{{ $product->price }} KM</span>@if ($product->sale_active === 1)<span class="old_price pl-2" style="padding-left: 5px"> {{ $product->sale_old_price }} KM</span>@endif</div>
	                        </div>
	                        <div class="col-lg-4 col-md-6 price-field">
						
	                            <div class="btn_add_to_cart"><button type="submit" href="#0" class="btn_1 full-width" >Dodaj u korpu</button></div>
	                        </div>
	                    </div>
      
    </form>
    <footer class="fixed-bottom footer-dodatni p-0">
     <div class="product-detail add-to-cart" style="overflow: hidden!important;
    white-space: nowrap!important; width: 100%; display:inline-flex; padding: 5%; border-top: 1px solid gray;">
	<form action="{{ route('cart.add') }}" method="post" style="width:100%; margin:0">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}" class="d-none d-md-block d-xl-none">
		<div class="row">
	                           
	                            <div class="col-4">
	                                <div class="numbers-row">
	                                    <input type="int" id="quantity" name="quantity" value="1" min="1" class="qty2">
	                                </div>
	                            </div>
	                       
	                   
							
							
	                        
	                        <div class="col-8">
						
	                            <div class="btn_add_to_cart"><button type="submit" href="#0" class="btn_1 full-width m-0" style="height:40px; line-height:1">Dodaj u korpu</button></div>
	                        </div>
	                    
							</div>
    </form>
          
                  </div>
    </footer>
	                        
	                 
						</div>
	                </div>
	                <!-- /prod_info -->
	                
	                <!-- /product_actions -->
	            </div>
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container -->
	    
	    <div class="tabs_product">
	        <div class="container">
	            <ul class="nav nav-tabs" role="tablist">
	                <li class="nav-item">
	                    <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">Specifikacije</a>
	                </li>
	                <li class="nav-item">
	                    <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">Opis</a>
	                </li>
	            </ul>
	        </div>
	    </div>
	    <!-- /tabs_product -->
	    <div class="tab_content_wrapper bg-black">
	        <div class="container">
	            <div class="tab-content" role="tablist">
	                <div id="pane-A" class="card tab-pane fade active show" role="tabpanel" aria-labelledby="tab-A">
	                    <div class="card-header" role="tab" id="heading-A">
	                        <h5 class="mb-0">
	                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="false" aria-controls="collapse-A">
	                                Specifikacije
	                            </a>
	                        </h5>
	                    </div>
	                    <div id="collapse-A" class="collapse show mt-3 mt-md-0" role="tabpanel" aria-labelledby="heading-A">
	                        <div class="card-body">
	                            <div class="row justify-content-between">
	                                <div class="col-lg-12">
									<div class="table-responsive product-table">
											{!! $product->specifications !!}
	                                    </div>
	                                    </div>
	                                
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- /TAB A -->
	                <div id="pane-B" class="card tab-pane fade mt-2" role="tabpanel" aria-labelledby="tab-B">
	                    <div class="card-header" role="tab" id="heading-B">
	                        <h5 class="mb-0">
	                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
	                                Opis
	                            </a>
	                        </h5>
	                    </div>
	                    <div id="collapse-B" class="collapse mt-3 mt-md-0" role="tabpanel" aria-labelledby="heading-B">
	                      
	                            <div class="row justify-content-between">
	                                <div class="col-lg-12 text-white">
	                                   <!-- /table-responsive -->
									   {!! $product->description !!}
	                                
	                                </div>
	                                
	                            </div>
	                            <!-- /row -->
	                            
	                            <!-- /row -->
	                           
	                        
	                        <!-- /card-body -->
	                    </div>
	                </div>
	                <!-- /tab B -->
	            </div>
	            <!-- /tab-content -->
	        </div>
	        <!-- /container -->
	    </div>
	    <!-- /tab_content_wrapper -->



		<div class="container margin_60_35">
			<div class="main_title">
				<h2>Zadnje dodani proizvodi</h2>
				<span>Proizvodi</span>
				<p>Pogledajte zadnje dodane proizvode</p>
			</div>
			<div class="owl-carousel owl-theme products_carousel">
				

  @foreach ($products as $product)
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
							    <div style="height:220px">
							      <div class="image-container" style="background-image: url('{{ $product->getFirstImageAttribute() }}'); background-size: contain; background-repeat:no-repeat;
    background-position: center center;
    width: 100%;
    height: 200px; padding: 20px; /* Add padding to prevent the image from touching the border */
    box-sizing: border-box;"></div></div>
								
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
		<!--/feat-->

		
	
@endsection
