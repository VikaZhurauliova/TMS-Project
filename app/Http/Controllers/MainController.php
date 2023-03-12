<?php

namespace App\Http\Controllers;

use App\Models\banner;

class MainController extends Controller
{
    public function main()
    {
        $banners = Banner::where('is_active', 1)->get();

        return view('main', [
            'banners' => $banners
        ]);
    }
}
