<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_details', function (Blueprint $table) {
            $table->integer('candidate_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->string('full_name');
            $table->string('user_name');
            $table->date('DOB')->nullable();;
            $table->string('occupation')->nullable();
            $table->string('sector')->nullable();
            $table->string('extra_qualification')->nullable();
            $table->string('presently_in_job')->nullable();;
            $table->string('job_experience')->default('no')->comment('Yes or No');
            $table->string('designation')->nullable();
            $table->date('joining_date')->nullable();
            $table->string('skill')->nullable();
            $table->string('language')->nullable();
            $table->string('country_apply')->nullable();
            $table->string('visa_need')->nullable();
            $table->string('visa_on_passport')->comment('Yes or No')->nullable();
            $table->integer('visa_no_passport')->default(0);
            $table->string('visa_type')->nullable();
            $table->date('expired_passport_date')->nullable();
            $table->double('budget',12,2)->default(0.00);
            $table->string('present_location')->nullable();
            $table->string('permanent_location')->nullable();
            $table->string('education')->nullable();
            $table->string('education_comment')->nullable();
            $table->string('school_name')->nullable();
            $table->string('school_result')->nullable();
            $table->string('school_group')->nullable();
            $table->string('school_document_img')->nullable();
            $table->year('school_passing_year')->nullable();
            $table->string('college_name')->nullable();
            $table->string('college_result')->nullable();
            $table->string('college_document_img')->nullable();
            $table->year('college_passing_year')->nullable();
            $table->string('university_name')->nullable();
            $table->string('university_result')->nullable();
            $table->year('university_passing_year')->nullable();
            $table->string('candidate_image')->default('candidate.png');
            $table->text('bio')->nullable();
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
        Schema::dropIfExists('candidate_details');
    }
}
