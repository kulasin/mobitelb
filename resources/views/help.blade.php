@extends('layouts.app')

@section('content')

    <div class="container margin_30">
        <div class="page_header">
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{route('home')}}">Početna stranica</a></li>
                 
                    <li>Pomoć i podrška</li>
                </ul>
            </div>
            <h1>Pomoć i podrška</h1>
        </div>
        <!-- /page_header -->
        
        <!-- /search-input -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <a class="box_topic" href="#0">
                    <i class="ti-wallet"></i>
                    <h3>Plaćanje</h3>
                    <p>Moguće je obaviti plaćanje samo gotovinom prilikom dostave narudžbe.</p>
                    <p>Nije moguće vršiti plaćanje putem elektronskih kartica ili drugih elektronskih načina plaćanja.</p>
                    <p>Prilikom isporuke, molimo da pripremite tačan iznos za plaćanje kako bismo izbjegli neugodnosti.</p>
                    <p>Hvala vam na razumijevanju i povjerenju u naše proizvode i usluge.</p>
                    <p>Ukoliko imate dodatnih pitanja o plaćanju, slobodno nas kontaktirajte.</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="box_topic" href="#0">
                    <i class="ti-user"></i>
                    <h3>Korisnički račun</h3>
                    <p>Za naručivanje proizvoda na našem sajtu, potrebno je kreirati korisnički račun.</p>
                    <p>Registracija korisničkog računa omogućava bržu i jednostavniju proceduru naručivanja.</p>
                    <p>Nakon kreiranja korisničkog računa, možete pratiti status vaše narudžbe i pregledati istoriju kupovine.</p>
                    <p>Vaši lični podaci će biti čuvani u skladu sa našom politikom privatnosti i neće biti dijeljeni sa trećim licima.</p>
                    <p>Ako imate bilo kakvih problema sa vašim korisničkim računom, slobodno nas kontaktirajte.</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="box_topic" href="#0">
                    <i class="ti-help"></i>
                    <h3>Opšta pomoć</h3>
                    <p>Ako imate bilo kakvih pitanja ili nedoumica, slobodno nas kontaktirajte putem e-mail adrese info@mobitelba.ba.</p>
                    <p>Također, možete nas kontaktirati putem telefona na broj +387 63 676 620.</p>
                    <p>Naš tim za podršku će vam rado pomoći i pružiti sve potrebne informacije.</p>
                    <p>Vaše zadovoljstvo je naš prioritet, zato nam slobodno pišite i iznesite svoje sugestije ili probleme.</p>
                    <p>Hvala vam što ste odabrali naše proizvode i usluge.</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="box_topic" href="#0">
                    <i class="ti-truck"></i>
                    <h3>Dostava</h3>
                    <p>Trošak dostave iznosi 7 KM i plaća se prilikom isporuke proizvoda.</p>
                    <p>Isporuka se vrši na teritoriji Bosne i Hercegovine.</p>
                    <p>Naša kurirska služba će vas kontaktirati kako bismo dogovorili najpogodnije vrijeme isporuke.</p>
                    <p>Molimo da osigurate prisutnost na adresi za dostavu kako biste izbjegli kašnjenje isporuke.</p>
                    <p>U slučaju kašnjenja ili problema sa dostavom, slobodno nas kontaktirajte.</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="box_topic" href="#0">
                    <i class="ti-eraser"></i>
                    <h3>Otkazivanje narudžbe</h3>
                    <p>Ako želite otkazati narudžbu, molimo vas da nas kontaktirate na broj +387 63 676 620.</p>
                    <p>Također, možete poslati e-mail na adresu info@mobitelba.ba sa podacima o narudžbi.</p>
                    <p>Naš tim će vam pomoći u procesu otkazivanja i pružiti sve potrebne informacije.</p>
                    <p>Otkazivanje narudžbe je moguće izvršiti prije procesa dostave proizvoda.</p>
                    <p>Zahvaljujemo vam na razumijevanju i suradnji.</p>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="box_topic" href="#0">
                    <i class="ti-comments"></i>
                    <h3>Recenzije</h3>
                    <p>Vaše mišljenje nam je važno. Nakon kupovine, imate mogućnost ocijeniti proizvode i ostaviti komentare.</p>
                    <p>Vaše recenzije će pomoći drugim korisnicima pri odabiru proizvoda.</p>
                    <p>Hvala vam što dijelite svoje iskustvo sa nama i drugima.</p>
                    <p>Zadržavamo pravo da uklonimo bilo kakve uvredljive ili neprimjerene komentare.</p>
                    <p>Ukoliko imate bilo kakvih pitanja ili problema sa recenzijama, slobodno nas kontaktirajte.</p>
                </a>
            </div>
        </div>
        <!--/row-->
    </div>
    <!-- /container -->
    <div class="bg_white">
        <div class="container margin_30">
            <h5>Popularni članci</h5>
            <div class="list_articles add_bottom_15 clearfix">
                <ul>
                    <li><a href="#0"><i class="ti-file"></i><strong>Korisnički račun</strong> - Kako provjeriti status narudžbe</a></li>
                    <li><a href="#0"><i class="ti-file"></i><strong>Korisnički račun</strong> - Kako izmijeniti lične podatke</a></li>
                    <li><a href="#0"><i class="ti-file"></i><strong>Povrat</strong> - Kako zatražiti povrat proizvoda</a></li>
                    <li><a href="#0"><i class="ti-file"></i><strong>Dostava</strong> - Kako pratiti isporuku</a></li>
                    <li><a href="#0"><i class="ti-file"></i><strong>Plaćanje</strong> - Kako obaviti plaćanje prilikom dostave</a></li>
                    <li><a href="#0"><i class="ti-file"></i><strong>Garancija</strong> - Kako ostvariti pravo na garanciju</a></li>
                    <li><a href="#0"><i class="ti-file"></i><strong>Povrat</strong> - Kako provjeriti status povrata</a></li>
                    <li><a href="#0"><i class="ti-file"></i><strong>Recenzije</strong> - Kako ocijeniti proizvode i ostaviti komentar</a></li>
                </ul>
            </div>
            <!-- /list_articles -->
        </div>
    </div>
    <!-- /bg_white -->

@endsection
