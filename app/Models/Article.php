<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public function users()
    {
        return $this -> hasMany(User::class);
    }

    public function useradmins()
    {
        return $this -> hasMany(UserAdmin::class);
    }
}
