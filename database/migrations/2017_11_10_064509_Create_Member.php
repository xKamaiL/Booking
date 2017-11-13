<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("student",function (Blueprint $blueprint){
            $blueprint->increments("uid");
            $blueprint->mediumInteger("student_id");
            $blueprint->unique("student_id");
            $blueprint->mediumText("real_name");
            $blueprint->integer("number");
            $blueprint->text("classroom");
            $blueprint->text("consult");
            $blueprint->rememberToken();
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
        Schema::dropIfExists("student");
    }
}
