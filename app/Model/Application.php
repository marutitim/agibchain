<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Application extends Model {
    
    protected $fillable = [
        'name', 'caption', 'key', 'secret', 'user_id', 'description'
    ];
    
    protected $hidden = [
        'secret',
    ];
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
