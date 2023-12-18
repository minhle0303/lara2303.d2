@extends('layout.master')
@section('title','home')
@section('main-section')

<hr>
<h2>
    Welcome to Lavarel Layout Demo
</h2>
<div>
    {{-- asset doc chinh xac file trong folder public --}}
    <img src="{{asset('images/noel.jpeg')}}" alt="" class="main-img">
</div>
@endsection