<?php


namespace App\Http\Controllers;


use App\Models\MasterMateri;
use App\Models\UserMateri;

class MateriController extends Controller
{

    public function getAllMateri()
    {
        $allMateri = MasterMateri::getAllMateriList();

        return view('materi.all_materi', compact('allMateri'));
    }

    public function getMyMateri()
    {

        $myMateri = UserMateri::getMyMateriList();

        return view('materi.my_materi', compact('myMateri'));
    }
}
