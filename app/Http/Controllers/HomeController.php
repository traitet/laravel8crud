<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index(){return view('welcome');}

public function product($productid){
    echo 'Product ID: '.$productid;
}

}
