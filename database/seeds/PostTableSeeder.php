<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
class PostsTableSeeder extends Seeder {
public function run()
{
	$faker = Faker::create();
	for ($i=0; $i <= 10 ; $i++) {
	App\Post::insert([
	'title' => $faker->sentence,
	'content' => $faker->paragraph,
	'published' => rand(0,1)
	]);
	}
	$this->command->info('Berhasil menambah Posts!');
}
}