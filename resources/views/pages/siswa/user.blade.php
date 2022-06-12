<div
    class="lg:w-96 w-72 h-16 absolute -top-7 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-center items-center bg-[#F2BA70] rounded-full shadow-lg">
    <span class="lg:text-3xl text-2xl text-[#622E2A] uppercase" style="font-family: 'BubbleWater'">Pengguna</span>
</div>

<div class="overflow-y-scroll mt-8 relative flex flex-wrap h-[55vh] overflow-hidden">
    <div class="w-full flex flex-wrap px-6">
        <div class="w-full lg:w-1/2 flex justify-center" data-aos="fade-up" data-aos-anchor="#content"
            data-aos-delay="500">
            <table class="text-xl">
                <tr>
                    <td width="200">Nama Lengkap</td>
                    <td>: {{ Auth::user()->nama_depan }}</td>
                </tr>
                <tr>
                    <td width="200">Nama Belakang</td>
                    <td>: {{ Auth::user()->nama_belakang }}</td>
                </tr>

                <tr>
                    <td width="200">Username</td>
                    <td>: {{ Auth::user()->nama_belakang }}</td>
                </tr>

                <tr>
                    <td width="200">NIS/NIK</td>
                    <td>: {{ Auth::user()->nis_nik }}</td>
                </tr>

                <tr>
                    <td width="200">Email</td>
                    <td>: {{ Auth::user()->email }}</td>
                </tr>

                <tr>
                    <td width="200">Role</td>
                    <td>: {{ Auth::user()->role }}</td>
                </tr>



            </table>
        </div>
        <div class="w-full lg:w-1/2 flex items-center justify-center" data-aos="fade-up" data-aos-anchor="#content"
            data-aos-delay="1000">
            @if(Auth::user()->role == 'SISWA')
            <img src="{{ asset('img/user-siswa.png') }}" width="250" class="" alt="">
            @else
            <img src="{{ asset('img/user-guru.png') }}" width="250" class="" alt="">
            @endif
        </div>

    </div>

</div>

@include('includes.navigasi')