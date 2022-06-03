@extends('layouts.app')

@section('title')
Peta Konsep
@endsection

@section('content')
<div class="pl-4  py-4 rounded-lg h-[65vh] bg-white shadow-lg w-full relative">
    <div
        class="lg:w-96 w-72 h-16 absolute -top-7 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-center items-center bg-[#F2BA70] rounded-full shadow-lg">
        <span class="lg:text-3xl text-2xl text-[#622E2A] uppercase" style="font-family: 'BubbleWater'">Peta
            Konsep</span>
    </div>

    <div class="overflow-y-scroll mt-8 relative flex flex-wrap h-[55vh] overflow-hidden">
        <div class="w-full mb-10 justify-center  flex">
            <img src="{{ asset('img/peta_konsep.png') }}" width="300" alt="">
        </div>


    </div>

    <div
        class="w-40 h-12 absolute -bottom-6 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-between items-center bg-[#F2BA70] rounded-full shadow-xl">
        <a href="{{ url('/petunjuk-penggunaan') }}" class="hover:scale-125 duration-500 ease-in-out">
            <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
        </a>
        <a href="{{ url('/materi-pembahasan') }}" class="hover:scale-125 duration-500 ease-in-out">
            <img src="{{ asset('img/ic_next.png') }}" alt="" width="60">
        </a>
    </div>

</div>
@endsection