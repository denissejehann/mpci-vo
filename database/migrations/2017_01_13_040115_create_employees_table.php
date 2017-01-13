<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('position_id');
            $table->date('birthdate');
            // $table->string('sex');
            $table->string('address');
            $table->string('city');
            // $table->string('province');
            $table->string('zip_code');
            $table->string('mobile_number')->nullable();
            // $table->string('landline_number')->nullable();
            // $table->string('civil_status')->nullable();
            // $table->string('religion')->nullable();
            // $table->string('blood_type')->nullable();
            // $table->string('sss')->nullable();
            // $table->string('tin')->nullable();
            // $table->string('philhealth')->nullable();
            // $table->string('pagibig')->nullable();
            // $table->date('date_hired')->nullable();
            // $table->date('date_resigned')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
