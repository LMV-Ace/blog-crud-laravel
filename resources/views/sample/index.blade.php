@extends('assets.app')
@extends('assets.navbar')

@section('content')
    <div class="container">
        <h1 style="margin-top: 50px;">Posts</h1>
            @if(count($post) > 0)
                @foreach($post as $key)
                    <div class="jumbotron">
                       <a href="/sample/{{$key->id}}"><h1>"{{$key->title}}"</h1></a>
                       <p>{{$key->body}}</p>
                    </div>
                @endforeach
                {{$post->links()}}
                @else
                    <h4>No Posts Found</h4>
            @endif
    </div>
@endsection