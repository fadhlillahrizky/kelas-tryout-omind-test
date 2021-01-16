<?php


namespace App\Http\Controllers;


use App\Models\MasterMateri;
use App\Models\UserMateri;
use Illuminate\Http\Request;

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

    public function addMateri(Request $request)
    {

        $insert = [
            'title' => $request->title,
            'type' => $request->type,
            'description' => $request->description
        ];

        UserMateri::insert($insert);
        return redirect()->back()->with('add-materi', '.');
    }
}
