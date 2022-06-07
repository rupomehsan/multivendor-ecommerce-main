<?php

namespace App\Http\Controllers\Api\location;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Division;
use App\Models\Station;
use function response;

class LocationController extends Controller
{
    public function getAllDivision(){
        $getDivision = Division::all();
        return response([
            "status"=>"success",
            "data"=> $getDivision
        ]);
    }
     public function getAllDistrictByDivisionId($id){
        $getDistrict = District::where("division_id",$id)->get();
        return response([
            "status"=>"success",
            "data"=> $getDistrict
        ]);
    }
     public function getAllStationByDistrictId($id){
        $getStation = Station::where("district_id",$id)->get();
        return response([
            "status"=>"success",
            "data"=> $getStation
        ]);
    }

}
