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
                    <li>Brandovi</li>
                </ul>
                <h1>Svi brandovi</h1>
            </div>
           

            <a href="{{ route('user.create-brand') }}" class="btn_1" style="max-height:45px;"> <i class="ti-plus"> </i>Novi brand</a>
        </div>
<!-- /top_banner -->
<div class="container margin_30">
    <div class="table-responsive">
        <table id="myTable" class="table table-striped" class="table table-striped">
            <thead>
                <tr>
                <th>ID</th>
                      <th>Brandovi</th>
                      <th>Akcija</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brands as $brand)
                <tr>
                <td>{{ $brand->id }}</td>
                    <td>{{ $brand->name }}</td>

                    <td style="text-align:center; display:block">
                        <a href="{{ route('user.edit-brand', ['id' => $brand->id]) }}" class="btn btn-success btn-sm m-2" ><i class="ti-pencil"> </i>Uredi</a>
                        
                        <form action="{{ route('user.delete-brand', ['id' => $brand->id]) }}" method="post" style="display: inline;">
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
