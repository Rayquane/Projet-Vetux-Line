<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TriController extends AbstractController
{
/** 
  * @Route("/tri", methods={"GET"}, name="tri") 
  */
  public function Entrelace(Request $request){

    if($choixMelange === "Entrelacé"){
            
        $logueurMax = 0;
        if(count($tab1)>count($tab2)){
            $logueurMax = count($tab1);
        }
        else{
            $logueurMax = count($tab2);
        }

        for($i=0; $i<$logueurMax; $i++){
            if($i < count($tab1)){
                $tab3[] = $tab1[$i]; 
            }
            if($i < count($tab2)){
                $tab3[] = $tab2[$i]; 
            }
        }

    }
    else{
        return $this->redirectToRoute('crash');
    } 
  }

    
  public function Sequentiel (Request $request){
    if($choixMelange === "Séquentiel"){
        for($i=0;$i<count($tab1);$i++){
            $tab3[] = $tab1[$i];
        }
        for($i=0;$i<count($tab2);$i++){
            $tab3[] = $tab2[$i];
        }
    }
    else{
        return $this->redirectToRoute('crash');
    } 
    
  }

}

