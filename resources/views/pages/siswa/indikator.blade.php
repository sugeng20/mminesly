@extends('layouts.app')

@section('title')
Indikator
@endsection

@section('content')
<div class="pl-3 lg:pl-8 py-4 rounded-lg h-[65vh] bg-white shadow-lg w-full relative">
    <div
        class="lg:w-96 w-72 h-16 absolute -top-7 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-center items-center bg-[#F2BA70] rounded-full shadow-lg">
        <span class="lg:text-3xl text-2xl text-[#622E2A] uppercase" style="font-family: 'BubbleWater'">Indikator</span>
    </div>

    <div class="overflow-y-scroll mt-8 relative flex flex-wrap h-[55vh] overflow-hidden">
        <div class="w-full px-8 mb-10">
            <img src="{{ asset('img/indikator.png') }}" width="400" height="300" alt="" class="float-right ml-4">
            <ol class="list-decimal text-style-primary">
                <li>
                    Menjelaskan kondisi geografis Benua Asia dan Benua lainnya, termasuk letak dan luas, iklim, geologi,
                    rupa bumi, tata
                    air, tanah, flora dan fauna melalui peta rupa bumi.
                </li>
                <li>
                    Mendeskripsikan berbagai potensi Sumber Daya Alam seperti jenis sumber daya, penyebaran di darat dan
                    laut di Benua
                    Asia dan Benua Lainnya.
                </li>
                <li>
                    Memahami Sumber Daya Manusia di Benua Asia dan Benua Lainnya, misalnya jumlah, sebaran, dan
                    komposisi; pertumbuhan;
                    kualitas (pendidikan, kesehatan, kesejahteraan serta keragaman etnik).
                </li>
                <li>
                    Mendeskripsikan bentuk distribusi potensi wilayah Benua Asia dan Benua lainnya.
                </li>
                <li>
                    Menganalisis dampak interaksi antarruang terkait perdagangan dan mobilitas penduduk.
                </li>
            </ol>

        </div>


    </div>

    <div
        class="w-40 h-12 absolute -bottom-6 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-between items-center bg-[#F2BA70] rounded-full shadow-xl">
        <a href="{{ url('/kompetensi-dasar') }}" class="hover:scale-125 duration-500 ease-in-out">
            <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
        </a>
        <a href="{{ url('/tujuan-pembelajaran') }}" class="hover:scale-125 duration-500 ease-in-out">
            <img src="{{ asset('img/ic_next.png') }}" alt="" width="60">
        </a>
    </div>

</div>
@endsection