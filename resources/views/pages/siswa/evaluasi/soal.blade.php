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
            @if(Auth::user()->role == 'SISWA')
            <form action="{{ url('postSoal') }}" method="POST">
                @csrf
                @php
                $no = 1;
                @endphp
                @foreach ($questions as $question)
                <input type="hidden" name="question[{{ $no }}]" value="{{ $question->id }}">
                <section class="mt-6" id="halaman{{ $no }}" {{ $no==1 ? "" : "hidden" }}>
                    <p class="text-style lg:text-lg mb-6">
                        {{ $no }}. {{ $question->question }}
                    </p>

                    <div class="w-full flex items-center mb-4 sound">
                        <input type="radio" name="choice[{{ $no }}]" id="pilihan1_{{ $question->id }}" value="a"
                            class="mr-3" required>
                        <label for="pilihan1_{{ $question->id }}">a. {{ $question->a }}</label>
                    </div>

                    <div class="w-full flex items-center mb-4 sound">
                        <input type="radio" name="choice[{{ $no }}]" id="pilihan2_{{ $question->id }}" value="b"
                            class="mr-3" required>
                        <label for="pilihan2_{{ $question->id }}">b. {{ $question->b }}</label>
                    </div>

                    <div class="w-full flex items-center mb-4 sound">
                        <input type="radio" name="choice[{{ $no }}]" id="pilihan3_{{ $question->id }}" value="c"
                            class="mr-3" required>
                        <label for="pilihan3_{{ $question->id }}">c. {{ $question->c }}</label>
                    </div>

                    <div class="w-full flex items-center sound">
                        <input type="radio" name="choice[{{ $no }}]" id="pilihan4_{{ $question->id }}" value="d"
                            class="mr-3" required>
                        <label for="pilihan4_{{ $question->id }}">d. {{ $question->d }}</label>
                    </div>
                </section>
                @php
                $no++
                @endphp
                @endforeach

                <section id="halaman21" class="w-full m-auto" hidden>
                    <div>
                        <p class="text-center text-2xl font-bold mt-8">
                            Apakah Anda yakin dengan semua pilihan yang anda jawab?
                        </p>
                        <div class="flex justify-center mt-10">
                            <button type="button" onclick="prev()"
                                class="py-3 px-10 bg-[#FF525B] cursor-pointer text-white m-auto text-2xl rounded-full hover:opacity-80 hover:shadow-lg hover:scale-125 transition duration-500">Kembali</button>
                            <button type="submit"
                                class="py-3 px-10 bg-[#4BB15E] cursor-pointer text-white m-auto text-2xl rounded-full hover:opacity-80 hover:shadow-lg hover:scale-125 transition duration-500">Selesai</button>
                        </div>
                    </div>
                </section>

            </form>
            @else
            @php
            $no = 1;
            @endphp
            @foreach ($questions as $question)
            <section class="mt-6 bg-green-100 p-6" id="halaman{{ $no }}">

                <p class="text-style lg:text-lg mb-6">
                    {{ $no }}. {{ $question->question }}
                </p>

                <div class="w-full flex items-center mb-4 sound">
                    <input type="radio" name="choice[{{ $no }}]" id="pilihan1_{{ $question->id }}" value="a"
                        class="mr-3" readonly>
                    <label for="pilihan1_{{ $question->id }}">a. {{ $question->a }}</label>
                </div>

                <div class="w-full flex items-center mb-4 sound">
                    <input type="radio" name="choice[{{ $no }}]" id="pilihan2_{{ $question->id }}" value="b"
                        class="mr-3" readonly>
                    <label for="pilihan2_{{ $question->id }}">b. {{ $question->b }}</label>
                </div>

                <div class="w-full flex items-center mb-4 sound">
                    <input type="radio" name="choice[{{ $no }}]" id="pilihan3_{{ $question->id }}" value="c"
                        class="mr-3" readonly>
                    <label for="pilihan3_{{ $question->id }}">c. {{ $question->c }}</label>
                </div>

                <div class="w-full flex items-center sound">
                    <input type="radio" name="choice[{{ $no }}]" id="pilihan4_{{ $question->id }}" value="d"
                        class="mr-3" readonly>
                    <label for="pilihan4_{{ $question->id }}">d. {{ $question->d }}</label>
                </div>

                <p class="text-style lg:text-lg mt-4">
                    Jawaban benar adalah <b>{{ $question->key }}</b>
                </p>
            </section>
            @php
            $no++
            @endphp
            @endforeach
            @endif
        </div>

    </div>



    @if(Auth::user()->role == 'SISWA')
    <section id="navigasi1">
        <div
            class="w-40 h-12 absolute -bottom-6 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-between items-center bg-[#F2BA70] rounded-full shadow-xl">
            <a onclick="prev()" class="hover:scale-125 duration-500 ease-in-out cursor-pointer">
                <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
            </a>
            <a onclick="next()" class="hover:scale-125 duration-500 ease-in-out cursor-pointer">
                <img src="{{ asset('img/ic_next.png') }}" alt="" width="60">
            </a>
        </div>
    </section>

    <section id="navigasi2" hidden>
        <div
            class="w-40 h-12 absolute -bottom-6 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-center items-center bg-[#F2BA70] rounded-full shadow-xl">
            <a onclick="prev()" class="hover:scale-125 duration-500 ease-in-out cursor-pointer">
                <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
            </a>

        </div>
    </section>

    @else
    <div
        class="w-40 h-12 absolute -bottom-6 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-between items-center bg-[#F2BA70] rounded-full shadow-xl">
        <a href="{{ url('materi') }}" class="hover:scale-125 duration-500 ease-in-out cursor-pointer">
            <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
        </a>
        <a href="{{ url('materi') }}" class="hover:scale-125 duration-500 ease-in-out cursor-pointer">
            <img src="{{ asset('img/ic_next.png') }}" alt="" width="60">
        </a>
    </div>
    @endif

</div>
@endsection

@push('script')
<script>
    var halaman = 1;

    function next()
    {
        bunyi();
        $(`#halaman${halaman}`).prop('hidden', true);
        halaman++;
        if(halaman == 21) {
            $('#navigasi1').prop('hidden', true);
            $('#navigasi2').prop('hidden', false);
        }
        $(`#halaman${halaman}`).prop('hidden', false);
    }

    function prev()
    {
        bunyi();
        if(halaman != 1) {
            $(`#halaman${halaman}`).prop('hidden', true);
            halaman--;
            if(halaman != 21) {
                $('#navigasi1').prop('hidden', false);
                $('#navigasi2').prop('hidden', true);
            }
            $(`#halaman${halaman}`).prop('hidden', false);
        }
        
    }


</script>
@endpush