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
        Schema::table('bodies', function (Blueprint $table) {
            $table->string('num_stairs_outside');
            $table->string('num_stairs_inside');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bodies', function (Blueprint $table) {
            $table->dropColumn('num_stairs_outside');
            $table->dropColumn('num_stairs_inside');
            
        });
    }
};
