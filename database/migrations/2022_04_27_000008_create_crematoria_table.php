<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrematoriaTable extends Migration
{
    public function up()
    {
        Schema::create('crematoria', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('crematorium_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('representative')->nullable();
            $table->longText('address')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
