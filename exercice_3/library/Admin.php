<?php
namespace Exercices;
require_once __DIR__."/Level.php";
require_once __DIR__."/Member.php";

class Admin extends Member{
    
    protected static int $cpt = 0;
    // enum level{ case ADMIN, case SUPERADMIN}
    public function __construct(string $nom,
                                protected string $login, 
                                protected string $password, 
                                public ?int $age = null,
                                private Level $level = Level::ADMIN)
    {
        parent::__construct($login,$password,$age);
    }
    public function auth(string $login, string $password): bool{

      
        return Level::SUPERADMIN == $this->level || parent::auth($login,$password);
        
    }
    public function __toString()
    {
        $parent = parent::__toString();
        if($this->level == Level::SUPERADMIN){
            return sprintf("%s is a superadmin", $parent);
        }
        return $parent;
    }
}