<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddObjectiveFieldToClinicalHistoryPsychotherapeuticAssessmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ch_psychotherapeutic_assessments', function (Blueprint $table) {
            $table->text('objective2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ch_psychotherapeutic_assessments', function (Blueprint $table) {
            $table->dropColumn('objective2');
        });
    }
}
