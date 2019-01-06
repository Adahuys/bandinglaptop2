<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop', function (Blueprint $table) {
            $table->increments('id');//id auto increment
            $table->string('seri_laptop'); //seri laptop
            $table->string('processor'); //processor clockspeed
            $table->string('ram'); //ram size
            $table->string('vga');//vga size
            $table->string('storage'); //storage size
            $table->string('battery');//battery capacity
            $table->string('price');//harga
            $table->string('weight');//berat laptop
            $table->timestamps(); //membuat kolom created_at dan updated_at sebagai fungsi dasar laravel
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_laptops');
    }
}
