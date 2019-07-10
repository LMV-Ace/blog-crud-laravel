@extends('assets.app')
@extends('assets.navbar')

@section('content')
    <div class="container">
        <h1 style="margin-top: 50px;">Create Post</h1>
        {!! Form::open(['action' => 'SampleController@store', 'method' => 'POST']) !!}

            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>

            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection