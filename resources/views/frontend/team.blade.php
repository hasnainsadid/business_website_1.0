@extends('frontend.layouts.app')

@section('title', 'Team')

@section('header')
    @include('frontend.layouts.header.teamheader')
@stop

@section('content')
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Our Team<span></span></p>
                <h1 class="text-center mb-5">Our Team Members</h1>
            </div>
            <div class="row g-4">
                @foreach ($team as $item )
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light rounded">
                        <div class="text-center border-bottom p-4">
                            <img class="img-fluid rounded-circle mb-4" src="{{asset('')}}assets/img/{{$item->img}}" alt="">
                            <h5>{{$item->name}}</h5>
                            <span>{{$item->designation}}</span>
                        </div>
                        <div class="d-flex justify-content-center p-4">
                            <a class="btn btn-square mx-1" href=""><i class="{{$item->facebook}}"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="{{$item->twitter}}"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="{{$item->insta}}"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="{{$item->linkedin}}"></i></a>
                        </div>
                    </div>
                </div>  
                @endforeach
                 

            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection