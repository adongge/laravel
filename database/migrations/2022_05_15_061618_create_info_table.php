<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unit')->default('')->comment('单位');
            $table->decimal('used')->comment('已使用');
            $table->decimal('remain')->comment('剩余');
            $table->decimal('desc')->comment('描述');
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
        Schema::dropIfExists('ad_info');
    }
}
