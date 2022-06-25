@extends('layouts.site')
@section('content')
<main id="main">

    <!-- ======= Our Team Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>BIZNING JAMOAMIZ</h2>
                <ol>
                    <li><a href="{{ route('home') }}">BOSH SAHIFA</a></li>
                    <li>BIZNING JAMOAMIZ</li>
                </ol>
            </div>

        </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Team Section ======= -->
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/IMG_20190604_135417_164.jpg') }}" class="img-fluid" alt="">

                        </div>
                        <div class="member-info">
                            <h4>SAMANDAROV SHOHNURBEK</h4>
                            <span>IT SCHOOL RAHBARI </span>
                            <p>Samandarov Shohnurbek 1999-yil Xorazm viloyati Hazarasp tumanida tug'ilgan.2 yildan buyon IT school da rahbarlik qilib keladi.Bog'lanish uchun telefon raqamlari<b> +998972119540</b><br>
                                <strong> +998941109540</strong></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/jasur.webp') }}" class="img-fluid" alt="">

                        </div>
                        <div class="member-info">
                            <h4>YUSUPOV XURSANDBEK</h4>
                            <span>WEB DASTURLASH BO'YICHA MENEJER</span>
                            <p>Yusupov Xursandbek 1999-yilda Xorazm viloyati Hazarasp tumanida tug'ilgan.2-yildan buyon web dasturlash MENEJERi sifatida ishlab o'quvchilarimizga dars berib kelmoqda.Bog'lanish uchun tel raqami:<b>+998995680234</b><p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>Bekturdiyev Zarif</h4>
                            <span>JAVADAN MUTAHHASIS</span>
                            <p>Bekturdiyev Zarif 1999-yil Xorazm viloyati Urganch sahrida tug'ilgan.Maktabimizda 2 yildan beri ishlab keladi.tel raqami <b>+998999685440</b></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/IMG_20190509_223353_350.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>BOBOJONOV XUSHNUDBEK</h4>
                            <span>JAVASCRIPT MUTAHHASIS</span>
                            <p>Bobojonov Xushnudbek 1999-yil Xorazm viloyati Bog'ot tumanida tug'ilgan.2018-yildan beri maktabimizda faoliyat yuritib kelmoqda .<strong>Tel raqami:</strong> <br> <b>+998999659535</b></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img class="jorabek" src="{{ asset('assets/img/team/jorabek.jpg') }}" class="img-fluid" alt="" >

                        </div>
                        <div class="member-info">
                            <h4>YO'LDOSHEV JAMSHIDBEK</h4>
                            <span>DASTURCHI</span>
                            <p>Yoldoshev Jamshidbek 1999-yil Xorazm viloyati Hazarasp tumanida tug'ilgan.1 yildab buyon bizning maktabda faoliyatini yuritib kelmoqda va tajribali mutahhasislarimizdan biri hisoblanadi.
                                <u>Tel raqami</u><br> <b>+998943155029</b>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="{{ asset('assets/img/team-1.jpg') }}" class="img-fluid" alt="">

                        </div>
                        <div class="member-info">
                            <h4>SHOKIROV DONIYOR</h4>
                            <span>BULGARTER</span>
                            <p>Shokirov Doniyor 1999-yil Xorazm viloyati Hazarasp tumanida tug'ilgan.Maktabimizda bulgarterlik faoliyati bilan shug'ullanadi. Telefon Raqami:
                                <b><u>+998995082902</u></b>
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->

</main><!-- End #main -->
@endsection
