<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 13.11.13
 * Time: 21:06
 */

namespace Acme\MyBundle\Models;


class User {
    public $nickname;
    public $email;
    public function __construct($nickname,$email)
    {
        $this->nickname=$nickname;
        $this->email=$email;
    }
} 