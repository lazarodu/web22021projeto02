<?php
class Inicio
{
  public function controller()
  {
    $inicio = new Template("restrict/view/inicio.html");
    $inicio->set("nome", "Lázaro");
    $retorno["msg"] = $inicio->saida();
    return $retorno;
  }
}
