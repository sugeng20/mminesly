@extends('layouts.app')

@section('title')
Selamat Datang
@endsection

@section('content')
<div class="px-6 py-4 rounded-lg h-[68vh] bg-white shadow-lg w-full flex flex-wrap overflow-hidden overflow-y-scroll">
    <div class="lg:w-1/2 w-full px-1 m-auto">
        <h1
            class="text-center font-black leading-relaxed bg-gradient-to-r from-yellow-600 to-orange-500 text-transparent bg-clip-text text-3xl mb-6">
            Selamat Datang di Materi Interaksi Antar Negara Asia dan Negara Lain di Dunia
        </h1>
        <div class="flex justify-center mb-6">
            <a href="{{ url('kompetensi-dasar') }}"
                class="py-3 px-10 bg-green-700 font-bold text-white m-auto text-xl rounded-full hover:opacity-80 hover:shadow-lg hover:scale-125 transition duration-500">Mulai</a>
        </div>

    </div>
    <div class="lg:w-1/2 w-full px-6 m-auto">
        <img src="{{ asset('img/selamat_datang.png') }}" alt="">
    </div>
</div>
@endsection