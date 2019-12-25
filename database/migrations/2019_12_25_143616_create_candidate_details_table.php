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
            $table->integer('candidate_code');
            $table->integer('user_id');
            $table->string('full_name');
            $table->string('user_name');
            $table->date('DOB');
            $table->string('occupation')->nullable();
            $table->string('sector')->nullable();
            $table->string('extra_qualification')->nullable();
            $table->string('presently_in_job');
            $table->string('job_experience')->default('no')->comment('Yes or No');
            $table->string('designation');
            $table->date('joining_date');
            $table->string('skill');
            $table->string('language');
            $table->string('country_apply');
            $table->string('visa_need');
            $table->string('visa_on_passport')->comment('Yes or No');
            $table->integer('visa_no_passport')->default(0);
            $table->string('visa_type');
            $table->date('expired_passport_date');
            $table->double('budget',12,2);
            $table->string('present_location');
            $table->string('permanent_location');
            $table->string('education');
            $table->string('education_comment');
            $table->string('school_name');
            $table->string('school_result');
            $table->string('school_group');
            $table->string('school_document_img');
            $table->year('school_passing_year');
            $table->string('college_name');
            $table->string('college_result');
            $table->string('college_document_img');
            $table->year('college_passing_year');
            $table->string('university_name');
            $table->string('university_result');
            $table->year('university_passing_year');
            $table->string('candidate_image');
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
