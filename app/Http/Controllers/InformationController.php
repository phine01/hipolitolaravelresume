<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InformationController extends Controller
{
    public function index()
    {
        $details = DB::table('details')->first();
        $personal = DB::table('personal')->first();
        $objective = DB::table('objective')->first();
        $skills = DB::table('skills')->get();
        $education = DB::table('education')->get();
        return view('welcome', [
            'details' => $details,
            'personal' => $personal,
            'objective' => $objective,
            'skills' => $skills,
            'education' => $education
        ]);
    }
}
