@extends('layouts.app')

@section('title')
Selamat Datang
@endsection

@section('content')
<div class="py-4 rounded-lg h-[65vh] bg-white shadow-lg w-full relative">
    <div
        class="lg:w-96 w-72 h-16 absolute -top-7 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-center items-center bg-[#F2BA70] rounded-full shadow-lg">
        <span class="lg:text-3xl text-2xl text-[#622E2A] uppercase" style="font-family: 'BubbleWater'">Evaluasi</span>
    </div>

    <div class="overflow-y-scroll mt-8 relative flex flex-wrap h-[55vh] overflow-hidden">

        <div class="w-full px-8 mb-10">
            <p class="text-style lg:text-lg mb-6">
                1. Soal Pilihan Ganda
            </p>

            <div class="w-full flex items-center mb-4">
                <input type="radio" name="soal1" id="pilihan1" value="a" class="mr-3">
                <label for="pilihan1">a. Pilihan 1</label>
            </div>

            <div class="w-full flex items-center mb-4">
                <input type="radio" name="soal1" id="pilihan2" value="b" class="mr-3">
                <label for="pilihan2">b. Pilihan 2</label>
            </div>

            <div class="w-full flex items-center mb-4">
                <input type="radio" name="soal1" id="pilihan3" value="c" class="mr-3">
                <label for="pilihan3">c. Pilihan 3</label>
            </div>

            <div class="w-full flex items-center">
                <input type="radio" name="soal1" id="pilihan4" value="d" class="mr-3">
                <label for="pilihan4">d. Pilihan 4</label>
            </div>
        </div>

    </div>

    <div
        class="w-40 h-12 absolute -bottom-6 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-between items-center bg-[#F2BA70] rounded-full shadow-xl">

        <a href="{{ url('materi') }}" class="hover:scale-125 duration-500 ease-in-out">
            <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
        </a>
        <a href="{{ url('materi') }}" class="hover:scale-125 duration-500 ease-in-out">
            <img src="{{ asset('img/ic_next.png') }}" alt="" width="60">
        </a>
    </div>
</div>
@endsection

@push('script')
<script src="{{ url('ckeditor/ckeditor.js') }}"></script>
@endpush