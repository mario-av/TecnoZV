<?php

namespace App\Http\Controllers;
// Similar to Java package

use Illuminate\Http\Request;
use Illuminate\View\View;
// Similar to Java import

class firstcontroller extends Controller {
    // Controller class inherits from Controller base class

    /*
    public function firstMethod() {
        return view('welcome');
    }

    function secondMethod() {
        return view('welcome');
    }    
    */

    function heredia(): View{
       return view("template.heredia");
    }

    function index(): View{
        $hora = request()->hora;
        $parametros = [];
        $parametros["hora"] = $hora;
        if($hora != null){
            $parametros["segundos"] = 0;
        }
        return view("template.base", $parametros);
    }
public function dashboard()
{
    return view('template.dashboard');
}



}



