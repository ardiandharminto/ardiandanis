@php
    $contact = App\Models\MyContact::find(1);
@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<section class="homeContact">
    <div class="container">
        <div class="homeContact__wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section__title">
                        <span class="sub-title">Say hello</span>
                        <h2 class="title">Any questions? Feel free <br> to contact</h2>
                    </div>
                    <div class="homeContact__content">
                        <p>Empowering Your Vision through Web Development - Reach Out with Your Inquiries and Ideas!</p>
                        <h2 class="mail"><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="homeContact__form">
                        <form 
                            action="{{ route('store.message') }}" 
                            method="post"
                            id="myForm"
                        >
                            @csrf

                            <div class="form-group" style="margin-bottom: 28px">
                                <input 
                                    name="name"
                                    type="text" 
                                    placeholder="Enter name*"
                                    class="form-control"
                                    id="name"
                                    style="margin-bottom: 0"
                                >
                            </div>
                            <div class="form-group" style="margin-bottom: 28px">
                                <input 
                                    name="email"
                                    type="email" 
                                    placeholder="Enter email*"
                                    class="form-control"
                                    id="email"
                                    style="margin-bottom: 0"
                                >
                            </div>
                            <div class="form-group" style="margin-bottom: 28px">
                                <input 
                                    name="phone" 
                                    type="text" 
                                    placeholder="Enter phone*"
                                    class="form-control"
                                    id="phone"
                                    style="margin-bottom: 0"
                                >
                            </div>
                            <div class="form-group" style="margin-bottom: 28px">
                                <textarea 
                                    name="message" 
                                    placeholder="Enter message*"
                                    class="form-control"
                                    id="message" 
                                ></textarea>
                            </div>
                            <button type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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