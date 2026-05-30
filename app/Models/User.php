<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'adresse',
        'contact_nom',
        'contact_phone',
        'domaine',
        'statut',
        'rgpd_consent',
    ];

    protected $casts = [
        'date_inscription' => 'datetime',
        'rgpd_consent'     => 'boolean',
    ];

    public $timestamps = false;
}
