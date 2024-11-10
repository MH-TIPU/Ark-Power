<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\SiteData;

class BaseController extends Controller
{
    public function home()
    {
        $siteData = SiteData::first();
        $latestPosts = Post::orderBy('created_at', 'desc')->take(9)->get();
        return view('layouts.home', compact('siteData', 'latestPosts'));
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

    public function newsDetails(string $id)
    {
        $siteData = SiteData::first();
        $data = Post::find($id);

        // // Fetch related posts ordered by latest creation date
        // $relatedNews = Post::where('id', '!=', $id) // Exclude the current news item
        //     ->orderBy('created_at', 'desc') // Order by latest
        //     ->take(5) // Limit to 5 related news items
        //     ->get();

        // Fetch related posts from the same category, excluding the current post, ordered by latest
        $relatedNews = Post::where('category_id', $data->category_id)
            ->where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('layouts.newsdetails', compact('siteData', 'data', 'relatedNews'));
    }

    public function aboutUs()
    {
        $siteData = SiteData::first();
        return view('layouts.aboutus', compact('siteData'));
    }

    public function contactUs()
    {
        $siteData = SiteData::first();
        return view('layouts.contactus', compact('siteData'));
    }

    public function career()
    {
        $siteData = SiteData::first();
        $careers = Career::with('category')->get(); // Eager load the category relationship
        return view('layouts.career', compact('siteData', 'careers'));
    }

    public function careerDetails(string $id)
    {
        $siteData = SiteData::first();
        $data = Career::find($id);
        return view('layouts.careerdetails', compact('siteData', 'data'));
    }

    public function testModel()
    {
        $data = Post::all();
        dd($data);
    }
}
