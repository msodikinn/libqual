<?php

use Illuminate\Database\Seeder;

class KriteriaLPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sample admin
       						        App\LayananKriteriasLP::create([
		'name' => 'suasana perpustakaan terasa tenang dan kondusif untuk membaca',
		'search_key' => 'lp_suasana_perpustakaan'
		]);
		// sample customer
		App\LayananKriteriasLP::create([
		'name' => 'ruang perpustakaan yang menarik membuat saya berkeinginan untuk mengunjungi perpustakaan',
		'search_key' => 'ip_ruang_perpustakaan'
		
		]);

										        App\LayananKriteriasLP::create([
		'name' => 'Suasana Perpustukaan mendukung saya fokus/konsentrasi pada apa yang saya baca',
		'search_key' => 'lp_konsentrasi_membaca'
		]);
		// sample customer
		App\LayananKriteriasLP::create([
		'name' => 'Ruang perpustakan merupakan tmepat positif untuk saya menghabisakan waktu',
		'search_key' => 'ip_tempat_positif'
		
		]);

										        App\LayananKriteriasLP::create([
		'name' => 'Ruang Perpustukaan membuat saya jadi terinspirasi',
		'search_key' => 'lp_inspirasi'
		]);
		// sample customer
		App\LayananKriteriasLP::create([
		'name' => 'Keadaan fasilitas-fasilitas fisik(kursi,meja, dll) masih bagus',
		'search_key' => 'ip_fasilitas'
		
		]);

		


		$this->command->info('Berhasil menambah kriteria LP!');
    }
}
