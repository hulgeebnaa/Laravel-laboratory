@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8"> --}}
<style>
    body  {
      background-image: url("https://images.pexels.com/photos/1485894/pexels-photo-1485894.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
      background-color: #cccccc;
      background-position: top;
      background-attachment: fixed;
    }
    .buuz {
        padding: 400px;
        text-align: center;
    color: white;

}
h1{
    font-size: 70px;
}
    </style>
    <h1 class="buuz">{{ $titleH }}</h1>
        </div></div>
{{-- </div> --}}
@endsection
