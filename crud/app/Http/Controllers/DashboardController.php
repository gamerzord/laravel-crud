<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;

class DashboardController extends Controller
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

    public function register(){
        return view('dashboard.register');
    }

    public function showLogin(){
        return view('dashboard.login');
    }
}
