@extends('layouts.app')

@section('content')
<!-- /top_banner -->
<form id="filter-form" action="{{ route('products.filter') }}" method="GET">
    
<div id="stick_here"></div>		
			<div class="toolbox elemento_stick">
				<div class="container">
				<ul class="clearfix">
					<li>
						<div class="sort_select">
                        <select name="sort" id="sort" style="color: #d4aa51">
    <option value="latest" @if($selectedSort === 'latest') selected @endif>Od najnovijih do najstarijih</option>
    <option value="low_to_high" @if($selectedSort === 'low_to_high') selected @endif>Od najjeftinijih do najskupljih</option>
    <option value="high_to_low" @if($selectedSort === 'high_to_low') selected @endif>Od najskupljih do najjeftinijih</option>
</select>
<script>
        // When the sorting dropdown value changes, trigger the form submit to apply sorting
        $('#sort').on('change', function () {
            $('#filter-form').submit();
        });
    </script>

						</div>
					</li>
					
					<li>
						<a href="#0" class="open_filters">
							<i class="ti-filter"></i><span>Filteri</span>
						</a>
					</li>
				</ul>
				</div>
			</div>
			<!-- /toolbox -->
		
			
			<div class="container margin_30">
			
			<div class="row">
				<div class="col-lg-9">
                @if ($products->isEmpty())
                <div class="row justify-content-center">
				<div class="col-md-5">
					<div id="confirm">
						<div class="icon icon--order-success svg add_bottom_15" style="margin-top:-20px">
                        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/bmnlikjh.json"
    trigger="loop"
    delay="1500"
    colors="primary:red"
    style="width:80px;height:80px">
</lord-icon>
							
							
						</div>
					<h2>Nažalost, nemamo rezultata za Vašu pretragu</h2>
					<p>Probajte sa drugim setom filtera ili ključnom riječi!</p>
					</div>
				</div>
			</div>
            @endif
					<div class="row small-gutters">
							
					@foreach ($products as $product)
				<div class="col-6 col-md-4 col-xl-3">
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
						<small><img style="display:unset!important; width:70px; margin-top:-35px; margin-bottom:-20px" src="{{ asset('../resources/img/brands/' . $product->brand . '.png') }}"></small>
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
					</div>
				
					<!-- /row -->
					<div class="pagination text-center" style="display:block!important; width:90%; margin-left:auto; margin-right:auto">
            {{ $products->links() }}
        </div>
					</div>
					<!-- /col -->
				
					<aside class="col-lg-3" id="sidebar_fixed">
					
					<div class="filter_col">
						<div class="inner_bt"><a href="#" class="open_filters"><i class="ti-close"></i></a></div>
						<div class="filter_type version_2">
							<h4><a href="#filter_1" data-bs-toggle="collapse" class="opened">Kategorije</a></h4>
							<div class="collapse show" id="filter_1">
							    <ul>
								@foreach ($categories as $category)
								<li>
							            <label class="container_check">{{ $category->category_name }}
										<input type="checkbox" name="category[]" value="{{ $category->category_name }}"
                    @if(in_array($category->category_name, $selectedCategories)) checked @endif> <span class="checkmark"></span>
					
					</label></li>@endforeach
							    </ul>
							</div>
							<!-- /filter_type -->
						</div>
						<!-- /filter_type -->
						
						<!-- /filter_type -->
						<div class="filter_type version_2">
						<h4><a href="#filter_3" data-bs-toggle="collapse" class="opened">Brandovi</a></h4>
							
							<div class="collapse show" id="filter_3">
							<ul>
    <li>
        <label class="container_check">
            Apple
            <input type="checkbox" name="brand[]" value="Apple" @if(in_array('Apple', $selectedBrands)) checked @endif>
            <span class="checkmark"></span>
        </label>
    </li>
    <li>
        <label class="container_check">
            Samsung
            <input type="checkbox" name="brand[]" value="Samsung" @if(in_array('Samsung', $selectedBrands)) checked @endif>
            <span class="checkmark"></span>
        </label>
    </li>
    <li>
        <label class="container_check">
            Xiaomi
            <input type="checkbox" name="brand[]" value="Xiaomi" @if(in_array('Xiaomi', $selectedBrands)) checked @endif>
            <span class="checkmark"></span>
        </label>
    </li>
    <!-- Add the rest of the brand checkboxes here -->
    <li>
        <label class="container_check">
            Google
            <input type="checkbox" name="brand[]" value="Google" @if(in_array('Google', $selectedBrands)) checked @endif>
            <span class="checkmark"></span>
        </label>
    </li>
    <li>
        <label class="container_check">
            Playstation
            <input type="checkbox" name="brand[]" value="Playstation" @if(in_array('Playstation', $selectedBrands)) checked @endif>
            <span class="checkmark"></span>
        </label>
    </li>
    <li>
        <label class="container_check">
            Lenovo
            <input type="checkbox" name="brand[]" value="Lenovo" @if(in_array('Lenovo', $selectedBrands)) checked @endif>
            <span class="checkmark"></span>
        </label>
    </li>
    <li>
        <label class="container_check">
            Razer
            <input type="checkbox" name="brand[]" value="Razer" @if(in_array('Razer', $selectedBrands)) checked @endif>
            <span class="checkmark"></span>
        </label>
    </li>
    <li>
        <label class="container_check">
            Honor
            <input type="checkbox" name="brand[]" value="Honor" @if(in_array('Honor', $selectedBrands)) checked @endif>
            <span class="checkmark"></span>
        </label>
    </li>
    <li>
        <label class="container_check">
            Inkax
            <input type="checkbox" name="brand[]" value="Inkax" @if(in_array('Inkax', $selectedBrands)) checked @endif>
            <span class="checkmark"></span>
        </label>
    </li>
