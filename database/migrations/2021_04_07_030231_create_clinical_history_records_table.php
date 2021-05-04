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
            $table->text('medical_pathological')->nullable();;
            $table->text('surgical')->nullable();;
            $table->text('traumatic')->nullable();;
            $table->text('allergy')->nullable();;
            $table->text('family')->nullable();;
            $table->text('pharmacological')->nullable();;
            $table->text('others')->nullable();;
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
        Schema::dropIfExists('ch_records');
    }
}
