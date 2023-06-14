<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursoController extends Controller
{
    public function index(){
        return"hola desde index";
    }


    public function par($num1){
       
        if ($num1%2  ==0) {
         echo"numero es par";
        }else{
         echo"el numero es impar";
        }
     }

public function primo($num1){
  $cont =0;
  for ($i=1; $i <= $num1; $i++) { 
       if($num1 % $i == 0){
        $cont++;
        echo $cont;
       }
  }

  if($cont > 2){
    echo"no es primo";
  }else{
   
    echo "el numero es primo";
  }


}


public function amigo($num1,$num2){
    $cont =0;
    for ($i=1; $i <= $num1; $i++) { 
        if($num1 % $i == 0){
         $cont++;
         
        }
   }
   $cont =0;
   $res =0;
   for ($i=1; $i <= $num2; $i++) { 
       if($num2% $i == 0){
        $cont++;
        $res = $i++;
       
       }
  }
  echo $res ;

  if ($sum1=$num1) {
    
  }


}


















/*

    public function primo($num1){

        $primo= true;
        if ($num1<2) {
            $primo = false;
          
        }else{
            for ($i=0; $i < $num1 ; $i++) { 
                if ($num1 % $i ===0) {
                    $primo = false;
                    break;
                }
            }
        }
        if ($primo) {
            echo "El número es primo";
        }else{
            echo "El número no es primo";
        }
        
    }





     public function amigo($num1,$num2){
            $suma = 0;
            for($i=1;$i<$num1;$i++){

                   if($num1%$i==0){

                   $suma=$suma+$i;
                   }
           }

           if($suma==$num2){
            $suma=0;
           for($i=1;$i<$num2;$i++){  
           if($num2%$i==0){
              $suma=$suma+$i;
           }
          }

        if($suma==$num1){
           echo 'Son Amigos';
        }else{
            echo 'No son Amigos';
        }
        }        
         else{
             echo 'No son Amigos';
        }
}
 
*/
}
