@extends('layouts.app')
@section('content')
<a href="/trotinet/public/trotinet" class="btn btn-default"> Vrati se nazad</a>
<h1> Podaci o izabranom elektricnom trotinetu: {{$r->id}}</h1>
    <div> Model: {{$r->model}} </div>
    <div> Boja: {{$r->boja}} </div>
    <div> Materijal: {{$r->materijal}} </div>
    <div> Stanje: {{$r->stanje}} </div>
    <div> Cena: {{$r->cena}} </div>
    <div> Brzina: {{$r->brzina}} </div>
    <div> Snaga: {{$r->snaga}} </div>
    <a href="/trotinet/public/trotinet/{{$r->id}}/edit" class="btn btn-defualt">Izmeni</a>
    {!!Form::open(['action'=>['App\Http\Controllers\TrotinetController@destroy',$r->id,
    'method'=>'POST','class'=>'pull-right']])!!}
    {!!Form::hidden('_method','DELETE')!!}
    {!!Form::submit('Izbrisi',['class'=>'btn btn-danger'])!!}
    {!!Form::close()!!}
@endsection
