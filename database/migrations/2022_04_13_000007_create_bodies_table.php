<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBodiesTable extends Migration
{
    public function up()
    {
        Schema::create('bodies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('service_id_number')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->datetime('death_time_date')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('place_of_removal')->nullable();
            $table->string('covid');
            $table->string('me_case_number')->nullable();
            $table->string('house_removal')->nullable();
            $table->string('rd_number')->nullable();
            $table->boolean('stair_inside')->default(0)->nullable();
            $table->boolean('stairs_outside')->default(0)->nullable();
            $table->integer('number_of_stairs')->nullable();
            $table->string('family_ready_for_removal')->nullable();
            $table->string('doctors_name')->nullable();
            $table->string('doctors_phone_number')->nullable();
            $table->string('doctors_fax')->nullable();
            $table->string('at_need_service_id_number')->nullable();
            $table->string('pre_need_number')->nullable();
            $table->string('next_of_kin');
            $table->string('relationship');
            $table->longText('next_of_kin_address');
            $table->string('next_of_kin_phone');
            $table->string('next_of_kin_email')->nullable();
            $table->string('called_in_by')->nullable();
            $table->string('called_in_by_relationship')->nullable();
            $table->string('called_in_by_phone')->nullable();
            $table->string('embalm')->nullable();
            $table->string('call_received_by')->nullable();
            $table->datetime('call_received_by_date_time')->nullable();
            $table->string('removal_made_by')->nullable();
            $table->datetime('removal_date_time')->nullable();
            $table->string('personal_item_picked_up')->nullable();
            $table->longText('list_of_items_received')->nullable();
            $table->longText('family_notified')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
