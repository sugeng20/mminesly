<div
    class="lg:w-96 w-72 h-16 absolute -top-7 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-center items-center bg-[#F2BA70] rounded-full shadow-lg">
    <span class="lg:text-3xl text-2xl text-[#622E2A] uppercase" style="font-family: 'BubbleWater'">Evaluasi</span>
</div>

<div class="overflow-y-scroll mt-8 relative flex flex-wrap h-[55vh] overflow-hidden">
    @if(Auth::user()->role == 'SISWA')
    @if($cek > 0)
    <div class="w-full flex flex-wrap px-6" data-aos="fade-up" data-aos-delay="0">
        <div class="w-full lg:w-1/2 m-auto">
            <p class="text-3xl font-bold text-center mb-6">Skor Anda Adalah : </p>
            <p class="text-7xl font-bold text-center">{{ $evaluation->score }}</p>
            <div class="flex justify-center mt-3" data-aos="fade-up" data-aos-anchor="#content" data-aos-delay="500">
                <a href="{{ url('review', $evaluation->id) }}"
                    class="py-3 px-10 bg-[#4BB15E] cursor-pointer text-white m-auto text-2xl rounded-full hover:opacity-80 hover:shadow-lg hover:scale-125 transition duration-500 font-bubbleWater">Review</a>
            </div>
        </div>
        <div class="w-full lg:w-1/2 flex h-full justify-center items-center">
            <img src="{{ asset('img/evaluasi.png') }}" width="350" class="float-right" alt="" data-aos="fade-up"
                data-aos-anchor="#content" data-aos-delay="500">
        </div>
    </div>
    @else
    <div class="w-full px-6" data-aos="fade-up" data-aos-delay="0">
        <img src="{{ asset('img/evaluasi.png') }}" width="350" class="float-right" alt="" data-aos="fade-up"
            data-aos-anchor="#content" data-aos-delay="500">
        <p class="text-center leading-loose text-sm text-slate-900 md:text-lg lg:text-xl lg:leading-loose font-bold mb-1"
            data-aos="fade-up" data-aos-anchor="#content" data-aos-delay="1000">
            KETENTUAN PENGERJAAN EVALUASI
        </p>
        <ul class="list-decimal text-style-primary ml-4" data-aos="fade-up" data-aos-anchor="#content"
            data-aos-delay="1500">
            <li>Klik “OKE” untuk memulai menjawab soal</li>
            <li>Evaluasi ini terdiri dari soal-soal pilihan ganda sehingga diharapkan Anda harus menjawabnya dengan
                benar</li>
            <li>Klik salah satu jawaban untuk menuju ke pertanyaan selanjutnya</li>
            <li>Setelah selesai menjawab, maka akan tampil skor yang diperoleh</li>
            <li>Klik tombol “Mulai Lagi” untuk mengulangi evaluasi atau klik “selesai” untuk ke halaman selanjutnya</li>
        </ul>
        <div class="flex justify-center mb-6" data-aos="fade-up" data-aos-anchor="#content" data-aos-delay="2000">
            <a href="{{ url('soal') }}"
                class="py-3 px-10 bg-[#4BB15E] cursor-pointer text-white m-auto text-2xl rounded-full hover:opacity-80 hover:shadow-lg hover:scale-125 transition duration-500 font-bubbleWater">Mulai</a>
        </div>
    </div>
    @endif
    @else
    <div class="w-full px-6" data-aos="fade-up" data-aos-delay="0">
        <div class="flex justify-start mt-2 mb-4">
            <a href="{{ url('soal') }}"
                class="py-1 px-6 mr-4 bg-[#4BB15E] cursor-pointer text-white text-md rounded-full hover:opacity-80 hover:shadow-lg hover:scale-105 transition duration-500">Lihat
                Soal</a>
            <a href="{{ url('excel') }}"
                class="py-1 px-6 mr-4 bg-green-700 cursor-pointer text-white text-md rounded-full hover:opacity-80 hover:shadow-lg hover:scale-105 transition duration-500">Export
                Excel</a>
            <a href="{{ url('pdf') }}"
                class="py-1 px-6 mr-4 bg-red-700 cursor-pointer text-white text-md rounded-full hover:opacity-80 hover:shadow-lg hover:scale-105 transition duration-500">Export
                PDF</a>
        </div>
        <table class="border-separate  border w-full border-slate-300" style="border-spacing: 0px 0px">
            <tr>
                <th class="border border-slate-300 p-2">No</th>
                <th class="border border-slate-300 p-2">Nama Siswa</th>
                <th class="border border-slate-300 p-2">Skor</th>
            </tr>
            @php
            $no = 1;
            @endphp
            @forelse ($evaluations as $evaluation)
            <tr>
                <td class="border border-slate-300 px-4 py-2">{{ $no++ }}</td>
                <td class="border border-slate-300 px-4 py-2">{{ $evaluation->user->nama_depan }} {{
                    $evaluation->user->nama_belakang }}</td>
                <td class="border border-slate-300 px-4 py-2">{{ $evaluation->score }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center border border-slate-300 py-4">Belum Ada Siswa yang mengerjakan</td>
            </tr>
            @endforelse
        </table>
    </div>
    @endif



</div>

@include('includes.navigasi')