<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use App\Providers\Serie;

class Episodio extends Model
{
    public $timestamps = \false;
    protected $fillable = ['temporada', 'numero', 'assistido'];

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
}
