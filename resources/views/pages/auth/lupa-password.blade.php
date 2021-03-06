<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
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

    <div class="container flex flex-wrap mt-6">

        <div class="w-full">
            <div class="w-full lg:w-4/5 h-min-[500px] bg-slate-50 shadow-xl px-4 py-6 rounded-3xl">
                <form action="{{ url('reset-password') }}" method="POST">
                    @csrf
                    <div class="w-full flex flex-wrap">
                        @if (Session::get('success'))
                        <div class="w-full py-3 px-4 text-white rounded-lg bg-green-800 mb-3">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        @if (Session::get('error'))
                        <div class="w-full py-3 px-4 text-white rounded-lg bg-red-800 mb-3">
                            {{ Session::get('error') }}
                        </div>
                        @endif
                        <div class="lg:w-2/3 w-full px-4 mb-4">
                            <h1 class="text-slate-900 lg:text-3xl text-2xl font-bold">Lupa Password? Jangan Khawatir!
                            </h1>
                            <p class="text-slate-700 font-semibold text-xs lg:text-lg mt-4">Silahkan masukan email Anda
                                yang
                                telah
                                terdaftar. <br /> Kode untuk mengatur ulang password akan kami kirimkan via email </p>
                            <div class="w-full my-4">
                                <label for="email" class="text-slate-900 text-xl">
                                    Email Terdaftar
                                </label>
                                <input type="text" name="email" id="email" placeholder="Masukan Email"
                                    class="bg-slate-200 text-slate-900 w-full mt-2 rounded-md p-3" required>
                            </div>

                            <div class="w-full lg:w-2/3 mb-4">
                                <button type="submit"
                                    class="py-3 px-10 bg-green-700 text-white text-lg rounded-full hover:scale-125 hover:opacity-80 hover:shadow-lg transition duration-500">Kirim
                                    Kode</button>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/3 flex justify-center">
                            <img src="{{ asset('img/lupa-password.png') }}" width="300" alt="">
                        </div>

                    </div>
                </form>


            </div>

        </div>
    </div>


</body>

</html>