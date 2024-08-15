@extends('layouts.layout')

@section('title' , "E-Learining - LMS")
@section('content')
@include('partial._carousel')

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <x-Services-Card Title="Lorem Ipsum"
                Content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.."
                IconClass="fa-graduation-cap">
            </x-Services-Card>
            <x-Services-Card Title="Lorem Ipsum"
                Content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.."
                IconClass="fa-clapperboard"></x-Services-Card>
            <x-Services-Card Title="Lorem Ipsum"
                Content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.."
                IconClass="fa-person-chalkboard"></x-Services-Card>
            <x-Services-Card Title="Lorem Ipsum"
                Content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.."
                IconClass="fa-puzzle-piece"></x-Services-Card>
        </div>
    </div>
</div>


@include('partial._about')



@endsection