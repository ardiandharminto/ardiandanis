@extends('frontend.main_master')

@section('main')

    @section('title') Home | Ardian Danis Website @endsection

    <!-- banner-area -->
    @include('frontend.home_all.home_slide')
    <!-- banner-area-end -->

    <!-- about-area -->
    @include('frontend.home_all.home_about')
    <!-- about-area-end -->

    <!-- services-area -->
    {{-- @include('frontend.home_all.home_service') --}}
    <!-- services-area-end -->

    <!-- work-process-area -->
    @include('frontend.home_all.home_work_process')
    <!-- work-process-area-end -->

    <!-- portfolio-area -->
    @include('frontend.home_all.portfolio')
    <!-- portfolio-area-end -->
    
    <!-- partner-area -->
    {{-- @include('frontend.home_all.partner') --}}
    <!-- partner-area-end -->

    <!-- testimonial-area -->
    {{-- @include('frontend.home_all.home_testimonial') --}}
    <!-- testimonial-area-end -->

    <!-- blog-area -->
    @include('frontend.home_all.home_blog')
    <!-- blog-area-end -->

    <!-- contact-area -->
    @include('frontend.home_contact')
    <!-- contact-area-end -->
@endsection