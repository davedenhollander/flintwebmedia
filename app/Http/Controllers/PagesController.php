<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

    /**
     * Home route ('/') view
     *
     * @return mixed
     */
    public function home() {
        return view('pages.home');
    }

    public function portfolio() {
        return view('pages.portfolio');
    }

    public function over() {
        return view('pages.over');
    }

    public function contact() {
        return view('pages.contact');
    }
}
