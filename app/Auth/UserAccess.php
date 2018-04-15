<?php

namespace App\Auth;

use App\Auth\Model\UserRole;

trait UserAccess {
    
    public function userRole() {
        return $this->hasOne(UserRole::class, 'user_id');
    }
    
    public function role(){
        return $this->userRole()->role();
    }
    
    public function features(){
        return $this->role()->features();
    }
    
    public function roleFeatures() {
        return $this->role()->roleFeatures();
    }
    
    public function userCan($feature) {
        foreach ($this->roleFeatures() as $rf) {
            if ($rf->feature->name== $feature && $rf->accept) {
                return TRUE;
            }
        }
        return FALSE;
    }
    
    public function userIs($role) {
        return str_slug($role) == str_slug($this->role()->name);
    }
}