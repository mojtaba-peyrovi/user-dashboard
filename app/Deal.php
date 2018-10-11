<?php

namespace App;
use App\Car;
use App\Provider;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $guarded = [];

    public function cars()
    {
        return $this->belongsToMany(Car::class);
    }

    public function getClass()
    {
        if ($this->class == 1) {
            return '1';
        } elseif ($this->class == 2) {
            return '2+';
        }elseif ($this->class == 3) {
            return '2';
        }elseif ($this->class == 4) {
            return '3+';
        }elseif ($this->class == 5) {
            return '3';
        }else{
            return 'Unspecified';
        }
    }

    public function getGarage()
    {
        if ($this->dealerGarage == 1) {
            return 'Dealer';
        }else{
            return 'General';
        }
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    public function getLocation()
    {
        if ($this->bangkok == 1) {
            return 'Bangkok';
        }elseif($this->unCountry == 1){
            return 'upCountry';
        }
    }
}
