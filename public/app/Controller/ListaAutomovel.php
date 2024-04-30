<?php
namespace App\Controller;
use App\Utils\View;

use \App\Controller\Page;
use \App\Model\Carro;

  class  ListaAutomovel extends Page{

    /**
     * Metodo responsável  por retornar o conteudo (view) Listagem
     * @return string
     */
    public static function getListagem() {
      
        $carro = new Carro;
        var_dump($carro);
    
    
        $content  = View::render('pages/listagem',[
           'name' => 'Tabela de listagem',
         ]);
         return parent::getPage('Crud - Automóveis', $content);
    }
  }



?>