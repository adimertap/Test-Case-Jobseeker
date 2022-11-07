<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TCandidate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_candidate', function (Blueprint $table) {
            $table->id('candidate_id');
            $table->string('full_name');
            $table->string('dob');
            $table->string('pob');
            $table->string('gender');
            $table->string('year_exp');
            $table->string('last_salary');
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
        Schema::drop('t_candidate');
    }
}
