<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtracolumnsToPercountyCentersModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('percounty_centers_models', function (Blueprint $table) {
            //
            $table->String('Physical_Address')->nullable();
            $table->String('Cancer_Treatment_Modalities')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('percounty_centers_models', function (Blueprint $table) {
            //
        });
    }
}
