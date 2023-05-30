<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
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


    function simpan(Request $request)
    {
        $flexRadioDefault = $request->input('flexRadioDefault');
    
        if ($flexRadioDefault == '1') {
            $id_gejala = $request->input('id_table1');
            DB::table('tb_pertanyaan')->insert([
                'id_gejala' => $id_gejala
            ]);
        }
    
        return redirect('konsul');
    }
    
    function hapus_pertanyaan()
    {
        DB::table('tb_pertanyaan')->truncate();
        return redirect('konsul');
    }
}
