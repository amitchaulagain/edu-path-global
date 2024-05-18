@extends('weblayouts.app')

@section('content_box')

    {{-- <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" >
         <div class="overlay"></div>
         <div class="container">
             <div class="row no-gutters slider-text align-items-end">
                 <div class="col-md-9 ftco-animate pb-5">
                     <p class="breadcrumbs mb-2"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact Us <i class="ion-ios-arrow-forward"></i></span></p>
                     <h1 class="mb-0 bread">Contact Us</h1>
                 </div>
             </div>
         </div>
     </section>--}}


    <!-- Contact Section -->
    <section id="contact" class="contact section" style="margin-top: 120px">


        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-6">
                    <h1> Head Office</h1>
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>{{ $siteSetting['head_address'] ?? '' }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>

                                <p>{{ $siteSetting['head_contact'] ?? '' }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>{{ $siteSetting['head_email'] ?? '' }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="500">
                                <i class="bi bi-clock"></i>
                                <h3>Open Hours</h3>
                                <p>Monday - Friday</p>
                                <p>9:00AM - 05:00PM</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                </div>

                <div class="col-lg-6">
                    <h1> Branch Office</h1>
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>{{ $siteSetting['branch_address'] ?? '' }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>

                                <p>{{ $siteSetting['branch_contact'] ?? '' }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>{{ $siteSetting['branch_email'] ?? '' }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="500">
                                <i class="bi bi-clock"></i>
                                <h3>Open Hours</h3>
                                <p>Monday - Friday</p>
                                <p>9:00AM - 05:00PM</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                </div>



            </div>

        </div>

    </section><!-- /Contact Section -->
    <div class="row">
        <div style="width: 50%">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3254.0651204009623!2d149.23140567577323!3d-35.35403017269462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b164ee6f19aaaab%3A0x19a44e81fbfff18d!2s8%2F72%20Monaro%20St%2C%20Queanbeyan%20NSW%202620!5e0!3m2!1sen!2sau!4v1702989069150!5m2!1sen!2sau"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


        <div style="width: 50%">
            <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=Putalisadak,%20Kathmandu+(EduPath%20Global)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                <a href="https://www.gps.ie/">gps devices</a></iframe>
        </div>
    </div>
@endsection


