@extends('layouts.app')

@section('title')
Selamat Datang
@endsection

@section('content')
<div class="px-6 py-4 rounded-lg h-[68vh] bg-white shadow-lg w-full flex flex-wrap overflow-hidden overflow-y-scroll">
    <div class="lg:w-2/6 w-full px-1 m-auto">
        <h1
            class="text-center font-bubbleWater font-black leading-normal bg-gradient-to-r from-yellow-600 to-orange-500 text-transparent bg-clip-text text-2xl lg:text-4xl lg:leading-normal mb-6">
            Selamat Datang di Materi Interaksi Antar Negara Asia dan Negara Lain di Dunia
        </h1>
        <div class="flex justify-center mb-6">
            <a href="{{ url('materi') }}"
                class="py-3 px-10 bg-[#4BB15E] text-white m-auto text-2xl rounded-full hover:opacity-80 hover:shadow-lg hover:scale-125 transition duration-500 font-bubbleWater">Mulai</a>
        </div>

    </div>
    <div class="lg:w-4/6 w-full px-6 m-auto">
        <img src="{{ asset('img/selamat_datang.png') }}" class="w-[1000px]" alt="">
    </div>
</div>
@endsection

@push('script')
<script>
    localStorage.setItem('halaman', 1);
</script>
@endpush