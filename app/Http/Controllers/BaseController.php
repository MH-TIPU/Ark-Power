<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

    public function products()
    {
        $siteData = SiteData::first();
        $data = Product::all();
        return view('layouts.products', compact('siteData', 'data'));
    }

    public function productDetails(string $id)
    {
        $siteData = SiteData::first();
        $data = Product::find($id);
        return view('layouts.productdetails', compact('siteData', 'data'));
    }

    public function service()
    {
        $siteData = SiteData::first();
        return view('layouts.services', compact('siteData'));
    }

    public function news()
    {
        $siteData = SiteData::first();
        return view('layouts.news', compact('siteData'));
    }

    public function aboutUs()
    {
        $siteData = SiteData::first();
        return view('layouts.aboutus', compact('siteData'));
    }
}
