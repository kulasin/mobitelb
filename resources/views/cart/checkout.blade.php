<!-- resources/views/cart/index.blade.php -->
@extends('layouts.app')

@section('content')
<form action="{{ route('order') }}" method="post">
 
    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="#">Početna stranica</a></li>
                    <li><a href="#">Korpa</a></li>
                    <li>Završite kupovinu</li>
                </ul>
            </div>
            <h1>Završite kupovinu</h1>
        </div>
        <!-- /page_header -->

        <div class="row" style="background: black">
            <!-- Step 1: Informacije za dostavu -->
            <div class="col-lg-4 col-md-6">
                <div class="step first">
                    <h3>1. Informacije za dostavu</h3>

                    <div class="tab-content checkout">
                        <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
                            <div class="row no-gutters">
                                @if(auth()->check())
                                    <!-- If the user is logged in, display user information -->
                                    <div class="col-12 form-group pr-1">
                                        <input type="text" class="form-control" value="{{ Auth::user()->name }}" disabled>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ Auth::user()->address }}" disabled>
                                    </div>
                                    <div class="row" style="padding-right:0!important">
                                        <div class="col-6 form-group">
                                            <input type="text" class="form-control" value="{{ Auth::user()->zip }}" disabled>
                                        </div>
                                        <div class="col-6 form-group" style="padding-right:0!important">
                                            <input type="text" class="form-control" value="{{ Auth::user()->city }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ Auth::user()->phone }}" disabled>
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn_1" style="width: 100%" id="editUserModalButton">Izmijenite podatke</button>
                                    </div>
                                @else
                                

    <div class="form-group">
        <label class="text-white" for="name">Ime i prezime</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required oninvalid="this.setCustomValidity('Ime i prezime za dostavu obavezno!')" oninput="setCustomValidity('')">
        <div class="help-block with-errors"></div>
    </div>

    <div class="form-group">
        <label  class="text-white" for="address">Adresa</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required oninvalid="this.setCustomValidity('Adresa za dostavu obavezna!')" oninput="setCustomValidity('')">
    </div>

    <div class="row" style="padding-right:0px">
        <div class="form-group col-md-6">
            <label class="text-white" for="postal_code">Poštanski broj</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ old('postal_code') }}" required oninvalid="this.setCustomValidity('Poštanski broj za dostavu obavezan!')" oninput="setCustomValidity('')">
        </div>
        <div class="form-group col-md-6"  style="padding-right:0px">
            <label class="text-white" for="city">Grad</label>
            <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required oninvalid="this.setCustomValidity('Grad za dostavu obavezan!')" oninput="setCustomValidity('')">
        </div>
    </div>

    <div class="form-group">
        <label class="text-white" for="phone">Telefon</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required oninvalid="this.setCustomValidity('Vaš broj telefona je obavezan!')" oninput="setCustomValidity('')">
    </div>



                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /step -->
            </div>


            <!-- Step 2: Plaćanje i dostava -->
            <div class="col-lg-4 col-md-6">
                <div class="step middle payments">
                    <h3>2. Plaćanje i dostava</h3>
                    <ul>
                        <h5 class="text-white">Plaćanje</h5>
                        <li>
                            <label class="container_radio">Plaćanje pouzećem
                                
                                <input type="radio" name="payment" checked>
                                <span class="checkmark"></span>
                            </label>
                        </li>
                    </ul>

                    <ul>
                        <h5 class="text-white">Dostava</h5>
                        <li>
                            <label class="container_radio">Standardna dostava (9 KM)
                                
                                <input type="radio" name="shipping" checked>
                                <span class="checkmark"></span>
                            </label>
                        </li>
                        
                    </ul>
                </div>
                <!-- /step -->

            </div>

            <!-- Step 3: Narudžba -->
            <div class="col-lg-4 col-md-6">
                <div class="step last">
                    <h3>3. Narudžba</h3>
                    <div class="box_general summary">
                        <ul>
                            <!-- Loop through the cart items and display them -->
                            @foreach ($cartproducts as $product)
                            <li class="clearfix"><em>{{ $cartItems[$product->id]['quantity'] }}X {{ $product->name }}</em> <span>{{ $product->price }} KM</span></li>
                            @endforeach
                        </ul>
                        <ul>
                            <li class="clearfix"><em><strong>Subtotal</strong></em> <span>{{ $subtotal }} KM</span></li>
                            <li class="clearfix"><em><strong>Dostava</strong></em> <span>9 KM</span></li>
                        </ul>
                        <div class="total clearfix">TOTAL <span>{{ $total }} KM</span></div>
                        <div class="form-group">
                            <label class="container_check">Registruj se za newsletter.
                                <input type="checkbox" checked>
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        @if(count($cartproducts) > 0)
                        <!-- Update the form action and method based on your route and controller -->
                      
                            @csrf
                            <button type="submit" class="btn_1 full-width">Završite narudžbu</button>
                        </form>  @endif
                    </div>
                    <!-- /box_general -->
                </div>
                <!-- /step -->
            </div>
        </div>
        <!-- /row -->
    </div>
</form>
<!-- resources/views/cart/checkout.blade.php -->
@if(auth()->check())
<!-- Your existing HTML code for checkout.blade.php -->
<!-- Modal for editing user information -->
<div class="modal fade mt-3" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserModalLabel">Izmijeni korisničke podatke</h5>
                
            </div>
            <div class="modal-body" id="accountFormContainer">
                <!-- Include the account form directly here -->
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
            <form action="{{ route('user.update') }}" method="post"  style="background:black" class="p-3">
                        @csrf
           
                    <div class="step first" >
                        <h3>1. Informacije za dostavu</h3>
                        <div class="tab-content checkout">
                            <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
                                <div class="form-group">
                                    <label class="text-white" for="name">Ime i prezime</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" required oninvalid="this.setCustomValidity('Ime i prezime za dostavu obavezno!')" oninput="setCustomValidity('')">
                                </div>
                                <div class="form-group">
                                    <label  class="text-white" for="address">Adresa</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{ auth()->user()->address }}" required oninvalid="this.setCustomValidity('Adresa za dostavu obavezna!')" oninput="setCustomValidity('')">
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label  class="text-white" for="postal_code">Poštanski broj</label>
                                        <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ auth()->user()->zip }}" required oninvalid="this.setCustomValidity('Poštanski broj za dostavu obavezan!')" oninput="setCustomValidity('')">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label  class="text-white" for="city">Grad</label>
                                        <input type="text" class="form-control" id="city" name="city" value="{{ auth()->user()->city }}" required oninvalid="this.setCustomValidity('Grad za dostavu obavezan!')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="text-white" for="phone">Telefon</label>
                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ auth()->user()->phone }}" required oninvalid="this.setCustomValidity('Vaš broj telefona obavezan!')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                <button type="submit" class="btn_1" style="width:100%">Spremi</button>
                </div>
                
            

            
            </form>
        </div>
            </div>
            <!-- No need for a footer or buttons, as the form already has a "Spremi" button -->
        </div>
    </div>
</div>
@endif
<!-- Your existing script -->
<script>
    $(document).ready(function () {
        // Function to open the modal when the "Izmijeni podatke" button is clicked
        $('#editUserModalButton').on('click', function () {
            $('#editUserModal').modal('show');
        });
    });
</script>
<!-- Modal for editing user information -->



@endsection
