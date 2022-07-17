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
    
    if(halaman == 110) {
        console.log('oke');
        $('#navigasi').empty();
        
    }

    function next() {

        bunyi();
        if(halaman == 110) {
            console.log('oke');
        }

        if(halaman == 12 || halaman == 55 || halaman == 66 || halaman == 88 || halaman == 99) {
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
        bunyi();

        if(halaman == 14 || halaman == 56 || halaman == 67 || halaman == 89 || halaman == 100) {
            halaman = 7;
            localStorage.setItem('halaman', halaman);
            $("#content").load(`/halaman-${halaman}`);
        } else {
            if(halaman == 4) {
                halaman = 2;
            }
            halaman--;
            localStorage.setItem('halaman', halaman);
            $("#content").load(`/halaman-${halaman}`);
        }

        
    
    }

    function navigation(hal) {
        bunyi();
        halaman = hal;
        localStorage.setItem('halaman', halaman);
        $("#content").load(`/halaman-${halaman}`);
    }
</script>
@endpush