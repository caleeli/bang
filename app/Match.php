<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 * @property User[] $players
 */
class Match extends Model
{

    protected $fillable = [
        'name', 'type'
    ];

    /**
     * Lista de jugadores
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function players()
    {
        return $this->belongsToMany(User::class, 'players')->withPivot(['id', 'team']);
    }
}
