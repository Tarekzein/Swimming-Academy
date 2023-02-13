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
        Schema::create('intern_session_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId("uid")->references("id")->on("users")->onDelete("cascade");
            $table->foreignId("capID")->references("id")->on("users");
            $table->foreignId("sessionID")->references("id")->on("captain_schedules");
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
        Schema::dropIfExists('intern_session_histories');
    }
};
