@extends('layouts.app')

@section('content')
<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Početna stranica</a></li>
					
					<li>Login</li>
				</ul>
		</div>
		<h1>Logirajte se sa svojim podacima</h1>
	</div>
	<!-- /page_header -->
			<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-6 col-md-8">
				<div class="box_account">
					<h3 class="client">Već ste naš korisnik?</h3>
					<div class="form_container">
					
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
						<div class="form-group">
                            <input id="email" placeholder="Unesite Vaš email*" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						<div class="form-group">
                        <input id="password" placeholder="Unesite Vaš password*" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
							
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
						<div class="clearfix add_bottom_15 add_top_20">
						
<div class="checkboxes float-start">
								<label class="container_check">Zapamti me
									<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
									<span class="checkmark"></span>
								</label>
							</div>
                        
                           
							<div class="float-end"> @if (Route::has('password.request'))
                                    <a id="forgot" >
                                        Zaboravljeni password?
                                    </a>
                                @endif</div>
						</div>
						<div class="text-center"><input type="submit" value="Logirajte se" class="btn_1 full-width"></div>
                        <div class="divider" style="margin:30px 0 22px 0"><span class="text-white">ili</span></div>
                        <div class="text-center text-white">Nemate nalog?<a type="submit" href="{{ route('register') }}" class="btn_1 full-width add_top_20">Registrujte se</a></div>
						<div id="forgot_pw">
							<div class="form-group">
								<input type="email" class="form-control" name="email_forgot" id="email_forgot" placeholder="Unesite Vaš email">
							</div>
							<p class="text-white">Novi password će biti poslan ubrzo</p>
							<div class="text-center"><input type="submit" value="Resetuje password" class="btn_1"></div>
						</div>
</form>
					</div>
					<!-- /form_container -->
				</div>
				<!-- /box_account -->
				
				<!-- /row -->
			</div>
			
		</div>
		<!-- /row -->
		</div>
@endsection
