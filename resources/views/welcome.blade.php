<x-app-layout>


    <!-- ======= Header ======= -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero" style="">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-center ">
                    <h2 class="text-black">المقرأة الليبية للقرآن الكريم وعلومه</h2>
                    <p class="text-black">مؤسسة تطوعية ُتعنى بتعلـيم القرآن الكريـم وعلومـه لجميع الشرائح من كافة الأعمار والجنسيات</p>
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
                <div class="row gy-4 mt-5" style="display: flex; flex-direction: row-reverse; justify-content: center; place-items: center; ">

                    <x-stat-card title="عدد الطلبة" value="871" icon="bi bi-person-fill"/>
                    <x-stat-card title="عدد المعلمين والمعلمات" value="117" icon="bi bi-briefcase-fill"/>
{{--                    <x-stat-card title="عدد المجموعات" value="120" icon="bi bi-people-fill"/>--}}
                    <x-stat-card title="عدد الختمات المنجزة" value="161.95" icon="bi bi-book-fill"/>
                    <x-stat-card title="عدد الاثمان المنجزة" value="77736.59" icon="bi bi-bookmark-check-fill"/>

                </div>
            </div>
        </div>

    </section>
    <section id="call-to-action" class="call-to-action">
        <div class="container text-center"

             style=" background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{$about?->thumbnail}}) center center; background-size: cover;"
             data-aos="zoom-out">
            <a href="{{$about?->youtube_video_link}}" class="glightbox play-btn"></a>
            <h3>{{$about?->youtube_video_title}}</h3>
            <p>{{$about?->youtube_video_description}}</p>
        </div>
    </section>

    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>عن المؤسسة</h2>
                    <p>المقرأة الليبية للقرآن الكريم وعلومه مؤسسة تطوعية تُعنى بتعليم القرآن الكريم وعلومه لجميع الشرائح، أُسست في أغسطس من عام 2020، وانطلقت تجريبيا في ديسمبر من العام نفسه، وكانت الانطلاقة الفعلية في يناير من عام 2021.</p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <h3>مؤسسة تعليمية متكاملة</h3>
                        <img src="{{asset('images/1.jpeg')}}" class="img-fluid rounded-4 mb-4" alt="مقرأة ليبية">
                        <p>تشرف المقرأة على مناشط مصاحبة لتعليم القرآن الكريم وعلومه، إذ تقيم المخيمات القرآنية لمحفظي ومحفظات المقرأة، كما تقيم مسابقات داخلية لطلبة المقرأة . كما تشرف المقرأة على تصوير ختمات بأصوات القراء الليبيين من مختلف المدن والأعمار، فكانت البداية بالختمة الليبية، ثم ختمة قراء المستقبل، ثم ختمة الأوائل. كل هذا والنشاط الأساسي (تعليم القرآن الكريم وعلومه)، يسير بسلالة ودون تأثير المناشط المصاحبة.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            {{--                            <p class="fst-italic">--}}
                            {{--                                المقرأة الليبية للقرآن الكريم وعلومه مؤسسة تطوعية تُعنى بتعليم القرآن الكريم وعلومه لجميع الشرائح، أُسست في أغسطس من عام 2020، وانطلقت تجريبيا في ديسمبر من العام نفسه، وكانت الانطلاقة الفعلية في يناير من عام 2021.--}}
                            {{--                            </p>--}}
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i> تضم المقرأة عددًا كبيرًا من الطلاب والطالبات
                                    من مختلف أرجاء المعمورة، بالإضافة إلى مجموعة من المعلمين والمعلمات ذوي الخبرة في
                                    تعليم القرآن الكريم.
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i>تشتمل على كادر إداري في إدارتي التحفيظ لقسمي
                                    الإناث والذكور، وإدارة التسجيل، وإدارة البيانات، وإدارة الإعلام، وغيرها من الإدارات.
                                </li>
                                <li><i class="bi bi-check-circle-fill"></i>تضمّ المقرأة أيضا طلبة من غير الناطقين
                                    بالعربية.
                                </li>
                            </ul>
                            <p>
                                وتواصل المقرأة تقديم خدماتها بكفاءة، مستمرة في تنفيذ نشاطاتها الأساسية والمصاحبة بما يتماشى مع رسالتها التعليمية والتربوية.
                            </p>

                            <div class="position-relative mt-4">
                                <img src="{{asset('images/2.jpeg')}}" class="img-fluid rounded-4" alt="أنشطة المقرأة">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- End About Us Section -->

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
        <!-- End Call To Action Section -->


        <section id="recent-posts" class="recent-posts sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>الدروس</h2>
                    <p>شاهد اخر اخبار وانجازات المقرأه</p>
                </div>

                <div class="row gy-4">

                    @foreach($lessons as $tag)
                        <div class="col-xl-4 col-md-6">
                            <article>

                                <div class="post-img">
                                    <img src="{{asset('storage/'.$tag->posts->first()?->thumbnail)}}" alt=""
                                         width="100%"
                                         class="img-fluid">
                                </div>


                                <h2 class="title">
                                    <a href="{{route('blog.index', $tag)}}">{{$tag->name}}</a>
                                </h2>
                                <div class="post-meta">
                                    <time
                                        datetime="2021-01-01">{{$tag->posts->first()?->created_at->format('d M Y')}}</time>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                    @endforeach


                </div><!-- End recent posts list -->

            </div>
        </section>
        <section id="recent-posts" class="recent-posts sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>الخاتمات</h2>
                    <p>شاهد اخر اخبار وانجازات المقرأه</p>
                </div>

                <div class="row gy-4">

                    @foreach($finishing as $tag)
                        <div class="col-xl-4 col-md-6">
                            <article>

                                <div class="post-img">
                                    <img src="{{asset('storage/'.$tag->posts->first()?->thumbnail)}}" alt=""
                                         width="100%"
                                         class="img-fluid">
                                </div>


                                <h2 class="title">
                                    <a href="{{route('blog.index', $tag)}}">{{$tag->name}}</a>
                                </h2>
                                <div class="post-meta">
                                    <time
                                        datetime="2021-01-01">{{$tag->posts->first()?->created_at->format('d M Y')}}</time>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                    @endforeach


                </div><!-- End recent posts list -->

            </div>
        </section>
        <section id="recent-posts" class="recent-posts sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>المسابقات</h2>
                    <p>شاهد اخر اخبار وانجازات المقرأه</p>
                </div>

                <div class="row gy-4">

                    @foreach($competitions as $tag)
                        <div class="col-xl-4 col-md-6">
                            <article>

                                <div class="post-img">
                                    <img src="{{asset('storage/'.$tag->posts->first()?->thumbnail)}}" alt=""
                                         width="100%"
                                         class="img-fluid">
                                </div>


                                <h2 class="title">
                                    <a href="{{route('blog.index', $tag)}}">{{$tag->name}}</a>
                                </h2>
                                <div class="post-meta">
                                    <time
                                        datetime="2021-01-01">{{$tag->posts->first()?->created_at->format('d M Y')}}</time>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                    @endforeach


                </div><!-- End recent posts list -->

            </div>
        </section>
        <section id="recent-posts" class="recent-posts sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>المخيمات</h2>
                    <p>شاهد اخر اخبار وانجازات المقرأه</p>
                </div>

                <div class="row gy-4">

                    @foreach($camps as $tag)
                        <div class="col-xl-4 col-md-6">
                            <article>

                                <div class="post-img">
                                    <img src="{{asset('storage/'.$tag->posts->first()?->thumbnail)}}" alt=""
                                         width="100%"
                                         class="img-fluid">
                                </div>


                                <h2 class="title">
                                    <a href="{{route('blog.index', $tag)}}">{{$tag->name}}</a>
                                </h2>
                                <div class="post-meta">
                                    <time
                                        datetime="2021-01-01">{{$tag->posts->first()?->created_at->format('d M Y')}}</time>
                                </div>

                            </article>
                        </div><!-- End post list item -->

                    @endforeach


                </div><!-- End recent posts list -->

            </div>
        </section>
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
                                    <img src="{{asset('storage/'.$post->thumbnail)}}" alt="" width="100%"
                                         class="img-fluid">
                                </div>


                                <h2 class="title">
                                    <a href="{{route('post.show', $post)}}">{{$post->title}}</a>
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
                        <h2>شهادات</h2>
                        <p>تجارب وآراء عملائنا الكرام حول خدماتنا وجودة التعليم في المقرأة الليبية للقرآن الكريم وعلومه</p>
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
                        <p>تتكون فرقينا من نخبة من المحفظين والمحفظات المتخصصين في تعليم القرآن الكريم وعلومه، يعملون بتفانٍ وإخلاص لتقديم أفضل تجربة تعليمية لطلابنا.</p>
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
                            <h3>الأسئلة <strong>الشائعة</strong></h3>
                            <p>
                                هذا القسم يحتوي على الأسئلة المتكررة التي قد تكون لديكم حول المقرأة الليبية للقرآن الكريم وعلومه، تجدون هنا إجابات مفصلة لتسهيل حصولكم على المعلومات.
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-8">

                        <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

                            @foreach($fqas as $index => $fqa)
                                <div class="accordion-item">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#faq-content-{{$index+1}}">
                                            <span class="num">{{$index+1}}.</span>
                                            {{$fqa->question}}
                                        </button>
                                    </h3>
                                    <div id="faq-content-{{$index+1}}" class="accordion-collapse collapse"
                                         data-bs-parent="#faqlist">
                                        <div class="accordion-body">
                                            {{$fqa->answer}}
                                        </div>
                                    </div>
                                </div><!-- # Faq item-->

                            @endforeach


                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <!-- End Recent Blog Posts Section -->

        <!-- ======= Contact Section ======= -->
        <livewire:contact-section/>

    </main><!-- End #main -->


</x-app-layout>
