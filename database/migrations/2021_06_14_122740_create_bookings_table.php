<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('supplier_id');
            $table->string('name');
            $table->string('gender');
            $table->integer('age');
            $table->bigInteger('aadhar_number');
            $table->string('identity_proof');
            $table->string('covid_status');
            $table->date('covid_positive');
            $table->text('address');
            $table->integer('state');
            $table->integer('city');
            $table->bigInteger('phone');
            $table->integer('cylinder');
            $table->integer('status')->default(0);

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
        Schema::dropIfExists('bookings');
    }
}
