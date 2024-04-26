<?php

 namespace  App\Controller\Pages ;

 use \App\Utils\View;
  class  Listagem  extends Page{

      
    /**
     * Metodo responsável  por retornar o conteudo (view) Listagem
     * @return string
     */
    public static function getListagem() {
    
        $content  = View::render('pages/listagem',[
           'name' => 'Listagem',
            'description' => 'zzzzzzzzzzzz'
         ]);
         return parent::getPage('xxxxxxxxxxxxx', $content);
    }
  }



?>