<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /** @use HasFactory<\Database\Factories\TeamFactory> */
    use HasFactory;
    public static array $majors = [
        'Finance',
        'Marketing',
        'Sales',
        'HR',
        'Engineering',
        'Auto Repair Technician',
        'Auto Body Technician',
    ];
}
