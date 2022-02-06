@extends('layouts.app')
@section('content')
    <h1> Unesi novi trotinet </h1>

    {!! Form::open(['action'=>['App\Http\Controllers\TrotinetController@store'],'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('model','Model')}}

         {{Form::text('model','',['class'=>'form-control','placeholder'=>'model'])}}
    </div>
    <div class="form-group">
         {{Form::label('boja','Boja')}}

        {{Form::text('boja','', ['class'=>'form-control','placeholder'=>'boja'])}}
    </div>
    <div class="form-group">
        {{Form::label('materijal','Materijal')}}

       {{Form::text('materijal','', ['class'=>'form-control','placeholder'=>'materijal'])}}
   </div>
    <div class="form-group">
        {{Form::label('stanje','Stanje')}}

        {{Form::text('stanje','', ['class'=>'form-control','placeholder'=>'stanje'])}}
    </div>
    <div class="form-group">
        {{Form::label('cena','Cena')}}

        {{Form::text('cena','', ['class'=>'form-control','placeholder'=>'cena'])}}
    </div>
    <div class="form-group">
        {{Form::label('brzina','Brzina')}}

       {{Form::text('brzina','', ['class'=>'form-control','placeholder'=>'brzina'])}}
   </div>
    <div class="form-group">
        {{Form::label('snaga','Snaga')}}

        {{Form::text('snaga','', ['class'=>'form-control','placeholder'=>'snaga'])}}
    </div>
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
