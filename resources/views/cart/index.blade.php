<!-- resources/views/cart/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container margin_30">
  
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{route('home')}}">Početna stranica</a></li>
                    <li>Korpa</li>
                </ul>
            </div>
            <h1>Vaša korpa</h1>
        </div>
        <!-- /page_header -->
        @if ($cartproducts->isEmpty())
        <div class="row justify-content-center">
				<div class="col-md-5">
					<div id="confirm">
						<div class="icon icon--order-success svg add_bottom_15" style="margin-top:-20px">
                        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/hyhnpiza.json"
    trigger="loop"
    delay="1500"
    colors="primary:#d4aa51"
    style="width:80px;height:80px">
</lord-icon>
						</div>
					<h2>Vaša korpa je prazna</h2>
					<a href="{{ route('grid') }}" class="btn_1 half-width cart mt-2">Počnite kupovati</a>
					</div>
				</div>
			</div>
            

            @else
            <div class="table-responsive">
            <table class="table table-striped">
    <thead>
        <tr>
            <th>Proizvodi</th>
            <th>Cijena</th>
            <th class="align-middle">Količina</th>
            <th class="align-middle">Ukupno</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cartproducts as $product)
            <tr>
                <td  class="align-middle">
                    
                    <strong>{{ $product->name }}</strong>
                </td>
                <td>
                    <strong>{{ $product->price }} KM</strong>
                </td>
                <td class="align-middle">
                    <input type="number" disabled value="{{ $cartItems[$product->id]['quantity'] }}" id="quantity_{{ $product->id }}" style="width:100%; text-align:center; border: 1px solid white!important;" name="quantity_{{ $product->id }}">
                </td>
                <td class="align-middle">
                    <strong>{{ $product->price * $cartItems[$product->id]['quantity'] }} KM</strong>
                </td>
                <td class="options align-middle">
                    <form action="{{ route('cart.remove') }}" method="post" class="m-0">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="btn_1 outline" style="width:100%"><i class="ti-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>

        
       
        <!-- /cart_actions -->
    </div>
    <!-- /container -->

    <div class="box_cart">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <ul>
                        <li>
                            <span>Iznos:</span> {{ $subtotal }} KM
                        </li>
                        <li>
                            <span>Dostava:</span> 9.00 KM
                        </li>
                        <li>
                            <span>Za platiti:</span> {{ $total }} KM
                        </li>
                    </ul>
                    <a href="{{ route('grid') }}" class="btn_1 outline full-width cart">Nastavite kupovati</a>
                    <a href="{{ route('cart.checkout') }}" class="btn_1 full-width cart">Završite prodaju</a>
                </div>
            </div>
        </div>
    </div>

    @endif
    <!-- /box_cart -->


@endsection
