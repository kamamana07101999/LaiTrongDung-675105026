<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNghiemthudanhgiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nghiemthudanhgias', function (Blueprint $table) {
            $table->id();
            $table->string('mshoidong');
            $table->string('msdt');
            $table->string('name');
            $table->string('masv');
            $table->string('phanbien1');
            $table->string('phanbien2');
            $table->string('phanbien3');
            $table->string('thuky');
            $table->string('tendetai');
            $table->string('linhvuc');
            $table->integer('diemso');          
            $table->string('xeploai');
            $table->string('filename');
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
        Schema::dropIfExists('nghiemthudanhgias');
    }
}
