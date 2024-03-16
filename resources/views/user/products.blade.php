@extends('layouts.app')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="container margin_30">
        <div class="page_header" style="display:flex; justify-content:space-between">
            <div class="breadcrumbs" style="display:unset!important">
                <ul>
                    <li><a href="{{ route('home') }}">Početna stranica</a></li>
                    <li>Proizvodi</li>
                </ul>
                <h1>Svi proizvodi</h1>
            </div>
           

            <a href="{{ route('product.create') }}" class="btn_1" style="max-height:45px;"> <i class="ti-plus"> </i>Novi proizvod</a>
        </div>
<!-- /top_banner -->
<div class="container margin_30">
    <div class="table-responsive">
        <table id="myTable" class="table table-striped" class="table table-striped">
            <thead>
                <tr>
                <th>ID</th>
                    <th>Ime proizvoda</th>
                      <th>Kategorija</th>
                    <th>Cijena</th>
                    <th>Akcija</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                     <td>{{ $product->category }}</td>
                    <td>{{ $product->price }} KM</td>
                    <td style="text-align:center; display:block">
                        <a href="{{ route('product.show', ['id' => $product->id]) }}" class="btn btn-info btn-sm m-2" ><i class="ti-eye"> </i>Pregled</a>
                        <a href="{{ route('product.edit', ['id' => $product->id]) }}" class="btn btn-success btn-sm m-2" ><i class="ti-pencil"> </i>Uredi</a>
                        
                        <form action="{{ route('product.delete', ['id' => $product->id]) }}" method="post" style="display: inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm m-2"><i class="ti-trash"></i> Brisanje</button>
</form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>


@endsection
