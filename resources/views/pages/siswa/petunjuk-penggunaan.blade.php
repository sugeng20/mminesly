@extends('layouts.app')

@section('title')
Petunjuk Penggunaan
@endsection

@section('content')
<div class="pl-3 lg:pl-8 py-4 rounded-lg h-[65vh] bg-white shadow-lg w-full relative">
    <div
        class="lg:w-96 w-72 h-16 absolute -top-7 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-center items-center bg-[#F2BA70] rounded-full shadow-lg">
        <span class="lg:text-3xl text-2xl text-[#622E2A] uppercase" style="font-family: 'BubbleWater'">Petunjuk
            Penggunaan</span>
    </div>

    <div class="overflow-y-scroll mt-8 relative flex flex-wrap h-[55vh] overflow-hidden">
        <div class="w-full flex flex-wrap mb-10">
            <div class="w-full px-6 mb-6">
                <p class="text-style-primary text-center">Sebelum menggunakan multimedia interaktif berbasis
                    website
                    ini, Ayo kita lihat
                    dulu fungsi dari
                    masing-masing menu
                    navigasi berikut :
                </p>
            </div>
            <div class="w-full lg:w-1/2 flex flex-wrap px-6 mb-6">
                <div class="w-1/5">
                    <img src="{{ asset('img/ic_home.png') }}" alt="" width="60">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">HOME</h2>
                    <p>Tombol yang berfungsi menuju ke halaman awal atau depan</p>
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex flex-wrap px-6 mb-6">
                <div class="w-1/5">
                    <img src="{{ asset('img/ic_user.png') }}" alt="" width="60">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">PROFIL</h2>
                    <p>Tombol yang berfungsi data diri dari pengguna multimedia interaktif berbasis website</p>
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex flex-wrap px-6 mb-6">
                <div class="w-1/5">
                    <img src="{{ asset('img/ic_sound.png') }}" alt="" width="60">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">AUDIO ON</h2>
                    <p>Tombol yang berfungsi untuk menyalakan efek suara atau backsound secara seluruhan dalam
                        multimedia interaktif berbasis
                        website</p>
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex flex-wrap px-6 mb-6">
                <div class="w-1/5">
                    <img src="{{ asset('img/sound_off.png') }}" alt="" width="60">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">AUDIO OFF</h2>
                    <p>Tombol yang berfungsi untuk mematikan efek suara atau backsound secara seluruhan dalam multimedia
                        interaktif berbasis
                        website</p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-wrap px-6 mb-6">
                <div class="w-1/5">
                    <img src="{{ asset('img/ic_next.png') }}" alt="" width="60">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">NEXT</h2>
                    <p>
                        Tombol yang berfungsi untuk melanjutkan ke halaman berikutnya
                    </p>
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex flex-wrap px-6 mb-6">
                <div class="w-1/5">
                    <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">BACK</h2>
                    <p>
                        Tombol yang berfungsi untuk kembali ke halaman sebelumnya
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-wrap px-6 mb-6">
                <div class="w-1/5">
                    <img src="{{ asset('img/ic_next.png') }}" alt="" width="60">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">KOMPETENSI DASAR</h2>
                    <p>
                        Tombol yang berfungsi untuk menampilkan kompetensi dasar pada materi Interaksi Antar Negara Asia
                        dan
                        Negara lain di
                        Dunia
                    </p>
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex flex-wrap px-6 mb-6">
                <div class="w-1/5">
                    <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">INDIKATOR</h2>
                    <p>
                        Tombol yang berfungsi untuk menampilkan Indikator pada materi Interaksi Antar Negara Asia dan
                        Negara
                        lain di Dunia
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-wrap px-6 mb-6">
                <div class="w-1/5">
                    <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">TUJUAN PEMBELAJARAN</h2>
                    <p>
                        Tombol yang berfungsi untuk menampilkan tujuan pembelajaran pada materi Interaksi Antar Negara
                        Asia dan Negara lain di
                        Dunia yang akan dicapai
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-wrap px-6 mb-6">
                <div class="w-1/5">
                    <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">PETUNJUK PENGGUNAAN</h2>
                    <p>
                        Tombol yang berfungsi untuk Informasi tentang petunjuk penggunaan dalam menggunakan multimedia
                        interaktif berbasis
                        website ini
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-wrap px-6 mb-6">
                <div class="w-1/5">
                    <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">PETA KONSEP</h2>
                    <p>
                        Tombol yang berfungsi untuk menampilkan peta konsep pada materi Interaksi Antar Negara Asia dan
                        Negara lain di Dunia
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-wrap px-6 mb-6">
                <div class="w-1/5">
                    <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">MATERI PEMBAHASAN</h2>
                    <p>
                        Tombol yang berfungsi untuk informasi pembelajaran dan pemahaman materi pembelajaran
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-wrap px-6 mb-6">
                <div class="w-1/5">
                    <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">FORUM DISKUSI</h2>
                    <p>
                        Tombol yang berfungsi untuk melakukan diskusi dengan sesama pengguna
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-wrap px-6 mb-6">
                <div class="w-1/5">
                    <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">EVALUASI</h2>
                    <p>
                        Tombol yang berfungsi untuk mengisi soal latihan berupa pilihan ganda untuk menguji pemahaman
                        materi
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-wrap px-6 mb-6">
                <div class="w-1/5">
                    <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">REFERENSI</h2>
                    <p>
                        Tombol yang berfungsi untuk menampilkan sumber referensi yang digunakan untuk mengembangkan
                        materi Interaksi Antar
                        Negara Asia dan Negara lain di Dunia IPS Kelas IX Semester 1
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex flex-wrap px-6 mb-6">
                <div class="w-1/5">
                    <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">PROFIL PENGEMBANG</h2>
                    <p>
                        PROFIL PENGEMBANG
                    </p>
                </div>
            </div>
        </div>

    </div>




    <div
        class="w-40 h-12 absolute -bottom-6 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-between items-center bg-[#F2BA70] rounded-full shadow-xl">
        <a href="{{ url('/indikator') }}" class="hover:scale-125 duration-500 ease-in-out">
            <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
        </a>
        <a href="{{ url('/petunjuk-penggunaan') }}" class="hover:scale-125 duration-500 ease-in-out">
            <img src="{{ asset('img/ic_next.png') }}" alt="" width="60">
        </a>
    </div>

</div>
@endsection