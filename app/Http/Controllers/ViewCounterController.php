<?php

namespace App\Http\Controllers;

use App\Models\Manual;
use Illuminate\Http\Request;

class ViewCounterController extends Controller
{
    public function index($id)
    {
        $manual = Manual::findOrFail($id);;

        $manual->views++;

        $manual->save();

        return response()->noContent();
    }
}
