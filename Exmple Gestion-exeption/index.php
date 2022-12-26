<?php  
 try {
    constraction(4,2);  
  }  
  catch(Exception $e) {  
    echo "Message : " . $e->getMessage();  
  }    
  function constraction($a, $b) {
    if($b ==0) {  
      throw new Exception("Erreur division par zéro", -1);  
    }else{
      echo ($a+$b);
    } 
  }  
?>