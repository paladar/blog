<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Home view
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return response()->view('front.home');
    }

}
