<?php
namespace app\controller\pages;
use \App\Utils\view;
class home{
    /**
 * metodo responsavel por retornar o conteudo (view) da nossa home
 * @return string
 */
    public static function getHome(){
        return view::render('pages/home');
    }
} 

?>