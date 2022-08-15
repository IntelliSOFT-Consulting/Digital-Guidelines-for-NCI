<?php

namespace BookStack\Entities\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PercountyCenters_model extends Model
{
    use HasFactory;
    protected $fillable = ['county_id'
    ,'Facility'
    ,'Designation','Physical_Address','Cancer_Treatment_Modalities','ext_link'];
}
