<?php

namespace App\Http\Controllers;
use App\Models\Package;
use App\Models\Review;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        $packages = Package::all();
        return view('home', compact("packages"));
    }

}
