<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\User;
use App\Entity\Video;
use App\Entity\Comment;
use App\Service\Helpers;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    
    
     

     public function loginAction(Request $request){
   

         $helpers = $this->get( Helpers::class);
         $json = $request -> get("json",null);
         
         if($json != null)
         {
             //decodifica un json para poderlo utilizar.
             $params=  json_decode($json);
             $email = (isset($params -> email)) ? $params -> email:null;
             $password = (isset($params -> password)) ? $params -> password:null;
             var_dump($email);
             var_dump($password);
         }else{
             echo("Introduzca el email y la contraseña");
         }
         die();
     }


    
}

