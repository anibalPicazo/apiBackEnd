<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Video;
use App\Entity\Comment;
use App\Service\Helpers;



use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\Response;




class BackEndController extends Controller
{
    
    public function index()
    {   
        $helpers = $this->get( Helpers::class);

        $em= $this ->getDoctrine()-> getManager();
        //Cargamos el Repo
        $user_repo = $this-> getDoctrine() -> getRepository(User::class);
        //Obtenemos un array de tareas
        $users = $user_repo -> findAll();
        
        $data = array(
            'status'=> 'error',
            'code'=> 400,
            'msg'=>'usuario no existente'
          );
        
        

          return  $helpers->json($users);
  
        
        
        /*
        return $this->render('back_end/index.html.twig', [
            'controller_name' => 'BackEndController',
            'users' => $users
        ]);
        */

            
    }

     public function loginUsuario(){

        $helpers = $this -> get(Helpers::class);
        echo "hola caracola";
        die();
     }


    
}

