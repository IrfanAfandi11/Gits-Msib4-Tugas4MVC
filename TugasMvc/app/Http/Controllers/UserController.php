<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {

        $mhs['User'] = "Nama: Jesita Rainandra | Universitas Islam Sultan Agung";
        $mhs['Item'] = "Nama: Laela Nur Khafidoh  | Universitas Islam Sultan Agung";

        $mhs['modeluser'] = User::all();

        return view('index',$mhs);
    }
}
