<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Manual;

class BrandController extends Controller
{
    public function show($brand_id, $brand_slug)
    {

        $brand = Brand::findOrFail($brand_id);
        $manuals = Manual::all()->where('brand_id', $brand_id);
        $top5Manuals = Manual::orderBy('views', "desc")->where("brand_id", $brand_id)->take(5);

        return view('pages/manual_list', [
            "brand" => $brand,
            "manuals" => $manuals,
            "top5Manuals" => $top5Manuals
        ]);

    }
}
