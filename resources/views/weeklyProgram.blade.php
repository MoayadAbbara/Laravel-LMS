@extends('layouts.layout')

@section('content')
<x-Banner Title="Weekly Program" ImagePath="{{asset('img/carousel-1.jpg')}}"></x-Banner>



<img src="{{url($imagePath)}}" class="d-block mx-auto img-fluid" alt="Centered Image">

@endsection