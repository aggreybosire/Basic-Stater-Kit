@extends('themes.default.layout')

@section('content')
    @if(is_array($clients))
    
    @foreach($clients as $client)
    
     {{ $client->name }}

    @endforeach
    
    @else
    {{{'No clients'}}}
    @endif
@stop
