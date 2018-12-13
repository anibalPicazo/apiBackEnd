<?php

namespace App\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
* @Route("/api")
*/
class PruebaController extends FOSRestController
{
    /**
     * @Rest\Get("/index")
     */
    public function index()
    {
        echo("hello funciona");
        die();
    }
}
