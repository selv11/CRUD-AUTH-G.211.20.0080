<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Post;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view ('mahasiswa');
    }
    public function create()
    {
        return view('mahasiswa.create');
    }
    public function store(Request $request)
    {
       //echo "<pre>";
       $data=$request->all();
       unset($data['_token']);
       $nim=@$request->nim;

       if($model=Mahasiswa::find($nim)) {
            $data['updated_at']=date("Y-m-d H:i:s");
            $model->update($data);
       } else
            {
                $model=new Mahasiswa();
                $data['created_at']=date("Y-m-d H:i:s");
                $data['updated_at']=date("Y-m-d H:i:s");
                $model->insert($data);
            }
        return redirect('create')->with('status', 'Berhasil di Simpan');
    }

    public function delete(Request $request)
    {
        $nim=$request->nim;
        $model=Mahasiswa::find($nim);
        $model->delete();
        $data=Mahasiswa::all();
        return view('mahasiswa.read', ['datanya'=>$data]);
    }
    public function edit(Request $request)
    {
        $nim=$request->nim;
        $data=Mahasiswa::find($nim);
        return view('mahasiswa.edit', ['datanya'=>$data]);
    }
    public function read()
    {
        $model=new Mahasiswa;
        $data=$model->all();
        return view('mahasiswa.read', ['datanya'=>$data]);
    }
}
