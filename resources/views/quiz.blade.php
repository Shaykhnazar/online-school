@extends('layouts.site')
@section('content')

    <main id="main">
        <div class="container main quiz" style="margin-bottom: 100px">
            <h3 style="text-align: center">Test</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="inro" style="margin-bottom: 30px">
                        <p>Bu turli sohalardagi savollarga ega interaktiv so'rovning namunasidir. “Play” tugmasini bosish bilan boshlang, so‘ngra toifani tanlang va berilgan to‘rtta javobdan birini bosish orqali savollarga javob bering.</p>
                        <p>Viktorina muddati 5 daqiqa bilan cheklangan, agar siz barcha savollarga ertaroq javob bersangiz, viktorina tugaydi.</p>
                        <div class="center"><div class="playBtn">Boshlang!</div></div>
                    </div>

                    <div class="quizstart">
                        <h3>Savollar turkumini tanlang :</h3>
                        <div class="quizcategories">
                            <ul>
                                @foreach($categories as $d)
                                    <li>
                                        <a class="catitem" href="quizplay/{{ $d->id }}">{{ $d->categoryname }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main><!-- End #main -->
@endsection
