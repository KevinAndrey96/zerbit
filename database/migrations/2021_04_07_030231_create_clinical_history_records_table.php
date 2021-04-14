<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicalHistoryRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ch_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clinical_history_id');
            $table->text('medical_pathological');
            $table->text('surgical');
            $table->text('traumatic');
            $table->text('allergy');
            $table->text('family');
            $table->text('pharmacological');
            $table->text('others');
            $table->timestamps();

            $table->foreign('clinical_history_id')->references('id')->on('clinical_histories')->onDelete('cascade');;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinical_histories_records');
    }
}
