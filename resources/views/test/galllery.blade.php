@extends('layout.master')
@section('title','gallery')
@section('main-section')
<h2> My Gallery</h2>
<hr>
<div class="photo-grid" style="text-align: right">
    <img src="{{asset("images/noel.jpeg")}}" alt="">
</div>
<div style="text-align: center;>
    <img src="{{asset("images/noel.jpeg")}}" alt="">
</div>
    <div style="text-align: left;>
        <img src="{{asset("images/noel.jpeg")}}" alt="">
    </div>
    

@endsection