<?php
/**
 * Created by PhpStorm.
 * User: vova
 * Date: 12.11.13
 * Time: 20:58
 */

namespace Acme\MyCustomBundle\Controller;


use Acme\MyCustomBundle\Models\Post;
use Acme\MyCustomBundle\Models\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyController extends Controller
{
    public function indexAction($name)
    {
       $posts=array();
       for($i=0;$i<10;$i++){
           $posts[$i]=new Post("My Test Post{$i} Tittle","user{$i}","{$i}.11.2013","Post{$i} content");
       }
        return $this->render('AcmeMyCustomBundle:My:PostsList.html.twig',array('posts'=>$posts));
    }
    public function userAction($name)
    {
        $users=array();
        for($i=0;$i<10;$i++){
            $users[$i]=new User("nick{$i}","nick{$i}@example.com");
        }
        return $this->render('AcmeMyCustomBundle:My:PostsList.html.twig',array('users'=>$users));
    }
} 