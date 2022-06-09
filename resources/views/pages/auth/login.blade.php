<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-cover bg-center lg:bg-top" style="background-image: url('/img/bg-front.png')">
    <div class="container mx-auto justify-center flex lg:block">
        <a href="{{ url('/') }}">
            <div class="w-[300px] h-[40px] bg-white rounded-full mt-8 flex items-center justify-center shadow-lg">
                <img src="{{ asset('img/logo-smp.png') }}" width="25" alt="">
                <h1 class="font-bold text-sm text-center ml-3">SMP NEGERI 2 LELEA INDRAMAYU</h1>
            </div>
        </a>
    </div>

    <div class="container flex flex-wrap justify-center">
        <div class="w-full lg:w-3/5 m-auto lg:mt-3 mt-5">
            <img src="{{ asset('img/hero.png') }}" width="600" alt="#">
        </div>
        <div class="w-full lg:w-2/5">

            <div class="w-full lg:w-[400px] h-auto mt-8 bg-slate-50 shadow-xl px-4 py-10 rounded-3xl">
                @if (Session::get('status'))
                <div class="w-full py-3 px-4 text-white rounded-lg bg-green-800 mb-3">
                    {{ Session::get('status') }}
                </div>
                @endif
                @error('nis_nik')
                <div class="w-full py-3 px-4 text-white rounded-lg bg-red-800 mb-3">
                    Username dan Password Anda salah !
                </div>
                @enderror
                <form action="{{ url('/authenticate') }}" method="POST">
                    @csrf
                    <div class="w-full px-4 mb-4">
                        <div class="flex items-center">
                            <img src="{{ asset('img/ic-user.png') }}" width="25" alt="">
                            <label for="nis" class="text-slate-900 text-xl font-bold ml-3">
                                NIS/NIP
                            </label>
                        </div>
                        <input type="text" name="nis_nik" id="nis_nik" placeholder="Masukan NIS/NIP"
                            class="w-full bg-slate-200 text-slate-900 mt-1 rounded-md p-3" required>
                    </div>
                    <div class="w-full px-4 mb-4">
                        <div class="flex items-center">
                            <img src="{{ asset('img/ic-password.png') }}" width="25" alt="">
                            <label for="password" class="text-slate-900 text-xl font-bold ml-3">
                                Password
                            </label>
                        </div>
                        <input type="password" name="password" id="password" placeholder="Masukan Password"
                            class="w-full bg-slate-200 text-slate-900 mt-1 rounded-md p-3" required>
                    </div>
                    <div class="w-full justify-center flex">
                        <button type="submit"
                            class="py-3 px-10 bg-green-700 text-white m-auto text-lg rounded-full hover:opacity-80 hover:shadow-lg transition duration-500">Login</button>
                    </div>
                </form>

            </div>

            <div class="w-full lg:w-[400px] flex items-center mt-3 pb-5">
                <a href="{{ url('lupa-password') }}" class="font-bold text-white lg:text-black">Lupa Password</a>
                <a href="{{ url('register') }}" class="flex ml-auto font-bold text-white lg:text-black">Daftar Baru</a>
            </div>


        </div>
    </div>


</body>

</html>