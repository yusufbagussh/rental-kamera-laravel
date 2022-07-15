<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '1',
            'produk_nama' => 'Kamera Canon 1100D',
            'produk_keterangan' => 'Kamera Canon EOS 1100D Kit ini dibekali spesifikasi resolusi 12MP dengan sensor CMOS, ISO 100-6400, shutter speed 30-1/4000 detik, dan HD video. ',
            'produk_harga' => 100000,
            'produk_gambar' => 'KC1100D.jpg',
            'produk_status' => 'Tersedia',
        ]);

        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '1',
            'produk_nama' => 'Kamera Nikon D90',
            'produk_keterangan' => '12.9 megapixel DX-format CMOS sensor (effective pixels: 12.3 million) 3.0-inch 920,000 pixel (VGA x 3 colors) TFT-LCD (same as D3 and D300) Live View with contrast-detect AF, face detection Image sensor cleaning (sensor shake) Illuminated focus points',
            'produk_harga' => 200000,
            'produk_gambar' => 'KND90.jpg',
            'produk_status' => 'Tersedia',
        ]);

        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '1',
            'produk_nama' => 'Kamera Mirrorless Fujifilm X-H1 (Body Only)',
            'produk_keterangan' => '24.3MP APS-C X-Trans CMOS III Sensor X-Processor Pro Engine 5-Axis In-Body Image Stabilization Internal DCI 4K Video dan F-Log Gamma 0.75x 3.69m-Dot Electronic Viewfinder',
            'produk_harga' => 385000,
            'produk_gambar' => 'KMFu.jpg',
            'produk_status' => 'Tersedia',
        ]);
        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '1',
            'produk_nama' => 'Kamera IR Canon 40D IR V9.8 +Canon 18-55mm',
            'produk_keterangan' => '100–1600 in 1/3 EV steps; 3200 expansion available Storage media: CompactFlash (CF) (Type I or Type II) and Microdrive (max 32GB) Focus areas: 9 user points (cross type)',
            'produk_harga' => 350000,
            'produk_gambar' => 'KIR Canon 40D.jpg',
            'produk_status' => 'Tersedia',
        ]);
        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '1',
            'produk_nama' => 'Kamera 360 Ricoh Theta S',
            'produk_keterangan' => 'Kamera 360 Theta S, memiliki sensor CMOS 1/2,3 inci dengan resolusi masing-masing 12 megapixel.Untuk video , ia bisa merekam dalam resolusi 1080p selama 25 menit.',
            'produk_harga' => 200000,
            'produk_gambar' => 'K360 Ricoh The.jpg',
            'produk_status' => 'Tersedia',
        ]);
        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '1',
            'produk_nama' => 'Kamera Medium Format Phase one',
            'produk_keterangan' => 'Phase One XF (Image: Phase One XF 100MP) Seharga mobil KIA Grand Sedona, kamera Phase One XF 100 megapixel adalah sebuah kamera medium format yang memiliki sensor beresolusi ekstra besar, yakni 100 megapixel. Perangkat kamera ini adalah gabungan bodi Phas',
            'produk_harga' => 3600000,
            'produk_gambar' => 'KMF.jpg',
            'produk_status' => 'Tersedia',
        ]);
        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '1',
            'produk_nama' => 'KC5D MK IV',
            'produk_keterangan' => '30.4MP Full-Frame CMOS Sensor DIGIC 6+ Image Processor 3.2″ 1.62m-Dot Touchscreen LCD Monitor DCI 4K Video at 30 fps; 8.8MP Still Grab 61-Point High Density Reticular AF',
            'produk_harga' => 600000,
            'produk_gambar' => 'KC5D MK IV.jpg',
            'produk_status' => 'Tersedia',
        ]);
        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '1',
            'produk_nama' => 'KND850',
            'produk_keterangan' => 'frame dengan resolusi 45,4 megapiksel. Kamera ini memiliki continuous shooting speed maksimal hingga 7fps, sehingga kamu bisa memotret 7 gambar dalam satu detik.',
            'produk_harga' => 600000,
            'produk_gambar' => 'KND850.jpg',
            'produk_status' => 'Tersedia',
        ]);
        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '1',
            'produk_nama' => 'KND7500',
            'produk_keterangan' => 'Sensor APS-C, 20 MP EXPEED 5 processor ISO 100-51200, bisa ditingkatkan ke ISO 1.6 juta Kecepatan foto berturut-turut 8 foto per detik, buffer 50 foto RAW 14 bit Video 4K UHD',
            'produk_harga' => 400000,
            'produk_gambar' => 'KND7500.jpg',
            'produk_status' => 'Tersedia',
        ]);
        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '2',
            'produk_nama' => 'KVHSony PD 177',
            'produk_keterangan' => 'Resolusi Kamera 1.37 MP, Zoom Optik x 20, Zoom Digital , Tipe Memori HDD',
            'produk_harga' => 300000,
            'produk_gambar' => 'KVHSony PD 177.jpg',
            'produk_status' => 'Tersedia',
        ]);
        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '2',
            'produk_nama' => 'KVHSony HXR-MC2500',
            'produk_keterangan' => '1/4″ Exmor R CMOS Sensor 26.8mm Equivalent Wide-Angle Lens Records SD in DV AVI File OLED Viewfinder with 1.44 Million Dots Flip-Up 3″ LCD with 921k Dot Resolution',
            'produk_harga' => 250000,
            'produk_gambar' => 'Sony HXR-MC2500.jpg',
            'produk_status' => 'Tersedia',
        ]);
        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '2',
            'produk_nama' => 'Kamera Video Handycam Panasonic MDH-2',
            'produk_keterangan' => 'Kamera Film 35 mm Video: 28,0 - 729,6 mm [16:9] 36,2 - 893,0 mm [4:3] Foto: 33,2 - 697,6 mm [3:2] 28,0 - 729,6 mm [16:9] 33,9 - 712,6 mm [4:3] Diameter Filter: 49 mm: Merek Lensa: Lensa Panasonic: BAGIAN KAMERA Cahaya Standar: 1.400 lx: Cahaya Minimum: 2 ',
            'produk_harga' => 240000,
            'produk_gambar' => 'KVH.png',
            'produk_status' => 'Tersedia',
        ]);
        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '2',
            'produk_nama' => 'Sony Camcorder CX 190',
            'produk_keterangan' => 'Key specs
            sensor type: CMOS
            optical sensor size: 1/5.8 in
            effective megapixels: 1.31 Mpx
            maximum aperture: 3.2
            auto focus: yes
            display diagonal: 2.7 in
            touchscreen: no
            maximum resolution: 1920, 1080 px',
            'produk_harga' => 130000,
            'produk_gambar' => 'OIP.jpg',
            'produk_status' => 'Tersedia',
        ]);
        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '2',
            'produk_nama' => 'Kamera Video Handycam Panasonic MDH-2',
            'produk_keterangan' => 'Kamera Film 35 mm Video: 28,0 - 729,6 mm [16:9] 36,2 - 893,0 mm [4:3] Foto: 33,2 - 697,6 mm [3:2] 28,0 - 729,6 mm [16:9] 33,9 - 712,6 mm [4:3] Diameter Filter: 49 mm: Merek Lensa: Lensa Panasonic: BAGIAN KAMERA Cahaya Standar: 1.400 lx: Cahaya Minimum: 2 ',
            'produk_harga' => 240000,
            'produk_gambar' => 'KVH.png',
            'produk_status' => 'Tersedia',
        ]);
        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '2',
            'produk_nama' => 'Sony 8Mm Camcorder',
            'produk_keterangan' => 'Sensor
            TIPE SENSOR
            Sensor CMOS Exmor R bercahaya belakang jenis 1/2.5 (7,20mm)
            PIKSEL EFEKTIF (VIDEO)
            sekitar 8,29 Megapiksel(16:9)2
            PIKSEL EFEKTIF (FOTO)
            sekitar 8,29 Megapiksel (16:9)/sekitar 6,22 Megapiksel (4:3)
            Prosesor
            PROSESOR GAMBAR
            Prose',
            'produk_harga' => 600000,
            'produk_gambar' => 's-l1000.jpg',
            'produk_status' => 'Tersedia',
        ]);
        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '3',
            'produk_nama' => 'Tripod Manfrotto 725B',
            'produk_keterangan' => 'Manfrotto 725B adalah tripod kecil yang solid dan ringan yang akan melakukan pekerjaan itu, tetapi jelas tidak memiliki beberapa fitur tripod yang lebih mahal. Ada beberapa hal yang harus Anda ketahui sebelum memutuskan untuk membeli tripod ini. Kepala bo',
            'produk_harga' => 40000,
            'produk_gambar' => 'Tripod Manfrotto 725B.jpg',
            'produk_status' => 'Tersedia',
        ]);
        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '3',
            'produk_nama' => 'Tripod Monopod Manfrotto',
            'produk_keterangan' => 'Material  Aluminium Bobot	1,56 kg Tinggi maksimum  150 cm Tinggi minimum  40 cm Daya tahan beban  Maks. 8 kg Jumlah bagian kaki  4 Kepala  Ball head',
            'produk_harga' => 40000,
            'produk_gambar' => 'Tipod Monopod Manfrotto.jpg',
            'produk_status' => 'Tersedia',
        ]);
        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '3',
            'produk_nama' => 'Beholder DS1',
            'produk_keterangan' => 'The Beholder Gimbal DS1 is a 3-axis handheld camera stabilizer designed for large DSLRs and mirrorless cameras to achieve smooth, stable footage.',
            'produk_harga' => 200000,
            'produk_gambar' => 'BeholderDS1.jpg',
            'produk_status' => 'Tersedia',
        ]);
        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '3',
            'produk_nama' => 'Fujifilm XF 27mm f2.8 Pancake',
            'produk_keterangan' => 'Fujifilm XF 27mm f2.8 pancake Fujinon The Fujifilm XF 27mm f2.8 pancake Fujinon Lens from Fujifilm is an extremely compact (2.41 x 0.91?), lightweight (2.75 oz) prime lens with a versatile 35mm equivalent focal length of 41mm. It provides a 55.5° angle of',
            'produk_harga' => 60000,
            'produk_gambar' => 'Fujifilm XF.jpg',
            'produk_status' => 'Tersedia',
        ]);
        DB::table('products')->insert([
            'produk_user' => '1',
            'produk_kategori' => '3',
            'produk_nama' => 'Tripod Libec',
            'produk_keterangan' => 'Tripod TH 650 EX Video Didesain untuk digunakan dengan camcorder DV dan HD yang lebih kecil saat ini, Libec’s 650EX adalah sistem tripod all-in-one yang ringkas. ',
            'produk_harga' => 60000,
            'produk_gambar' => 'Tripod Libec.jpg',
            'produk_status' => 'Tersedia',
        ]);
    }
}
