<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function jiris(){
        return $this->hasMany(Jiri::class);
    }

    public function pastJiris()
    {
        return $this
            ->hasMany(Jiri::class)
            ->where('starting_at', '<', now())
            ->orderBy('starting_at', 'asc');
    }

    public function upcomingJiris()
    {
        return $this
            ->hasMany(Jiri::class)
            ->where('starting_at', '>=', now())
            ->orderBy('starting_at', 'desc');
    }

    public function contacts(){
        return $this->hasMany(Contact::class);
    }

    public function projects(){
        return $this->hasMany(Project::class);
    }
}

