@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                        <a href="/sample/create" class="btn btn-primary" style="margin-top: 5px; margin-bottom: 5px;"> Create Post </a>
                    <h3>Your Blog Post</h3>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <th>Title</th>
                            <th></th>

                            @foreach( $posts as $post )
                                <tr>
                                    <th>{{$post->title}}</th>
                                    <th><a href="/sample/{{$post->id}}/edit" class="btn btn-default">Edit</a></th>
                                </tr>
                            @endforeach

                        </table>
                        @else
                        <p>You have no Post.</p>
                    @endif  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
