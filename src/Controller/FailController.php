<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FailController extends AbstractController
{
  /** 
  * @Route("/fail", methods={"GET"}, name="fail") 
  */

  public function mysqli_query()
{










return $this->render('sio/fail.html.twig', array()); 


}
}