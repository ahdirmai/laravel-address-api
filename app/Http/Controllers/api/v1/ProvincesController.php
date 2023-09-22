<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProvincesController extends Controller
{
    public function index()
    {
        return \App\Models\Province::all();
    }
}
