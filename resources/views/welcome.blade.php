<x-app-layout>


    <!-- ======= Header ======= -->
    <x-header/>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero" style="">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-end ">
                    <h2 class="text-black">المقرأة الليبية للقرآن الكريم وعلومه</h2>
                    <p class="text-black">مقرأة تهتم بتعليم القرآن وعلومها لكل الطلبة من كافة الأعمار والجنسيات</p>
                    <div class="d-flex justify-content-center justify-content-lg-end bg-gray-300">
                        <a href="#about" class="btn-get-started text-black">عنا</a>
                        <a href="https://www.youtube.com/watch?v=R0BrHK6w640"
                           class="glightbox btn-watch-video d-flex align-items-center">
                            <span class="text-black">من نحن</span>
                            <i class="bi bi-play-circle text-black"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out"
                         data-aos-delay="100">
                    {{--                <x-app-logo/>--}}
                </div>
            </div>
        </div>

        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5" style="display: flex; flex-direction: row-reverse">

                    <x-stat-card title="عدد الطلبة" value="{{$about?->number_of_students}}" icon="bi bi-person-fill"/>
                    <x-stat-card title="عدد الخاتمين" value="{{$about?->number_of_Hafez}}" icon="bi bi-person-fill"/>
                    <x-stat-card title="عدد المشائح" value="{{$about?->number_of_teachers}}" icon="bi bi-geo-alt"/>
                    <x-stat-card title="عدد المسمعين أسبوعياً" value="232" icon="bi bi-geo-alt"/>

                </div>
            </div>
        </div>

    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>عنا</h2>
                    <p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم سواء كانت تصاميم</p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <h3>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم</h3>
                        <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="">
                        <p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع</p>
                        <p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميملوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i>
                                    لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i>
                                    لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i>
                                    لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على لوريم ايبسوم هو نموذج
                                    افتراضي
                                    يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم
                                </li>
                            </ul>
                            <p>
                                لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه
                                لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصام
                            </p>

                            <div class="position-relative mt-4">
                                <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Clients Section ======= -->
        {{--    <section id="clients" class="clients">--}}
        {{--        <div class="container" data-aos="zoom-out">--}}

        {{--            <div class="clients-slider swiper">--}}
        {{--                <div class="swiper-wrapper align-items-center">--}}
        {{--                    <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>--}}
        {{--                    <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>--}}
        {{--                    <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>--}}
        {{--                    <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>--}}
        {{--                    <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>--}}
        {{--                    <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>--}}
        {{--                    <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>--}}
        {{--                    <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>--}}
        {{--                </div>--}}
        {{--            </div>--}}

        {{--        </div>--}}
        {{--    </section>--}}
        <!-- End Clients Section -->

        <!-- ======= Stats Counter Section ======= -->
        {{--    <section id="stats-counter" class="stats-counter">--}}
        {{--        <div class="container" data-aos="fade-up">--}}

        {{--            <div class="row gy-4 align-items-center">--}}

        {{--                <div class="col-lg-6">--}}
        {{--                    <img src="assets/img/stats-img.svg" alt="" class="img-fluid">--}}
        {{--                </div>--}}

        {{--                <div class="col-lg-6">--}}

        {{--                    <div class="stats-item d-flex align-items-center">--}}
        {{--                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"--}}
        {{--                              class="purecounter"></span>--}}
        {{--                        <p><strong>Happy Clients</strong> consequuntur quae diredo para mesta</p>--}}
        {{--                    </div><!-- End Stats Item -->--}}

        {{--                    <div class="stats-item d-flex align-items-center">--}}
        {{--                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"--}}
        {{--                              class="purecounter"></span>--}}
        {{--                        <p><strong>Projects</strong> adipisci atque cum quia aut</p>--}}
        {{--                    </div><!-- End Stats Item -->--}}

        {{--                    <div class="stats-item d-flex align-items-center">--}}
        {{--                        <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1"--}}
        {{--                              class="purecounter"></span>--}}
        {{--                        <p><strong>Hours Of Support</strong> aut commodi quaerat</p>--}}
        {{--                    </div><!-- End Stats Item -->--}}

        {{--                </div>--}}

        {{--            </div>--}}

        {{--        </div>--}}
        {{--    </section>--}}
        <!-- End Stats Counter Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container text-center"

                 style=" background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{$about?->thumbnail}}) center center; background-size: cover;"
                 data-aos="zoom-out">
                <a href="{{$about?->youtube_video_link}}" class="glightbox play-btn"></a>
                <h3>{{$about?->youtube_video_title}}</h3>
                <p>{{$about?->youtube_video_description}}</p>
            </div>
        </section><!-- End Call To Action Section -->

        <section id="recent-posts" class="recent-posts sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>اخر الاخبار</h2>
                    <p>شاهد اخر اخبار وانجازات المقرأه</p>
                </div>

                <div class="row gy-4">

                    @foreach($posts->take(5) as $post)
                        <div class="col-xl-4 col-md-6">
                            <article>

                                <div class="post-img">
                                    <img src="{{$post->thumbnail}}" alt="" width="100%" class="img-fluid">
                                </div>


                                <h2 class="title">
                                    <a href="{{route('blog.show', $post)}}">{{$post->title}}</a>
                                </h2>
                                <div class="post-meta">
                                    <time datetime="2021-01-01">{{$post->created_at->format('d M Y')}}</time>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                    @endforeach


                </div><!-- End recent posts list -->

            </div>
        </section>
        <!-- ======= Our Services Section ======= -->

        <!-- ======= Testimonials Section ======= -->
        @if($testimonials->isNotEmpty())

            <section id="testimonials" class="testimonials">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>{{__("Testimonials")}}</h2>
                        <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
                    </div>

                    <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">

                            @foreach($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div class="testimonial-wrap">
                                        <div class="testimonial-item">
                                            <div class="d-flex align-items-center">
                                                <img src="{{$testimonial->image}}"
                                                     class="testimonial-img flex-shrink-0" alt="">
                                                <div>
                                                    <h3>{{$testimonial->name}}</h3>
                                                    <h4>{{$testimonial->position}}</h4>

                                                </div>
                                            </div>
                                            <p>
                                                <i class="bi bi-quote quote-icon-right"></i>
                                                {{$testimonial->content}}
                                                <i class="bi bi-quote quote-icon-left"></i>

                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->
                            @endforeach


                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section><!-- End Testimonials Section -->
        @endif


        <!-- ======= Our Team Section ======= -->
        @if($Team->isNotEmpty())
            <section id="team" class="team">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>{{__("Our Team")}}</h2>
                        <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
                    </div>

                    <div class="row gy-4" style="justify-content: center">

                        @foreach($Team as $member)
                            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                                <div class="member">
                                    <img src="{{$member->image}}" class="img-fluid" alt="">
                                    <h4>{{$member->name}}</h4>
                                    <div class="d-flex flex-wrap justify-content-center mt-2">
                                       @foreach($member->readings as $reading)
                                            <span class="badge badge-primary">{{$reading}}</span>
                                       @endforeach
                                    </div>
                                </div>
                            </div><!-- End Team Member -->

                        @endforeach


                    </div>

                </div>
            </section><!-- End Our Team Section -->

        @endif


        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="content px-xl-5">
                            <h3>Frequently Asked <strong>Questions</strong></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-8">

                        <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-content-1">
                                        <span class="num">1.</span>
                                        Non consectetur a erat nam at lectus urna duis?
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                        laoreet
                                        non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus
                                        dolor
                                        purus non.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-content-2">
                                        <span class="num">2.</span>
                                        Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum
                                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque
                                        eleifend
                                        donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros
                                        in
                                        cursus turpis massa tincidunt dui.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-content-3">
                                        <span class="num">3.</span>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                        Faucibus
                                        pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.
                                        Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis
                                        tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-content-4">
                                        <span class="num">4.</span>
                                        Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum
                                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque
                                        eleifend
                                        donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros
                                        in
                                        cursus turpis massa tincidunt dui.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faq-content-5">
                                        <span class="num">5.</span>
                                        Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim
                                        suspendisse in
                                        est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                        suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <!-- End Recent Blog Posts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contact</h2>
                    <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
                </div>

                <div class="row gx-lg-0 gy-4">

                    <div class="col-lg-4">

                        <div class="info-container d-flex flex-column align-items-center justify-content-center">
                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Location:</h4>
                                    <p>A108 Adam Street, New York, NY 535022</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>info@example.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Call:</h4>
                                    <p>+1 5589 55488 55</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-clock flex-shrink-0"></i>
                                <div>
                                    <h4>Open Hours:</h4>
                                    <p>Mon-Sat: 11AM - 23PM</p>
                                </div>
                            </div><!-- End Info Item -->
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                           placeholder="Your Name"
                                           required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                       placeholder="Subject"
                                       required>
                            </div>
                            <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="7" placeholder="Message"
                                      required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <x-footer/>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>


</x-app-layout>
