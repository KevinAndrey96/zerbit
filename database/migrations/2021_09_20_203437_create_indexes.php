<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clinical_histories', function(Blueprint $table)
        {
            $table->index('patient_id');
            $table->index('professional_id');
        });
        Schema::table('ch_records', function(Blueprint $table)
        {
            $table->index('clinical_history_id');
        });
        Schema::table('ch_psychotherapeutic_assessments', function(Blueprint $table)
        {
            $table->index('clinical_history_id');
        });
        Schema::table('ch_evolutions', function(Blueprint $table)
        {
            $table->index('clinical_history_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clinical_histories', function(Blueprint $table)
        {
            $table->dropIndex('patient_id');
            $table->dropIndex('professional_id');
        });
        Schema::table('ch_records', function(Blueprint $table)
        {
            $table->dropIndex('clinical_history_id');
        });
        Schema::table('ch_psychotherapeutic_assessments', function(Blueprint $table)
        {
            $table->dropIndex('clinical_history_id');
        });
        Schema::table('ch_evolutions', function(Blueprint $table)
        {
            $table->dropIndex('clinical_history_id');
        });
    }
}
