@extends('layouts.app')

@section('title')
Materi
@endsection

@section('content')
<div class="py-4 rounded-lg h-[65vh] bg-white shadow-lg w-full relative">

    <div id="content"></div>

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
<script>
    if(localStorage.getItem('halaman')) {
        var halaman = localStorage.getItem('halaman');
    } else {
        var halaman = 1;
        localStorage.setItem('halaman', halaman);
    }
    
    $("#content").load(`/halaman-${halaman}`);

    $("#next").click(function () {
        halaman++;
        localStorage.setItem('halaman', halaman);
        $("#content").load(`/halaman-${halaman}`);
    });

    $("#prev").click(function () {
        if (halaman == 1) {
            window.location.href = "/selamat-datang";
        }
        halaman--;
        localStorage.setItem('halaman', halaman);
        $("#content").load(`/halaman-${halaman}`);
    });

    function navigation(hal) {
        halaman = hal;
        localStorage.setItem('halaman', halaman);
        $("#content").load(`/halaman-${halaman}`);
    }
</script>
@endpush