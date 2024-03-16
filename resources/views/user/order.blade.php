<!-- resources/views/user/order_details.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ route('home') }}">Početna stranica</a></li>
                    <li><a href="{{ route('user.orders') }}">Historija narudžbi</a></li>
                    <li>Detalji narudžbe</li>
                </ul>
            </div>
            <h1>Detalji narudžbe</h1>
        </div>
        <!-- /page_header -->

        <div class="table-responsive">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td><strong>Narudžba ID:</strong></td>
                        <td>{{ $order->id }}</td>
                    </tr>
                    <tr>
                        <td><strong>Ime i prezime:</strong></td>
                        <td>{{ $order->name }}</td>
                    </tr>
                    <tr>
                        <td><strong>Adresa:</strong></td>
                        <td>{{ $order->address }}</td>
                    </tr>
                    <tr>
                        <td><strong>Grad:</strong></td>
                        <td>{{ $order->city }}</td>
                    </tr>
                    <tr>
                        <td><strong>Poštanski broj:</strong></td>
                        <td>{{ $order->postal_code }}</td>
                    </tr>
                    <tr>
                        <td><strong>Telefon:</strong></td>
                        <td>{{ $order->phone }}</td>
                    </tr>
                    <tr>
                        <td><strong>Ukupan iznos:</strong></td>
                        <td>{{ $order->total }} KM</td>
                    </tr>
                    <tr>
                        <td><strong>Datum:</strong></td>
                        <td>{{ $order->created_at->format('d.m.Y. H:i') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h4>Proizvodi u narudžbi</h4>
        <div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
              
                @if (auth()->user()->role === 'admin')
                    <th style="width:5%">ID iz baze</th>
                @endif
                <th style="width:55%">Proizvod</th>
                <th style="width:15%">Cijena</th>
                <th style="width:15%">Količina</th>
                <th style="width:10%">Ukupno</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->products as $productId => $product)
                <tr>
                    @if (auth()->user()->role === 'admin')
                        <td>{{ $productId }}</td>
                    @endif
                    <td><a onMouseOver="this.style.color='white'"
   onMouseOut="this.style.color='#d4aa51'"  href="{{ route('product.show', ['id' => $productId]) }}"><span>{{ $product['name'] }}</span></a></td>
                    <td>{{ $product['price'] }} KM</td>
                    <td>{{ $product['quantity'] }}</td>
                    <td>{{ $product['price'] * $product['quantity'] }} KM</td> <!-- Calculate total -->
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

    </div>
@endsection
