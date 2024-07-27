<x-app-layout>
    <!-- ======= Header ======= -->
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>{{$tag->name}}</h2>
                            <p>{{$tag->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="/">الرئيسية</a></li>
                        <li>{{$tag->name}}</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 posts-list">

                    @foreach($posts as $post)
                        <div class="col-xl-4 col-md-6">
                            <article>

                                <div class="post-img">
                                    <img src="{{$post->thumbnail}}" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">{{$tag->name}}</p>

                                <h2 class="title">
                                    <a href="{{route('post.show', $post)}}">{{$post->title}}</a>
                                </h2>

                                <div class="d-flex align-items-center">

                                    <div class="post-meta">
                                        <p class="post-date">
                                            <time
                                                datetime="{{ $post->created_at->toDateString() }}">{{$post->created_at->format('M j, Y')}}</time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div><!-- End post list item -->
                    @endforeach

                </div><!-- End blog posts list -->

                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div><!-- End blog pagination -->

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

</x-app-layout>
