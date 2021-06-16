<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCylindersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cylinders', function (Blueprint $table) {
            $table->id();
            $table->integer('supplier_id');
            $table->integer('five_cylinder');
            $table->integer('ten_cylinder');
            $table->integer('fifteen_cylinder');
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
        Schema::dropIfExists('cylinders');
    }
}
