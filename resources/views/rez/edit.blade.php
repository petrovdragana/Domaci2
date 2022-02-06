@extends('layouts.app')
@section('content')
    <h1> Izmeni rezervaciju </h1>

    {!! Form::open(['action'=>['App\Http\Controllers\RezervacijaController@update',$rez->id],'method'=>'POST']) !!}
   <!--  ovo ispod je bootstrap -->
   <div class="form-group">
    {{Form::label('ime','Ime')}}

     {{Form::text('ime',$rez->ime,['class'=>'form-control','placeholder'=>'ime'])}}
</div>
<div class="form-group">
     {{Form::label('prezime','Prezime')}}

    {{Form::text('prezime',$rez->prezime, ['class'=>'form-control','placeholder'=>'prezime'])}}
</div>
    {{Form::label('datum_preuzimanja','Datum preuzimanja')}}

    {{ Form::date('datum_preuzimanja', $rez->datum_preuzimanja, ['class'=>'form-control','placeholder'=>'datum_preuzimanja'])}}
</div>
<div class="form-group">
    {{Form::label('brDana','Broj dana')}}

    {{Form::text('brDana',$rez->brDana, ['class'=>'form-control','placeholder'=>'brDana'])}}
</div>
<div class="form-group">
    {{Form::label('kontakt','Kontakt')}}

    {{Form::text('kontakt',$rez->kontakt, ['class'=>'form-control','placeholder'=>'kontakt'])}}
</div>
<div class="form-group">
    {{Form::label('trotinet_id','Trotinet id')}}

    {{Form::text('trotinet_id',$rez->trotinet_id, ['class'=>'form-control','placeholder'=>'trotinet_id'])}}
</div>
<div class="form-group">
    {{Form::label('user_id','User id')}}

    {{Form::text('user_id',$rez->user_id, ['class'=>'form-control','placeholder'=>'user_id'])}}
</div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
