<?php

namespace App\Http\Controllers\EKSTERNAL;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataEksternalController extends Controller
{
    public function index()
    {
        return view('eksternal.base.form-data-eksternal');
    }
}
