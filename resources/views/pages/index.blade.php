
@extends('layouts.app')
@section('content')
<html>
<head>
	<meta http-equiv="Content-Language" content="sr" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>O nama</title>
</head>
 <body style="background-color: rgb(168, 203, 236) ;">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" >Rent elektricnih trotineta</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li ><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"> </span> Početna</a></li>
					<li class="active"><a href="#">O nama</a></li>
                   <li><a href="{{url('/trotinet')}}"><span class="glyphicon glyphicon-city"> </span> Trotineti</a></li>
					<li><a href="{{url('/rezervacije')}}"> Rezervacija</a></li>

				</ul>
                <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ms-auto">
                <ul class="nav navbar-nav">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
		</div>
			</div>
	</nav>
	<div class="container">
        <h3>Iznajmljivanje elektricnih trotineta!</h3>
        <img src="{{asset('/images/etrotinet.jpg')}}" alt="Slika se ne moze prikazati" height="400" align="center"/>
		<div class="row"  align="center">
			<div class="col-md-6">
                <br>
				<div id="dream-land" style="color:black" align="left">Jedan od noviteta koji postaje sve dostupniji na našem tržištu jesu električni trotineti. Iako su “električni trotineti” do skoro asocirali isključivo na nekakve dečije igračke ili smo ih vezivali za futurističke filmove tipa “Back to the future”, danas, ovi električni trotineti su postali sasvim prihvaćen, pa i praktičan, brz i sve dostupniji način prevoza u raznim, pa i urbanim sredinama. Istina je da u njima više ne uživaju samo deca, već uveliko i odrasli. Električni trotinet je idealan proizvod za vožnju po gradu, ali i po kraju. Bilo da vam treba jednostavno prevozno sredstvo ili za zabavu, idealan je i u kombinaciji sa vašim automobilom.

                    Ako niste u mogućnosti da parkirate automobil blizu svog radnog mesta, možete recimo veoma lako da jedan deo puta od kuće do posla da pređete automobilom, a da zatim dalje nastavite električnim trotinetom ili biciklom.
                    Električni trotinet je vozilo na dva točka sa pogonom na električni motor koji napaja punjiva baterija. Baterija se puni lako, tako što se uključi u običnu utičnicu recimo još u vašoj kući ili na poslu. Obično se kreću brzinom od 8 do 40 km/h, a ima i modela koji su sposobni da idu i brže, čak do neverovatnih 100km/h. Njihova autonomija kretanja, odnosno maksimalna razdaljina koju mogu preći sa punom baterijom, je do 40km. Ovo naravno zavisi od mnogih faktora kao što su težina vozača, uslovi vožnje, pritisak u gumama u slučaju da su pneumatske, teren po kojem se vozi i sl. Kontrole gasa i kočnice se obično nalaze na guvernalu. Električni trotineti su obično jednostavni po svom dizajnu, i nije potrebno posedovati posebnu dozvolu za upravljanje njima.
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
<div class="container">
	<div class="row">
	</div>
</div>
<br>
<footer footer-fixed-down>
	<div class="container" >
		<div class="row">
		</div>
	</div>
</footer>
</body>
</html>
@endsection

