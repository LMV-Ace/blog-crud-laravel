@extends('assets.app')
@extends('assets.navbar')

@section('content')
    <div class="container">
        <h1 style="margin-top: 50px;">Edit Post</h1>
        {!! Form::open(['action' => ['SampleController@update', $post->id], 'method' => 'PUT']) !!}

            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>

            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Edit', ['class' => 'btn btn-success'])}}
        {!! Form::close() !!}
    </div>
@endsection