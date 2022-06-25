@extends('layouts.site')
@section('content')
<main id="main">

    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>XIZMATLAR</h2>
                <ol>
                    <li><a href="{{ route('home') }}">Bosh sahifa</a></li>
                    <li>Bizning xizmatlar</li>
                </ol>
            </div>

        </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Services Section ======= -->
    <section class="services">
        <div class="container">

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">

    </section><!-- End Why Us Section -->

    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
        <div class="container">

            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assets/img/service-details-1.jpg') }}" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#">Bizning hizmatlar</a></h4>
                            <p class="card-text">Bizni siz bir necha ijtimoiy tarmoqdagi kanallarimizda kuzatib boring</p>
                            <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Yuqoriga</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assets/img/service-details-2.jpg') }}" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#">Bizning reja</a></h4>
                            <p class="card-text">Bizning asosiy maqsadimiz mamlakatimizga IT sohasiga yetukli kadrlarni tayorlash va mamlakatimizning rivojlanish yo'liga o'z hissamizni qo'shish</p>
                            <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Yuqoriga</a></div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assets/img/service-details-3.jpg') }}" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#">Bizning talablarimiz</a></h4>
                            <p class="card-text">Bizning talabimiz har o'quvchida o'zining shaxsiy kompyuteri va mobile telefoni bo'lishi kerak chunkki,IT sohasini bularsiz tasavvur qilib bo'lmaydi</p>
                            <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Yuqoriga</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ asset('assets/img/service-details-4.jpg') }}" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#">Bizning O'qtuvchilarimiz</a></h4>
                            <p class="card-text">It maktabimizdagi o'qtuvchilarimiz juda ham malakali kadrlardan tashkil topgan .Ular orasida ilmiy ish yoqlab qaytgan tajribalilari ham bor.Biz ular bilan maslahatlashgan holda kamchiliklarimiz yutuqlarimizni dunyodagi shunga oxshagan maktablar bilan taqqoslab turamiz. </p>
                            <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i>Yuqoriga</a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Service Details Section -->

    <!-- ======= Pricing Section ======= -->
    <section class="pricing section-bg" data-aos="fade-up">
        <div class="container">

            <div class="section-title">
                <h2>Narxlar</h2>
                <p>Narxlar odatda onlayn maktablarda qimmat bo'lishiga qaramasdan bizning maktabimizda esa u ancha kelishilgan  va arzonlashrtirilgan holda va buni quyidagilar yordamida ko'rib olishingiz mumkin: </p>
            </div>

            <div class="row no-gutters">

                <div class="col-lg-4 box">
                    <h3>Tekin</h3>
                    <h4>$0<span>Oyiga</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> kutubxonadan foydalanish</li>
                        <li><i class="bx bx-check"></i> Web saytimizga kirish</li>
                        <li><i class="bx bx-check"></i> Wi fi hizmatlaridan foydanalish</li>
                    </ul>
                    <a href="#" class="get-started-btn">Boshlash</a>
                </div>

                <div class="col-lg-4 box featured">
                    <h3>Biznes</h3>
                    <h4>$30<span>Oyiga</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i>Biznes bo'yicha loyihalar</li>
                        <li><i class="bx bx-check"></i>Biznes menejmentiga doir loyihalar</li>
                        <li><i class="bx bx-check"></i> Zamanaviy biznes loyihalar</li>
                        <li><i class="bx bx-check"></i> IT sohasidagi biznes rejalar</li>
                    </ul>
                    <a href="#" class="get-started-btn">Boshlash</a>
                </div>

                <div class="col-lg-4 box">
                    <h3>Dasturlash</h3>
                    <h4>$100<span>Oyiga</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> Web boyicha</li>
                        <li><i class="bx bx-check"></i> Javascript boyicha</li>
                        <li><i class="bx bx-check"></i> Dizaynerlik</li>
                        <li><i class="bx bx-check"></i> C++ bo'yicha</li>
                        <li><i class="bx bx-check"></i>C# boyicha </li>
                    </ul>
                    <a href="#" class="get-started-btn">Boshlash</a>
                </div>

            </div>

        </div>
    </section><!-- End Pricing Section -->

</main><!-- End #main -->
@endsection
