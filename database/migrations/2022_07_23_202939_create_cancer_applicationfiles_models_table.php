<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancerApplicationfilesModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancer_applicationfiles_models', function (Blueprint $table) {
            $table->id();
            $table->integer('application_id')->nullable();
            $table->String('store_path')->nullable();
            $table->String('file_name')->nullable();
            $table->String('document_type')->nullable();
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
        Schema::dropIfExists('cancer_applicationfiles_models');
    }
}
