<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = [
            [
                'name' => 'maklumat',
                'content' => 'Dengan ini Kami sanggup menyelenggarakan pelayanan sesuai standar yang telah ditetapkan dan apabila tidak menepati janji ini, kami siap menerima sanksi sesuai Peraturan Perundang-Undangan yang berlaku.',
                'content_en' => ''
            ],
            [
                'name' => 'tentang_kami',
                'content' => '<h3>Profil BBPP Batangkaluku</h3><br>Balai Besar Pelatihan Pertanian (BBPP) Batangkaluku ini merupakan perwujudan kesiapan BBPP Batangkaluku dalam rangka optimalisasi tugas dan fungsi sebagai lembaga pelatihan pertanian. Balai Besar Pelatihan Pertanian (BBPP) Batangkaluku merupakan salah satu UPT Badan Penyuluhan dan Pengembangan Sumberdaya Manusia Pertanian berperan penting dalam meningkatkan kapasitas sumberdaya manusia pertanian melalui pelatihan. Napak tilas perjalanan BBPP yaitu Tahun 1976 bernama “Balai Latihan Pegawai Pertanian Batangkaluku”, di tahun 2000 menjadi “Balai Diklat Pertanian”, lalu 2002 diubah menjadi “Balai Diklat Mekanisasi Pertanian”. Memasuki tahun 2003 menjadi “Balai Besar Diklat Mekanisasi Pertanian”, dan di tahun 2007 menjadi “Balai Besar Pelatihan Pertanian Batangkaluku” sampai sekarang.

Tantangan yang dihadapi oleh BBPP Batangkaluku adalah berupaya keras agar dapat mewujudkan VISI, yaitu  menjadi  lembaga  pelatihan terpercaya dan berdaya saing untuk menghasilkan SDM  pertanian yang kreatif, inovatif dan profesional. Meretas jalan untuk mewujudkan visi dari sejak kehadiran lembaga pelatihan ini, bukanlah hal yang mudah. Jalan panjang dan berliku telah dilalui, tantangan datang silih berganti termasuk seringnya terjadi perubahan dan penyesuaian organisasi karena tuntutan perkembangan pembangunan pertanian.',
                'content_en' => ''
            ],[
                'name' => 'struktur_organisasi',
                'content' => '<img src="'.asset('storage/content/img.png').'">',
                'content_en' => ''
            ]
        ];

        foreach ($content AS $row){
            if (!Content::where('name',$row['name'])->first()){
                Content::create($row);
            }
        }
    }
}
