<?php

namespace App\Http;

class Request {

    // Requisição da  página    
    private $httpMethod;

    // Uri da página
    private $uri;

    // Parâmetros da URL ($_GET);
    private $queryParams =[];

    // Parâmetros da URL ($_POST);
    private $postVars =[];
 
    // Parâmetros da URL ($_POST);
    private $headers =[];
 
    public function __construct() {
        $this->queryParams = $_GET ?? [];
        $this->postVars = $_POST ?? [];
        $this->headers = getallheaders();
        $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri = $_SERVER['REQUEST_URI'] ?? '';
    }
    
    /**
     * Método responsavel por retornar o método HTTP da requisição
     * @return string
     */
    public function getHttpMethod() {
        return $this->httpMethod;
    }
     
    /**
     * Método responsavel por retornar a URI da requisição
     * @return string
     */
    public function getUri() {
        return $this->uri;
    
    }

    /**
     * Método responsavel por retornar os headers da requisição
     * @return array
     */
    public function getHeaders() {
        return $this->headers;
    
    }

     /**
     * Método responsavel por retornar  os parâmetros URL na requisição
     * @return array
     */
    public function getQueryParams() {
        return $this->queryParams;
    
    }

    /**
     * Método responsavel por retornar as vaariavés  do POST darequisição
     * @return array
     */
    public function getPostVars() {
        return $this->postVars;
    
    }
    
   
   
    
}





?>