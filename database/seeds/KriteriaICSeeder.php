<?php

use Illuminate\Database\Seeder;

class KriteriaICSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sample admin
        
		// sample customer
		App\LayananKriteriasICs::create([
		'name' => 'Apakah Kemutakhiran Koleksi Perpustukaan(up to date)',
		'search_key' => 'ic_koleksi_uptodate'
		
		]);

		        App\LayananKriteriasICs::create([
		'name' => 'Koleksi buku di perpustakaan bermanfaat untuk pekerjaan saya',
		'search_key' => 'ic_koleksi_bermanfaat'
		]);
		// sample customer
		App\LayananKriteriasICs::create([
		'name' => 'Koleksi surat kabar membuat saya mengetahui berita terkini',
		'search_key' => 'ic_surat_kabar'
		
		]);

		        App\LayananKriteriasICs::create([
		'name' => 'komputer perpustakaan untuk mudah di gunakan',
		'search_key' => 'ic_komputer'
		]);
		// sample customer
		App\LayananKriteriasICs::create([
		'name' => 'Koleksi Majalah dapat menghibur dan membantu saya memperoleh berita',
		'search_key' => 'ic_majalah'
		
		]);

				        App\LayananKriteriasICs::create([
		'name' => 'Saya sudah menemukan dan menjangkau koleksi di rak',
		'search_key' => 'ic_koleksi_rak'
		]);
		// sample customer
		App\LayananKriteriasICs::create([
		'name' => 'Adanya fasilitas internet di perpustakaan membantu saya memperoleh informasi yang saya cari',
		'search_key' => 'ic_internet'
		
		]);

						        App\LayananKriteriasICs::create([
		'name' => 'waktu operasional sesuai dengan kebutuhan',
		'search_key' => 'ic_waktu_operasional'
		]);
		// sample customer
		App\LayananKriteriasICs::create([
		'name' => 'opac(Katalog yang berada di Komputer mudah dan Nyaman',
		'search_key' => 'ic_opac'
		
		]);

								     


		$this->command->info('Berhasil menambah kriteria IC!');
    }
}
