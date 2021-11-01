<?php

// src/Controller/LuckyController.php  

namespace App\Controller;  

use Symfony\Component\HttpFoundation\Response;  
use Symfony\Component\Routing\Annotation\Route;

class LuckyController 
{
  /** 
  * @Route("/lucky/number", methods={"GET"}, name="lucky_step_one") 
  */
  public function number() 
  {
    $row = 1;
    if (($handle = fopen('C:\Users\moi\Documents\Travail et projet\vetux-project\german-data.csv', 'r')) !== FALSE) { 
        while (($data = fgetcsv($handle, 3000, ",")) !== FALSE) {
            $num = count($data);
            echo "<p> $num fields in line $row: <br /></p>\n";
            $row++;
            for ($c=0; $c < $num; $c++) {
                echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}
  }
} 