<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Model::unguard();
   //       $this->call(ProductsTableSeeder::class);
		 // $this->call(PostsTableSeeder::class);
   //       $this->call(CommentsTableSeeder::class);
          $this->call(UsersSeeder::class);
          $this->call(ProductsSeeder::class);
          $this->call(KriteriaSeeder::class);
          $this->call(KriteriaICSeeder::class);
          $this->call(KriteriaLPSeeder::class);


    }
}
