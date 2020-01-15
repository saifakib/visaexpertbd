<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyVisasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_visas', function (Blueprint $table) {
            $table->bigIncrements('apply_id');
            $table->unsignedBigInteger('visa_id');
            $table->foreign('visa_id')->references('visa_id')->on('visas')->onDelete('cascade');
            $table->integer('candidate_id');
            $table->integer('agent_id');
            $table->integer('mobile')->nullable();
            $table->date('apply_date')->nullable();
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
        Schema::dropIfExists('apply_visas');
    }
}
