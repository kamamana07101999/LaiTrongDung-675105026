<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuyetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duyets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('masv');
            $table->string('msdt');
            $table->string('tendetai');
            $table->string('thoigiandangky');
            $table->date('thoigiannop');
            $table->string('linhvuc');
            $table->string('tenkhoa');
            $table->string('xeploai');
            $table->string('diemso');
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
        Schema::dropIfExists('duyets');
    }
}
