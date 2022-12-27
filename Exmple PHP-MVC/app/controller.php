<?php

abstract class Controller {
    
  
    public function render(string $fichier, array $data = []) {
        extract($data);
        require_once(ROOT. 'views/'.strtolower(get_class($this)).'/'.$fichier.'.php');
        }
}

?>