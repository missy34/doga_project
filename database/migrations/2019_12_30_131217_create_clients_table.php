<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');

            //post.blade.php
            $table->string('client_name',30)->nullable();
            // $table->string('client_kana',30)->nullable();
            $table->string('client_loginid',20)->nullable();
            $table->string('client_pass',20)->nullable();

            //post2.blade.php
            $table->string('client_loc',20)->nullable();//住所
            $table->text('client_url')->nullable();//会社URL
            $table->string('client_biz',5000)->nullable();//事業内容
            $table->string('client_num_emp')->nullable();//従業員数
            $table->string('client_image_url',500)->nullable();//写真

            $table->timestamps();
            $table->softDeletes();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
