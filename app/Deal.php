<?php

namespace App;
use App\Car;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $guarded = [];

    public function cars()
    {
        return $this->belongsToMany(Car::class);
    }
}
