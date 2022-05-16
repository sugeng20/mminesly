<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-cover bg-center" style="background-image: url('/img/bg.png')">
    <div class="container mx-auto justify-center flex lg:block">
        <a href="{{ url('/') }}">
            <div class="w-[300px] h-[40px] bg-white rounded-full mt-8 flex items-center justify-center shadow-lg">
                <img src="{{ asset('img/logo-smp.png') }}" width="25" alt="">
                <h1 class="font-bold text-sm text-center ml-3">SMP NEGERI 2 LELEA INDRAMAYU</h1>
            </div>
        </a>
    </div>

    <div class="container flex flex-wrap justify-center mt-6">

        <div class="w-full">
            <div class="w-full h-min-[320px] bg-slate-50 shadow-xl px-4 py-6 rounded-3xl m-auto">


                <div class="w-full flex flex-wrap">

                    <div class="w-full lg:w-1/2 flex flex-wrap">
                        <div class="w-full px-4 mb-4">
                            <h1 class="text-slate-900 text-2xl lg:text-4xl font-bold">Buat Akun Baru</h1>
                            <p class="text-slate-700 font-semibold text-sm lg:text-lg mt-2">Silahkan buat akun baru dan
                                lengkapi
                                biodata
                                Anda
                                dibawah ini
                                :</p>
                        </div>
                        <div class="lg:w-1/2 w-full px-4 mb-4">
                            <input type="text" name="nama_depan" id="nama_depan" placeholder="Nama Depan"
                                class="bg-slate-200 text-slate-900 w-full rounded-md p-3">
                        </div>
                        <div class="lg:w-1/2 w-full px-4 mb-4">
                            <input type="text" name="nama_belakang" id="nama_belakang" placeholder="Nama Belakang"
                                class="bg-slate-200 text-slate-900 w-full rounded-md p-3">
                        </div>
                        <div class="w-full px-4 mb-4">
                            <input type="email" name="email" id="email" placeholder="Email Anda"
                                class="bg-slate-200 text-slate-900 w-full rounded-md p-3">
                        </div>
                        <div class="w-full px-4 mb-4">
                            <input type="text" name="nis" id="nis" placeholder="NIS/NIP"
                                class="bg-slate-200 text-slate-900 w-full rounded-md p-3">
                            <p class="text-xs mt-1 text-slate-600">*NIK (Nomor Induk Siswa) diisi wajib oleh siswa, NIP
                                (Nomor
                                Induk Pendidik) diisi wajib oleh
                                guru</p>
                        </div>
                        <div class="w-full px-4 mb-4">
                            <input type="password" name="password" id="password" placeholder="Password"
                                class="bg-slate-200 text-slate-900 w-full rounded-md p-3">
                        </div>
                        <div class="w-2/3 flex px-4 mb-10">
                            <button type="submit"
                                class="py-3 px-10 bg-green-700 text-white text-lg rounded-lg hover:opacity-80 hover:shadow-lg transition duration-500">Daftar</button>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/2 flex justify-center">
                        <img src="{{ asset('img/register.png') }}" width="450" alt="">
                    </div>
                </div>


            </div>

        </div>
    </div>


</body>

</html>