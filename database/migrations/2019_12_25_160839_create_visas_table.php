<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visas', function (Blueprint $table) {
            $table->bigIncrements('visa_id');
            $table->string('title')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('agent_id');
            $table->foreign('agent_id')->references('agent_id')->on('agents')->onDelete('cascade');
            $table->string('visa_authority')->comment('Public Or Private')->nullable();
            $table->string('offered_country')->nullable();
            $table->string('per_month_salary')->nullable();
            $table->string('contact_years')->nullable();
            $table->string('processing_time')->nullable();
            $table->double('visa_payment',12,2)->default(0.00);
            $table->string('age_limit')->nullable();
            $table->string('education')->nullable();
            $table->string('language')->nullable();
            $table->string('language_test')->nullable();
            $table->string('study_gap')->nullable();
            $table->float('discount_visa24_clint',8,2)->nullable();
            $table->string('payment_system')->nullable();
            $table->string('security_type')->nullable();
            $table->float('visa_possible-rate',8,2)->nullable();
            $table->text('decription')->nullable();
            $table->string('logo')->default('logo.png')->nullable();
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
        Schema::dropIfExists('visas');
    }
}
