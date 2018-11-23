<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\User;
use App\Entity\Video;
use App\Entity\Comment;
use App\Service\Helpers;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Validator\Constraints as Assert;

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
             $emailContraint= new Assert\Email();
             $emailContraint -> message= "This email is not valid";
             $validate_email = $this-> get("validator") -> validate ($email,$emailContraint);
            if( count($validate_email)==0 && $password != null){

                echo "Data success";



            }else {
                echo "data incorrect";
            }
             
         }else{
             echo("Introduzca el email y la contraseña");
         }
         die();
     }


    
}

