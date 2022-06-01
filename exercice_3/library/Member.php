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
        $return = $login == $this->login && $password == $this->password;

        if (!$return){
            require_once __DIR__ . "/AuthFailException.php";
            throw new AuthFailException("Authentification failed !");
        }
        return true;
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
