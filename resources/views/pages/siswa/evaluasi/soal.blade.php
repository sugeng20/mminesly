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
            <form action="">
                @csrf
                @php
                $no = 1;
                @endphp
                @foreach ($questions as $question)
                <section class="mb-10">
                    <p class="text-style lg:text-lg mb-6">
                        {{ $no++ }}. {{ $question->question }}
                    </p>

                    <div class="w-full flex items-center mb-4">
                        <input type="radio" name="question[{{ $question->id }}]" id="pilihan1_{{ $question->id }}"
                            value="a" class="mr-3" required>
                        <label for="pilihan1_{{ $question->id }}">a. {{ $question->a }}</label>
                    </div>

                    <div class="w-full flex items-center mb-4">
                        <input type="radio" name="question[{{ $question->id }}]" id="pilihan2_{{ $question->id }}"
                            value="b" class="mr-3" required>
                        <label for="pilihan2_{{ $question->id }}">b. {{ $question->b }}</label>
                    </div>

                    <div class="w-full flex items-center mb-4">
                        <input type="radio" name="question[{{ $question->id }}]" id="pilihan3_{{ $question->id }}"
                            value="c" class="mr-3" required>
                        <label for="pilihan3_{{ $question->id }}">c. {{ $question->c }}</label>
                    </div>

                    <div class="w-full flex items-center">
                        <input type="radio" name="question[{{ $question->id }}]" id="pilihan4_{{ $question->id }}"
                            value="d" class="mr-3" required>
                        <label for="pilihan4_{{ $question->id }}">d. {{ $question->d }}</label>
                    </div>
                </section>
                @endforeach
            </form>
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