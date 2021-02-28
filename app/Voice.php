<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voice extends Model
{
        protected $fillable = [
        'title', 'content','file'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
