@extends('layouts.app')

@section('title')
Materi
@endsection

@section('content')
<div class="py-4 rounded-lg h-[65vh] bg-white shadow-lg w-full relative">

    <div id="content"></div>

</div>
@endsection

@push('script')
<script src="{{ url('ckeditor/ckeditor.js') }}"></script>
<script>
    if(localStorage.getItem('halaman')) {
        var halaman = localStorage.getItem('halaman');
    } else {
        var halaman = 1;
        localStorage.setItem('halaman', halaman);
    }
    
    $("#content").load(`/halaman-${halaman}`);

    function next() {
        if(halaman == 55 || halaman == 66 || halaman == 88 || halaman == 99) {
            halaman = 7;
            localStorage.setItem('halaman', halaman);
            $("#content").load(`/halaman-${halaman}`);
        } else {
            halaman++;
            localStorage.setItem('halaman', halaman);
            $("#content").load(`/halaman-${halaman}`);
        }   
    }

    function prev() {
        halaman--;
        localStorage.setItem('halaman', halaman);
        $("#content").load(`/halaman-${halaman}`);
    
    }

    function navigation(hal) {
        halaman = hal;
        localStorage.setItem('halaman', halaman);
        $("#content").load(`/halaman-${halaman}`);
    }
</script>
@endpush