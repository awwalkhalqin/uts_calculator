<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(Request $request) 
    {
        $oprasi = $request->input('operasi');
        $jari = $request->input('jari');
        $tinggi = $request->input('tinggi');
        $phi = 3.14;
        $bola = 3/4;
        $kerucut = 1/3;
        $volume = 0;
    
        if ($oprasi == 'tabung') {
          $volume = $phi * $jari * $jari * $tinggi;
        }elseif ($opt == 'bola') {
         $volume = $bola * $jari * $jari *$jari *$phi; 
        }elseif ($opt == 'kerucut') {
          $volume = $kerucut * $jari * $jari *$phi *$tinggi ;
        }else {
          $volume = 0;
        }
        
        return redirect('/')->with('info', 'volumenya ' . $volume);
    }

}
