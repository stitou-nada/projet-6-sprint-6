<?php
define("ROOT",str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));



// explode kat 9asemlek lahasab paramtre lolania
 $params= explode("/",$_GET['q']);


// Si au moins 1 paramètre existe
if($params[0] != ""){

    // On sauvegarde le 1er paramètre dans $controller en mettant sa 1ère lettre en majuscule
  $controllerName = ucfirst($params[0]);
  
  $action = isset($params[1])? $params[1]: 'index';
   
  
  require_once(ROOT.'controllers/'.$controllerName .".php");


  
$controller = new $controllerName();

// if method exicte
if(method_exists($controller,$action)){
echo $controller->$action();


}
else{
    http_response_code(404);
    echo 'this method is not defind';
}

}
else {
  
}




