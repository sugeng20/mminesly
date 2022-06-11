@extends('layouts.app')

@section('title')
Evaluasi
@endsection

@section('content')
<div class="py-4 rounded-lg h-[65vh] bg-white shadow-lg w-full relative">
    <div
        class="lg:w-96 w-72 h-16 absolute -top-7 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-center items-center bg-[#F2BA70] rounded-full shadow-lg">
        <span class="lg:text-3xl text-2xl text-[#622E2A] uppercase" style="font-family: 'BubbleWater'">Evaluasi</span>
    </div>

    <div class="overflow-y-scroll mt-8 relative flex flex-wrap h-[55vh] overflow-hidden">

        <div class="w-full px-8 mb-10">
            @php
            $no = 1;
            @endphp
            @foreach ($answers as $answer)
            <section class="mt-6 bg-{{ $answer->answer == $answer->question->key ? 'green' : 'red' }}-100 p-6"
                id="halaman{{ $no }}">

                <p class="text-style lg:text-lg mb-6">
                    {{ $no }}. {{ $answer->question->question }}
                </p>

                <div class="w-full flex items-center mb-4 sound">
                    <input type="radio" name="choice[{{ $no }}]" id="pilihan1_{{ $answer->id }}" value="a" class="mr-3"
                        readonly {{ $answer->answer == 'a' ? 'checked' : '' }}>
                    <label for="pilihan1_{{ $answer->id }}">a. {{ $answer->question->a }}</label>
                </div>

                <div class="w-full flex items-center mb-4 sound">
                    <input type="radio" name="choice[{{ $no }}]" id="pilihan2_{{ $answer->id }}" value="b" class="mr-3"
                        readonly {{ $answer->answer == 'b' ? 'checked' : '' }}>
                    <label for="pilihan2_{{ $answer->id }}">b. {{ $answer->question->b }}</label>
                </div>

                <div class="w-full flex items-center mb-4 sound">
                    <input type="radio" name="choice[{{ $no }}]" id="pilihan3_{{ $answer->question->id }}" value="c"
                        class="mr-3" readonly {{ $answer->answer == 'c' ? 'checked' : '' }}>
                    <label for="pilihan3_{{ $answer->id }}">c. {{ $answer->question->c }}</label>
                </div>

                <div class="w-full flex items-center sound">
                    <input type="radio" name="choice[{{ $no }}]" id="pilihan4_{{ $answer->id }}" value="d" class="mr-3"
                        readonly {{ $answer->answer == 'd' ? 'checked' : '' }}>
                    <label for="pilihan4_{{ $answer->id }}">d. {{ $answer->question->d }}</label>
                </div>

                <p class="text-style lg:text-lg mt-4">
                    Jawaban benar adalah <b>{{ $answer->question->key }}</b>
                </p>
            </section>
            @php
            $no++
            @endphp
            @endforeach

        </div>

    </div>

    <div
        class="w-40 h-12 absolute -bottom-6 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-between items-center bg-[#F2BA70] rounded-full shadow-xl">

        <a href="{{ url('materi') }}" class="hover:scale-125 duration-500 ease-in-out cursor-pointer">
            <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
        </a>
        <a href="{{ url('materi') }}" class="hover:scale-125 duration-500 ease-in-out cursor-pointer">
            <img src="{{ asset('img/ic_next.png') }}" alt="" width="60">
        </a>
    </div>
</div>
@endsection

@push('script')
@endpush