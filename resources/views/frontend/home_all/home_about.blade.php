@php
    $aboutpage = App\Models\About::find(1);
    $allMultiImage = App\Models\MultiImage::all();
    $resume = App\Models\Resume::find(1);
@endphp

<section id="aboutSection" class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="about__icons__wrap">
                    @foreach ($allMultiImage as $item)    
                        <li>
                            <img class="light" src="{{ asset($item->multi_image) }}" alt="XD">
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <div class="section__title">
                        <span class="sub-title">About me</span>
                        <h2 class="title">{{ $aboutpage->title }}</h2>
                    </div>
                    <div class="about__exp">
                        <div class="about__exp__icon">
                            <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }}" alt="">
                        </div>
                        <div class="about__exp__content">
                            <p>{{ $aboutpage->short_title }}</p>
                        </div>
                    </div>
                    <p class="desc">{{ $aboutpage->short_description }}</p>
                    <a href="{{ $resume->resume_url }}" class="btn" target="_blank">Download my resume</a>
                </div>
            </div>
        </div>
    </div>
</section>