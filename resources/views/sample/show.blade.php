@extends('assets.app')
@extends('assets.navbar')


@section('content')
<style>
    .card{
        
        padding: 40px;  
        top: 100px;
        text-align: center;
        margin-left: 350px;
        width: 400px;
    }
</style>
    <div class="container">
        <a type="button" class="btn btn-default" href="/sample" style="margin-top: 20px;">Go Back</a>
            <div class="card">
                <h1>{{$post->title}}</h1>
                <p>{!!$post->body !!}</p>
                <small>Written on {{$post->created_at}}</small>
            </div>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <a href="/sample/{{$post->id}}/edit" class="btn btn-default" type="button">Edit</a>
            </div>
            <div class="col-lg-6">
                {!!Form::open(['action' => ['SampleController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-left'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            </div>
        </div>
    </div>
@endsection