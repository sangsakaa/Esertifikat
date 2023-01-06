<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jlm = Sertifikat::count();
        return view(
            'dashboard',
            [
                'data' => $jlm
            ]
        );
    }
}
