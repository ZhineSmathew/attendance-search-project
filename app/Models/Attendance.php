<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public function internalUser()
    {
        return $this->belongsTo(InternalUser::class);
    }
    public function externalUser()
    {
        return $this->belongsTo(ExternalUser::class);
    }
}
