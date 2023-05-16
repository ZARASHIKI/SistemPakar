<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class pakarcontroller extends Controller
{
    function index(){
        return view("home");
    }
    function konsul(){
        $users = DB::table('tb_gejala')
            ->whereNotIn('id_gejala', function ($query) {
            $query->select('id_gejala')
            ->from('tb_pertanyaan');
    })
    ->get();
        return view("konsul",compact('users'));
    }
}
