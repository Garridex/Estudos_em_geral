<?php

namespace App\Utils;





class View{
 /**
       * @param string
       * @return string
       * */  
private static function getContenteview($view){
     
      $file = __DIR__.'/../../resources/view/' .$view. '.html';
      return file_exists($file) ? file_get_contents($file): '';
}

/** 
 * método responsavel por retornar o conteudo renderizado de uma view
 * @param string
 * @return string
*/

   
    public static function render($view){
        //conteudo da view
        $contentView = self::getContenteview($view);
       //retorna o conteudo renderizado
        return $contentView;
    }

}