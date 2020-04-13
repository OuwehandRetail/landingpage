<?php
namespace OuwehandRetail\Landingpage\Http\Controllers;

use App\Http\Controllers\Controller;

class LandingpageController extends Controller
{
    public function index()
    {
        return view('landingpage::index');
    }
}
