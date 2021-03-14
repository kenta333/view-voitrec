<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voice extends Model
{
        protected $fillable = [
        'title', 'content','file','youtube_url'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
       public function comments_voice()
    {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'desc');
    }
    
}
