<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("slug")->nullable();
            $table->integer("institute_type")->nullable();
            $table->mediumText("slogan")->nullable();
            $table->text("presentation")->nullable();
            $table->string("email")->nullable();
            $table->string("telephone1")->nullable();
            $table->string("telephone2")->nullable();
            $table->string("telephone3")->nullable();
            $table->string("fb")->nullable();
            $table->string("twt")->nullable();
            $table->date("since")->nullable();
            $table->mediumText("address")->nullable();
            $table->foreignId("user_id")->nullable();
            $table->foreignId("city_id")->nullable();
            $table->string("longitude")->nullable();
            $table->string("latitude")->nullable();
            $table->string("institute_zone")->nullable();
            $table->string("images")->nullable();
            $table->text("work_days")->nullable()->comment('format = d::from x to; e.g. 1::08x16;');
            $table->foreignId("saved_by")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutes');
    }
}
