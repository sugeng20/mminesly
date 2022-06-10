<div
    class="lg:w-96 w-72 h-16 absolute -top-7 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-center items-center bg-[#F2BA70] rounded-full shadow-lg">
    <span class="lg:text-3xl text-2xl text-[#622E2A] uppercase" style="font-family: 'BubbleWater'">Evaluasi</span>
</div>

<div class="overflow-y-scroll mt-8 relative flex flex-wrap h-[55vh] overflow-hidden">
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

</div>

@include('includes.navigasi')