<?php

class Application{

/*

@return type
Filtra primeiro nome da url;

*/

  public function executar(){
    $url = isset($_GET['url'])? explode('/',$_GET['url'])[0] : 'Home';
    $url = ucfirst($url);
    $url.="Controllers";
    if(file_exists('Controllers/'.$url.'.php')){
      echo 'estou carregando a classe:'.$url;
      $controler = new $url();
      $controler->executar();
    }else{
      die('Não existe esse controller!');
    }
  }
}
?>