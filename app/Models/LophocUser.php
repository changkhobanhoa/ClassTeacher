<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LophocUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'lophoc_id',
        'sv_id',
        'giaovien_id',
    ];
    public function getLop($id)
    {
        $d = Lophoc::find($id);
        return $d;
    }
    public function getGiaovien($id)
    {
        $d = User::find($id);
        return $d->name;
    }
    public function getStudent($id)
    {
        $d = User::find($id);
        return $d;
    }
}
