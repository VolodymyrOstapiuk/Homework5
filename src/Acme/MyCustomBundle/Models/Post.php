<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 12.11.13
 * Time: 21:18
 */

namespace Acme\MyBundle\Models;


class Post
{
    public $tittle;
    public $postBy;
    public $date;
    public $content;
    public function __construct($tittle,$postBy,$date,$content)
    {
        $this->tittle=$tittle;
        $this->postBy=$postBy;
        $this->content=$content;
        $this->date=$date;
    }
} 