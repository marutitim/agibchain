<?php

namespace App\Model;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'gender', 'registration', 'type', 'identity', 
        'registration', 'image_id', 'address_id', 'status', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function image(){
        return $this->belongsTo(File::class);
    }
    
    public function address(){
        return $this->belongsTo(Address::class);
    }
    
    public function wallet() {
        return $this->belongsTo(Wallet::class);
    }
    
    public function received() {
        return $this->morphMany(Transaction::class, 'to');
    }
    
    public function sent() {
        return $this->morphMany(Transaction::class, 'from');
    }
    
    public function shops() {
        return $this->hasMany(Shop::class);
    }
    
    public function isSuper() {
        return $this->type == -1;
    }
    
    public function isUser() {
        return $this->type == 0;
    }
    
    public function isAdmin() {
        return $this->type == 1;
    }
    public function isBusiness() {
        return $this->identity == 'business';
    }
}
