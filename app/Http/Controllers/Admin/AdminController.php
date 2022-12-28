<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Product;
use App\Models\Logo;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $clients=Client::all();
        $products=Product::all();
        $solt=Product::whereSolt('true')->get();
        $breack=Product::whereCheck('false')->get();
        return view('admin.dashboard.dashboard', compact('clients', 'products', 'solt', 'breack'));
    }
    
    
     public function logo1()
    {
        $logos=Logo::whereStatus(1)->get();
        return view('admin.layouts.sidebar', compact('logos'));
    }
    
      public function logo2()
    {
        $logos=Logo::whereStatus(1)->first();
        return view('admin.layouts.admin', compact('logos'));
    }
    
     public function logo3()
    {
        $logos=Logo::whereStatus(1)->first();
        return view('components.application-logo', compact('logos'));
    }

}
