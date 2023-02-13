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
        Schema::create('captain_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId("uid")->references("id")->on("users")->onDelete("cascade");
            $table->foreignId("branchID")->references("id")->on("branches")->onDelete("cascade");
            $table->date("date")->nullable();
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
        Schema::dropIfExists('captain_schedules');
    }
};
