<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'type', 'departure_id', 'destination_id', 'departure_time', 'arrival_time', 'airline_id'
    ];

    protected $dates = ['departure_time', 'arrival_time'];


    public function departure()
    {
        return $this->hasMany(Airport::class, 'departure_id');
    }

    public function destination()
    {
        return $this->hasMany(Airport::class, 'destination_id');
    }

    public function airline()
    {
        return $this->hasMany(Airline::class, 'airline_id');
    }
}
