<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LayananKriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan_kriterias', function (Blueprint $table) {
        $table->increments('id');
        $table->string('search_key');
        $table->string('name');
        $table->integer('nilai')->unsigned();
        $table->timestamps();
        });

                Schema::create('layanan_kriterias_i_cs', function (Blueprint $table) {
        $table->increments('id');
        $table->string('search_key');
        $table->string('name');
        $table->integer('nilai')->unsigned();
        $table->timestamps();
        });

                Schema::create('layanan_kriterias_l_ps', function (Blueprint $table) {
        $table->increments('id');
        $table->string('search_key');
        $table->string('name');
        $table->integer('nilai')->unsigned();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('layanan_kriterias');
        Schema::drop('layanan_kriterias_i_cs');
        Schema::drop('layanan_kriterias_l_ps');   
    }
}
