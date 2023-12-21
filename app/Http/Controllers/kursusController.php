<?php

namespace App\Http\Controllers;

use App\Models\kursus;
use Illuminate\Http\Request;

class kursusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        if(strlen($katakunci)){
            $data = kursus::where('id_course','like',"%$katakunci%")
                    ->orwhere('course_name','like',"%$katakunci%")
                    ->orwhere('durasi','like',"%$katakunci%")
                    ->orwhere('rating','like',"%$katakunci%")
                    ->orwhere('topik','like',"%$katakunci%")
                    ->get();
        } else {
            $data = kursus::orderBy('id_course','asc')->get();

        }
        
        return view('index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Session()->flash('id_course',$request->id_course);
        Session()->flash('course_name',$request->course_name);
        Session()->flash('durasi',$request->durasi);
        Session()->flash('rating',$request->rating);
        Session()->flash('topik',$request->topik);


        $request->validate([
            'id_course'=>'required|numeric|unique:kursus,id_course',
            'course_name'=>'required',
            'durasi'=>'required',
            'rating'=>'required',
            'topik'=>'required',
        ],[
            'id_course.required'=>'ID wajib diisi',
            'id_course.numeric'=>'ID wajib diisi dalam angka',
            'id_course.unique'=>'ID yang diisikan sudah ada dalam database',
            'course_name.required'=>'nama course diisi',
            'durasi.required'=>'durasi wajib diisi',
            'rating.required'=>'rating wajib diisi',
            'topik.required'=>'topik wajib diisi',
        ]);
        
        $data = [
            'id_course'=>$request->id_course,
            'course_name'=>$request->course_name,
            'durasi'=>$request->durasi,
            'rating'=>$request->rating,
            'topik'=>$request->topik,
        ];
        

        kursus::create($data);
        return redirect()->to('kursus')->with('success','Berhasil menambahkan data');
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
        $data = kursus::where('id_course',$id)->first();
        return view('edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'course_name'=>'required',
            'durasi'=>'required',
            'rating'=>'required',
            'topik'=>'required',
        ],[
            'course_name.required'=>'nama course diisi',
            'durasi.required'=>'durasi wajib diisi',
            'rating.required'=>'rating wajib diisi',
            'topik.required'=>'topik wajib diisi',
        ]);
        
        $data = [
            'course_name'=>$request->course_name,
            'durasi'=>$request->durasi,
            'rating'=>$request->rating,
            'topik'=>$request->topik,
        ];
        

        kursus::where('id_course',$id)->update($data);
        return redirect()->to('kursus')->with('success','Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        kursus::where('id_course',$id)->delete();
        return redirect()->to('kursus')->with('success','Berhasil melakukan delete data');
    }
}
