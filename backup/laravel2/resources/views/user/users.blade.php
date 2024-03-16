@extends('layouts.app')

@section('content')
    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ route('home') }}">Početna stranica</a></li>
                    <li>Admin panel</li>
                    <li>Korisnici</li>
                </ul>
            </div>
            <h1>Korisnici</h1>
        </div>
        <!-- /page_header -->

        @if ($userList->isEmpty())
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
					<h2>Nemate korisnika</h2>
					</div>
				</div>
			</div>
            
        @else
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width:5%">ID</th>
                            <th>Ime i prezime</th>
                            <th>Adresa</th>
                            <th>Grad</th>
                            <th>Poštanski broj</th>
                            <th>Telefon</th>
                           
                            <th></th> <!-- Action column for view details button -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userList as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->city }}</td>
                                <td>{{ $user->zip }}</td>
                                <td>{{ $user->phone }}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
