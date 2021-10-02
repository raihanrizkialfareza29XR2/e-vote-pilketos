<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKandidatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kandidat', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255);
            $table->text('visi');
            $table->text('misi');
            $table->text('pengalaman');
            $table->string('periode');
            $table->string('foto', 255);
            $table->timestamps();
            $table->integer('jumlahsuara');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kandidat');
    }
}
