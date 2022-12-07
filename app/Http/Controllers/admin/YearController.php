<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

class YearController extends Controller
{ 
  public function index()
  {
    $year = 'year';
    return $year;
    // $year = year::all();
    // return view('year.index');
   }

  public function createyear() {
    // return view ( 'view' 'year.create'); 
    return 'crear anio';
  }
 
  public function store (Request $request)
    {
      return 'guardar';
      // year::create($request->only(key: 'year'));
      return redirect()->back();
    }
 }      
