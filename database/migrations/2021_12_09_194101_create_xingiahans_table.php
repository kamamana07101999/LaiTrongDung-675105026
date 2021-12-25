<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXingiahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xingiahans', function (Blueprint $table) {
            $table->id();
            $table->string('namesv');
            $table->string('masvv');
            $table->string('msdt');
            $table->string('tendetai');
            $table->date('thoigiandangky');
            $table->date('thoigiannop');
            $table->string('linhvuc');
            $table->integer('diemso');
            $table->string('xeploai');
            $table->string('lydo');
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
        Schema::dropIfExists('xingiahans');
    }
}
