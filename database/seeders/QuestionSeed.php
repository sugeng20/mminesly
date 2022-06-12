<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class QuestionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'id' => 1,
                'question' => 'Benua yang terletak pada 26° BT-170° BT dan 11° LS-80° LU adalah......',
                'a' => 'Benua Amerika',
                'b' => 'Benua Asia',
                'c' => 'Benua Eropa',
                'd' => 'Benua Afrika',
                'key' => 'b',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'question' => 'Setiap benua-benua yang ada di dunia memiliki sebutan/ciri khasnya tersendiri. Adapun Benua yang dijuluki sebagai Benua Merah adalah......',
                'a' => 'Benua Amerika',
                'b' => 'Benua Asia',
                'c' => 'Benua Eropa',
                'd' => 'Benua Afrika',
                'key' => 'a',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'question' => 'Secara geografis, Benua Amerika menjadi beberapa bagian wilayah yaitu.....',
                'a' => 'Amerika Selatan, Amerika Utara, Amerika Tengah, dan Kepulauan Karibia',
                'b' => 'Amerika Utara, Amerika Barat, Amerika Selatan, Kepulauan Karibia',
                'c' => 'Kepulauan Karibia, Amerika Barat, Amerika Latin, dan Amerika Serikat',
                'd' => 'Amerika Barat, Amerika Selatan, Amerika Utara, Kanada',
                'key' => 'a',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'question' => 'Berikut adalah luas Benua yang mencapai 10.355.000 km² termasuk luas Benua dari.....',
                'a' => 'Benua Afrika',
                'b' => 'Benua Asia',
                'c' => 'Benua Eropa',
                'd' => 'Benua Amerika',
                'key' => 'c',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'question' => 'Benua yang terletak pada 113° BT-155° BT dan 10° LS-43° LS adalah.....',
                'a' => 'Benua Afrika',
                'b' => 'Benua Asia',
                'c' => 'Benua Amerika',
                'd' => 'Benua Australia',
                'key' => 'd',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 6,
                'question' => 'Negara yang memiliki 4 musim dan memiliki ciri musim yang khas yakni musim bunga sakura adalah.....',
                'a' => 'Amerika Serikat',
                'b' => 'Indonesia',
                'c' => 'Jepang',
                'd' => 'Mesir',
                'key' => 'c',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 7,
                'question' => 'Mengapa negara Indonesia memiliki sumber daya hayati yang melimpah dan tanah yang subur......',
                'a' => 'Memiliki potensi wilayah yang penuh dengan perairan yang melimpah',
                'b' => 'Memiliki cuaca yang mendukung untuk bercocok tanam maupun lainnya',
                'c' => 'Adanya Lempeng Indo-Australia, lempeng Eurasia, dan lempeng Pasifik sehingga mempengaruhi kondisi geografis Indonesia',
                'd' => 'Rawan bencana seperti gempa, gunung meletus, dan tsunami.',
                'key' => 'c',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 8,
                'question' => 'Salah satu keunikan yang ada pada jenis floranya di Indonesia yaitu Bunga Raflesia Arnoldi. Bunga ini dapat ditemukan di wilayah......',
                'a' => 'Jawa-Bali',
                'b' => 'Sumatera-Kalimantan',
                'c' => 'Sulawesi-Maluku',
                'd' => 'Papua-Ambon',
                'key' => 'b',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 9,
                'question' => 'Negara yang terkenal memiliki gurun dan cuaca panas yang ekstrim adalah.....',
                'a' => 'Inggris',
                'b' => 'Indonesia',
                'c' => 'Arab Saudi',
                'd' => 'Amerika Serikat',
                'key' => 'c',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 10,
                'question' => 'Negara yang terletak pada 24°33’LU-70°23’LU dan 172°27’BB-66°51’BB yaitu negara.....',
                'a' => 'Amerika Serikat',
                'b' => 'Indonesia',
                'c' => 'Inggris',
                'd' => 'Jepang',
                'key' => 'a',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 11,
                'question' => 'Negara Amerika Serikat termasuk negara yang kaya akan sumber daya geologi. Adapun sumber daya geologinya meliputi.....',
                'a' => 'Padi,Kapas,Gandum, dan Batu Bara',
                'b' => 'Batu bara, minyak bumi, tembaga, posfat, timah, dan besi',
                'c' => 'Minyak bumi, Kapas, Gandung, dan Terigu',
                'd' => 'Besi,Timah, Posfat, Daging Hewan, dan Padi',
                'key' => 'b',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 12,
                'question' => 'Benua dengan penghasil beras terbesar di Dunia adalah Benua.....',
                'a' => 'Benua Eropa',
                'b' => 'Benua Australia',
                'c' => 'Benua Amerika',
                'd' => 'Benua Asia',
                'key' => 'd',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 13,
                'question' => 'Minyak bumi menjadi komoditas kebutuhan bahan bakar kendaraan di seluruh dunia. Namun penghasil minyak bumi terbesar di Dunia terletak pada wilayah....',
                'a' => 'Asia Tenggara',
                'b' => 'Asia Barat',
                'c' => 'Asia Timur Tengah',
                'd' => 'Asia Selatan',
                'key' => 'c',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 14,
                'question' => 'Benua Afrika mempunyai potensi yang menonjol pada bidang pertanian meliputi.....',
                'a' => 'Jagung, kacang, ubi jalar, dan padi',
                'b' => 'Gandum, Gula, Terigu, dan Padi',
                'c' => 'Kacang,Ubi Jalar, Sayur-sayuran, dan buah-buahan',
                'd' => 'Kopi,Minyak,Kacang, dan Telur',
                'key' => 'a',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 15,
                'question' => 'Jumlah populasi penduduk terbanyak di permukaan bumi adalah.....',
                'a' => 'Benua Amerika',
                'b' => 'Benua Asia',
                'c' => 'Benua Afrika',
                'd' => 'Benua Australia',
                'key' => 'b',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 16,
                'question' => 'Mayoritas penduduk Amerika Serikat lebih banyak berdominan memeluk agama.....',
                'a' => 'Islam',
                'b' => 'Hindu',
                'c' => 'Kristen',
                'd' => 'Katolik',
                'key' => 'c',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 17,
                'question' => 'Rata-rata masyarakat di Benua Asia yang memiliki profesi di bidang industri tersebar di wilayah negara.....',
                'a' => 'Thailand, Myanmar, Vietnam, dan Laos',
                'b' => 'Inggris, Jerman, Belanda, dan Swiss',
                'c' => 'Singapura, Jepang, Taiwan, China, dan Korea Selatan',
                'd' => 'Mesir, Afrika Selatan, Pantai Gading, dan Amerika Serikat',
                'key' => 'c',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 18,
                'question' => 'Masyarakat di seluruh dunia sangat mengenal sekali dengan masyarakat yang memiliki budaya ramah dan senyum, budaya ini sangat melekat pada masyarakat yang ada di Benua......',
                'a' => 'Benua Asia',
                'b' => 'Benua Amerika',
                'c' => 'Benua Afrika',
                'd' => 'Benua Australia',
                'key' => 'a',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 19,
                'question' => 'Salah satu dampak adanya interaksi antarruang terhadap benua asia dan benua lainnya adalah.....',
                'a' => 'Semakin meningkatkan produktivitas di bidang perdagangan, pertanian, perekonomian, dan pendidikan sehingga terjalinnya kerja sama antar negara satu dengan negara lainnya secara baik',
                'b' => 'Makin banyaknya aksi peperangan, terorisme, maupun kejahatan lainnya akibat dari keserakahan negara maju',
                'c' => 'Tidak adanya unsur politik atau kerja sama bilateral antar negara dari benua asia maupun benua-benua lainnya sehingga menyebabkan runtuhnya perekonomian antar negara',
                'd' => 'Makin maraknya strategi bisnis ilegal yang dapat merusak sumber daya alam di negara-negara lainnya akibat dari pemimpin yang serakah',
                'key' => 'a',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 20,
                'question' => 'Apa saja yang termasuk dalam negara-negara yang maju di permukaan Bumi ini.....',
                'a' => 'Inggris, Indonesia, India, dan Bangladesh',
                'b' => 'Rusia, Myanmar, Afrika Selatan, dan Pantai Gading',
                'c' => 'Inggris, Amerika Serikat, Rusia, Perancis',
                'd' => 'Thailand, Vietnam, Uruguay, Chile',
                'key' => 'c',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}