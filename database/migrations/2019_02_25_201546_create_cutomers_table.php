<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCutomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cutomers', function (Blueprint $table) {
            $table->increments('ConsumerID');
            $table->string('First_Name');
            $table->string('Last_Name ');
            $table->string('DOB');
            $table->boolean('Gender');
            $table->integer('Phone_Number ');
            $table->string(' Email');
            $table->string('Company_Name');
           
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
        Schema::dropIfExists('cutomers');
    }
}
