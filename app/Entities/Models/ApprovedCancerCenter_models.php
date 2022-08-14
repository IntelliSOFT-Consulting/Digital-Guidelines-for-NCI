<?php

namespace BookStack\Entities\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovedCancerCenter_models extends Model
{
    use HasFactory;
    protected $fillable = ['Facility','County','Designation','Physical_Address','Cancer_Treatment_Modalities'];
public function getCenters() {
    return $this->hasMany(PercountyCenters_model::class,'county_id');
}
}
