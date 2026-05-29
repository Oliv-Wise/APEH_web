<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admin';

    protected $fillable = [
        'username',
        'password_hash',
    ];

    protected $hidden = [
        'password_hash',
    ];

    /**
     * Laravel Auth utilise 'password' par défaut.
     * On mappe vers password_hash.
     */
    public function getAuthPassword(): string
    {
        return $this->password_hash;
    }
}
