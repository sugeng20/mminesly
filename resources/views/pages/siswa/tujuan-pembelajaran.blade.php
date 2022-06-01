@extends('layouts.app')

@section('title')
Tujuan Pembelajaran
@endsection

@section('content')
<div class="pl-3 lg:pl-8 py-4 rounded-lg h-[65vh] bg-white shadow-lg w-full relative">
    <div
        class="lg:w-96 w-72 h-16 absolute -top-7 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-center items-center bg-[#F2BA70] rounded-full shadow-lg">
        <span class="lg:text-3xl text-2xl text-[#622E2A] uppercase" style="font-family: 'BubbleWater'">Tujuan
            Pembelajaran</span>
    </div>

    <div class="overflow-y-scroll mt-8 relative flex flex-wrap h-[55vh] overflow-hidden">
        <div class="w-full px-8 mb-10">
            <img src="{{ asset('img/tujuan-pembelajaran.png') }}" width="400" height="300" alt=""
                class="float-right ml-4">
            <p class="text-style-primary font-bold">Tujuan
                Pembelajaran Umum:</p>
            <p class="text-style-primary">
                Setelah mempelajari multimedia interaktif berbasis website ini, siswa mampu memahami perubahan interaksi
                antar negara
                asia dan negara lain di dunia yang diakibatkan faktor alam, manusia dan pengaruhnya terhadap
                keberlangsungan kehidupan
                manusia dalam ekonomi, sosial, pendidikan, dan politik.
            </p>
            <p class="text-style-primary mt-6 font-bold">Tujuan Pembelajaran Khusus:</p>
            <ol class="list-decimal text-style-primary ml-4">
                <li>
                    Siswa mampu menjelaskan kondisi geografis Benua Asia dan Benua lainnya, termasuk letak dan luas,
                    iklim, geologi, rupa
                    bumi, tata air, tanah, flora dan fauna melalui peta rupa bumi.
                </li>
                <li>
                    Siswa mampu mendeskripsikan berbagai potensi Sumber Daya Alam seperti jenis sumber daya, penyebaran
                    di darat dan laut
                    di Benua Asia dan Benua Lainnya.
                </li>
                <li>
                    Siswa mampu mendeskripsikan Sumber Daya Manusia di Benua Asia dan Benua Lainnya, misalnya jumlah,
                    sebaran, dan
                    komposisi; pertumbuhan; kualitas (pendidikan, kesehatan, kesejahteraan serta keragaman etnik).
                </li>
                <li>
                    Siswa mampu mendeskripsikan bentuk distribusi potensi wilayah Benua Asia dan Benua Lainnya.
                </li>
                <li>
                    Siswa mampu menjelaskan dampak interaksi antarruang terkait perdagangan dan mobilitas penduduk.
                </li>
            </ol>

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