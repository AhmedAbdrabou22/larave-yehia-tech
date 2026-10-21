<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $data = Cars::cursorPaginate(10);
        return view('cars.index',["data"=>$data]);
    }

    public function create(){
        Cars::factory(100)->create();
    }
}
