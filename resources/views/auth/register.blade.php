@extends('layouts.app')

@section('content')
<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Početna stranica</a></li>
					
					<li>Registracija</li>
				</ul>
		</div>
		<h1>Registrujte se na naš webshop</h1>
	</div>
	<!-- /page_header -->
			<div class="row justify-content-center">
			
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="new_client">Novi klijent</h3> <small class="float-right pt-2">* Obavezna polja</small>
					<div class="form_container">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
						<div class="form-group">
                        <input id="name" type="text" placeholder="Unesite puno ime i prezime*" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus oninvalid="this.setCustomValidity('Ime i prezime je obavezno!')" oninput="setCustomValidity('')">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						<div class="form-group">
                        <input id="email" type="email" placeholder="Unesite email (kasnije se ne može mijenjati)*" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" oninvalid="this.setCustomValidity('Email nije validan (nema znak @) ili je prazan!')" oninput="setCustomValidity('')">

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
						</div>
                        <div class="form-group">
                        <input id="password" type="password" placeholder="Unesite password*" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  oninvalid="this.setCustomValidity('Password je obavezan!')" oninput="setCustomValidity('')">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
						</div>
                        <div class="form-group">
                        <input id="password-confirm" placeholder="Ponovite password*" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  oninvalid="this.setCustomValidity('Ponovljeni password je obavezan!')" oninput="setCustomValidity('')">
						</div>
						<hr>
				
						<div class="private box">
                        <div class="form-group">
    <input id="address" type="text" placeholder="Unesite punu adresu*" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus  oninvalid="this.setCustomValidity('Adresa za dostavu obavezna!')" oninput="setCustomValidity('')">
    @error('address')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="row no-gutters">
    <div class="col-6 pr-1">
        <div class="form-group">
            <input id="city" type="text" placeholder="Grad*" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus oninvalid="this.setCustomValidity('Grad za dostavu obavezan!')" oninput="setCustomValidity('')">
            @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="col-6 pl-1">
        <div class="form-group">
            <input id="zip" type="text" placeholder="Poštanski broj*" class="form-control @error('zip') is-invalid @enderror" name="zip" value="{{ old('zip') }}" required autocomplete="zip" autofocus oninvalid="this.setCustomValidity('Poštanski broj za dostavu obavezan!')" oninput="setCustomValidity('')">
            @error('zip')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <input id="phone" type="text" placeholder="Broj telefona*" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus oninvalid="this.setCustomValidity('Vaš broj telefona je obavezan!')" oninput="setCustomValidity('')">
    @error('phone')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
							<!-- /row -->
							
						</div>
						<!-- /private -->
						
						<!-- /company -->
						<hr>
						<div class="form-group mt-3 mb-3">
							<label class="container_check">Prihvatam <a href="#0">Uslove korištenja</a>
								<input type="checkbox">
								<span class="checkmark" required></span>
							</label>
						</div>
						<div class="text-center"><input type="submit" value="Registrujte se" class="btn_1 full-width"></div>
                        <div class="divider" style="margin:30px 0 22px 0"><span class="text-white">ili</span></div>
                        <div class="text-center text-white">Već imate nalog?<a href="{{ route('login') }}" value="" class="btn_1 full-width add_top_20">Logirajte se</a></div>
</form>
					</div>
					<!-- /form_container -->
				</div>
				<!-- /box_account -->
			</div>
		</div>
		<!-- /row -->
		</div>
@endsection
