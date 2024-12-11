<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Models\Catalog;

class PortfolioController extends Controller
{
    public function getPhotos($catalog=null)
    {
        if ($catalog) {
            $photos = Photo::where("catalog", $catalog)->get();
        }
        else {
            $photos = Photo::all();
        }
        $cats = Catalog::all();

        return view('portfolio', compact('photos', 'cats', 'catalog'));
    }
}
