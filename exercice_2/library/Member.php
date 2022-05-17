<?php

class Member{

    protected static int $cpt = 0;

    function __construct(protected string $login, 
                         protected string $password, 
                         public ?int $age = null)
    {
        static::$cpt++;
    }

    public function auth(string $login, string $password): bool{
        if ($login == $this->login && $password == $this->password){
            return true;
        }
        return false;
    }

    function __destruct()
    {
        static::$cpt--;
    }
    public static function count() : int
    {
        return static::$cpt;
    }
}
