<?php 

namespace App\Http;

class Response {

    private $httpCode = 200;

    private $headers = [];

    private $contentType = 'text/html';
     
    private $content;

    public function __construct($httpCode, $content, $contentType = 'text/html') {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->setContentType($contentType);
    }

    /**
     * Método responsável por alterar o content type do response
     * @return void
     */
    public function setContentType($contentType) {
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType); // Corrigido o parâmetro passado para a função addHeader
    }

    /**
     * Método responsável por adicionar um registro no cabeçalho de response
     * @return void
     */
    public function addHeader($key, $value) {
        $this->headers[$key] = $value;
    }

    /**
     * Método responsável por enviar os headers para o navegador
     * @return void
     */
    public function sendHeaders() {
        // STATUS
        http_response_code($this->httpCode);

        // ENVIAR HEADERS
        foreach ($this->headers as $key => $value) {
            header("$key: $value"); // Corrigido o envio dos headers
        }
    }

    /**
     * Método responsável por enviar a resposta ao usuário 
     * @return void
     */
    public function sendResponse() {
        $this->sendHeaders(); // Corrigido o nome da função chamada
        switch ($this->contentType) {
            case 'text/html':
                echo $this->content;
                exit;
        }
    }
}
