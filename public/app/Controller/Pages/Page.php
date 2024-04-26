<?php

 namespace  App\Controller\Pages ;

 use \App\Utils\View;
  class Page {

      
    /**
     * Metodo responsável  por retornar o conteudo (view) Listagem
     * @return string
     */
    public static function getPage($title, $content) {
    
         return View::render('pages/page',[

          'title' => $title,
          'content'=>$content
       
         ]);
    }
  }



?>