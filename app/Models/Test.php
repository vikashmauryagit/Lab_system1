<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    public function subDep()
    {
        return $this->belongsTo(SubDepartment::class);
    }
    public function center1() {
      
        return $this->belongsTo(Center::class);
        
    }
}
