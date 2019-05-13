<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AppointmentPaper extends Model
{
    protected $table = "AppointmentPaper";
    const CREATED_AT = "CreatedAt";
    const UPDATED_AT = "UpdatedAt";
}
