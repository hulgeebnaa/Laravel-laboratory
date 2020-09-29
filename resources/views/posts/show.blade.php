@extends('layouts.app')
@section('content')
<style>
    .card{
        margin-top: 20px;
    }
    body  {
      background-image: url("https://images.pexels.com/photos/3921910/pexels-photo-3921910.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
      background-color: #cccccc;
      background-position: top;
      background-attachment: fixed;
    }
    .card { background-color: rgba(245, 245, 245, 0.4); }
.card-header, .card-footer { opacity: 1}
    .col-sm{
        margin-top: 20px;
    }
</style>

<div class="container">

<div class="col-sm"><h1 class="display-5" style="font-weight:bold;color: aliceblue;">{{ $post->title }}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div class="card text-center"><h2 class="display-5" style="color: aliceblue;">{!! $post->body !!}</h2></div>
    <div class="footer-copyright text-left py-3">
        <small style="color: aliceblue;">Written on {{ $post->created_at  }} by : {{ $post->user->name }} </small>
        <a href="/posts" class="btn btn-outline-light" style="margin-left: 640px;color:aliceblue">⬅</a>
        @if (!Auth::guest()) {{-- zojin bish hereglegch bol  --}}
        @if (Auth::user()->id == $post->user_id)
        {{-- newtersen hereglegchiin id- users husnegtiin id ni posts husnegtiin users_id tai tohirch bval edit, delete hiine ooroor helbel oorinhoo postiig edit hiih --}}
        {!! Form::open(['class' => 'float-right','action'=>['PostController@destroy',$post->id], "method"=>"POST"]) !!}
        {{ Form::hidden('_method','DELETE') }}
        {{ Form::submit('Delete', ['class'=>'btn btn-outline-light','style'=>"color:aliceblue"]) }}
        {!! Form::close() !!}
        <a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-light" style="margin-left: 10px;color:aliceblue">Edit</a>
        @endif

        @endif

        {{-- <a href="/posts/{{ $post->id }}/delete" class="btn btn-outline-light" style="margin-left: 20px;color:aliceblue">Delete</a> --}}
       </div>

</div>
    <div class="row justify-content-center">
        <div class="col-md-8">

</div>
</div>
</div>
@endsection
