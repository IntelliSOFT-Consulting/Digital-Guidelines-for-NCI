<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancerApplicationModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancer_application_models', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->String('center')->nullable();
            $table->String('paddress')->nullable();
            $table->String('email')->nullable();
            $table->String('service_c')->nullable();
            $table->String('institute_name')->nullable();
            $table->String('head_email')->nullable();
            $table->String('con_email')->nullable();
            $table->String('inst_email')->nullable();
            $table->String('manager_name')->nullable();
            $table->String('depart_email')->nullable();
            $table->String('department_phone')->nullable();
            $table->String('depart1_email')->nullable();
            $table->String('prevention')->nullable();
            $table->String('pre_cancerous')->nullable();
            $table->String('inpatient_wards')->nullable();
            $table->String('outpatient')->nullable();
            $table->String('pathology')->nullable();
            $table->String('radiology')->nullable();
            $table->String('surgical')->nullable();
            $table->String('radiotherapy')->nullable();
            $table->String('oncology')->nullable();
            $table->String('chemotherapy')->nullable();
            $table->String('therapy')->nullable();
            $table->String('hormonal')->nullable();
            $table->String('immunotherapy')->nullable();
            $table->String('transplants')->nullable();
            $table->String('palliative')->nullable();
            $table->String('assessment')->nullable();
            $table->String('sychosocial')->nullable();
            $table->String('rehabilitation')->nullable();
            $table->String('survivorship')->nullable();
            $table->String('care')->nullable();
            $table->String('registration')->nullable();
            $table->String('comprehensive_lab')->nullable();
            $table->String('comprehensive_radiology')->nullable();
            $table->String('radiation_oncology')->nullable();
            $table->String('nuclear_medicine')->nullable();
            $table->String('oncology_training')->nullable();
            $table->String('cancer_research')->nullable();
            $table->String('others')->nullable();
            $table->String('mechanism')->nullable();
            $table->String('routine')->nullable();
            $table->String('Physical')->nullable();
            $table->String('symptoms')->nullable();
            $table->String('support')->nullable();
            $table->String('incorporate')->nullable();
            $table->String('inadequately')->nullable();
            $table->String('coordination')->nullable();
            $table->String('oncology_related')->nullable();
            $table->String('relevant')->nullable();
            $table->String('Clinical')->nullable();
            $table->String('academic')->nullable();
            $table->String('Professional')->nullable();
            $table->String('certificates')->nullable();
            $table->String('plans')->nullable();
            $table->String('disposal')->nullable();
            $table->String('compliance')->nullable();
            $table->String('applicant_name')->nullable();
            $table->String('designation')->nullable();
            $table->String('application_date')->nullable();
            $table->String('officer_name')->nullable();
            $table->String('off_designation')->nullable();
            $table->String('off_date')->nullable();
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
        Schema::dropIfExists('cancer_application_models');
    }
}
