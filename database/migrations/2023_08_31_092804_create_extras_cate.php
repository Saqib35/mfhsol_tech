<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtrasCate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extras_cate', function (Blueprint $table) {
            $table->id();
            $table->text('meta_title');
            $table->text('meta_description');
            $table->text('meta_keywords');
            $table->text('category_slug');
            $table->text('sub_cate_slug');
            $table->text('extra_name');
            $table->text('slug');
            $table->text('extra_sub_cate_img');
            $table->text('alt_img');
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
        Schema::dropIfExists('extras_cate');
    }
}
