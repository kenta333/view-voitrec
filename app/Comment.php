<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User; 
use App\Voice;

class Comment extends Model
{
           protected $fillable = [
         'content','voice_id'];
         
       public function user()
    {
        return $this->belongsTo(User::class);
    }
         
}
