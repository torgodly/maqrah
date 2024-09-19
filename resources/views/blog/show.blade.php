<x-app-layout>






    <!-- ======= Header ======= -->
    <!-- End Header -->
    <main class="main">

        <!-- Page Title -->
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-7 text-center">
                            <h1>{{$tag->name}}</h1>
                            <h2>{{$post->title}}</h2>

                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="/">الرئيسية</a></li>
                        <li>{{$tag->name}}</li>
                        <li>{{$post->title}}</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->


        <div class="container">
            <div class="row">

                <div class="col-lg-8">

                    <!-- Blog Details Section -->
                    <section id="blog-details" class="blog-details section">
                        <div class="container">

                            <article class="article">

                                <div id="carouselExample" class="carousel slide">
                                    <div class="carousel-inner">
                                        @foreach($post->getMedia('images') as $media)
                                            <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                                                <img src="{{ $media->getUrl() }}" class="d-block w-100" alt="...">
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

                                <h2 class="title">{{$post->title}}</h2>

{{--                                <div class="meta-top">--}}
{{--                                    <ul>--}}
{{--                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a--}}
{{--                                                href="blog-details.html">John Doe</a></li>--}}
{{--                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a--}}
{{--                                                href="blog-details.html">--}}
{{--                                                <time datetime="2020-01-01">Jan 1, 2022</time>--}}
{{--                                            </a></li>--}}
{{--                                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a--}}
{{--                                                href="blog-details.html">12 Comments</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div><!-- End meta top -->--}}

                                <div class="content">
                                    {!! $post->content !!}
                                    @if($post->youtube_link)
                                        <section id="call-to-action" class="call-to-action">
                                            <div class="container text-center"

                                                 style=" background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{asset('storage/'.$post?->thumbnail)}}) center center; background-size: cover;"
                                                 data-aos="zoom-out">
                                                <a href="{{$post?->youtube_link}}" class="glightbox play-btn"></a>
                                                <h3>{{$post?->title}}</h3>
{{--                                                <p>{{$about?->youtube_video_description}}</p>--}}
                                            </div>
                                        </section>
                                    @endif
                                </div><!-- End post content -->

                                <div class="meta-bottom">

                                    <ul class="tags">
                                        <li><a href="{{route('blog.index', $tag)}}">{{$tag->name}}</a></li>

                                    </ul>
                                </div><!-- End meta bottom -->

                            </article>

                        </div>
                    </section><!-- /Blog Details Section -->

                    <!-- Blog Author Section -->
{{--                    <section id="blog-author" class="blog-author section">--}}

{{--                        <div class="container">--}}
{{--                            <div class="author-container d-flex align-items-center">--}}
{{--                                <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">--}}
{{--                                <div>--}}
{{--                                    <h4>Jane Smith</h4>--}}
{{--                                    <div class="social-links">--}}
{{--                                        <a href="https://x.com/#"><i class="bi bi-twitter-x"></i></a>--}}
{{--                                        <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>--}}
{{--                                        <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <p>--}}
{{--                                        Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </section><!-- /Blog Author Section -->--}}


                </div>

                <div class="col-lg-4 sidebar">

                    <div class="widgets-container">

{{--                        <!-- Search Widget -->--}}
{{--                        <div class="search-widget widget-item">--}}

{{--                            <h3 class="widget-title">Search</h3>--}}
{{--                            <form action="">--}}
{{--                                <input type="text">--}}
{{--                                <button type="submit" title="Search"><i class="bi bi-search"></i></button>--}}
{{--                            </form>--}}

{{--                        </div><!--/Search Widget -->--}}

{{--                        <!-- Categories Widget -->--}}
{{--                        <div class="categories-widget widget-item">--}}

{{--                            <h3 class="widget-title">Categories</h3>--}}
{{--                            <ul class="mt-3">--}}
{{--                                <li><a href="#">General <span>(25)</span></a></li>--}}
{{--                                <li><a href="#">Lifestyle <span>(12)</span></a></li>--}}
{{--                                <li><a href="#">Travel <span>(5)</span></a></li>--}}
{{--                                <li><a href="#">Design <span>(22)</span></a></li>--}}
{{--                                <li><a href="#">Creative <span>(8)</span></a></li>--}}
{{--                                <li><a href="#">Educaion <span>(14)</span></a></li>--}}
{{--                            </ul>--}}

{{--                        </div><!--/Categories Widget -->--}}

                        <!-- Recent Posts Widget -->
                        <div class="recent-posts-widget widget-item">

                            <h3 class="widget-title">منشورات اخرى</h3>

                            @foreach($posts->take(5) as $Recentpost)
                                <div class="post-item">
                                    <img src="{{asset('storage/'.$Recentpost->thumbnail)}}" alt="" class="flex-shrink-0">
                                    <div>
                                        <h4><a href="{{route('post.show', $Recentpost)}}">{{$Recentpost->title}}</a></h4>
                                        <time datetime="2020-01-01">{{$post->created_at->format('M j, Y')}}</time>
                                    </div>
                                </div>
                            @endforeach


                        </div><!--/Recent Posts Widget -->

                        <!-- Tags Widget -->
                        <div class="tags-widget widget-item">

                            <h3 class="widget-title">تصنيفات اخرا</h3>
                            <ul>
                                @foreach($tags as $otherTaga)
                                    <li><a href="{{route('blog.index', $otherTaga)}}">{{$otherTaga->name}}</a></li>
                                @endforeach
                            </ul>

                        </div><!--/Tags Widget -->

                    </div>

                </div>

            </div>
        </div>

    </main>


</x-app-layout>
