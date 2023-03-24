<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function Akademik ()
    {

          
        $payload['user'] = 'John Doe';        
        

        return view('Akademik',$payload);
    }
   
}
