@extends('layouts.app')

@section('title')
Kompetensi Dasar
@endsection

@section('content')
<div class="pl-3 lg:pl-8 py-4 rounded-lg h-[65vh] bg-white shadow-lg w-full relative">
    <div
        class="lg:w-96 w-72 h-16 absolute -top-7 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-center items-center bg-[#F2BA70] rounded-full shadow-lg">
        <span class="lg:text-3xl text-2xl text-[#622E2A] uppercase" style="font-family: 'BubbleWater'">Kompetensi
            Dasar</span>
    </div>

    <div class="overflow-y-scroll mt-10 relative flex flex-wrap h-[55vh] overflow-hidden">
        <div class="w-full lg:w-1/2 px-1 flex justify-center m-auto">
            <P class="text-center leading-loose text-sm text-slate-900 md:text-lg lg:text-xl lg:leading-loose">
                Menelaah perubahan keruangan dan interaksi antar ruang negara-negara Asia dan benua lainnya yang
                diakibatkan faktor alam,
                manusia dan pengaruhnya terhadap keberlangsungan kehidupan manusia dalam ekonomi, sosial, pendidikan dan
                politik.
            </P>
        </div>
        <div class="w-full lg:w-1/2 px-6 flex m-auto justify-center">
            <img src="{{ asset('img/kompetensi-dasar.png') }}" width="350" alt="">
        </div>

    </div>

    <div
        class="w-40 h-12 absolute -bottom-6 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-between items-center bg-[#F2BA70] rounded-full shadow-xl">
        <a href="{{ url('/selamat-datang') }}" class="hover:scale-125 duration-500 ease-in-out">
            <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
        </a>
        <a href="{{ url('/indikator') }}" class="hover:scale-125 duration-500 ease-in-out">
            <img src="{{ asset('img/ic_next.png') }}" alt="" width="60">
        </a>
    </div>

</div>
@endsection