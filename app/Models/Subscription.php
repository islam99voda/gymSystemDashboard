<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    public function players(){
        return $this->belongsToMany(Player::class,'player_subscription_offer');
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
