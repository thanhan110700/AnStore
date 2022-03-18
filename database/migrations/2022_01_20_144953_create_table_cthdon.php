<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCthdon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cthdon', function (Blueprint $table) {
            $table->bigInteger('mahd');
            $table->string('makh');
            $table->string('idsp');
            $table->string('tensp');
            $table->bigInteger('soluong');
            $table->bigInteger('giasp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cthdon');
    }
}
