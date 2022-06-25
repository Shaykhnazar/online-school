@extends('layouts.site')
@section('content')

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>BIZ HAQIMIZDA</h2>
                <ol>
                    <li><a href="{{ route('home') }}">BOSH SAHIFA</a></li>
                    <li>BIZ HAQIMIZDA</li>
                </ol>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('assets/img/IMG_20191007_155053_851.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <h3>Bizning maktabimizda iqtidorli yoshlar ta'lim oladi</h3>
                    <p class="font-italic">
                        O'quvchilarimizning qiziqlariga biz guruhlarga ajratganmiz
                    </p>
                    <ul>
                        <li><i class="icofont-check-circled"></i> Web dasturlash boyicha oqiydigan</li>
                        <li><i class="icofont-check-circled"></i> Garfik dizaynerlik boyicha</li>
                        <li><i class="icofont-check-circled"></i> IT menejerlik kurslariga</li>
                    </ul>
                    <p>
                        Maktabimizda talim olayotgan talabalar o'z ishining yetuk mutahhasislikiga qiziqadigan o'quvchilardan tashkil topgan.Bizning niyatimiz ham ana shunday yoshlarga talim tarbiya berishdan iborat.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
        <div class="container">

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">232</span>
                    <p>MIJOZLARIMIZ</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">521</span>
                    <p>LOYIHALARIMIZ</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">1,463</span>
                    <p>SHU KUNGA QADAR BARCHA LOYIHALARIMIZ</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up">15</span>
                    <p>KOMANDAMIZDAGI DASTURCHILAR</p>
                </div>

            </div>

        </div>
    </section><!-- End Facts Section -->

    <!-- ======= Our Skills Section ======= -->
    <section class="skills" data-aos="fade-up">
        <div class="container">

            <div class="section-title">
                <h2>WEB BO'YICHA BILIMIMIZ </h2>
                <p>Hozirgi kunda maktabimizda web dasturlash bo'yicha daraslar qizg'in olib borilmoqda.Hodimlarimizning bilim qobilyati quyidagi diagramada akslantirib o'tilgan.</p>
            </div>

            <div class="skills-content">

                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">HTML <i class="val">100%</i></span>
                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">CSS <i class="val">90%</i></span>
                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">JavaScript <i class="val">75%</i></span>
                    </div>
                </div>

                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">PHP <i class="val">55%</i></span>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Our Skills Section -->

    <!-- ======= Tetstimonials Section ======= -->
    <section class="testimonials" data-aos="fade-up">
        <div class="container">

            <div class="section-title">
                <h2>CHET ELLIK HAMKORLARIMIZ</h2>
                <p>Biz o'zimizning mutahhasislarimizdan tashqari chet eldagi hamkasblarimiz bilan ham ma'lumot almashib turamiz.<br><b>Bular:</b></p>
            </div>

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>web dasturchi</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Saul Goodman web dasturlash bo'yicha tajribali mutahhahislardan biri hisoblanadi jahonda.Biz bu hamkasbimizdan juda ko'p yangiliklarni va uning yaratgan loyihalarini o'quvchilarimizga mustaqil ta'lim sifatida o'rgatamiz.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="{{ asset('assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Dizayner</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Sara Wilsson eng tajribali Dizaynerlardan biri hisoblanadi.Uning dizayn namunalaridan bizning dasturlash foydanilashadi.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="{{ asset('assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>MENEJER</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Jena Karlis menejerlik sohasida jahondagi yetuk menejerlaridan biri hisoblanadi.U bilan tez tez tajriba almashib turamiz.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Dasturchi</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Matt Brandon eng ilg'or dasturchilardan biri hisoblanadi.U yaratgan dasturlash hozirgi kunda bizga juda as qotmoqda.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="{{ asset('assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Tester</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        John Larson Amerikalik hamkasblarimizdan birsi bo'lib u onlayn maktabimizda olib borilalayotgan xalqaro bolimdagi web saytimiz xato kamchilikimizni tekshirib boradi.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

            </div>

        </div>
    </section><!-- End Ttstimonials Section -->

</main><!-- End #main -->
@endsection
