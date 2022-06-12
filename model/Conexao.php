<?php 
     class Conexao{

        static function conectar(){
            
            //conexao BD Arthur
            //$con = new PDO("mysql:host=localhost; port=3306; dbname=resgateReciclavel","root","Cereja10");

            //conexao BD Deivid
            $con = new PDO("mysql:host=localhost; port=3306; dbname=resgateReciclavel","root","");
            
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $resultado = $con;

            return $con;
            
        }    
     }
?>