<?php

namespace App\Model;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;

class File extends Model {
    
    protected $fillable = [
        'name', 'type', 'path', 'description', 'user_id'
        ];
    
    protected $hidden = [
        'type'
    ];
    
    protected $appends = ['link'];
    
    public function getLinkAttribute() {
        if ($this->type == 1) {
            return $this->path;
        }
        return asset(Storage::url($this->path));
    }
    
    public function attachable() {
        return $this->morphTo();
    }
}
