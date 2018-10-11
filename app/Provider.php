<?php

namespace App;
use App\Deal;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public function deals()
    {
        return $this->hasMany(Deal::class);
    }
}
