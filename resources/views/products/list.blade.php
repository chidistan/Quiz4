@extends('layouts/main')
@section('section')

    @foreach($pro as $po)
        <h1>{{$po->id}}</h1>
        <h1>{{$po->name}}</h1>
        <h1>{{$po->description}}</h1>
        <h1>{{$po->price}}</h1>
    @endforeach
@endsection