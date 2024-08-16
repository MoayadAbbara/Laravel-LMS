@extends('layouts.layout')

<style>

</style>


@section('content')

<x-Banner Title="{{$course->grade->name}}" ImagePath="{{asset('img/carousel-1.jpg')}}"></x-Banner>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Lessons</h6>
            <h1 class="mb-5">{{$course->name}}</h1>
        </div>
    </div>



    <div class="container mt-5 rtl-section">
        <div class="accordion" id="accordionPanelsStayOpenExample">
            @foreach ($lessons as $index => $lesson)
            <x-Lesson-Card :index="$index" :lesson="$lesson"></x-Lesson-Card>
            @endforeach
        </div>
    </div>
    @endsection