@extends('frontend.main_master')

@section('main')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    @section('title') Contact | Ardian Danis Website @endsection

    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">Contact Me</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__wrap__icon">
                <ul>
                    <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon01.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon02.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon03.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon04.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon05.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon06.png') }}" alt=""></li>
                </ul>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-map -->
        <div id="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7933.1996892858915!2d106.88563179331831!3d-6.184274522684381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4c4164e8331%3A0xa15d5c51289f70aa!2sJl.%20Pulo%20Asem%20Utara%20XII%20No.49%2C%20RT.14%2FRW.2%2C%20Jati%2C%20Kec.%20Pulo%20Gadung%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013220!5e0!3m2!1sen!2sid!4v1695268712501!5m2!1sen!2sid" allowfullscreen loading="lazy"></iframe>
        </div>
        <!-- contact-map-end -->

        <!-- contact-area -->
        <div class="contact-area">
            <div class="container">
                <form 
                    method="post" 
                    action="{{ route('store.message') }}" 
                    class="contact__form"
                    id="myForm"
                >
                    @csrf

                    <div class="row">
                        <div 
                            class="form-group col-md-6"
                            style="margin-bottom: 30px"
                        >
                            <input 
                                name="name" 
                                type="text" 
                                placeholder="Enter your name*"
                                class="form-control"
                                id="name"
                                style="margin-bottom: 0"
                            >
                        </div>
                        <div 
                            class="form-group col-md-6"
                            style="margin-bottom: 30px"
                        >
                            <input 
                                name="email" 
                                type="email" 
                                placeholder="Enter your email*"
                                class="form-control"
                                id="email"
                                style="margin-bottom: 0"
                            >
                        </div>
                        <div 
                            class="form-group col-md-6"
                            style="margin-bottom: 30px"
                        >
                            <input 
                                name="subject" 
                                type="text" 
                                placeholder="Enter your subject*"
                                class="form-control"
                                id="subject"
                                style="margin-bottom: 0"
                            >
                        </div>
                        <div 
                            class="form-group col-md-6"
                            style="margin-bottom: 30px"
                        >
                            <input 
                                name="phone" 
                                type="text" 
                                placeholder="Your phone*"
                                class="form-control"
                                id="phone"
                                style="margin-bottom: 0"
                            >
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 40px">
                        <textarea 
                            name="message" 
                            id="message" 
                            placeholder="Enter your message*"
                            class="form-control"
                            style="margin-bottom: 0"
                        ></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
        <!-- contact-area-end -->

        <!-- contact-info-area -->
        <section class="contact-info-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact__info">
                            <div class="contact__info__icon">
                                <img src="{{ asset('frontend/assets/img/icons/contact_icon01.png') }}" alt="">
                            </div>
                            <div class="contact__info__content">
                                <h4 class="title">address line</h4>
                                <span>Jl. Pulo Asem Utara XII No. 49, Jakarta, <br> 13220, Indonesia</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact__info">
                            <div class="contact__info__icon">
                                <img src="{{ asset('frontend/assets/img/icons/contact_icon02.png') }}" alt="">
                            </div>
                            <div class="contact__info__content">
                                <h4 class="title">Phone Number</h4>
                                <span>+6289 - 6184 - 64676</span>
                                <span>+6289 - 6821 - 88666</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact__info">
                            <div class="contact__info__icon">
                                <img src="{{ asset('frontend/assets/img/icons/contact_icon03.png') }}" alt="">
                            </div>
                            <div class="contact__info__content">
                                <h4 class="title">Mail Address</h4>
                                <span>adaniswarad@gmail.com</span>
                                <span>ardian.dharminto@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-info-area-end -->

        <!-- contact-area -->
        {{-- <section class="homeContact homeContact__style__two">
            <div class="container">
                <div class="homeContact__wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section__title">
                                <span class="sub-title">07 - Say hello</span>
                                <h2 class="title">Any questions? Feel free <br> to contact</h2>
                            </div>
                            <div class="homeContact__content">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="homeContact__form">
                                <form action="#">
                                    <input type="text" placeholder="Enter name*">
                                    <input type="email" placeholder="Enter mail*">
                                    <input type="number" placeholder="Enter number*">
                                    <textarea name="message" placeholder="Enter Massage*"></textarea>
                                    <button type="submit">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- contact-area-end -->

    </main>

    <script>
        $(document).ready(function () {
            $('#myForm').validate({
                rules: {
                    name: { required: true },
                    email: { required: true },
                    subject: { required: true },
                    phone: { required: true },
                    message: { required: true }
                },
                messages: {
                    name: { required: 'Please enter your name' },
                    email: { required: 'Please enter your email' },
                    subject: { required: 'Please enter your subject' },
                    phone: { required: 'Please enter your phone' },
                    message: { required: 'Please enter your message' }
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endsection