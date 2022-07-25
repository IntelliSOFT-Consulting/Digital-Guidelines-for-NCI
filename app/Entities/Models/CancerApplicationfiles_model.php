<?php

namespace BookStack\Entities\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancerApplicationfiles_model extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_name'
        ,'store_path'
        ,'application_id'
        ,'document_type'
    ];
    public function getAplication(){
        return $this->belongsTo(CancerApplication_model::class,'id');
    }
}
