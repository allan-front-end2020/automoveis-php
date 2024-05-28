<?php
namespace App\Http;

use App\Http\Request;
use  \Closure;
use Exception;

class Router {

private  $url = '';
 
private $prefix = '';

private $routes = [] ;

private $request = [] ;



public function __construct($url){ 
    $this->request = new Request();
    $this->url= $url;
    $this->prefix = '/crud';

}
/**
 * Método Responsável por define o prefixo das rotas
 */
public function setPrefix() {
    //Informações da URL atual 
    $parseUrl = parse_url($this->url);
    $this->prefix = $parseUrl['path'] ? : '';
}

/**
 * Método Responsável por add  uma rota na classe
 * @param string $method
 * @param string $route
 * @param array $params
 */
private function addRoute($method, $route, $params=[]) {
    //VALIDAÇÃO DO PARAMENTROS

    foreach($params as $key => $value){
        if ($value instanceof Closure){
            $params['controller'] = $value;
            unset($params[$key]);
            continue;
        }
    } 

    //PADRÃO DE VALIDAÇÃO DA URL
    $patternRoute = '/^'.str_replace( '/', '\/', $route). '$/';


    //ADICIONA  A ROTA DENTRO DA  CLASSE
    $this->routes[$patternRoute][$method] = $params;
}

/**
 * Método Responsável por define uma rota de GET
 */
public function get($route, $params = []) {
   return $this->addRoute('GET', $route, $params);

}


public function getRoute(){
    
}

/**
 * Método Responsável por executar a rota atual
 */
public function run() {
  try{
     $route = $this->getRoute();
  }catch(Exception $e){
    return new Response( $e->getCode(), $e->getMessage() );

  }

 }
 




}



?>