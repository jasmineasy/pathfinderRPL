<?php

namespace App\Http\Controllers;

use App\Models\magang;
use Illuminate\Http\Request;

class magangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        if(strlen($katakunci)){
            $data = magang::where('id_internship','like',"%$katakunci%")
                    ->orwhere('perusahaan','like',"%$katakunci%")
                    ->orwhere('role','like',"%$katakunci%")
                    ->orwhere('durasi','like',"%$katakunci%")
                    ->orwhere('lokasi','like',"%$katakunci%")
                    ->orwhere('stream','like',"%$katakunci%")
                    ->get();
        } else {
            $data = magang::orderBy('id_internship','asc')->get();

        }
        return view('index_internship')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_internship');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session()->flash('id_internship',$request->id_internship);
        Session()->flash('perusahaan',$request->perusahaan);
        Session()->flash('role',$request->role);
        Session()->flash('durasi',$request->durasi);
        Session()->flash('lokasi',$request->lokasi);
        Session()->flash('stream',$request->stream);


        $request->validate([
            'id_internship'=>'required|numeric|unique:intern,id_internship',
            'perusahaan'=>'required',
            'role'=>'required',
            'durasi'=>'required',
            'lokasi'=>'required',
            'stream'=>'required',
    ],[
        'id_internship.required'=>'ID wajib diisi',
        'id_internship.numeric'=>'ID wajib diisi dalam angka',
        'id_internship.unique'=>'ID yang diisikan sudah ada dalam database',
        'perusahaan.required'=>'perusahaan wajib diisi',
        'role.required'=>'role wajib diisi',
        'durasi.required'=>'durasi wajib diisi',
        'lokasi.required'=>'lokasi wajib diisi',
        'stream.required'=>'stream wajib diisi',
    ]);

        $data = [
            'id_internship'=>$request->id_internship,
            'perusahaan'=>$request->perusahaan,
            'role'=>$request->role,
            'durasi'=>$request->durasi,
            'lokasi'=>$request->lokasi,
            'stream'=>$request->stream,
        ];

        magang::create($data);
        return redirect()->to('magang')->with('success','Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = magang::where('id_internship',$id)->first();
        return view('edit_internship')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'perusahaan'=>'required',
            'role'=>'required',
            'durasi'=>'required',
            'lokasi'=>'required',
            'stream'=>'required',
        ],[
            'perusahaan.required'=>'perusahaan course diisi',
            'durasi.required'=>'durasi wajib diisi',
            'role.required'=>'role wajib diisi',
            'lokasi.required'=>'lokasi wajib diisi',
            'stream.required'=>'stream wajib diisi',
        ]);
        
        $data = [
            'perusahaan'=>$request->perusahaan,
            'role'=>$request->role,
            'durasi'=>$request->durasi,
            'lokasi'=>$request->durasi,
            'stream'=>$request->stream,
        ];
        

        magang::where('id_internship',$id)->update($data);
        // DB::table('intern')->insert([$data]);
        return redirect()->to('magang')->with('success','Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        magang::where('id_internship',$id)->delete();
        return redirect()->to('magang')->with('success', 'Berhasil melakukan delete data');
    }
}
