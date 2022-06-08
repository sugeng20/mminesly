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
        <div class="w-full px-8 mb-10">
            <div class="w-full mt-2 flex px-4 mb-4">
                <label for="subject" class="mr-4">Subject</label>
                <input type="text" name="subject" id="subject" placeholder="Masukan Subject"
                    class="bg-slate-100 text-slate-900 w-full rounded-md p-3" required>
            </div>

            <div class="w-full px-4 flex">
                <label for="subject" class="mr-6">Pesan</label>
                <div class="w-full">

                    <textarea name="pesan" id="pesan" class="ckeditor" style="width: 100%" required></textarea>
                </div>
            </div>

            <div class="w-full flex justify-end px-4 mt-1">
                <button type="submit"
                    class="py-1 px-10 bg-[#4BB15E] text-white  text-lg rounded-xl hover:opacity-80 hover:shadow-lg hover:scale-105 transition duration-500">
                    kirim
                </button>
            </div>
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
</div>
@endsection

@push('script')
<script src="{{ url('ckeditor/ckeditor.js') }}"></script>
<script>
    localStorage.setItem('halaman', 1);
</script>
@endpush