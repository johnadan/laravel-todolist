<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //adds new table, column, or index. uploads all columns on our database
    public function up()
    {
        Schema::create('samples', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //drops the table. undo or rollback operations made
    public function down()
    {
        Schema::dropIfExists('samples');
    }
}
