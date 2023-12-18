@extends('layout.master')

{{-- title, prodcut: tu dat ten --}}
@section('title','product')
@section('main-section')
<div class="row">
 <?php $data= ['noel.jpeg','noel.jpeg','noel.jpeg','noel.jpeg'] ?>

 @foreach ($data as $item)
     <div class="col-md-3">
        <img src="{{asset("images/$item")}}" alt="{{$item}}">
     </div>
 @endforeach

 @endsection
   
      
