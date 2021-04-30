php <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('second_name')->default(' ');
            $table->string('first_surname');
            $table->string('second_surname')->default(' ');

            $table->date('birthdate');
            $table->string('civil_status');
            $table->string('gender');
            $table->string('eps');
            $table->string('occupation');

            $table->string("document_type");
            $table->string("document")->unique();
            $table->string("email")->unique();
            $table->string("phone")->unique();
            $table->string("address");
            $table->string("guardian")->nullable();
            $table->string("guardian_phone")->nullable();
            $table->string("guardian_relationship")->nullable();

            $table->timestamps();
        });

        DB::table('patients')->insert(
            array(
                'first_name' => "nombre1",
                'second_name' => 'nombre2',
                'first_surname' => 'apellido1',
                'second_surname' => 'apellido2',

                'birthdate' => '1996-01-01',
                'civil_status' => 'single',
                'gender' => 'male',
                'eps' => 'Compensar',
                'occupation' => 'Chef',

                'document_type' => 'cc',
                'document' => '10236655577',
                'email' => 'test@mail.com',
                'phone' => '3112233366',
                'address' => 'Cl 2 # 45 - 11',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
