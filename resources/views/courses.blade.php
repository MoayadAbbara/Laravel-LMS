@extends('layouts.layout')
@section('content')


<x-Banner Title="Dersler" ImagePath="{{asset('img/carousel-1.jpg')}}"></x-Banner>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
            <h1 class="mb-5">Popular Courses</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ($Courses as $item)
            <x-Course-Card :course="$item"></x-Course-Card>
            @endforeach
        </div>
    </div>
</div>
@endsection