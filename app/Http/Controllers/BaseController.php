<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteData;

class BaseController extends Controller
{
    public function home()
    {
        $siteData = SiteData::first();
        // dd($siteData);
        return view('layouts.home', compact('siteData'));
    }

    
}
