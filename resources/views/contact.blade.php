@extends('layouts.site')
@section('content')
<main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>BOG'LANISH</h2>
                <ol>
                    <li><a href="{{ route('home')}}">BOSH SAHIFA</a></li>
                    <li>BOG'LANISH</li>
                </ol>
            </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Bizning manzil</h3>
                                <p>Xorazm viloyati,Urganch shahri Al-xorazmiy ko'chasi</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-envelope"></i>
                                <h3>e-mail</h3>
                                <p>IT school@gmail.com<br>SamandarovShohnurbek@gmail.ru</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-phone-call"></i>
                                <h3>Telefon raqamlarimiz</h3>
                                <p>+998972119540<br>+998941109540</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="#" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="ismingiz" class="form-control" id="name" placeholder="Ismingizni kiritish" data-rule="minlen:4" data-msg="Ismingizni kamida 4 ta belgi bolishi kerak" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="e-mailni kiriting" data-rule="email" data-msg="emailingizni tog'ri kiriting" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Mavzu" data-rule="minlen:3" data-msg="Mavzuni kiriting 3ta belgidan oz bolmasin. " />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Habar yozilmagan iltimos habaringizni yozing" placeholder="Yozish"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Kuting</div>
                            <div class="error-message">Qaytadan urinib Ko'ring</div>
                            <div class="sent-message">Sizning xabaringiz qabul qilindi.E'tiboringiz rahmat!</div>
                        </div>
                        <div class="text-center"><button type="submit">Xabarni yuborish</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->


</main><!-- End #main -->

@endsection
