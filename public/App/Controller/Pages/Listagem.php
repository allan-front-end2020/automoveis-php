<?php

namespace App\model\Entity;
namespace App\Controller\Pages;
use \App\Utils\View;
use App\model\Entity\Carro;

require __DIR__ . './vendor/autoload.php';

  class  Listagem  extends Page {

    /**
     * Metodo responsável  por retornar o conteudo (view) Listagem
     * @return string
     */
    public static function getListagem() {
      
      $carro = new Carro;
      die("   aqui");
        $carro->id;

        var_dump($carro);
    
        $content  = View::render('pages/listagem',[
           'name' => 'Tabela de listagem',
         ]);
         return parent::getPage('Crud - Automóveis', $content);
    }
  }



?>