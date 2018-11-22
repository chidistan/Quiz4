@extends('master/master')
@section('section')

    @foreach($cds as $ca)
        <h1>{{$ca->id}}</h1>
        <h1>{{$ca->name}}</h1>
        <h1>{{$ca->email}}</h1>
        <h1>{{$ca->gender}}</h1>
        @endforeach
    @endsection