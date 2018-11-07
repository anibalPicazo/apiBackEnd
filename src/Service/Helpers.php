<?php
namespace App\Service;

use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

class Helpers
{
  public $manager;
  public function __construct($manager)
  {
      $this->manager = $manager;
  }

  public function json($data)
  {
    $normalizers = array(new ObjectNormalizer());
    $encoders = array(new JsonEncoder());

    $serializer = new Serializer($normalizers, $encoders);
    $json = $serializer->serialize($data, 'json');

    $response = new \Symfony\Component\HttpFoundation\Response();
    $response->setContent($json);
    $response->headers->set('Content-Type', 'application/json');

    return $response;
  }
}