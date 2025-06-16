<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InternalUser extends Model
{
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
