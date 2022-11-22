<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddLopRequest;
use App\Models\Lophoc;
use App\Models\LophocUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Toastr;

class TeacherController extends Controller
{
    //
    public function index(){
        $data=Lophoc::all();
        return view('teacher.lophoc.index',['data'=>$data]);
    }
    public function view(){
        return view('teacher.lophoc.create');
    }
    public function create(){
        return view('teacher.lophoc.create');
    }
    public function store(AddLopRequest $req){
        $data=Lophoc::create([
            'name'=>$req->name,
            'soluong'=>$req->soluong,
            'code'=>$req->code,
            'ngaythi'=>$req->ngaythi,
        ]);
        $data=Lophoc::orderBy('id', 'desc')->first();
        LophocUser::create([
            'lophoc_id'=>$data->id,
            'giaovien_id'=>Auth::id(),
        ]);
        // toastr()->success('Data has been saved successfully!');

        return redirect()->route('teacher.lophoc.index')->with('success','Thêm lớp thành công');
    }
    public function chitietsv(Request $req,$id){
          $data=  LophocUser::where('lophoc_id',$id)->get();
            return view('teacher.lophoc.chitietsv',['data'=>$data]);
    }
}
