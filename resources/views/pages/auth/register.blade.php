<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

    <div class="container flex flex-wrap justify-center mt-6">

        <div class="w-full">
            <div class="w-full h-min-[320px] bg-slate-50 shadow-xl px-4 py-6 rounded-3xl m-auto">


                <form action="{{ url('registration') }}" method="POST">
                    @csrf
                    <div class="w-full flex flex-wrap">
                        @if ($errors->any())
                        <div class="w-full py-3 px-4 text-white rounded-lg bg-red-800 mb-3">
                            <ul class="list-disc ml-5">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="w-full lg:w-1/2 flex flex-wrap">
                            <div class="w-full px-4 mb-4">
                                <h1 class="text-slate-900 text-2xl lg:text-4xl font-bold">Buat Akun Baru</h1>
                                <p class="text-slate-700 font-semibold text-sm lg:text-lg mt-2">Silahkan buat akun baru
                                    dan
                                    lengkapi
                                    biodata
                                    Anda
                                    dibawah ini
                                    :</p>
                            </div>
                            <div class="lg:w-1/2 w-full px-4 mb-4">
                                <input type="text" name="nama_depan" id="nama_depan" placeholder="Nama Depan"
                                    class="bg-slate-200 text-slate-900 w-full rounded-md p-3" required>
                            </div>
                            <div class="lg:w-1/2 w-full px-4 mb-4">
                                <input type="text" name="nama_belakang" id="nama_belakang" placeholder="Nama Belakang"
                                    class="bg-slate-200 text-slate-900 w-full rounded-md p-3" required>
                            </div>
                            <div class="w-full px-4 mb-4">
                                <input type="email" name="email" id="email" placeholder="Email Anda"
                                    class="bg-slate-200 text-slate-900 w-full rounded-md p-3" required>
                            </div>
                            <div class="lg:w-1/2 w-full px-4 mb-4">
                                <input type="number" name="nis_nik" id="nis_nik" placeholder="NIS/NIP"
                                    class="bg-slate-200 text-slate-900 w-full rounded-md p-3" required>
                                <p class="text-xs mt-1 text-slate-600">*NIK (Nomor Induk Siswa) diisi wajib
                                    oleh
                                    siswa, NIP
                                    (Nomor
                                    Induk Pendidik) diisi wajib oleh
                                    guru</p>
                            </div>
                            <div class="lg:w-1/2 w-full px-4 mb-4">
                                <select name="role" id="role" class="bg-slate-200 text-slate-900 w-full rounded-md p-3"
                                    required>
                                    <option value="">- SEBAGAI -</option>
                                    <option value=" SISWA">SISWA</option>
                                    <option value="GURU">GURU</option>
                                </select>

                            </div>
                            <div class="w-full px-4 mb-4">
                                <input type="password" name="password" id="password" placeholder="Password"
                                    class="bg-slate-200 text-slate-900 w-full rounded-md p-3" required>
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
                </form>


            </div>

        </div>
    </div>


</body>

</html>