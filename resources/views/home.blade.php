@extends('layouts.app')

@section('content')
<style>
    body  {
        background-attachment: fixed;
      background-image: url("https://images.pexels.com/photos/531321/pexels-photo-531321.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
      background-color: #cccccc;
      background-position: top;
    }
    .buuz {
        padding: px;
        text-align: center;
    vertical-align: middle;
    color: white;
}
.card { background-color: rgba(245, 245, 245, 0.4); margin-top: 20px; }
.card-header, .card-footer { opacity: 1}
    .col-sm{
        margin-top: 20px;
    }

    </style>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="col-sm"></div>

                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="float-left"><h1 class="display-6" style="font-weight:bold;">Your Blog Posts</h1></div>
                                        <div class="float-right"> <a href="/posts/create" class="btn btn-outline-light">Create Post</a></div> </div>
                                    <div class="card-body">
                                        <h3 class="card-title"><a href="" style="color: aliceblue;"></a></h3>
                                        <table class="table table-striped table-dark">
                                            <thead>
                                              <tr>
                                                <th scope="col">Post Title</th>
                                              </tr>
                                            </thead>
                                            <tbody>
@if (count($posts)>0)
@foreach ($posts as $post)
<tr>
<th scope="row">{{ $post->title }}
</th>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td><a href="posts/{{ $post->id }}/edit", class="btn btn-outline-light", style="margin-left: 120px"> Edit</a> </td>
<td>          {!! Form::open(['class' => 'float-right','action'=>['PostController@destroy',$post->id], "method"=>"POST"]) !!}
    {{ Form::hidden('_method','DELETE') }}
    {{ Form::submit('Delete', ['class'=>'btn btn-outline-light','style'=>"color:aliceblue"]) }}
    {!! Form::close() !!} </td>
</tr>
@endforeach
@else
<th scope="row">You have no posts</th>
@endif

                                            </tbody>
                                          </table>
                                    </div>
                                </div>



                                             </div>
                               </div>
                        </div>
@endsection
