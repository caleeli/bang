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
        'name'
    ];
    /**
     * Lista de jugadores
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    /*public function players()
    {
        return $this->hasManyThrough(User::class, Player::class, 'match_id',
                'id', $this->getKeyName(), 'user_id');
    }*/

    /**
     * Lista de jugadores
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function players()
    {
        return $this->belongsToMany(User::class, 'players');
    }
}
