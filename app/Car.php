<?php

namespace App;
use App\Deal;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = [];

    public function deals()
    {
        return $this->belongsToMany(Deal::class);
    }

    public function carName()
    {
        return $this->year . '-'. $this->make . ' ' . $this->model;
    }
}
