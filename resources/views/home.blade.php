@extends('layouts.site')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animated fadeInDown"><span>IT MAKTABIMIZGA</span> XUSH KELIBSIZ</h2>
                    <p class="animated fadeInUp">Bizning IT maktabimizda siz sifatli jahon andozalariga mos holda ta'lim olishingiz mumkin.</p>
                    <a href="" class="btn-get-started animated fadeInUp">BATAFSIL...</a>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animated fadeInDown">BIZNING O'QUVCHILAR</h2>
                    <p class="animated fadeInUp">IT SCHOOL makatabimizda siz o'zingizni qiziqtirgan yo'nalishlar bo'yicha talim berib boriladi va o'quvchilar bepul yotoqxona bilan taminlanadi (uzoqdan kelganlar uchun).</p>
                    <a href="" class="btn btn-danger btn-get-started animated fadeInUp">BATAFSIL...</a>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animated fadeInDown">BIZNING MAKTAB</h2>
                    <p class="animated fadeInUp">bizning maktabda jahon standartlariga javob beradigan kompyuterlar va uzliksiz internetni taminlovchi yangi rusumdagi WIFIlar o'rnatilgan.</p>
                    <a href="" class="btn btn-warning btn-get-started animated fadeInUp">BATAFSIL...</a>
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Services Section ======= -->
        <section class="services">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-pink">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4 class="title"><a href="">SPORT MASHG'ULOTLARI</a></h4>
                            <p class="description">Maktabimizda sog'lom turmush tarziga ham rioya qilinadi shunga asosan o'quvchilar o'rtasida sportning bir nechta sport turi bo'yicha musobaqalar ham o'tkazib turiladi.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box icon-box-cyan">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4 class="title"><a href="">KUTUBXONA</a></h4>
                            <p class="description">Darsdan bo'sh vaqtda o'quvchilarning vaqtlarini samarali o'tkazishlari uchun maktabimizda kutubxona ham mavjud.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-green">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">DARS VAQTI</a></h4>
                            <p class="description">Darslar vaqtlari o'quvchilarning istagi va mutaxasisslarimizning hohishinga qarab kuiga 5 saot qilib belgilangan.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-blue">
                            <div class="icon"><i class="bx bx-world"></i></div>
                            <h4 class="title"><a href="">ONLAYN DARSLIKLAR</a></h4>
                            <p class="description">IT sohasi bo'yicha ham bir necha hamkor davlatlar bilan ham hamkorlikda bir nechta onlayn darsliklarni almashib o'quvchilar orasida bilimlarini bo'lishish imkoniyati ham yaratilgan.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Why Us Section ======= -->
        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 video-box">
                        <img src="{{ asset('assets/img/IMG_20191022_222550_952.jpg') }}" class="img-fluid" alt="">
                        <a href="https://www.ITschool.com" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href="">BIOMETRIK TADQIQOTLAR</a></h4>
                            <p class="description">Hozirgi texnalogiyalar rivojlangan paytda biz biometrik tadqiqotlariga ham o'z hissamizni qo'shish maqsadida bir nechta tajribalar o'tkazib ko'rdik.</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="">O'QUVCHILARGA RAG'BATLANTIRISHLAR</a></h4>
                            <p class="description">o'quvchilarni rag'batlantirish ularni IT sohasiga qiziqishlarini kuchaytirish maqsadida bir necha tanlovlar uyushtirib g'olib bo'lganlarga rag'batlar va bonuslar berilib kelinmoqda.</p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Features Section ======= -->
        <section class="features">
            <div class="container">

                <div class="section-title">
                    <h2>ISH JARAYONIDAN LAVHALAR</h2>
                    <p>Maktabimizdagi ish jarayonlari juda qiziq va tartib intizomli kechadi o'qtuvchilarimiz va o'quvchilar o'rtasida qo'l urilgan web loyihalar va maktabimizning reytingidan ham bilib olishingiz mumkin.Qisqachako'rib olishingiz mumkin:</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/maktab1.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4">
                        <h3>O'QUVCHILARNING IT SOHASIGA BO'LGAN QIZIQISHLARI</h3>
                        <p class="font-italic">
                            Bizning maktabdagi o'quvchilarda 2 ta asosiy shior bor. Bular:
                        </p>
                        <ul>
                            <li><i class="icofont-check"></i><B>ERINMAY TINMAY BILIM OLAMIZ</B> </li>
                            <li><i class="icofont-check"></i> <B>ZAMANAVIY BILIM OLISH KELAJAKIMIZ UCHUN MUHIM</B>.</li>
                        </ul>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="{{ asset('assets/img/maktab2.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>IT MAKTABIMIZNING TEZ FURSATDAGI O'SISHI</h3>
                        <p class="font-italic">
                            Mamlakatimizda tez fursatda rivojlanayotgan sohalar biri bu IT sohasidir.Bu borada bizning maktabimiz o'quvchilar ham jim turgani yo'q.
                        </p>
                        <p>
                            O'qituvchilarimiz va maktabimiz oldi o'quvchilari bu borada o'zining yangi loyihlar olib bormoqdalar va ular respublikada bizning Xorazmdagi maktabimizni maktabimizning reytingini oldi o'rinlarda bo'lishini ta'minlab kelmoqdalar.
                        </p>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/img/maktab3.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5">
                        <h3>MAKTABIMIZDA ONLAYN DARSLAR HAM MAVJUD.</h3>
                        <p>Hozirgi kunda onlayn darslarga talab kuchli bo'lganligi sababli onlayn darslarni biz quyidagi platformalarda amalga oshiramiz:</p>
                        <ul>
                            <li><i class="icofont-check"></i> Telegramda IT SCHOOL XORAZM KANALIDA</li>
                            <li><i class="icofont-check"></i> Facebookda IT SCHOOL XORAZM GURUHIDA</li>
                            <li><i class="icofont-check"></i> ZOOM ilovasi orqali</li>
                        </ul>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="{{ asset('assets/img/maktab4.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>BIZNING MARKAZIMIZDA DARS MASHG'ULOTLARI ANIQ VAQTLARDA OLIB BORILADI</h3>
                        <p class="font-italic">
                            Bilamizki,har bir maktabda dars mashg'ulotlari vaqti aniq reja asosida amalga oshirilishi kerak.
                        </p>
                        <p>
                            Bizning har hafta uchun aniq dars mashg'ulotlarining vaqti belgilanib duribdi va o'quvchilarimizning iltimosiga asosan qo'shimcha darslar ham qo'yilgan.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->

    </main><!-- End #main -->
@endsection
