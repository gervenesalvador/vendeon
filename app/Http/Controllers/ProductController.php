<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    	return view('admin.products.index');
    }

    public function view($id = null) 
    {
    	return view('admin.products.view');
    }

    public function create()
    {
    	return view('admin.products.create');
    }
}
