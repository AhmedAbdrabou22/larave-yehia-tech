<?php

namespace App\Http\Controllers;

use App\Models\Companys;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $data = Companys::all();
        return view('companies.index', ['companies' => $data]);
    }

    public function show($id)
    {
        $company = Companys::find($id);
        return view('companies.show', ['company' => $company]);
    }

    public function create()
    {
        Companys::create([
            'name' => "Master Vision",
            "desc" => "SoftWare Company",
            "numEm" => 3,
        ]);
    }
}
