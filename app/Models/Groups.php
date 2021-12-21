<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = [
        'name', 'description',
    ];
=======
    protected $guarded = ['name', 'total_users_join', 'total_users_leave'];
>>>>>>> 258b9b588e4772ae96b21cb936ab4ca13eb24c2b

    public function friends()
    {
        return $this->hasMany(Friends::class);
    }

    public function riwayats()
    {
        return $this->hasMany(Riwayat::class);
    }
}
