<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
class CustomersTableSeeder extends Seeder {
public function run()
{
$faker = Faker::create();
foreach ( range(1,10) as $index ) {
DB::insert('insert into customers (name, phone, address) values (:name, :phone, :address)', [
'name' => $faker->name,
'phone' => $faker->phoneNumber,
'address' => $faker->address
]);
}
$this->command->info('Berhasil menambah customer!');
}
}