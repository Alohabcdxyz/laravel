<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('employee_id');
            $table->string('phone')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('district');
            $table->string('ward');
            $table->string('province');
            $table->integer('gender');
            $table->date('birth');
            $table->integer('level');
            $table->bigInteger('account_id')->unsigned();
            $table->foreign('account_id')->references('account_id')->on('accounts')->cascadeOnDelete();
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
};
