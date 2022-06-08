@extends('layouts.app')

@section('title')
Selamat Datang
@endsection

@section('content')
<div class="py-4 rounded-lg h-[65vh] bg-white shadow-lg w-full relative">
    <div
        class="lg:w-96 w-72 h-16 absolute -top-7 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-center items-center bg-[#F2BA70] rounded-full shadow-lg">
        <span class="lg:text-3xl text-2xl text-[#622E2A] uppercase" style="font-family: 'BubbleWater'">Forum
            Diskusi</span>
    </div>


    <div class="overflow-y-scroll mt-8 relative flex flex-wrap h-[55vh] overflow-hidden">

        <div class="px-2 lg:px-16 mb-10 w-full">

            @forelse ($messages as $message)
            @if(Auth::user()->id == $message->id_user)
            <div class="flex flex-wrap justify-end mb-3">
                <div class="w-full justify-end flex mr-3 mb-1">
                    <p class="text-xs">Subject : {{ $message->subject }}</p>
                </div>
                <div class="py-2 px-4 text-white max-w-md rounded-xl leading-relaxed bg-green-700">
                    {!! $message->pesan !!}
                </div>
                <div class="w-full flex mr-3 mt-1 justify-end">
                    <p class="text-xs">{{ $message->user->nama_depan }}</p>
                </div>
            </div>
            @else
            <div class="flex flex-wrap">
                <div class="w-full flex ml-3 mb-1">
                    <p class="text-xs">Subject : {{ $message->subject }}</p>
                </div>
                <div class="py-2 px-4 text-white max-w-md rounded-xl leading-relaxed bg-slate-700">
                    {!! $message->pesan !!}
                </div>
                <div class="w-full flex ml-3 mt-1 max-w-md">
                    <p class="text-xs mr-3">{{ $message->user->nama_depan }}</p>
                    <a href="{{ url('forum-diskusi-pesan') }}?subject={{ $message->subject }}"
                        class="text-xs text-green-800">Tanggapi</a>

                </div>
            </div>
            @endif
            @empty

            <p class="mt-10 text-center text-2xl font-bold">Belum Ada Pesan</p>
            @endforelse

        </div>

    </div>



    <div
        class="w-40 h-12 absolute -bottom-6 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-between items-center bg-[#F2BA70] rounded-full shadow-xl">

        <button id="prev" class="hover:scale-125 duration-500 ease-in-out">
            <img src="{{ asset('img/ic_prev.png') }}" alt="" width="60">
        </button>
        <button id="next" class="hover:scale-125 duration-500 ease-in-out">
            <img src="{{ asset('img/ic_next.png') }}" alt="" width="60">
        </button>
    </div>

    <a href="{{ url('forum-diskusi-pesan') }}"
        class="px-6 py-2 absolute bottom-6 right-10 bg-cover bg-center flex justify-between items-center bg-green-600 text-white rounded-full shadow-xl hover:scale-110 duration-500 ease-in-out">
        Kirim Pesan
    </a>
</div>
@endsection

@push('script')
<script src="{{ url('ckeditor/ckeditor.js') }}"></script>
<script>
    localStorage.setItem('halaman', 1);
</script>
@endpush