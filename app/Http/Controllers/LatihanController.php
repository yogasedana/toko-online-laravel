<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index()
    {
        return "Helo World dari Controller";
    }

    public function blog($id)
    {
        return "Helo World dengan no. ID " . $id;
    }

    public function komentar($idblog, $idkomentar)
    {
        echo 'Id Blog ' . $idblog;
        echo '<br/>';
        echo 'Id Komentar ' . $idkomentar;
    }

    public function beranda()
    {
        $data = array(
            'nama' => 'Gde Yoga Hary Sedana',
        );
        return view('beranda', $data);
    }
}
