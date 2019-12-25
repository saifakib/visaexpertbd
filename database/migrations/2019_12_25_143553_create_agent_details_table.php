<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_details', function (Blueprint $table) {
            $table->integer('agent_id');
            $table->integer('agent_code');
            $table->integer('user_id');
            $table->string('agent_name')->unique();
            $table->string('title');
            $table->text('details');
            $table->string('license');
            $table->string('location');
            $table->string('logo')->default('agent.png');
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
        Schema::dropIfExists('agent_details');
    }
}
