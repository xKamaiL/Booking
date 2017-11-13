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
        Schema::create("book_rent",function (Blueprint $blueprint){
            $blueprint->increments("id");
            /*
             * Book detail
             */
            $blueprint->text("name");
            $blueprint->longText("detail");
            $blueprint->integer("cat_id");
            $blueprint->longText("picture");
            /*
             * Book detail
             */
            $blueprint->mediumInteger("user_id");
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
        Schema::dropIfExists("book_rent");
        Schema::dropIfExists("book");
        Schema::dropIfExists("book_category");
    }
}
