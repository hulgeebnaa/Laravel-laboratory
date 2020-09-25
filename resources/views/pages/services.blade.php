@extends('layouts.app')
@section('content')
<h2>{{ $title }}</h2>
@if (count($services)>0)
    @foreach ($services as $item)
        <li>{{ $item }}</li>
    @endforeach
@endif
{{-- <h2>{{$services}}</h2> --}}
<p>Services</p>
@endsection

