@extends('layouts.site')
@section('content')
<main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Blog</h2>

                <ol>
                    <li><a href="{{ route('home') }}">BOSH SAHIFA</a></li>
                    <li>Blog</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry">

                        <div class="entry-img">
                            <img src="{{ asset('assets/img/blog-post-1.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            Bizga kelib tushayotgan savol va shikoyatlarga o'z vaqtida javob berib borayotgan hodimlarimiz
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="icofont-user"></i> Vaisov Azamat
                                </li>
                                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <time datetime="2020-05-08">May 8,2020</time></li>
                                <li class="d-flex align-items-center"><i class="icofont-comment"></i>12 ta xabar
                                </li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>Sizning savollaringizga imkon qadar javob berishni harakat qilamiz.Kamchiliklarimiz uchun uzr so'raymiz.Agar sizga javob to'la qonli bizga bog'lanishingiz mumkin.Tel raqami<b> +98930907130</b>

                            </p>

                        </div>

                    </article><!-- End blog entry -->

                    <article class="entry">

                        <div class="entry-img">
                            <img src="{{ asset('assets/img/blog-post-2.jpg') }}" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            Marketing haqida mutahasisimiz
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="icofont-user"></i>Qalanadrov Azamat</li>
                                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <time datetime="2020-05-08">May 8,2020</time></li>
                                <li class="d-flex align-items-center"><i class="icofont-comment"></i> 6 ta xabar
                                </li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                Marketing boyicha javoblarimiz sizga mavur kelmagan bo'lsa siz bizning mutahhasis bilan bemalol bog'lanishingiz mumkin.Mutahahimizning <i>Telefon raqami:</i><b> +998999640722</b>
                            </p>
                        </div>

                    </article><!-- End blog entry -->



                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li class="disabled"><i class="icofont-rounded-left"></i></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
                        </ul>
                    </div>

                </div><!-- End blog entries list -->

                <div class="col-lg-4">
                    <div class="sidebar">

                        <h3 class="sidebar-title">Qidirish</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Kategoriylar</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <li><a href="#">Maktabimiz haqida <span>(20)</span></a></li>
                                <li><a href="#">Dasturlash haqida<span>(102)</span></a></li>
                                <li><a href="#">web loyihlarimiz haqida<span>(25)</span></a></li>
                                <li><a href="#">Dizaynerlik  haqida<span>(29)</span></a></li>
                                <li><a href="#">Mutahasislarimiz haqida <span>(8)</span></a></li>
                                <li><a href="#">Maktabimizning rejalari haqida<span>(44)</span></a></li>
                            </ul>

                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Jo'natilgan postlar</h3>
                        <div class="sidebar-item recent-posts">
                            <div class="post-item clearfix">
                                <img src="{{ asset('assets/img/recent-posts-1.jpg') }}" alt="">
                                <h4>Maktabingiz boshqa IT schoolardan qanday farq qiladi?</h4>
                                <time datetime="2020-05-03">May 3,2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="{{ asset('assets/img/recent-posts-2.jpg') }}" alt="">
                                <h4>Maktabingizda boshqa millat vakillari ham bormi?</h4>
                                <time datetime="2020-05-02">May 2,2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="{{ asset('assets/img/recent-posts-3.jpg') }}" alt="">
                                <h4>Maktabingizda Karantin choralari qanday olib borilmoqda?</h4>
                                <time datetime="2020-05-02">May 2,2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="{{ asset('assets/img/recent-posts-4.jpg') }}" alt="">
                                <h4>Karatin davrida o'quvchilarga qanday imkoniyatlar yaratilgan?</h4>
                                <time datetime="2020-05-01">May 1,2020</time>
                            </div>
                            <div class="post-item clearfix">
                                <img src="{{ asset('assets/img/recent-posts-5.jpg') }}" alt="">
                                <h4>Menejerlik faoliyatidan tanishmoqchiman?</h4>
                                <time datetime="2020-05-01">May 1,2020</time>
                            </div>
                        </div><!-- End sidebar recent posts-->

                        <h3 class="sidebar-title">Teglar</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                <li><a href="{{ route('about') }}">IT</a></li>
                                <li><a href="{{ route('blog') }}">Biznes</a></li>
                                <li><a href="{{ route('team') }}">Web</a></li>
                                <li><a href="{{ route('home') }}">REACT</a></li>
                                <li><a href="{{ route('team') }}">Design</a></li>
                                <li><a href="{{ route('home') }}">Ofis</a></li>
                                <li><a href="{{ route('home') }}">Maktab</a></li>
                                <li><a href="{{ route('team') }}">Ish joyi</a></li>
                                <li><a href="{{ route('team') }}">Marketing</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                            </ul>

                        </div><!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div><!-- End .row -->

        </div><!-- End .container -->

    </section><!-- End Blog Section -->

</main><!-- End #main -->
@endsection
