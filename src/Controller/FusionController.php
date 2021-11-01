<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FusionController extends AbstractController
{
  /** 
  * @Route("/fusion", methods={"GET"}, name="fusion") 
  */


public function fusion(Request $request)
{
  
    $this->addFlash('success', 'Un test de flash message'); //le flash message !!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    return $this->render('sio/crash.html.twig', array());//séléctionné la vu twig    
}



}