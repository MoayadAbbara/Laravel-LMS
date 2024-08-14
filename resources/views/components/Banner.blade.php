@props(['Title' , 'ImagePath'])

<div class="container-fluid bg-primary py-5 mb-5 page-header"
    style="background: linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), url({{$ImagePath}});">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">{{$Title}}</h1>
            </div>
        </div>
    </div>
</div>