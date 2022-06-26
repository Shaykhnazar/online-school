@extends('layouts.site')
@section('content')

    <main id="main">
        <div class="container main quizend" style="margin-bottom: 100px">

            <div class="row"><div class="col-md-12">

                    <h2 style="text-align:center;">Viktorina tugadi</h2><br>
                    <h4 class="res" style="text-align:center;">Sizning natijangiz : {{ $res }} %</h4>

                    <div style="text-align:center; margin-top:50px;"><a href="/quiz" class="btnAgain">Qayta o'ynang</a></div>

                </div>
            </div>
        </div>
    </main><!-- End #main -->
@endsection
