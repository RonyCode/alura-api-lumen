<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use App\Providers\Serie;

class Episodio extends Model
{
    public $timestamps = \false;
    protected $fillable = ['temporada', 'numero', 'assistido', 'serie_id'];
    protected $appends = ['links'];
    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
    public function getAssistidoAttribute($assistido): bool
    {
        return $assistido;
    }

    public function getLinksAttribute(): array
    {
        return [
            'self' => '/api/episodios/' . $this->id,
            'serie' => '/api/series/' . $this->serie_id . '/episodios',
        ];
    }
}
