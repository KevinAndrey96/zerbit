<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicalHistoryPsychotherapeuticAssessmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ch_psychotherapeutic_assessments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clinical_history_id');
            $table->text('pain')->nullable();;
            $table->text('edema')->nullable();;
            $table->text('joint_mobility')->nullable();;
            $table->text('sensitivity')->nullable();;
            $table->text('integumentary_system')->nullable();;
            $table->text('muscular_strength')->nullable();;
            $table->text('flexibility')->nullable();;
            $table->text('posture')->nullable();;
            $table->text('march')->nullable();;
            $table->text('balance')->nullable();;
            $table->text('falling_risk')->nullable();;
            $table->text('other_valuations')->nullable();;
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
        Schema::dropIfExists('ch_psychotherapeutic_assessments');
    }
}
