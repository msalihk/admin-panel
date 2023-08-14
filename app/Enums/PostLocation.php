<?php

namespace App\Enums;

enum PostLocation: int {
    case NORMAL = 0;
    case MANSET = 1;
    case SAG_MANSET = 2;

    public function getMaxNumber()
    {
        return match($this){
            self::MANSET => 20,
            self::SAG_MANSET => 4,
            self::NORMAL => 0
        };
    }
}
