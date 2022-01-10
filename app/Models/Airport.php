<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'code', 'city'
    ];

    public function departure()
    {
        return $this->belongsTo(Flight::class);
    }

    public function destination()
    {
        return $this->belongsTo(Flight::class);
    }

}
