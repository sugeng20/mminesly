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
            <div class="w-full lg:w-1/2 flex flex-wrap px-4">
                <div class="w-1/5">
                    <img src="{{ asset('img/ic_home.png') }}" alt="">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">HOME</h2>
                    <p>Tombol yang berfungsi menuju ke halaman awal atau depan</p>
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex flex-wrap px-4">
                <div class="w-1/5">
                    <img src="{{ asset('img/ic_user.png') }}" alt="">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">PROFIL</h2>
                    <p>Tombol yang berfungsi data diri dari pengguna multimedia interaktif berbasis website</p>
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex flex-wrap px-4">
                <div class="w-1/5">
                    <img src="{{ asset('img/ic_sound.png') }}" alt="">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">AUDIO ON</h2>
                    <p>Tombol yang berfungsi untuk menyalakan efek suara atau backsound secara seluruhan dalam
                        multimedia interaktif berbasis
                        website</p>
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex flex-wrap px-4">
                <div class="w-1/5">
                    <img src="{{ asset('img/ic_home.png') }}" alt="">
                </div>
                <div class="w-4/5">
                    <h2 class="text-style-primary font-bold">HOME</h2>
                    <p>Tombol yang berfungsi menuju ke halaman awal atau depan</p>
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