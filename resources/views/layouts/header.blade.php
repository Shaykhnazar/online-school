
<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container">

        <div class="logo float-left">
            <h1 class="text-light"><a href="{{ route('home') }}"><span>BOSH SAHIFA</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="{{ route('home') }}"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu float-right d-none d-lg-block">
            <ul>
                <li><a href="{{ route('services') }}">XIZMATLAR</a></li>
                <li><a href="{{ route('team') }}">JAMOAMIZ</a></li>
                <li><a href="{{ route('about') }}">BIZ HAQIMIZDA</a></li>



                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li class="drop-down"><a href="">KURSLAR</a>
                    <ul>
                        <li><a href="https://youtu.be/d9GZ2FpBEZI">PHOTOSHOP</a></li>
                        <li class="drop-down"><a href="#">WEB</a>
                            <ul>
                                <li><a href="https://www.w3schools.com/html/default.asp">HTML</a></li>
                                <li><a href="https://www.w3schools.com/css/default.asp">CSS</a></li>
                                <li><a href="https://www.w3schools.com/js/default.asp">JAVASCRIPT</a></li>
                                <li><a href="https://www.w3schools.com/react/default.asp">REACT</a></li>
                                <li><a href="https://www.w3schools.com/php/default.asp">PHP</a></li>
                            </ul>
                        </li>
                        <li><a href="https://youtu.be/LSVfu8esIO4">CISCO</a></li>
                        <li><a href="https://youtu.be/2BvoXFeBTPc">VIDEO EDITING</a></li>
                        <li><a href="https://youtu.be/FE_EOOGfqBY">ADOBE ILLUSTRATOR</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}">BIZGA BOG'LANING</a></li>
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Kirish</a></li>
                    <li><a href="{{ route('register') }}">Ro'yxatdan o'tish</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->
