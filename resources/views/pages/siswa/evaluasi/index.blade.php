<div
    class="lg:w-96 w-72 h-16 absolute -top-7 left-1/2 -translate-x-1/2 bg-cover bg-center flex justify-center items-center bg-[#F2BA70] rounded-full shadow-lg">
    <span class="lg:text-3xl text-2xl text-[#622E2A] uppercase" style="font-family: 'BubbleWater'">Evaluasi</span>
</div>

<div class="overflow-y-scroll mt-8 relative flex flex-wrap h-[55vh] overflow-hidden">
    <div class="w-full lg:w-1/2 px-1 justify-center m-auto" data-aos="fade-up" data-aos-offset="200" data-aos-delay="0"
        data-aos-duration="1000">
        <p class="text-center leading-loose text-sm text-slate-900 md:text-lg lg:text-xl lg:leading-loose">
            Penjelasan Ketentuan Pengerjaan Evaluasi Pilihan Ganda
        </p>
        <div class="flex justify-center mb-6">
            <a href="{{ url('soal') }}"
                class="py-3 px-10 bg-[#4BB15E] cursor-pointer text-white m-auto text-2xl rounded-full hover:opacity-80 hover:shadow-lg hover:scale-125 transition duration-500 font-bubbleWater">Mulai</a>
        </div>
    </div>
    <div class="w-full lg:w-1/2 px-6 flex m-auto justify-center" data-aos="fade-up" data-aos-offset="200"
        data-aos-delay="500" data-aos-duration="1000">
        <img src="{{ asset('img/kompetensi-dasar.png') }}" width="350" alt="">
    </div>

</div>

@include('includes.navigasi')