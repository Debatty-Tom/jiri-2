<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    use HasFactory;
    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => $attributes['firstname'].' '.$attributes['lastname']);
            }

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
