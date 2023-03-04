<?php
    Class Rotas{

        public static $pag;

        static function get_siteHOME(){
            return Config::SITE_URL . "/" .Config::SITE_PASTA;
        }

        static function get_siteRAIZ(){
            return $_SERVER['DOCUMENT_ROOT'] . "/" .Config::SITE_PASTA;
        }

        static function get_siteTEMA(){
            return self::get_siteHOME(). "/" .self::$pasta_view;
        }

        static function pag_Carrinho(){
            return self::get_siteHOME(). "/carrinho";
        }



        Static function get_Pagina(){
            if(isset($_GET['pag'])){
                
                $pagina =  $_GET['pag'];

                self::$pag = explode ('/', $pagina);
                
                $pagina = 'controller/' .self::$pag[0] . '.php';

                    if(file_exists($pagina)){
                        include $pagina;
                    }
                    else{
                         include 'erro.php';
                    }
        }
    }
    }
?>