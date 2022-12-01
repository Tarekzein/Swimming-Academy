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
        Schema::create('managers', function (Blueprint $table) {
            $table->id();
            $table->foreignId("uid")->references("id")->on("users")->onDelete("cascade");
            $table->string("study_field")->nullable();
            $table->string("current_employer")->nullable();
            $table->string("previous_experience")->nullable();
//            photos
            $table->string("profile_photo")->default("pngegg.png");
            $table->string("personal_id")->nullable();
            $table->string("facility_receipt")->nullable();
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
        Schema::dropIfExists('managers');
    }
};
