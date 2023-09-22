<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Regency;
use Illuminate\Http\Request;

class RegencyController extends Controller
{
    public function index(Request $request)
    {

        $province_id = $request->province_id;
        if ($province_id) {
            $regencies =  Regency::where('province_unique_id', $province_id)->get();
        } else {
            return response()->json([
                'message' => 'Province ID is required'
            ], 422);
        }

        $data = [
            'regencies' => $regencies
        ];
        return response()->json($data);
    }
}
