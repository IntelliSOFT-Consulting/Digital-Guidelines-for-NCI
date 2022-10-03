<?php

use BookStack\Auth\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->String('experience')->nullable();
            $table->String('purpose')->nullable();
            $table->String('helpful')->nullable();
            $table->String('how_helpful')->nullable();
            $table->String('purpose_achieved')->nullable();
            $table->String('biggest_challenge')->nullable();
            $table->String('improve_experience')->nullable();
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
        Schema::dropIfExists('website_ratings');
    }
}
