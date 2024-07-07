@extends('frontend.layouts.app')

@section('title', 'Team')

@section('header')
    @include('frontend.layouts.header.projectheader')
@stop

@section('content')
    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container py-5 px-lg-5">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span>Our Projects<span></span></p>
                <h1 class="text-center mb-5">Recently Completed Projects</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        @foreach ($cats as $item)
                            <li class="mx-2" data-filter=".{{$item->id}}">{{$item->category}}</li>
                        @endforeach
                        
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                @foreach ($project as $item )
                <div class="col-lg-4 col-md-6 portfolio-item {{$item->category_id}} wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset('')}}assets/img/{{$item->img}}" alt="project image">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="{{asset('')}}assets/img/portfolio-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="bg-light p-4">
                            <p class="text-primary fw-medium mb-2">{{$item->category->category}}</p>
                            <h5 class="lh-base mb-0">{{$item->title}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Projects End -->
@endsection