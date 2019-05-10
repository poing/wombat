<?php

namespace Poing\Wombat;

class API
{
    public $user, $pass;
  
    public function __construct($u = null, $p = null)
    {
        $this->user = $u;
        $this->pass = $p;
    }

    public function foo()
    {
        return $this->pass;
    }
}