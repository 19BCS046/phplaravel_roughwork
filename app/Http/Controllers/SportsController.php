<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportsController extends Controller
{
    public function cricket(){
        return "<h1>Cricket is a Funny game</h1>";
    }
    public function football(){
        return "<h1>Football is a running game</h1>";
    }
    public function luckyNumber($ln){
        return "<h1> $ln is a Lucky Number </h1>";
    }
    public function sss($num){
        if($num==1)
        return "<h1>Cricket</h1>";
        if($num==2)
        return "<h1>Football</h1>";
    }
}
