<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body style="background-image: url('/img/bg-admin.png')" class="bg-cover">
    <header style="background-image: url('/img/header.jpg')"
        class="h-20 bg-cover flex items-center w-full bg-slate-900 top-0 left-0">
        <div class="container">
            <div class="flex items-center relative justify-between">
                <a href="{{ url('/') }}">
                    <div
                        class="w-[250px] sm:w-[300px] h-[40px] bg-white rounded-full flex items-center justify-center shadow-lg px-4 sm:px-0">
                        <img src="{{ asset('img/logo-smp.png') }}" width="25" alt="">
                        <h1 class="font-bold lg:text-sm text-xs text-center sm:ml-3">SMP NEGERI 2 LELEA INDRAMAYU</h1>
                    </div>
                </a>
                <div class="flex items-center">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden flex absolute py-5 justify-center bg-white shadow-lg rounded-3xl max-w-[100px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none z-50">
                        <ul class="lg:flex">
                            <li class="group lg:mr-10 py-2">
                                <a href="#"><img src="{{ asset('img/ic_home.png') }}"
                                        class="group-hover:scale-150 duration-500" width="50" alt=""></a>
                            </li>
                            <li class="group lg:mr-10 py-2">
                                <a href="#"><img src="{{ asset('img/ic_user_admin.png') }}"
                                        class="group-hover:scale-150 duration-500" width="50" alt=""></a>
                            </li>
                            <li class="group lg:mr-10 py-2">
                                <a href="#"><img src="{{ asset('img/ic_sound.png') }}"
                                        class="group-hover:scale-150 duration-500" width="50" alt=""></a>
                            </li>
                            <li class="group py-2">
                                <a href="#"><img src="{{ asset('img/ic_exit.png') }}"
                                        class="group-hover:scale-150 duration-500" width="50" alt=""></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="flex relative">
            <div class="hidden bg-transparent absolute h-[87vh] mt-4 bg-no-repeat w-1/4 bg-contain lg:block"
                style="background-image: url('/img/sidebar.png')">
                <ul class="px-8 m-auto py-4">
                    <li class="py-2 group">
                        <a href="#"><img src="{{ asset('/img/petunjuk_penggunaan.png') }}"
                                class="group-hover:scale-150 duration-500" alt=""></a>
                    </li>
                    <li class="py-2 group">
                        <a href="#"><img src="{{ asset('/img/peta_konsep.png') }}"
                                class="group-hover:scale-150 duration-500" alt=""></a>
                    </li>
                    <li class="py-2 group">
                        <a href="#"><img src="{{ asset('/img/kondisi_geografis.png') }}"
                                class="group-hover:scale-150 duration-500" alt=""></a>
                    </li>
                    <li class="py-2 group">
                        <a href="#"><img src="{{ asset('/img/potensi.png') }}"
                                class="group-hover:scale-150 duration-500" alt=""></a>
                    </li>
                    <li class="py-2 group">
                        <a href="#"><img src="{{ asset('/img/sumber_daya.png') }}"
                                class="group-hover:scale-150 duration-500" alt=""></a>
                    </li>
                    <li class="py-2 group">
                        <a href="#"><img src="{{ asset('/img/distribusi_potensi.png') }}"
                                class="group-hover:scale-150 duration-500" alt=""></a>
                    </li>
                    <li class="py-2 group">
                        <a href="#"><img src="{{ asset('/img/dampak_interaksi.png') }}"
                                class="group-hover:scale-150 duration-500" alt=""></a>
                    </li>
                    <li class="py-2 group">
                        <a href="#"><img src="{{ asset('/img/referensi.png') }}"
                                class="group-hover:scale-150 duration-500" alt=""></a>
                    </li>
                    <li class="py-3 group">
                        <a href="#"><img src="{{ asset('/img/pengembang.png') }}"
                                class="group-hover:scale-150 duration-500" alt=""></a>
                    </li>
                </ul>
            </div>
            <div class="w-full flex flex-wrap">
                <div class="bg-transparent w-full h-14 bg-cover flex"
                    style="background-image: url('/img/header-2.2.png')">
                    <div class="container">
                        <div class="flex h-full justify-center">
                            <ul
                                class="items-center flex font-bold text-xs lg:text-lg md:text-lg  text-white lg:ml-auto">
                                <li
                                    class="px-2 lg:px-6 md:px-7 bg-slate-900 items-center flex bg-opacity-50 h-8 rounded-lg">
                                    <a href="#">SK/KD</a>
                                </li>
                                <li class="px-2 lg:px-6 md:px-7">
                                    <a href="#">INDIKATOR</a>
                                </li>
                                <li class="px-2 lg:px-6 md:px-7">
                                    <a href="#">TUJUAN</a>
                                </li>
                                <li class="px-2 lg:px-6 md:px-7">
                                    <a href="#">FORUM DISKUSI</a>
                                </li>
                                <li>
                                    <a href="#">EVALUASI</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>

                <div class="w-full flex justify-end py-2">
                    <div class="w-full lg:w-3/4 flex h-[77vh] bg-slate-400 bg-cover"
                        style="background-image: url('img/bg-content.png')">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <script src="{{ asset('/js/script.js') }}"></script>
</body>

</html>