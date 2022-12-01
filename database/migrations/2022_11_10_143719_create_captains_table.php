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
        Schema::create('captains', function (Blueprint $table) {
            $table->id();
            $table->foreignId("uid")->references("id")->on("users")->onDelete("cascade");
            $table->string("study_field")->nullable();
            $table->string("certificate")->nullable();
            $table->string("current_employer")->nullable();
            $table->string("previous_experience")->nullable();
            $table->string("profile_status")->default("pending");

//            photos

            $table->string("profile_photo")->default("pngegg.png");
            $table->string("personal_id")->nullable();
            $table->string("rescue_certificate")->nullable();
            $table->string("rescue_card")->nullable();
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
        Schema::dropIfExists('captains');
    }
};
