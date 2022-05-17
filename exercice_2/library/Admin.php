<?php

require_once "Level.php";

class Admin extends Member{
    
    protected static int $cpt = 0;
    // enum level{ case ADMIN, case SUPERADMIN}
    public function __construct(protected string $login, 
                                protected string $password, 
                                public ?int $age = null,
                                private Level $level = Level::ADMIN)
    {
        parent::__construct($login,$password,$age);
    }
    public function auth(string $login, string $password): bool{

        if ( parent::auth($login,$password)
        || Level::SUPERADMIN == $this->level){
            return true;
        }
        return false;
    }
}