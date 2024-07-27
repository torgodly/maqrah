<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>المقرأة الليبية<span>.</span></h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/">الرئيسية</a></li>
                <li><a href="#about">عن المؤسسة</a></li>
                <li><a href="#team">الفريق</a></li>
                <li class="dropdown"><a href="#">
                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                        <span>التصنيفات</span>
                        </a>
                    <ul>
                        @foreach($tags as $tag)
                            <li><a href="{{ route('blog.index', $tag) }}">{{ $tag->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="#faq">الأسئلة الشائعة</a></li>
                <li><a href="#testimonials">الشهادات</a></li>
                <li><a href="#contact">اتصل بنا</a></li>
            </ul>

        </nav><!-- .navbar -->

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
</header><!-- End Header -->
