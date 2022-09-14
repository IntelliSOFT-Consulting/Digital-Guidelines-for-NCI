<?php

use BookStack\Auth\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCenterRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('center_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->String('treatement')->nullable();
            $table->String('attention')->nullable();
            $table->String('response_time')->nullable();
            $table->String('easy_understand')->nullable();
            $table->String('need_accommodation')->nullable();
            $table->String('satisfied')->nullable();
            $table->String('improvement')->nullable();
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
        Schema::dropIfExists('center_ratings');
    }
}
