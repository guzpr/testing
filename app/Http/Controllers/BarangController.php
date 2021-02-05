<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function getBarang(){
        return 'Ini dari controller barang';
    }

    public function getBarangById($id){
        return 'Ini barang dengan id '.$id;
    }

    public function returnView($id){
        $namaDepan = 'Putu';
        $namaBelakang = 'Bagus';
        $test = 'ea';
        return view('greetings',compact('namaDepan','namaBelakang','id'));
    }

    public function testBranch(){
        return 'ea';
    }
}
