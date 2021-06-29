@extends('master')

@section('title','HomePage')

@section('content')
    <form action="/create" method="post">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="content" placeholder="Content">
        {{ csrf_field()}}
        <button type="submit">Submit</button>
    </form>

    <h3>Recent Message</h3>
    
    <ul>
        @foreach ($messages as $message)
            <li><strong>{{ $message->title }}</strong> 
                <a href="/message/{{$message->id}}">View</a></br>
                {{$message->content}} </br>
                {{$message->created_at->diffForHumans() }} </br>
                
                <a href="/messageDelete/{{$message->id}}">Delete</a>
            </li>
        @endforeach
    </ul>
@endsection