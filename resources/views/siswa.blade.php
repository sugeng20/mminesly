<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <header style="background-image: url('/img/header.jpg')"
        class="h-20 bg-cover flex items-center w-full bg-slate-900 top-0 left-0">
        <div class="container">
            <div class="flex items-center relative justify-between">
                <a href="{{ url('/') }}">
                    <div class="w-[300px] h-[40px] bg-white rounded-full flex items-center justify-center shadow-lg">
                        <img src="{{ asset('img/logo-smp.png') }}" width="25" alt="">
                        <h1 class="font-bold text-sm text-center ml-3">SMP NEGERI 2 LELEA INDRAMAYU</h1>
                    </div>
                </a>
                <div class="flex items-center">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden flex absolute py-5 justify-center bg-white shadow-lg rounded-3xl max-w-[100px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
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
                            <li class="group lg:mr-10 py-2">
                                <a href="#"><img src="{{ asset('img/ic_exit.png') }}"
                                        class="group-hover:scale-150 duration-500" width="50" alt=""></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <script src="{{ asset('/js/script.js') }}"></script>
</body>

</html>