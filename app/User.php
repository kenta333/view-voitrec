<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','old','gender','like','type','file',
    ];
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    // コンテンツメソッド
        public function voices()
    {
        return $this->hasMany(Voice::class);
    }
    
    // フォロー機能
    
     public function followings()
    {
        return $this->belongsToMany(User::class, 'user_follow', 'user_id', 'follow_id')->withTimestamps();
    }
    
    public function followers()
    {
        return $this->belongsToMany(User::class, 'user_follow', 'follow_id', 'user_id')->withTimestamps();
    }
    
    
    // コメント機能
    
       public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    // 中略

    /**
     * $userIdで指定されたユーザをフォローする。
     *
     * @param  int  $userId
     * @return bool
     */
    public function follow($userId)
    {
        // すでにフォローしているかの確認
        $exist = $this->is_following($userId);
        // 対象が自分自身かどうかの確認
        $its_me = $this->id == $userId;

        if ($exist || $its_me) {
            // すでにフォローしていれば何もしない
            return false;
        } else {
            // 未フォローであればフォローする
            $this->followings()->attach($userId);
            return true;
        }
    }

    /**
     * $userIdで指定されたユーザをアンフォローする。
     *
     * @param  int  $userId
     * @return bool
     */
    public function unfollow($userId)
    {
        // すでにフォローしているかの確認
        $exist = $this->is_following($userId);
        // 対象が自分自身かどうかの確認
        $its_me = $this->id == $userId;

        if ($exist && !$its_me) {
            // すでにフォローしていればフォローを外す
            $this->followings()->detach($userId);
            return true;
        } else {
            // 未フォローであれば何もしない
            return false;
        }
    }

    /**
     * 指定された $userIdのユーザをこのユーザがフォロー中であるか調べる。フォロー中ならtrueを返す。
     *
     * @param  int  $userId
     * @return bool
     */
    public function is_following($userId)
    {
        // フォロー中ユーザの中に $userIdのものが存在するか
        return $this->followings()->where('follow_id', $userId)->exists();
    }

// カウント機能について
     public function loadRelationshipCounts()
    {
        $this->loadCount(['followings', 'followers','m_requests']);
    }
    
    

    // -----------------------------------------------------------
    // ここから↓マッチング多対多の領域
    
    
    
    // マッチング機能の多対多定義
    // このユーザーがマッチング希望を出しているユーザー
        public function matchings()
    {
        return $this->belongsToMany(User::class, 'user_matching', 'user_id', 'matching_id')->withTimestamps();
    }
    
    // このユーザーをマッチング希望しているユーザー
     public function m_requests()
    {
        return $this->belongsToMany(User::class, 'user_matching', 'matching_id', 'user_id')->withTimestamps();
    }
    
    
    // マッチング希望の送信処理
    
     public function matching($userid)
        {
               $exist = $this->is_matching($userid);

            if ($exist) {
            // すでにマッチングしていれば何もしない
            return false;
        } else {
            
          $this->matchings()->attach($userid);
            return true;
        }
        }
        
        
    // マッチング受諾しない処理
    
        public function unmatching($userid)
    {
    
         $this->matchings()->detach($userid);
          return true;
          
       
 
        
    }
        
        
         public function is_matching($userid)
    {
        // マッチング希望中ユーザの中に $useridのものが存在するか
        return $this->matchings()->where('matching_id', $userid)->exists();
    }
    
          public function is_requests($id)
    {
        // マッチング希望中ユーザの中に $idのものが存在するか
        return  $this->m_requests()->where('matching_id', $id)->exists();
      
    }
    
    
    
    
    public function matching_already()
    {
        
             //ユーザがマッチング中のユーザを取得
        $userIds = $this->matchings()->pluck('users.id')->toArray();
       //相互マッチング中のユーザを取得
        $matching_each = $this->m_requests()->whereIn('users.id', $userIds)->pluck('users.id')->toArray();
       //相互マッチング中のユーザを返す
        return $matching_each;
    
    }
    
    // マッチングしているユーザーをリターンで返す
      public function is_matched($id)
    {
        // マッチング希望中ユーザの中に $useridのものが存在するか
        if($this->matchings()->where('matching_id', $id)->exists()){
            return $id;
        }
    }


}
