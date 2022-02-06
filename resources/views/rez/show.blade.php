@extends('layouts.app')
@section('content')
<!-- dodali smo dugme da nnas vrati na prethodnu stranicu -->
<a href="/trotinet/public/rezervacije" class="btn btn-default"> Vrati se nazad</a>
<h1> Podaci nosioca rezervacije: {{$rez->ime}} {{$rez->prezime}}</h1>
    <div>
        Datum preuzimanja elektricnog trotineta:{{$rez->datum_preuzimanja}}
    </div>
    <div>
       Broj dana za iznajmljivanje: {{$rez->brDana}}
    </div>
    <div>
        Kontakt osobe: {{$rez->kontakt}}
    </div>
    <div>
        Trotinet: {{$rez->trotinet_id}}
    </div>
    <div>
        Korisnik: {{$rez->user_id}}
     </div>
    <a href="/trotinet/public/rezervacije/{{$rez->id}}/edit" class="btn btn-defualt">Izmeni</a>
    {!!Form::open(['action'=>['App\Http\Controllers\RezervacijaController@destroy',$rez->id,
    'method'=>'POST','class'=>'pull-right']])!!}
    {!!Form::hidden('_method','DELETE')!!}
    {!!Form::submit('Izbrisi',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@endsection
