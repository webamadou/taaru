<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //id  id_key  name    description duration    clean_rw_url    type_care_id    institute_id    upon_request  negotiatable price   discount_price  card_percentage  images  image_directory views   created_by  status  created_at  updated_at
        Schema::create('cares', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("slug");
            $table->string("ref")->nullable();
            $table->longText("description")->nullable();
            $table->foreignId("care_type_id")->nullable();
            $table->foreignId("institute_id")->nullable();
            $table->string("price")->nullable();
            $table->string("discount_price")->nullable();
            $table->integer("upon_request")->nullable()->default(0);
            $table->integer("negotiatable")->nullable()->default(0);
            $table->text("images")->nullable();
            $table->integer("views")->nullable();
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
        Schema::dropIfExists('cares');
    }
}
