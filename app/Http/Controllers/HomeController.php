<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return Renderable
     */
    public function index()
    {
        return view('themes.admins.e-shop.gorlabs.views.hello');
    }
}
