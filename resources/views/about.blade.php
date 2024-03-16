@extends('layouts.app')

@section('content')

    <div class="container margin_60_35 add_bottom_30">
        <div class="main_title">
            <h2>O nama</h2>
            <p>MobitelBA je najveća i najbolja tech i gadget online trgovina za mobilne telefone, laptope, kompjutere, video igre i sve što ide uz iste u Bosni i Hercegovini.</p>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5">
                <div class="box_about">
                    <h2>Najprodavaniji proizvodi</h2>
                    <p class="lead">Pronađite najbolje proizvode u našoj ponudi.</p>
                    <p>Imamo širok izbor mobilnih telefona, laptopa, igara i drugih tehnoloških gadgeta. Naši proizvodi su visokog kvaliteta i dolaze od poznatih svjetskih brendova. Obratite nam se za najnovije modele i najbolje cijene.</p>
                    <img src="{{ asset('/resources/img/arrow_about.png') }}" alt="" class="arrow_1">
                </div>
            </div>
            <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                <img src="{{ asset('/resources/img/about_1.svg') }}" alt="" class="img-fluid" width="350" height="268">
            </div>
        </div>
        <!-- /row -->
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
                <img src="{{ asset('/resources/img/about_2.svg') }}" alt="" class="img-fluid" width="350" height="268">
            </div>
            <div class="col-lg-5">
                <div class="box_about">
                    <h2>Najpoznatije marke</h2>
                    <p class="lead">Pronađite proizvode poznatih svjetskih brendova.</p>
                    <p>Saradjujemo s vodećim proizvođačima mobilnih telefona, laptopa i igara. Naša ponuda obuhvata proizvode renomiranih kompanija koje su poznate po kvalitetu, pouzdanosti i inovativnosti. Bez obzira na vaše potrebe, kod nas ćete pronaći proizvode koji odgovaraju vašem ukusu i stilu.</p>
                    <img src="{{ asset('/resources/img/arrow_about.png') }}" alt="" class="arrow_2">
                </div>
            </div>
        </div>
        <!-- /row -->
        <div class="row justify-content-center align-items-center ">
            <div class="col-lg-5">
                <div class="box_about">
                    <h2>+1000 proizvoda</h2>
                    <p class="lead">Bogat izbor proizvoda za sve vaše potrebe.</p>
                    <p>Naša trgovina nudi više od15000 proizvoda koji zadovoljavaju različite potrebe i želje naših kupaca. Bez obzira jeste li u potrazi za najnovijim modelom mobilnog telefona, laptopa ili igre, kod nas ćete pronaći sve na jednom mjestu. Uz bogat izbor proizvoda, kod nas ćete uvijek naći ono što vam treba.</p>
                </div>
            </div>
            <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                <img src="{{ asset('/resources/img/about_3.svg') }}" alt="" class="img-fluid" width="350" height="316">
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->

    <div class="bg_white">
        <div class="container margin_60_35">
            <div class="main_title">
                <h2>Zašto odabrati MobitelBA</h2>
                <p>Izaberite nas zbog prednosti koje vam pružamo.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="box_feat">
                        <i class="ti-medall-alt"></i>
                        <h3>+ 1000 Kupaca</h3>
                        <p>Naši zadovoljni kupci su naša najveća referenca. Ponosni smo što smo stekli povjerenje preko 1000 kupaca širom Bosne i Hercegovine. Vaša satisfakcija je naš prioritet, zato se trudimo da vam pružimo vrhunsku uslugu i najbolje proizvode.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box_feat">
                        <i class="ti-help-alt"></i>
                        <h3>Pomoć 24/7</h3>
                        <p>Naš tim stručnjaka uvijek je dostupan za pomoć i podršku. Bez obzira na vaša pitanja, nedoumice ili tehničke zahtjeve, možete nas kontaktirati u svako doba. Pružamo podršku putem telefona, emaila i chata kako bismo vam osigurali bezbrižno iskustvo kupovine.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box_feat">
                        <i class="ti-gift"></i>
                        <h3>Sjajne Ponude</h3>
                        <p>Uz nas uvijek možete računati na sjajne ponude i povoljne cijene. Redovno nudimo popuste i akcije na našu ponudu proizvoda kako bismo vam omogućili da uštedite prilikom kupovine. Pratite naše promocije kako ne biste propustili najbolje ponude.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box_feat">
                        <i class="ti-headphone-alt"></i>
                        <h3>Direktna Linija za Pomoć</h3>
                        <p>Uvijek možete računati na našu direktnu liniju za pomoć. Naši ljubazni agenti su spremni odgovoriti na sva vaša pitanja i pružiti vam neophodne informacije. Bez obzira na prirodu vašeg zahtjeva, možete se osloniti na nas.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box_feat">
                        <i class="ti-wallet"></i>
                        <h3>Sigurna Plaćanja</h3>
                        <p>VVaša sigurnost nam je važna. Zato omogućavamo plaćanja isključivo u gotovini kako biste bili zaštićeni prilikom kupovine. U našoj trgovini prihvatamo samo gotovinske transakcije, pružajući vam siguran i pouzdan način plaćanja za sve vaše kupovine.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box_feat">
                        <i class="ti-comments"></i>
                        <h3>Podrška putem Chata</h3>
                        <p>Naš chat je dostupan za brzu i jednostavnu komunikaciju. Ako imate pitanja, nedoumice ili trebate savjet, naš tim je ovdje da vam pomogne. Naše ljubazno osoblje pružit će vam informacije i pomoć u realnom vremenu.</p>
                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
    </div>
    <!-- /bg_white -->

    
    <!-- /container -->


    <!-- /bg_white -->

@endsection
