<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        return view('frontend.home');
    }

    public function About()
    {
        return view('frontend.about');
    }

    public function Services()
    {
        return view('frontend.services');
    }

    public function Gallery()
    {
        return view('frontend.gallery');
    }

    public function Team()
    {
        return view('frontend.team');
    }

    public function Contact()
    {
        return view('frontend.contact');
    }
}
