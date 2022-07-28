<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location_id',
        'status'
    ];
}
