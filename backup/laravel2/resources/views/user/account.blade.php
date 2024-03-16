<!-- resources/views/user/account.blade.php -->

@extends('layouts.app')

@section('content')
        <div class="container margin_30">
            <div class="page_header">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Početna stranica</a></li>
                        <li>Korisnički račun</li>
                    </ul>
                </div>
                <h1>Korisnički podaci</h1>
            </div>
            <!-- /page_header -->
            <form action="{{ route('user.update') }}" method="post">
                        @csrf
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="step first">
                        <h3>1. Informacije za dostavu</h3>
                        <div class="tab-content checkout">
                            <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
                                <div class="form-group">
                                    <label for="name">Ime i prezime</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="address">Adresa</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{ auth()->user()->address }}">
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="postal_code">Poštanski broj</label>
                                        <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ auth()->user()->zip }}">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="city">Grad</label>
                                        <input type="text" class="form-control" id="city" name="city" value="{{ auth()->user()->city }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Telefon</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ auth()->user()->phone }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                <button type="submit" class="btn_1" style="width:100%">Spremi</button>
                </div>
                
            </div>
            </div>

            
            </form>
        </div>
        <!-- /container -->
    
@endsection

<style>
    body {
        background-color: black;
        color: white;
    }

    .black-bg {
        padding: 40px 0;
    }

    .step {
        background-color: #1a1a1a;
        padding: 30px;
        border-radius: 10px;
        margin-bottom: 30px;
    }

    .step h3 {
        color: #fff;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .tab-content.checkout {
        padding-top: 10px;
        color: #fff;
    }

    .form-group label {
        color: #fff;
    }

    .form-control {
        background-color: #333333;
        border: none;
        border-radius: 0;
        color: #fff;
    }

    .form-control:focus {
        box-shadow: none;
        background-color: #333333;
        color: #fff;
    }

    .form-control[disabled] {
        background-color: #333333;
    }

    .form-control::placeholder {
        color: #aaa;
    }

    .btn_1 {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn_1:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn_1:focus {
        box-shadow: none;
    }
</style>
