<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodgroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloodgroups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('blood_group');
            $table->double('qty');
            $table->integer('bloodbank_id')->unsigned();
            $table->foreign('bloodbank_id')->references('id')->on('bloodbanks')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('bloodgroups');
    }
}
