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
<div class="col-sm"><h1 class="display-5" style="font-weight:bold;">Create Post</h1>
    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Title',['style'=>"font-weight:bold; color:aliceblue"]) }}
        {{ Form::text('title', '',['class'=>'form-control','placeholder'=>'Title']) }}
    </div>
    <div class="form-group">
        {{ Form::label('body', 'Body',['style'=>"font-weight:bold; color:aliceblue"]) }}
        {!! Form::textarea('body', '',['id' => 'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text']) !!}         {{-- parseToHTML mark hiidg haalt -> {!!  !!} --}}
    </div>
    <div class="form-group" style="color : aliceblue;">
        {{ Form::file('cover_image') }}
    </div>
    {{ Form::submit('Submit', ['class'=>'btn btn-dark btn-lg','placeholder'=>'Body Text']) }}
{!! Form::close() !!}
</div>
</div>
@endsection
