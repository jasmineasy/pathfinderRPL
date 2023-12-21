<?php

namespace App\Http\Controllers;

use App\Models\career;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // * COURSE FINDER
    public function showCourseFinder()
    {
        return view('index');

    }
    public function createCourseFinder()
    {
        return view('create');
    }

    // * CAREER PATH
    public function showCareerPath()
    {
        $careers = Career::all();

        return view('Adminn.adminCareerPath', compact('careers'));
    }

    public function createCareerPath()
    {
        return view('Adminn.careerPathCreate');
    }

    public function createKarir(Request $request)
    {
        $idKarir = $request->input('idKarir');
        $stream = $request->input('stream');
        $namaKarir = $request->input('namaKarir');
        $level1 = $request->input('level1');
        $level2 = $request->input('level2');
        $level3 = $request->input('level3');
        $level4 = $request->input('level4');
        $level5 = $request->input('level5');
        // Validasi data jika diperlukan

        // Simpan data anggota ke dalam database
        $member = new career();
        $member->idKarir = $idKarir;
        $member->stream = $stream;
        $member->namaKarir = $namaKarir;
        $member->level1 = $level1;
        $member->level2 = $level2;
        $member->level3 = $level3;
        $member->level4 = $level4;
        $member->level5 = $level5;
        $member->save();

        return redirect('/careerPathAdmin');


    }

    public function kontenKarir($namaKarir, $idKarir)
    {
        $careers = Career::all();
        return view('Adminn.CareerPathKonten', compact('careers', 'namaKarir', 'idKarir'));
    }

    public function deleteKarir($idKarir)
    {
        $careers = Career::where('idKarir', $idKarir);
        $careers->delete();

        return redirect('/careerPathAdmin');
    }

    public function editKarir($idKarir)
    {
        $careers = Career::all();
        return view('Adminn.careerPathEdit', compact('idKarir', 'careers'));
    }

    public function updateCareer(Request $request, $idKarir)
    {
        // Step 1: Retrieve the Record
        // $career = Career::find($idKarir);
        $career = Career::where('idKarir', $idKarir)->first();

        // Check if the record exists
        if (!$career) {
            return response()->json(['message' => 'Career not found'], 404);
        }

        // Step 2: Update the Record
        $career->update([
            'stream' => $request->input('stream'),
            'namaKarir' => $request->input('namaKarir'),
            'level1' => $request->input('level1'),
            'level2' => $request->input('level2'),
            'level3' => $request->input('level3'),
            'level4' => $request->input('level4'),
            'level5' => $request->input('level5')
        ]);

        // Optionally, you can also use individual setters
        // $career->column1 = $request->input('value1');
        // $career->column2 = $request->input('value2');
        // $career->save();

        // Redirect to the career path or return a response
        return redirect('/careerPathAdmin')->with('success', 'Career updated successfully');
    }

  
}
