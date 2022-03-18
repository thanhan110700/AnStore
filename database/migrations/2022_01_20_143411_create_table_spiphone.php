<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSpiphone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spiphone', function (Blueprint $table) {
            $table->string('idsp');
            $table->string('tensp');
            $table->bigInteger('giasp');
            $table->string('manhinh');
            $table->string('hdh');
            $table->string('camerasau');
            $table->string('cameratruoc');
            $table->string('cpu');
            $table->string('ram');
            $table->string('bonhotrong');
            $table->string('thesim');
            $table->string('dungluongpin');
            $table->string('hinhanh');
            $table->text('thongtinsp');
            $table->bigInteger('view');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spiphone');
    }
}
