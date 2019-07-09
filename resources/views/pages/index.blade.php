@extends('assets.app')
@extends('assets.navbar')

@section('content')
    
    <div id="index" style="background: url('{{ asset('vid/pic1.jpg') }}'); background-repeat: no-repeat;  background-attachment: fixed; background-position: center; background-size: cover; position: fixed; height: 100%; width: 100%; padding: 0; margin: 0;">
        <div class="jumbotron">
            <h1 style="color: white;">WELCOME TO MY SAMPLE WEBPAGE</h1>
            <button class="btn btn-primary" href="#">Login</button>&nbsp;<button class="btn btn-success" href="#">Register</button>
        </div>
    </div>    
    
@endsection