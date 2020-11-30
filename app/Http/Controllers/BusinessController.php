<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessController extends Controller
{

    function business (){
        return view ("business.business");
    }
    function home (){
        return view ("business.home");
    }

    function about (){
        return view ("business.about");
    }

    function products (){
        return view ("business.products");
    }

    function store (){
        return view ("business.store");
    }
    
    function layout (){
        return view ("business.layout");
    }
    
}
