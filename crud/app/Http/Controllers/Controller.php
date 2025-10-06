<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;

abstract class Controller
{
    public function create(){
        return view('dashboard.create');
    }
    
    public function index(){
        $products = Product::all();
        $users = User::all();
        return view('dashboard.index', [
            'products' => $products,
            'users' => $users
        ]);
    }
}
