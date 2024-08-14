@props(['Title','Content','IconClass'])

<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="service-item text-center pt-3">
        <div class="p-4">
            <i class="fa fa-3x {{$IconClass}} text-primary mb-4"></i>
            <h5 class="mb-3">{{$Title}}</h5>
            <p>{{$content}}</p>
        </div>
    </div>
</div>