<?php

class Application{

/*

@return type
Responsável em carregar a classe controladora
das paginas que estamos visualizando;

*/

  public function executar(){
    $url = isset($_GET['url'])? explode('/',$_GET['url'])[0] : 'Home';
    $url = ucfirst($url);
    $url.="Controllers";

    if(file_exists("Controllers/{$url}.php")){
      $className = "Controllers\\{$url}";
      echo "Estou carregando a classe:{$url}";
      $controler = new $className();
      $controler->executar();
    }else{
      die('Não existe esse controller!');
    }
  }
}



?> 