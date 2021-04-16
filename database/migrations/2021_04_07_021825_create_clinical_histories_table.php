<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicalHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinical_histories', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('professional_id');
            $table->text('medical_diagnostic')->nullable();
            $table->text('physiotherapist_diagnostic')->nullable();
            $table->text('objective')->nullable();
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');;
            $table->foreign('professional_id')->references('id')->on('users')->onDelete('cascade');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinical_histories');
    }
}