</ul>

							</div>
						</div>
						<div class="filter_type version_2">
							<h4><a href="#filter_2" data-bs-toggle="collapse" class="opened">Boja</a></h4>
							<div class="collapse show" id="filter_2">
							<ul>
    <li>
        <label class="container_check">Crna
            <input name="color[]" type="checkbox" value="black" @if(in_array('black', $selectedColors)) checked @endif>
            <span class="checkmark"></span>
        </label>
    </li>
    <li>
        <label class="container_check">Bijela
            <input name="color[]" type="checkbox" value="white" @if(in_array('white', $selectedColors)) checked @endif>
            <span class="checkmark"></span>
        </label>
    </li>
    <li>
        <label class="container_check">Siva
            <input name="color[]" type="checkbox" value="gray" @if(in_array('gray', $selectedColors)) checked @endif>
            <span class="checkmark"></span>
        </label>
    </li>
    <li>
        <label class="container_check">Narandžasta
            <input name="color[]" type="checkbox" value="orange" @if(in_array('orange', $selectedColors)) checked @endif>
            <span class="checkmark"></span>
        </label>
    </li>
</ul>

							</div>
						</div>
						<!-- /filter_type -->
						<div class="filter_type version_2">
						    <h4><a href="#filter_4" data-bs-toggle="collapse" class="opened">Cijena</a></h4>
						    <div class="collapse show" id="filter_4">
							
              
              
							<div class="range_container">
        <div class="sliders_control">
            <input id="fromSlider" type="range" value="{{ old('start_price', $selectedStartPrice) }}" min="0" max="5000"/>
            <input id="toSlider" type="range" value="{{ old('end_price', $selectedEndPrice) }}" min="0" max="5000"/>
        </div>
        <div class="form_control">
            <div class="form_control_container">
                <div class="text-white">Min</div>
                <input class="form_control_container__time__input" name="start_price" type="number" id="fromInput" value="{{ old('start_price', $selectedStartPrice) }}" min="0" max="5000"/>
            </div>
            <div class="form_control_container">
                <div class="form_control_container__time">Max</div>
                <input class="form_control_container__time__input" name="end_price" type="number" id="toInput" value="{{ old('end_price', $selectedEndPrice) }}" min="0" max="5000"/>
            </div>
        </div>
    </div>
	<script>

		 // Function to set default values for the sliders and input fields
 function setDefaultValues() {
    const fromSlider = document.getElementById('fromSlider');
    const toSlider = document.getElementById('toSlider');
    const fromInput = document.getElementById('fromInput');
    const toInput = document.getElementById('toInput');

    // Check if the 'old' values are empty or not set
    const selectedStartPrice = parseInt("{{ old('start_price', $selectedStartPrice) }}");
    const selectedEndPrice = parseInt("{{ old('end_price', $selectedEndPrice) }}");

    // Default values if 'old' values are not set or empty
    const defaultStartPrice = 0;
    const defaultEndPrice = 5000;

    // Set default values for the sliders and input fields
    fromSlider.value = selectedStartPrice || defaultStartPrice;
    toSlider.value = selectedEndPrice || defaultEndPrice;
    fromInput.value = selectedStartPrice || defaultStartPrice;
    toInput.value = selectedEndPrice || defaultEndPrice;

    // Update the gradient background of the slider track
    fillSlider(fromInput, toInput, 'gray', '#d4aa51', toSlider);
}

    // Function to handle the slider and input interactions
    function controlFromInput(fromSlider, fromInput, toInput, controlSlider) {
        const [from, to] = getParsed(fromInput, toInput);
        fillSlider(fromInput, toInput, 'gray', '#d4aa51', controlSlider);
        if (from > to) {
            fromSlider.value = to;
            fromInput.value = to;
        } else {
            fromSlider.value = from;
        }
    }
    
    function controlToInput(toSlider, fromInput, toInput, controlSlider) {
        const [from, to] = getParsed(fromInput, toInput);
        fillSlider(fromInput, toInput, 'gray', '#d4aa51', controlSlider);
        setToggleAccessible(toInput);
        if (from <= to) {
            toSlider.value = to;
            toInput.value = to;
        } else {
            toInput.value = from;
        }
    }
    
    function controlFromSlider(fromSlider, toSlider, fromInput) {
        const [from, to] = getParsed(fromSlider, toSlider);
        fillSlider(fromSlider, toSlider, 'gray', '#d4aa51', toSlider);
        if (from > to) {
            fromSlider.value = to;
            fromInput.value = to;
        } else {
            fromInput.value = from;
        }
    }
    
    function controlToSlider(fromSlider, toSlider, toInput) {
        const [from, to] = getParsed(fromSlider, toSlider);
        fillSlider(fromSlider, toSlider, 'gray', '#25daa5', toSlider);
        setToggleAccessible(toSlider);
        if (from <= to) {
            toSlider.value = to;
            toInput.value = to;
        } else {
            toInput.value = from;
            toSlider.value = from;
        }
    }
    
    function getParsed(currentFrom, currentTo) {
        const from = parseInt(currentFrom.value, 10);
        const to = parseInt(currentTo.value, 10);
        return [from, to];
    }
    
    function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
        const rangeDistance = to.max - to.min;
        const fromPosition = from.value - to.min;
        const toPosition = to.value - to.min;
        controlSlider.style.background = `linear-gradient(
          to right,
          ${sliderColor} 0%,
          ${sliderColor} ${(fromPosition / rangeDistance) * 100}%,
          ${rangeColor} ${((fromPosition / rangeDistance) * 100)}%,
          ${rangeColor} ${(toPosition / rangeDistance) * 100}%, 
          ${sliderColor} ${(toPosition / rangeDistance) * 100}%, 
          ${sliderColor} 100%)`;
    }
    
    function setToggleAccessible(currentTarget) {
        const toSlider = document.getElementById('toSlider');
        if (Number(currentTarget.value) <= 0) {
            toSlider.style.zIndex = 2;
        } else {
            toSlider.style.zIndex = 0;
        }
    }

    // Call the function to set default values when the page loads
    setDefaultValues();

    // Add event listeners to handle interactions with the sliders and input fields
    const fromSlider = document.getElementById('fromSlider');
    const toSlider = document.getElementById('toSlider');
    const fromInput = document.getElementById('fromInput');
    const toInput = document.getElementById('toInput');

    fromSlider.oninput = () => controlFromSlider(fromSlider, toSlider, fromInput);
    toSlider.oninput = () => controlToSlider(fromSlider, toSlider, toInput);
    fromInput.oninput = () => controlFromInput(fromSlider, fromInput, toInput, toSlider);
    toInput.oninput = () => controlToInput(toSlider, fromInput, toInput, toSlider);
	</script>
</div></div>
<div class="filter_type version_2">
						    <h4><a href="#filter_5" data-bs-toggle="collapse" class="opened">Akcijske cijena</a></h4>
						    <div class="collapse show" id="filter_5">
							
              
              
							<ul>
    <li>
        <label class="container_check">Prikaži samo proizvode na popustu
		<input type="checkbox" name="sale_active" value="1" @if(request()->input('sale_active')) checked @endif>
            
            <span class="checkmark"></span>
        </label>
    </li>
</ul>
</div></div>
						
						<!-- /filter_type -->
						<div class="buttons">
						<button type="submit" class="btn_1">Primijeni</button>
							 <a href="{{ route('grid') }}" class="btn_1 outline">Reset</a>
						</div>
					</div>
					
				</aside>
				<!-- /col -->
			</div>
			<!-- /row -->
				
		</div>
		<!-- /container -->
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

        </form>


@endsection
