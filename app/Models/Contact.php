<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    use HasFactory;
    public string $fullname;
//    protected function casts()
//    {
//        return[
//            $this->fullname => $this->firstname.' '.$this->lastname
//        ];
//    }
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
    ];
}
