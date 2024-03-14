<x-app-layout>


    <!-- ======= Header ======= -->
    <x-header/>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" dir="auto">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Blog Details</h2>
                            <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>{{$post->title}}</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row g-5">

                    <div class="col-lg-8">

                        <article class="blog-details">

                            <div class="post-img">
                                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="title">{{$post->title}}</h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="blog-details.html">
                                            <time datetime="2020-01-01">{{$post->created_at->format('Y-m-d')}}</time>
                                        </a></li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                <div id="carouselExample" class="carousel slide">
                                    <div class="carousel-inner">
                                        @foreach($post->media as $media)
                                            <div class="carousel-item active">
                                                <img src="{{$media->getUrl()}}" class="d-block w-100" alt="...">
                                            </div>
                                        @endforeach
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExample" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExample" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                {!! $post->body !!}
                            </div><!-- End post content -->


                        </article><!-- End blog post -->


                        <!-- End blog comments -->

                    </div>

                    <div class="col-lg-4">
                        @foreach($posts->take(5) as $post)

                        <div class="sidebar">
                                <div class="">
                                    <article>

                                        <div class="post-img">
                                            {{--                                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">--}}
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



                        </div><!-- End Blog Sidebar -->
                        @endforeach

                    </div>
                </div>

            </div>
        </section><!-- End Blog Details Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <x-footer/>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
</x-app-layout>
