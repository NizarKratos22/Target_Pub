<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecclientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specclients', function (Blueprint $table) {
            $table->id();
            $table->integer('id_cli')->nullable();
            $table->integer('id_spec')->nullable();
            $table->String('statut');
            $table->date('finaldate');
            $table->String('feedback');
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
        Schema::dropIfExists('specclients');
    }
}
