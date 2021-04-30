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
            $table->text('pain');
            $table->text('edema');
            $table->text('joint_mobility');
            $table->text('sensitivity');
            $table->text('integumentary_system');
            $table->text('muscular_strength');
            $table->text('flexibility');
            $table->text('posture');
            $table->text('march');
            $table->text('balance');
            $table->text('falling_risk');
            $table->text('other_valuations');
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
