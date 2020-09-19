<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
  public function tabung (Request $request)
  {
      $jari = $request->input('jari');
      $tinggi = $request->input('tinggi');
      $phi = 3.14;
      $result= $phi * $jari * $tinggi;        
      
      return redirect('/tabung')->with('hasil','Volume Tabung adalah: ' . $result);       
  }

  public function bola(Request $request) 
  {
      $jari = $request->input('jari');       
      $phi = 3.14;

      $result = 4/3 * $phi * $jari * $jari * $finger;
      
      return redirect('/bola')->with('hasil','Volume Bola adalah: ' . $result);       

  }

  public function kerucut(Request $request)
  {
      $phi = 3.14;
      $jari = $request->input('jari');
      $tinggi = $request->input('tinggi');

      $result = 1/3 * $phi * $jari * $jari * $tinggi;

      return redirect('/kerucut')->with('hasil','Volume Kerucut adalah: ' . $result);
  }

}
