@extends('layouts.site')
@section('content')

    <main id="main">

        <div class="container main quizplay" style="margin-bottom: 100px">

            <div class="row"><div class="col-md-12 text-center">
                    Qolgan vaqt: <div class="timer">00:00</div>
                </div></div>

            <div class="row"><div class="col-md-12">

                    <div class="quizquestions">
                        @foreach($questions as $q)
                            <div class="qItem" cor="{{ $q->correct }}">
                                <div class="question"><h3>{{ $q->question }}</h3></div>
                                <div class="answers">
                                    <div class="answ" style="cursor: pointer;"><span>1.</span> {{ $q->answera }}</div>
                                    <div class="answ" style="cursor: pointer;"><span>2.</span> {{ $q->answerb }}</div>
                                    <div class="answ" style="cursor: pointer;"><span>3.</span> {{ $q->answerc }}</div>
                                    <div class="answ" style="cursor: pointer;"><span>4.</span> {{ $q->answerd }}</div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div class="row"><div class="col-md-12 text-center">
                            <div class="btn bNext">Keyingi</div>
                            <div class="btn bFinish">Tugallash</div>
                        </div></div>

                </div>
            </div>
        </div>
    </main><!-- End #main -->
@endsection

@section('quizscripts')
    <!-- flot charts scripts-->
    <script src="{{ asset('js/quiz.js') }}" crossorigin="anonymous"></script>
@stop
