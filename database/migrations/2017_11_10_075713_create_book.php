<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("book", function (Blueprint $blueprint){
           $blueprint->increments("bid");
           $blueprint->text("name");
           $blueprint->longText("detail");
           $blueprint->integer("cat_id");
           $blueprint->enum("status",["active","off"]);
           $blueprint->longText("picture");
           $blueprint->timestamps();
        });
        Schema::create("book_category",function (Blueprint $blueprint){
            $blueprint->increments("id");
            $blueprint->text("name");
            $blueprint->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("book");
        Schema::dropIfExists("book_category");
    }
}
