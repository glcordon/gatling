<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToBodiesTable extends Migration
{
    public function up()
    {
        Schema::table('bodies', function (Blueprint $table) {
            $table->unsignedBigInteger('location_id')->nullable();
            $table->foreign('location_id', 'location_fk_6500089')->references('id')->on('locations');
            $table->unsignedBigInteger('crematorium_id')->nullable();
            $table->foreign('crematorium_id', 'crematorium_fk_6500090')->references('id')->on('crematoria');
        });
    }
}
