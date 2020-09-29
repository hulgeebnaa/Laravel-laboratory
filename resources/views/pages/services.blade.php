
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<style>
    body  {
      background-image: url("https://images.pexels.com/photos/1629998/pexels-photo-1629998.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
      background-color: #cccccc;
      background-position: top;
      background-attachment: fixed;

    }
    .list-group-item { background-color: rgba(245, 245, 245, 0.4); }
    .col-sm{
        margin-top: 20px;
    }
    .buuz {
        padding-top : 400px;
        text-align: center;
    vertical-align: middle;
    color: white;

}
h1{
    font-size: 70px;
}
    </style>
    <div class="buuz"> <h1>{{ $title }}</h1> </div>
    @if (count($services)>0)
    <ul class="list-group">
    @foreach ($services as $item)
        <li class="list-group-item" style="color :aliceblue " >{{ $item }}</li>
    @endforeach
</ul>
@endif
            </div></div></div>
@endsection

