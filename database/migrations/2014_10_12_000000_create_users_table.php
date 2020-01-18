<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            //profile1
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('name_mei')->nullable();
            $table->string('kana_sei')->nullable();
            $table->string('kana_mei')->nullable();
            $table->string('email')->unique();

            //profile2
            $table->string('prefectures', 20)->nullable();
            $table->string('exp_business', 30)->nullable();
            $table->string('phone')->nullable();
            $table->string('exp_job', 30)->nullable();
            $table->string('exp_company', 30)->nullable();
            $table->string('exp_department', 30)->nullable();
            $table->string('exp_position', 30)->nullable();
            $table->date('exp_start')->nullable();
            $table->date('exp_end')->nullable();
            $table->string('current')->nullable();

            //profile3
            $table->date('birthday')->nullable();
            $table->string('last_degree', 30)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('image_url', 100)->nullable();

            //ページ３
            $table->string('password')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
