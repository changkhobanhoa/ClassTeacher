<?php

namespace App\Http\Controllers;

use App\Models\Lophoc;
use App\Models\LophocUser;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        if (!Auth::check()) {
            return view('student.home');
        }
        $id = Auth::id();

        $type = RoleUser::where('user_id', $id)->first();
        $use = User::find($id);
        if (empty($type)) {

            $use->role()->attach(1);
        }
        $type = RoleUser::where('user_id', $id)->first();
        if ($type->role_id == 3) {
            return redirect('admin');
        } else if ($type->role_id == 2) {
              return redirect()->route('teacher.lophoc.index');
        } else if ($type->role_id == 1) {
            return redirect('student');
        }
    }
    public function view()
    {
        if(Auth::check()){
            $d=LophocUser::where('sv_id',Auth::id())->get();
            return view('student.lophoc.index',['data'=>$d  ]);
        }else{
            return redirect()->route('login');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function create(Request $req)
    {
        if (Auth::check()) {
            $lop = Lophoc::where('code', $req->code)->first();
          
            if (!empty($lop)) {
                $l = LophocUser::where('lophoc_id', $lop->id)->update(['sv_id' => Auth::id()]);
                return redirect()->route('student.view')->with('success', 'Thêm lớp thành công');
            } else {
                return redirect()->route('student.view')->with('error', 'Sai mã lớp');
            }
        } else {
            return redirect('login')->with('error', 'Bạn chưa đăng nhập');
        }
    }
}
