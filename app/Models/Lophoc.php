<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lophoc extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'code',
      'soluong',
      'ngaythi',
  ];
    public function user()
    {
      return  $this->belongsToMany(User::class,'lophoc_users' );
    }
    public function getGiaoVien($id){
       $d= LophocUser::where('lophoc_id',$id)->first();
       $data=User::find($d->giaovien_id);
      return $data->name;
  }
   
}
