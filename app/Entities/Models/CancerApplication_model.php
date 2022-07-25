<?php

namespace BookStack\Entities\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancerApplication_model extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'center'
        ,'paddress'
        ,'email'
        ,'service_c'
        ,'institute_name'
        ,'head_email'
        ,'con_email'
        ,'inst_email'
        ,'manager_name'
        ,'depart_email'
        ,'department_phone'
        ,'depart1_email'
        ,'prevention'
        ,'pre_cancerous'
        ,'inpatient_wards'
        ,'outpatient'
        ,'pathology'
        ,'radiology'
        ,'surgical'
        ,'radiotherapy'
        ,'oncology'
        ,'chemotherapy'
        ,'therapy'
        ,'hormonal'
        ,'immunotherapy'
        ,'transplants'
        ,'palliative'
        ,'assessment'
        ,'sychosocial'
        ,'rehabilitation'
        ,'survivorship'
        ,'care'
        ,'registration'
        ,'comprehensive_lab'
        ,'comprehensive_radiology'
        ,'radiation_oncology'
        ,'nuclear_medicine'
        ,'oncology_training'
        ,'cancer_research'
        ,'others'
        ,'mechanism'
        ,'routine'
        ,'Physical'
        ,'symptoms'
        ,'support'
        ,'incorporate'
        ,'inadequately'
        ,'coordination'
        ,'oncology_related'
        ,'relevant'
        ,'Clinical'
        ,'academic'
        ,'Professional'
        ,'certificates'
        ,'plans'
        ,'disposal'
        ,'compliance'
        ,'applicant_name'
        ,'designation'
        ,'application_date'
        ,'officer_name
        off_designation'
        ,'off_date'
    ];
    public function getimages() {
        return $this->hasMany(CancerApplicationfiles_model::class,'application_id');
    }
}
