<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Regency;
use App\Models\SubDistricta;
use App\Models\SubDistrictb;
use App\Models\SubDistrictc;
use Illuminate\Http\Request;

class SubDistrictController extends Controller
{
    public function index(Request $request)
    {
        $district_id = $request->district_id;
        if ($district_id) {
            $district = District::where('unique_id', $district_id)->first();
            $regency = $district->regency;
            $province = $regency->province;
            switch ($province->code) {
                case 'A':
                    $subDistricts = SubDistricta::where('district_unique_id', $district_id)->get();
                    break;
                case 'B':
                    $subDistricts = SubDistrictb::where('district_unique_id', $district_id)->get();
                    break;
                case 'C':
                    $subDistricts = SubDistrictc::where('district_unique_id', $district_id)->get();
                    break;
            }
        } else {
            return response()->json([
                'message' => 'District ID is required'
            ], 422);
        }
        $data = [
            'subDistricts' => $subDistricts
        ];
        return response()->json($data);
    }
}
