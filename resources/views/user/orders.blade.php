@extends('layouts.app')

@section('content')
<style>
    /* Add custom CSS for status buttons */
    .status-button {
        padding: 5px 15px;
        border: 2px solid;
        border-radius: 5px;
        font-weight: bold;
        text-align: center;
        cursor: pointer;
        background: transparent;
    }
    .status-button:hover {
      
        background: white;
    }
    
    /* Define border colors for each status */
    .status-button.načekanju {
        border-color: orange;
        color: orange;
    }
    
    .status-button.prihvaćena {
        border-color: blue;
        color: blue;
    }
    
    .status-button.poslana {
        border-color: green;
        color:green;
    }
    
    .status-button.otkazana {
        border-color: red;
        color:red;
    }
</style>
    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ route('home') }}">Početna stranica</a></li>
                    <li>Moje narudžbe</li>
                </ul>
            </div>
            <h1>Moje narudžbe</h1>
        </div>
        <!-- /page_header -->

        @if ($userOrders->isEmpty())
        <div class="row justify-content-center">
				<div class="col-md-5">
					<div id="confirm">
                    <div class="icon icon--order-success svg add_bottom_15" style="margin-top:-20px">
                    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
<lord-icon
    src="https://cdn.lordicon.com/isugonwi.json"
    trigger="loop"
    delay="1500"
    colors="primary:#d4aa51"
    style="width:80px;height:80px">
</lord-icon></div>
					<h2>Nemate prethodnih narudžbi</h2>
					<a href="{{ route('grid') }}" class="btn_1 half-width cart mt-2">Počnite kupovati</a>
					</div>
				</div>
			</div>
            
        @else
        <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width:5%">Narudžba ID</th>
                    <th>Ime i prezime</th>
                    <th>Adresa</th>
                    <th>Grad</th>
                    <th>Poštanski broj</th>
                    <th>Telefon</th>
                    <th>Ukupan iznos</th>
                    <th>Datum</th>
                    <th>Status</th> <!-- New column for status -->
                    <th></th> <!-- Action column for view details button -->
                </tr>
            </thead>
            <tbody>
                @foreach ($userOrders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->address }}</td>
                        <td>{{ $order->city }}</td>
                        <td>{{ $order->postal_code }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->total }} KM</td>
                        <td>{{ $order->created_at->format('d.m.Y. H:i') }}</td>
                        <td>
                            @if (auth()->user()->role === 'admin')
                                <!-- Display as dropdown select for admin users -->
                                <form id="statusForm" action="{{ route('user.updateStatus', ['orderId' => $order->id]) }}" method="POST" class="m-0">
    @csrf
    <select name="status" class="status-button {{ strtolower($order->status) }}">
        <option class="text-start text-left" value="načekanju" @if ($order->status === 'načekanju') selected @endif>Na čekanju</option>
        <option class="text-start text-left" value="prihvaćena" @if ($order->status === 'prihvaćena') selected @endif>Prihvaćena</option>
        <option class="text-start text-left" value="poslana" @if ($order->status === 'poslana') selected @endif>Poslana</option>
        
        <option class="text-start text-left" value="otkazana" @if ($order->status === 'otkazana') selected @endif>Otkazana</option>
    </select>
</form>
                            @else
                                <!-- Display as button with appropriate border color for non-admin users -->
                                <select disabled name="status" class="status-button {{ strtolower($order->status) }}">
        <option class="text-start text-left" value="načekanju" @if ($order->status === 'načekanju') selected @endif>Na čekanju</option>
        <option class="text-start text-left" value="poslana" @if ($order->status === 'poslana') selected @endif>Poslana</option>
        <option class="text-start text-left" value="prihvaćena" @if ($order->status === 'prihvaćena') selected @endif>Prihvaćena</option>
        <option class="text-start text-left" value="otkazana" @if ($order->status === 'otkazana') selected @endif>Otkazana</option>
    </select>
                            @endif
                        </td>
                        <td class="text-center">
                            <a href="{{ route('user.order', ['orderId' => $order->id]) }}" class="btn_1 outline">Vidi narudžbu</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        @endif
    </div>
@endsection
