<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
             $table->string('nama_depan');
              $table->string('nama_belakang');
               $table->string('no_hp');
                $table->string('asal_sekolah');
                 $table->string('poto_ktp');
                  $table->string('poto_kk');
                   $table->enum('jurusan', ['Informatika', 'Industri']);
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
        Schema::dropIfExists('pendaftaran');
    }
};