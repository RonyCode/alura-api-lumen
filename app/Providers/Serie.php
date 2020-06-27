<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use App\Providers\Episodio;

class Serie extends Model
{
    public $timestamps = \false;
    protected $fillable = ['nome'];

    public function episodio()
    {
        return $this->hasMany(Episodio::class);
    }
}
