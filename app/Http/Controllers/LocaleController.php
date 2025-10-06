<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function switch(Request $request)
    {
        $locale = $request->input('locale');

        if (!in_array($locale, ['en', 'nl'])) {
            $locale = config('app.locale'); // fallback
        }

        session(['locale' => $locale]);
        App::setLocale($locale);

        return redirect()->back();
    }
}
