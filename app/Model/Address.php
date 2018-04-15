<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {
    
    protected $fillable = [
        'name', 'email', 'phone', 'room', 'building', 'street', 'town', 
        'county', 'country', 'post', 'latitude', 'longitude', 'website', 
        'description'
    ];
}
