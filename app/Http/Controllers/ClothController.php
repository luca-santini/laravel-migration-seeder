<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClothModel;

class ClothController extends Controller
{
    public function index() {
       $all_clothes = ClothModel::all();
       $data = [
            'lista_vestiti' => $all_clothes
        ];
        return view('clothes', $data);
    }
}
