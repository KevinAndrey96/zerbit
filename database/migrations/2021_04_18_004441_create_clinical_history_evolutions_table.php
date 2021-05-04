<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicalHistoryEvolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ch_evolutions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clinical_history_id');
            $table->text('evolution_text')->nullable();;
            $table->date('evolution_date')->nullable();;
            $table->string('start_time')->nullable();;
            $table->string('end_time')->nullable();;
            $table->mediumText('signature')->nullable();
            $table->text('observation')->nullable();
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
        Schema::dropIfExists('ch_evolutions');
    }
}
