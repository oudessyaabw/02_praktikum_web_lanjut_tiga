<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        echo "Halaman Home";
    }
    public function news($news = null)
    {
        if ($news === null) {
            echo "Halaman News";
        } else {
            echo "Halaman News dengan judul " . $news;
        }
    }
    public function about()
    {
        echo "Halaman About";
    }
}
