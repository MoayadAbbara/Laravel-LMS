@extends('layouts.layout')

@section('content')
<x-Banner Title="تسجيل الدخول" ImagePath="{{asset('img/carousel-1.jpg')}}"></x-Banner>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <form method="POST" action="/login">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-end"
                        style="text-align: right; display: block;">الايميل</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="email">
                </div>
                @error('email')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-end"
                        style="text-align: right; display: block;">كلمة المرور</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                @error('password')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">تسحيل الدخول</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection