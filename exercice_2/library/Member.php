<?php
require_once 'AuthInterface.php';
require_once 'User.php';

class Member extends User implements AuthInterface{

    protected static int $cpt = 0;

    function __construct(string $name,
                         protected string $login, 
                         protected string $password, 
                         public ?int $age = null)
    {
        static::$cpt++;
        parent::__construct($name);
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

    public function __toString()
    {
        return sprintf("nom : %s, age : %d",$this->name, $this->age);
    }
}
