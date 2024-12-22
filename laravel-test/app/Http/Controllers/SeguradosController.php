<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SeguradosController extends Controller
{
public function index(){
    return Segurados::with('enderecos')->get();
}

public function create(){

}

public function store(Request $request){
    DB::beginTransaction();
}


}
