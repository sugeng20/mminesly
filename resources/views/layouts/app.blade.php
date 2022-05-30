<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;0,700;0,800;0,900;1,400;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <style>
        @font-face {
            font-family: 'BubbleWater';
            /*memberikan nama bebas untuk font*/
            src: url('fonts/PoetsenOne-Regular.ttf');
            /*memanggil file font eksternalnya di folder nexa*/
        }
    </style>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <div class="flex">
        <aside
            class="lg:w-96 w-80 h-screen bg-primary -translate-x-96 absolute lg:relative lg:translate-x-0 overflow-hidden transition duration-500 ease-in-out z-10">
            <div class="flex justify-end mr-8 mt-3 flex-wrap lg:justify-center lg:mr-0">
                <a href="{{ url('/selamat-datang') }}">
                    <div
                        class="lg:w-[270px] lg:h-[50px] w-[200px] h-[50px] bg-white rounded-full flex items-center justify-center shadow-lg">
                        <img src="{{ asset('img/logo-smp.png') }}" class="ml-3 lg:ml-0" width="25" alt="">
                        <h1 class="font-bold text-sm text-center lg:ml-2">SMP NEGERI 2 LELEA INDRAMAYU</h1>
                    </div>
                </a>
            </div>

            <div class="px-5 mt-8">
                <ul>
                    <li class="flex items-center mb-6 hover:scale-110 duration-500 ease-in-out">
                        <img src="{{ asset('/img/ic_kd.png') }}" width="30" class="group-hover:scale-150 duration-500"
                            alt="">
                        <a href="{{ url('/kompetensi-dasar') }}" class="font-bold text-lg text-white ml-3">
                            Kompetensi Dasar
                        </a>
                    </li>

                    <li class="flex items-center mb-6 hover:scale-110 duration-500 ease-in-out">
                        <img src="{{ asset('/img/ic_indikator.png') }}" width="30"
                            class="group-hover:scale-150 duration-500" alt="">
                        <a href="#" class="font-bold text-lg text-white ml-3">
                            Indikator
                        </a>
                    </li>

                    <li class="flex items-center mb-6 hover:scale-110 duration-500 ease-in-out">
                        <img src="{{ asset('/img/ic_tujuan.png') }}" width="30"
                            class="group-hover:scale-150 duration-500" alt="">
                        <a href="#" class="font-bold text-lg text-white ml-3">
                            Tujuan Pembelajaran
                        </a>
                    </li>

                    <li class="flex items-center mb-6 hover:scale-110 duration-500 ease-in-out">
                        <img src="{{ asset('/img/ic_petunjuk.png') }}" width="30"
                            class="group-hover:scale-150 duration-500" alt="">
                        <a href="#" class="font-bold text-lg text-white ml-3">
                            Petunjuk Penggunaan
                        </a>
                    </li>

                    <li class="flex items-center mb-6 hover:scale-110 duration-500 ease-in-out">
                        <img src="{{ asset('/img/ic_peta.png') }}" width="30" class="group-hover:scale-150 duration-500"
                            alt="">
                        <a href="#" class="font-bold text-lg text-white ml-3">
                            Peta Konsep
                        </a>
                    </li>

                    <li class="flex items-center mb-6 hover:scale-110 duration-500 ease-in-out">
                        <img src="{{ asset('/img/ic_materi.png') }}" width="30"
                            class="group-hover:scale-150 duration-500" alt="">
                        <a href="#" class="font-bold text-lg text-white ml-3">
                            Materi Pembelajaran
                        </a>
                    </li>

                    <li class="flex items-center mb-6 hover:scale-110 duration-500 ease-in-out">
                        <img src="{{ asset('/img/ic_forum.png') }}" width="30"
                            class="group-hover:scale-150 duration-500" alt="">
                        <a href="#" class="font-bold text-lg text-white ml-3">
                            Forum Diskusi
                        </a>
                    </li>

                    <li class="flex items-center mb-6 hover:scale-110 duration-500 ease-in-out">
                        <img src="{{ asset('/img/ic_evaluasi.png') }}" width="30"
                            class="group-hover:scale-150 duration-500" alt="">
                        <a href="#" class="font-bold text-lg text-white ml-3">
                            Evaluasi
                        </a>
                    </li>

                    <li class="flex items-center mb-6 hover:scale-110 duration-500 ease-in-out">
                        <img src="{{ asset('/img/ic_referensi.png') }}" width="30"
                            class="group-hover:scale-150 duration-500" alt="">
                        <a href="#" class="font-bold text-lg text-white ml-3">
                            Referensi
                        </a>
                    </li>

                    <li class="flex items-center mb-6 hover:scale-110 duration-500 ease-in-out">
                        <img src="{{ asset('/img/ic_profile.png') }}" width="30"
                            class="group-hover:scale-150 duration-500" alt="">
                        <a href="#" class="font-bold text-lg text-white ml-3">
                            Profil Pengembang
                        </a>
                    </li>
                </ul>
            </div>
        </aside>




        <section class="w-full">

            <nav class="w-full bg-slate-100 h-[12vh] flex items-center">

                <div class="ml-5 bg-cyan-800 px-2 rounded-lg lg:hidden absolute flex justify-center z-20">
                    <button id="hamburger" name="hamburger" type="button" class="block">
                        <div>
                            <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                            <span class="hamburger-line transition duration-300 ease-in-out"></span>
                            <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                        </div>
                    </button>
                </div>
                <ul class="ml-auto mr-8 flex">
                    <li class="mr-2 lg:mr-6 group">
                        <a href="#">
                            <img src="{{ asset('img/ic_home.png') }}" class="group-hover:scale-125 duration-500"
                                width="50" alt="">
                        </a>
                    </li>
                    <li class="mr-2 lg:mr-6 group">
                        <a href="#">
                            <img src="{{ asset('img/ic_user.png') }}" class="group-hover:scale-125 duration-500"
                                width="50" alt="">
                        </a>
                    </li>
                    <li class="mr-2 lg:mr-6 group">
                        <a href="#">
                            <img src="{{ asset('img/ic_sound.png') }}" class="group-hover:scale-125 duration-500"
                                width="50" alt="">
                        </a>
                    </li>
                    <li class="group">
                        <a href="#">
                            <img src="{{ asset('img/ic_exit.png') }}" class="group-hover:scale-125 duration-500"
                                width="50" alt="">
                        </a>
                    </li>
                </ul>

            </nav>

            <article class="w-full bg-cyan-500 h-[88vh] bg-cover bg-center bg-no-repeat px-6 pt-10"
                style="background-image: url('/img/bg.png')">

                @yield('content')

            </article>

        </section>
    </div>
    <script src="{{ asset('/js/script.js') }}"></script>
</body>

</html>