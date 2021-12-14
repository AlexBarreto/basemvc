<?php
/*
MVC

M = Model
V = View
C = Controler

/contato
Contato controller => Controlador geral. Podemos executar o modelo e a view.
Contato View => Responsavel por rendenrizar a página
Contato Model => Onde tem todsa as funções necessárias
*/

$autoload = function($class){
  include($class.'.php');
};

spl_autoload_register($autoload);

$app = new Application();

$app -> executar();


?>