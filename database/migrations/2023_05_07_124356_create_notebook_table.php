<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotebookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notebook', function (Blueprint $table) {
            $table->id();
            $table->text("manufacturer");
            $table->text("type");
            $table->double('display');
            $table->integer('memory');
            $table->integer('harddisk');
            $table->text('videocontroller');
            $table->integer('price');
            $table->foreignId('processorid');
            $table->foreignId('opsystemid');
            $table->integer('pieces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notebook');
    }
}
