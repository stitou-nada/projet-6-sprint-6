<?php  
  try {
    division(4,2);  
  }  
  catch(Exception $e) {  
    echo "Message : " . $e->getMessage();  
  }   
  function division($a, $b) {
    if($b ==0) {  
      throw new Exception("Erreur division par zéro", -1);  
    }else{
       throw new Exception($a/$b);
    } 
  }  
?>