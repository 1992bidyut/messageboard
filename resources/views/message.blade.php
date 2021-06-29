@extends('master')

@section('title','Message')

@section('content')
    <h3>
        {{ $message->title }}
    </h3>
    <p>
        {{$message->content}}
    </p>
   
@endsection