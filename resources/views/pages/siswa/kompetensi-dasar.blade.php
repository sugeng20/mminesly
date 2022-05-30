@extends('layouts.app')

@section('title')
Kompetensi Dasar
@endsection

@section('content')
<div class="pl-6 py-4 rounded-lg h-[68vh] bg-white shadow-lg w-full relative">
    <div
        class="w-80 h-16 absolute -top-7 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-center items-center bg-[#F2BA70] rounded-full shadow-lg">
        <span class="text-3xl text-[#622E2A]" style="font-family: 'BubbleWater'">Kompetensi Dasar</span>
    </div>

    <div class="w-full flex flex-wrap overflow-hidden overflow-y-scroll mt-10">
        <div class="w-full lg:w-1/2 px-1">
            <P>
                Penjelasan
            </P>

        </div>
        <div class="w-full lg:w-1/2 px-6">
            <img src="{{ asset('img/kompetensi-dasar.png') }}" width="350" alt="">
        </div>

    </div>

    <div
        class="w-40 h-12 absolute -bottom-6 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-between items-center bg-[#F2BA70] rounded-full shadow-xl">
        <a href="#" class="hover:scale-125 duration-500 ease-in-out">
            <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
        </a>
        <a href="#" class="hover:scale-125 duration-500 ease-in-out">
            <img src="{{ asset('img/ic_next.png') }}" alt="" width="60">
        </a>
    </div>

</div>
@endsection