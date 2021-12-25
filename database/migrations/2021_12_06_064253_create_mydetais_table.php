<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMydetaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mydetais', function (Blueprint $table) {
            $table->id();
            $table->string('msdt');
            $table->string('name');
            $table->string('masv');
            $table->string('tendetai');
            $table->date('thoigiandangky');
            $table->date('thoigiannop');
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
        Schema::dropIfExists('mydetais');
    }
}
