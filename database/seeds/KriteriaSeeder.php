<?php

use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sample admin
        App\LayananKriteria::create([
		'name' => 'Pustakan Berpakaian Rapi dan Sopan',
		'search_key' => 'as_rapi'
		]);
		// sample customer
		App\LayananKriteria::create([
		'name' => 'Pustakawan Bersikap ramah dalam melayani',
		'search_key' => 'as_ramah'
		
		]);

		        App\LayananKriteria::create([
		'name' => 'Pustakawan tanggap membantu kesulitan saya',
		'search_key' => 'as_membantu_kesulitan'
		]);
		// sample customer
		App\LayananKriteria::create([
		'name' => 'Pustakawan mengerti kebutuhan saya ketika mencari Informasi',
		'search_key' => 'as_mencari_informasi'
		
		]);

		        App\LayananKriteria::create([
		'name' => 'Pustakawan mampu menjawab pertanyaan yang saya ajukan',
		'search_key' => 'as_menjawab_pertanyaan'
		]);
		// sample customer
		App\LayananKriteria::create([
		'name' => 'pustakawan membimbing mencari informasi koleksi saya',
		'search_key' => 'as_membimbing_mencari_informasi'
		
		]);


		


		$this->command->info('Berhasil menambah kriteria!');
    }
}
