<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jiri extends Model
{
    use HasFactory;

    protected function casts()
    {
        return[
            'starting_at' => 'date:Y-m-d H:i',
        ];
    }

    protected $fillable = [
        'name',
        'starting_at',
        ];
}

