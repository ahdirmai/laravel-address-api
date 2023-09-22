<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index(Request $request)
    {
        $regency_id = $request->regency_id;
        if ($regency_id) {
            $districts =  District::where('regency_unique_id', $regency_id)->get();
        } else {
            return response()->json([
                'message' => 'Regency ID is required'
            ], 422);
        }

        $data = [
            'districts' => $districts
        ];
        return response()->json($data);
    }
}
