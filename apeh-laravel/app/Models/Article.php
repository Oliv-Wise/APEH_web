<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'titre',
        'contenu',
        'image',
        'date_publication',
    ];

    protected $casts = [
        'date_publication' => 'datetime',
    ];

    // Utilise date_publication comme timestamp de création
    public function getCreatedAtColumn(): string
    {
        return 'date_publication';
    }

    public $timestamps = false;

    /**
     * Extrait un résumé du contenu (150 premiers caractères).
     */
    public function getExcerptAttribute(): string
    {
        return mb_strimwidth(strip_tags($this->contenu), 0, 150, '…');
    }
}
