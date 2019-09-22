<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.home');
    }

    /**
     * Show the about Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('home.about');
    }
    /**
     * Show the price  page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function product( $prod = '')
    {
        return view('home.product',['product'=>$prod]);
    }

    /**
     * Show the price  page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function price( $price = '')
    {
        return view('home.price',['price'=>$price]);
    }    /**
     * Show the resource page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function resource( $resc= '')
    {
        return view('home.resource',['resource'=>$resc]);
    }


}
