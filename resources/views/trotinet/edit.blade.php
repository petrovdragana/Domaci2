@extends('layouts.app')
@section('content')
    <h1> Izmeni podatke o izabranom trotinetu </h1>

    {!! Form::open(['action'=>['App\Http\Controllers\TrotinetController@update',$r->id],'method'=>'POST']) !!}
   <!--  ovo ispod je bootstrap -->
   <div class="form-group">
    {{Form::label('model','Model')}}

     {{Form::text('model',$r->model,['class'=>'form-control','placeholder'=>'model'])}}
</div>
<div class="form-group">
     {{Form::label('boja','Boja')}}

    {{Form::text('boja',$r->boja, ['class'=>'form-control','placeholder'=>'boja'])}}
</div>
<div class="form-group">
    {{Form::label('materijal','Materijal')}}

   {{Form::text('materijal',$r->materijal, ['class'=>'form-control','placeholder'=>'materijal'])}}
</div>
<div class="form-group">
    {{Form::label('stanje','Stanje')}}

    {{Form::text('stanje',$r->stanje, ['class'=>'form-control','placeholder'=>'stanje'])}}
</div>
<div class="form-group">
    {{Form::label('cena','Cena')}}

    {{Form::text('cena',$r->cena, ['class'=>'form-control','placeholder'=>'cena'])}}
</div>
<div class="form-group">
    {{Form::label('brzina','Brzina')}}

   {{Form::text('brzina',$r->brzina, ['class'=>'form-control','placeholder'=>'brzina'])}}
</div>
<div class="form-group">
    {{Form::label('snaga','Snaga')}}

    {{Form::text('snaga',$r->snaga, ['class'=>'form-control','placeholder'=>'snaga'])}}
</div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Posalji',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
