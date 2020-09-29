@extends('layouts.app')
@section('content')
<style>
    body  {
      background-image: url("https://images.pexels.com/photos/3921910/pexels-photo-3921910.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
      background-color: #cccccc;
      background-position: top;
      background-attachment: fixed;
    }
    .card { background-color: rgba(245, 245, 245, 0.4); margin-top: 20px; }
.card-header, .card-footer { opacity: 1}
    .col-sm{
        margin-top: 20px;
    }
</style>

<div class="container">
<div class="col-sm"><h1 class="display-5" style="font-weight:bold; color: aliceblue;">Posts</h1></div>

    <div class="row justify-content-center">
        <div class="col-md-8">
    @if (count($posts)>=1)
        @foreach ($posts as $item)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                       <img style="width: 100%" src="/storage/cover_images/{{ $item->cover_image }}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3 class="card-title"><a href="/posts/{{ $item->id}}" style="color: aliceblue;">{{ $item->title }}</a></h3>
                        <small style="color: aliceblue"> Written on {{ $item->created_at }} by : </small><small style="color: aliceblue;font-weight:bold;" > {{ $item->user->name }} </small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="card-footer">{{ $posts->links("pagination::bootstrap-4") }}</div>
    @else
        <div class="card-header"><p class="display-5" style="font-weight:bold; color:aliceblue">No posts found </p></div>
    @endif


                     </div>
       </div>
</div>
@endsection
