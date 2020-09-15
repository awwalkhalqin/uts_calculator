<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RumusController extends Controller
{
    public function index(){
        $bangun = $request->input('bangun');
        $jari = $request->input('jari');
        $tinggi = $request->input('tinggi');
        $phi = 314/100;
        $volume = 0;
    }

    public function tabung(Request $request){
        if ($bangun == 'jari' && $bangun == 'tinggi'){
            $volume = $phi * $jari * $jari * $tinggi;
        } else {
            $volume = 0;
        }
        return redirect('/tabung')->with('info', 'Volumenya ' . $volume);
    }

    public function bola(Request $request){
        $bola = 3/4;

        if($bangun == 'jari'){
            $volume = $bola * $jari *$jari *$jari *$phi;
        }else {
            $volume = 0;
        }
        return redirect('/bola')->with('info', 'Volumenya ' . $volume);
    }

    public function kerucut(Request $request){
        $kerucut = 1/3;

        if($bangun == 'jari' && $bangun == 'tinggi'){
            $volume = $kerucut * $phi * $jari * $jari * $tinggi;
        }else {
            $volume = 0;
        }
        return redirect('/kerucut')->with('info', 'Volumenya ' . $volume);
    }
}
