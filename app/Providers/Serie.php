<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use App\Providers\Episodio;

class Serie extends Model
{
    public $timestamps = \false;
    protected $fillable = ['nome'];
    protected $appends = ['links'];

    public function episodio()
    {
        return $this->hasMany(Episodio::class);
    }

    public function getLinksAttribute(): array
    {
        return [
            'self' => '/api/series/' . $this->id,
            'episodios' => '/api/series/' . $this->id . '/episodios/',
        ];
    }
}
