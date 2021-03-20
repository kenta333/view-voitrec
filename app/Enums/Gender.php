<?php

class Gender {
    
    const MALE = 1;

    const FEMALE = 2;
    

    
    private $list = [
        self::MALE      => "女性",
        self::FEMALE    => "男性",
    ];
   
    public static function enums() {
        return $list;
    }
    
}


