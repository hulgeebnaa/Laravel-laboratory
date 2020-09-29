@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8"> --}}
<style>
    body  {
      background-image: url("https://images.pexels.com/photos/1809644/pexels-photo-1809644.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
      background-color: #cccccc;
      background-position: top;
      background-attachment: fixed;
    }
    .buuz {
        padding-top: 400px;
}
h1{
    font-size: 70px;
    color: white;
    text-align: center;
}
.text-center{
    padding: 50px;
}
    </style>
    <h1 class="buuz">{{ $title }}</h1>
@endsection

@section('botcontent')
<div class="text-center">
    <p> <a class="btn btn-dark btn-lg" href="/login" role="button">Login</a>  <a class="btn btn-primary btn-lg" href="/register" role="button">Register</a></p>
</div>
        </div>
    </div>
    {{-- </div> --}}
@endsection
