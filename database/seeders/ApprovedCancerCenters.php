<?php

namespace Database\Seeders;
use BookStack\Entities\Models\ApprovedCancerCenter_models;
use BookStack\Entities\Models\PercountyCenters_model;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Database\Seeder;

class ApprovedCancerCenters extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        ApprovedCancerCenter_models::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $json = File::get("cancerc.json");
        $countries = json_decode($json);
         foreach($countries as $country){
            //dd($country->Physical_Address);
            ApprovedCancerCenter_models::create([
                'Facility'=> $country->Facility,
                'County'=> $country->County,
                'Designation'=> $country->Designation,
                'Physical_Address'=>$country->Physical_Address,
                'Cancer_Treatment_Modalities'=>$country->Cancer_Treatment_Modalities
            ]);
         };
         $exist=ApprovedCancerCenter_models::groupBy('County')->get('County');
         foreach($exist as $per){
            $exist=ApprovedCancerCenter_models::where('County',$per->County)->get();
                
            foreach($exist as $perc){
            
                        PercountyCenters_model::create([
                            'Facility'=> $perc->Facility,
                            'county_id'=> $perc->County,
                            'Designation'=> $perc->Designation,
                            'Physical_Address'=>$perc->Physical_Address,
                            'Cancer_Treatment_Modalities'=>$perc->Cancer_Treatment_Modalities
                        ]);
                    }
         }
         
    }
}
