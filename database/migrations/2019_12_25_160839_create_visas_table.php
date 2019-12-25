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
            $table->string('title');
            $table->integer('category_id');
            $table->integer('agent_id');
            $table->string('visa_authority')->comment('Public Or Private');
            $table->string('offered_country');
            $table->string('per_month_salary')->nullable();
            $table->string('contact_years')->nullable();
            $table->string('processing_time');
            $table->double('visa_payment',12,2);
            $table->string('age_limit');
            $table->string('education');
            $table->string('language');
            $table->string('language_test')->nullable();
            $table->string('study_gap')->nullable();
            $table->float('discount_visa24_clint',8,2)->nullable();
            $table->string('payment_system');
            $table->string('security_type');
            $table->integer('visa_possible');
            $table->text('decription');
            $table->string('logo')->default('logo.png');
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
