<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHdon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hdon', function (Blueprint $table) {
            $table->bigIncrements('mahd');
            $table->date('ngayhd');
            $table->string('makh');
            $table->bigInteger('tongtien');
            $table->bigInteger('ttdonhang');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hdon');
    }
}
