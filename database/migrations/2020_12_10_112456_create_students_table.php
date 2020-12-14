<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255)->nullable();
            $table->string('village',255)->nullable();
            $table->string('po',255)->nullable();
            $table->string('dist',255)->nullable();
            $table->string('mobile',255)->nullable();
            $table->string('password',255)->nullable();
            $table->string('otp',255)->nullable();
            $table->string('wsap_no',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('current_school',500)->nullable();
            $table->string('medium',255)->nullable();
            $table->string('status')->default(1)->comment("1 = Enable, 2 = Disable");
            $table->string('fee_status')->default(1)->comment("1 = pending, 2 = fail, 3 = paid");
            $table->softDeletes();
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
        Schema::dropIfExists('students');
    }
}
