@extends('assets.app')
@extends('assets.navbar')

@section('content')
    <div class="container">
        <h1>Posts</h1>
            @if(count($post) > 2)
                @foreach($post as $key)
                    <div class="jumbotron">
                       <a href="/sample/{{$key->id}}"><h1>{{$key->title}}</h1></a>
                       <p>{{$key->body}}</p>
                    </div>
                @endforeach
                @else
                    <h4>No Posts Found</h4>
            @endif
    </div>
@endsection