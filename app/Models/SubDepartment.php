<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubDepartment extends Model
{
    use HasFactory;

    public function Tests()
    {
        return $this->hasMany(Test::class);
    }

    public function dept()
    {
        return $this->belongsTo(Department::class);
    }
}
