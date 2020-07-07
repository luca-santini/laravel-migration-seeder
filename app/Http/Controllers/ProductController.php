<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
       $all_products = Product::all();
       $data = [
            'lista_prodotti' => $all_products
        ];
        return view('products', $data);
    }
}
