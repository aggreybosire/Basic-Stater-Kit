@extends('layout')

@section('content')
    @foreach($clients as $client)
     {{$client->name}}
    @endforeach
@stop